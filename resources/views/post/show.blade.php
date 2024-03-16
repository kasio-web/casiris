{{-- <x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      個別表示
    </h2>
  </x-slot>
  <div class="max-w-7xl mx-auto px-6">
    <div class="bg-white w-full rounded-2xl">
      <div class="mt-4 p-4">
        <h1 class="text-lg font-semibold"> {{$post->title}}</h1>
        <div class="text-right flex">    
        <a href="{{route('post.edit',$post)}}" class="flex-1">
        <x-primary-button class="btn btn-primary">
          編集
        </x-primary-button>
      </a>

      <form method="post" action="{{route('post.destroy', $post)}}" class="flex-2">
        @csrf
        @method('delete')
            <x-primary-button class="bg-red-700 ml-2">
                削除
            </x-primary-button>
        </form>

    </div>

        <hr class="w-full">
        <p class="mt-4 whitespace-pre-line">
          {{$post->body}}
        </p>
        <div class="text-sm font-semibold flex flex-row-reverse">
          <p>
            {{$post->created_at}}
          </p>
        </div>
      </div>
    </div>                                                                                                                       

  </div>
  </div>
</x-app-layout> --}}



@include('includes.header')

<body class="home page-template-default page page-id-9 index font_meiryo">
    <div id="site_loader_overlay">
        <div id="site_loader_spinner"></div>
    </div>
    <div id="site_wrap">
        <div id="main_content" class="clearfix row no-gutters">
            {{-- サイドバー --}}
            @include('includes.side-bar')

            <!-- main col -->
            <div id="main_col" class="col-md-10 main_col_right">
                <div class="container single_wrap">

                    <ul id="bread_crumb" class="clearfix">
                        <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb" class="home"><a
                                itemprop="url" href="https://casiris.local/" style="visibility: visible;"><span
                                    itemprop="title">ホーム</span></a></li>

                        <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url"
                                href="{{ url('/news') }}" style="visibility: visible;"><span
                                    itemprop="title">ニュース</span></a></li>
                        <li class="last">{{ $post->title }}</li>

                    </ul>

                    <header class="entry-header">
                        <p class="entry-meta">
                            <time class="blog-date" datetime="2021-09-22">{{ $post->created_at }}</time>
                        </p>
                        <h2 class="page-title" style="font-size:18px">{{ $post->title }}</h2>
                    </header>
                    <div class="row">
                        <div class="col-md-12 entry-content">
                            <div id="edit-area" class="post_content" style="font-size:14px">
                                <p><p>{!! nl2br(e($post->body)) !!}</p></p>
                            </div>
                            <div id="previous_next_post" class="clearfix">
                                <a class="prev_post"
                                    href="https://casiris.local/news/%e8%87%a8%e6%99%82%e4%bc%91%e6%a5%ad%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b-2/"
                                    title="臨時休業のお知らせ">
                                    <p class="clearfix"><span class="title">臨時休業のお知らせ</span></p>
                                </a><a class="next_post"
                                    href="https://casiris.local/news/%e5%ba%97%e9%95%b7%e9%80%80%e8%81%b7%e5%8f%8a%e3%81%b3%e6%96%b0%e5%ba%97%e9%95%b7%e5%b0%b1%e4%bb%bb%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"
                                    title="店長退職及び新店長就任のお知らせ">
                                    <p class="clearfix"><span class="title">店長退職及び新店長就任のお知らせ</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>






                @include('includes.footer')
