@component('mail::message')
# {{ $post->name }}

@component('mail::button')
    @slot('url')
        {{ route('posts.show', $post) }}
    @endslot
    Atidaryti
@endcomponent
@endcomponent