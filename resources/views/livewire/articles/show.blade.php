<?php

use function Livewire\Volt\{state};
use App\Models\Article;
// ルートモデルバインディング
state(['article' => fn(Article $article) => $article]);

// 論文の一覧表示へリダイレクト
$index = function () {
    return redirect()->route('articles.index');
};
// 論文の投稿データ編集へリダイレクト
$edit = function () {
    return redirect()->route('articles.edit', $this->article);
};

// 論文の投稿データ削除
$destroy = function () {
    $this->article->delete();
    return redirect()->route('articles.index');
};

?>

<div>
    <h1>論文詳細</h1>
    <p>{{ 'タイトル: ' . $article->title }}</p>
    <p>{!! nl2br(e($article->body)) !!}</p>
    <button wire:click="index">一覧へ戻る</button>
    <button wire:click="edit">編集する</button>
    <button wire:click="destroy" wire:confirm="本当に削除しますか？">削除する</button>
</div>
