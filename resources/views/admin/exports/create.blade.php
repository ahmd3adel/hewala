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
        <form action="{{ route('exports.store') }}" method="POST">
            @csrf <!-- CSRF Token -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient">اسم المستفيد</label>
                        <input type="text" class="form-control" id="recipient" name="recipient" placeholder="ادخل اسم المستفيد">
                        @error('recipient')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="mobile">جوال المستفيد</label>
                        <input type="text" class="form-control" id="mobile" name="phone" placeholder="ادخل جوال المستفيد">
                        @error('mobile')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sent_currency">الفرع</label>
                        <input type="text" class="form-control" id="sent_currency" name="branch" placeholder="ادخل العملة المرسلة">
                        @error('branch')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="sent_currency">العملة المرسلة</label>
                        <input type="text" class="form-control" id="sent_currency" name="sent_currency" placeholder="ادخل العملة المرسلة">
                        @error('sent_currency')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="amount_sent"> المبلغ المرسل</label>
                        <input type="text" class="form-control" id="amount_sent" name="amount_sent" placeholder="ادخل المبلغ المرسل">
                        @error('amount_sent')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="country">الجهة</label>
                        <select id="country" class="form-control" name="country">
                            <option selected>اختر...</option>
                            <option>مصر</option>
                            <option>المملكة العربية السعودية</option>
                            <option>الإمارات العربية المتحدة</option>
                        </select>
                        @error('country')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="received_currency">العملة المستلمة</label>
                        <input type="text" class="form-control" id="received_currency" name="received_currency" placeholder="ادخل العملة المستلمة">
                        @error('received_currency')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="amount_received">المبلغ المستلم</label>
                        <input type="text" class="form-control" id="amount_received" name="received_amount" placeholder="ادخل المبلغ المستلم">
                        @error('received_amount')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tax">الضريبة</label>
                        <input type="text" class="form-control" id="tax" name="tax" placeholder="ادخل الضريبة">
                        @error('tax')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">إرسال</button>
        </form>
    </div>
@endsection
