<div id="side_col" class="col-md-2 side_col_left">
    <!-- logo -->
    <div id="logo_image">
        <h1 class="logo">
            <a href="{{ url('/') }}" title="CASIRIS" data-label="CASIRIS">
                <img class="h_logo" src="{{ asset('images/tate-200x154-1.png?1686360863') }}" alt="CASIRIS" title="CASIRIS">
            </a>            
        </h1>
    </div>

    <a href="#" class="menu_button pc-none" style="display: none;"><span>menu</span></a>
    <div id="global_menu" class="clearfix">
        <ul id="menu-%e3%82%b0%e3%83%ad%e3%83%bc%e3%83%90%e3%83%ab%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc" class="menu">
            <li id="menu-item-16"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-16">
                <a href="{{ url('/') }}" aria-current="page" style="visibility: visible;">Home</a>
            </li>
            <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48">
                <a href="{{ url('/concept') }}" style="visibility: visible;">Concept</a>
            </li>
            <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44">
                <a href="{{ url('/system-menu') }}" style="visibility: visible;">Menu</a>
            </li>
            <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71">
                <a href="{{ url('/news') }}" style="visibility: visible;">News</a>
            </li>
            <li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43">
                <a href="{{ url('/access') }}" style="visibility: visible;">Access</a>
            </li>

        </ul>
    </div>
    <!-- social button -->
    <ul class="user_sns clearfix sp-none">
        <i class="fa fa-twitter" aria-hidden="true"></i>

        <li class="twitter"><a href="https://twitter.com/CASIRIS2020" target="_blank"
                style="visibility: visible;"><span>Twitter</span></a></li>
        <li class="insta"><a href="https://www.instagram.com/casiris2020/" target="_blank"
                style="visibility: visible;"><span>Instagram</span></a></li>
    </ul>
    <div class="store-information sp-none js-based">
        <p class="store-name">CASIRIS</p>
        <p class="store-address">

        </p>
        <p class="store-tel"><span>TEL.</span></p>
    </div>
</div>

@if(Auth::check())
    <p>Welcome, {{ Auth::user()->name }}</p>
@else
    <p>Welcome, Guest</p>
@endif
