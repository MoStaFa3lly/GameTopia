//Make accounts toggle visibility
document.getElementById("acc-click").onclick = () => {
  if (document.getElementById("acc-lists").style.display == "block") {
    document.getElementById("acc-lists").style.display = "none";
  } else document.getElementById("acc-lists").style.display = "block";
  document.getElementById("acc-click").classList.toggle("clicked");
};
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
    document;
    e.querySelectorAll(".container .prod-cards .card .up-img img").forEach(
      (img) => {
        img.style.transform = "scale(1.05)";
      }
    );
  };
  e.onmouseleave = () => {
    document;
    e.querySelectorAll(".container .prod-cards .card .up-img img").forEach(
      (img) => {
        img.style.transform = "scale(1)";
      }
    );
  };
});
