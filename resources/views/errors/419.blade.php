@extends('errors::minimal')
@php
    $quotes = [
        "Maaf, waktu autentikasi Anda telah habis. Silakan masuk kembali untuk melanjutkan.",
        "Waktu otentikasi Anda telah habis. Silakan login kembali untuk melanjutkan.",
        "Anda telah keluar secara otomatis karena waktu autentikasi telah habis. Silakan login kembali.",
        "Autentikasi Anda telah kadaluarsa. Silakan masuk kembali untuk melanjutkan.",
        "Waktu autentikasi Anda telah habis. Silakan login kembali untuk melanjutkan akses.",
        "Sesi autentikasi Anda telah berakhir. Silakan login kembali untuk melanjutkan.",
        "Autentikasi Anda telah kadaluarsa. Silakan login kembali untuk mengakses halaman ini.",
        "Maaf, Anda telah keluar karena waktu autentikasi telah habis. Silakan masuk kembali untuk melanjutkan.",
        "Anda telah keluar dari halaman karena waktu autentikasi telah habis. Silakan login kembali.",
        "Waktu autentikasi Anda telah habis. Silakan login kembali untuk melanjutkan akses ke halaman ini."
    ];
    $picked_quotes = $quotes[rand(0,count($quotes)-1)];
@endphp

@section('title', __('Page Expired'))
@section('code', '419')
@section('message', __('Page Expired'))
@section('images', asset("/assets/icons/image.png"))
@section('description', $picked_quotes)
