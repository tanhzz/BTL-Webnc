@extends('layouts.app')
@section('content')
<div style="max-width:500px;margin:30px auto;background:#fff;padding:32px 36px 28px 36px;border-radius:16px;box-shadow:0 2px 20px #2d88ff11;">
    <div style="text-align:center">
        <img src="https://cdn-icons-png.flaticon.com/512/2354/2354080.png" width="62" style="margin-bottom:12px;">
    </div>
    <h2 style="color:#f0810f;text-align:center;margin-bottom:14px;font-weight:700;">Sửa phòng/căn hộ</h2>
    @if($errors->any())
    <div style="color:#d35e5e;margin-bottom:16px;">{!! implode('', $errors->all('<div>:message</div>')) !!}</div>
    @endif
    <form action="{{ route('rooms.update', $room->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div style="margin-bottom:10px;">
            <label>Số phòng:</label>
            <input name="room_number" class="form-control" style="width:100%;border-radius:6px;" value="{{ old('room_number', $room->room_number) }}">
        </div>
        <div style="margin-bottom:10px;">
            <label>Loại:</label>
            <input name="type" class="form-control" style="width:100%;border-radius:6px;" value="{{ old('type', $room->type) }}">
        </div>
        <div style="margin-bottom:10px;">
            <label>Giá:</label>
            <input name="price" type="number" class="form-control" style="width:100%;border-radius:6px;" value="{{ old('price', $room->price) }}">
        </div>
        <div style="margin-bottom:20px;">
            <label>Trạng thái:</label>
            <select name="status" style="width:100%;border-radius:6px;">
                <option value="available" {{ $room->status == 'available' ? 'selected' : '' }}>Trống</option>
                <option value="rented" {{ $room->status == 'rented' ? 'selected' : '' }}>Đã thuê</option>
            </select>
        </div>
        <button type="submit" style="background:#f0810f;color:#fff;padding:10px 22px;border-radius:7px;">Cập nhật</button>
        <a href="{{ route('rooms.index') }}" style="margin-left:24px;">Quay lại</a>
    </form>
</div>
@endsection
