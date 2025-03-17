<!DOCTYPE html>
<html lang="en">
@extends('layouts.header1')
@section('contenido')
<style>
    #start {
        margin: 0;
        background-image: url("{{ asset('img/home.jpg') }}");
        background-size: cover;
        background-position: center;
        background-color: rgba(0, 0, 0, 0.5); /* Capa oscura */
        background-blend-mode: darken; /* Mezcla la imagen con la capa oscura */
    }
</style>
<link rel="stylesheet" href="{{ asset('css/header.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<section id="start">
    <section class="center">
        <h1 class="b">¡Bienvenido a los Proyectos Integradores!</h1>
        <a class="botton" href="#info"><h2>Continuar</h2></a>
    </section> 
</section>

<section id="info">
    <h2>Guía de Usuario</h2>
    <h4>¡Aprende a registrar tu proyecto!</h4>
    <img src="{{ asset('img/guia1.jpg') }}" alt="Paso 1">
    <img src="{{ asset('img/guia2.jpg') }}" alt="Paso 2">
    <img src="{{ asset('img/guia3.jpg') }}" alt="Paso 3">
</section>

@endsection