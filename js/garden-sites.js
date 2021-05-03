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
  $('#gs-sort-input').change(() => {
    var toSort = document.querySelectorAll('.gs-site');
    toSort = Array.prototype.slice.call(toSort, 0);

    toSort.sort(function(a, b) {
      debugger
        var aord = getSiteName(a.children);
        var bord = getSiteName(b.children);
        // two elements never have the same ID hence this is sufficient:
        return (aord > bord) ? 1 : -1;
    });
    function getSiteName(children) {
      for (let i = 0; i < children.length; i++) {
        const e = children[i];
        if (e.className == 'gs-site-name') {
          return e.textContent.trim();
        }
      }
    }

    var parent = document.querySelector('.gs-table-body');
    parent.innerHTML = "";

    for(var i = 0, l = toSort.length; i < l; i++) {
        parent.appendChild(toSort[i]);
    }
  })
});
