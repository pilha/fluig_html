$(document).ready(function () {
    box_visibles(3, 3, 1, 1);
    $(window).resize(function () {
        box_visibles(3, 3, 1, 1);
    });
});
