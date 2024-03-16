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
                    <h2 class="header-title" style="color: #FFFFFF; font-size: 28px;"><span>ACCESS</span></h2>
                    <img src="{{ asset('images/02.jpg') }}" width="1180" height="auto" title="" alt="">
                </div>
                <div id="edit-area" class="post_content single_wrap">
                    <div class="container">

                        <ul id="bread_crumb" class="clearfix">
                            <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb" class="home"><a
                                    itemprop="url" href="http://bar.local/" style="visibility: visible;"><span
                                        itemprop="title">ホーム</span></a></li>

                            <li class="last">ACCESS</li>

                        </ul>
                        <p class="headline mb15">CASIRIS LOCATION</p>
                        <p class="desc1"></p>
                    </div>
                    <div class="align1 mb100">
                        <p><iframe style="border: 0;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.1975533896402!2d139.70273091525925!3d35.69675588019063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cd8e8538297%3A0xd165a1afbbc2bf5c!2z44CSMTYwLTAwMjEg5p2x5Lqs6YO95paw5a6_5Yy65q2M6Iie5LyO55S677yS5LiB55uu77yR77yT4oiS77yW!5e0!3m2!1sja!2sjp!4v1582955502344!5m2!1sja!2sjp"
                                width="80%" height="450" frameborder="0"
                                allowfullscreen="allowfullscreen"></iframe></p>
                    </div>
                    <div class="container">
                        <div class="row mb60">
                            <div class="col-md-6">
                                <p>住所：東京都新宿区歌舞伎町2-13-6 メトロプラザ１ビル３F [<a
                                        href="https://goo.gl/maps/CJB9hscCCQKBTbxY7">MAP</a>]<br>電話：03-6302-1203<br>FAX：03-6302-1204
                                </p>
                                <p>都営大江戸線 東新宿駅 徒歩5分<br>西武新宿線 西武新宿駅 徒歩9分<br>JR山手線 新宿駅 徒歩14分</p>
                            </div>
                            <div class="col-md-6">
                                <p>営業時間：20:00-05:00<br>定休日：不定</p>
                                <p>Mail: staff@bar-casiris.net&nbsp;<br>twitter: <a
                                        href="https://twitter.com/CASIRIS2020?s=06" target="_blank"
                                        rel="noopener">@CASIRIS2020</a></p>
                            </div>
                        </div>
                    </div>
                </div><!-- / #edit-area -->
                @include('includes.footer')
