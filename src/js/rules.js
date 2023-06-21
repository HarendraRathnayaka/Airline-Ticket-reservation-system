var i = 0;
var images = [];
var time = 3000;

//images

images[0] = 'src/js/image1.jpg';
images[1] = 'src/js/image2.jpg';
images[2] = 'src/js/image3.jpg';

function changeimg(){
	
	document.slide.src = images[i]
		
		if(i < images.length - 1){
			i++;
		}else {
			i = 0;
		}
		
		setTimeout("changeimg()",time);
		}
	
	window.onload = changeimg;