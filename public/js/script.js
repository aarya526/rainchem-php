$(document).ready(function () {
    $("#sidebar-open").click(function () {
        console.log('adding backdrop...');
        $(".backdrop").toggleClass("close open");
        $('.navbar-sidebar-menu').addClass('navbar-sidebar-menu-open');
    });

    $('#sidebar-close').click(function () {

        console.log('closing sidebar...');
        $('.backdrop').toggleClass('close open');
        $('.navbar-sidebar-menu').removeClass('navbar-sidebar-menu-open');
    });

});