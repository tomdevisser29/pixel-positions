@props(['tag', 'size' => 'base'])

@php
    $classes = 'bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors';
    if ('base' === $size) {
        $classes .= ' text-sm px-5 py-1';
    }

    if ('small' === $size) {
        $classes .= ' text-2xs px-3 py-1';
    }
@endphp

<a href="/tags/{{ strtolower( $tag->name ) }}" class="{{ $classes }}">{{ $tag->name }}</a>
