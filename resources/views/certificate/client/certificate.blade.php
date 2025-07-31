@extends('layout.master')
@section('content')
    <x-certificate.certificate :certificates="$certificates" />

@endsection

