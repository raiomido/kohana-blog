/* 
 * app
 * Project: consortium
 * Developed by Rai Omido
 * Copyright (C) Mar 30, 2017 Rai Omido
 * <raiomido@gmail.com>
 * UTF-8
 * 7:22:59 AM
 */
jQuery(function ($) {
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 120) {
            //$('#fixedHeader').addClass('navbar-fixed-top');
            //$('#site-logo-slidein').addClass('show');
            //$('#headerUserInfo').addClass('show');
        } else {
            //$('#fixedHeader').removeClass('navbar-fixed-top');
            //$('#site-logo-slidein').removeClass('show');
            //$('#headerUserInfo').removeClass('show');
        }
    });

    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $('#actionTrigger').on('click', function () {
 
            $('#compose-box').slideToggle("fast");         


    });
});


