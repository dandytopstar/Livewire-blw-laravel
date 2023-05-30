@extends('book.layouts.main')

@section('content')

<header class="header relative book" id="home">
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
    <section class="position-relative w-100 first-section main-page book-section">
      <div class="img-box bg-image-slide text-center">
        <div class="bg-scroll-mobile"></div>
      </div>
      <div class="container position-relative d-flex">
        <div class="inf-box">
          <h1 class="font-grey-color-700">
            {{__('front.hero_title1')}}
          </h1>
          <h1 class="font-grey-color-700">
            {{__('front.hero_title2')}}
          </h1>
          <p class="description font-grey-color-400">
            {{__('front.hero_subtitle')}}
          </p>
          <p class="subtitle">
            {{__('front.choose_baby')}}
          </p>
          <div class="d-flex">
            <a href="{{route('bookquiz')}}" type="button" class="btn font-grey-16-700 btn-green-squre mb-20">
              {{__("front.gender_boy")}}
            </a>
            <a href="{{route('bookquiz')}}" type="button"
              class="btn font-grey-16-700 btn-white-squre mb-20 ml-20 bg-light-green">
              {{__("front.gender_girl")}}
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="img-box bg-image-slide text-center">
    <div class="bg-scroll-main"></div>
  </div>
</header>



@includeIf('book.partial.main-footer')

@endsection