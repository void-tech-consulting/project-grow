function print_guide(tab, dropdown) { 
    // if there exists a div with open class then reset it and remove class
    if ($(".open").length) {
        $(".open").addClass("story-box").removeClass("open open-story-box")
        $(".open-dropdown").addClass("hide").removeClass("open-dropdown show")
    }
    // Change the style of the button
    $(tab).addClass("open-story-box").removeClass("story-box")

    // Display the expanded box
    $(dropdown).addClass("show")

    $(tab).addClass("open");
    $(dropdown).addClass("open-dropdown");
}