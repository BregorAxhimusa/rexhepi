$('#menu-toggle').click(function(e) {
    e.preventDefault();
    $('#wrapper').toggleClass('toggled');
});

// Show files that are uploaded on file input
$('.custom-file input').change(function(e) {
    var files = [];
    for (var i = 0; i < $(this)[0].files.length; i++) {
        files.push($(this)[0].files[i].name);
    }
    $(this).next('.custom-file-label').html(files.join(', '));
});
//Filter tables
$(document).ready(function() {
    $('#searchInput').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('tbody tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});

// Slider

$('.carousel').carousel({
    interval: 3000
});

// Remove Notification

$(document).ready(function() {
    $('.custom-navigation button').click(function() {
        $('.custom-navigation .list-group .custom-remove').remove();
    });
});

// Active Sidebar

$('#sidebar-wrapper .sidebar-link').each(function() {
    if (window.location.pathname.indexOf($(this).attr('href')) > -1) {
        $(this).addClass('sidebar-active');
    }
});