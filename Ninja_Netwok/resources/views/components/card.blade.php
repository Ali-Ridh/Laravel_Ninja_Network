@props(['highlight' => false])
@vite('resources/css/app.css')
<div @class(['highlight' => $highlight, 'card'])> 
    {{ $slot }}
    <a href="{{ $attributes->get('href') }}" class="btn"> {{ $linkText }} </a>
</div>