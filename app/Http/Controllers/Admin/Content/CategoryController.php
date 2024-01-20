<?php

namespace App\Http\Controllers\Admin\Content;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Content\PostCategory;
use App\Http\Requests\Admin\Content\PostCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postCategories=PostCategory::orderBy('created_at','desc')->simplePaginate(15);
        return view('admin.content.category.index',compact('postCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.content.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostCategoryRequest $request)
    {
        $inputs = $request->all();
        $inputs['sluq']= str_replace(' ', '-',$inputs['name']) . '-' . Str::random(5);
        $inputs['image']= 'image';
        $postCategory = PostCategory::create($inputs);
        return redirect()->route('admin.content.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostCategory $postCategory)
    {
        return view('admin.content.category.edit', compact('postCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostCategoryRequest $request,PostCategory $postCategory)
    {
        $inputs = $request->all();
        $inputs['image']= 'image';
        $postCategory->update($inputs);
        return redirect()->route('admin.content.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostCategory $postCategory)
    {
        $result = $postCategory->delete();
        return redirect()->route('admin.content.category.index');
    }

    public function status(PostCategory $postCategory){
        $postCategory->status= $postCategory->status == 0 ? 1 : 0;
        $result= $postCategory->save();
        if($result){
            if ($postCategory->status == 0 ) {
                return response()->json(['status' => true , 'checked' => false]);
            }
            else{
                return response()->json(['status' => true , 'checked' => true]);
            }
        }
        else{
            return response()->json(['status' => false]);
        }
    }
}
