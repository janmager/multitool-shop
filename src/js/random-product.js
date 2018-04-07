function random(min,max){
  min = parseInt(min,10);
  max = parseInt(max,10);
  if(min>max){
    var temp = min;
    min = max;
    max = temp;
  }
  return Math.floor(Math.random()*(max-min+1)+min)
}

var randomNum = random(0,(shopList.length-1));

$("#rand-product").html(shopList[randomNum][0]);
$("#rand-place").html(shopList[randomNum][2].join(" - "));
$("#rand-price").html(shopList[randomNum][1].toFixed(2)+" PLN");

$(".btn-random-again").click(function RandomAgain(){
  randomNum = random(0,(shopList.length-1));
  $("#rand-product").html(shopList[randomNum][0]);
  $("#rand-place").html(shopList[randomNum][2].join(" - "));
  $("#rand-price").html(shopList[randomNum][1].toFixed(2)+" PLN");
});
