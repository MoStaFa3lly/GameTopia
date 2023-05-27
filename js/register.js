document.forms[0].onsubmit = () => {
  //Regular Expressions for the form inputs
  let emailRegEx =
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  let passwordRegEx = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; //Minimum eight characters, at least one letter and one number.\
  let nameRegEx = /^[a-zA-Z ,.'-]+$/; //Must not contain numbers.
  let phoneRegex = /^01[0125][0-9]{8}$/; //Egyptian format

  //Form inputs values
  let fname = document.getElementById("fname").value;
  let sname = document.getElementById("sname").value;
  let phone = document.getElementById("phone-number").value;
  let address = document.getElementById("address").value;
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let confPassword = document.getElementById("conf-password").value;

  //Test values for the RegEx
  let resFname = nameRegEx.test(fname);
  let resSname = nameRegEx.test(sname);
  let resPhone = phoneRegex.test(phone);
  let resEmail = emailRegEx.test(email);
  let resPass = passwordRegEx.test(password);

  //Validations
  if (!resFname || fname == "") {
    document.getElementById("wrongFname").innerHTML =
      "Please enter a valid Name.";
    MsgErrorTimeOut("wrongFname");
    return false;
  } else if (!resSname || sname == "") {
    document.getElementById("wrongSname").innerHTML =
      "Please enter a valid Name.";
    MsgErrorTimeOut("wrongSname");
    return false;
  } else if (!resPhone || phone == "") {
    document.getElementById("wrongPhone").innerHTML =
      "Please enter a valid phone number in Egyptian format.";
    MsgErrorTimeOut("wrongPhone");
    return false;
  } else if (address == "") {
    document.getElementById("wrongAddress").innerHTML = "Address is required.";
    MsgErrorTimeOut("wrongAddress");
    return false;
  } else if (!resEmail || email == "") {
    document.getElementById("wrongEmail").innerHTML =
      "Please enter a valid Email.";
    MsgErrorTimeOut("wrongEmail");
    return false;
  } else if (!resPass || password == "") {
    document.getElementById("wrongPass").innerHTML =
      "Please enter a valid password. The password must contain at least eight characters and at least one letter and one number. ";
    MsgErrorTimeOut("wrongPass");
    return false;
  } else if (password != confPassword) {
    document.getElementById("wrongPassConf").innerHTML =
      "Passwords must be same.";
    MsgErrorTimeOut("wrongPassConf");
    return false;
  } else {
    return true;
  }
};

//Make error message disappear after 3 sec.
function MsgErrorTimeOut(msgId) {
  setTimeout(() => {
    document.getElementById(msgId).innerHTML = "";
  }, 3000);
}
