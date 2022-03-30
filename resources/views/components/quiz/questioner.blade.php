<div class="b-intro">
    <div class="b-intro--inner">
        <h2 class="text-center">{{ __('quiz.tell_us_more') }}</h2>
        <div class="c-progress-bar"><span class="c-progress-bar--process"></span></div>

        <input type="hidden" name="gender" id="gender" value="">
        <!-- q1 -->
        <x-quiz.slide :firstSlide="true" :quizNum="1">
            <button class="e-btn m-next m-questioner is-active" data-value="boy">{{ __('quiz.q1a1') }}</button>
            <button class="e-btn m-next m-questioner is-active" data-value="girl">{{ __('quiz.q1a2') }}</button>
        </x-quiz.slide>

        <!-- q2 -->
        <x-quiz.slide :quizNum="2">
            <button class="e-btn m-next m-questioner is-active" data-value="1">{{ __('quiz.q2a1') }}</button>
            <button class="e-btn m-next m-questioner is-active" data-value="2">{{ __('quiz.q2a2') }}</button>
            <button class="e-btn m-next m-questioner is-active" data-value="3">{{ __('quiz.q2a3') }}</button>
        </x-quiz.slide>

        <!-- q3 -->
        <x-quiz.slide :quizNum="3">
            <button class="e-btn m-next m-questioner is-active" data-value="1">{{ __('quiz.q3a1') }}</button>
            <button class="e-btn m-next m-questioner is-active" data-value="2">{{ __('quiz.q3a2') }}</button>
            <button class="e-btn m-next m-questioner is-active" data-value="3">{{ __('quiz.q3a3') }}</button>
        </x-quiz.slide>

        <!-- q4 -->
        <x-quiz.slide :quizNum="4">
            <button class="e-btn m-next m-questioner  is-active" data-value="1">{{ __('quiz.q4a1') }}</button>
            <button class="e-btn m-next m-questioner  is-active" data-value="2">{{ __('quiz.q4a2') }}</button>
            <button class="e-btn m-next m-questioner  is-active" data-value="3">{{ __('quiz.q4a3') }}</button>
        </x-quiz.slide>

        <!-- q5 -->
        <x-quiz.slide :quizNum="5">
            <button class="e-btn m-next m-questioner  is-active" data-value="1">{{ __('quiz.q5a1') }}</button>
            <button class="e-btn m-next m-questioner  is-active" data-value="2">{{ __('quiz.q5a2') }}</button>
            <button class="e-btn m-next m-questioner  is-active" data-value="3">{{ __('quiz.q5a3') }}</button>
        </x-quiz.slide>

        <!-- q6 -->
        <x-quiz.slide :quizNum="6">
            <button class="e-btn m-next m-questioner  is-active" data-value="1">{{ __('quiz.q6a1') }}</button>
            <button class="e-btn m-next m-questioner  is-active" data-value="2">{{ __('quiz.q6a2') }}</button>
            <button class="e-btn m-next m-questioner  is-active" data-value="3">{{ __('quiz.q6a3') }}</button>
        </x-quiz.slide>

        <!-- q7 -->
        <x-quiz.slide :quizNum="7">
            <button class="e-btn m-next m-questioner  is-active" data-value="1">{{ __('quiz.q7a1') }}</button>
            <button class="e-btn m-next m-questioner  is-active" data-value="2">{{ __('quiz.q7a2') }}</button>
            <button class="e-btn m-next m-questioner  is-active" data-value="3">{{ __('quiz.q7a3') }}</button>
        </x-quiz.slide>

        <!-- q8 -->
        <x-quiz.slide :quizNum="8">
            <button class="e-btn m-next m-questioner  is-active" data-value="1">{{ __('quiz.q8a1') }}</button>
            <button class="e-btn m-next m-questioner  is-active" data-value="2">{{ __('quiz.q8a2') }}</button>
            <button class="e-btn m-next m-questioner  is-active" data-value="3">{{ __('quiz.q8a3') }}</button>
        </x-quiz.slide>

        <!-- q9 -->
        <x-quiz.slide :quizNum="9">
            <button class="e-btn m-next m-questioner  is-active" data-value="1">{{ __('quiz.q9a1') }}</button>
            <button class="e-btn m-next m-questioner  is-active" data-value="2">{{ __('quiz.q9a2') }}</button>
        </x-quiz.slide>

        <!-- q9 -->
        <x-quiz.slide :quizNum="10">
            <button class="e-btn m-next m-questioner  is-active" data-value="1">{{ __('quiz.q10a1') }}</button>
            <button class="e-btn m-next m-questioner  is-active" data-value="2">{{ __('quiz.q10a2') }}</button>
            <button class="e-btn m-next m-questioner  is-active" data-value="2">{{ __('quiz.q10a3') }}</button>
        </x-quiz.slide>

        <x-quiz.slide-multi :quizNum="11">
            <button class="e-btn m-questioner" data-value="1">{{ __('quiz.q11a1') }}</button>
            <button class="e-btn m-questioner" data-value="2">{{ __('quiz.q11a2') }}</button>
            <button class="e-btn m-questioner" data-value="3">{{ __('quiz.q11a3') }}</button>
        </x-quiz.slide-multi>

        <!-- q12 -->
        <x-quiz.slide :quizNum="12">
            <button class="e-btn m-next m-questioner  is-active" data-value="1">{{ __('quiz.q12a1') }}</button>
            <button class="e-btn m-next m-questioner  is-active" data-value="2">{{ __('quiz.q12a2') }}</button>
        </x-quiz.slide>

        <!-- q13 -->
        <x-quiz.slide :quizNum="13">
            <button class="e-btn m-next m-questioner  is-active" data-value="1">{{ __('quiz.q13a1') }}</button>
            <button class="e-btn m-next m-questioner  is-active" data-value="2">{{ __('quiz.q13a2') }}</button>
        </x-quiz.slide>

        <!-- years / name -->
        <div class="c-questionslide" data-type="measurements" data-question="q14">
            <div class="c-questionslide-inner">
                <div class="c-questionslide-content">
                    <div class="c-progress-bar">
                        <div class="c-progress-bar--inner"></div>
                    </div>
                    <div class="b-top">
                        <p class="e-subtitle"> </p>
                        <h1 class="e-title">{{ __('quiz.enter_information') }}</h1>
                    </div>
                    <div class="b-form b-profiledetails animated fadeIn">
                        <div class="b-profiledetails-content">
                            <div class="e-input">
                                <label for="">{{ __('quiz.years') }}</label>
                                <input class="m-questioner" type="number" name="age" min="14" placeholder="{{ __('quiz.age') }}*" required="">
                            </div>

                            <div class="e-input">
                                <label for="">{{ __('quiz.name') }}</label>
                                <input class="m-questioner" type="" name="name" placeholder="{{ __('quiz.name') }}*" required="">
                            </div>


                        </div>
                    </div>
                </div>
                <div class="c-questionslide-footer">
                    <p class="e-btn m-next m-oposite">{{ __('quiz.next') }}</p>
                </div>
            </div>
        </div>

        <!-- Loading -->
        <div class="c-questionslide" data-type="loading" data-position="last">
            <div class="c-questionslide-inner">
                <div class="c-questionslide-content">
                    <div class="c-progress-bar">
                        <div class="c-progress-bar--inner"></div>
                    </div>
                    <div class="b-top">
                        <h1 class="e-title">Loading...</h1>
                        <div class="b-progress">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
