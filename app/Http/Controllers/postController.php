<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    } //①作成

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400',
        ]);

        $validated['user_id'] = auth()->id(); //$validatedの中にuser_id情報(ログインしているユーザーの情報)を追加する

        $post = Post::create($validated);
        $request->session()->flash('message', '保存しました');
        // return back();
        return redirect()->route('post.index');
    } //②保存

    public function index()
    {
        // $posts のデータを取得するロジック（例として Eloquent モデルを使用）
        $posts = Post::all();
        // $post_02 = Post::all();

        // 'news/index.blade.php' に $posts を渡す
        return view('news.index', compact('posts'));

        // 'post/index.blade.php' にも同じ $posts を渡す
        // return view('post.index', compact('posts'));
    }




    public function show(Post $post)
    { //Postはタイプヒントと呼ばれ、因数の型を指定している。理由は、投稿テーブルから、ルートパラメータの数字がIDとなる投稿データを取得させるため。(依存注入)
        return view('post.show', compact('post')); //ビューファイルに$postsを渡している
    }

    // public function edit(Post $post)
    // {
    //     // return view('post.edit', compact('post'));
    //     // return redirect()->route('post.index');

    //     // 編集が成功したら記事一覧へリダイレクト
    //     // if ($post->conditionIsMet()) {
    //     //     return redirect()->route('post.index')->with('success', '編集が成功しました');
    //     //     return redirect()->route('post.index');
    //     // }
    //     if ($post->conditionIsMet()) {
    //         return redirect()->route('post.index')->with('success', '編集が成功しました');
    //     }
        
    //     return redirect()->route('post.index');
        
    //     // 条件が満たされない場合は編集ページを表示
    //     return view('post.edit', compact('post'));
    // }

//     public function edit(Post $post)
// {
//     // 特定のユーザーが作成した投稿でない場合は編集ページを表示
//     if ($post->user_id !== auth()->id()) {
//         return view('post.edit', compact('post'));
//     }

//     // 特定のユーザーが作成した投稿の場合は記事一覧へリダイレクト
//     return redirect()->route('post.index')->with('success', '編集が成功しました');
// }



// public function edit(Post $post)
// {
//     // 特定のユーザーが作成した投稿の場合は記事一覧へリダイレクト
//     if ($post->user_id === auth()->id()) {
//         return redirect()->route('post.index')->with('success', '編集が成功しました');
//     }

//     // 特定のユーザーが作成した投稿でない場合は編集ページを表示
//     return view('post.edit', compact('post'));
// }

public function edit(Post $post)
{
    return view('post.edit', compact('post'));
}


    public function update(Request $request, Post $post) //「Request $request」はformから送信されたデータを受け取る。
    {
        $validated = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400',
        ]);
        $validated['user_id'] = auth()->id();
        $post->update($validated);
        $request->session()->flash('message', '更新しました');
        return redirect()->route('post.show', compact('post'));
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    } //「Request $request」はformから送信されたデータを受け取る。
}
