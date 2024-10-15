<?php

namespace App\Http\Controllers;

use App\Models\Post;
use JetBrains\PhpStorm\NoReturn;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    #[NoReturn] public function create(): void
    {
        $postArray = [
            [
                'title' => 'title of post from phpstorm',
                'content' => 'description of new post',
                'image' => 'image11.jpg',
                'likes' => 22,
                'is_published' => 1
            ],
            [
                'title' => 'another title of post from phpstorm',
                'content' => 'another description of new post',
                'image' => 'another_image12.jpg',
                'likes' => 65,
                'is_published' => 1
            ],
            [
                'title' => '3 title of post from phpstorm',
                'content' => 'description of new post',
                'image' => 'image13.jpg',
                'likes' => 242,
                'is_published' => 1
            ],
            [
                'title' => '4 another title of post from phpstorm',
                'content' => 'another description of new post',
                'image' => 'another_image14.jpg',
                'likes' => 120,
                'is_published' => 1
            ],
        ];
        foreach ($postArray as $item) {
            Post::create($item);
        }
        dd("Created all posts");
    }

    #[NoReturn] public function update(): void
    {
        $post = Post::find(3);
        $post->update(
            [
                'title' => 'update title',
                'likes' => 100,
                'is_published' => 0,
            ]
        );
        dd("Updated");
    }

    #[NoReturn] public function delete(): void
    {
        $post = Post::find(2);
        $post->delete();

//        $post = Post::withTrashed()->find(2);
//        $post?->restore();
        dd("Post is deleted");
    }

    #[NoReturn] public function firstOrCreate(): void
    {
        $post = Post::firstOrCreate(
            [
                'title' => 'new title post-11',
            ],
            [
                'title' => 'new title post-10',
                'content' => 'description of new post-10',
                'image' => 'image9.jpg',
                'likes' => 3072,
                'is_published' => 1
            ]);

        dump($post->content);

        dd('finished');
    }
}
