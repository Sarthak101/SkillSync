$(document).ready(function() {
    // Show the section based on URL hash
    var hash = window.location.hash;
    if (hash) {
        $('.settings-content div').hide();
        $(hash).show();
    }

    // Handle click events on sidebar links
    $('.settings-sidebar a').on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        $('.settings-content div').hide();
        $(target).show();
    });
});
