<?php

namespace App\Services;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostService
{
    /**
     * @return void
     */
    public function storePost(): void
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        Post::create($data);
    }

    /**
     * @return Collection
     */
    public function index(): Collection
    {
       return Post::all();
    }

    /**
     * @param Post $post
     * @return void
     */
    public function update(Post $post): void
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        $post->update($data);
    }

    /**
     * @param Post $post
     * @return void
     */
    public function destroy(Post $post): void
    {
        $post->delete();
    }

}
