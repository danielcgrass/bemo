<?php 
include("includes/config.php");
include("includes/handlers/processing.php");

if(isset($_SESSION['userLoggedIn'])){
  $userLoggedIn = $_SESSION['userLoggedIn'];
  echo $userLoggedIn . ", ";
}
else {
 header('Location: login.php');
}
?>
<!DOCTYPE html>
<!-- BUILT BY DANIEL C. GRASS -->
<!-- 05/07/2020 -->

<!-- ##### -->
<!-- # X # -->
<!-- ##### -->
<!--  ##   -->
<!-- ####  -->
<!--# ## # -->
<!--  ##   -->
<!-- X  X  -->
<html
  data-wf-page="5eb2e4a9da3d415ab7b81fb4"
  data-wf-site="5eb1b8941b62d5466be5acb1"
>
  <head>
    <meta charset="utf-8" />
    <title>BeMo - Contact-Us</title>
    <meta content="Contact Us" property="og:title" />
    <meta content="Contact Us" property="twitter:title" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />

    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />

    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="css/webflow.css" rel="stylesheet" type="text/css" />
    <link href="css/bemo-mock.webflow.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
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
  <body>
    <div
      data-collapse="medium"
      data-animation="default"
      data-duration="400"
      role="banner"
      class="navbar w-nav"
    >
      <div class="w-container">
        <a href="#" class="w-nav-brand"
          ><img
            src="images/bemo-logo2.png"
            width="170"
            height="100"
            srcset="
              images/bemo-logo2-p-500.png   500w,
              images/bemo-logo2-p-800.png   800w,
              images/bemo-logo2-p-1080.png 1080w,
              images/bemo-logo2.png        1398w
            "
            sizes="(max-width: 479px) 120px, 170px"
            alt=""
            class="image"
        /></a>
        <nav role="navigation" class="nav-menu w-nav-menu">
          <a href="index.php" class="nav-link w-nav-link">Main</a
          ><a
            href="contact-us.php"
            aria-current="page"
            class="nav-link-2 w-nav-link w--current"
            >Contact Us</a
          >
          <a onclick="logout()" class="nav-link-2 w-nav-link">Logout</a>
        </nav>
        <div class="w-nav-button">
          <div class="w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
    <img
      src="images/contact-us.png"
      srcset="
        images/contact-us-p-500.png   500w,
        images/contact-us-p-800.png   800w,
        images/contact-us-p-1080.png 1080w,
        images/contact-us.png        1200w
      "
      sizes="100vw"
      alt=""
      class="image-2"
    />
    <div class="div-block">
      <div class="text-block-9">
        <strong>BeMo Academic Consulting Inc. <br />”</strong><br /><strong
          >Toll Free</strong
        >: 1-855-900-BeMo (2366)<br />”<br /><strong>Email</strong>:
        info@bemoacademicconsulting.com
      </div>
      <div class="form-block-3 w-form">
        <form
          id="email-form"
          name="email-form"
          data-name="Email Form"
          class="form-3"
          action="processing.php"
          method="POST"
        >
          <label for="name" class="field-label-2">Name</label
          ><input
            type="text"
            class="text-field-4 w-input"
            maxlength="256"
            name="contactName"
            data-name="Name"
            placeholder="Enter your name..."
            id="contactName"
          /><label for="email" class="field-label">Email Address</label
          ><input
            type="email"
            class="text-field-5 w-input"
            maxlength="256"
            name="contactEmail"
            data-name="Email"
            placeholder="Enter your email address..."
            id="contactEmail"
            required=""
          /><label for="Textbox" class="field-label">How Can We Help You?</label
          ><textarea
            placeholder="Enter your message"
            maxlength="5000"
            id="contactField"
            name="contactField"
            class="textarea w-input"
          ></textarea
          ><input
            type="submit"
            value="Rest"
            data-wait="Please wait..."
            class="submit-button-4 w-button"
          /><input
            type="submit"
            value="Submit"
            data-wait="Please wait..."
            class="submit-button-3 w-button"
            name="button-send"
          />
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="text-block-5">
        <span class="text-span"
          ><br />@2013-2016 BeMo Academic Consulting Inc. All Rights
          reserved.</span
        >
        <a
          href="http://cdainterview.com/disclaimer-privacy-policy.html"
          class="link-8"
          >Disclaimer &amp; Privacy Policy</a
        >
        <a href="mailto:info@bemoacademicconsulting.com" class="link-9"
          >Contact Us</a
        >
      </div>
      <div class="div-block-8">
        <a href="https://twitter.com/BeMo_AC"
          ><img
            src="images/twitterBetter.png"
            width="25"
            alt=""
            class="image-9"
        /></a>
        <a href="https://www.facebook.com/bemoacademicconsulting"
          ><img
            src="images/facebookbetter.png"
            width="35"
            srcset="
              images/facebookbetter-p-500.png 500w,
              images/facebookbetter.png       640w
            "
            sizes="35px"
            alt=""
            class="image-8"
        /></a>
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
