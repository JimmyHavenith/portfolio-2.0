(function($)
{

  $(document).ready(function()
  {

    // Project info Homepage
    var heightInfoBloc = $('.project-info').height() / 2;
    var heightInfo = $('.project-info-div').height() / 2;
    var middleHeight = heightInfoBloc - heightInfo;
    $('.project-info-div').css('padding-top', middleHeight);

    // Menu HAMBURGER
    $('.header-button-menu').click(function(e){
      if(parseInt($('.header-hb').css('left')) == 0){
        e.preventDefault();
        $('.header-hb').css('left', '-75%');
        $('.header-hb').css('transition', 'all 0.5s');
        $('.body-black').css('display', "none");
        $('html').css('overflow-y', 'scroll');
      } else {
        e.preventDefault();
        $('.header-hb').css('left', '0');
        $('.header-hb').css('transition', 'all 0.5s');
        $('.body-black').css('display', "block");
        $('.project-link a').css('z-index', '0');
        $('html').css('overflow-y', 'hidden');
      }
    });

  });
})(jQuery);
