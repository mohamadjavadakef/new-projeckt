@extends('admin.layouts.master')

@section('head-tag')
<title>  ایجاد پست </title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-size-12"> <a href="#"> خانه </a> </li>
        <li class="breadcrumb-item font-size-12"> <a href="#"> بخش محتوی </a> </li>
        <li class="breadcrumb-item font-size-12"> <a href="#"> پست ها </a> </li>
        <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد پست جدید </li>
    </ol>
</nav>


<section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                    ایجاد پست
                </h5>
            </section>
            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.content.post.index') }}" class="btn btn-info btn-sm">بازگشت</a>
            </section>
            <section>
                <form action="" method="">
                    <section class="row">
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">
                                    عنوان پست
                                </label>
                                <input type="text" name="" id="" class="form-control form-control-sm">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">
                                    انتخاب دسته
                                </label>
                                <select name="" id="" class="form-control form-control-sm">
                                    <option value="">دسته را انتخاب کنید</option>
                                    <option value="">وسایل الکترونیکی</option>
                                </select>
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">
                                    تصویر
                                </label>
                                <input type="file" name="" id="" class="form-control form-control-sm">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">
                                    تاریخ انتشار
                                </label>
                                <input type="text" name="" id="" class="form-control form-control-sm">
                            </div>
                        </section>
                        <section class="col-12">
                            <div class="form-group">
                                <label for="">
                                    پاسخ
                                </label>
                                <textarea name="" class="form-control form-control-sm" id="body" cols="30" rows="10"></textarea>
                            </div>
                        </section>
                        <section class="col-12">
                            <button class="btn btn-primary btn-sm">ثبت</button>
                        </section>
                    </section>
                </form>
            </section>
        </section>
    </section>
</section>

@endsection
@section('script')

    <script src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('body');
    </script>
@endsection
