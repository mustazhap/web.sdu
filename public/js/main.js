var slides = document.getElementsByClassName('slide'); 
var currentSlide = 0;
var slideInterval = setInterval(nextSlide, 5000);


function nextSlide() { // top main slider on header
 slides[currentSlide].className = 'slide';
 currentSlide = (currentSlide+1)%slides.length;
 slides[currentSlide].className = 'slide showing';


}


function openbox(id){
    display = document.getElementById(id).style.display;

    if(display=='none'){
       document.getElementById(id).style.display='flex';
    }else{
       document.getElementById(id).style.display='none';
    }
}

function image_load() {
  var c = event.currentTarget;
  var x = c.src;
  //console.log(x);
  document.getElementById("bigImage").src = x;
	
};
document.querySelector("#q").addEventListener('click',image_load);
document.querySelector("#w").addEventListener('click',image_load);
document.querySelector("#e").addEventListener('click',image_load);
document.querySelector("#a").addEventListener('click',image_load);
document.querySelector("#s").addEventListener('click',image_load);