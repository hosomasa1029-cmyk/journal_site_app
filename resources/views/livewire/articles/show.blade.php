<?php

use function Livewire\Volt\{state};
use App\Models\Article;
// ルートモデルバインディング
state(['memo' => fn(Article $article) => $article]);
$index = function () {
    return redirect()->route('articles.index');
};
$edit = function () {
    return redirect()->route('articles.edit');
};
// $delete = function () {

// };
?>

<div>
    <h1>論文詳細</h1>
    <p>{{ 'タイトル: ' . $memo->title }}</p>
    <p>{!! nl2br(e($memo->body)) !!}</p>
    <button wire:click="index">一覧へ戻る</button>
    <button wire:click="edit">編集する</button>
    <button wire:click="delete">削除する</button>
</div>
