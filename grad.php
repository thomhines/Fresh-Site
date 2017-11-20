<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<?php // Spit out the requested name ?>
		<title>Fresh Fall 2017 - PSU.GD Senior Showcase - <?php echo ( $_GET["name"] ? ucfirst($_GET["name"]) : "Not Found" ); ?></title>
		<?php include 'header.php' ?>
	</head>
	<body class="grid wfull biobg">
    <img class="plant-ind-left" src="src/img/fall2017/plant-ind-student.png" alt="leafy green plant">
    <img class="plant-ind-left" src="src/img/fall2017/plant-ind-student-patterns.svg" alt="leafy green plant">
    <div class="logo-grad">
      <a href="/fresh/">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="2in" height="2.014in" viewBox="0 0 481 145"><title>fresh-logo-fall-2017</title><path d="M32.939,58.391H56.291c.695,11.377-.032,20.344-20.344,20.344H32.939v57.033H6.9V8.393H79.232a36.77,36.77,0,0,1,.569,7.034q0,13.309-15.4,13.307H32.939Z" fill="#ebea74"/><path d="M180,44.894q0,13.5-6.369,23.195a35.082,35.082,0,0,1-17.777,13.878l31.369,52.47a37.705,37.705,0,0,1-15.209,3.232,21.444,21.444,0,0,1-11.787-3.041q-4.753-3.041-8.745-9.886l-21.671-36.88H119.354v47.907H93.118V9.153a291.679,291.679,0,0,1,33.65-1.9q27.185,0,40.209,9.221T180,44.894Zm-27.377,2.472q0-11.024-5.7-16.35T129.24,25.693q-3.422,0-5.892.189t-4.185.381V70.18H128.1q11.784,0,18.155-5.895T152.623,47.366Z" fill="#ebea74"/><path d="M260.609,115.617q7.6,0,11.691,3.518t4.089,9.979c0,1.395-.034,2.567-.1,3.518s-.161,2-.286,3.137H201.2V8.393h71.767a36.77,36.77,0,0,1,.569,7.034q0,7.228-3.706,10.266t-12.454,3.041H227.436V60.1h22.78c1.134,10.422-.409,20.342-20.342,20.342h-2.439v35.172Z" fill="#ebea74"/><path d="M291.884,106.491A64.268,64.268,0,0,0,307.855,116a42.532,42.532,0,0,0,15.4,2.848q9.7,0,15.495-4.466t5.8-12.644q-.194-6.651-3.613-10.548a26.423,26.423,0,0,0-9.031-6.464,105.991,105.991,0,0,0-12.261-4.661q-6.086-1.9-12.168-4.466a47.529,47.529,0,0,1-11.122-6.559,29.967,29.967,0,0,1-8.174-10.267q-3.137-6.273-3.137-15.589,0-11.594,5.892-19.962a37.512,37.512,0,0,1,16.255-12.832,57.781,57.781,0,0,1,23.1-4.468,71.968,71.968,0,0,1,19.2,2.567q9.315,2.565,13.878,5.989,5.321,3.043,5.323,8.555A14.428,14.428,0,0,1,366.6,29.4a35.022,35.022,0,0,1-5.514,7.509,50.4,50.4,0,0,0-13.5-7.7,40.939,40.939,0,0,0-14.828-2.946q-9.318,0-14.831,3.707a12.145,12.145,0,0,0-5.514,10.741,13.111,13.111,0,0,0,1.808,6.844,17.927,17.927,0,0,0,5.987,5.705q4.181,2.66,15.59,6.842,6.083,2.283,12.356,4.942a49.006,49.006,0,0,1,11.408,6.75,31.788,31.788,0,0,1,8.364,10.267q3.232,6.178,3.232,15.493,0,19.391-12.832,30.418T323.443,139a84.215,84.215,0,0,1-19.2-2.091,55.852,55.852,0,0,1-15.209-5.7q-5.324-3.609-5.323-8.364Q283.71,117.329,291.884,106.491Z" fill="#ebea74"/><path d="M412.14,60.1h35.392V8.582a59.809,59.809,0,0,1,9.505-.95q7.794,0,12.165,3.707t4.373,11.122V135.768H447.532V80.635H412.14v55.133H386.094V8.582a65.041,65.041,0,0,1,9.126-.95q16.918,0,16.919,14.829Z" fill="#ebea74"/></svg>
      </a>
    </div>

		<!-- Nav Slides -->
			<!-- Class "cbp-spmenu-open" gets applied to menu -->
		<?php include 'sidebar-location.php' ?>
		<?php include 'sidebar-grads.php' ?>

		<div class="row biosection">

		<?php

    $name = $_GET["name"];
      if ( $name && file_exists('students/fall17/'.$_GET["name"]) ) {
      // Include the correct index file
      include 'students/fall17/'.$name . '/index.php';
      }
			else if ( $name && file_exists('students/sm17/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/sm17/'.$name . '/index.php';
				}
			else if ( $name && file_exists('students/sp17/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/sp17/'.$name . '/index.php';
				}
            else if ( $name && file_exists('students/fall16/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/fall16/'.$name . '/index.php';
				}
            else if ( $name && file_exists('students/summer16/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/summer16/'.$name . '/index.php';
				}
			else if ( $name && file_exists('students/spring16/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/spring16/'.$name . '/index.php';
				}
			else if ( $name && file_exists('students/summer15/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/summer15/'.$name . '/index.php';
				}
			else if ( $name && file_exists('students/spring15/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/spring15/'.$name . '/index.php';
				}

			else if ( $name && file_exists('students/fall14/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/fall14/'.$name . '/index.php';
				}

			else if ( $name && file_exists('students/spring14/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/spring14/'.$name . '/index.php';
				}

			else if ( $name && file_exists('students/summer14/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/summer14/'.$name . '/index.php';
				}
			else if ( $name && file_exists('students/fall13/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/fall13/'.$name . '/index.php';
				}

			else if ( $name && file_exists('students/spring13/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/spring13/'.$name . '/index.php';
				}

			else if ( $name && file_exists('students/summer13/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/summer13/'.$name . '/index.php';
				}
				 else { ?>
			<div style="margin-top:10em;text-align:center;color:black;">
				Sorry, couldn't find anyone by that name. :(
			</div>
		<?php } ?>
		</div>
		<?php include 'scripts.php'; ?>
	</body>
</html>
