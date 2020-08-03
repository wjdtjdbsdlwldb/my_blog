function FullPage() {
    var myFullpage = new fullpage('#fullpage', {
        scrollingSpeed: 1000,
        scrollBar: true,
        verticalCentered: false
    });
}

$(function(){
    FullPage();
});