<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Content\PostCategoryRequest;
use App\Http\Services\Image\ImageService;
use App\Models\Content\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
    public function store(PostCategoryRequest $request,ImageService $imageService)
    {
        $inputs = $request->all();
        if($request->hasFile('image')){
            $imageService->setExclusiveDirectory('images'. DIRECTORY_SEPARATOR . 'post-category');
            // $inputs['image'] = $imageService->save($request->file('image'));
            // $inputs['image'] = $imageService->fitAndSave($request->file('image'),600,150);
            // exit;
            $result = $imageService->createIndexAndSave($request->file('image'));

        }
        if($result === false){
            return redirect()->route('admin.content.category.index')->with('swal-error' , 'آپلود تصویر با خطلا مواجه شد');
        }
        $postCategory = PostCategory::create($inputs);
        return redirect()->route('admin.content.category.index')->with('swal-success' , 'دسته بندی جدید شما با موفقیت ثبت شد');
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
        return view('admin.content.category.edit', compact('postCategory'))->with('swal-success' , 'دسته بندی  شما با موفقیت ویرایش شد');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostCategoryRequest $request,PostCategory $postCategory)
    {
        $inputs = $request->all();
        $inputs['image']= 'image';
        $postCategory->update($inputs);
        return redirect()->route('admin.content.category.index')->with('swal-success' , 'دسته بندی  شما با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostCategory $postCategory)
    {
        $result = $postCategory->delete();
        return redirect()->route('admin.content.category.index')->with('swal-success' , 'دسته بندی  شما با موفقیت حذف شد');
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
