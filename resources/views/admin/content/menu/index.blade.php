@extends('admin.layouts.master')

@section('head-tag')
<title> منو </title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">بخش محتوی</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> منو </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                    منو
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.content.menu.create') }}" class="btn btn-info btn-sm ">ایجاد منو جدید</a>

            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام منو</th>
                            <th> منو والد </th>
                            <th> لینک منو </th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>کالای الکترونیکی</td>
                            <td>-</td>
                            <td>http://127.0.0.1:8000/category/کالای-الکترونیکی</td>
                            <td class="width-16-rem text-left">
                                <a href="{{ route('admin.content.comment.show'); }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i> حذف</button>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>موبایل</td>
                            <td>کالای الکترونیکی</td>
                            <td>http://127.0.0.1:8000/category/موبایل</td>
                            <td class="width-16-rem text-left">
                                <a href="{{ route('admin.content.comment.show'); }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i> حذف</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

        </section>
    </section>
</section>

@endsection
