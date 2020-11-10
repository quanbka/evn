@component('mail::message')
# Có đơn hàng mới

<?php $orderFields = [
    'phone',
    'name',
    'address',
    'email',
    'product'
]; ?>

@foreach ($orderFields as $key => $field)
@if (isset($order[$field]))
<p>{{ $order[$field] }}</p>
@endif
@endforeach


@component('mail::button', ['url' => 'https://laptoptt.vn/system/order'])
Xem ngay
@endcomponent

Cảm ơn,<br>
{{ config('app.name') }}
@endcomponent
