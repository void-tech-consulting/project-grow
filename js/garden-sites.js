jQuery(document).ready(function($) {
  $('.gs-search-input').on('input', () => {
    var searchString = $('.gs-search-input').val()
    if (searchString.length > 3) {
      document.querySelectorAll('.gs-site-name').forEach((e) => {

        var x = new RegExp(searchString, 'i');
        if (e.textContent.search(x) == -1) {
          e.parentElement.classList.add('gs-display-none')
        }
      })
    } else {
      document.querySelectorAll('.gs-site-name').forEach((e) => {
        e.parentElement.classList.remove('gs-display-none')
      })
    }
  });
});
