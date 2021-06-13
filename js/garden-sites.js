jQuery(document).ready(function($) {
  $('#gs-search-input').on('input', () => {
    var searchString = $('#gs-search-input').val()
    if (searchString.length > 2) {
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
  $('#gs-sort-select').change(() => {
    var toSort = document.querySelectorAll('.gs-site');
    toSort = Array.prototype.slice.call(toSort, 0);

    toSort.sort(function(a, b) {
        var aord = sortBy(a.children);
        var bord = sortBy(b.children);
        return (aord > bord) ? 1 : -1;
    });
    function sortBy(a) {
      var val = $('#gs-sort-select').val();
      if (val == 'alpha') {
        return getSiteName(a)
      } else if (val == 'soil-type') {
        return getChecked(a, 'soil-type')
      } else if (val == 'accessibility') {
        return getChecked(a, 'accessibility')
      } else if (val == 'special-conditions') {
        return getChecked(a, 'special-conditions')
      } else if (val == 'number') {
        return getNumber(a)
      }
      return -1;
    }
    function getNumber(children) {
      for (let i = 0; i < children.length; i++) {
        const e = children[i];
        if (e.className == 'gs-site-number') {
          return Number(e.children[0].textContent.trim());
        }
      }
    }
    function getChecked(children, val) {
      for (let i = 0; i < children.length; i++) {
        const e = children[i];
        if (e.className == 'gs-sort-params') {
          for (let j = 0; j < e.children.length; j++) {
            const k = e.children[j];
            if (k.className.includes('gs-' + val)) {
              return -1;
            }
          }
        }
      }
      return 1;
    }
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
