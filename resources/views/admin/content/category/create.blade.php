@extends('admin.layouts.master')

@section('head-tag')
<title> ایجاد دسته بندی </title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
        <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
        <li class="breadcrumb-item font-size-12"> <a href="#">دسته بندی</a></li>
        <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد دسته بندی</li>
    </ol>
</nav>


<section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                    ایجاد دسته بندی
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.content.category.index') }}" class="btn btn-info btn-sm">بازگشت</a>

            </section>

            <section>
                <form action="{{ route("admin.content.category.store") }}" method="POST" enctype="multipart/form-data" id="form">
                    @csrf
                    <section class="row">
                        <section class="col-12 col-md-6 my-2">
                            <div class="form-group">
                                <label for="name">
                                    نام دسته
                                </label>
                                <input type="text" class="form-control form-control-sm" name="name" id="name" value="{{ old('name') }}">
                            </div>
                            @error('name')
                            <span class="alert-required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                            @enderror
                        </section>

                        <section class="col-12 col-md-6 my-2">
                            <div class="form-group">
                                <label for="tag">
                                    تگ ها
                                </label>
                                <input type="hidden" class="form-control form-control-sm" name="tags" id="tags" value="{{ old('tags') }}">
                                <select id="select_tags" class="select2 form-control form-control-sm" multiple>

                                </select>
                            </div>
                            @error('tags')
                            <span class="alert-required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                            @enderror
                        </section>


                        <section class="col-12 col-md-6 my-2">
                            <div class="form-group">
                                <label for="status">
                                    وضعیت
                                </label>
                                <select name="status" id="" class="form-control form-control-sm" id="status">
                                    <option value="0" @if(old('status') == 0) selected @endif> غیر فعال </option>
                                    <option value="1" @if(old('status') == 1) selected @endif> فعال </option>
                                </select>
                            </div>
                            @error('status')
                            <span class="alert-required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                            @enderror
                        </section>

                            <section class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    <label for="image">
                                        تصویر
                                    </label>
                                    <input type="file" class="form-control form-control-sm" name="image" id="image" >
                                </div>
                                @error('image')
                            <span class="alert-required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                            @enderror
                            </section>


                            <section class="col-12">
                                <div class="form-group">
                                    <label for="body">
                                        پاسخ
                                    </label>
                                    <textarea name="description" class="form-control form-control-sm" id="body" cols="30" rows="10" >{{ old('description') }}</textarea>
                                </div>
                                @error('description')
                            <span class="alert-required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                            @enderror
                            </section>
                        </section>
                        <section class="col-12 my-3">
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
        CKEDITOR.replace('description');
    </script>
    <script>
        $(document).ready(function(){
            var tags_input= $('#tags');
            var select_tags= $('#select_tags');
            var default_tags= tags_input.val();
            var default_data= null;

            if(tags_input.val() !== null && tags_input.val().length > 0){
                default_data = default_tags.split(',');
            }


            select_tags.select2({
                placeholder:'لطفا تگ های خود را وارد کنید',
                tags:true,
                data: default_data
            });
            select_tags.children('option').attr('selected' , true).trigger('change');


            $('#form').submit(function( event ){
                if(select_tags.val() !== null && select_tags.val().length > 0){
                    var selectedSource = select_tags.val().join(',');
                    tags_input.val(selectedSource);
                }
            })
        })
    </script>
@endsection
