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
});
