@extends('errors::minimal')

@php
    $quotes = [
        "Maaf, Kami sedang mengembangkan aplikasi, mungkin akan bisa dalam beberapa saat.",
        "Maaf, layanan kami sedang tidak tersedia. Mohon coba lagi nanti.",
        "Saat ini layanan kami tidak dapat diakses. Silakan coba kembali dalam beberapa saat.",
        "Layanan sedang sibuk. Mohon tunggu sebentar dan coba lagi.",
        "Layanan kami sedang mengalami gangguan. Silakan coba kembali nanti.",
        "Maaf, kami sedang melakukan pemeliharaan pada server. Mohon bersabar dan coba lagi nanti.",
        "Kami sedang mengalami masalah pada server kami. Mohon kembali lagi dalam beberapa saat.",
        "Server kami sedang tidak tersedia. Mohon coba kembali dalam beberapa saat.",
        "Terjadi kesalahan pada server. Mohon kembali lagi dalam beberapa saat.",
        "Layanan sedang tidak tersedia. Mohon coba lagi nanti atau hubungi tim dukungan kami.",
        "Maaf, layanan sedang mengalami gangguan. Silakan kembali lagi dalam beberapa saat."
    ];
    $picked_quotes = $quotes[rand(0,count($quotes)-1)];
@endphp
@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __('Service Unavailable'))
@section('images', asset("/assets/icons/image.png"))
@section('description', $picked_quotes)


