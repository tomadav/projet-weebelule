// function positionFooter(){
//
// var hauteurMax = window.innerHeight;
// var hauteurHeader = document.getElementById('header').offsetHeight;
// var hauteurMain = document.getEmementById('main').offsetHeight;
// var hauteurFooter = document.getElementById('footer');
// calculHeaderMain = parseInt(hauteurHeader+hauteurMain);
// calculDif = parseInt(hauteurMax-calculHeaderMain);
//
// console.log(hauteurMax);
//
// if (calculDif<0){
//   hauteurFooter.style.top=calculeHeaderMain;
//   hauteurFooter.style.position='absolute';
// }
//
//
// else{
//   hauteurFooter.style.position='absolute';
//   hauteurFooter.style.bottom='0';
// }
// }

$(function() {
    // OPACITY OF BUTTON SET TO 0%
    $(".roll").css("opacity","0");

    // ON MOUSE OVER
    $(".roll").hover(function () {

        // SET OPACITY TO 70%
        $(this).stop().animate({
            opacity: .7
        }, "slow");
    },

                     // ON MOUSE OUT
                     function () {

        // SET OPACITY BACK TO 50%
        $(this).stop().animate({
            opacity: 0
        }, "slow");
    });
});



$('a').hover(
    function(){
        $(this).css('opacity','.7');

        $(this).parent().append('<div class="title">' + a + '</div>');
    },
    function(){
        $(this).css('opacity','1');
        $(this).next().remove('.title');
    }
);





var
  words = ['Les dernières annonces'],
  part,
  i = 0,
  offset = 0,
  len = words.length,
  forwards = true,
  skip_count = 0,
  skip_delay = 5,
  speed = 100;

var wordflick = function(){
  setInterval(function(){
      if (forwards) {
        if(offset >= words[i].length){
          ++skip_count;
          if (skip_count == skip_delay) {
            forwards = false;
            skip_count = 0;
          }
        }
      }
      else {
         if(offset == 0){
            forwards = true;
            i++;
            offset = 0;
            if(i >= len){
              i=0;
            } 
         }
      }
      part = words[i].substr(0, offset);
      if (skip_count == 0) {
        if (forwards) {
          offset++;
        }
        else {
          offset--;
        }
      }
    	$('.word').text(part);
  },speed);
};

$(document).ready(function(){
  wordflick();
});