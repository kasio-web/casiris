<div id="footer">
    <div class="container">
        <div id="footer_logo" class="align1 mb60 sp-none">
            <div class="logo_area">
                <p class="logo">
                    <a href="{{ url('/') }}" title="CASIRIS">
                        <img class="f_logo" src="{{ asset('images/tate-155x120-1.png?1686560208') }}" alt="CASIRIS"
                            title="CASIRIS">
                    </a>
                </p>
            </div>
        </div>
        <div class="row">
            <div id="footer_menu" class="clearfix">
            </div><!-- / #footer_menu -->
        </div>
    </div><!-- / .container -->
    <div class="store-information02 js-based mt50 mb20 pc-none">
        <p class="store-name">CASIRIS</p>
        <p class="store-address"></p>
        <p class="store-tel"><span>TEL.</span></p>
    </div>
    <ul class="user_sns pc-none clearfix">
        <li class="twitter"><a href="https://twitter.com/CASIRIS2020" target="_blank"
                style="visibility: visible;"><span>Twitter</span></a></li>
        <li class="insta"><a href="https://www.instagram.com/casiris2020/" target="_blank"
                style="visibility: visible;"><span>Instagram</span></a></li>
    </ul>
    <p class="store-information01 sp-none js-based">
        <span class="store-name">CASIRIS</span>
        <span class="store-address"></span>TEL.<span class="store-tel"></span>
    </p>
    <p id="copyright">©&nbsp;CASIRIS All Rights Reserved.</p>
</div><!-- / #footer -->

<div id="return_top" style="display: none;">
    <a href="#body"><span>PAGE TOP</span></a>
</div>

</div>
<!-- / #main_col -->
</div><!-- / #main_content -->
</div><!-- / #site_wrap -->


<script>
    jQuery(document).ready(function($) {

        $(window).load(function() {
            $('#site_loader_spinner').delay(600).fadeOut(400);
            $('#site_loader_overlay').delay(900).fadeOut(800);
            $('#site_wrap').css('display', 'block');
            $(window).trigger('resize');
            if ($('.pb_slider').length) {
                $('.pb_slider').slick('setPosition');
                $('.pb_slider_nav').slick('setPosition');
            }
            if ($('.pb_tab_slider').length) {
                $('.pb_tab_slider').slick('setPosition');
            }
        });
        $(function() {
            setTimeout(function() {
                $('#site_loader_spinner').delay(600).fadeOut(400);
                $('#site_loader_overlay').delay(900).fadeOut(800);
                $('#site_wrap').css('display', 'block');
            }, 3000);
        });
    });
    var timer = false;
    jQuery(window).on('load resize', function() {
        if (timer !== false) {
            clearTimeout(timer);
        }
        timer = setTimeout(function() {
            var h = $(window).height();
            var w = $(window).width();
            var x = 500;
            if (h < x) {
                $('#side_col').css('position', 'relative');
                $('#side_col .store-information').css('position', 'relative');
            }
        }, 200);
    });
</script>
<script type='text/javascript' src='https://bar-casiris.net/wp/wp-includes/js/comment-reply.min.js?ver=5.3.15'></script>
<script type='text/javascript' src='https://bar-casiris.net/wp/wp-includes/js/wp-embed.min.js?ver=5.3.15'></script>
</body>

</html>
