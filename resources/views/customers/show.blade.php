@extends('layouts.app')
@section('content')
<div style="max-width:420px; margin:35px auto;background-image:linear-gradient(140deg,#f4fbff,#fff 85%);border-radius:18px;box-shadow:0 2px 18px #3795f622;padding:32px 32px;">
    <div style="text-align:center;">
        <img src="https://cdn-icons-png.flaticon.com/512/1077/1077012.png" width="60" style="margin-bottom:10px;">
    </div>
    <h2 style="text-align:center;color:#36b37e;font-weight:800;margin-bottom:15px;">
        Chi tiết khách hàng
    </h2>
    <div style="font-size:18px;margin-bottom:7px;"><b>Tên:</b> <span style="color:#36b37e;">{{ $customer->name }}</span></div>
    <div style="font-size:18px;margin-bottom:7px;"><b>Email:</b> {{ $customer->email }}</div>
    <div style="font-size:18px;margin-bottom:7px;"><b>SĐT:</b> <span style="color:#3795f6;">{{ $customer->phone }}</span></div>
    <div style="font-size:18px;"><b>Địa chỉ:</b> {{ $customer->address }}</div>
    <div style="text-align:center;margin-top:16px;">
        <a href="{{ route('customers.index') }}" style="background:#36b37e;color:#fff;padding:9px 17px;border-radius:6px;text-decoration:none;">Danh sách khách</a>
    </div>
</div>
@endsection
