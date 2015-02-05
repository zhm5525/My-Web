var main=function(){
   $('.article').click(function(){
       $('.article').removeClass('current');
       $('.details').hide();
       
       $(this).addClass('current');
       $(this).children('.details').show();
   });
}

$(document).ready(main);