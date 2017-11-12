@component('mail::message')
# Name:
{{$name}}
# Parts names:

@foreach($partsNames as $partName)
    ## {{$partName}}
@endforeach

    # Phone:
    {{$phoneNumber}}

    # Email:
    {{$email}}

    # Message:
    {{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
