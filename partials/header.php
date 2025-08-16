<?php
  include 'cookie-set-sigil.php';
  include 'filter-classes.php';

  $classesArr = [];
  // Type Casting
  // $htmlClass = (string) $someValue;
  $htmlClass = '';
  $bodyClass = '';
  // if ($showSigil == "unset") { $classesArr[] = 'modal-open'; }
  // if (!empty($filterClass)) { $classesArr[] = $filterClass; }
  if (!empty($filterClass)) { $htmlClass = $filterClass; }
  if ($showSigil == "unset") { $bodyClass = 'modal-open'; }

  // PHP 8+
  // $bodyClasses = implode(separator: ' ', array: $classes);
  // $bodyClasses = implode(' ', $classesArr);
?>

<!DOCTYPE html>
<html lang="en" class="<?php echo $htmlClass; ?>">
  <head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L1CLFXGLKZ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'placeholder');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?php echo $title; ?></title>
    <?php echo $description; ?>

    <meta name="language" content="en-us" />
    <meta name="author" content="KAFIRUN Band Web Master">
    <meta name="keywords" content="KAFIRUN, Kafirun Band, Canadian black metal, black metal, spiritual rebellion, individuality, dark metal, dissonant music, occult philosophy, left-hand path, personal truth, band gallery, music and merchandise, Bandcamp merch, live shows, concerts and gigs, discography, band philosophy, heavy metal, underground music, nonconformity, artistic journey">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta name="copyright" content="&copy;" />
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="10 days" />
    <meta name="classification" content="Music" />
    <meta name="Publisher" content="www.kafirun.ca" />
    <meta name="Distribution" content="Global" />

    <meta property="og:title" content="KAFIRUN Band | Official Site | Embrace the Descent into the Void." />
    <meta property="og:description" content="Descend into the void with KAFIRUN, the Canadian black metal band embracing spiritual rebellion and death worship. We push the boundaries of dark, dissonant, and occult-driven black metal, rejecting conformity in our quest for personal truth. Explore our gallery for unique band photos, stay connected with us on social media for the latest updates, and visit our Bandcamp page for music and merchandise. Reach out through our contact form to be the first to know about our new releases and upcoming events." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.kafirun.ca/" />
    <meta property="og:image" content="https://www.kafirun.ca/images/kafirun-band-social-card.jpg" />

    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="images/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="images/manifest.json">
    <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#2b3032">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="home" class="<?php echo $bodyClass; ?>">

    <?php
      // echo "<script>console.log('showSigil -- " . $showSigil . "  -- showSigilX -- " . $showSigilX . "' );</script>";
      echo "<script>
      console.log('bodyClass -- " . $bodyClass . "');
      console.log('htmlClass -- " . $htmlClass . "');
      </script>";

      if ($showSigil == "unset") {
        echo '<div id="overlay-div" class="modal">';
        echo '<div class="container">';
        echo '<img class="img-responsive center-block" src="images/kafirun-band-logo-new-version-september-2021-768-width.png" alt="Kafirun Logo">';
        echo '</div>';
        echo '</div>';
      }
    ?>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainmenu-mobile-navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand <?php echo $homeActive; ?>" href="/" title="KAFIRUN band official site home page. Embrace the descent into the void and find salvation through sin'">KAFIRUN</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="mainmenu-mobile-navigation">
          <ul class="nav navbar-nav">
              <li class="<?php echo $visionActive; ?>"><a href="vision.php" title="KAFIRUN band official about us and our philosophy page. Vision of spiritual rebellion.">VISION</a></li>
              <li class="<?php echo $bandActive; ?>"><a href="band.php" title="KAFIRUN band official band live and promotional photos page. Visual journey & discography.">BAND</a></li>
              <li class="<?php echo $eventsActive; ?>"><a href="events.php" title="KAFIRUN band official. Chronicles of upcoming concerts & events.">EVENTS</a></li>
              <li><a href="https://kafirun.bandcamp.com/merch" title="KAFIRUN band official web store to purchase band merhandise. Provided by bandcamp.com." target="_new">STORE</a></li>
              <li><a href="https://kafirun.bandcamp.com" title="KAFIRUN band official web store, listen our music, support the band. Provided by bandcamp.com." target="_new">BANDCAMP</a></li>
              <li><a href="https://www.facebook.com/pages/Kafirun/162223553976809" title="KAFIRUN band official Facebook fan page." target="_new">FACEBOOK</a></li>
              <li><a href="https://www.instagram.com/kafirun.band/" title="KAFIRUN band official Instagram fan page." target="_new">INSTAGRAM</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="#" data-toggle="modal" data-target="#contact-form-container">CONTACT</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->

    </nav>

    <!-- Modal -->
    <!-- <div id="contactForm" class="modal fade kafirun-form" role="dialog"> -->
    <div id="contact-form-container" class="modal fade kafirun-form" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">CONTACT</h4>
          </div>
          <div class="modal-body">

            <!-- Contact Section -->
            <section id="contact">
              <div>
                  <div class="row">
                      <div class="col-lg-12">
                          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                          <form name="sentMessage" id="contactForm" novalidate>
                              <div class="row control-group">
                                  <div class="form-group col-xs-12 floating-label-form-group controls">
                                      <label>Name</label>
                                      <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                      <p class="help-block text-danger"></p>
                                  </div>
                              </div>
                              <div class="row control-group">
                                  <div class="form-group col-xs-12 floating-label-form-group controls">
                                      <label>Email Address</label>
                                      <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                      <p class="help-block text-danger"></p>
                                  </div>
                              </div>
                              <div class="row control-group">
                                  <div class="form-group col-xs-12 floating-label-form-group controls">
                                      <label>Message</label>
                                      <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                      <p class="help-block text-danger"></p>
                                  </div>
                              </div>
                              <br>
                              <div id="success"></div>
                              <div class="row">
                                  <div class="form-group col-xs-12">
                                      <button type="submit" class="btn btn-lg">SUBMIT</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
            </section>
          </div>
        </div>

      </div>
    </div>
