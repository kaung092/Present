<!DOCTYPE html>
<html lang="en">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/index.js"></script>
		<script src='http://cameratag.com/api/v7/js/cameratag.js' type='text/javascript'></script>
      <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      <style>
         .ui-widget-header {
            background: #cedc98;
            border: 1px solid #DDDDDD;
            color: #333333;
            font-weight: bold;
         }
      </style>


	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
 

<!--
<div class="container">
  <div id="jumbotron" class="jumbotron text-center">
		<div id="progressbar">
		</div>
  </div>
!-->

<button class= "add_slide">Add Slide </button>
<button id="submit">Submit</button>
<div id="Slide_container">
		<div class="Slide">
					<div>
							<label for="note">Slide</label>
							<textarea  id="note" class="Note" type="text">
							</textarea>
					</div>

					<label>Time Duration</label>
					<select id="time" class="Time">
						<option value="30000">30 sec</option>
						<option value="60000">1 minutes</option>
						<option value="120000">2 minutes</option>
						<option value="360000">3 minutes</option>
					</select>

		</div>
</div>

	</body>
</html>
