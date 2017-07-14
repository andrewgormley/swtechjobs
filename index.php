<?php include "includes/header.php"; ?>

    <a href="https://twitter.com/swtechjobs" class="twitter-follow-button" data-show-count="false">Follow @swtechjobs</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

    <div class="header-wrapper">

      <img src="img/swtechjobs.svg" alt="South West Tech Jobs">
      <h1>South West Tech Jobs</h1>

      <div class="headline">
        <h2>Looking for a position as <span class="element"></span></h2>
      </div>
      <p>We are building a dedicated job board for the rapidly growing Tech Industry in the South West. Traditional job sites are not tailored for us, therefore this board will be focusing on Engineering, Design, Product, DevOps, Marketing and more.</p>

    </div>

    <!-- Begin MailChimp Signup Form -->

    <div id="mc_embed_signup">

      <form action="//swtechjobs.us16.list-manage.com/subscribe/post?u=3ea77013099b912717ea670d7&amp;id=46045080ec" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">

      	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email address" required>
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3ea77013099b912717ea670d7_46045080ec" tabindex="-1" value=""></div>
          <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </div>
      </form>
    </div>

    <!--End mc_embed_signup-->

    <script src="js/jquery.js"></script>
    <script src="js/typed.js"></script>
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
