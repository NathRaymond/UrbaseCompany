$(document).ready(function () {

    $('ul.standup-tabs li').click(function () {
        var tab_id = $(this).attr('data-tab');

        $('ul.standup-tabs li').removeClass('display');
        $('.tab-content').removeClass('display');

        $(this).addClass('display');
        $("." + tab_id).addClass('display');
    })
})