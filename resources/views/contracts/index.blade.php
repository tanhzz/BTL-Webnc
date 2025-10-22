@extends('layouts.app')
@section('content')
    <h2>Danh sách hợp đồng thuê</h2>
    <a href="{{ route('contracts.create') }}">Tạo hợp đồng mới</a>
    <table border="1">
        <tr>
            <th>Khách thuê</th>
            <th>Phòng</th>
            <th>Bắt đầu</th>
            <th>Kết thúc</th>
            <th>Giá</th>
            <th>Thao tác</th>
        </tr>
        @foreach ($contracts as $contract)
        <tr>
            <td>{{ $contract->customer->name }}</td>
            <td>{{ $contract->room->room_number }}</td>
            <td>{{ $contract->start_date }}</td>
            <td>{{ $contract->end_date }}</td>
            <td>{{ number_format($contract->price) }} đ</td>
            <td>
                <a href="{{ route('contracts.show', $contract->id) }}">Xem</a> |
                <a href="{{ route('contracts.edit', $contract->id) }}">Sửa</a> |
                <form action="{{ route('contracts.destroy', $contract->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Xóa hợp đồng?')">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $contracts->links() }}
@endsection
