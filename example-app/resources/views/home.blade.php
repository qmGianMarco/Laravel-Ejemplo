{{-- Forma con componente --}}
{{-- <x-app-layout>
    <div class="max-w-4xl mx-auto px-4">
        <x-alert2 type="success" class="mb-4"> 
            <x-slot name="title">
                Título de la alerta
            </x-slot>
            Contenido de la alerta
        </x-alert2>

        <p>Hola mundo</p>
    </div>
</x-app-layout> --}}

{{-- Forma con layout --}}
@extends('layouts.app')

@section('title', "Laravel 11")

@section('content')
    <div class="max-w-4xl mx-auto px-4">
        {{-- esto es el componente alert.blade.php --}}
        <x-alert2 type="success" class="mb-4"> 
            <x-slot name="title">
                Título de la alerta
            </x-slot>
            Contenido de la alerta
        </x-alert2>

        <p>Hola mundo</p>
    </div>
@endsection
