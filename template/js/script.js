$(document).ready(function () {
    /* HEADER */
    $('.btn_help').on('click', function () {
        $('.nav2 .nav li').toggleClass('change');
    });

    headerMobile();
    $(window).resize(function () {
        headerMobile();
    });

    $(window).scroll(function () {
        $('.nav2 .nav li').removeClass('change');
        var top = $(window).scrollTop();

        if (top === 0) {
            headerMobile();
        }
    });
    /* END HEADER */

    select_box();

    /* box com mais informações sobre clientes ou parceiros */
    $(".box_with_case").click(function () {
        
        $(".box_with_case").removeClass("active");
        $(this).addClass("active");

        id_customer = $(this).attr("data-id");

        while (id_customer % box_visible !== 0) {
            id_customer++;
        }

        $('.box-info-customer').slideUp(300);
        $('.box-info-customer').insertAfter('div[data-id="' + id_customer + '"]').slideDown(500);

        $('html, body').stop().animate({
            scrollTop: $(this).offset().top - 230
        }, 1500);

    });
    $(".close-box-info-customer").click(function () {
        $(".box-info-customer").slideUp(300);
        $(".box_with_case").removeClass("active");
    });
    /* END box com mais informações sobre clientes ou parceiros */

});

function headerMobile() {
    if ($(window).width() < 768) {
        $('.nav2 .nav li').removeClass('change');
    }
    else {
        $('.nav2 .nav li').addClass('change');
    }
}

/* function to select forms */
function select_box() {
    var id;
    $(".box-select-options input[type=text]").click(function () {
        id = $(this).attr("id");
        $("." + id + "Box").slideToggle(200);

        $("." + id + "Box label").click(function () {

            if (($('#' + $(this).attr('for')).attr("type")) === "radio") {
                value = $(this).text();
            }
            else if (($('#' + $(this).attr('for')).attr("type")) === "checkbox") {
                if ($('#' + $(this).attr('for')).prop('checked')) {

                    value = value.replace($(this).text() + ',', '');
                    value = value.replace(', ' + $(this).text(), '');
                    value = value.replace($(this).text(), '');
                    value = value.trim();
                } else {
                    if ($('#' + id).val() === '') {
                        value = $(this).text();
                    } else {
                        value = $('#' + id).val() + ', ' + $(this).text();
                    }
                }
            }
            $('#' + id).val(value);
            $('#' + id + 'Hidden').val(value);
        });
    });
}
/* function to select forms */

/* More information about clients and partners */
function box_visibles(b1, b2, b3, b4) {
    window_width = $(window).width();
    if (window_width > 991) {
        box_visible = b1; 
    }
    else if (window_width > 767) {
        box_visible = b2; 
    }
    else if (window_width > 450) {
        box_visible = b3; 
    }
    else {
        box_visible = b4; 
    }
}
$(window).resize(function () {
    $(".box-info-customer").slideUp(300);
    $(".box_with_case").removeClass("active");
});
/* END More information about clients and partners */