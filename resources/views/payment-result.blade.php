@extends('layouts.main')

@section('content')

    <div class="container-box-general">

        @includeIf('partial.main-personal-plan-header')

        @if($status === 'succeeded')
            @includeIf('partial.success-payment')
        @endif

        @if($status !== 'succeeded')
            @includeIf('partial.wrong-payment')
        @endif

{{--        @includeIf('partial.main-payment-footer')--}}
    </div>

@endsection