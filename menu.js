/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
	
	var image, imageCounter=0, imageCache=[];
	//load images into array
	$("#slides img").each(function(){
		image=new Image();
		image.src=$(this).attr("src");
		imageCache[imageCounter]=image;
		imageCounter++;
		
	});//end each
	
	//slideshow
	imageCounter=0;
	var nextImage;
	setInterval(function(){
		$("#slide").fadeOut(1000,
			function(){
				imageCounter=(imageCounter+1)%imageCache.length;
				nextImage=imageCache[imageCounter];
				$("#slide").attr("src", nextImage.src).fadeIn(1000);
				
			});//fade function
	},
	3000);//end slideshow
   });
   
    


