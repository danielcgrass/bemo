<?php
  include("includes/config.php");
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");

  $account = new Account($con);

  include("includes/handlers/login-handler.php");
  echo $userLoggedIn;

?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu May 07 2020 15:36:46 GMT+0000 (Coordinated Universal Time)  -->
<html
  data-wf-page="5eb1ec581d06066019b13253"
  data-wf-site="5eb1b8941b62d5466be5acb1"
>
  <head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta content="Login" property="og:title" />
    <meta content="Login" property="twitter:title" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="css/webflow.css" rel="stylesheet" type="text/css" />
    <link href="css/bemo-mock.webflow.css" rel="stylesheet" type="text/css" />
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">
      !(function (o, c) {
        var n = c.documentElement,
          t = ' w-mod-';
        (n.className += t + 'js'),
          ('ontouchstart' in o ||
            (o.DocumentTouch && c instanceof DocumentTouch)) &&
            (n.className += t + 'touch');
      })(window, document);
    </script>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="images/webclip.png" rel="apple-touch-icon" />
  </head>
  <body class="body">
    <div class="div-block-5">
      <div class="div-block-6">
        <img
          src="images/bemo-logo2.png"
          srcset="
            images/bemo-logo2-p-500.png   500w,
            images/bemo-logo2-p-800.png   800w,
            images/bemo-logo2-p-1080.png 1080w,
            images/bemo-logo2.png        1398w
          "
          sizes="200px"
          alt=""
          class="image-6"
        />
      </div>
    </div>
    <div class="container w-container">
      <div class="w-form">
        <form
          id="email-form"
          name="email-form"
          data-name="Email Form"
          class="form"
          action="login.php"
          method="POST"
        >
          <label for="Username">Username</label>
          <input
            type="text"
            class="text-field-2 w-input"
            maxlength="256"
            name="loginUsername"
            data-name="loginUsername"
            placeholder="Username..."
            id="loginUsername"
          />
          <label for="Password">Password</label>
          <input
            type="password"
            class="text-field-3 w-input"
            maxlength="256"
            name="loginPassword"
            data-name="loginPassword"
            placeholder="Password..."
            id="loginPassword"
          />
          <input
            type="submit"
            value="Submit"
            name="submitMe"
            data-wait="Please wait..."
            class="submit-button w-button"
            id="loginButton"
          />
          <?php echo $account->getError(Constants::$loginFailed); ?>
        </form>

        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
    <div class="section-2">
      <div class="text-block-10">
        @2013-2016 BeMo Academic Consulting Inc. All rights reserved.
        <a
          href="http://cdainterview.com/disclaimer-privacy-policy.html"
          class="link-10"
          >Disclaimer &amp; Privacy Policy</a
        >
        <a href="mailto:info@bemoacademicconsulting.com" class="link-11"
          >Contact Us</a
        >
      </div>
    </div>
    <script
      src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5eb1b8941b62d5466be5acb1"
      type="text/javascript"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script src="js/webflow.js" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  </body>
</html>
