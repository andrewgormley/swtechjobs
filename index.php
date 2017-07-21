<?php include "includes/header.php"; ?>

    <div class="header-container">
      <div class="header">

        <?php include "includes/navigation.php"; ?>

        <div class="header__headline">
          <h2>Looking for a position as <br><span class="element"></span></h2>
        </div>
        <p>Subscribe for a weekly email with the latest jobs.</p>

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

    <div class="bg-color">
      <div class="job-container">

        <?php include "includes/jobs.php"; ?>

      </div>
    </div>

    <div class="footer">

      <a href="https://twitter.com/swtechjobs" class="twitter-follow-button" data-show-count="false">Follow @swtechjobs</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

      <div class="footer__signoff">
        Contact us <a href="mailto:info@swtechjobs.com">here</a>. Created in Torbay by <a href="http://andrewgormley.co.uk/" target="_blank">Andrew Gormley</a>. Copyright © 2017.
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

</body>
</html>
