@component('mail::message')
# New User Registred
@component('mail::panel')
A new user has been registered.

@endcomponent


* Name : {{ $user->name }}
* Email : {{ $user->email }}

@component('mail::button', ['url' => route('users.show', $user->id)])
View User Details
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
