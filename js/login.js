document.forms[0].onsubmit = () => {
  //Regular Expressions for the form inputs
  let emailRegEx =
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  let passwordRegEx = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; //Minimum eight characters, at least one letter and one number.

  //Form inputs values
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;

  //Test values for the RegEx
  let resEmail = emailRegEx.test(email);
  let resPass = passwordRegEx.test(password);

  //Validations
  if (password == "admin" && email == "admin") {
    return true;
  } else if (!resEmail || email == "") {
    document.getElementById("wrongEmail").innerHTML =
      "Please enter a valid email.";
    setTimeout(() => {
      document.getElementById("wrongEmail").innerHTML = "";
    }, 3000);
    return false;
  } else if (!resPass || password == "") {
    document.getElementById("wrongPass").innerHTML =
      "Please enter a valid password. The password should contain at least eight characters and at least one letter and one number.";
    setTimeout(() => {
      document.getElementById("wrongPass").innerHTML = "";
    }, 3000);
    return false;
  } else {
    return true;
  }
};
