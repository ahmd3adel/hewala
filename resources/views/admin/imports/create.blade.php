@extends('admin.app')

@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">ارسال حوالة</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
            <li class="breadcrumb-item active">انشاء حوالة</li>
        </ol>
    </div><!-- /.col -->
@endsection

@section('content')
    <div class="container">
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient">اسم المستفيد</label>
                        <input type="text" class="form-control" id="recipient" placeholder="ادخل اسم المستفيد">
                    </div>
                    <div class="form-group">
                        <label for="mobile">جوال المستفيد</label>
                        <input type="text" class="form-control" id="mobile" placeholder="ادخل جوال المستفيد">
                    </div>
                    <div class="form-group">
                        <label for="sent_currency">العملة المرسلة</label>
                        <input type="text" class="form-control" id="sent_currency" placeholder="ادخل العملة المرسلة">
                    </div>
                    <div class="form-group">
                        <label for="amount_sent"> المبلغ المرسل</label>
                        <input type="text" class="form-control" id="amount_sent" placeholder="ادخل المبلغ المرسل">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="country">الجهة</label>
                        <select id="country" class="form-control">
                            <option selected>اختر...</option>
                            <option>مصر</option>
                            <option>المملكة العربية السعودية</option>
                            <option>الإمارات العربية المتحدة</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="received_currency">العملة المستلمة</label>
                        <input type="text" class="form-control" id="received_currency" placeholder="ادخل العملة المستلمة">
                    </div>
                    <div class="form-group">
                        <label for="amount_received">المبلغ المستلم</label>
                        <input type="text" class="form-control" id="amount_received" placeholder="ادخل المبلغ المستلم">
                    </div>
                    <div class="form-group">
                        <label for="tax">الضريبة</label>
                        <input type="text" class="form-control" id="tax" placeholder="ادخل الضريبة">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">إرسال</button>
        </form>
    </div>
@endsection
