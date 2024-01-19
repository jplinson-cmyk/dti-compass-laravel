<x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="$url">
Click to Reset password . {{$url}}
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
