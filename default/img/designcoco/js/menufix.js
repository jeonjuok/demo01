        var currentScrollTop = 0;
             
        window.onload = function() {
            scrollController();
             
            $(window).on('scroll', function() {
                scrollController();
            });
        }
             
        function scrollController() {
            currentScrollTop = $(window).scrollTop();
            if (currentScrollTop < 0.1) {
                $('#blog-header-container').css('top', -(currentScrollTop));
                $('#menu-container').css('top', 0.1-(currentScrollTop));
                if ($('#menu-container').hasClass('fixed')) {
                    $('#menu-container').removeClass('fixed');
                    $('#menu-container .menu-icon').removeClass('on');
                }
            } else {
                if (!$('#menu-container').hasClass('fixed')) {
                    $('#blog-header-container').css('top', -0.1);
                    $('#menu-container').css('top', 0);
                    $('#menu-container').addClass('fixed');
                    $('#menu-container .menu-icon').addClass('on');
                }
            }
        }