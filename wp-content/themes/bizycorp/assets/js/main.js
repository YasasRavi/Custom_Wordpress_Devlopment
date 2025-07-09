let lastScrollTop = 0;
const header = document.getElementById("header");

window.addEventListener("scroll", function () {
const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

if (currentScroll > lastScrollTop) {
    // Scrolling down
    header.style.top = "-100px"; // hide
} else {
    // Scrolling up
    header.style.top = "0"; // show
}

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
});


function openNav() {
    document.getElementById("side-panel").style.right = "0";
    $('#side-panel,.offnav-overlay').addClass('active');
}

function closeNav() {
    document.getElementById("side-panel").style.right = "-320px";
    $('#side-panel,.offnav-overlay').removeClass('active');
}

$('.offnav-overlay').click(function () {
    closeNav();
});




$(document).ready(function () {
    // Open video overlay and append iframe
    $('#play-video').on('click', function(e){
        e.preventDefault();
        const $overlay = $('#video-overlay');
        if (!$overlay.hasClass('open')) {
            $overlay.addClass('open');
            const videoUrl = 'https://www.youtube.com/embed/oG2CHNSAPWk?autoplay=1';
            $overlay.html('<iframe width="560" height="315" src="' + videoUrl + '" frameborder="0" allowfullscreen></iframe>');
        }
    });

    // Close video on clicking the overlay
    $('#video-overlay').on('click', function(e){
        e.preventDefault();
        close_video();
    });

    // Close video on ESC
    $(document).on('keyup', function(e){
        if(e.key === "Escape") {
            close_video();
        }
    });

    // Close function
    function close_video() {
        $('#video-overlay').removeClass('open').empty();
    }
});



$(document).ready(function(){
$(".slider-box").owlCarousel({
    items: 1,
    rtl: true, 
    loop: true, 
    margin: 30, 
    nav: false, 
    autoplay: false, 
    slideTransition: 'linear',
    autoplayTimeout: 3000, 
    autoplayHoverPause: true, 
    autoplaySpeed: 3000, 
    smartSpeed: 1000,
    responsive: {
    0: {
        items: 1 
    },
    600: {
        items:2  
    },
    }
});
});


$(document).ready(function(){
$(".testimonial-slider").owlCarousel({
    items: 1,
    rtl: true, 
    loop: true, 
    margin: 60, 
    nav: false, 
    autoplay: true, 
    slideTransition: 'linear',
    autoplayTimeout: 4000, 
    autoplayHoverPause: true, 
    autoplaySpeed: 8000, 
    smartSpeed: 800,
    responsive: {
    0: {
        items: 1 
    },
    800: {
        items:2  
    },
    1600: {
        items:3  
    },
    }
});
});