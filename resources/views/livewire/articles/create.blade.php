<?php
use function Livewire\Volt\{state};
use App\Models\Article;
state(['title', 'body']);
// 論文を保存する関数
$store = function () {
    Article::create([
        'title' => $this->title,
        'body' => $this->body,
    ]);
    return redirect()->route('articles.index');
};
?>

<div>
    <h1>新規論文投稿</h1>

    <form wire:submit="store">
        <p>
            <label for="title">論文タイトル</label><br>
            <input type="text" wire:model="title" id="title">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea wire:model="body" id="body"></textarea>
        </p>

        <button type="submit">投稿</button>
    </form>
</div>
