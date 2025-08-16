<?php
  $homeActive = 'active';
  $visionActive = '';
  $eventsActive = '';
  $bandActive = '';
  $title = 'KAFIRUN Band | Official Site | Embrace the Descent into the Void | Salvation Through Sin.';
  $description = '<meta name="description" content="Descend into the void with KAFIRUN, the Canadian black metal band embracing spiritual rebellion and death worship. We push the boundaries of dark arts by dissonant, and occult-driven black metal, rejecting conformity in our quest for personal truth. Explore our gallery for unique band photos, stay connected with us on social media for the latest updates, and visit our Bandcamp page for music and merchandise. Reach out through our contact form to be the first to know about our new releases and upcoming events." />';
  // include 'header.php';
  include 'partials/header.php';
?>

<!-- PAGE CONTENT -->
<div id="main-container" class="container center-block">

  <div class="row">
    <div class="col-md-12 pleft pright">
      <img src="images/kafirun-band-logo-new-version-september-2021.png" class="band-logo center-block img-responsive" alt="KAFIRUN band new logo, september 2021">
    </div>
  </div>

  <!--
  <div class="row">
    <div class="col-md-12 text-center">
      <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FKafirunBand%2Fposts%2Fpfbid0Wixxz8p9eKjptyYwHHqLm2oknXmU2a5Fm3y5ANcnEmsvmxrKgctZXGy85qjRf2yLl&show_text=true&width=500" width="500" height="665" style="border:none;overflow:hidden; margin: 0 auto;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </div>
  </div>
  -->

  <!--
  <div class="row">
    <div class="col-xs-12 text-center block-margin-bottom">
      <h1 class="kaf-theme-h2">We Are Searching For A New Drummer</h1>
    </div>

    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center block-margin-bottom">
      <p>
        We are searching for a drummer with the intensity and precision to match our sound. We are looking for someone who can handle fast, dynamic tempos and bring a powerful presence both live and in the studio. If your drumming is tight and relentless, we'd like to connect.
      </p>
      <p>
        Reach out to us via the
        <a href="#" data-toggle="modal" data-target="#contact-form-container" class="custom-a">Contact Form</a>
        or email us at
        <a href="mailto:kafirun.band@gmail.com" class="custom-a" title="Email KAFIRUN">kafirun.band@gmail.com</a>.
      </p>
    </div>

    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center block-margin-bottom">
      <div>
        <img
        src="images/KAFIRUN-band-Dissolution-of-I-promo-image-brighter-version-with-band-logo.jpg"
        class="img-responsive center-block"
        alt="KAFIRUN band Dissolution of I promo image with band logo"
        >
        <img
        src="images/KAFIRUN-band-Dissolution-of-I-promo-image-darker-version-with band-logo.jpg"
        class="img-responsive center-block"
        alt="KAFIRUN band Dissolution of I promo image with band logo"
        >
      </div>
    </div>
  </div>

  <hr>
  -->

  <div class="row">
    <div class="col-xs-12 text-center block-margin-bottom">
      <h1 class="kaf-theme-h1">'The Seed, The Serpent, The Scythe' Music Video</h1>
    </div>

    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center block-margin-bottom">
      <div class="video-container-limit center-block">
        <div class="video-container">
        <div id="player"></div>
        <script>
          // Load the IFrame Player API code asynchronously
          const tag = document.createElement('script');
          tag.src = "https://www.youtube.com/iframe_api";
          const firstScriptTag = document.getElementsByTagName('script')[0];
          firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

          let player;
          const videoIds = ["92DALDu_oQI", "dHl436H63Z8", "KTKkwVJMGQo", "SzAzh3piOpk"]; // Replace with your desired video IDs
          let currentVideoIndex = 0;

          // This function is called by the API once it's ready
          function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
              height: '390',
              width: '640',
              videoId: videoIds[currentVideoIndex],
              events: {
                'onStateChange': onPlayerStateChange
              }
            });
          }

          function onPlayerStateChange(event) {
            // 0 means video ended
            if (event.data === YT.PlayerState.ENDED) {
              currentVideoIndex++;
              if (currentVideoIndex < videoIds.length) {
                player.loadVideoById(videoIds[currentVideoIndex]);
              }
            }
          }
        </script>
        </div>
      </div>
    </div>

    <!--
    <iframe width="560" height="315" src="https://www.youtube.com/embed/92DALDu_oQI?si=sNQsNBhaRY0MhQdP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    -->

    <div class="col-xs-12 text-center block-margin-bottom">
      <h2 class="kaf-theme-h2">'The Seed, The Serpent, The Scythe' Audio Track</h2>
      <p>"The Seed, The Serpent, The Scythe" audio track was released as a single.</p>
      <p>This track is available exclusively in digital format.</p>
      <p>Follow the link below to listen to and purchase the audio track on the KAFIRUN Bandcamp page.</p>
      <p>
        <a href="https://kafirun.bandcamp.com/track/the-seed-the-serpent-the-scythe" title="Listen and purchase 'The Seed, The Serpent, The Scythe' audio track on the KAFIRUN Bandcamp page." target="_blank">
          <button style="padding: 8px 30px 6px; font-size: 1em; letter-spacing: 0.04em; margin-top:20px; background-color:rgba(255,255,255,0.1); color:#FFFFFF; border-color:#666666;" class="btn btn-default lead" type="button">
            Purchase the Audio Track
          </button>
        </a>
      </p>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-xs-12 text-center block-margin-bottom">
      <h2 class="kaf-theme-h2">The single review by Islander from "No Clean Singing"</h2>
    </div>

    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center block-margin-bottom">
      <p>Vancouver's KAFIRUN impressed me with their debut album Eschaton in 2017, and thus the appearance of this next song was most welcome. For now, “The Seed, The Serpent, The Scythe” is a single, but I gather that a new album is also headed our way.</p>
      <p>You do get twisted glimpses of the band playing in the accompanying video, but those glimpses come in the midst of nightmarish imagery. The song itself is also nightmarish, and hallucinatory. It's violent and vortextual, and the mercurial guitar arpeggios sound like a life-threatening overdose in progress — but it's a wondrous seizure in which remarkable visions spring to life.</p>
      <p>The barbaric madness of the vocals are in keeping with the dissonant, darting madness of the guitars and the paroxysms of the rhythm section. All the performers are going full-tilt all the time, and yet the song still has a spellbinding quality, maybe because it's impossible to think of anything else when you're in its midst. A pure wild-hunt adrenaline rush that messes with your mind at the same time.</p>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-xs-12 text-center block-margin-bottom">
      <h3 class="small">August 2024</h3>
      <h2 class="kaf-theme-h2">KAFIRUN interview with Absolute Underground magazine</h2>
      <p>Issue 119 - August/September 2024</p>
      <p>
        <a href="https://absoluteunderground.tv/wp-content/uploads/2024/08/AU_119_web-1.pdf#page=25"
          class="custom-a clearfix"
          target="_blank"
          title="Read the KAFIRUN interview in Absolute Underground Magazine.">
          Read the KAFIRUN interview in Absolute Underground Magazine (page 25).
        </a>
      </p>
    </div>

    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center block-margin-bottom">
      <div>
        <img src="images/Kafirun-band-interview-with-Absolute-Underground-magazine-August-2024.jpg" class="img-responsive center-block img-grayscale" alt="KAFIRUN band interview with Absolute Underground magazine issue August 2024">
      </div>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-xs-12 text-center block-margin-bottom">
      <!-- <h3 class="small">May 05 2020</h3> -->
      <h2 class="kaf-theme-h2">
        A conversation between KAFIRUN members and RS Frost
        <br class="d-none d-md-block">
        from the Australian cult fanzine "Inner Missive"
      </h2>
    </div>

    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center block-margin-bottom">
      <p>The third installation of this cult series sees the title expand to a perfect-bound book format. It is perhaps best described as a Bardo Methodology-style fanzine that grew into a full length-book, written from the perspective of an Australian writer, with content predominantly split between black metal bands, death metal bands and visual artists.</p>

      <p>Alongside KAFIRUN, the magazine features in-depth interviews with BLAZE OF PERDITION, THE FUROR / IMPIETY, ZAZEN SOUNDS / ACHERONTAS, THE SENSELESS, SUFFERING HOUR, TEMPLE KOLUDRA, DISENTOMB, DEHN SORA, AMDBL, KARMAZID, WEREWOLVES, GRAVEIR, SUNS OF SORATH, UMBRA CONSCIENTIA, MALAKHIM, BY NORSE MUSIC, MUNT, DEVOURING STAR, CHALICE OF BLOOD, MANNVEIRA, HAXANDRAOK, and many more.</p>

      <p>
        Inner Missive 3 is available in paperback book format for purchase from
        <a href="https://shop.season-of-mist.com/dayal-patterson-inner-missive-3-book"
            class="custom-a inline-block clearfix"
            target="_blank"
            title="Purchase Inner Missive 3 paperback book from Season of Mist online store.">
            Season of Mist
        </a>
        &amp;
        <a href="https://www.cultneverdies.com/books/inner-missive-3"
            class="custom-a inline-block clearfix"
            target="_blank"
            title="Purchase Inner Missive 3 paperback book from Cult Never Dies online store.">
            Cult Never Dies
        </a>
        online shops.
      </p>

      <!-- <p>
        <a href="https://www.innermissive.com/post/kafirun"
          class="custom-a clearfix"
          target="_blank"
          title="Read the KAFIRUN interview on Inner Missive">
          Read the KAFIRUN interview on Inner Missive
        </a>
      </p> -->
    </div>

    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center block-margin-bottom">
      <div>
        <img src="images/Inner-Missive-magazine-3-cover.jpg" class="img-responsive center-block" alt="Inner Missive 3 paperback book cover.">
      </div>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-xs-12 text-center block-margin-bottom">
      <!-- <h3 class="small">July 05 2017</h3> -->
      <h2 class="kaf-theme-h2">
        KAFIRUN interview with Bandcamp contributor Zachary Goldsmith
      <!-- <br class="d-none d-md-block"> -->
      </h2>
    </div>

    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center block-margin-bottom">
      <p>Read an in-depth interview where KAFIRUN discusses their music, vision, and influences.</p>
      <p>
        <a href="https://daily.bandcamp.com/features/kafirun-black-metal-band-interview?utm_source=footer"
            class="custom-a clearfix"
            target="_blank"
            title="Read the interview with KAFIRUN on Bandcamp">
            Read the interview with KAFIRUN on Bandcamp
        </a>
      </p>
    </div>

    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center block-margin-bottom">
      <div>
        <img src="images/kafirun-members-photo-collage-2024.jpg" class="img-responsive center-block" alt="KAFIRUN band, band members photo collage 2024">
      </div>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-xs-12 text-center block-margin-bottom">
      <!-- <h3 class="small">June 14 2021</h3> -->
      <h2 class="kaf-theme-h2">Exclusive KAFIRUN interview with "Inside the Darkness" magazine</h2>
      <p>Please follow the link below to read the interview by Andrew Stanton</p>
      <p>
        <a href="https://issuu.com/rustdv/docs/_16-inside_the_darkness/s/12528956?fbclid=IwAR3B8DRvOPZePgQ3PEy7sAqUbejvbEQNOpsjbuytpVKl97VcMEZkvk4tx_4"
        class="custom-a clearfix"
        target="_blank"
        title="Read the interview in Inside the Darkness Magazine">
        Read the interview in Inside the Darkness Magazine
        </a>
      </p>
    </div>

    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center block-margin-bottom">
      <div>
        <img src="images/kafirun-sigil.jpg" class="img-responsive center-block" alt="KAFIRUN band sigil">
      </div>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-xs-12 text-center block-margin-bottom">
      <!-- <h3 class="small">January 11 2019</h3> -->
      <h1 class="kaf-theme-h1">'Eschaton' Vinyl 2019</h1>
      <p>Released by Clavis Secretorvm Records.</p>
      <p>Limited to 350 copies. 150 Gold, 200 Black.</p>
    </div>

    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center block-margin-bottom">
      <div>
        <img src="images/kafirun-eschaton-vinyl-cover.jpg" class="img-responsive center-block" alt="KAFIRUN Eschaton vinyl album cover image.">
      </div>
    </div>

    <div class="col-xs-12 text-center block-margin-bottom">
      <p>
        Eschaton explores the end of the manifested world, <br class="d-none d-sm-block"> an apocalypse that brings the end of all life and begets <br class="d-none d-sm-block"> the opening of a new beginning through death.
      </p>
      <p>
        <a href="https://kafirun.bandcamp.com/" title="Listen and purchase the album 'Eschaton' on the KAFIRUN Bandcamp page." target="_blank"></a>
          <button style="padding: 8px 30px 6px; font-size: 1em; letter-spacing: 0.04em; margin-top:20px; background-color:rgba(255,255,255,0.1); color:#FFFFFF; border-color:#666666;" class="btn btn-default lead" type="button">
            Purchase the album
          </button>
        </a>
      </p>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-xs-12 text-center block-margin-bottom">
      <h2 class="kaf-theme-h2">Stream 'Eschaton' <br> in its entirety below – via YouTube</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center block-margin-bottom">
      <div class="video-container-limit center-block">
        <div class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/dHl436H63Z8" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-xs-12 text-center block-margin-bottom">
      <!-- <h3 class="small">June 26 2017</h3> -->
      <h1 class="kaf-theme-h1">'Eschaton' CD 2017</h1>
      <p>Released by Seance Records.</p>
      <p>Limited to 1000 copies.</p>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2 block-margin-bottom">
      <a href="https://kafirun.bandcamp.com/album/eschaton" title="Listen and purchase the album 'Eschaton' on the KAFIRUN Bandcamp page." target="_blank">
        <img src="images/eschaton-cd.jpg" class="img-responsive" alt="KAFIRUN band - Eschaton album jewel case with booklet, tray card, and CD. Version 1">
      </a>
    </div>

    <div class="hidden-xs col-sm-6 col-md-5 col-lg-4 block-margin-bottom">
      <a href="https://kafirun.bandcamp.com/album/eschaton" title="Listen and purchase the album 'Eschaton' on the KAFIRUN Bandcamp page." target="_blank">
        <img src="images/eschaton-cd-kafirun.jpg" class="img-responsive" alt="KAFIRUN band - Eschaton album jewel case with booklet, tray card, and CD. Version 2">
      </a>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-xs-12 block-margin-bottom text-center">
      <h1 class="kaf-theme-h1">'The Worship and Glorification of Holy Death' CD 2016</h1>
      <p>Released by Mara Records as a compilation album.</p>
      <p>First 3 tracks from "Death Worship" EP 2014. <br class="d-none d-sm-block"> Last 5 tracks from "Glorification of Holy Death" EP 2015.</p>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 text-center block-margin-bottom">
      <p class="text-center">
        <a href="https://kafirun.bandcamp.com/album/the-worship-and-glorification-of-holy-death" title="Listen and purchase the album 'The Worship and Glorification of Holy Death' on the KAFIRUN Bandcamp page." target="_blank">
          <button style="padding: 8px 30px 6px; font-size: 1em; letter-spacing: 0.04em; margin-top:20px; background-color:rgba(255,255,255,0.1); color:#FFFFFF; border-color:#666666;" class="btn btn-default lead" type="button">
            Purchase the album
          </button>
        </a>
      </p>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-xs-12 text-center block-margin-bottom">
      <h2 class="kaf-theme-h2">Stream 'The Worship and Glorification of Holy Death' <br> in its entirety below – via YouTube</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 block-margin-bottom text-center">
      <div class="video-container-limit center-block">
        <div class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/KTKkwVJMGQo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2 block-margin-bottom">
      <a href="https://kafirun.bandcamp.com/album/the-worship-and-glorification-of-holy-death" title="Listen and purchase the album 'The Worship and Glorification of Holy Death' on the KAFIRUN Bandcamp page." target="_blank">
        <img src="images/KAFIRUN-The-Worship-and-Glorificiation-of-Holy-Death-CD-img01.jpg" class="img-responsive" alt="KAFIRUN band - The Worship and Glorificiation of Holy Death album jewel case with booklet, tray card, and CD. Version 1">
      </a>
    </div>
    <div class="hidden-xs col-sm-6 col-md-5 col-lg-4 block-margin-bottom">
      <a href="https://kafirun.bandcamp.com/album/the-worship-and-glorification-of-holy-death" title="Listen and purchase the album 'The Worship and Glorification of Holy Death' on the KAFIRUN Bandcamp page." target="_blank">
        <img src="images/KAFIRUN-The-Worship-and-Glorificiation-of-Holy-Death-CD-img02.jpg" class="img-responsive" alt="KAFIRUN band - The Worship and Glorificiation of Holy Death album jewel case with booklet, tray card, and CD. Version 2">
      </a>
    </div>
  </div>

  <!-- <hr> -->

  <!-- <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center">
      <h2 class="kaf-theme-h2">Mors Vincit Omnia</h2>
      <p>Death of the cosmic light and everything within, a dark passage that consumes all manifested energy in the universe. Death becomes the last witness of life. Death of microcosm within macrocosm. Absolute silence and nothingness. Death of the self and all reason. In this moment which is eternal yet transitory, a new and pure energy grows within the womb of chaos, and that ignites the source of a new aeon, A flame needless of air to exist. A new true god that breeds its new self, purified and sanctified in chaos without an end nor a beginning.</p>
    </div>
  </div> -->

</div>
<!-- END PAGE CONTENT -->

<!-- PARTIAL FOOTER -->
<?php include 'partials/footer.php'; ?>
