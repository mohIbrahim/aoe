@component('mail::message')
## Customer Name: {{$name}}.

## Required spare parts
| #          | Part Name            |
|:----------:|:--------------------:|
@foreach($partsNames as $key=> $partName)
| {{$key+1}} | {{$partName}}        |
@endforeach
## Model Code of the machine: {{$modelCode}}.

## Customer Phone Number: {{$phoneNumber}}

## Customer Email: {{$email}}
## City: {{$city}}
## Area: {{$area}}
## Message:
{{$message}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
