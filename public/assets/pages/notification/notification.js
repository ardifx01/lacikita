'use strict';
$(document).ready(function() {

    /*--------------------------------------
         Notifications & Dialogs
     ---------------------------------------*/
    /*
     * Notifications
     */
    function notify(from, align, icon, type, animIn, animOut, message){
        $.growl({
            icon: icon,
            title: '', // tidak perlu title
            message: message || 'Turning standard Bootstrap alerts into awesome notifications',
            url: ''
        },{
            element: 'body',
            type: type,
            allow_dismiss: true,
            placement: {
                from: from,
                align: align
            },
            offset: {
                x: 30,
                y: 30
            },
            spacing: 10,
            z_index: 999999,
            delay: 2500,
            timer: 1000,
            url_target: '_blank',
            mouse_over: false,
            animate: {
                enter: animIn,
                exit: animOut
            },
            icon_type: 'class',
            template: '<div data-growl="container" class="alert" role="alert">' +
            '<button type="button" class="close" data-growl="dismiss">' +
            '<span aria-hidden="true">&times;</span>' +
            '<span class="sr-only">Close</span>' +
            '</button>' +
            '<span data-growl="icon"></span>' +
            '<span data-growl="title"></span>' +
            '<span data-growl="message"></span>' +
            '<a href="#" data-growl="url"></a>' +
            '</div>'
        });
    };

    // event tombol demo
    $('.notifications .btn').on('click', function(e){
        e.preventDefault();
        var nFrom = $(this).attr('data-from');
        var nAlign = $(this).attr('data-align');
        var nIcons = $(this).attr('data-icon');
        var nType = $(this).attr('data-type');
        var nAnimIn = $(this).attr('data-animation-in');
        var nAnimOut = $(this).attr('data-animation-out');

        notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
    });

    // otomatis dari flash message Laravel
    var $autoNotif = $('.notifications[data-type]');
    if ($autoNotif.length) {
        $autoNotif.each(function(){
            var $el = $(this);
            var nFrom = $el.data('from');
            var nAlign = $el.data('align');
            var nIcons = $el.data('icon') || 'fa fa-check';
            var nType = $el.data('type');
            var message = $el.text().trim();

            notify(nFrom, nAlign, nIcons, nType, 'animated fadeInDown', 'animated fadeOutUp', message);

            // hapus elemen agar teks tidak tampil di halaman
            $el.remove();
        });
    }

});
