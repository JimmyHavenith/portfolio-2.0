(function($)
{

  $(document).ready(function()
  {

    // Animation filtre
    $('.header-button-filter').click(function()
    {
      if($('.content').hasClass('filter-not-display')){
        $('.content').removeClass('filter-not-display');
        $('.content').addClass('filter-display');
      } else{
        $('.content').removeClass('filter-display');
        $('.content').addClass('filter-not-display');
      }
      return false;
    });

    // Positionnement titre+tag projet

    if($('.isotope-container li').hasClass('web')){
      $('.web.isotope-element').addClass('project-web');
    }

    if($('.isotope-container li').hasClass('print')){
      $('.print.isotope-element').addClass('project-print');
    }

    if($('.isotope-element').hasClass('project-web')){
      var heightBlocInfoWeb = $('.project-web').height() / 2;
      var heightInfoWeb = $('.project-info').height() / 2;
      var middleHeightBlocInfoWeb = heightBlocInfoWeb - heightInfoWeb;
      $('.project-web .project-info').css('padding-top', middleHeightBlocInfoWeb);
    }
    if($('.isotope-element').hasClass('project-print')){
      var heightBlocInfoPrint = $('.project-print').height() / 2;
      var heightInfoPrint = $('.project-info').height() / 2;
      var middleHeightBlocInfoPrint = heightBlocInfoPrint - heightInfoPrint;
      $('.project-print .project-info').css('padding-top', middleHeightBlocInfoPrint);
    }

    // Menu HAMBURGER
    $('.header-button-menu').click(function(e){
      if(parseInt($('.header-hb').css('left')) == 0){
        e.preventDefault();
        $('.header-hb').css('left', '-75%');
        $('.header-hb').css('transition', 'all 0.5s');
        $('.body-black').css('display', "none");
      } else {
        e.preventDefault();
        $('.header-hb').css('left', '0');
        $('.header-hb').css('transition', 'all 0.5s');
        $('.body-black').css('display', "block");
      }
    });

    $('.views-field-field-project-highlight img').each(function(){
  		$(this).removeAttr('width')
  		$(this).removeAttr('height');
	  });

    // Min-height body
    // var bodyHeight = $(window).height() / 2;
    // $('.content').css('min-height', bodyHeight);

  });
})(jQuery);
