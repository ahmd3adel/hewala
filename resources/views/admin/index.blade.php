@extends('admin.app')

@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0 text-dark" style="font-size: 18px;">الرئيسية</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" style="font-size: 14px;">Page</li>
        </ol>
    </div><!-- /.col -->
@endsection

@section('content')
    <!-- Balance Overview Section -->
    <div class="row">
        <div class="col-md-12 mb-3">
            <h4 class="section-title">نظرة عامة على الرصيد</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card card-custom">
                <div class="card-body bg-info">
                    <h3 class="card-title">حركات صادرة</h3>
                    <p class="card-text">150</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card card-custom">
                <div class="card-body bg-success">
                    <h3 class="card-title">حركات واردة</h3>
                    <p class="card-text">53<sup style="font-size: 16px;">%</sup></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Balance Overview Section -->

    <!-- Accounts State Section -->
    <div class="row mt-3">
        <div class="col-md-12 mb-3">
            <h4 class="section-title">حالة الحسابات</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card card-custom">
                <div class="card-body">
                    <i class="fas fa-dollar-sign fa-2x"></i>
                    <h4 class="card-title">الدولار</h4>
                    <p class="card-text">250</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card card-custom">
                <div class="card-body">
                    <i class="fas fa-euro-sign fa-2x"></i>
                    <h4 class="card-title">اليورو</h4>
                    <p class="card-text">300</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card card-custom">
                <div class="card-body">
                    <i class="fas fa-pound-sign fa-2x"></i>
                    <h4 class="card-title">الليرة</h4>
                    <p class="card-text">500</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Accounts State Section -->

    <!-- Transaction History Section -->
    <div class="row mt-3">
        <div class="col-md-12 mb-3">
            <h4 class="section-title">سجل العمليات</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-custom">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>المستخدم</th>
                                <th>التاريخ</th>
                                <th>الحالة</th>
                                <th>السبب</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>أحمد محمود</td>
                                <td>2024-05-01</td>
                                <td><span class="badge badge-success">تمت الموافقة</span></td>
                                <td>تمت الموافقة على العملية بنجاح.</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>محمد علي</td>
                                <td>2024-05-02</td>
                                <td><span class="badge badge-warning">قيد الانتظار</span></td>
                                <td>في انتظار الموافقة على العملية.</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>سارة حسن</td>
                                <td>2024-05-03</td>
                                <td><span class="badge badge-danger">تم الرفض</span></td>
                                <td>تم رفض العملية بسبب عدم توفر الرصيد الكافي.</td>
                            </tr>
                            <!-- Add more transaction rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Transaction History Section -->



@endsection
