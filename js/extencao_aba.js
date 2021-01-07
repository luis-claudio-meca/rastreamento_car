$(document).ready(function(){
var big   = true;
var pxWidth = getWidth();
  $('.local_status').click(function() {
    if(big) {
      big = false;
      $(this).animate({
        height : pxWidth,
      }, 10);
    } else {
      big = true;
      $(this).animate({
        height : "600px",
      }, 10);
    }
  });
  
});

function getWidth(){
    var widht = window.screen.availWidth;
      if(widht > 700){
      var px = "100px";
    }else{
      var px = "50px";
  }
  return px;
}