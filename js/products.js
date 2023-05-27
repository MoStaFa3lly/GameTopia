//Make accounts toggle visibility
document.getElementById("acc-click").onclick = () => {
  if (document.getElementById("acc-lists").style.display == "block") {
    document.getElementById("acc-lists").style.display = "none";
  } else document.getElementById("acc-lists").style.display = "block";
  document.getElementById("acc-click").classList.toggle("clicked");
};
//Move the img of card when hovering the card
document.querySelectorAll(".container .prod-cards .card").forEach((e) => {
  e.onmouseenter = () => {
    e.querySelectorAll(".container .prod-cards .card .up-img img").forEach(
      (img) => {
        img.style.transform = "scale(1.05)";
      }
    );
  };
  e.onmouseleave = () => {
    e.querySelectorAll(".container .prod-cards .card .up-img img").forEach(
      (img) => {
        img.style.transform = "scale(1)";
      }
    );
  };
});

//Display toggle cart
if (document.querySelector(".cart-logo") != null) {
  document.querySelector(".cart-logo").onclick = () => {
    document.querySelector(".cart").classList.toggle("displayed");
    //Ajax call to get cart data of user
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "viewcart.php", true);
    xhr.onload = function () {
      if (this.status == 200) {
        document.getElementById("items").innerHTML = this.responseText;
      }
    };
    xhr.send();
  };
}

//Seacrh by category and brand validation
document.forms[0].onsubmit = () => {
  catValue = document.getElementById("category").value;
  brandValue = document.getElementById("brand").value;
  if (catValue == "0" || brandValue == "0") {
    document.getElementById("wrongSearch").innerHTML =
      "Please select a brand and a category to search for.";
    setTimeout(() => {
      document.getElementById("wrongSearch").innerHTML = "";
    }, 3000);
    return false;
  }
};
