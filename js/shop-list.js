var shopList = [

  // Przedmion, Cena, Miejsce, Kategoria, Słowa kluczowe

  // Możliwe miejsca: Stajnia, Łącznik, Automat

  // Możliwe kategorie: Przekąska, Napój, Ciepłe, Bułka, Fit

  // STAJNIA && łĄCZNIK
  ["Chrupki tygryski", 1.90, ["Stajnia","Łącznik"], ["Przekąska"], ["Czipsy","Chipsy"]],
  ["Przysmacki", 3.90, ["Stajnia","Łącznik"], ["Przekąska"], [1]],
  ["Wafle Sonco", 3.80, ["Stajnia","Łącznik"], ["Przekąska"], [2]],
  ["Sunbites", 4.20, ["Stajnia","Łącznik"], ["Przekąska"], [3]],
  ["Belvita", 2.10, ["Stajnia","Łącznik"], ["Przekąska", "Fit"], [4]],
  ["Knopers", 1.80, ["Stajnia","Łącznik"], ["Przekąska"], [5]],
  ["Lubisie", 1.40, ["Stajnia","Łącznik"], ["Przekąska"], [6]],
  ["Knopers", 1.80, ["Stajnia","Łącznik"], ["Przekąska"], [7]],
  ["Kinder Chocolate", 2.60, ["Stajnia","Łącznik"], ["Przekąska"], ["Kinderki"]],
  ["Kinder Bueno", 3.40, ["Stajnia","Łącznik"], ["Przekąska"], [9]],
  ["7Days", 2.30, ["Stajnia","Łącznik"], ["Przekąska"], [10]],
  ["M&M", 2.40, ["Stajnia","Łącznik"], ["Przekąska"], [11]],
  ["Malti KEKS", 2.50, ["Stajnia","Łącznik"], ["Przekąska"], [12]],
  ["7Days Bake Rolls", 5.50, ["Stajnia","Łącznik"], ["Przekąska"], [13]],
  ["Mareti Burschette", 3.10, ["Stajnia","Łącznik"], ["Przekąska"], [14]],
  ["Beskidzkie Paluszki", 1.30, ["Stajnia","Łącznik"], ["Przekąska"], [15]],
  ["Andruty", 1.50, ["Stajnia","Łącznik"], ["Przekąska"], [16]],
  ["Petti Beurre", 0.90, ["Stajnia","Łącznik"], ["Przekąska"], [17]],
  ["Leibniz Minis", 5.00, ["Stajnia","Łącznik"], ["Przekąska"], [18]],
  ["Delicje", 3.50, ["Stajnia","Łącznik"], ["Przekąska"], [19]],
  ["Biszkopty", 3.90, ["Stajnia","Łącznik"], ["Przekąska"], [20]],
  ["Crunchy", 1.50, ["Stajnia","Łącznik"], ["Przekąska"], [21]],
  ["Oshee", 2.30, ["Stajnia","Łącznik"], ["Napój"], ["Woda"]],
  ["Frugo Super", 2.80, ["Stajnia","Łącznik"], ["Napój"], [23]],
  ["Frugo", 2.60, ["Stajnia","Łącznik"], ["Napój"], [24]],
  ["IsotOnic", 2.90, ["Stajnia","Łącznik"], ["Napój"], [25]],
  ["Oshee Water", 3.60, ["Stajnia","Łącznik"], ["Napój"], [26]],
  ["Oshee Water 1L", 5.20, ["Stajnia","Łącznik"], ["Napój"], [27]],
  ["Tymbark 500ML", 2.70, ["Stajnia","Łącznik"], ["Napój"], [28]],
  ["Tymbark 250ML", 1.70, ["Stajnia","Łącznik"], ["Napój"], [29]],
  ["Tymbark Vitamina 300ML", 2.30, ["Stajnia","Łącznik"], ["Napój"], [30]],
  ["Tarczyn 300ML", 2.10, ["Stajnia","Łącznik"], ["Napój"], [31]],
  ["Tymbark Kaktus", 4.50, ["Stajnia","Łącznik"], ["Napój"], [32]],
  ["Tymbark 1L", 4.00, ["Stajnia","Łącznik"], ["Napój"], [33]],
  ["Tymbark 400ML", 2.30, ["Stajnia","Łącznik"], ["Napój"], [34]],
  ["Aloe Vera", 5.20, ["Stajnia","Łącznik"], ["Napój"], [35]],
  ["Nestea 500ML", 3.30, ["Stajnia","Łącznik"], ["Napój"], [36]],
  ["4move", 2.30, ["Stajnia","Łącznik"], ["Napój"], [37]],
  ["Cappy", 2.30, ["Stajnia","Łącznik"], ["Napój"], [38]],
  ["Arctic+", 3.40, ["Stajnia","Łącznik"], ["Napój"], [39]],
  ["Kubuś 900ML", 4.40, ["Stajnia","Łącznik"], ["Napój"], ["Sok"]],
  ["Kropla Beskidu 500ML", 2.20, ["Stajnia","Łącznik"], ["Napój"], ["Woda"]],
  ["Żywiec Zdrój 500ML", 1.80, ["Stajnia","Łącznik"], ["Napój"], ["Woda"]],
  ["Primavera 500ML", 1.70, ["Stajnia","Łącznik"], ["Napój"], ["Woda"]],
  ["Cisowianka niegazowana 500ML", 1.40, ["Stajnia","Łącznik"], ["Napój"], ["Woda"]],
  ["Cisowianka gazowana 500ML", 1.50, ["Stajnia","Łącznik"], ["Napój"], ["Woda"]],
  ["Muszynianka 1,5L", 2.10, ["Stajnia","Łącznik"], ["Napój"], ["Woda"]],
  ["Primavera niegazowana 1,5L", 2.00, ["Stajnia","Łącznik"], ["Napój"], ["Woda"]],
  ["Primavera gazowana 1,5L", 2.00, ["Stajnia","Łącznik"], ["Napój"], ["Woda"]],
  ["Nałęczowianka 1,5L", 2.30, ["Stajnia","Łącznik"], ["Napój"], ["Woda"]],
  ["Żywiec zdrój 1,5L", 2.30, ["Stajnia","Łącznik"], ["Napój"], ["Woda"]],
  ["Cisowianka 1,5L", 2.30, ["Stajnia","Łącznik"], ["Napój"], ["Woda"]],

  // AUTOMATY
  ["Kinder Bueno", 2.00, ["Automat"], ["Przekąska"], [52]],
  ["Oshee Vitamin", 2.50, ["Automat"], ["Napój"], [53]],
  ["Malti KEKS", 2.20, ["Automat"], ["Przekąska"], [54]],
  ["Beskidzkie Paluszki", 1.70, ["Automat"], ["Przekąska"], [54]],
  ["Orzeszki Ziemne", 2.20, ["Automat"], ["Przekąska"], [55]],
  ["Góralki", 1.50, ["Automat"], ["Przekąska"], [56]],
  ["Sante Crunchy", 1.80, ["Automat"], ["Przekąska"], [57]],
  ["Grzesiek", 1.50, ["Automat"], ["Przekąska"], [58]],
  ["3Bit", 2.00, ["Automat"], ["Przekąska"], [59]],
  ["Princessa", 1.30, ["Automat"], ["Przekąska"], [60]],
  ["PrincePolo", 2.00, ["Automat"], ["Przekąska"], [61]],
  ["Selenka 500ML", 2.00, ["Automat"], ["Napój"], [62]],
  ["Oshee Vitamin 500ML", 3.20, ["Automat"], ["Napój"], [63]],
  ["Tymbark 300ML", 2.20, ["Automat"], ["Napój"], [64]],
  ["Tarczyn 300ML", 2.20, ["Automat"], ["Napój"], [65]],
  ["Lipton 330ML", 2.20, ["Automat"], ["Napój"], [66]],
  ["Frugo 500ML", 3.20, ["Automat"], ["Napój"], [67]],
  ["Baton Oshee", 2.00, ["Automat"], ["Przekąska", "Fit"], [68]],
  ["Attack", 1.20, ["Automat"], ["Przekąska"], [69]],
  ["Bounty", 2.80, ["Automat"], ["Przekąska"], [70]],
  ["Belvita", 2.20, ["Automat"], ["Przekąska", "Fit"], [71]],
  ["7Days", 2.20, ["Automat"], ["Przekąska"], [72]],
  ["Oshee Vitamin", 2.20, ["Automat"], ["Napój"], [73]],
  ["Paluszki", 2.00, ["Automat"], ["Przekąska"], [74]],
  ["Snickers", 1.80, ["Automat"], ["Przekąska"], [75]],
  ["M&M", 2.30, ["Automat"], ["Przekąska"], [76]],
  ["Petit Beurre", 1.00, ["Automat"], ["Przekąska"], [77]],
  ["Cymes Tom&Jerry 200ML", 1.20, ["Automat"], ["Napój"], [78]],
  ["Tymbark 250ML", 2.20, ["Automat"], ["Napój"], [79]],
  ["Kubuś Mus", 2.00, ["Automat"], ["Napój"], [80]],
  ["Krystaliczne Źródła 500ML", 2.00, ["Automat"], ["Napój"], [81]],
  ["Snack2u", 2.00, ["Automat"], ["Przekąska"], [82]]
];

for(i=0; i<shopList.length; i++){
  $("#shop-list-js").append("<span id=\"shopList"+i+"\" class=\"visible "+shopList[i][2].join(" ")+" "+shopList[i][3].join(" ")+"\">"+shopList[i][0]+" <span class=\"shoplist\">"+
  shopList[i][2].join(" - ")+"</span> <span class=\"price\">"+shopList[i][1].toFixed(2)+" PLN</span></span>");
}

function refresh(){
  $("#shop-list-js").html("");
  for(i=0; i<shopList.length; i++){
    $("#shop-list-js").append("<span id=\"shopList"+i+"\" class=\"visible "+shopList[i][2].join(" ")+" "+shopList[i][3].join(" ")+"\">"+shopList[i][0]+" <span class=\"shoplist\">"+
    shopList[i][2].join(" - ")+"</span> <span class=\"price\">"+shopList[i][1].toFixed(2)+" PLN</span></span>");
  }
}

function filterShop(n){
  if(n==99){
    refresh();
    $("#shop-list-js span").css({"display":"flex"});
    $(".filtr-shop-button").addClass("shopu");
    $(".shoplist").css({"display":"flex"});
    $(".price").css({"display":"flex"});
    $("#btn-all").removeClass("shopu");
    $("#btn-all").addClass("shopc");
    $("#shop-list-js span").addClass("visible");
  }
  else if(n==0){
    refresh();
    $("#shop-list-js span").css({"display":"none"});
    $(".Stajnia").css({"display":"flex"});
    $(".price").css({"display":"flex"});
    $(".shoplist").css({"display":"flex"});
    $(".filtr-shop-button").addClass("shopu");
    $("#btn-stajnia").removeClass("shopu");
    $("#btn-stajnia").addClass("shopc");
    $("#shop-list-js span").removeClass("visible");
    $(".Stajnia").addClass("visible");
  }
  else if(n==1){
    refresh();
    $("#shop-list-js span").css({"display":"none"});
    $(".Łącznik").css({"display":"flex"});
    $(".price").css({"display":"flex"});
    $(".shoplist").css({"display":"flex"});
    $(".filtr-shop-button").addClass("shopu");
    $("#btn-lacznik").removeClass("shopu");
    $("#btn-lacznik").addClass("shopc");
    $("#shop-list-js span").removeClass("visible");
    $(".Łącznik").addClass("visible");
  }
  else if(n==2){
    refresh();
    $("#shop-list-js span").css({"display":"none"});
    $(".Automat").css({"display":"flex"});
    $(".price").css({"display":"flex"});
    $(".shoplist").css({"display":"flex"});
    $(".filtr-shop-button").addClass("shopu");
    $("#btn-automat").removeClass("shopu");
    $("#btn-automat").addClass("shopc");
    $("#shop-list-js span").removeClass("visible");
    $(".Automat").addClass("visible");
  }
  else if(n==3){
    refresh();
    $("#shop-list-js span").css({"display":"none"});
    $(".Przekąska").css({"display":"flex"});
    $(".price").css({"display":"flex"});
    $(".shoplist").css({"display":"flex"});
    $(".filtr-shop-button").addClass("shopu");
    $("#btn-przekaski").removeClass("shopu");
    $("#btn-przekaski").addClass("shopc");
    $("#shop-list-js span").removeClass("visible");
    $(".Przekąska").addClass("visible");
  }
  else if(n==4){
    refresh();
    $("#shop-list-js span").css({"display":"none"});
    $(".Napój").css({"display":"flex"});
    $(".shoplist").css({"display":"flex"});
    $(".price").css({"display":"flex"});
    $(".filtr-shop-button").addClass("shopu");
    $("#btn-napoje").removeClass("shopu");
    $("#btn-napoje").addClass("shopc");
    $("#shop-list-js span").removeClass("visible");
    $(".Napój").addClass("visible");
  }
  else if(n==5){
    refresh();
    $("#shop-list-js span").css({"display":"none"});
    $(".Ciepłe").css({"display":"flex"});
    $(".shoplist").css({"display":"flex"});
    $(".price").css({"display":"flex"});
    $(".filtr-shop-button").addClass("shopu");
    $("#btn-cieple").removeClass("shopu");
    $("#btn-cieple").addClass("shopc");
    $("#shop-list-js span").removeClass("visible");
    $(".Ciepłe").addClass("visible");
  }
  else if(n==6){
    refresh();
    $("#shop-list-js span").css({"display":"none"});
    $(".Bułka").css({"display":"flex"});
    $(".shoplist").css({"display":"flex"});
    $(".price").css({"display":"flex"});
    $(".filtr-shop-button").addClass("shopu");
    $("#btn-bulki").removeClass("shopu");
    $("#btn-bulki").addClass("shopc");
    $("#shop-list-js span").removeClass("visible");
    $(".Bułka").addClass("visible");
  }
  else if(n==7){
    refresh();
    $("#shop-list-js span").css({"display":"none"});
    $(".Fit").css({"display":"flex"});
    $(".shoplist").css({"display":"flex"});
    $(".price").css({"display":"flex"});
    $(".filtr-shop-button").addClass("shopu");
    $("#btn-fit").removeClass("shopu");
    $("#btn-fit").addClass("shopc");
    $("#shop-list-js span").removeClass("visible");
    $(".Fit").addClass("visible");
  }
}

function filter(n){
  var filterList = [];

  if(n==1){
    filterList = [];
    numbers = [];
    for(i=0;i<9999;i++){
      if($("#shopList"+i).hasClass("visible")==true){
        filterList.push(shopList[i]);
        numbers.push(i);
      }
      else continue;
    }
    filterList.sort(sortAbcZtoA);
    $("#shop-list-js").html("");
    for(i=0;i<filterList.length;i++){
      $("#shop-list-js").append("<span id=\"shopList"+numbers[i]+ "\" class=\"visible "+filterList[i][2].join(" ")+" "+filterList[i][3].join(" ")+"\">"+filterList[i][0]+" <span class=\"shoplist\">"+
      filterList[i][2].join(" - ")+"</span> <span class=\"price\">"+filterList[i][1].toFixed(2)+" PLN</span></span>");
    }
  }

  if(n==2){
    filterList = [];
    numbers = [];
    for(i=0;i<9999;i++){
      if($("#shopList"+i).hasClass("visible")==true){
        filterList.push(shopList[i]);
        numbers.push(i);
      }
      else continue;
    }
    filterList.sort(sortAbcAtoZ);
    $("#shop-list-js").html("");
    for(i=0;i<filterList.length;i++){
      $("#shop-list-js").append("<span id=\"shopList"+numbers[i]+ "\" class=\"visible "+filterList[i][2].join(" ")+" "+filterList[i][3].join(" ")+"\">"+filterList[i][0]+" <span class=\"shoplist\">"+
      filterList[i][2].join(" - ")+"</span> <span class=\"price\">"+filterList[i][1].toFixed(2)+" PLN</span></span>");
    }
  }

  if(n==3){
    filterList = [];
    numbers = [];
    for(i=0;i<9999;i++){
      if($("#shopList"+i).hasClass("visible")==true){
        filterList.push(shopList[i]);
        numbers.push(i);
      }
      else continue;
    }
    filterList.sort(sortNumberUp);
    $("#shop-list-js").html("");
    for(i=0;i<filterList.length;i++){
      $("#shop-list-js").append("<span id=\"shopList"+numbers[i]+ "\" class=\"visible "+filterList[i][2].join(" ")+" "+filterList[i][3].join(" ")+"\">"+filterList[i][0]+" <span class=\"shoplist\">"+
      filterList[i][2].join(" - ")+"</span> <span class=\"price\">"+filterList[i][1].toFixed(2)+" PLN</span></span>");
    }
  }

  if(n==4){
    filterList = [];
    numbers = [];
    for(i=0;i<9999;i++){
      if($("#shopList"+i).hasClass("visible")==true){
        filterList.push(shopList[i]);
        numbers.push(i);
      }
      else continue;
    }
    filterList.sort(sortNumberDown);
    $("#shop-list-js").html("");
    for(i=0;i<filterList.length;i++){
      $("#shop-list-js").append("<span id=\"shopList"+numbers[i]+ "\" class=\"visible "+filterList[i][2].join(" ")+" "+filterList[i][3].join(" ")+"\">"+filterList[i][0]+" <span class=\"shoplist\">"+
      filterList[i][2].join(" - ")+"</span> <span class=\"price\">"+filterList[i][1].toFixed(2)+" PLN</span></span>");
    }
  }

}

function sortNumberDown(a,b){
  if (a[1] === b[1]) {
      return 0;
  }
  else {
      return (a[1] < b[1]) ? -1 : 1;
  }
}

function sortNumberUp(a,b){
  if (a[1] === b[1]) {
      return 0;
  }
  else {
      return (a[1] > b[1]) ? -1 : 1;
  }
}

function sortAbcAtoZ(a,b){
    if(a < b) return -1;
    if(a > b) return 1;
    return 0;
}

function sortAbcZtoA(a,b){
    if(a < b) return 1;
    if(a > b) return -1;
    return 0;
}
