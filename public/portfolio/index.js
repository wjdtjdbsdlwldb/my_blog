function FullPage() {
  var myFullpage = new fullpage('#fullpage', {
      scrollingSpeed: 1000,
      scrollBar: false,
      anchors: ['anchor1', 'anchor2', 'anchor3', 'anchor4', 'anchor5'],
      verticalCentered: false,
      navigation: true,
      navigationPosition: 'left'
  });
}

$(function(){
  FullPage();
});