(function($)
{

  $(document).ready(function()
  {
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
  });
})(jQuery);
