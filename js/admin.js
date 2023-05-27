//Click on button to switch between forms
document.querySelectorAll(".btn-select-admin")[0].onclick = () => {
  document.querySelectorAll(".btn-select-admin").forEach((e) => {
    e.classList.remove("selected");
  });
  document.querySelectorAll(".btn-select-admin")[0].classList.add("selected");
  document.getElementById("Products").style.display = "flex";
  document.getElementById("Customer").style.display = "none";
};
document.querySelectorAll(".btn-select-admin")[1].onclick = () => {
  document.querySelectorAll(".btn-select-admin").forEach((e) => {
    e.classList.remove("selected");
  });
  document.querySelectorAll(".btn-select-admin")[1].classList.add("selected");
  document.getElementById("Products").style.display = "none";
  document.getElementById("Customer").style.display = "flex";
};

//Form validations
//Products form
document.getElementById("Products").onsubmit = () => {
  //Regular Expressions for the form inputs
  let numberRegEx = /^[0-9]{1,10}$/; //1 to 10 digits
  let descRegEx = /^(.|\s)*[a-zA-Z]+(.|\s)*$/; //alphabets, special characters, spaces, new line and presumably numbers

  //Form inputs values
  let prodName = document.getElementById("prod-name").value;
  let prodDesc = document.getElementById("prod-desc").value;
  let prodPrice = document.getElementById("prod-price").value;

  // //Test values for the RegEx
  let resDesc = descRegEx.test(prodDesc);
  let resPrice = numberRegEx.test(prodPrice);

  //Validations
  if (prodName == "") {
    document.getElementById("wrongName").innerHTML =
      "Please enter a valid Name.";
    MsgErrorTimeOut("wrongName");
    return false;
  } else if (!resDesc || prodDesc == "") {
    document.getElementById("wrongDesc").innerHTML =
      "Please enter a valid Description.";
    MsgErrorTimeOut("wrongDesc");
  } else if (!resPrice || prodPrice == "") {
    document.getElementById("wrongPrice").innerHTML =
      "Please enter a valid Price.";
    MsgErrorTimeOut("wrongPrice");
  } else return true;

  //Make error message disappear after 3 sec.
  function MsgErrorTimeOut(msgId) {
    setTimeout(() => {
      document.getElementById(msgId).innerHTML = "";
    }, 3000);
  }
  return false;
};
//Customer form
document.getElementById("Customer").onsubmit = () => {
  //Regular Expressions for the form inputs
  let emailRegEx =
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  let passwordRegEx = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; //Minimum eight characters, at least one letter and one number.\
  let nameRegEx = /^[a-zA-Z ,.'-]+$/; //Must not contain numbers.
  let phoneRegex = /^01[0125][0-9]{8}$/; //Egyptian format

  //Form inputs values
  let fname = document.getElementById("cust-fname").value;
  let lname = document.getElementById("cust-lname").value;
  let phone = document.getElementById("cust-phone").value;
  let address = document.getElementById("cust-address").value;
  let email = document.getElementById("cust-email").value;
  let password = document.getElementById("cust-password").value;

  //Test values for the RegEx
  let resFname = nameRegEx.test(fname);
  let resLname = nameRegEx.test(lname);
  let resPhone = phoneRegex.test(phone);
  let resEmail = emailRegEx.test(email);
  let resPass = passwordRegEx.test(password);

  //Validations
  if (!resFname || fname == "") {
    document.getElementById("wrongFname").innerHTML =
      "Please enter a valid Name.";
    MsgErrorTimeOut("wrongFname");
    return false;
  } else if (!resLname || lname == "") {
    document.getElementById("wrongLname").innerHTML =
      "Please enter a valid Name.";
    MsgErrorTimeOut("wrongLname");
    return false;
  } else if (!resPhone || phone == "") {
    document.getElementById("wrongPhone").innerHTML =
      "Please enter a valid phone number in Egyptian format.";
    MsgErrorTimeOut("wrongPhone");
    return false;
  } else if (!resEmail || email == "") {
    document.getElementById("wrongEmail").innerHTML =
      "Please enter a valid Email.";
    MsgErrorTimeOut("wrongEmail");
    return false;
  } else if (address == "") {
    document.getElementById("wrongAddress").innerHTML = "Address is required.";
    MsgErrorTimeOut("wrongAddress");
    return false;
  } else if (!resPass || password == "") {
    document.getElementById("wrongPass").innerHTML =
      "Please enter a valid password. The password must contain at least eight characters and at least one letter and one number. ";
    MsgErrorTimeOut("wrongPass");
    return false;
  } else {
    return true;
  }
  //Make error message disappear after 3 sec.
  function MsgErrorTimeOut(msgId) {
    setTimeout(() => {
      document.getElementById(msgId).innerHTML = "";
    }, 3000);
  }
};

// document.getElementById("cust-fname").addEventListener("input", (e) => {
//   let nameRegEx = /^[a-zA-Z ,.'-]+$/; //Must not contain numbers.
//   let v = e.target.value;
//   let resFname = nameRegEx.test(v);
//   if (!resFname) {
//     document.getElementById("wrongFname").innerHTML =
//       "Please enter a valid Name.";
//   } else document.getElementById("wrongFname").innerHTML = "";
// });
