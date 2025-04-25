@extends('dashboard')

@section('content')
<main class="container my-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Chi tiết đơn hàng #{{ $order->id }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Ngày tạo:</strong> {{ $order->created_at }}</p>

            <h5 class="mt-4">Danh sách sản phẩm</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Ghi chú</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->orderDetails as $key => $detail)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $detail->product->name ?? 'Sản phẩm không tồn tại' }}</td>
                            <td>{{ $detail->quanity }}</td>
                            <td>{{ $detail->notes }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection
