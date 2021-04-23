function print_guide(tab, dropdown) { 
    // if there exists a div with open class then reset it and remove class
    if ($(".guidelines-open").length) {
        $(".guidelines-open").addClass("guidelines-story-box").removeClass("guidelines-open open-story-box")
        $(".open-dropdown").addClass("guidelines-hide").removeClass("open-dropdown guidelines-show")
    }
    // Change the style of the button
    $(tab).addClass("open-story-box").removeClass("guidelines-story-box")

    // Display the expanded box
    $(dropdown).addClass("guidelines-show")

    $(tab).addClass("guidelines-open");
    $(dropdown).addClass("open-dropdown");
}