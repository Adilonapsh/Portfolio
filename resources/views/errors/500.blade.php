@extends('errors::minimal')

@php
    $quotes = [
        "Maaf, terdapat masalah pada server kami saat ini.",
        "Kami sedang melakukan pemeliharaan pada server kami. Mohon kembali lagi nanti.",
        "Ada kesalahan pada sistem kami, mohon bersabar sambil kami mencoba memperbaikinya.",
        "Sepertinya ada masalah pada koneksi server kami. Silakan coba lagi nanti.",
        "Mohon maaf atas ketidaknyamanan ini. Kami sedang berusaha memperbaiki masalahnya.",
        "Terjadi kesalahan pada server kami, silakan coba lagi atau hubungi tim dukungan kami.",
        "Saat ini kami mengalami masalah teknis, silakan coba kembali dalam beberapa saat.",
        "Server kami sedang mengalami gangguan teknis. Kami sedang bekerja keras untuk memperbaikinya.",
        "Mohon maaf atas ketidaknyamanan ini. Kami sedang melakukan perbaikan pada server kami.",
        "Ada kesalahan pada sistem kami. Mohon bersabar dan kami akan segera memperbaikinya."
    ];
    $picked_quotes = $quotes[rand(0,count($quotes)-1)];
@endphp
@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error'))
@section('images', asset("/assets/icons/image.png"))
@section('description', $picked_quotes)
