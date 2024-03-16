@include('includes.header')

<body class="home page-template-default page page-id-9 index font_meiryo">
  <div id="site_loader_overlay"><div id="site_loader_spinner"></div></div>
  <div id="site_wrap">
    <div id="main_content" class="clearfix row no-gutters">
      {{-- サイドバー --}}
      @include('includes.side-bar')
            {{-- サイドバー --}}
          <div id="main_col" class="col-md-10 main_col_right">
  <div id="edit-area" class="mt0">
                  <div id="index_news">
          <div id="newsticker">
            <div class="row no-gutters">
              <div class="ticker col-md-10" rel="fade">
                <ul>
                                    <li>
                      <time class="date" datetime="2021-12-07">2021.12.07</time>
                      <span class="title"><a href="https://bar-casiris.net/news/%e5%ba%97%e9%95%b7%e9%80%80%e8%81%b7%e5%8f%8a%e3%81%b3%e6%96%b0%e5%ba%97%e9%95%b7%e5%b0%b1%e4%bb%bb%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/">店長退職及び新店長就任のお知らせ</a></span>
                    </li>
                                    <li>
                      <time class="date" datetime="2021-09-22">2021.09.22</time>
                      <span class="title"><a href="https://bar-casiris.net/news/%e8%87%a8%e6%99%82%e4%bc%91%e6%a5%ad%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b-3/">臨時休業のお知らせ</a></span>
                    </li>
                                    <li>
                      <time class="date" datetime="2021-07-02">2021.07.02</time>
                      <span class="title"><a href="https://bar-casiris.net/news/%e8%87%a8%e6%99%82%e4%bc%91%e6%a5%ad%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b-2/">臨時休業のお知らせ</a></span>
                    </li>
                                    <li>
                      <time class="date" datetime="2021-05-08">2021.05.08</time>
                      <span class="title"><a href="https://bar-casiris.net/news/%e3%80%8e%e4%b8%80%e5%91%a8%e5%b9%b4%e8%a8%98%e5%bf%b5%e7%a5%ad%e3%80%8f%e3%80%8e%e7%9f%b3%ef%a8%91%e7%bf%94%e8%aa%95%e7%94%9f%e7%a5%ad%e3%80%8f%e9%96%8b%e5%82%ac%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89/">『一周年記念祭』&#038;『石﨑翔誕生祭』開催のお知らせ</a></span>
                    </li>
                                </ul>
              </div>
              <div class="archive_link col-md-2">
                <a href="{{ url('/news/') }}">NEWS一覧</a>
              </div>
            </div>
          </div>
        </div>
          <div id="fullpage">
  
          <div class="section" id="section0" style="background: url('{{ asset("images/03-1.jpg") }}') no-repeat center center;
          background-size: cover;">
        <div class="container">
          <div class="row">
            <div class="top-container col-md-8">
              <h2 class="headline movein" style="color:#FFFFFF;font-size:42px;text-shadow:1px 1px 3px #444444;">暖かさに包まれる第二の家、明日に繋がる都会の場所</h2>
              <p class="disc movein" style="color:#FFFFFF !important;font-size:14px;text-shadow:0px 0px 0px #FFFFFF;">Karaoke Bar 『CASIRIS（カシリス）』は『楽しくお酒が飲める場所』をテーマに、お客様の出会いに貢献していきたいと思っております。
  仲間とわいわい騒ぐのもよし、仕事の話をするもよし、２人で雰囲気を楽しむのもよし、１人お酒を飲みながらもの思いにふけるのもよし、人それぞれ様々な楽しみ方があると思います。
  
  当店はそんな様々なお客様のニーズにお応えし楽しんでいただけるよう、日々良い変化、成長を求め取り組んでいきます。
  
  新宿歌舞伎町で、暖かさに包まれる第二の家、明日に繋がる都会の場所をご提供いたします。</p>
              <p class="movein"><a href="javascript:void(0)" class="btn_gst" style="display:none;"></a></p>
            </div>
          </div>
        </div>
        <ul class="fp-nav sp-none">
          <li data-menuanchor="Page0" class="icon-down"><a href="#Page0"><span>down</span></a></li><li data-menuanchor="Page1" class="icon-down show"><a href="#Page1"><span>down</span></a></li><li data-menuanchor="Page2" class="icon-down"><a href="#Page2"><span>down</span></a></li>
        </ul>
      </div><div class="section" id="section1" style="background: url('{{ asset("images/02-1.jpg") }}') no-repeat center center;
      background-size: cover;">
        <div class="container">
          <div class="row">
            <div class="top-container col-md-8 fr">
              <h2 class="headline movein" style="color:#FFFFFF;font-size:42px;text-shadow:1px 1px 5px #444444;">SYSTEM</h2>
              <p class="disc movein" style="color:#FFFFFF !important;font-size:14px;text-shadow:0px 0px 0px #444444;">[セット料金]
  チャージ料金(60min)  ¥1,500- / 延長料金(60min) ¥1,500-
  </p>
              <p class="movein"><a href="{{ route('system-menu') }}" class="btn_gst" style="color:#FFFFFF;">System / Menu</a></p>
            </div>
          </div><object data="" type=""></object>
        </div>
        <ul class="fp-nav sp-none">
          <li data-menuanchor="Page0" class="icon-up show"><a href="#Page0"><span>up</span></a></li><li data-menuanchor="Page1" class="icon-down"><a href="#Page1"><span>down</span></a></li><li data-menuanchor="Page2" class="icon-down show"><a href="#Page2"><span>down</span></a></li>
        </ul> 
      </div>		<div class="section" id="section2" style="background: url('{{ asset("images/04-1.jpg") }}') no-repeat center center;
      background-size: cover;">
        <div class="container">
          <div class="row">
            <div class="top-container col-md-8">
              <h2 class="headline movein" style="color:#FFFFFF;font-size:42px;text-shadow:1px 1px 5px #444444;">ACCESS</h2>
              <p class="disc movein" style="color:#FFFFFF !important;font-size:14px;text-shadow:0px 0px 0px #444444;">東京都新宿区歌舞伎町2-13-6 メトロプラザ１ビル３F</p>
              <p class="movein"><a href="{{ route('access') }}" class="btn_def" style="color:#FFFFFF;">INFO</a></p>
            </div>
          </div>
        </div>
        <ul class="fp-nav sp-none">
          <li data-menuanchor="Page0" class="icon-up"><a href="#Page0"><span>up</span></a></li><li data-menuanchor="Page1" class="icon-up show"><a href="#Page1"><span>up</span></a></li><li data-menuanchor="Page2" class="icon-down"><a href="#Page2"><span>down</span></a></li>
        </ul>
      </div>
        </div><!-- / #fullpage -->
  </div><!-- / #edit-area -->
  <script>
    $(function() {
      $('.movein').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
          $(this).stop().addClass('movein_ef');
        }
        else{
          $(this).stop().removeClass('movein_ef');
        }
      });
    });
  </script>
@include('includes.footer')


