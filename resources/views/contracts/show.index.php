@extends('layouts.app')
@section('content')
    <h2>Thông tin hợp đồng</h2>
    <p>Khách thuê: {{ $contract->customer->name }}</p>
    <p>Phòng: {{ $contract->room->room_number }}</p>
    <p>Ngày bắt đầu: {{ $contract->start_date }}</p>
    <p>Ngày kết thúc: {{ $contract->end_date }}</p>
    <p>Giá: {{ number_format($contract->price) }} đ</p>
    <p>Ghi chú: {{ $contract->notes }}</p>
    <a href="{{ route('contracts.index') }}">Quay lại</a>
@endsection
