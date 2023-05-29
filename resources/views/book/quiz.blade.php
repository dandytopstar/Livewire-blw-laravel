@extends('layouts.main')

@section('content')
<header class="header relative" id="home">
  <div class="container">
    <nav class="navbar navbar-expand-lg fullscreen-header">
      <div class="d-flex p-0 w-100 header-box align-items-center">
        <div class="logo-container">
          <img src="{{asset('assets/logo/main-logo.png')}}" alt="" width="20px">
        </div>
        <x-lang.language-menu1 />
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg adaptive-header">
      <div class="container-fluid">
        <div class="d-flex p-0 w-100 header-box align-items-center">
          <div class="navbar-brand">
            <img src="{{asset('assets/logo/main-logo.png')}}" alt="" width="180px">
          </div>
          <x-lang.language-menu2 />
        </div>
      </div>
    </nav>
  </div>
</header>

  @livewire('bookquiz')

  @includeIf('book.partial.main-footer')

  @endsection