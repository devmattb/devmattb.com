<!-- Authentication -->
<?php require_once("../../php/authenticate.php") ?>

<!-- ADMIN ONLY PAGE! Extra Authentication -->
<?php require_once("../../php/authenticate-admin-only.php") ?>

<!-- PHP Lib -->
<?php require_once("../../php/functions.php"); ?>

<!-- NYTT INLÄGG SIDA-->
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
  <!-- Title SEO -->
  <title>IT Expert | Devmattb - Admin - Create New Account</title>

  <!-- Establish DB Connection: -->
  <?php $db = getDB(); ?>

  <!-- HEADER -->
  <?php require_once("../../includes/header.html") ?>

  <!-- CSS -->
  <link type="text/css" rel="stylesheet" href="../../css/stylesheet.css"/>
  <link type="text/css" rel="stylesheet" href="../../css/slider.css" />

  <!-- JS -->
  <script src="../../js/init.js" type="text/javascript"></script>

  <!-- Error Handling visualization -->
  <?php include("../../php/errors.php"); ?>
</head>

<body>

  <!-- Page Content -->
  <main>
    <div class="row">
      <div class="col s12">
      <br/><br/><br/><br/>
      <form action="../../php/new-account.php" method="post" enctype="multipart/form-data" class="col s10 offset-s1">
        <h4 style="margin-left: 10px;"> Create a new account to the administration system! </h4>
        <br/>

        <!-- Username: -->
        <div class="input-field col s12">
          <input name="username" placeholder="E.g. devMarcus" id="username" type="text">
          <label for="username">Username</label>
        </div>

        <!-- Pass1 -->
        <div class="input-field col s12">
          <input name="pass1" placeholder="Password..." id="pass1" type="password">
          <label for="pass1">Password</label>
        </div>

        <!-- Pass2 -->
        <div class="input-field col s12">
          <input name="pass2" placeholder="Repeat Password..." id="pass2" type="password">
          <label for="pass2">Repeat Password</label>
        </div>

        <!-- Full Name -->
        <div class="input-field col s12">
          <input name="fullName" placeholder="E.g. Marcus Manly" id="fullName" type="text">
          <label for="fullName">Full Name</label>
        </div>

        <!-- Email -->
        <div class="input-field col s12">
          <input class="validate" name="email" placeholder="E.g. marcus@devmattb.com" id="email" type="email">
          <label for="email">Email</label>
        </div>

        <p>
          <b style="font-weight:900;">Choose Account Type:</b> <br/><br/>
          There are two account types in the administration system:
          <ul class="browser-default">
            <li>Admin - Has access to the entire system. </li>
            <li>User - Only has access to Send Email/Manage Project, Case and Job Posts. </li>
          </ul>
        </p>

        <!-- Permission Title -->
        <div class="input-field col s12">
          <select name="permissionTitle">
            <option value="" disabled selected>Choose Account Type</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
          </select>
          <label>Account Type</label>
        </div>

        <div class="col s12">
          <button type="submit" class="btn webOrange"> Create Account! </button>
        </div>
      </form>

      <!-- Back to dashboard button -->
      <?php include("../../includes/backToDash.php"); ?>
    </div>
    </div>
  </main>
</body>

</html>
