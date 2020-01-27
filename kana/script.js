$(document).ready(function() {
    $('.nav-link a').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 1800; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        console.log('to');
        return false;
    });
});

// Smooth scrolling down
$(".down").click(function() {
    $('html, body').animate({
        scrollTop: $(page).offset().top
    }, 1500);
});
