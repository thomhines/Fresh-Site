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
    
    $('.header').click(function(){
       if($('.cbp-spmenu-left','.cbp-spmenu-right').hasClass('cbp-spmenu-open')){
           $('.cbp-spmenu-left','.cbp-spmenu-right').removeClass('cbp-spmenu-open'); 
        }
    });
    
    showLeft.onclick = function() {
		classie.toggle( this, 'active' );
		classie.toggle( menuLeft, 'cbp-spmenu-open' );
        if($('.cbp-spmenu-left').hasClass('cbp-spmenu-open')){
           $('.cbp-spmenu-right').removeClass('cbp-spmenu-open');
        };
    };
        
	showRight.onclick = function() {
		classie.toggle( this, 'active' );
		classie.toggle( menuRight, 'cbp-spmenu-open' );
		if($('.cbp-spmenu-right').hasClass('cbp-spmenu-open')){
           $('.cbp-spmenu-left').removeClass('cbp-spmenu-open');
        };
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
    
    
  // // Use ajax to retrive CSV file from google drive
  //   $.ajax({

  //     url: 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQvIX4Vj8j6Z6qk8cldX41kVUivAKtyYc9pvkf372iJsMVIuQSxgh1duenspEHOoJjLTW4NoKalUEoo/pub?output=csv',
  //     success: function(data) {

  //       // Convert CSV data to JS Object (JSON). This uses jquery.csv.min.js
  //       artist_data = $.csv.toObjects(data);

  //       x = 0;
  //       artist_data.forEach(function() {

  //         // Skip this user if the 'is_visible' field is empty or 0 (assuming you have an is_visible field to hide/show people)
  //         // if(artist_data[x]['is_visible'] == 0) return;

  //         // Extract image id from Google Drive url
  //         image_string = artist_data[x]['Bio Picture'];
  //         image_id_pos = image_string.indexOf('id=') + 3;
  //         image_id = image_string.substr(image_id_pos);

  //         // Loop through all rows in spreadsheet and create a new div for each person
  //         $('.artist_container').append(`
  //           <div class="artist">
  //              <h2>` + artist_data[x]['First Name'] + `</h2>
  //              <img src="https://drive.google.com/thumbnail?id=` + image_id + `&sz=w500-h500">
  //              <p>` + artist_data[x]['Bio Picture'] + `</p>
  //           </div>`);

  //         // Add 1 to x to move to next row of spreadsheet
  //         x = x + 1;
  //       });

  //     }
  //   });
    
    
    
    


});