@extends('admin.layouts.master')

@section('head-tag')
<title> ایجاد نقش</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">بخش کاربران</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#"> نقش ها</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد نقش</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                    ایجاد نقش
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.user.role.index') }}" class="btn btn-info btn-sm">بازگشت</a>

            </section>

            <section>
                <form action="" method="">
                    <section class="row">
                        <section class="col-12 col-md-5">
                            <div class="form-group">
                                <label for="">
                                    عنوان نقش
                                </label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </section>
                        <section class="col-12 col-md-5">
                            <div class="form-group">
                                <label for="">
                                    توضیح نقش
                                </label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </section>
                            <section class="col-12 col-md-2 mt-md-4">
                                <button class="btn btn-primary btn-sm">ثبت</button>
                            </section>
                            <section class="col-12">
                                <section class="row border-top mt-3 py-3">
                                    <section class="col-md-3 col-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="" id="check1" checked>
                                            <label for="check1" class="form-check-label mr-4 mt-1">نمایش دسته جدید </label>
                                        </div>
                                    </section>
                                    <section class="col-md-3 col-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="" id="check1" checked>
                                            <label for="check1" class="form-check-label mr-4 mt-1">نمایش دسته جدید </label>
                                        </div>
                                    </section>
                                    <section class="col-md-3 col-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="" id="check1" checked>
                                            <label for="check1" class="form-check-label mr-4 mt-1">نمایش دسته جدید </label>
                                        </div>
                                    </section>
                                    <section class="col-md-3 col-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="" id="check1" checked>
                                            <label for="check1" class="form-check-label mr-4 mt-1">نمایش دسته جدید </label>
                                        </div>
                                    </section>
                                    <section class="col-md-3 col-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="" id="check1" checked>
                                            <label for="check1" class="form-check-label mr-4 mt-1">نمایش دسته جدید </label>
                                        </div>
                                    </section>
                                    <section class="col-md-3 col-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="" id="check1" checked>
                                            <label for="check1" class="form-check-label mr-4 mt-1">نمایش دسته جدید </label>
                                        </div>
                                    </section>
                                    <section class="col-md-3 col-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="" id="check1" checked>
                                            <label for="check1" class="form-check-label mr-4 mt-1">نمایش دسته جدید </label>
                                        </div>
                                    </section>
                                    <section class="col-md-3 col-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="" id="check1" checked>
                                            <label for="check1" class="form-check-label mr-4 mt-1">نمایش دسته جدید </label>
                                        </div>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                </form>
            </section>

        </section>
    </section>
</section>

@endsection
