var axios = require("axios")
axios.get('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=18040E52C851C58661CA4969107B94FF&steamids=76561197960435530&format=json', {
  headers: {
    'Content-Type': 'application/json',
  }
})
.then(function (response) {
  console.log(response);
})
.catch(function (error) {
  console.log(error);
});


fetch("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=18040E52C851C58661CA4969107B94FF&steamids=76561197960435530&format=xml",
{mode: 'cors',
  credentials: 'include'}
)
  .then((response) => {
    if (response.ok) {
      return response.json();
    } else {
      throw new Error("NETWORK RESPONSE ERROR");
    }
  })
  .then(data => {
    console.log(data);
    //displayCocktail(data)
  })
  .catch((error) => console.error("FETCH ERROR:", error));

/*
function displayCocktail(data) {
  const cocktail = data.drinks[0];
  const cocktailDiv = document.getElementById("cocktail");

//kullanıcı adı
  const cocktailName = cocktail.strDrink;
const heading = document.createElement("h1");
heading.innerHTML = cocktailName;
cocktailDiv.appendChild(heading);

//kullanıcı resmi
const cocktailImg = document.createElement("img");
cocktailImg.src = cocktail.strDrinkThumb;
cocktailDiv.appendChild(cocktailImg);
document.body.style.backgroundImage = "url('" + cocktail.strDrinkThumb + "')";

}
*/


//18040E52C851C58661CA4969107B94FF
// http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=XXXXXXXXXXXXXXXXXXXXXXX&steamids=76561197960435530
