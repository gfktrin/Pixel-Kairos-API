$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar").addClass("anime");
    } else {
        $(".navbar").removeClass("anime");
    }
});