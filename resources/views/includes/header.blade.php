
<header class="header" id="header-sroll">
    <div class="header-container">
        <div class="col-xs-12">
            <div class="desk-menu">
                <div class="logo"style="padding: 4px">
                    <img src="{{URL::to('public/front/images/logo/eclub-logo.png')}}" width="120px"/>
                </div>
                <nav class="box-menu">
                    <div class="menu-container">
                        <div class="menu-head">
                            <a href="{{URL::to('/')}}" class="e1">
                                <img src="{{URL::to('public/front/images/logo/eclub-logo.png')}}" alt="E-CLUB">
                            </a>
                        </div>
                        <div class="menu-header-container">
{{--                            <div class="header-top">--}}
{{--                                <a href="{{URL::to('/')}}">--}}
{{--                                    <label>Member Login | </label>--}}
{{--                                </a>--}}
{{--                                <a href="{{URL::to('/')}}">--}}
{{--                                    <label> Become a Member | </label>--}}
{{--                                </a>--}}
{{--                                <a href="{{URL::to('/')}}">--}}
{{--                                    <label> Eclub-eshop</label>--}}
{{--                                </a>--}}
{{--                            </div>--}}
                            <ul id="cd-primary-nav" class="menu">
                                <li class="menu-item ">
                                    <a href="{{URL::to('/')}}">Home</a>
                                </li>
                                <li class="menu-item ">
                                    <a href="{{URL::to('/')}}">About Us</a>
                                </li>
                                <li class="menu-item ">
                                    <a href="{{URL::to('/')}}">Membership</a>
                                </li>
                                <li class="menu-item ">
                                    <a href="{{URL::to('/')}}">Operation</a>
                                </li>
                                <li class="menu-item ">
                                    <a href="{{URL::to('/')}}">Project</a>
                                </li>
                                <li class="menu-item ">
                                    <a href="{{URL::to('/')}}">Event</a>
                                </li>
                                <li class="menu-item ">
                                    <a href="{{URL::to('/')}}">Media</a>
                                </li>
                                <li class="menu-item ">
                                    <a href="{{URL::to('/')}}">Donate</a>
                                </li>
                                <li class="menu-item ">
                                    <a href="{{URL::to('/')}}">Join</a>
                                </li>
                                <li class="menu-item ">
                                    <a href="{{URL::to('/')}}">Login</a>
                                </li>
{{--                                <li class="menu-item menu-item-has-children">
                                    <a href="#">About Us</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item">
                                            <a href="#">Lorem Ipsum</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Lorem Ipsum</a>
                                        </li>
                                    </ul>
                                </li>--}}
                                <li class="contact menu-item ">
                                    <a href="#">Contact Us</a>
                                </li>
                                <li class="menu-item ">
                                    <a href="{{URL::to('/')}}">FAQ</a>
                                </li>
                                <li class="line"></li>
                            </ul>
                        </div>
                        <div class="menu-foot">
                            <div class="social">
                                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <hr/>
                            <address>
                                <span class="tel"><i class="icon-telephone"></i> +8801799544290</span>
                                <span class="email"><i class="icon-mail"></i>query@eclub.com</span>
                                <span class="end"><i class="icon-location"></i>58 Lake Circus, Kolabagan Dhaka</span>
                            </address>
                        </div>
                    </div>
                    <div class="hamburger-menu">
                        <div class="bar"></div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>


<script>
    (function($) {
        var size;

        //SMALLER HEADER WHEN SCROLL PAGE
        function smallerMenu() {
            var sc = $(window).scrollTop();
            if (sc > 40) {
                $('#header-sroll').addClass('small');
            }else {
                $('#header-sroll').removeClass('small');
            }
        }

        // VERIFY WINDOW SIZE
        function windowSize() {
            size = $(document).width();
            if (size >= 991) {
                $('body').removeClass('open-menu');
                $('.hamburger-menu .bar').removeClass('animate');
            }
        };

        // ESC BUTTON ACTION
        $(document).keyup(function(e) {
            if (e.keyCode == 27) {
                $('.bar').removeClass('animate');
                $('body').removeClass('open-menu');
                $('header .desk-menu .menu-container .menu .menu-item-has-children a ul').each(function( index ) {
                    $(this).removeClass('open-sub');
                });
            }
        });

        $('#cd-primary-nav > li').hover(function() {
            $whidt_item = $(this).width();
            $whidt_item = $whidt_item-8;

            $prevEl = $(this).prev('li');
            $preWidth = $(this).prev('li').width();
            var pos = $(this).position();
            pos = pos.left+4;
            $('header .desk-menu .menu-container .menu>li.line').css({
                width:  $whidt_item,
                left: pos,
                opacity: 1
            });
        });

        // ANIMATE HAMBURGER MENU
        $('.hamburger-menu').on('click', function() {
            $('.hamburger-menu .bar').toggleClass('animate');
            if($('body').hasClass('open-menu')){
                $('body').removeClass('open-menu');
            }else{
                $('body').toggleClass('open-menu');
            }
        });

        $('header .desk-menu .menu-container .menu .menu-item-has-children ul').each(function(index) {
            $(this).append('<li class="back"><a href="#">Voltar</a></li>');
        });

        // RESPONSIVE MENU NAVIGATION
        $('header .desk-menu .menu-container .menu .menu-item-has-children > a').on('click', function(e) {
            e.preventDefault();
            if(size <= 991){
                $(this).next('ul').addClass('open-sub');
            }
        });

        // CLICK FUNCTION BACK MENU RESPONSIVE
        $('header .desk-menu .menu-container .menu .menu-item-has-children ul .back').on('click', function(e) {
            e.preventDefault();
            $(this).parent('ul').removeClass('open-sub');
        });

        $('body .over-menu').on('click', function() {
            $('body').removeClass('open-menu');
            $('.bar').removeClass('animate');
        });

        $(document).ready(function(){
            windowSize();
        });

        $(window).scroll(function(){
            smallerMenu();
        });

        $(window).resize(function(){
            windowSize();
        });

    })(jQuery);
</script>
