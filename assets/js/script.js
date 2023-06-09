function volumnToggle(button) {
    var mutted = $(".previewVideo").prop("muted");
    $(".previewVideo").prop("muted", !mutted);

    $(button).find("i").toggleClass("fa-volume-xmark");
    $(button).find("i").toggleClass("fa-volume-high");
}

function previewEnded() {
    $(".previewVideo").toggle();
    $(".previewImage").toggle();
}