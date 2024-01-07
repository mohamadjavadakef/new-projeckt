@extends('admin.layouts.master')

@section('head-tag')
<title>سفارشات</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> سفارشات</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                    سفارشات
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="#" class="btn btn-info btn-sm disabled" disabled>ایجاد سفارش جدید</a>
                <div class="max-height-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th> کد سفارش </th>
                            <th>مبلغ سفارش</th>
                            <th>مبلغ تخفیف</th>
                            <th>مبلغ نهایی</th>
                            <th>وضعیت پرداخت</th>
                            <th>شیوه پرداخت</th>
                            <th>بانک</th>
                            <th>وضعیت ارسال</th>
                            <th>شیوه ارسال</th>
                            <th>وضعیت سفارشات</th>
                            <th class="width-8-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>45285857	</td>
                            <td>850,000 تومان</td>
                            <td>69,000 تومان</td>
                            <td>750,000 تومان</td>
                            <td>پرداخت شده	</td>
                            <td>آنلاین</td>
                            <td>ملت	</td>
                            <td>در حال ارسال</td>
                            <td>پیک موتوری	</td>
                            <td><img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="" srcset="" class="max-height-16-rem"></td>
                            <td class="width-8-rem text-left   ">
                                <div class="dropdown">
                                    <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-tools"> عملیات </i>
                                    </a>
                                    <div class="dropdown-menu z-1" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item text-right" href="#"><i class="fa fa-images"></i>مشاهده فاکتور</a>
                                        <a class="dropdown-item text-right" href="#"><i class="fa fa-list-ul"></i> تغییر وضعیت ارسال</a>
                                        <a class="dropdown-item text-right" href="#"><i class="fa fa-edit"></i> تغییر وضعیت سفارش</a>
                                        <a class="dropdown-item text-right" href="#"><i class="fa fa-close"></i> باطل کردن سفارش</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>45285857	</td>
                            <td>850,000 تومان</td>
                            <td>69,000 تومان</td>
                            <td>750,000 تومان</td>
                            <td>پرداخت شده	</td>
                            <td>آنلاین</td>
                            <td>ملت	</td>
                            <td>در حال ارسال</td>
                            <td>پیک موتوری	</td>
                            <td><img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="" srcset="" class="max-height-16-rem"></td>
                            <td class="width-8-rem text-left   ">
                                <div class="dropdown">
                                    <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-tools"> عملیات </i>
                                    </a>
                                    <div class="dropdown-menu z-1" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item text-right" href="#"><i class="fa fa-images"></i>مشاهده فاکتور</a>
                                        <a class="dropdown-item text-right" href="#"><i class="fa fa-list-ul"></i> تغییر وضعیت ارسال</a>
                                        <a class="dropdown-item text-right" href="#"><i class="fa fa-edit"></i> تغییر وضعیت سفارش</a>
                                        <a class="dropdown-item text-right" href="#"><i class="fa fa-close"></i> باطل کردن سفارش</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>45285857	</td>
                            <td>850,000 تومان</td>
                            <td>69,000 تومان</td>
                            <td>750,000 تومان</td>
                            <td>پرداخت شده	</td>
                            <td>آنلاین</td>
                            <td>ملت	</td>
                            <td>در حال ارسال</td>
                            <td>پیک موتوری	</td>
                            <td><img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="" srcset="" class="max-height-16-rem"></td>
                            <td class="width-8-rem text-left   ">
                                <div class="dropdown">
                                    <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-tools"> عملیات </i>
                                    </a>
                                    <div class="dropdown-menu z-1" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item text-right" href="#"><i class="fa fa-images"></i>مشاهده فاکتور</a>
                                        <a class="dropdown-item text-right" href="#"><i class="fa fa-list-ul"></i> تغییر وضعیت ارسال</a>
                                        <a class="dropdown-item text-right" href="#"><i class="fa fa-edit"></i> تغییر وضعیت سفارش</a>
                                        <a class="dropdown-item text-right" href="#"><i class="fa fa-close"></i> باطل کردن سفارش</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

        </section>
    </section>
</section>

@endsection
