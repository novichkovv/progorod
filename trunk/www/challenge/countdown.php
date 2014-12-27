<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 28.12.14
 * Time: 1:34
 */
session_start();
echo '
<!DOCTYPE HTML>
<html>
	<head>
		<title>Coconut Countdown Plugin</title>
		<!----------------------------------------- FrameWorks --------------------------------------------------->
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

		<!----------------------------------------- Fonts ---------------------------------------------------------->

		<link href=\'http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300italic,300\' rel=\'stylesheet\' type=\'text/css\'>

		<!----------------------------------------- Coconut Plugin ------------------------------------------------->
		<!-- the countdown plugin -->
		<script type="text/javascript" rel="javascript" src="/files/coconut/coconut.min.js"></script>

		<!-- the countdown css style -->
		<link rel="stylesheet" type="text/css" href="/files/coconut/style.css">

		<style>
/* body font-family */
body {font-family:trebuchet MS;font-size:12px; overflow:hidden;}
			/* countdown font-family */
			.coconut .center {font-family:Open Sans Condensed;}

			#progress-bar {margin-top:100px;background:#999;}

		</style>
	</head>
	<body>

		<!-- coconut countdown container -->
		<div id="circular-countdown"></div>
		<!-- coconut countdown container end -->

		<!--
			<span class="standard-color width-100-p block font-12 italic center">

start date <span class="start-date"></span>

end date <span class="end-date"></span>

time remaining <span class="time-until"></span>

			</span>
-->



		<!-- run the coconut countdown plugin -->
		<script>
jQuery(document).ready(function () {
    var messages = new Array();
				messages[3] = "Status : Getting Ready";
				messages[10] = "Status : Tracking bugs";
				messages[20] = "Status : Bulding list files";
				messages[40] = "Status : Debugging";
				messages[50] = "Status : Powertesting";
				messages[80] = "Status : Testing some more";
				messages[100] = "Status : Almost done, we should be back online soon";
				$("#circular-countdown").coconut({
					color : "#eb6841",
					progressBarId : "progress-bar",
					endDate: "'.date('d/m/Y', strtotime($_SESSION['user']['sdate']. " + 42 day")).'",
					startDate: "'.date('d/m/Y', strtotime($_SESSION['user']['sdate']. "")).'",
					M_size : "small",
					H_size : "small",
					D_size : "small",
					message : messages,
					hideSeconds :false,
					hideMinutes : false,
					hideHours : false,
					hideDays : false,
					disable: false,
					textOnly: false,
					wordDays : "days",
					wordHours : "hours",
					wordMinutes : "minutes",
					wordSeconds : "seconds"
				});

			});
		</script>
	</body>
</html>
';
