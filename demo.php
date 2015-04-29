<!doctype html>
<html>
<head>
	<title>Deception Records</title>
  <link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon'/ >

	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://apis.google.com/js/platform.js"></script>
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/TitilliumMaps.font.js"></script>

  <script src= "http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src= "js/bootstrap.js"></script>

  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href="css/bootstrap.css" rel = "stylesheet">
  <link href="css/demo.css" rel = "stylesheet">

  <meta charset="utf-8">
  <meta property="twitter:account_id" content="22611082" />
  <link rel="shortcut icon" href="images/favicon.ico" />
  <meta name="viewport" content="width=device-width,initial-scale=1">
  
  

</head>

<body>
  <div id="wrapper">

    <div class="break"></div>

    <div id="header">
      <p id="newsheader"><a href="index.html"><img src="images/DeceptionLogoImprint.png" style="float:left; " href=""></a></p>
      <div id="facebook"> 

        <a href="https://www.facebook.com/DeceptionRecords" target="_blank"><img src="http://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/F_icon.svg/2000px-F_icon.svg.png" /> </a>
      </div>

      <div id="twitter">
        <a href="https://twitter.com/deceptionrec" target="_blank"><img src="https://lh3.ggpht.com/lSLM0xhCA1RZOwaQcjhlwmsvaIQYaP3c5qbDKCgLALhydrgExnaSKZdGa8S3YtRuVA=w300" />
        </div>

        <div id="soundcloud">
          <a href="https://soundcloud.com/deceptionrecords" target="_blank"><img src="http://musically.com/wp-content/uploads/2011/06/Soundcloud.png"/> </a>
        </div>
      </div> <!-- eo header div -->

      <div id="nav-wrap">
        <div id="navMain">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!--<a class="navbar-brand">Deception</a>-->
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class=""><a href="index.php">HOME <span class="sr-only">(current)</span></a></li>
                  <li><a href="https://www.facebook.com/DeceptionRecords">MUSIC</a></li>
                  <li><a href="demo.php">DEMOS</a></li>
                  <li><a href="contact.php">CONTACT</a></li>  
                </ul>
              </div> <!-- eo bs-example-navbar-collapse-1 -->
            </div> <!-- eo navbar-header -->
          </div> <!-- eo container-fluid -->
        </nav> <!-- eo navbar navbar-default -->
      </div> <!-- eo navMain -->
    </div> <!-- eo nav-wrap -->

    <div class="break"></div>

    <div id="content">
      
      <section class="body">
        <div class="page section-fill">
          <div class="content">
            <a href="/"><img id="deception-logo" src="images/demos_pageLlogo.png"></a>
            <form action="/mail/submission.php" method="POST" class="validate">
              <div class="login-text">
                <h1>Demo Submission</h1>
                <p>Welcome to the Deception Demo Submission page. Please make sure to send us 1 - 2 of your best tracks instead of 20.</p>
                <p>We are only interested in orginal material, so please do not include any: Bootlegs, Mash-up or Remixes along with your submission. We do listen to all demos, but unfortunately we are unable to respond to everyone. </p>
              </div>
              <p class="field-row">
                <span class="field-group">
                  <label class="hidden" for="email">E-mail</label>
                  <input type="email" name="email" id="email" class="text required" required autocomplete="off" autocapitalize="off" placeholder="E-mail">
                </span>
                <span class="field-errors"></span>
              </p>
              <p class="field-row">
                <span class="field-group">
                  <label class="hidden" for="soundcloud_private_link">Soundcloud private url</label>
                  <input type="url" name="soundcloud_private_link" id="soundcloud_private_link" autocomplete="off" autocapitalize="off" class="text required soundcloud-url" placeholder="Soundcloud private url">
                </span>
                <span class="field-errors"></span>
              </p>
              <p class="field-row">
                <span class="field-group">
                  <label class="hidden" for="description">Message</label>
                  <textarea rows="5" name="description" id="description" maxlength="180" class="textarea" autocomplete="off" placeholder="Message"></textarea>
                </span>
                <span class="field-errors"></span>
              </p>
              <input type="submit" class="button" value="Submit">
            </form>
          </div>
        </div>
      </section>

    </div> <!-- eo content div-->

    <div id="footer-break"></div>

    <footer>
      <div id="footer-content">
        <!--<p>2015 Deception Records | Music Production. All Rights Reserved. &copy;</p>-->
      </div>
    </footer>
  </div> <!-- eo wrapper div -->

  <script>
  window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));

  window.fbAsyncInit = function() {
    FB.init({
      appId      : 'your-app-id',
      xfbml      : true,
      version    : 'v2.1'
    });
  };

  document.getElementById("footer-content").innerHTML = "<p>&copy;  " + new Date().getFullYear() + " Deception Records | All Rights Reserved.</p>";
  </script>

</body>
</html>