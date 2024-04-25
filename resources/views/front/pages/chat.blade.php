@extends('front.app')
@section('styles')

@endsection
@php
$hideFooter = true;
@endphp
@section('content')
    <div class="container" style="min-height: 600px;">
        @include('Chatify::pages.app')
    </div>
@endsection
@section('scripts')

@endsection
