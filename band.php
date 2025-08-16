<?php
  $homeActive = '';
  $visionActive = '';
  $bandActive = 'active';
  $eventsActive = '';
  $title = 'KAFIRUN Band | Official Site | Band Picture Gallery | Visual Journey & Discography.';
  $description = '<meta name="description" content="Delve into the essence of KAFIRUN. Explore our gallery of powerful live performance photos, promotional shots, and individual band member portraits. Uncover our discography and head to our Bandcamp page to purchase our albums and releases as we push the boundaries of dark and dissonant black metal.">';
  // include 'header.php';
  include 'partials/header.php';
?>

<!-- PAGE CONTENT -->
<div id="main-container" class="container center-block">

  <div class="row">
    <div class="col-md-12 block-margin-bottom pleft pright">
      <img src="images/kafirun-band-logo-new-version-september-2021.png" class="band-logo center-block img-responsive" alt="KAFIRUN band new logo, september 2021">
    </div>
  </div>

    <!-- Include band gallery render file -->
  <?php
  $galleryJsonFile = './json-data/gallery-data.json';
  $columnsClass = 'col-xs-6 col-sm-3';
  include 'partials/band_gallery_render-html.php';
  ?>

  <!-- row 3 -->
  <div class="row">
    <div class="col-xs-4 col-sm-4 text-center block-margin-bottom">
        <img src="images/kafirun-band-img-1.png" class="img-responsive center-block member-img" alt="KAFIRUN band promo image thumb" data-toggle="modal" data-target="#row3-modal1" tabindex="0">
        <div id="row3-modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="KAFIRUN band promo photo large modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-content-cst">
              <button class="button modal-close-btn" data-dismiss="modal" aria-label="Close">X</button>
                <div class="modal-body text-center">
                    <img src="images/kafirun-band-img-1.png" class="img-responsive center-block" alt="KAFIRUN band promo photo large modal">
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-xs-4 col-sm-4 text-center block-margin-bottom">
        <img src="images/kafirun-band-img-2.png" class="img-responsive center-block member-img" alt="KAFIRUN band promo image thumb" data-toggle="modal" data-target="#row3-modal2" tabindex="0">
        <div id="row3-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="KAFIRUN band promo photo large modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-content-cst">
              <button class="button modal-close-btn" data-dismiss="modal" aria-label="Close">X</button>
                <div class="modal-body text-center">
                    <img src="images/kafirun-band-img-2.png" class="img-responsive center-block" alt="KAFIRUN band promo photo large modal">
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-xs-4 col-sm-4 text-center block-margin-bottom">
        <img src="images/kafirun-band-img-3.png" class="img-responsive center-block member-img" alt="KAFIRUN band promo image thumb" data-toggle="modal" data-target="#row3-modal3" tabindex="0">
        <div id="row3-modal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="KAFIRUN band promo photo large modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-content-cst">
              <button class="button modal-close-btn" data-dismiss="modal" aria-label="Close">X</button>
                <div class="modal-body text-center">
                    <img src="images/kafirun-band-img-3.png" class="img-responsive center-block" alt="KAFIRUN band promo photo large modal">
                </div>
            </div>
          </div>
        </div>
    </div>
  </div>

  <hr>

  <!-- row 4 -->
  <div class="row">
    <div class="col-xs-6 col-sm-3 col-md-3 text-center block-margin-bottom">
        <img src="images/kafirun-band-live-hanephi.jpg" class="img-responsive center-block member-img" alt="KAFIRUN band live Hanephi" data-toggle="modal" data-target="#row4-modal1" tabindex="0">
        <div id="row4-modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="KAFIRUN band promo photo" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-content-cst">
              <button class="button modal-close-btn" data-dismiss="modal" aria-label="Close">X</button>
                <div class="modal-body text-center">
                    <img src="images/kafirun-band-live-hanephi.jpg" class="img-responsive center-block" alt="KAFIRUN band live Hanephi">
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 text-center block-margin-bottom">
        <img src="images/kafirun-band-live-luzifaust.jpg" class="img-responsive center-block member-img" alt="KAFIRUN band live photo Luzifaust" data-toggle="modal" data-target="#row4-modal2" tabindex="0">
        <div id="row4-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="LuzifaustLiveImage" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-content-cst">
              <button class="button modal-close-btn" data-dismiss="modal" aria-label="Close">X</button>
                <div class="modal-body text-center">
                    <img src="images/kafirun-band-live-luzifaust.jpg" class="img-responsive center-block" alt="KAFIRUN band live photo Luzifaust">
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 text-center block-margin-bottom">
        <img src="images/kafirun-band-live-hypnocrotizer.jpg" class="img-responsive center-block member-img" alt="KAFIRUN band live photo Hypnocrotizer" data-toggle="modal" data-target="#row4-moda3" tabindex="0">
        <div id="row4-moda3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="HypnocrotizerLiveImage" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-content-cst">
              <button class="button modal-close-btn" data-dismiss="modal" aria-label="Close">X</button>
                <div class="modal-body text-center">
                    <img src="images/kafirun-band-live-hypnocrotizer.jpg" class="img-responsive center-block" alt="KAFIRUN band live photo Hypnocrotizer">
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 text-center block-margin-bottom">
        <img src="images/kafirun-band-live-mesmorphion.jpg" class="img-responsive center-block member-img" alt="KAFIRUN band live photo Mesmorphion" data-toggle="modal" data-target="#row4-modal4" tabindex="0">
        <div id="row4-modal4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="MesmorphionLiveImage" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-content-cst">
              <button class="button modal-close-btn" data-dismiss="modal" aria-label="Close">X</button>
                <div class="modal-body text-center">
                    <img src="images/kafirun-band-live-mesmorphion.jpg" class="img-responsive center-block" alt="KAFIRUN band live photo Mesmorphion">
                </div>
            </div>
          </div>
        </div>
    </div>
  </div>

  <!-- <hr>

  <div class="row">
    <div class="col-md-12 ">
      <h4 class="text-center">Hanephi, Luzifaust, Hypnocrotizer, Mesmorphion</h4>
    </div>
  </div> -->

  <hr>

  <div class="row">
    <div class="col-md-12">
      <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
      <div class="elfsight-app-7b630c1e-b6c9-4f81-bbfe-ca9be48f57a4" data-elfsight-app-lazy></div>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-md-12 text-center block-margin-bottom">
      <h1 class="kaf-theme-h1">RELEASES</h1>
    </div>
  </div>

  <div class="row">

    <div class="col-xs-12 col-sm-6 col-md-3 text-center">
      <div class="releases-info">
      <a href="https://kafirun.bandcamp.com/track/the-seed-the-serpent-the-scythe" target="_blank">
        <img src="images/KAFIRUN-theSeed-theSerpent-theScythe-small.jpg" class="img-responsive center-block" alt="KAFIRUN - The Seed, The Serpent, The Scythe single cover art small version">
      </a>
      <h5>The Seed, The Serpent, The Scythe <br> Single 2021</h5>
      <h5></h5>
      </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3 text-center">
      <div class="releases-info">
      <a href="https://kafirun.bandcamp.com/album/eschaton" target="_blank">
        <img src="images/kafirun-eschaton-cassette-cover-small.jpg" class="img-responsive center-block" alt="KAFIRUN Eschaton Full Length Cassette Debut Album">
      </a>
      <h5>Eschaton Full-Length Cassette 2019</h5>
      <h5>Clavis Secretorvm</h5>
      </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3 text-center">
      <div class="releases-info">
      <a href="https://kafirun.bandcamp.com/album/eschaton" target="_blank">
        <img src="images/kafirun-eschaton-vinyl-cover-small.jpg" class="img-responsive center-block" alt="KAFIRUN Eschaton Full Length Vinyl Debut Album Cover">
      </a>
      <h5>Eschaton Full-Length Vinyl 2019</h5>
      <h5>Clavis Secretorvm</h5>
      </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3 text-center">
      <div class="releases-info">
      <a href="https://kafirun.bandcamp.com/album/eschaton" target="_blank">
        <img src="images/full/kafirun-eschaton-album-cover.jpg" class="img-responsive center-block" alt="KAFIRUN Eschaton Full Length CD Debut Album Cover">
      </a>
      <h5>Eschaton Full-Length CD 2017</h5>
      <h5>Seance Records</h5>
      </div>
    </div>

  </div>

  <div class="row">

    <div class="col-xs-12 col-sm-6 col-md-3 text-center">
      <div class="releases-info">
      <a href="https://kafirun.bandcamp.com/album/the-worship-and-glorification-of-holy-death" target="_blank">
        <img src="images/kafirun-transilvania-split-7.jpg" class="img-responsive center-block" alt="KAFIRUN & Transilvania Split">
      </a>
      <h5>Kafirun/Transilvania Split 7'' - 2016</h5>
      <h5>Destruktion Records</h5>
      </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3 text-center">
      <div class="releases-info">
      <a href="https://kafirun.bandcamp.com/album/the-worship-and-glorification-of-holy-death" target="_blank">
        <img src="images/full/kafirun-the-worship-and-glorification-of-holy-death.jpg" class="img-responsive center-block" alt="KAFIRUN - The Worship and Glorification of Holy Death Re-issue Compilation Album Cover">
      </a>
      <h5>The Worship and Glorification of Holy Death Re-Issue - 2016</h5>
      <h5>Mara Records</h5>
      </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3 text-center">
      <div class="releases-info">
      <a href="https://kafirun.bandcamp.com/album/glorification-of-holy-death" target="_blank">
        <img src="images/kafirun-glorification-of-holy-death.jpg" class="img-responsive center-block" alt="KAFIRUN - Glorification of Holy Death EP Album Cover">
      </a>
      <h5>Glorification of Holy Death EP - 2015</h5>
      <h5>Self Released</h5>
      </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3 text-center">
      <div class="releases-info">
      <a href="https://kafirun.bandcamp.com/album/death-worship" target="_blank">
        <img src="images/kafirun-death-worship.jpg" class="img-responsive center-block" alt="KAFIRUN - Death Worship EP Album Cover">
      </a>
      <h5>Death Worship EP - 2014</h5>
      <h5>Sol y Nieve Records</h5>
      </div>
    </div>

  </div>

</div>
<!-- END PAGE CONTENT -->

<!-- PARTIAL FOOTER -->
<?php include 'partials/footer.php'; ?>
