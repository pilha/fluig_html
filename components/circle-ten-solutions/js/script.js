$(document).ready(function () {

    /* ANIMATION ON LOAD PAGE */
    $(".petal-solutions").each(function () {
        animatePetal(this);
    });
    $(".petal-solutions p").delay(1000).each(function () {
        animatePetalP(this);
    });
    $(".petal-solutions img").delay(1000).each(function () {
        animatePetalIco(this);
    });
    /* END ANIMATION ON LOAD PAGE */

    /* EVENT HOVER ESPECIFIC TO PETAL "identity" */
    $(".p-identity").hover(
            function () {
                $(".p-identity").css(
                        "transform", "rotate(46deg) scale(1.05)",
                        '-webkit-transform', "rotate(46deg) scale(1.05)",
                        '-moz-transform', "rotate(46deg) scale(1.05)",
                        '-o-transform', "rotate(46deg) scale(1.05)",
                        '-ms-transform', "rotate(46deg) scale(1.05)"
                        );
            },
            function () {
                $(".p-identity").css(
                        "transform", "rotate(46deg)",
                        '-webkit-transform', "rotate(46deg)",
                        '-moz-transform', "rotate(46deg)",
                        '-o-transform', "rotate(46deg)",
                        '-ms-transform', "rotate(46deg)"
                        );
            }
    );
    /* END EVENT HOVER ESPECIFIC TO PETAL "identity" */

    /* ROLATE RESPONSIVE */
    setTimeout(function () {
        $(".petal-solutions.petal-ecm").trigger('click');
    }, 800);
    $(window).resize(function () {
        $(".petal-solutions.petal-ecm").trigger('click');
    });
    /* ROLATE RESPONSIVE */

    /* EVENT CLICK PETAL*/
    $(".petal-solutions").click(function () {
        var clickSoluctions = parseInt($(this).attr("data-solutions"));
        var newPosition;
        var scale;
        var windowWidth = $(window).width();
        /* TRANSFORM RESPONSIVE */
        if (windowWidth <= 730) {
            newPosition = clickSoluctions * 36 + 72;
            if (windowWidth <= 351) {
                scale = ".6";
            } else if (windowWidth <= 486) {
                scale = ".7";
            } else {
                scale = "1";
            }
            clickSoluctions = clickSoluctions + 3;
        }
        else {
            newPosition = clickSoluctions * 36 - 36;
            scale = "1";
        }
        /* END TRANSFORM RESPONSIVE */

        $(".box-flower-solutions").css(
                "transform", "rotate(" + newPosition + "deg) scale(" + scale + ")",
                '-webkit-transform', "rotate(" + newPosition + "deg) scale(" + scale + ")",
                '-moz-transform', "rotate(" + newPosition + "deg) scale(" + scale + ")",
                '-o-transform', "rotate(" + newPosition + "deg) scale(" + scale + ")",
                '-ms-transform', "rotate(" + newPosition + "deg) scale(" + scale + ")"

                );
        var lastTransform = parseInt(clickSoluctions) + 4;
        if (lastTransform > 10) {
            lastTransform = lastTransform - 10;
        }


        $(".petal-solutions").each(function () {

            var allDataSoluctions = parseInt($(this).attr("data-solutions"));
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
        
        /* add class "active" in $(".solution-indicators li") */
        $(".solution-indicators li").removeClass("active");
        $(".solution-indicators li[data-solution-to="+ $(this).attr("data-solutions")+"]").addClass("active");
        /* END */
    });
    /* END EVENT CLICK PETAL*/

    /* NEXT SOLUTION PER ".solution-indicators li" */
    $(".solution-indicators li").click(function () {
        $(".solution-indicators li").removeClass("active");
        $(this).addClass("active");
        var dataTarget = $(this).attr("data-target");
        var dataSolutionTo = parseInt($(this).attr("data-solution-to"));
        $(dataTarget + " div[data-solutions=" + dataSolutionTo + "]").trigger('click');
    });
});
/* ANIMATION ON LOAD PAGE */
var animationDelay = 500;
var offset = 100;
function animatePetal(obj) {
    setTimeout(function () {
        $(obj).animate({
            opacity: "1"
        }, animationDelay);
    }, $(obj).index() * offset);
}
function animatePetalP(obj) {
    setTimeout(function () {
        $(obj).animate({
            opacity: "1",
            top: "30px",
            right: "67px"
        }, animationDelay);
    }, $(obj).index() * offset);
}
function animatePetalIco(obj) {
    setTimeout(function () {
        $(obj).animate({
            opacity: "1",
            top: "47px",
            left: "30px"
        }, animationDelay);
    }, $(obj).index() * offset);
}
/* END ANIMATION ON LOAD PAGE */