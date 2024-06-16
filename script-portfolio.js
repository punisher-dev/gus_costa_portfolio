// Experience Accordion
$(document).ready(function () {
    $('.experience-titles').click(function () {
        var accordion = $(this).data('accordion');
        $('#' + accordion).slideToggle(1000);
        $(this).parent().find('#experience-button div').toggleClass('experience-arrow-up');
    });
});

// Menu Overlay
$(document).ready(function () {
    $('#hamburger').click(function () {
        $('#main-menu, main').hide();
        $('.overlay').show(1000);
    });
});

$(document).ready(function () {
    $('#back-button, #projects-overlay, #experience-overlay').click(function () {
        $('.overlay').hide(500);
        $('#main-menu, main').show(1000);
    });
});


// different modes and high-beam sound effect
$(document).ready(function () {
    var synthwave = new Audio('sounds/synthwave.m4a');
    $('.sound-on').hide();
    $('.mode-toggle').click(function () {
        var body = $('body');
        if (body.hasClass('light')) {
            body.removeClass('light').addClass('high-beam');
            synthwave.play();
            $('.sound-on').hide();
            $('.sound-off').show();
            $('.sound-off').click(function () {
                synthwave.pause();
                $('.sound-off').hide();
                $('.sound-on').show();
            });
            $('.sound-on').click(function () {
                synthwave.play();
                $('.sound-on').hide();
                $('.sound-off').show();
            });
        } else if (body.hasClass('high-beam')) {
            body.removeClass('high-beam').addClass('dark');
            synthwave.pause();
            synthwave.currentTime = 0;
            $('.sound-off').hide();
            $('.sound-on').show();
        } else {
            body.removeClass('dark').addClass('light');
        }
    });
});

// Typing effect
$(document).ready(function () {
    var text1 = "I am gus";
    var text2 = " a designer and front end developer.";
    var textContainer1 = $("#intro");
    var textContainer2 = $("#intro-description");
    var typing = new Audio('sounds/typing.mp3');
    var typingShort = new Audio('sounds/Type.mp3');
    var i = 0;
    var j = 0;

    textContainer1.css({
        "font-weight": "bold",
        "font-size": "3em"
    });

    function typeLetter1() {
        if (i < text1.length) {
            textContainer1.append(text1.charAt(i));
            if (text1.charAt(i) === 's') {
                typingShort.play();
            } else if (text1.charAt(i) !== '.') {
                typing.play();
            }
            i++;
            setTimeout(typeLetter1, 150);
        } else {
            typing.pause();
            typing.currentTime = 0;
            setTimeout(typeLetter2, 2000);
        }
    }

    function typeLetter2() {
        if (j < text2.length) {
            textContainer2.append(text2.charAt(j));
            if (text2.charAt(j) !== '.') {
                typing.play();
            } else {
                typing.pause();
                typing.currentTime = 0;
            }
            j++;
            setTimeout(typeLetter2, 150);
        }
    }

    $('#start-button, #text-cursor').click(function () {
        typeLetter1();
        $('#start-button').hide();
        $('#text-cursor').hide();
    });
});

// press to start button flashing
var isFlashing = true;

function flash() {
    if (isFlashing) {
        $('.intro span').fadeIn(600, function () {
            $('.intro span').fadeOut(600, flash);
        });
    } else {
        $('.intro span').hide();
    }
}

$('#start-button, #text-cursor').click(function () {
    isFlashing = false;
});

flash();


// Cursor following
let prevX = 0;
let prevY = 0;
$(document).mousemove(function(e) {
    if ($('body').hasClass('high-beam')) {
        // Calculate the angle
        let angle = Math.atan2(e.pageY - prevY, e.pageX - prevX) * 180 / Math.PI;

        // Update the SVG position and rotation
        $('#high-beam-cursor').css({
            left: e.pageX,
            top: e.pageY,
            display: 'block',
            transform: 'rotate(' + angle + 'deg)'
        });

        // Store the current cursor position for the next mousemove event
        prevX = e.pageX;
        prevY = e.pageY;
    } else {
        $('#high-beam-cursor').hide();
    }
});

// Function to handle animations on scroll
var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
        if (entry.isIntersecting) {
            $(entry.target).addClass('show');
        } else {
            $(entry.target).removeClass('show');
        }
    });
});

$('.hidden').each(function() {
    observer.observe(this);
});