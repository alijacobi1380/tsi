@extends('producer.layout.sidebar')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">جدول‌های واکنشگرا</h4>
                <p class="card-title-desc">
                    جدول های واکنش گرا را با قرار دادن هر <code>.table</code> داخل <code>.table-responsive</code> میتوانید ایجاد کنید تا در دستگاه های کوچک (زیر 768px) به صورت افقی اسکرول شوند.
                </p>

                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>لورم ایپسوم متن</th>
                                <th>لورم ایپسوم متن</th>
                                <th>لورم ایپسوم متن</th>
                                <th>لورم ایپسوم متن</th>
                                <th>لورم ایپسوم متن</th>
                                <th>لورم ایپسوم متن</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>لورم ایپسوم</td>
                                <td>لورم ایپسوم</td>
                                <td>لورم ایپسوم</td>
                                <td>لورم ایپسوم</td>
                                <td>لورم ایپسوم</td>
                                <td>لورم ایپسوم</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>لورم ایپسوم</td>
                                <td>لورم ایپسوم</td>
                                <td>لورم ایپسوم</td>
                                <td>لورم ایپسوم</td>
                                <td>لورم ایپسوم</td>
                                <td>لورم ایپسوم</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>لورم ایپسوم</td>
                                <td>لورم ایپسوم</td>
                                <td>لورم ایپسوم</td>
                                <td>لورم ایپسوم</td>
                                <td>لورم ایپسوم</td>
                                <td>لورم ایپسوم</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end row -->
    
@endsection