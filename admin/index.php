<?php
  // The file below includes the PHP lib too.
  require_once("../php/functions.php");
  $db = getDB();
  session_start();
  // Make sure system is stable and CRYPT BLOWFISH is enabled.
  if (!(defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH)) {
    echo "WARNING: CRYPT_BLOWFISH is deactivated. Contact IT Support.";
  }
?>

<!-- Root adminAccounts -->
<?php include("../php/create-root-account.php") ?>

<?php
$username = null;
$password = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = 'SELECT * FROM adminAccounts WHERE username="'.$username.'"';

        $sql = $db->prepare($query);
        $sql->execute();
        $data = $sql->fetchAll();
        $id = "";
        $verified = false;
        foreach($data as $row) {
          $id = $row["id"];
          $passwordHash = $row["password"];
          // Check if the inputted password matches our DB hash:
          $verified = password_verify($password, $passwordHash);
        }

        // If the USER/PASS combo matched with a correct hash:
        if( $verified ) {
            $_SESSION["authenticated"] = $id;
            $_SESSION["error"] = 0;
            header('Location: /admin/dashboard');
        } else {
            $_SESSION["error"] = 1;
            header('Location: /admin/');
        }

    } else {
        header('Location: /admin/');
    }
} else {
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Title SEO -->
  <title>IT Expert | Devmattb - Admin Login </title>

  <!-- HEADER -->
  <?php require_once("../includes/header.html") ?>

  <!-- CSS -->
  <link type="text/css" rel="stylesheet" href="../css/stylesheet.css"/>

  <!-- JS -->
  <script src="../js/init.js" type="text/javascript"></script>

  <!-- Error Handling visualization -->
  <?php include("../php/errors.php"); ?>
</head>
<body>

<main>
  <!-- LOGIN FORM -->
  <div class="container row">
    <div style="margin-top: 30px;" class="col s12">

        <div class="col s12 m8 offset-m2 l6 offset-l3">
          <h4>Devmattb Admin Login</h4>
          <form method="post">
              <label for="username">Username:</label>
              <input id="username" name="username" type="text" required>
              <label for="password">Password:</label>
              <input id="password" name="password" type="password" required>
              <br/><br/>
              <input type="submit" value="Login" class="btn webOrange ">
          </form>
        </div>
    </div>
  </div>

</main>

</body>
</html>
<?php } ?>
