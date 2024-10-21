<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\PostService;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    protected PostService $postService;

    /**
     * @param PostService $postService
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $posts = $this->postService->index();
        return view('post.index', compact('posts'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('post.create');
    }

    /**
     * @return RedirectResponse
     */
    public function store(): RedirectResponse
    {
        $this->postService->storePost();
        return redirect()->route('post.index');
    }

    /**
     * @param Post $post
     * @return View
     */
    public function show(Post $post): View
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post): View
    {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post): RedirectResponse
    {
        $this->postService->update($post);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post): RedirectResponse
    {
        $this->postService->destroy($post);
        return redirect()->route('post.index');
    }
}
