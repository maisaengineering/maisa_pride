 function compares() {           //  this function method will work after selecting the second text file field 
	$("#final_audio").trigger('play');
	$("#compare_text").text("now compare both").addClass("compare_txt");
	$("#compare_text_2").text("now compare both").addClass("compare_txt_2");

	//var firstImgwidth=$(".mockup img").width();
    //var secondImgwidth=$(".screenshot img").width();
	//alert(secondImgwidth);
	 }

function previewFile(source,destination) { //calls the function named previewFile() with paramenters
    var preview = document.querySelector('.' + destination);//selects the query named destination (mockup img) paramenter
	var file    = document.querySelector('#' + source).files[0]; //sames as here
    var reader  = new FileReader ();
  reader.onloadend = function () {
    preview.src = reader.result;
	}
	
	if (file) {
         reader.readAsDataURL(file); //reads the data as a URL
		 
     } 
	 
	   else {
        preview.src = "";
      }
   }
   
   



	//below  jquery used to create custom input file buttons ////////////////////////////

	var divwrapper="<div style='width:0; height:0; overflow:hidden;'></div>"
	$(document).ready(function() {
		$("#firstFile").wrap(divwrapper)
		$("#secondFile").wrap(divwrapper)
	   });
	
		$(document).ready(function() {
		  $("#btn_1").click(function(){ $('#firstFile').click();
		   });
		   $("#btn_2").click(function(){ $("#secondFile").click();
		    })
        });
		
		
		//splash effect /////////////////////////////////////////////////////////////////////
		
		function mywelcome() {
			setTimeout(function() {
				 $("#splashpage").fadeOut("slow",
				  function() {
					  setTimeout(function() {
						  $("#mainpage").fadeIn(1250);
						 
						  }, 500);
						   setTimeout(function() {
						    $("#second_audio").trigger('play');
							 }, 1500);
						 
					 });
		         },2500 );
		  }
		