@extends('layouts.app')
@section('content')
<div style="max-width:420px; margin:35px auto;background-image:linear-gradient(140deg,#f4fbff,#fff 85%);border-radius:18px;box-shadow:0 2px 18px #3795f622;padding:32px 32px;">
    <div style="text-align:center;">
        <img src="https://cdn-icons-png.flaticon.com/512/2354/2354080.png" width="72" style="margin-bottom:10px;">
    </div>
    <h2 style="text-align:center;color:#2d88ff;font-weight:800;margin-bottom:15px;">
        Chi tiết phòng/căn hộ
    </h2>
    <div style="font-size:18px;margin-bottom:7px;"><b>Số phòng:</b> <span style="color:#3795f6;">{{ $room->room_number }}</span></div>
    <div style="font-size:18px;margin-bottom:7px;"><b>Loại:</b> {{ $room->type }}</div>
    <div style="font-size:18px;margin-bottom:7px;"><b>Giá:</b> <span style="color:#f0810f;">{{ $room->price }}</span></div>
    <div style="font-size:18px;">
        <b>Trạng thái:</b>
        @if($room->status === 'available') <span style="color:#36b37e;"><b>Còn trống</b></span>
        @else <span style="color:red;"><b>Đã thuê</b></span> @endif
    </div>
    <div style="text-align:center;margin-top:16px;">
        <a href="{{ route('rooms.index') }}" style="background:#3795f6;color:#fff;padding:9px 17px;border-radius:6px;text-decoration:none;">Danh sách phòng</a>
    </div>
</div>
@endsection
