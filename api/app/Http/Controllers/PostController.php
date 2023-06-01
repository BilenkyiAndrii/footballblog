<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Controllers\CategoryController;
use Illuminate\Pagination\LengthAwarePaginator;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image',
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images/posts');
            $imageName = basename($imagePath);
            $validatedData['image'] = $imageName;
        }

        Post::create($validatedData);

        return redirect('/posts');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->name = $request->input('name');
        $post->description = $request->input('description');
        $post->category_id = $request->input('category_id');

        // Якщо потрібно оновити зображення, обробте його окремо

        if ($request->hasFile('image')) {
            // Отримайте файл зображення з запиту
            $image = $request->file('image');

            // Опрацюйте та збережіть зображення
            // Наприклад, використовуючи клас Intervention Image
            $imagePath = $image->store('public/images/posts');
            $imageName = basename($imagePath);
            $post->image = $imageName; // Збереження назви файлу зображення
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Пост оновлено успішно');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts');
    }
}
