$('.bar_code').click(function(){
  console.log('bar code here');
  $(this).toggleClass('bar_code_translated');
});
$('.reset_me').click(function(){
  $('.byebye').addClass('cya');
});

//Pour récup' le height des blocs mais pas efficace
/*var count_fibo_square = $('.square_fibo').length;
var to = 1;
console.log(count_fibo_square);

var rest_from = count_fibo_square % 4;

console.log('reste'+rest_from);
*/
/*if(rest_from = 0){
  var height_container_spiral = $('.neo_fibo:last-child .nb_pattern_3').height() + $('.neo_fibo:last-child .nb_pattern_4').height();
  console.log(height_container_spiral);
}else if(rest_from = 1){
  var height_container_spiral = $('.neo_fibo:last-child .nb_pattern_3').height() + $('.neo_fibo:last-child .nb_pattern_4').height();
  console.log(height_container_spiral);
}else if(rest_from = 2){
  var height_container_spiral = $('.neo_fibo:last-child .nb_pattern_3').height() + $('.neo_fibo:last-child .nb_pattern_4').height() + $('.neo_fibo:last-child .nb_pattern_1').height();
  console.log(height_container_spiral);
}else if(rest_from = 3){
  var height_container_spiral = $('.neo_fibo:last-child .nb_pattern_3').height();
  console.log(height_container_spiral);
}*/
/*$('.container_fibonacci_spiral').css('height',height_container_spiral+'px');*/
/*var height_container_spiral = $('.nb_pattern_2').height() + $('.nb_pattern_3').height() + $('.nb_pattern_4').height();
console.log(height_container_spiral);*/

//RandomColor script ty https://www.sitepoint.com/generating-random-color-values/



  var hue = 'rgb(' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ')';
  $('.square_fibo').css('background-color',hue);
  $('.cc_fibonacci').css('color',hue);
