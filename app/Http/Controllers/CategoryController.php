<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=[
            'title'=>'List Category',
            'categories'=> Category::Where('category_name', '<>', 'Headline')->get(),
            'route' => route('category.create'),
        ];
        return view('admin.category.index', $category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=[
            'title'=>'Create Category',
            'method'=>'POST',
            'route' => route('category.store'),
        ];
        return view('admin.category.editor', $category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $user_id = auth()->user()->id;

        $category->user_id = $user_id;
        $category->category_name = $request->cat_name;
        $category->category_slug = $request->cat_slug;
        $category->updated_by = $user_id;
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    // {
    //     $category = Category::where('category_slug', $name)->first();
    //     $posts = Post::where('category_id', $category->id)->paginate(5);
    //     $category_name = $category->category_name;
    //     return view('category.show', compact('posts', 'category_name'));
    // }
    {
        $data = [
            'title' => 'Category Post',
            'category' => Category::where('category_id', $id)->first(),
            'posts' => Post::where('category_id', $id)->orderBy('created_at', 'desc')->paginate(5),
        ];
        return view('frontend.blog', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Category',
            'method' => 'PUT',
            'route' => route('category.update', $id),
            'category' => Category::where('id', $id)->first(),
        ];
        return view('admin.category.editor', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cat = Category::find($id);
        $user_id = auth()->user()->id;
        $cat->category_name = $request->cat_name;
        $cat->category_slug = $request->cat_slug;
        $cat->updated_by = auth()->user()->id;
        $cat->update();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy =Category::where('id', $id);
        $destroy->delete();
        return redirect(route('category.index'));
    }
}
