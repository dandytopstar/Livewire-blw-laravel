<div class="row my-3">
    <div class="col-12 col-md-6 mx-auto">
        @if(isset($title) && $title)
            <h2 class="text-center my-5 mx-auto" style="max-width: 350px">{{__($title)}}</h2>
        @endif

        <div class="@if(isset($shadow) && $shadow) shadow p-3 mb-5 bg-body rounded @endif">

            @if(isset($subtitle) && $subtitle)
                <div class="w-70 mx-auto mb-3 text-center" style="max-width: 400px;">
                    <p class="fw-bold" style="font-size: 18px;">{{__($subtitle)}}</p>
                </div>
            @endif

            {{$slot}}

        </div>
    </div>
</div>
