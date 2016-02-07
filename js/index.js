

$(document).ready(function(){

			window.textArray= [];
			window.timeArray=[];
			window.recording = false;
		$('.add_slide').click(function(){

		$(".Slide" ).clone().appendTo( "#Slide_container" );                                                                                                    
		}); 


		$('#submit').click(function(){
				var duration = $('#time option:selected').val();


			window.location.href='recordPage.php?note='+textArray+'&duration='+timeArray;
			$( ".Note" ).each(function( index ) {
					textArray.push($(this).val());
			});

			$( ".Time" ).each(function( index ) {
					timeArray.push($(this).val());
			});
			

			});


		CameraTag.observe("webCam", "initialized", function(){
			myCamera = CameraTag.cameras["webCam"];
			$('#webCam').css('width','90%');
			$('#unityPlayer').css('width','100%');
			$('.content').css('display','inline');

		}) 

		CameraTag.observe("webCam", "readyToPublish", function(){
			myCamera.publish();

		}) 



		CameraTag.observe("webCam", "readyToRecord", function(){

				myCamera.record_without_countdown();
		}) 

		$('#record').click(function(){
				myCamera.record();
//myCamera.record_without_countdown(); 

		
				$('#record').attr('disabled','disabled');
				$('#Stop').removeAttr('disabled');
				CameraTag.observe("webCam", "countdownFinished", function(){

				//myCamera = CameraTag.cameras["YOUR_CAMERA_ID"];
				var duration = $('#time option:selected').val();
				start_timer(duration);

			}) 

			});


		


		$('#Stop').click(function(){
			
				myCamera.stopRecording();  
				$('#Stop').attr('disabled','disabled');
				$('#record').removeAttr('disabled');
        clearInterval(window.progress);
			
			
			});

		CameraTag.observe("webCam", "bufferingUp", function(){
				alert('Video stopeed');


		}) 

window.intervals = [];
$(document).keypress(function() {
		var now = new Date();
		window.intervals.push(now);
		time_diff();
});



});

function time_diff()
{
		if(window.intervals.length!=1)
		{
			var d2 = window.intervals[intervals.length-1];
			var d1 = window.intervals[intervals.length-2];
			var diff = (Math.round((d2-d1)/1000)-5).toString();
			if(recording == true)
			{
				myCamera.stopRecording();  
				recording = false;
				var slide_no = (intervals.length)/2;
				$('#Noti').append("<br> <div class='replay'> <strong>Slide "+ slide_no+'</strong>  finished in: '+ diff+ 'sec <div>');
			}
			else
			{
				myCamera.record();
				recording = true; 
			}
		}
		else//first stroke
		{
			if(recording == true)
      {    
        myCamera.stopRecording();  
        recording = false;
      }    
      else 
      {    
        myCamera.record();
        recording = true; 
      } 
		}
}



function start_timer(duration)
{
/*
		setTimeout(function myFunction() {
			    alert('Time Out');
		},duration);
*/
    window.progress = setInterval(function() {
    var $bar = $('.bar');

    if ($bar.width()>=400) {
        clearInterval(window.progress);
        $('.progress').removeClass('active');
				$('.cameratag_screen').click();
    } else {
        $bar.width($bar.width()+40);
    }
				$bar.text($bar.width()/40 + 1+ "  sec");
		}, 1000);

}


