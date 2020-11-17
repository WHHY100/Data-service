<?php


namespace App\Http\Controllers;

use App\Models\PostsData;

class PostsDataController
{
    public function show($slug){

        $slug = filter_var($slug, FILTER_SANITIZE_STRING);
        $slug = strip_tags($slug);

        $title = PostsData::where('slug', $slug) ->firstOrFail();
        $content = PostsData::where('slug', $slug) -> skip(1) -> firstOrFail();
        $reports = PostsData::where('slug', $slug) -> skip(2) -> firstOrFail();
        $data = PostsData::where('slug', $slug) -> skip(3) -> firstOrFail();
        $link = PostsData::where('slug', $slug) -> skip(4) -> firstOrFail();

        return view('post', [
            'title' => $title->body,
            'content' => $content->body,
            'reports' => $reports->body,
            'data' => $data->body,
            'post' => $slug,
            'downloadData' => $link->body
        ]);
    }
}
