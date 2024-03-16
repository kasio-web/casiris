@include('includes.header')

<body class="home page-template-default page page-id-9 index font_meiryo">
    <div id="site_loader_overlay">
        <div id="site_loader_spinner"></div>
    </div>
    <div id="site_wrap">
        <div id="main_content" class="clearfix row no-gutters">
            {{-- サイドバー --}}
            @include('includes.side-bar')
            {{-- サイドバー --}}

            <!-- main col -->
            <div id="main_col" class="col-md-10 main_col_right">

                <div id="header">
                    <h2 class="header-title" style="color: #FFFFFF; font-size: 28px;"><span
                            style="padding-left:15px;">Menu</span></h2>
                    <img src="https://bar-casiris.net/images/01.jpg" width="1180" height="auto" title=""
                        alt="">
                </div>
                <div class="container single_wrap ">

                    <ul id="bread_crumb" class="clearfix">
                        <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb" class="home"><a
                                itemprop="url" href="https://bar-casiris.net/" style="visibility: visible;"><span
                                    itemprop="title">ホーム</span></a></li>

                        <li class="last">Menu</li>

                    </ul>
                    <div class="row">
                        <div id="edit-area" class="post_content">
                            <div class="col-md-12 entry-content">

                                <!-- スプレッドシートからの引き込み -->
                                <div class="product-item js-based">
                                    <p class="category" style="font-weight: bold; margin-top:50px"></p>
                                    <p class="menu_name"></p>
                                </div>
                                <!-- スプレッドシートからの引き込み -->
                            </div>
                        </div>
                    </div>
                </div>



                @include('includes.footer')
