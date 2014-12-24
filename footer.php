<script type="text/javascript" src="js/smallslider.js"></script>
<script type="text/javascript" src="js/jqfade.js"></script>
<script type="text/javascript">
    function mycarousel_initCallback(carousel)
    {
      // Disable autoscrolling if the user clicks the prev or next button.
      carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
      });

      carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
      });

      // Pause autoscrolling if the user moves with the cursor over the clip.
      carousel.clip.hover(function() {
        carousel.stopAuto();
      }, function() {
        carousel.startAuto();
      });
    };

    $(document).ready(function() {
      $('#mycarousel').jcarousel({
        auto: 2,
        wrap: 'last',
        //easing: 'swing',
        initCallback: mycarousel_initCallback
      });

        $('#news').innerfade({
          animationtype: 'fade',
          speed: 1000,
          timeout: 5000,
          type: 'random'
        });
    });

    var faderIndex = 0,
    faders = $('.fadey');

    function nextFade() {
      $(faders[faderIndex]).fadeOut(10000, function() {
        faderIndex++;
        if (faderIndex >= faders.length)
        faderIndex = 0;

        $(faders[faderIndex]).fadeIn(10000, nextFade);
      });
    }
    nextFade();
    </script>
<!-- ####################################################################footerpart #######################################-->

<div id="footer">
    <section id="footer-area">
    <table style="text-align: center; width: 100%;">
      <tr valign="middle">
        <td>
          <span class="footerhead">Have an idea? Let us help you make it real! Our IT experts are <a href="about_us.php#contact">here</a> to work with you.</span>
        </td>
      </tr>
      <tr valign="middle">
        <td>
          <a href="index.php">Home</a> | <a href="about_us.php">About Us</a> | <a href="enquire.php">Enquire Now</a> | <a href="about_us.php#contact">Contact Us</a>
        </td>
      </tr> 
      
      <tr valign="middle" class="cpyrt">
        <td>
          &#169;2014 Maisa™ Solutions Pvt. Ltd. | &#169;2014 Maisa™ Solutions Inc. All rights reserved.
        </td>
      </tr> 
</table>
</section>
</div>
</body>
</html>
