jQuery(document).ready(function( $ ) {
    $(".menuToggle").on("click", function() {
        this.classList.toggle("ham-active");
        document.getElementById('menu').classList.toggle("ham-active");
    });
    $(".menu-item-has-children").on("click", function() {
        var menu = this.querySelector('.sub-menu');
        var actives = document.querySelectorAll('.sub-active');
        actives.forEach(el => {
            if(el !== menu) {
                el.classList.remove("sub-active");
            }   
        });
        menu.classList.toggle("sub-active");
    });
    $( "a[href='#'" ).on("click", function(e) {
        e.preventDefault();
    });
});