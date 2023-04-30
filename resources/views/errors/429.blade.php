@extends('errors::minimal')

@php
    $quotes = [
        "Maaf, permintaan Anda tidak dapat diproses karena batas penggunaan API telah tercapai.",
        "Anda telah mencapai batas permintaan. Silakan coba lagi dalam beberapa saat.",
        "Terjadi kesalahan. Permintaan Anda tidak dapat diproses karena Anda telah mencapai batas permintaan yang ditetapkan.",
        "Mohon maaf, Anda telah mencapai batas permintaan API kami. Silakan coba lagi nanti.",
        "Anda telah melebihi batas permintaan harian. Silakan coba lagi besok.",
        "Maaf, Anda tidak dapat melakukan permintaan karena batas permintaan telah tercapai. Silakan coba lagi dalam beberapa saat.",
        "Permintaan Anda tidak dapat diproses karena telah melebihi batas penggunaan API harian.",
        "Anda telah mencapai batas permintaan pada API kami. Silakan tunggu beberapa saat sebelum mencoba lagi.",
        "Maaf, Anda tidak dapat melanjutkan permintaan karena batas penggunaan API telah tercapai.",
        "Permintaan Anda tidak dapat diproses karena telah mencapai batas permintaan. Silakan tunggu dan coba lagi nanti."
    ];
    $picked_quotes = $quotes[rand(0,count($quotes)-1)];
@endphp

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Too Many Requests'))
@section('images', asset("/assets/icons/image.png"))
@section('description', $picked_quotes)
