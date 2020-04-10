$(() => {
    registerCallbacks();
});

function registerCallbacks() {
    $("#partnersLeft").on("click", () => {partnersScroll(0);});
    $("#partnersRight").on("click", () => {partnersScroll(1);});
}

function partnersScroll(direction) {
    let left = parseInt($("#partnersContent").css("left"));
    let innerWidth = $("#partnersContent").innerWidth();
    let width = $("#partnersWrapper").width();
    let new_offset = $(".partners-content > a").outerWidth();
    console.log(left, innerWidth, width, new_offset);

    switch (direction) {
        case 0:
            left -= new_offset;
            if (innerWidth + left < width) left = width - innerWidth;
            break;

        case 1:
            left += new_offset;
            if (left > 0) left = 0;
            break;
    }

    $("#partnersContent").css("left", left + "px");
}