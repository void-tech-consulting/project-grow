// An example of how to link a js file to be run on every page
// Check your debug console in chrome dev tools to see if it works
console.log("Hello World");
jQuery(document).ready(function($) {
    $(".message-form").submit(function(e) {
        e.preventDefault();          //event
        let title = $('#message-title')[0].value;
        $('#message-title')[0].value = '';       
        $.post(my_ajax_obj.ajax_url, {         //POST request
            _ajax_nonce: my_ajax_obj.nonce,     //nonce
            action: "nopriv_my_tag_count",            //action
            title:  title             //data
        }, 
        function(data) {                    //callback
            alert('success!');             //insert server response
        }
        );
    });

    console.log("Testing...");
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
            content.style.display = "none";
            } else {
            content.style.display = "block";
            }
        });
    }

    console.log("Dropdowns...");
    $(".page_item_has_children > a").each(function() {
        let htmlString = $(this).text();
        let icon = $("<i></i>");
        icon.addClass("fa fa-caret-down");
        $(this).append(icon);
    });
});