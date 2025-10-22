@extends('layouts.app')
@section('content')
    <h2>Sửa hợp đồng thuê</h2>
    <form action="{{ route('contracts.update', $contract->id) }}" method="POST">@csrf @method('PUT')
        <p>Khách thuê:
            <select name="customer_id">
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $contract->customer_id==$customer->id?'selected':'' }}>
                        {{ $customer->name }}
                    </option>
                @endforeach
            </select>
        </p>
        <p>Phòng: 
            <select name="room_id">
                @foreach ($rooms as $room)
                    <option value="{{ $room->id }}" {{ $contract->room_id==$room->id?'selected':'' }}>
                        {{ $room->room_number }}
                    </option>
                @endforeach
            </select>
        </p>
        <p>Ngày bắt đầu: <input type="date" name="start_date" value="{{ $contract->start_date }}"></p>
        <p>Ngày kết thúc: <input type="date" name="end_date" value="{{ $contract->end_date }}"></p>
        <p>Giá: <input name="price" value="{{ $contract->price }}"></p>
        <p>Ghi chú: <input name="notes" value="{{ $contract->notes }}"></p>
        <button type="submit">Cập nhật</button>
    </form>
    <a href="{{ route('contracts.index') }}">Quay lại</a>
@endsection
