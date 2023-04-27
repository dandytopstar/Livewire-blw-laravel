<div class="position-relative px-3">


    @if(!empty($currentQuestion['loader']) && $currentQuestion['loader']['show'])
        <x-quiz.card-loader
                :countQuestionsDots="$countQuestionsDots"
                :currentQuestionNum="$currentQuestionNum"
                :currentQuestion="$currentQuestion"
        >
            <x-quiz.loader :currentQuestion="$currentQuestion" />
        </x-quiz.card-loader>

    @else

        <x-quiz.card
            :countQuestionsDots="$countQuestionsDots"
            :currentQuestionNum="$currentQuestionNum"
            :currentQuestion="$currentQuestion"
        >
            @if(count($currentQuestion['answers']) == 2 && !empty($currentQuestion['answer_with_image']))
                <x-quiz.two-images :currentQuestion="$currentQuestion" />
            @endif

            @if(empty($currentQuestion['answer_with_image']))
                <x-quiz.button-answers :currentQuestion="$currentQuestion" />
            @endif

            @if(!empty($currentQuestion['text']))
                <x-quiz.text :currentQuestion="$currentQuestion" />
            @endif

            @if(!empty($currentQuestion['continue_button']))
                <x-quiz.continue-btn :currentQuestion="$currentQuestion" />
            @endif

        </x-quiz.card>
    @endif
</div>



{{--<div class="container-box position-relative">--}}

{{--    <x-quiz.question-card--}}
{{--            :countQuestionsDots="$countQuestionsDots"--}}
{{--            :currentQuestionNum="$currentQuestionNum"--}}
{{--            :currentQuestion="$currentQuestion"--}}
{{--    >--}}
{{--        @if(count($currentQuestion['answers']) == 2 && !empty($currentQuestion['answer_with_image']))--}}

{{--            <x-quiz.two-images :currentQuestion="$currentQuestion" />--}}

{{--        @endif--}}

{{--        @if(count($currentQuestion['answers']) > 2 && !empty($currentQuestion['answer_with_image']))--}}

{{--            <x-quiz.image-answers :currentQuestion="$currentQuestion" />--}}

{{--        @endif--}}

{{--        @if(empty($currentQuestion['answer_with_image']))--}}

{{--                <x-quiz.button-answers :currentQuestion="$currentQuestion" />--}}

{{--        @endif--}}

{{--        @if(!empty($currentQuestion['continue_button']))--}}
{{--            <button type="button" class="btn font-white-600 btn-green-squre" wire:click="nextSlide">--}}
{{--                {{$currentQuestion['continue_button_text']}}--}}
{{--            </button>--}}
{{--        @endif--}}

{{--    </x-quiz.question-card>--}}

{{--</div>--}}

<script>

    window.addEventListener('answer-selected', event => {

        if(event.detail.answers) {

            let questionKey = event.detail.key;
            let answers = event.detail.answers;

            for (let key in answers) {

                let selectedAnswer = document.querySelector("#"+questionKey+"-"+key);

                if(answers[key].selected) {
                    selectedAnswer.classList.add('click-red');
                } else {
                    selectedAnswer.classList.remove('click-red');
                }
            }

        }

    });

    window.addEventListener('next-click', event => {

        if(document.querySelector('.quizz-btn')) {
            let elements = document.querySelectorAll(".quizz-btn")

            let myFunction = function() {
                this.style.backgroundColor = '#00bd90';
                this.style.color = '#fff';
            };

            Array.from(elements).forEach(function(element) {
                element.addEventListener('click', myFunction);
            });
        }
    });

</script>