$(document).ready(function() {
    // Function to show the selected section
    function showSelectedSection(hash) {
        $('.settings-content div').hide();
        $(hash).show();
    }

    // Check if URL has hash
    var hash = window.location.hash;
    if (hash) {
        showSelectedSection(hash);
    } else {
        // If no hash, default to edit profile
        var defaultHash = '#editProfile';
        showSelectedSection(defaultHash);
    }

    // Handle click events on sidebar links
    $('.settings-sidebar a').on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        showSelectedSection(target);
    });

    // Show Employees section when clicked
    $('a[href="#employees"]').on('click', function() {
        $('#employees').show();
    });
});
