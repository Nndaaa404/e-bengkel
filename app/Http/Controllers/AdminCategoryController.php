<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

// use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // if (!auth()->check() || auth()->user()->username !== 'nndaaa') {
        //     abort(403);
        // }

        // if(auth()->user()->username !== 'nndaaa') {
        //     abort(403);
        // }

        $this->authorize('admin');
        return view('dashboard.categories.index', [
            'categories' => Category::all()
        ]);

        // return view('dashboard.categories.index', [
        //     'categories' => category::where('user_id', auth()->user()->id)->get()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255',
            'slug' => 'required|unique:categories'
        ]);

        // $validatedData['id'] = auth()->user()->id;

        Category::create($validatedData);

        return redirect('/dashboard/categories')->with('success', 'New category has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        if ($category->author->id !== auth()->user()->id) {
            abort(403);
        }

        return view('dashboard.categories.show', [
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        // if ($post->author->id !== auth()->user()->id) {
        //     abort(403);
        // }

        return view('dashboard.categories.edit', [
            'category' => $category,
            'categories' => Category::all()
        ]);

        // return view('dashboard.categories.edit', [
        //     'category' => $category,
        //     'categories' => Category::where('id', '!=', $category->id)->get()
        // ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        $rules = [
            'name' => 'required|unique:categories|max:255',
            'slug' => 'required|unique:categories'
        ];

        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        // $validatedData['user_id'] = auth()->user()->id;

        // $post->update($validatedData);

        Category::where('id', $category->id)
            ->update($validatedData);

        return redirect('/dashboard/categories')->with('success', 'Category has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        Category::destroy($category->id);
        return redirect('/dashboard/categories')->with('success', 'Category has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}