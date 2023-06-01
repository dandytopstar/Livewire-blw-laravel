<div class="position-relative px-3 quiz-body">


    @if(!empty($currentQuestion['loader']) && $currentQuestion['loader']['show'])
        <x-bookquiz.card-loader
                :countQuestionsDots="$countQuestionsDots"
                :currentQuestionNum="$currentQuestionNum"
                :currentQuestion="$currentQuestion"
        >
            <x-bookquiz.loader :currentQuestion="$currentQuestion" />
        </x-bookquiz.card-loader>
    @endif

    @if(!empty($currentQuestion['benefits']))
        <x-bookquiz.benefits
                :countQuestionsDots="$countQuestionsDots"
                :currentQuestionNum="$currentQuestionNum"
                :currentQuestion="$currentQuestion"
        >
        </x-bookquiz.benefits>
    @endif

    <x-bookquiz.card
        :countQuestionsDots="$countQuestionsDots"
        :currentQuestionNum="$currentQuestionNum"
        :currentQuestion="$currentQuestion"
    >
        @if(count($currentQuestion['answers']) == 2 && !empty($currentQuestion['answer_with_image']))
            <x-quiz.two-images :currentQuestion="$currentQuestion" />
        @endif

        @if(!empty($currentQuestion['slider']))
            <x-bookquiz.slider :currentQuestion="$currentQuestion" />
        @endif

        @if(!empty($currentQuestion['progress_slider']))
            <x-bookquiz.progress-slider :currentQuestion="$currentQuestion" />
        @endif

        @if(empty($currentQuestion['answer_with_image']) && empty($currentQuestion['slider']) && empty($currentQuestion['progress_slider']))
            <x-bookquiz.button-answers :currentQuestion="$currentQuestion" />
        @endif

        @if(!empty($currentQuestion['text']))
            <x-quiz.text :currentQuestion="$currentQuestion" />
        @endif

        @if(!empty($currentQuestion['continue_button']))
            <x-bookquiz.continue-btn :currentQuestion="$currentQuestion" />
        @endif

    </x-bookquiz.card>

</div>


<script>

    window.addEventListener('answer-selected', event => {

        if(event.detail.answers) {

            let questionKey = event.detail.key;
            let answers = event.detail.answers;

            for (let key in answers) {

                let selectedAnswer = document.querySelector("#"+questionKey+"-"+key);

                if(answers[key].selected) {
                    selectedAnswer.classList.add('click-green');
                } else {
                    selectedAnswer.classList.remove('click-green');
                }
            }

        }

    });

    window.addEventListener('back-click', event => {

    });


    window.addEventListener('next-click', event => {

        if(document.querySelector('.quiz-btn')) {
            let elements = document.querySelectorAll(".quiz-btn")
            let myFunction = ()=> {
                this.style.backgroundColor = '#00bd90';
                this.style.color = '#fff';
            };

            Array.from(elements).forEach(function(element) {
                element.addEventListener('click', myFunction);
            });
        }

        cardLoader();

        progressSlider();
    });

    window.addEventListener('slider-selected', event => {
        sliderButtons();
    });

    function sliderButtons() {

        if(document.querySelector('#slider-component')) {
            let no = document.querySelector('.btn-no');
            let yes = document.querySelector('.btn-yes');
            let undecided = document.querySelector('.btn-undecided');

            no.style.background = '#FF735C';
            no.style.color = '#fff';

            yes.style.background = '#00BD90';
            yes.style.color = '#fff';

            undecided.style.background = '#5FCAD3';
            undecided.style.color = '#fff';
        }
    }

    function cardLoader() {
        if(document.querySelector('#card-loader')) {
            let card = document.querySelector('#card');
            let cardLoader = document.querySelector('#card-loader');
            let seconds = cardLoader.dataset.seconds;

            card.style.display = 'none';
            cardLoader.style.display = 'block';

            if(document.querySelector('video')) {
                document.querySelector('video').play();
            }

            setTimeout(() => {
                if(document.querySelector('#card-benefits')) {
                    cardLoader.style.display = 'none';
                    cardBenefits();
                } else {
                    cardLoader.style.display = 'none';
                    card.style.display = 'block';
                }
            }, seconds);
        }
    }

    function cardBenefits() {
        if(document.querySelector('#card-benefits')) {
            let card = document.querySelector('#card');
            let cardBenefits = document.querySelector('#card-benefits');
            let nextBtn = document.querySelector('.next-btn');

            card.style.display = 'none';
            cardBenefits.style.display = 'block';

            nextBtn.addEventListener('click', () => {
                console.log("card-bemefit")

                $('.benefits-body').animate({
                    opacity:"0",
                },1000, ()=>{
                    cardBenefits.style.display = 'none';
                    card.style.display = 'block';
                })
            });
        }
    }

    function progressSlider() {
        if(!document.querySelector("#progress-slider")){
            return;
        }
        setTimeout(() => {
            document.querySelector('#finish-quiz').click()
        }, 3500)

        var i = 0;
        if (i == 0) {
            i = 1;
            var elem = document.getElementById("myBar");
            var width = 10;
            var id = setInterval(frame, 35);
            function frame() {
                if (width >= 100) {
                    clearInterval(id);
                    document.querySelector('#progressNum').innerHTML = "100%";
                    i = 0;
                } else {
                    width++;
                    elem.style.width = width + "%";
                    document.querySelector('#progressNum').innerHTML = width + "%";
                }
            }
        }

    }

</script>