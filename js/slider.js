/*

styles:
#slidecontainer{
    width:50%;
    height:300px;
    border:1px solid black;
    position: relative;
    overflow:hidden;
}
    
.slide{
    background-color:red;
    width:100%;
    height:100%;
    position: absolute;
    top:0px;
    left:0px;
}

HTML structure example:

<div id="slidecontainer">
    <div class="slide">slide 1</div>
    <div class="slide">slide 2</div>
    <div class="slide">slide 3</div>
    <div class="slide">slide 4</div>
</div>

<div id="next">next</div>
<div id="prev">prev</div>

The prev and next get automatically applied to any element with the #next and #prev id

*/


(function($){
var slidenum = 0;//holds the total number of slides
var currentslide = 1; //the current slide showing
    
var sliderunning = false;//is the slider currently animating
    
    //do initial setup for slides
        //make only slide 1 show and all others offset
    $('.slide').each(function(index){
        //the each loop runs once for each element you selected with the selector $()
        
        if(index == 0){ //check for first slide
            
        }else{
            //all slides after the first slide
        $(this).css({left: $('#slideshow').width() });
        }
        
        slidenum++; //increases by 1 for each slide
        
        //provide an id to select the slides individually
        $(this).attr('id', slidenum);
        
        
        
    });
    
function nextslide(){
    //get currentslide and nextslide
    
    sliderunning = true;
    
    var incommingslide = currentslide+1;
    //have i gone past my last slide?
    
    //if yes, set incommingslide to 1
    if(incommingslide > slidenum){
        incommingslide = 1;
    }
    
    //move currentslide out to the right
    $('#'+currentslide).stop().animate({
            left: $('#slideshow').width() 
    },500);
    
    //move nextslide in from the left
        //make sure slide is in the right starting location
    $('#'+incommingslide).css({left: -($('#slideshow').width() )});
    
    $('#'+incommingslide).stop().animate({left: 0},500,function(){
         sliderunning = false;  
    });
    
    //set currentslide = nextslide
     //this makes the new slide the currentslide
    currentslide = incommingslide;
    
}
    
function prevslide(){
    //change the values to make this function into previous
    
    sliderunning = true;
    
    var incommingslide = currentslide-1;
    //have i gone below my first slide
    
    //if yes, set incommingslide to 1
    if(incommingslide < 1){
        incommingslide = slidenum;
    }
    
    //move currentslide out to the left
    $('#'+currentslide).stop().animate({
            left: -($('#slideshow').width()) 
    },500);
    
    //move nextslide in from the right
        //make sure slide is in the right starting location
    $('#'+incommingslide).css({left: $('#slideshow').width()});
    
    $('#'+incommingslide).stop().animate({left: 0},500,function(){
         sliderunning = false;  
    });
    
    //set currentslide = nextslide
     //this makes the new slide the currentslide
    currentslide = incommingslide;
    
}

var autorun;//this will hold the interval 
    
function autoslide(){
    //every 4 seconds, call nextslide();
    
    autorun = setInterval(nextslide, 4000);
    
}
    //call autoslide to begin the automatic sliding when the page begins
    autoslide();
    
    
//bind click events to next and prev to clear autorun interval
    
    $('#next, #prev').click(function(){
        clearInterval(autorun); 
    });
    
    $('#next').click(function(){
        
        if(!sliderunning){
        //if sliderunning == false
            nextslide();
        }
        
    });
    
    $('#prev').click(function(){
        
        if(!sliderunning){
        //if sliderunning == false
            prevslide();
        }
        
    });
    
    
//lets make this more responsive!
    //first we must indentify what parts of this slider are responsive and what is not. 
    
    //the left position of some of the slides must be updated after the window changes size
$(window).resize(function(){
    
    //set left position for all slides to #slidecontainer.width
    
    $('.slide').css({ left: $('#slideshow').width() });
    
    //set just currentslide back to 0
    $('#'+currentslide).css({ left: 0 });
     
});



})($);



