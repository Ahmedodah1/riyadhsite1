@extends('layout.master')
@section('content')
    <div class="">
        <x-ClientBlackAndWhite.BlackAndWhite :clients="$clients" />

    </div>
@endsection

