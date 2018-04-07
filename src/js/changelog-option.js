document.querySelector("option").addEventListener("click", showWork());

function showWork(){
  var actualName = $("#list-name").val();
  var className;

  console.log(actualName);

  switch(actualName){
    case "Jan Mager" : className = "janas"; break;
    case "Daniel Porzucek" : className = "tuczek"; break;
    case "Piotr Konkiewicz" : className = "piotras"; break;
    case "Jakub Ciszewski" : className = "cichy"; break;
    case "Szymon Strzałkowski" : className = "strzala"; break;
    case "Maksymilian Sułkowski" : className = "max"; break;
    case "Wszyscy" : className = "changelog-post"; break;
    default : break;
  }
  $(".changelog-post").css("display","none");
  switch(className){
    case "janas" :
      $(".janas").css("display","block"); break;
    case "tuczek" :
      $(".tuczek").css("display","block"); break;
    case "piotras" :
      $(".piotras").css("display","block"); break;
    case "cichy" :
      $(".cichy").css("display","block"); break;
    case "strzala" :
      $(".strzala").css("display","block"); break;
    case "max" :
      $(".max").css("display","block"); break;
    case "changelog-post" :
      $(".changelog-post").css("display","block"); break;
    default:
      $(".changelog-post").css("display","block");
  }
}
