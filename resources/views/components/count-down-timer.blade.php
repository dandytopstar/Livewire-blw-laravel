<section class="my-3">
    <div class="container dark-accent border-radius-10 py-3 font-white-700-22 d-flex time-section">
        <p>The offer expires in:</p>
        <div class="d-flex">
            <div class="text-center">
                <span>00</span>
                <span class="font-light-accent-700">hours</span>
            </div>
            <p class="dots">:</p>
            <div class="text-center">
                <span id="minutes">00</span>
                <span class="font-light-accent-700">Minutes</span>
            </div>
            <p class="dots">:</p>
            <div class="text-center">
                <span id="seconds">00</span>
                <span class="font-light-accent-700">Secunds</span>
            </div>
        </div>
    </div>
</section>

@push('custom-scripts')
    <script>

        countDownTimer();

        function countDownTimer() {
            let seconds = {{strtotime("1970-01-01 00:14:37 UTC")}};

            if(localStorage.getItem('countDownSeconds')) {
                if(localStorage.getItem('countDownSeconds') < 0) {

                } else {
                    seconds = localStorage.getItem('countDownSeconds');
                }

            }

            console.log('seconds', seconds);
            const minutesLabel = document.getElementById("minutes");
            const secondsLabel = document.getElementById("seconds");
            let totalSeconds = seconds;
            setInterval(setTime, 1000);

            function setTime() {
                --totalSeconds;
                secondsLabel.innerHTML = pad(totalSeconds % 60);
                minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
                localStorage.setItem('countDownSeconds', totalSeconds);
            }

            function pad(val) {
                let valString = val + "";
                if (valString.length < 2) {
                    return "0" + valString;
                } else {
                    return valString;
                }
            }
        }

    </script>
@endpush