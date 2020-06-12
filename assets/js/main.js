$(document).ready(function() {
    $('.toggle-nav').on('click', function() {
        const container = $('#container');
        const nav = $('#side-nav-container');

        if(container.hasClass('right-padding')) {
            nav.hide();
        } else {
            nav.show();
        }

        container.toggleClass('right-padding');
    });
});