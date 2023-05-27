//Make accounts toggle visibility
document.getElementById("acc-click").onclick = () => {
  if (document.getElementById("acc-lists").style.display == "block") {
    document.getElementById("acc-lists").style.display = "none";
  } else document.getElementById("acc-lists").style.display = "block";
  document.getElementById("acc-click").classList.toggle("clicked");
};
