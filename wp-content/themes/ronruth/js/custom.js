jQuery(function ($){
        $('.menu-icon').click(function(e){
            $('.main-menu').slideToggle(500);
            $(this).toggleClass("close");
            e.preventDefault();
        });
    });