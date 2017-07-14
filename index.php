<?php include "includes/header.php"; ?>

    <!-- <a href="https://twitter.com/swtechjobs" class="twitter-follow-button" data-show-count="false">Follow @swtechjobs</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script> -->
    <div class="header-container">
    <div class="header">

      <div class="header__navigation">
        <img src="img/swtechjobs.svg" alt="South West Tech Jobs">
        <h1>South West Tech Jobs</h1>
        <a href="#" class="button">Post a job for FREE<a/>
      </div>

      <div class="header__headline">
        <h2>Looking for a position as </br><span class="element"></span></h2>
      </div>
      <p>Get a weekly email with the latest tech jobs</p>

      <div id="mc_embed_signup">
        <link rel="stylesheet" href="css/mailchimp.css" type="text/css">
        <form action="//swtechjobs.us16.list-manage.com/subscribe/post?u=3ea77013099b912717ea670d7&amp;id=46045080ec" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email address" required>
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3ea77013099b912717ea670d7_46045080ec" tabindex="-1" value=""></div>
            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </div>
        </form>
      </div>

    </div>
    </div>

    <div class="job-container">

      <div class="job">
        <div class="job__title">
          <h2>Digital Designer</h2>
          <p>Pro:Direct Sport - Newton Abbot</p>
        </div>

        <div class="job__timestamp">
          <p>July 14</p>
        </div>
      </div>

      <div class="job">
        <div class="job__title">
          <h2>Front-End Developer</h2>
          <p>VentureHarbour - Remote</p>
        </div>

        <div class="job__timestamp">
          <p>July 14</p>
        </div>
      </div>

      <div class="job">
        <div class="job__title">
          <h2>Full Stack Developer</h2>
          <p>Crowdcube - Exeter</p>
        </div>

        <div class="job__timestamp">
          <p>July 14</p>
        </div>
      </div>

    </div>

    <script src="js/jquery.js"></script>
    <script src="js/typed.js"></script>
    <link rel="stylesheet" href="css/typed.css" type="text/css">
    <script>
      $(function(){
        $(".element").typed({
          strings: ["a Front-End Developer?", "a UX Designer?", "a DevOps Engineer?", "a Marketing Rockstar?", "a Back-End Developer?", "a Product Manager?","an Office Dog &#128054;?"],
          typeSpeed: 100,
          loop: true,
          backDelay: 1200,
        });
      });
    </script>

<?php include "includes/footer.php"; ?>
