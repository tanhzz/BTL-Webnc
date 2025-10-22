@extends('layouts.app')
@section('content')
    <h2>Tạo hợp đồng thuê mới</h2>
    <form action="{{ route('contracts.store') }}" method="POST">@csrf
        <p>Khách thuê: 
            <select name="customer_id">
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
        </p>
        <p>Phòng: 
            <select name="room_id">
                @foreach ($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->room_number }}</option>
                @endforeach
            </select>
        </p>
        <p>Ngày bắt đầu: <input type="date" name="start_date"></p>
        <p>Ngày kết thúc: <input type="date" name="end_date"></p>
        <p>Giá: <input name="price"></p>
        <p>Ghi chú: <input name="notes"></p>
        <button type="submit">Tạo</button>
    </form>
    <a href="{{ route('contracts.index') }}">Quay lại</a>
@endsection
