$(() => {
    registerCallbacks();
});

function registerCallbacks() {
    $('#sideSwitcher').on('click', () => {switchSide();});
}

function switchSide() {
    let elem = $('[data-toggle="sideswitch"]');
    if ($(elem).hasClass('side-full')) {
        $(elem).removeClass('side-full');
        $(elem).addClass('side-mini');
    }
    else if ($(elem).hasClass('side-mini')) {
        $(elem).removeClass('side-mini');
        $(elem).addClass('side-full');
    }
    else {
        $(elem).addClass('side-mini');
    }
}