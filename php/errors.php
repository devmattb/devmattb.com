<?php
  // Start the session if it doesn't exist.
  if(session_id() == '' || !isset($_SESSION)) {
      // session isn't started
      session_start();
  }
?>

<script>
  // Adding styling and profile pic to all toasts!
  var toastHTML = '<img style="width: 50px; height:50px;" src="/img/profilepic.jpg" class="circle"/><span class="black-text hide-on-small-only" style="margin-left: 15px; font-weight: 300!important;">';
  var errorToastHTML = '<img style="width: 50px; height:50px; border: 1px solid #fff;" src="/img/profilepic.jpg" class="circle"/><span class="white-text hide-on-small-only" style="margin-left: 15px; font-weight: 300!important;">';
</script>

<!-- Error Handling visualization -->
  <?php
      if ( isset($_SESSION["error"]) ) {

        if ( $_SESSION["error"] == 0 ) {
  ?>
      <script>
          $(document).ready(function(){
            toastHTML +=
              `I've successfully logged you in!</span>`;
            M.toast({html: toastHTML, classes: 'white'}, 15000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 1 ) {
  ?>
      <script>
          $(document).ready(function(){
            errorToastHTML +=
              `I've failed to log you in. Please try again, or contact me so I can resolve this issue.</span>`;
            M.toast({html: errorToastHTML, classes: 'red'}, 25000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 2 ) {
  ?>
      <script>
          $(document).ready(function(){
            errorToastHTML +=
              `I've failed to publish the post. Please try again, or contact me so I can resolve this issue.</span>`;
            M.toast({html: errorToastHTML, classes: 'red'}, 25000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 3 ) {
  ?>
      <script>
          $(document).ready(function(){
            toastHTML +=
              `I've successfully created the post!</span>`;
            M.toast({html: toastHTML, classes: 'white'}, 15000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 4 ) {
  ?>
      <script>
          $(document).ready(function(){
            errorToastHTML +=
              `I've failed to delete the post. Please try again, or contact me so I can resolve this issue.</span>`;
            M.toast({html: errorToastHTML, classes: 'red'}, 25000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 5 ) {
  ?>
      <script>
          $(document).ready(function(){
            toastHTML +=
              `I've successfully deleted the post!</span>`;
            M.toast({html: toastHTML, classes: 'white'}, 15000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 6 ) {
  ?>
      <script>
          $(document).ready(function(){
            errorToastHTML +=
              `I've failed to create the account. Please try again, or contact me so I can resolve this issue.</span>`;
            M.toast({html: errorToastHTML, classes: 'red'}, 25000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 7 ) {
  ?>
      <script>
          $(document).ready(function(){
            toastHTML +=
              `I've successfully created the account!</span>`;
            M.toast({html: toastHTML, classes: 'white'}, 15000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 8 ) {
  ?>
      <script>
          $(document).ready(function(){
            errorToastHTML +=
              `I've failed to delete the account. Please try again, or contact me so I can resolve this issue.</span>`;
            M.toast({html: errorToastHTML, classes: 'red'}, 25000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 9 ) {
  ?>
      <script>
          $(document).ready(function(){
            toastHTML +=
              `I've successfully deleted the account!</span>`;
            M.toast({html: toastHTML, classes: 'white'}, 15000);
          });
      </script>
  <?php
      } else if ( $_SESSION["error"] == 10 ) {
  ?>
      <script>
          $(document).ready(function(){
            errorToastHTML +=
              `I'm sorry, I couldn't perform the correct action, you we're missing some details!</span>`;
            M.toast({html: errorToastHTML, classes: 'red'}, 25000);
          });
      </script>
  <?php
      } else if ( $_SESSION["error"] == 11 ) {
  ?>
      <script>
          $(document).ready(function(){
            errorToastHTML +=
              `I'm sorry, the passwords didn't match.</span>`;
            M.toast({html: errorToastHTML, classes: 'red'}, 25000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 12 ) {
    ?>
        <script>
            $(document).ready(function(){
              toastHTML +=
                `I've successfully published the job search!</span>`;
              M.toast({html: toastHTML, classes: 'white'}, 15000);
            });
        </script>
    <?php
        } else if ( $_SESSION["error"] == 13 ) {
    ?>
        <script>
            $(document).ready(function(){
              errorToastHTML +=
                `I've failed to delete the job search. Please try again, or contact me so I can resolve this issue.</span>`;
              M.toast({html: errorToastHTML, classes: 'red'}, 25000);
            });
        </script>
    <?php
        } else if ( $_SESSION["error"] == 14 ) {
    ?>
        <script>
            $(document).ready(function(){
              toastHTML +=
                `nav.phpfully deleted the job search!</span>`;
              M.toast({html: toastHTML, classes: 'white'}, 15000);
            });
        </script>
    <?php
  } else if ( $_SESSION["error"] == 15 ) {
    ?>
        <script>
            $(document).ready(function(){
              toastHTML +=
                `I successfully added the video to the post!</span>`;
              M.toast({html: toastHTML, classes: 'white'}, 15000);
            });
        </script>
  <?php
  } else if ( $_SESSION["error"] == 16 ) {
        ?>
            <script>
                $(document).ready(function(){
                  toastHTML +=
                    `I've received the job application. You'll hear from me soon!</span>`;
                  M.toast({html: toastHTML, classes: 'white'}, 15000);
                });
            </script>
  <?php
  } else if ( $_SESSION["error"] == 17 ) {
            ?>
            <script>
                $(document).ready(function(){
                  toastHTML +=
                    `Thank you for joining my newsletter! You'll hear from me soon!</span>`;
                  M.toast({html: toastHTML, classes: 'white'}, 15000);
                });
            </script>
  <?php
  } else if ( $_SESSION["error"] == 18 ) {
            ?>
            <script>
              $(document).ready(function(){
                errorToastHTML +=
                  `I'm sorry, I wasn't able to add you to the newsletter, you didn't fill out your email properly!</span>`;
                M.toast({html: errorToastHTML, classes: 'red'}, 25000);
              });
            </script>
  <?php
  } else if ( $_SESSION["error"] == 19 ) {
            ?>
    <script>
      $(document).ready(function(){
        errorToastHTML +=
          `I'm sorry, I wasn't able to add you to the newsletter, because you're already on it!</span>`;
        M.toast({html: errorToastHTML, classes: 'red'}, 25000);
      });
    </script>
  <?php
} else if ( $_SESSION["error"] == 20 ) {
              ?>
      <script>
        $(document).ready(function(){
          errorToastHTML +=
            `I'm sorry, I wasn't able to remove you from the newsletter, the link you followed was broken! Please try again, or contact me so I can resolve this issue. </span>`;
          M.toast({html: errorToastHTML, classes: 'red'}, 30000);
        });
      </script>
    <?php
  } else if ( $_SESSION["error"] == 21 ) {
    ?>
    <script>
      $(document).ready(function(){
        toastHTML +=
          `I've successfully removed you from the newsletter! </span>`;
        M.toast({html: toastHTML, classes: 'white'}, 20000);
      });
    </script>
  <?php
  } else if ( $_SESSION["error"] == 22 ) {
            ?>
    <script>
      $(document).ready(function(){
        errorToastHTML +=
          `I've failed to remove you from the newsletter. Please try again, or contact me so I can resolve this issue.</span>`;
        M.toast({html: errorToastHTML, classes: 'red'}, 25000);
      });
    </script>
  <?php
      }
    }
    unset($_SESSION["error"]); // Error has been displayed.
  ?>
