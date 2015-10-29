$(document).ready(function () {

    var solucion_page = $("body").attr("class").split('-');
    $(".p-grey-" + solucion_page[1]).addClass("active");
    $(".petal-grey-" + solucion_page[1]).addClass("active");

    /* ANIMATION ON LOAD PAGE */
    $(".petal-grey-solutions").each(function () {
        animatePetalGrey(this);
    });
    $(".petal-grey-solutions p").delay(1000).each(function () {
        animatePetalGreyP(this);
    });
    $(".petal-grey-solutions img").delay(1000).each(function () {
        animatePetalGreyIco(this);
    });
    /* END ANIMATION ON LOAD PAGE */

    /* EVENT HOVER ESPECIFIC TO PETAL "identity" */
    $(".p-grey-identity").hover(
            function () {
                $(".p-grey-identity").css(
                        "transform", "rotate(46deg) scale(1.05)",
                        '-webkit-transform', "rotate(46deg) scale(1.05)",
                        '-moz-transform', "rotate(46deg) scale(1.05)",
                        '-o-transform', "rotate(46deg) scale(1.05)",
                        '-ms-transform', "rotate(46deg) scale(1.05)"
                        );
                $(".p-grey-identity").addClass("active");
            },
            function () {
                $(".p-grey-identity").css(
                        "transform", "rotate(46deg)",
                        '-webkit-transform', "rotate(46deg)",
                        '-moz-transform', "rotate(46deg)",
                        '-o-transform', "rotate(46deg)",
                        '-ms-transform', "rotate(46deg)"
                        );
                $(".p-grey-identity").removeClass("active");
            }
    );
    /* END EVENT HOVER ESPECIFIC TO PETAL "identity" */

    /* ROLATE RESPONSIVE */
    setTimeout(function () {
        $(".petal-grey-solutions.active").trigger('click');
    }, 800);

    /* EVENT CLICK PETAL*/
    $(".petal-grey-solutions").click(function () {
        var clickSoluctions = parseInt($(this).attr("data-solutions-gray"));
        var newPositionGrey;

        newPositionGrey = clickSoluctions * 36 - 108;

        $(".box-flower-solutions-gray").css(
                "transform", "rotate(" + newPositionGrey + "deg)",
                '-webkit-transform', "rotate(" + newPositionGrey + "deg)",
                '-moz-transform', "rotate(" + newPositionGrey + "deg)",
                '-o-transform', "rotate(" + newPositionGrey + "deg)",
                '-ms-transform', "rotate(" + newPositionGrey + "deg)"

                );

        clickSoluctions = clickSoluctions - 2;

        var lastTransform = parseInt(clickSoluctions) + 4;

        if (lastTransform > 10) {
            lastTransform = lastTransform - 10;
        }

        $(".petal-grey-solutions").each(function () {
            var allDataSoluctions = parseInt($(this).attr("data-solutions-gray"));
            if (clickSoluctions >= 6) {
                if (allDataSoluctions >= clickSoluctions) {
                    $(this).addClass("transform");
                }
                else if (lastTransform !== 10 && allDataSoluctions <= lastTransform) {
                    $(this).addClass("transform");
                }
                else {
                    $(this).removeClass("transform");
                }
            }
            else {
                if (allDataSoluctions <= lastTransform && (allDataSoluctions >= clickSoluctions)) {
                    $(this).addClass("transform");
                }
                else {
                    $(this).removeClass("transform");
                }
            }
        });
    });
    /* END EVENT CLICK PETAL*/
});

/* ANIMATION ON LOAD PAGE */
var animationDelay = 500;
var offset = 100;
function animatePetalGrey(obj) {
    setTimeout(function () {
        $(obj).animate({
            opacity: "1"
        }, animationDelay);
    }, $(obj).index() * offset);
}
function animatePetalGreyP(obj) {
    setTimeout(function () {
        $(obj).animate({
            opacity: "1",
            top: "30px",
            right: "67px"
        }, animationDelay);
    }, $(obj).index() * offset);
}
function animatePetalGreyIco(obj) {
    setTimeout(function () {
        $(obj).animate({
            opacity: "1",
            top: "47px",
            left: "30px"
        }, animationDelay);
    }, $(obj).index() * offset);
}
/* END ANIMATION ON LOAD PAGE */