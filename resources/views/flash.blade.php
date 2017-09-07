@foreach (session('flash_notification', collect())->toArray() as $message)
    <flash level="{{ $message['level'] }}" message="{{ $message['message'] }}"></flash>
@endforeach

{{ session()->forget('flash_notification') }}