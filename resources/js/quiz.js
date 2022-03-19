var answers_data = {};
var client_code = window.location.pathname.replace('/join/', '')

function timeCounter(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.html(minutes + ":" + seconds);

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

function isValidNumber(number) {
    if (/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im.test(number) && number.length > 3) {
        return true;
    } else {
        return false;
    }
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function save_data(action, answers) {

    var url = '';

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    if (action === 'action-update-data') {
        answers_data["code"] = window.location.search.replace("?code=", "").replace("?email=", "");
        url = '/clients/updateData'
    } else {
        url = '/save-quiz';
    }

    answers['gender'] = document.querySelector('#gender').value;

    $.ajax({
        type: "post",
        context: this,
        dataType: "json",
        url: url,
        data: {
            'action': action,
            'data': answers,
        },
        beforeSend: function (data) {
        },
        success: function (response) {

            if(response.status) {
                progressCounter();
            }

            if (action !== 'action-update-data') {
                client_code = response.client.code;
                // $('#b-codeform input[name="code"]').val(response.client.code)
            }

            if (action === 'action-update-data') {
                window.location = '/checkout/' + answers_data["code"] + ''
            }
        }
    });

}

function progressCounter() {

    var id = setInterval(frame, 20);
    var count = 1;
    var prog = 0;

    // $('.c-loadingslide .b-top .e-title').text('Loading...');
    // $('.b-header').hide();

    function frame() {

        $('.b-top .b-progress').text(prog + '%')

        if (prog === 20) {
            $('.e-progress-status-inner').css('transform', 'translate(0)');
        }
        if (prog === 40) {
            // $('.e-progress-status-inner').css('transform', 'translate(-20%)');
        }
        if (prog === 40) {
            $('.e-progress-status-inner').css('transform', 'translate(-20%)');
            // $('.e-progress-status').removeClass('is-right');
            // $('.e-progress-status .is-active').first().removeClass('is-active');
            // $('.e-progress-status .is-active').last().next().addClass('is-active');
            // $('.e-progress-status .is-active').last().next().addClass('is-active');
        }
        if (prog === 60) {
            $('.e-progress-status-inner').css('transform', 'translate(-40%)');
        }
        if (prog === 80) {
            $('.e-progress-status-inner').css('transform', 'translate(-60%)');
        }
        if (prog == 100) {
            clearInterval(id);
            $('.c-loadingslide .e-title').text('Complete!');

            $('.c-questionslide').fadeOut(function () {
                if (client_code.length > 0) {
                    window.location = '/join/' + client_code + ''
                } else {
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Error. Please repeat test.',
                    })
                }
                // $('#b-codeform').submit();
            })
        } else {
            prog = prog + count;
            $('.b-progress .e-piechart').attr('data-value', prog)
            $('.b-progress .e-piechart .e-number').text(prog)
        }
    }
}

$(document).ready(function () {

    if ($('body').hasClass('page-billing')) {
        var minutes = 15 * 60,
            display = $('.e-timecounter .time');
        timeCounter(minutes, display);
    }

    $('.expand-link').click(function (e) {
        e.preventDefault();
        var block = $(this).parent().parent();
        $(this).hide();
        block.find('.hidden-plan-content').fadeIn();
    });

    $('.contract-link').click(function (e) {
        e.preventDefault();
        var block = $(this).parent().parent().parent();
        block.find('.hidden-plan-content').hide();
        block.find('.expand-link').fadeIn();
    });

    $(".b-sliders-payment").slick({
        infinite: true,
        slidesToShow: 1,
        centerMode: true,
        arrows: false,
        speed: 2000,
        autoplay: true,
        padding: 50,
        autoplaySpeed: 500,
        // cssEase: 'linear',
        slidesToScroll: 1,
        // variableWidth: true,
        dots: false,
    });

    $('.c-questionslide .b-form').on('input', function (e) {
        var allInputsFilled = true;
        $(this).find('.e-input input').each(function () {
            if ($(this).is(":visible") && $(this).attr('required') && $(this).val().length === 0) {
                allInputsFilled = false;
            }
        });
        if (allInputsFilled) {
            $(this).closest('.c-questionslide').find('.m-next').addClass('is-active')
        } else {
            $(this).closest('.c-questionslide').find('.m-next').removeClass('is-active')
        }
    });

    var c_progress_bar = $('.c-progress-bar:visible').width() / $('.c-questionslide').length;
    var c_progress_bar_updated = c_progress_bar;

    function progress_bar_update(direction) {

        if (direction === 'positive') {
            $('.c-progress-bar--inner .is-current').removeClass('is-current').addClass('is-past').next().addClass('is-current')
            // c_progress_bar_updated = c_progress_bar_updated + c_progress_bar;
        } else {
            // c_progress_bar_updated = c_progress_bar_updated - c_progress_bar;
            $('.c-progress-bar--inner .is-current').removeClass('is-current').removeClass('is-past').prev().addClass('is-current')
        }
        // $('.c-progress-bar--process').width(c_progress_bar_updated);
    }

    function progress_bar_initiate() {
        console.log(1);
        var questions_amount = $('.c-questionslide').length;
        // var active_question = $('.c-questionslide:visible').index();
        var active_question = 1;
        var element_class = '';

        for (var item = 0; item < questions_amount; item++) {
            if (item + 1 < active_question) {
                element_class = 'is-past';
            } else if (item + 1 === (active_question)) {
                element_class = 'is-current';
            } else {
                element_class = '';
            }
            $('.c-progress-bar--inner').append('<div class="e-item ' + element_class + '" data-nr="' + (item + 1) + '"><span class="e-dot"></span></div>');
        }
    }

    progress_bar_initiate();

    // $('.c-progress-bar--process').width(c_progress_bar);

    var current_slide_nr = 1;
    $('.c-questionslide .e-nr').each(function (index) {
        $(this).text((index + 1) + '/' + ($('.c-questionslide').length - 1))
    });

    $('.e-btn-unitsystem').click(function () {
        $('.b-profiledetails .b-profiledetails-content input[required]').val('').removeClass('is-false');
        $('.e-btn-unitsystem').removeClass('is-selected')
        $(this).addClass('is-selected')
        if ($(this).data('type') === 'metric') {
            $('.m-metric').show();
            $('.m-imperial').hide();
            $('.b-form .b-profiledetails-content .e-input').each(function () {
                if ($(this).find('label').text().toLowerCase() === 'in') {
                    $(this).find('label').text('cm')
                    $(this).find('input').attr('placeholder', 'centimeters')
                }
                if ($(this).find('label').text().toLowerCase() === 'lb') {
                    $(this).find('label').text('kg')
                }
                if ($(this).find('label').text().toLowerCase() === 'ft') {
                    $(this).find('label').text('m')
                    $(this).find('input').attr('placeholder', 'meters')
                }
            });
        } else {
            $('.m-metric').hide();
            $('.m-imperial').show();
            $('.b-form .b-profiledetails-content .e-input').each(function () {
                if ($(this).find('label').text().toLowerCase() === 'm') {
                    $(this).find('label').text('ft')
                    $(this).find('input').attr('placeholder', 'feet*')
                }
                if ($(this).find('label').text().toLowerCase() === 'cm') {
                    $(this).find('label').text('in')
                    $(this).find('input').attr('placeholder', 'inches*')
                }
                if ($(this).find('label').text().toLowerCase() === 'kg') {
                    $(this).find('label').text('lb')
                }
            });
        }
    })

    $('.e-btn.m-next').click(function () {
        if($(this).hasClass('m-questioner')) {
            $(this).addClass('selected');
        }

        if (!$(this).hasClass('is-active')) {
            return false;
        }

        var is_valid = false;
        var slide_parent = $(this).closest('.c-questionslide');
        var slide_nr = slide_parent.data('nr');
        var answer = $(this).data('value');
        var question = slide_parent.data('question').toLowerCase();

        if (slide_parent.data('type') === 'email') {
            return false;
        }

        if (answer === undefined) {
            answer = $(this).text();
        }

        if (question === undefined) {
            question = slide_parent.find('.e-title').text()
        }

        answer = [];
        slide_parent.find('.m-questioner').each(function () {
            var value = $(this).data('value');
            if ($(this).data('value') === undefined) {
                value = $(this).val().toLowerCase();
            }

            if (value === undefined) {
                value = $(this).text().toLowerCase();
            }

            if ($(this).is(':checked') || $(this).hasClass('selected')) {
                is_valid = true;
                answer.push(value);
            }
            if ($(this).attr('required') && $(this).val().length === 0) {
                is_valid = false;
            }

            if ($(this).attr('required') && $(this).val().length !== 0) {
                is_valid = true;
            }

            if ($(this).val().length !== 0 && $(this).attr('type') !== 'radio') {
                answers_data[$(this).attr('name').toLowerCase()] = value;
            }
        });

        if (is_valid === false) {
            slide_parent.find('.b-questions').addClass('is-shaking');
            slide_parent.find('.b-form').addClass('is-shaking');
            setTimeout(function () {
                slide_parent.find('.b-questions').removeClass('is-shaking');
            }, 400);
            return false;
        }

        answers_data[$.trim(question)] = answer;

        if (slide_parent.data('type') === 'measurements') {
            var unit_system = slide_parent.find('.b-profiledetails-header .e-btn.is-selected').data('type')
            answers_data['unit_system'] = unit_system;
        }

        if (slide_parent.next().data('position') === 'last') {
            $('.page-questioner .b-intro--inner').css('background', 'none');
            $('.c-progress-bar').fadeOut();
            let url = new URL(window.location);
            save_data('action-save-questions', answers_data);
            setTimeout(function () {
                // progressCounter();
            }, 500)
        }

        $(slide_parent).fadeOut(300, function () {
            $('.e-btn--arrow').addClass('url-pasive');

            progress_bar_update('positive');

            current_slide_nr = current_slide_nr + 1;
            $('.e-slidenr').text((current_slide_nr) + '/' + $('.c-questionslide').length)
            slide_parent.next().fadeIn(300);
            window.scrollTo(0, 0);
        });

    });

    $('.c-questionslide[data-answertype="multipleanswer"] .b-questions .e-btn').click(function () {
        // $(this).closest('.c-questionslide').find('.e-btn').removeClass('is-selected');
        if ($(this).hasClass('is-active')) {
            $(this).removeClass('is-active');
            $(this).removeClass('selected');
        } else {
            $(this).addClass('is-active');
            $(this).addClass('selected');
        }
        $(this).closest('.c-questionslide').find('.m-next').addClass('is-active');
    });

    $('.e-previewplan').click(function (e) {
        event.preventDefault(e);
        $('.b-popup.m-yourplan').fadeIn();
    });

    $('.e-reviewplan').click(function (e) {
        event.preventDefault(e);
        $('.b-popup.m-reviews').fadeIn();
    });

    $('.b-popup').click(function () {
        $('.b-popup').fadeOut();
    })

    $('.b-popup .b-popup-inner-wrapper, .b-popup .e-btn').click(function () {
        event.stopPropagation();
    })

    $(".btn-action-scroll").click(function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".c-maincontent").offset().top
        }, 1000);
    });

    $(".btn-scrolltobottom").click(function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".e-actionbar").offset().top
        }, 1000);
    });

    if ($('body').hasClass('page-questioner')) {
        $('.e-btn--arrow').click(function (e) {
            if ($(this).hasClass('url-pasive')) {
                e.preventDefault();
                var active_slide = $('.c-questionslide:visible');
                if (active_slide.prev().hasClass('m-first')) {
                    $('.e-btn--arrow').removeClass('url-pasive');
                } else {
                    $('.e-btn--arrow').addClass('url-pasive');
                }
                $('.c-questionslide:visible').fadeOut(function () {
                    active_slide.prev().fadeIn()
                    progress_bar_update();
                })
            }
        })
    }

    $('.b-day .e-checkbox').click(function () {
        event.stopPropagation()
    })

    $('.b-dietplan .b-days .b-day').click(function (e) {
        // e.preventDefault();
        if (!$(this).hasClass('is-active')) {
            $('.b-dietplan .b-days .b-day').removeClass('is-active')
            $(this).addClass('is-active')
        } else{
            $(this).removeClass('is-active')
        }
    });

    $('.b-dietplan-nav .e-arrow').click(function () {
        var plan = $(this).closest('.b-dietplan');
        var plan_previous = plan.prev();
        var plan_next = plan.next();
        var plan_amount = $('.b-dietplan').length

        if ($(this).hasClass('m-left')) {
            if (plan_previous.index() >= 0) {
                plan.removeClass('is-active')
                plan_previous.addClass('is-active')
            }
            if (plan_previous.index() < 0) {
                $('.b-dietplan').removeClass('is-active')
                $('.b-dietplan:nth-child('+plan_amount+')').addClass('is-active')
            }
        } else if ($(this).hasClass('m-right')) {
            if (plan_next.index() < plan_amount) {
                plan.removeClass('is-active')
                plan_next.addClass('is-active')
            }
            if (plan_next.index() === plan_amount) {
                $('.b-dietplan').removeClass('is-active')
                $('.b-dietplan:first-child').addClass('is-active')
            }
        }

    });

    $('.workout-status').click(function () {
        jQuery.get("/toggleWorkout?workoutId=" + $(this).data('workout'), function (response) {
            $('.completed-workouts').html(response.completedWorkouts);
            $('.active-minutes').html(response.activeMinutes);
        }, "json");
    });

    if(window.locked) {
        $('#locked-modal').modal({
            backdrop: 'static',
            keyboard: false
        });
    }

    $('.b-questions .m-questioner').click(function () {
        if ($(this).hasClass('m-reset')) {
            $(this).closest('.b-questions').find('.m-questioner').removeClass('is-active')
            $(this).addClass('is-active')
        } else {
            $(this).closest('.b-questions').find('.m-questioner.m-reset').removeClass('is-active')
        }
    })

    $('.b-alltips--nutritionsingle').click(function () {
        if ($(this).hasClass('is-active')) {
            $(this).removeClass('is-active')
        } else {
            $('.b-alltips--nutritionsingle').removeClass('is-active')
            $(this).addClass('is-active')
        }
    });

});

