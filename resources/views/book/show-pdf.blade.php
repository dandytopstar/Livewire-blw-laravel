@extends('layouts.main')

@section('content')

    <embed
            src="{{ $link }}"
            style="width:100%; height:100%;"
            frameborder="0"
    >

{{--<iframe src="../assets/plugins/ViewerJS/#{{ $link }}"--}}
{{--        width='100%' height='100%'--}}
{{--        allowfullscreen--}}
{{--        webkitallowfullscreen--}}
{{--></iframe>--}}

@endsection