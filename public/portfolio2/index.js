$(document).ready(function () {
    var select = function (s) {
            return document.querySelector(s);
        },
        liquidFront = select('.liquidFront'),
        liquidMaskGroup = select('.liquidMaskGroup'),
        liquidBack = select('.liquidBack'),
        bubble0 = select('.bubble0'),
        bubble1 = select('.bubble1'),
        bubble2 = select('.bubble2'),
        bubble3 = select('.bubble3'),
        bubble4 = select('.bubble4'),
        pop = select('.pop'),
        bubblePop0 = select('.bubblePop0'),
        bubblePop1 = select('.bubblePop1'),
        bubblePop2 = select('.bubblePop2'),
        liquidBubblesGroup = select('.liquidBubblesGroup');
    var xLink = "http://www.w3.org/1999/xlink";
    var pop1 = pop.cloneNode(true);
    var pop2 = pop.cloneNode(true);
    liquidMaskGroup.appendChild(pop1);
    liquidMaskGroup.appendChild(pop2);

    var isDevice = (/android|webos|iphone|ipad|ipod|blackberry/i.test(navigator.userAgent.toLowerCase()));

    if (!isDevice) {

        TweenMax.set(liquidBubblesGroup, {
            filter: 'url(#goo)',
            '-webkit-filter': 'url(#goo)'
        })
    }


    var mainTimeline = new TimelineMax();

    var frontLiquidTimeline = new TimelineMax({
        repeat: -1
    });
    frontLiquidTimeline.to(liquidFront, 4, {
        x: -600,
        ease: Linear.easeNone
    })

    var backLiquidTimeline = new TimelineMax({
        repeat: -1
    });
    backLiquidTimeline.from(liquidBack, 4, {
        x: -700,
        ease: Linear.easeNone
    })


    function getBetweenVal(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }
});