@props([
    'countQuestionsDots' => [],
    'currentQuestionNum' => 1,
    'currentQuestion' => [],
])
<div class="mt-3 mt-lg-5 card mx-auto quiz-card shadow-lg p-lg-3 mb-5 bg-body rounded"
     id="card-benefits"
     data-seconds="{{$currentQuestion['loader']['seconds'] ?? 0}}"
     style="display: none"
>

    <div class="container tp-2 border-bottom p-3">
        <div class="row">
            <div class="col pl-4 quiz-arrow">
                @if($currentQuestionNum == 1)
                    <a href="{{route('main')}}">
                        <i class="bi bi-arrow-left"></i>
                    </a>
                @else
                    <i class="bi bi-arrow-left" wire:click="prevSlide" ></i>
                @endif
            </div>
            <div class="col text-center">
                <img src="{{asset('assets/logo/main-logo.png')}}" alt="">
            </div>
            <div class="col text-end question-number-counter">
                <span class="badge rounded-pill question-number">{{$currentQuestionNum}}</span> / {{count($countQuestionsDots)}}
            </div>
        </div>
    </div>

    <div class="card-body">
        <h2 class="card-title text-center question-title mt-3 mt-lg-5">{{$currentQuestion['benefits']['text']}}</h2>

        <div class="card-text py-4 mb-3 px-lg-4">
            @foreach($currentQuestion['benefits']['items'] as $item)
                <div class="benefit-item d-flex justify-content-start my-3 gap-3">
                    <div class="">
                        <img src="{{asset('assets/quiz/benefit.png')}}" alt="" width="22px">
                    </div>
                    <div style="font-weight: bold;">
                        {{$item}}
                    </div>
                </div>

            @endforeach
        </div>

        <button type="button" class="btn w-100 btn-green-squre continue-btn next-btn">
            next
        </button>
    </div>

</div>