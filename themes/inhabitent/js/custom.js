(function($) {
  $(document).ready();
  
  const searchForm = $('.search-form .search-field')
  
  $('.main-navigation .icon-search').on('click', function(event) {
    event.preventDefault();

    searchForm.addClass('show');
    searchForm.focus();
  });

  searchForm.on('blur', function() {
    searchForm.removeClass('show');
  });
})(jQuery);
