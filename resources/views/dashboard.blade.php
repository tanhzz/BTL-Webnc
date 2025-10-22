@extends('layouts.app')

@section('content')
<div style="display: flex;justify-content: center;align-items: center;min-height: 65vh;background: linear-gradient(90deg,#f1f4fc,#dff1ef 80%);">
    <div style="background: #fff; border-radius: 20px; box-shadow: 0 3px 24px #1e465411; padding: 32px 40px; min-width: 400px; max-width:90vw;">
        <div style="text-align:center;">
            <img src="https://cdn-icons-png.flaticon.com/512/2354/2354080.png" width="90" style="margin-bottom:16px;">
        </div>
        <h2 style="text-align:center; color: #3795f6; margin-bottom: 30px; letter-spacing:1px;font-weight:800;">
            Quản Lý Nhà Trọ - Khách Sạn
        </h2>
        <div style="display: flex; gap: 18px; justify-content:center; margin-bottom: 18px;">
            <div style="background:#2d88ff1a;color:#3795f6;padding:16px 30px; border-radius:10px; min-width:115px;box-shadow:0 1px 4px #2d88ff1c;">
                <div style="font-size:15.5px;">Tổng phòng</div>
                <div style="font-size:27px;font-weight:600;">{{ $totalRooms }}</div>
            </div>
            <div style="background:#00c89622; color:#36b37e; padding:16px 30px; border-radius:10px; min-width:115px;box-shadow:0 1px 4px #36b37e15;">
                <div style="font-size:15.5px;">Phòng trống</div>
                <div style="font-size:27px;font-weight:600;">{{ $totalAvailable }}</div>
            </div>
            <div style="background:#f0810f1a;color:#f0810f; padding:16px 30px;border-radius:10px; min-width:115px;box-shadow:0 1px 4px #f0810f15;">
                <div style="font-size:15.5px;">Khách</div>
                <div style="font-size:27px;font-weight:600;">{{ $totalCustomers }}</div>
            </div>
        </div>
        <div style="display: flex; gap:24px; justify-content:center; margin-top:24px;">
            <a href="{{ route('rooms.index') }}" style="background:#3795f6;color:#fff;padding:13px 26px; border-radius:7px; font-weight:600; text-decoration:none;box-shadow:0 2px 8px #3795f622;">Quản lý phòng</a>
            <a href="{{ route('customers.index') }}" style="background:#36b37e; color:#fff; padding:13px 26px; border-radius:7px; font-weight:600; text-decoration:none;box-shadow:0 2px 8px #36b37e22;">Quản lý khách</a>
        </div>
    </div>
</div>
@endsection
