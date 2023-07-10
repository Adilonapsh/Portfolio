@extends('errors::minimal')

@php
    $quotes = [
        "Aku menulis untuk menangkap kenangan yang mungkin tak akan mampu tersimpan dalam memoriku. Sebelum diriku usang dan menghilang.",
        "Dan semua kenangan, yang sangat dekat denganku, menghilang sudah.",
        "Semua orang akan menghilang pada waktunya.",
        "Jika bisa memilih, aku akan memilih untuk menghilang saja.",
        "Manusia baru sadar saat apa yang mereka punya mulai menghilang.",
        "Seringkali, kehilangan adalah bagian dari proses menemukan diri kita yang sebenarnya.",
        "Menghilang bukanlah akhir dari segalanya, tetapi bisa menjadi awal yang baru.",
        "Waktu yang hilang tidak pernah bisa kembali, tapi kebahagiaan baru selalu bisa ditemukan.",
        "Menghilang tidak selalu berarti merugi, terkadang itu bisa menjadi investasi untuk masa depan yang lebih baik.",
        "Hilangnya sesuatu bukan berarti kamu harus berhenti mencari, kadang-kadang itu hanya berarti harus mencari dengan cara yang berbeda.",
        "Kehilangan bisa menyakitkan, tetapi kita juga bisa belajar banyak dari pengalaman itu.",
        "Terkadang, untuk menemukan kedamaian, kita harus membiarkan beberapa hal menghilang dari hidup kita.",
        "Ketika kita kehilangan sesuatu yang kita cintai, jangan berfokus pada apa yang hilang, tapi bersyukur atas apa yang kita miliki.",
        "Menghilang bukanlah kekal, tetapi pengalaman itu akan terus membekas dalam hidup kita.",
        "Saat sesuatu menghilang dari hidupmu, berpikir positif dan terus maju, karena masa depanmu masih penuh dengan kemungkinan.",
        "We cant seem to find the page you are looking for!"
    ];
    $picked_quotes = $quotes[rand(0,count($quotes)-1)];
@endphp

@section('title', __('Page Not Found'))
@section('code', '404')
@section('message', __('Page Not Found !'))
@section('images', asset("/assets/icons/image.png"))
@section('description', $picked_quotes)
