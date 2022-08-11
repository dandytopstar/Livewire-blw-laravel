<div class="row">
    <div class="col-lg-12">
        @foreach($sliders as $slider)
            @if($currentSlider == $slider)
                <div class="wrap_user_review">
                    <div class="user_review_img">
                        <img src="images/avatar-{{$slider}}.jpg" alt="" />
                    </div>
                    <div class="user_review_text">
                        {{__('front.feedback_slider_text_'.$slider)}}
                    </div>
                    <div class="user_review_user_info">
                        {{__('front.feedback_slider_text_author_'.$slider)}}
                    </div>
                </div>
            @endif
        @endforeach

        <div class="navigation_user_review">
            <ul class="navigation_right">
                @foreach($sliders as $slider)
                    <li>
                        <a wire:click="slideSwitcher({{$slider}})" @class(['navigation_active' => $currentSlider == $slider])></a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
