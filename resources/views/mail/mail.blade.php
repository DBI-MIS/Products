@component('mail::message')
# New Job Application for {{ $post }}

Name: {{ $response['full_name'] }}<br>
Contact: {{ $response['contact'] }}<br>
Email: {{ $response['email_address'] }}<br>
Inquiry: {{ $response['message'] }}<br>
@component('mail::subcopy')
@endcomponent
{{ config('app.name') }}    
@component('mail::button', ['url' => 'https:/products.dbiphils.com/admin/responses'])
    View Details
@endcomponent    

@endcomponent