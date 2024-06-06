@extends('layouts.main')

@section('menu')
    <li><a href="/">Home Page</a></li>
@endsection

<!-- yield w section astghdmha mara wahda bs el stack w el push kaza mara 3ady-->

@push('submenu')
    <li><a href="/">Test Page</a></li>
@endpush

<!-- prepend btt7t abl ae push mogoda-->

@prepend('submenu')
    <li><a href="/">Test Page 4</a></li>
@endprepend