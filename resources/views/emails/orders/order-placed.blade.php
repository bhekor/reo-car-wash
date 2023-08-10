<x-mail::message>
# {{ $subject }}

@if ($mail_user_type == 'admin')
<div>
    <p><strong>Payment Reference: </strong> {{ $transactionReference }}</p>
    <p><strong>Payment Type: </strong> {{ $payment_type }}</p>
    <p><strong>Plan: </strong> {{ $plan }}</p>
    <p><strong>Amount: </strong> {{ $amount }}</p>
    <p><strong>Customer: </strong> {{ $name }}</p>
    <p><strong>Phone Number: </strong> {{ $phone }}</p>
    <p><strong>Email Address: </strong> {{ $email }}</p>
    <p><strong>Location: </strong> {{ $location }}</p>
    <p><strong>Notes: </strong> {{ $notes ? $notes : 'No notes' }}</p>
</div>
@else
<div>
    <p><strong>Payment Type: </strong> {{ $payment_type }}</p>
    <p><strong>Plan: </strong> {{ $plan }}</p>
    <p><strong>Amount: </strong> {{ $amount }}</p>
    <p><strong>Name: </strong> {{ $name }}</p>
    <p><strong>Phone Number: </strong> {{ $phone }}</p>
    <p><strong>Email Address: </strong> {{ $email }}</p>
    <p><strong>Location: </strong> {{ $location }}</p>
    <p><strong>Notes: </strong> {{ $notes ? $notes : 'No notes' }}</p>
</div>
@endif

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
