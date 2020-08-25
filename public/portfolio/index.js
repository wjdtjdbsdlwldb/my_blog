function Svg__showAllPathLengths() {  
    var pathes = $('svg').find('polyline');
    pathes.each(function(i, polyline){
      var total_length = polyline.getTotalLength();
    });
  }
  
  $(function(){
    Svg__showAllPathLengths();
  });