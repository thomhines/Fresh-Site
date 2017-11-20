<footer>

<img class="plant-footer" src="src/img/fall2017/plant-bottom-right.png" alt="green leafy plant">
<img class="plant-footer plant-footer--svg" src="src/img/fall2017/plant-bottom-right-patterns.svg" alt="geometric patterns">

<div class="footerLogos">
  <a href="http://psu.gd/" target="_blank">
  <img class="schoolLogos psugd" src="src/img/psugdlogo.png" alt="psugdlogo">
  </a>

  <a href="http://fogdpsu.tumblr.com/" target="_blank">
  <img class="schoolLogos fogd" src="src/img/fogdlogo.png" alt="fogdlogo">
  </a>

  <a href="http://www.pdx.edu/the-arts/art-design" target="_blank">
  <img class="schoolLogos ad" src="src/img/adschoollogo.png" alt="adschoollogo">
  </a>

  <a href="http://www.pdx.edu" target="_blank">
  <img class="schoolLogos psu" src="src/img/psulogo.png" alt="psulogo">
  </a>

  <a href="https://feckinbrew.com/" target="_blank">
  <img class="schoolLogos feckin" src="src/img/feckinlogo.png" alt="Feckin Brewery and Smokehouse">
  </a>
</div> <!-- end footerLogos -->



<div class="row footer clear">




    <!-- WILL ONLY BE SHOWN AT 800PX OR LESS -->
    <!-- this adds expandable buttons in the footer to
        replace the flyout EVENT INFO and FRESH? menus -->
    <div class="accordion-buttons">
      <div class="accordion-info">
        <button class="accordion"><h4>Event Info ▾</h4></button>
        <div class="panel">
          <?php include 'sidebar-location-content.php'; ?>  
        </div>
      </div>

      <div class="accordion-info">
        <button class="accordion"><h4>Fresh? ▾</h4></button>
        <div class="panel">
          <?php include 'sidebar-grads-content.php'; ?>  
        </div> 
      </div>
    </div>

    <!-- END // WILL ONLY BE SHOWN AT 800PX OR LESS (ABOVE THIS) -->
    <!-- ***************************** -->




  <div class="s2 c3 footerLogo">
    <a href="/fresh/">
      <h3>SO FRESH AND SO CLEAN.</h3>
    </a>
  </div>
  
  <div class="c5">

    <p class="footerBlurb clear">Thanks for taking a look at FRESH! Check out FRESH's cousin, <a href="http://www.psu.gd/be-honest" target="_blank">Be Honest</a>, an open portfolio party that happens every spring.</p>
    <p>FRESH requires registration. If you are interested in working with one of our grads, please contact kateb (at) pdx.edu for information. Also, take a peek at our graduate <a href="archive.php">archive.</a></p>
    <div class="credits-container">
      <p class="credits">Project Management by <a href="grad.php?name=kate_kobielsky">Kate Kobielsky</a> &amp; <a href="grad.php?name=angela_dinh">Angela Dinh</a></p>
      <p class="credits">Creative Direction by <a href="grad.php?name=bailey_collins">Bailey Collins</a>, <a href="grad.php?name=edlyn_wang">Edlyn Wang</a>, <a href="grad.php?name=kiersta_sze">Kiersta Sze</a>, <a href="grad.php?name=maggie_denham">Maggie Denham</a>, <a href="grad.php?name=rawz_addison">Rawz Addison</a>, <a href="grad.php?name=tina_roach">Tina Roach</a> &amp; <a href="grad.php?name=tyler_alexander">Tyler Alexander</a></p>
      <p class="credits">Photography by <a href="grad.php?name=kiersta_sze">Kiersta Sze</a>, <a href="grad.php?name=kay_ayran">Kaye Ayran</a> &amp; <a href="grad.php?name=rayan_alhú">Rayan Alhú</a></p>
      <p class="credits">Motion Graphics by <a href="grad.php?name=kaye_ayran">Kaye Ayran</a> &amp; <a href="grad.php?name=maggie_denham">Maggie Denham</a></p>
      <p class="credits">Web Design by <a href="grad.php?name=tina_roach">Tina Roach</a></p>
      <p class="credits">Web Development by <a href="grad.php?name=tricia_leach">Tricia Leach</a> &amp; <a href="grad.php?name=drew_hankins">Drew Hankins</a></p>
      <p class="credits">Copywriting by <a href="grad.php?name=ashleigh_cummings">Ashleigh Cummings</a>, <a href="grad.php?name=erika_skille">Erika Skille</a> &amp; <a href="grad.php?name=tyler_alexander">Tyler Alexander</a></p>
    </div> <!-- end credits-container -->
  </div> <!-- end c5 -->
</div> <!-- end row footer clear -->

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        }
    }
</script>

</footer>