$("#search-button").click(function(){
  showProduct();
});

$("#shopSearch").keypress(function(e){
  if(e.which==13) showProduct();
});

var product;
var showProductArray = [];

function showProduct(){
  showProductArray = [];
  product = $("#shopSearch").val().toLowerCase();
  if(product=="wisła@"){
    $(window).scrollTop(0);
    $('#buzzer1').get(0).play();
    $(".wisla").css({"display":"block"});
    setTimeout(
      function(){
        $(".wisla").css({"display":"none"});
      }, 9000);
  };
  if(product=="pawulon@"){
    $(window).scrollTop(0);
    $('#buzzer2').get(0).play();
    $(".pawulon").css({"display":"block"});
    setTimeout(
      function(){
        $(".pawulon").css({"display":"none"});
      }, 15000);
  };
  if(product==""){ window.alert("Podaj nazwę produktu!"); }
  // CREATING ARRAY
  else{
    for(i=0;i<shopList.length;i++){
      if(shopList[i][0].toLowerCase().includes(product)){
        showProductArray.push(shopList[i]);
      }
      else{
        for(o=0;o<shopList[i][4].length;o++){
          if(shopList[i][4].toString().toLowerCase().includes(product)){
            showProductArray.push(shopList[i]);
            i++;
          }
        }
      }
    }
  }
  if(showProductArray.length==0){ window.alert("Brak takiego produktu!"); }
  //POP-UP
  if(showProductArray.length>0){
    var k = 0;
    function showPopUp(){
      $(".list-pop-up-items").html(
        "<span class=\"name-pop-up\">"+showProductArray[k][0]+"</span><span class=\"place-pop-up\">"+
        showProductArray[k][2].join(" & ")+"</span><span class=\"price-box-pop-up\"><span class=\"price-pop-up\">"+
        showProductArray[k][1].toFixed(2)+"</span><span class=\"value-pop-up\">PLN</span></span></span><span class=\"cat-box-pop-up\"><span class=\"cat-txt-pop-up\">Kategoria : </span><span class=\"cat-pop-up\">"+
        showProductArray[k][3].join(", ")+"</span></span>");
      $(".counter-pop-up").html(k+1+" <span class=\"z\"> z </span>"+showProductArray.length);
    }

    $(".close-pop-up").click(function(){
      $(".pop-up").css({"display":"none"});
      $(".black-bg").css({"display":"none"});
      $(".shop").css({"opacity":"1"});
    });

    $(".pop-up").css({"display":"flex"});
    $(".black-bg").css({"display":"block"});
    $(".shop").css({"opacity":"0.3"});
    $(".list-pop-up-items").html("");
    showPopUp();
    $(".prev-pop-up").click(function(){
      if(k>0){
        k--;
        showPopUp();
        console.log(k);
      }
      else{
        console.log(k);
        k=0;
      }
    });
    $(".next-pop-up").click(function(){
      if(k<=showProductArray.length){
        k++;
        showPopUp();
        console.log(k);
      }
      else{
        console.log(k);
        k=showProductArray.length-1;
      }
    });
    // for(i=0;i<showProductArray.length;i++){
    //   $(".list-pop-up-items").append("<span class=\"item-in-pop-up\">"+showProductArray[i][0]+"</span>");
    // }
  }

  // TEST
  // console.log("-----");
  // for(i=0;i<showProductArray.length;i++){
  //   console.log(showProductArray[i]);
  // }

  // RESET INPUT
  $("#shopSearch").val("");
}
