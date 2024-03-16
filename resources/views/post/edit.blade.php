<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            フォーム
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto px-6">
        @if(session('message'))
            <div class="text-red-600 font-bold">
                {{session('message')}}
            </div>
        @endif
        <form method="post" action="{{ route('post.update',$post) }}" >{{-- ①送信後、post.updateルート設定に処理を渡す --}}
            @csrf
            @method('patch'){{--②patchメソッドを指定--}}
            <div class="mt-8">
                <div class="w-full flex flex-col" >
                    <label for="title" class="font-semibold mt-4">件名</label>
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    <input type="text" name="title" class="w-atuo py-2 border border-gray-300 rounded-md" id="title" value="{{old('title',$post->title)}}">{{--③更新時のold関数の書き方--}}
                </div>
            </div>
            <div class="w-full flex flex-col">
                <label for="body" class="font-semibold mt-4">本文</label>
                <x-input-error :messages="$errors->get('body')" class="mt-2" />
                <textarea name="body" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="5">{{old('body',$post->body)}}{{--④更新時のold関数の書き方 ※oldはお助け関数--}}</textarea >
            </div>
            <x-primary-button class="mt-4">
                送信する
            </x-primary-button>
        </form>
    </div>
</x-app-layout>