/*table!!!*/

td = document.getElementsByTagName("td");
for (let i = 0; i < td.length; i++) {

    td[i].addEventListener("mouseover", function () {
        td[i].style.backgroundColor = "#84bfff";
    });
    td[i].addEventListener("mouseout", function () {
        td[i].style.backgroundColor = "";
    });

}

/*images!!!*/

var counter = 0;

function nextPhoto() {
    var srcArray = ["images/Haifa1.jpg", "images/Haifa2.jpg", "images/Haifa3.jpg", "images/Haifa4.png"];
    counter++;

    if (counter == 4) {
        counter = 0;
    }

    document.getElementById("currentImage").src = srcArray[counter];

}


function prevPhoto() {

    var srcArray = ["images/Haifa1.jpg", "images/Haifa2.jpg", "images/Haifa3.jpg", "images/Haifa4.png"];

    counter--;
    if (counter == -1) {
        counter = 3;
    }

    document.getElementById("currentImage").src = srcArray[counter];

}


/*fontSize!!!*/

function over() {
    document.getElementById("demo").style.fontSize = "22px";
}

function out() {
    document.getElementById("demo").style.fontSize = "initial";
}


/*formErrors!!!*/

function checkForm() {
    var phone = document.getElementById("phoneNumber").value;
    var x = document.getElementById("email").value;
    var atposition = x.indexOf("@");
    var dotposition = x.lastIndexOf(".");
    var number = document.getElementById("guest").value;
    var fullNameCheck = document.getElementById("fullName").value;
    var car = document.getElementById("carpool").value;
    var area = document.getElementById("phone").value;

    var fullNameCheck = document.getElementById("fullName").value;
    if (fullNameCheck.length == 0) {
        document.getElementById("fullName1").innerHTML = "!שם מלא לא תקין* ";
    }

    if (phone.length == 7) {
        text = "";
    } else {
        text = "!מספר פלאפון לא תקין* ";
    }
    document.getElementById("phoneNumber1").innerHTML = text;


    if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
        text = "!כתובת אימייל לא תקינה* ";
    } else {
        text = "";
    }
    document.getElementById("email1").innerHTML = text;


    if (number.valueOf() > 0) {
        text = "";
    } else {
        text = "!מספר אורחים לא תקין* ";
    }
    document.getElementById("guest1").innerHTML = text;


    if (car.valueOf() == "") {
        text = " !בחר דרך הגעה* ";
    } else {
        text = "";
    }
    document.getElementById("carpool1").innerHTML = text;

    if (area.valueOf() == "") {
        text = " !בחר קידומת פלאפון* ";
    } else {
        text = "";
    }
    document.getElementById("phone1").innerHTML = text;
}


/*FullName!!!*/

var text = "";

function OnlyLetters(inputL) {

    var letters = /^[א-תA-Za-z ]+$/;
    if (inputL.value.match(letters)) {
        text = "";
        document.getElementById("fullName1").innerHTML = text;
        return true;

    } else {
        text = "!שם מלא לא תקין* ";
        document.getElementById("fullName1").innerHTML = text;
        return false;
    }
}


/*additionalText!!!*/

document.getElementById("info").onkeyup = function () {
    document.getElementById("left").innerHTML = (200 - this.value.length) + " :מספר תווים שנותרו "
};


/*Goodbye!!!*/

var countBye = 0;

function bye() {
    if (countBye == 0) {
        alert("ניפגש בחגיגות העצמאות, תודה ולהתראות (:");
        countBye++;
    }
}


