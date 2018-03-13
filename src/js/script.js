/* ==========================================================================
   Original Code
   ========================================================================== */
   /* Floaty Objects */

$(function() {

  // adds and removes .color class when user hovers over photo grid
  // this adds the color square over the student's portrait/work sample
	$(".studentBlock", this).hover(
		function(){
			$('.photo', this).addClass("color");
		},
		function(){
			$('.photo', this).removeClass("color");
		}
	);
	
	var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
		menuRight = document.getElementById( 'cbp-spmenu-s2' ),
		showLeft = document.getElementById( 'showLeft' ),
		showRight = document.getElementById( 'showRight' ),
		body = document.body;

	showLeft.onclick = function() {
		classie.toggle( this, 'active' );
		classie.toggle( menuLeft, 'cbp-spmenu-open' );
		disableOther( 'showLeft' );
	};
	showRight.onclick = function() {
		classie.toggle( this, 'active' );
		classie.toggle( menuRight, 'cbp-spmenu-open' );
		disableOther( 'showRight' );
	};
	
	function disableOther( button ) {
		if( button !== 'showLeft' ) {
			classie.toggle( showLeft, 'disabled' );
		}
		if( button !== 'showRight' ) {
			classie.toggle( showRight, 'disabled' );
		}
  }

  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
      acc[i].onclick = function(){
          /* Toggle between adding and removing the "active" class,
          to highlight the button that controls the panel */
          this.classList.toggle("active");

          /* Toggle between hiding and showing the active panel */
          var panel = this.nextElementSibling;
          if (panel.style.display === "none") {
              panel.style.display = "block";
          } else {
              panel.style.display = "none";
          }
      }
  }
  
  // checks to see if window is below 960px (breakpoint)
  // moves the h1 with student's name to the left side of bio
  // before the bio_pic class
  // so that name will show up above photo on smaller screens
  if (window.matchMedia("(max-width: 960px)").matches) {
    studentName = document.getElementsByTagName('h1');
    target = document.getElementsByClassName('bioleft');
    firstChildOfTarget = document.getElementsByClassName('bio_pic');
    target[0].insertBefore(studentName[0], firstChildOfTarget[0]);
  }


});