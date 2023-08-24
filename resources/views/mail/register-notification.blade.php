<x-mail::message>
# Thanks For Using Us.

# Your Account need activation
- Name : {{ $account_name }}
- Email : {{ $account_email }}

<a href="{{ $activation_url }}">Click Here to Activate Your Account</a>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
