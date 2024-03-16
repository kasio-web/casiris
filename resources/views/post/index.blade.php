<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        一覧表示
        </h2>
    </x-slot>
    <div class="mx-auto px-6">
    @foreach($posts as $post)
        <div class="mt-4 p-8 bg-white w-full rounded-2xl">
            <h1 class="p-4 text-lg font-semibold">
               件名： <a href="{{route('post.show', $post)}}" class="text-blue-600">{{$post->title}}</a>
            </h1>
            <hr class="w-full">
            <p class="mt-4 p-4">
                {{$post->body}}
            </p>
            <div class="p-4 text-sm font-semibold">
                <p>
                    {{$post->created_at}}　/　 {{$post->user->name??'匿名'}}
                </p>
            </div>

                        {{-- 削除ボタン・更新ボタンここから --}}
                        <div class="text-right flex">    
                            <a href="{{route('post.edit',$post)}}" class="flex-1">{{-- 編集ページへのリンク --}}
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
                        {{-- 削除ボタン・更新ボタンここまで --}}

        </div>
    @endforeach
    </div>
</x-app-layout>