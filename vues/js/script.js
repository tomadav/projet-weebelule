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
