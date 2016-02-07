
<!DOCTYPE html>
<html lang="en">                                                                                                                                             
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    <script src='http://cameratag.com/api/v7/js/cameratag.js' type='text/javascript'></script>
      <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
     <!-- <script src="js/full-width-slider.slider/js/jssor.slider.min.js"></script>
		 -->
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
		<h1>Present Time</h1>
  </head>
  <body>
 


			<div class="container">





<div class="upload">
<form action="" method="POST" enctype="multipart/form-data">
		<label>Upload Your Presentation</label>
    <!--<label for="file">File: </label>--> 
    <input type="file" name="image" />
		<input type="submit"/>
</form>
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_tmp =$_FILES['image']['tmp_name'];
      
      if(empty($errors)==true){
         //move_uploaded_file($file_tmp,$file_name);
				if (move_uploaded_file($_FILES["image"]["tmp_name"],
					 "upload/" . $_FILES["image"]["name"]))
						 {
							 echo "Stored in: " . "upload/" . $_FILES["image"]["name"];
							exec ('/upload/parseImage.php'); 
						 }
					 else
						 {
								echo "error uploading";
							 //output the errors here (ie using $_FILES["file"]["error"])
						 }
      }else{
         print_r($errors);
      }
   }
?>
</div>

<hr>

					<div class="Slide">
							<camera id='webCam' data-app-id='a-a7217be0-af83-0133-eaaf-22000b95cd0e'></camera>
								<p id="Noti">
										
								</p>
									<div class="progress progress-striped active">
											<div class="bar" style="width: 0%;"></div>
									</div>
					</div>
			</div>​
  <hr>
  

  
</div> <!-- /container -->
  <!-- script references -->
	<div id="if_container">
	<iframe src="audience.html">
	</iframe>
 </div>







  </body>
</html>



