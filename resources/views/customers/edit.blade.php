@extends('layouts.app')
@section('content')
<div style="max-width:480px;margin:30px auto;background:#fff;padding:32px 36px 28px 36px;border-radius:16px;box-shadow:0 2px 20px #f0810f22;">
    <div style="text-align:center">
        <img src="https://cdn-icons-png.flaticon.com/512/1077/1077012.png" width="54" style="margin-bottom:12px;">
    </div>
    <h2 style="color:#f0810f;text-align:center;margin-bottom:14px;font-weight:700;">Sửa khách hàng</h2>
    @if($errors->any())
    <div style="color:#d35e5e;margin-bottom:16px;">{!! implode('', $errors->all('<div>:message</div>')) !!}</div>
    @endif
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div style="margin-bottom:10px;">
            <label>Tên:</label>
            <input name="name" class="form-control" style="width:100%;border-radius:6px;" value="{{ old('name', $customer->name) }}">
        </div>
        <div style="margin-bottom:10px;">
            <label>Email:</label>
            <input name="email" class="form-control" style="width:100%;border-radius:6px;" value="{{ old('email', $customer->email) }}">
        </div>
        <div style="margin-bottom:10px;">
            <label>SĐT:</label>
            <input name="phone" class="form-control" style="width:100%;border-radius:6px;" value="{{ old('phone', $customer->phone) }}">
        </div>
        <div style="margin-bottom:18px;">
            <label>Địa chỉ:</label>
            <input name="address" class="form-control" style="width:100%;border-radius:6px;" value="{{ old('address', $customer->address) }}">
        </div>
        <button type="submit" style="background:#f0810f;color:#fff;padding:10px 22px;border-radius:7px;">Cập nhật</button>
        <a href="{{ route('customers.index') }}" style="margin-left:24px;">Quay lại</a>
    </form>
</div>
@endsection
