@extends('layouts.app')
@section('content')
<h2>Danh sách khách hàng</h2>
<p>
    Tổng khách: <b style="color:#f0810f;">{{ $total }}</b>
</p>
<a href="{{ route('customers.create') }}" style="background:#36b37e;color:#fff;border-radius:5px;padding:7px 19px;text-decoration:none;margin-left:3px;">+ Thêm khách</a>
<div style="display:flex; flex-wrap:wrap; gap:27px; margin-top:29px;">
    @foreach ($customers as $c)
    <div style="background:linear-gradient(140deg,#f4fbff 85%,#fff 95%); box-shadow:0 2px 13px #3795f61a; border-radius:13px; width:295px; padding:18px 22px 18px 24px; position:relative;min-height:149px;">
        <img src="https://cdn-icons-png.flaticon.com/512/1077/1077012.png" style="width:44px;position:absolute;top:-13px;right:23px;filter:drop-shadow(0 2px 4px #ffb36644);">
        <div style="font-size:20px; color:#36b37e; font-weight:700;">
            {{ $c->name }}
        </div>
        <div><b>Email:</b> {{ $c->email }}</div>
        <div><b>SDT:</b> {{ $c->phone }}</div>
        <div><b>Địa chỉ:</b> {{ $c->address }}</div>
        <div style="margin-top:8px;">
            <a href="{{ route('customers.show', $c->id) }}" style="color:#3795f6;">Xem</a> |
            <a href="{{ route('customers.edit', $c->id) }}" style="color:#f0810f;">Sửa</a> |
            <form action="{{ route('customers.destroy', $c->id) }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button type="submit" onclick="return confirm('Bạn chắc chắn muốn xóa?')" style="border:none;background:none;color:#d35e5e;cursor:pointer;">Xóa</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection
