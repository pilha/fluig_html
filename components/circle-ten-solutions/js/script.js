$(document).ready(function () {

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

    $(".petal-solutions").each(function () {
        animatePetal(this);
    });
    $(".petal-solutions p").delay(1000).each(function () {
        animatePetalP(this);
    });
    $(".petal-solutions img").delay(1000).each(function () {
        animatePetalIco(this);
    });

    $(".p-identity").hover(
            function () {
                $(".p-identity").css("transform", "rotate(46deg) scale(1.05)");
            },
            function () {
                $(".p-identity").css("transform", "rotate(46deg)");
            }
    );
    $(".petal-solutions").click(function () {
        var clickSoluctions = parseInt($(this).attr("data-soluctions"));
        var newPosition = clickSoluctions * 36 - 36;
        $(".box-flower-soluctions").css("transform", "rotate(" + newPosition + "deg)");
        var lastTransform = parseInt(clickSoluctions) + 4;
        if (lastTransform > 10) {
            lastTransform = lastTransform - 10;
        }

        console.log("click " + clickSoluctions);
        console.log("ultima " + lastTransform);
        $(".petal-solutions").each(function () {

            var allDataSoluctions = parseInt($(this).attr("data-soluctions"));
            if (clickSoluctions >= 6) {
                if (allDataSoluctions >= clickSoluctions) {
                    console.log(allDataSoluctions);
                    $(this).addClass("transform");
                }
                else if (lastTransform !== 10 && allDataSoluctions <= lastTransform) {
                    console.log(allDataSoluctions);
                    $(this).addClass("transform");
                }
                else {
                    $(this).removeClass("transform");
                }
            }
            else {
                if (allDataSoluctions <= lastTransform && (allDataSoluctions >= clickSoluctions)) {
                    console.log(allDataSoluctions);
                    $(this).addClass("transform")
                }
                else {
                    $(this).removeClass("transform");
                }
            }

        });
    });
});

