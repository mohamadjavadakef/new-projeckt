@extends('admin.layouts.master')

@section('head-tag')
<title>  کوپن تخفیف  </title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> کوپن تخفیف </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                    کوپن تخفیف
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.market.discount.copan.create') }}" class="btn btn-info btn-sm">ایجاد کوپن تخفیف</a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th> کد کوپن </th>
                            <th>  درصد تخفیف </th>
                            <th>  سقف تخفیف </th>
                            <th> نوع کوپن </th>
                            <th>  تاریخ شروع </th>
                            <th>  تاریخ پایان </th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>  fghdfhdh </td>
                            <td> 15% </td>
                            <td> 26,000  </td>
                            <td>  عمومی</td>
                            <td> 24 اردیبهشت 99 </td>
                            <td> 31 اردیبهشت 99 </td>
                            <td class="width-16-rem text-left">
                                <a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> ویرایش</a>
                                <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i> حذف</button>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>  fghdfhdh </td>
                            <td> 15% </td>
                            <td> 26,000  </td>
                            <td>  عمومی</td>
                            <td> 24 اردیبهشت 99 </td>
                            <td> 31 اردیبهشت 99 </td>
                            <td class="width-16-rem text-left">
                                <a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> ویرایش</a>
                                <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i> حذف</button>
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>  fghdfhdh </td>
                            <td> 15% </td>
                            <td> 26,000  </td>
                            <td>  عمومی</td>
                            <td> 24 اردیبهشت 99 </td>
                            <td> 31 اردیبهشت 99 </td>
                            <td class="width-16-rem text-left">
                                <a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> ویرایش</a>
                                <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i> حذف</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </section>

        </section>
    </section>
</section>

@endsection
