<?php 
include("includes/config.php");

// session_destroy(); this code will logout a user

if(isset($_SESSION['userLoggedIn'])){
  $userLoggedIn = $_SESSION['userLoggedIn'];
  echo $userLoggedIn . ", ";
}
else {
 header('Location: login.php');
}
  
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu May 07 2020 15:36:46 GMT+0000 (Coordinated Universal Time)  -->
<html
  data-wf-page="5eb1b8941b62d522aee5acb2"
  data-wf-site="5eb1b8941b62d5466be5acb1"
>
  <head>
    <meta charset="utf-8" />
    <title>BeMo Mock</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />

    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
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
          <a
            href="index.php"
            aria-current="page"
            class="nav-link w-nav-link w--current"
            >Main</a
          >
          <a href="contact-us.php" class="nav-link-2 w-nav-link">Contact Us</a>
          <a onclick="logout()" class="nav-link-2 w-nav-link">Logout</a>
        </nav>
        <div class="w-nav-button">
          <div class="icon w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
    <img
      src="images/cda-interview-guide.jpg"
      srcset="
        images/cda-interview-guide-p-800.jpeg   800w,
        images/cda-interview-guide-p-1080.jpeg 1080w,
        images/cda-interview-guide.jpg         1200w
      "
      sizes="100vw"
      alt=""
      class="image-2"
    />
    <div class="div-block">
      <div class="text-block-2">CDA Interview Guide</div>
    </div>
    <div class="div-block-7">
      <div class="text-block-6">Control Panel</div>
      <div class="form-block-2 w-form">
        <form
          id="wf-form-Email-Form"
          name="wf-form-Email-Form"
          data-name="Email Form"
          class="form-2"
        >
          <div class="text-block-7">Search Engine Visibility</div>
          <label onclick="visible()" class="w-radio"
            ><input
              type="radio"
              data-name="Radio"
              id="radio-2"
              name="radio"
              value="Radio 2"
              class="w-form-formradioinput radio-button-2 w-radio-input"
            /><span class="radio-button-label-2 w-form-label"
              >Page Visible</span
            ></label
          >
          <label onclick="invisible()" class="w-radio"
            ><input
              type="radio"
              data-name="Radio"
              id="radio"
              name="radio"
              value="Radio"
              class="w-form-formradioinput radio-button w-radio-input"
            /><span class="radio-button-label w-form-label"
              >Page Invisible</span
            ></label
          >
        </form>

        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
      <div class="form-block-4 w-form">
        <form
          id="email-form"
          name="email-form"
          data-name="Email Form"
          class="form-4"
        >
          <select
            id="Change-Headers"
            name="Change-Headers"
            data-name="Change Headers"
            class="w-select"
            ><option value="">Header 1</option
            ><option value="First">Header 2</option
            ><option value="Second">Header 3</option></select
          ><select
            id="Font-Family"
            name="Font-Family"
            data-name="Font Family"
            class="w-select"
            ><option value="">Helvetica</option
            ><option value="First">Arial</option
            ><option value="Second">Sans-Serif</option></select
          ><select
            id="Font-Size"
            name="Font-Size"
            data-name="Font Size"
            class="w-select"
            ><option value="">Font: 5px</option
            ><option value="First">Font Size: 12px</option
            ><option value="Second">Font Size: 20px</option
            ><option value="Third">Font Size: 25px;</option></select
          >
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
    <div class="text-block-4">
      <strong class="bold-text"
        >Ultimate Guide to CDA Structure Interview: Tips &amp; Proven Strategies
        to Help You Prepare &amp; Ace Your CDA Interview</strong
      ><br /><br /><strong>Overview:</strong><br /><br />The purpose of the
      dental school interview<br />History and rationale of the CDA Interview<br />Types
      of Questions<br />The Seven Competencies<br />Structure of the CDA
      interview<br /><a
        href="http://cdainterview.com/how-to-prepare-for-cda-interview.html"
        class="link"
        >How to Prepare for your CDA Interview</a
      ><br /><a
        href="http://cdainterview.com/sample-cda-interview-questions.html"
        class="link-2"
        >Sample CDA interview questions</a
      ><br /><a
        href="https://bemoacademicconsulting.com/Dental-School-Interview-Preparation.html"
        class="link-3"
        >BeMo CDA-structured interview prep program</a
      ><br /><a href="#" class="link-4">Contact us<br /><br /></a
      ><strong>What is the purpose of the dental school interview?</strong>
      <br /><br />Regardless of the format of dental school interview (e.g. CDA
      structured interview, MMI, or Panel interview), the purpose of the
      interview is rather straightforward and remains constant across the board:
      to assess the personality and Non-Cognitive Skills (NCSs) of the
      candidate.<br /><br />What are NCSs? By these we mean the following:
      Communication skills, interpersonal skills, ethical and moral decision
      making capacity, maturity, professionalism, sense of social
      responsibility, service to community, leadership, initiative, scholarship,
      ability to collaborate with others, conflict resolution skills, etc.<br /><br />Research
      has shown that, although academic performance (i.e. GPA and DAT scores) is
      a great indicator of didactic abilities in the first and second years of
      dental school, it provides, however, a very poor predictive value when it
      comes to future clinical performance. In fact, research shows that, an
      effective interview process is the best indicator of future clinical
      performance in the upper years, as it gives insight into the
      characteristics of the candidate and whether or not there will be a
      likelihood of future behavioural problems (an issue that dental schools
      constantly encounter and struggle to overcome). For example, it has been
      shown that those candidates who are &quot;conscientious&quot; and
      &quot;open to new experiences&quot; perform more effectively in the third
      and fourth years of dental school studies, where the education takes place
      in a clinical setting for the most part.<br /><br />Thus, dental schools,
      much like other professional schools, have over the past decade spent a
      lot of resources to devise the most effective interview process that will
      give them insight into the NCSs of their future candidates. And of course,
      for Canadian dental schools the answer has been the Canadian Dental
      Association&#x27;s structured interview or CDA structured interviews.<br /><br /><strong
        >History, rationale, and the structure of the CDA interview<br /><br /></strong
      >Recall from our discussion above that we said an effective interview
      process is the most reliable way to select candidates who perform well
      clinically. Well in an attempt to test this theory, in 2004, Smithers et
      al. conducted a study, which produced results that were so shocking, that
      it unequivocally reinforced the Canadian Dental Association&#x27;s earlier
      decision to commission a &quot;new structured interview based on
      state-of-the-art contemporary interview techniques&quot; (i.e. CDA
      structured interview)<br /><br />What were these shocking results you may
      ask? The evidence gathered by Smithers et al. (2004) simply reinforced
      earlier suspicions about the ineffectiveness of traditional interview
      processes. They showed that, &quot;a typical [traditional] admissions
      interview was in fact worse than neutral in that it was negatively
      associated with students&#x27; performance in the first year of dental
      training, did not predict academic performance, and may have led to poor
      selection decisions.&quot; Thus, it should come as no surprise that the
      traditional panel interview has been replaced by most dental school with
      the CDA structured interview, which is a more reliable and valid future
      predictor of clinical performance.<br /><br />The CDA interview was not
      only re-structured in its format of delivery, but it was also restructured
      in terms of the type of questions that would be ask, and how they would be
      rated or scored by the interviewers. Let us first talk about the type of
      questions that you may encounter on your CDA structured interview.<br /><br /><strong
        >Types of Questions<br /><br /></strong
      >The types of questions that you may be asked during your dental school
      interview can be divided into two categories: (1) Situational Interview
      (SI) questions and (2) Patterned Behaviour Descriptive Interview (PBDI)
      questions. SI questions are those in which the candidates is placed in a
      hypothetical situations (i.e. vignette) and is asked what they would react
      in that given situation. For example,<br /><br />&quot;You are babysitting
      your sister’s young child, who is nervous and upset about his mother being
      away. You are trying to calm him down and offer him some ice cream. As you
      are dishing out the ice cream, the child bites down hard on your hand. How
      would you react?&quot;<br /><br />Conversely, PBDI type questions, ask the
      candidates &quot;about past behaviour with the assumption that past
      behaviour is the best predictor of future behaviour.&quot; An example of a
      PBDI type questions is:<br /><br />Many of us have had to deal with
      juggling busy schedules. Think of a time in the past when an important but
      unscheduled situation arose that required your attention, but you had a
      number of prior commitments on your agenda. What did you do? What was the
      outcome?<br /><br />Notice how SI questions are typically future-oriented,
      as opposed to PBDI questions, which are past-oriented. The specific and
      actual SI and PBDI questions are devised according to seven competencies,
      that the CDA has found to be reliable and valid indicators of future
      performance. In other words, every question that is asked during a dental
      school interview, regardless of being a SI or PBDI question, will address
      one or more than one of the seven competencies.<br /><br /><strong
        >The Seven Competencies<br /><br /></strong
      >1. Communication: does the applicant have excellent communication
      skills?<br />2. Conscientiousness: is the applicant thorough, careful to
      do tasks well?<br />3. Integrity : is the applicant honest with themselves
      and others?<br />4. Judgment and analysis: does the applicant have the
      capability to make sound judgments? Do they gather all the facts before
      making a decision?<br />5. self-control : Does the applicant remain calm
      and in control in difficult situations?<br />6. sensitivity to others :
      Does the applicant show empathy towards others? Do they take the feelings
      of others into consideration?<br />7. Tact and diplomacy : Does the
      applicant show sensitivity in dealing with difficult issues? Does the
      applicant possess the necessary skills to deal with others without causing
      negative feelings?<br /><strong><br /></strong>Notice in the above
      examples that the SI sample question is addressing the competencies of
      self-control, sensitivity to others, communication, while the PBDI
      question addresses the competencies of conscientiousness, Integrity, and
      judgement and analysis. In all of the questions that will be asked of you
      during your interview, the competency of communication is a constant that
      is continuously tested and retested. In order to be successful, however,
      you will have to be able to know which other competencies also apply to
      the question so that you can formulate an appropriate response, which
      touches on the key factors essential for the interviewers.<br /><br /><strong
        >Structure of the CDA interview<br /></strong
      ><br />The CDA structured interview is comprised of seven questions, one
      for each of the seven competencies described above. Each question, which
      can either be a SI or a PBDI type, is scored on a 5-point scale for a
      total and a maximum of 35 points by two interviewers who are either a pair
      of dentists, or senior dental students. The interview usually takes about
      20-30 minutes to be completed.<br /><br />Click
      <a
        href="http://cdainterview.com/how-to-prepare-for-cda-interview.html"
        class="link-5"
        >here</a
      >
      to learn how to prepare for your CDA interview<br /><br />Click
      <a
        href="http://cdainterview.com/sample-cda-interview-questions.html"
        class="link-6"
        >here</a
      >
      to practice with our sample CDA interview questions<br /><br />Click
      <a
        href="http://bemoacademicconsulting.com/Dental-School-Interview-Preparation.html"
        target="_blank"
        class="link-7"
        >here</a
      >
      to learn more about our money-back guarantee CDA interview preparation
      programs.<br /><br /><strong>Reference</strong>:<br /><br />Poole A.,
      Catano, VM., and Cunningham, DP. Predicting performance in Canadian dental
      schools: the new CDA structured interview, a new personality assessment,
      and the DAT. Journal of Dental Education. 2007; 71: 664 - 676.<br /><strong
        ><br />‍</strong
      ><br /><br />
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
        <a href="https://twitter.com/BeMo_AC"><img
          src="images/twitterBetter.png"
          width="25"
          alt=""
          class="image-9"
        /></a>
        
        <a href="https://www.facebook.com/bemoacademicconsulting"><img
          src="images/facebookbetter.png"
          width="35"
          srcset="
            images/facebookbetter-p-500.png 500w,
            images/facebookbetter.png       640w
          "
          sizes="(max-width: 767px) 26px, (max-width: 991px) 3vw, 26px"
          alt=""
          class="image-8"
        /></a>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
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
