function print_guide(box) {
    var guide = document.getElementById(box); // Hardcode to "weed" to view
    var toExpand = document.getElementById("guidelines-expansion");
    // Change the style of the button
    guide.style.color = 'white';
    guide.style.backgroundColor = '#40804D';
    guide.style.border = 'none';
    guide.style.borderRadius = '24px 24px 0 0';
    guide.style.padding = '2rem 0 4rem 0'   

    // Display the expanded box
    toExpand.style.display = 'flex';
}