$(document).ready(function(){
// Send button check array
var chk = { "fname" : false, "lname" : false, "phone" :false, "email" : false };
    // Enables de the send button
function enablechk() {
    if (chk.fname == true && chk.lname == true && chk.phone == true && chk.email == true) {
        $("#submit").prop("disabled" , false );
    } else {
        $("#submit").prop("disabled", true );
    }
}
// Initialize sring variable
var str = "";
//Validate First name
$("#fname").change(function() {
    var str = $("#fname").val();
    var reg = RegExp("^[A-Za-z ]+$");
    var res = reg.test(str);
    console.log(res);
    if (res == true) {
        strchg = "<i class=\"fa fa-check success\" aria-hidden=\"true\"></i>";
        $("#smlnme").empty().append(strchg);
        $("#smlnme").attr("class" , "success");
        chk.fname = true;
        console.log(chk);
    } else {
        strchg = "<i class=\"fa fa-times fail\" aria-hidden=\"true\"></i>";
        $("#smlnme").empty().append(strchg);
        $("#smlnme").attr("class" , "fail");
        chk.fname = false;
        console.log(chk);
    }
    enablechk();
});
// Validate Last name
$("#lname").change(function() {
    var str = $("#lname").val();
    var reg = RegExp("^[A-Za-z ]+$");
    var res = reg.test(str);
    console.log(res);
    if (res == true) {
        strchg = "<i class=\"fa fa-check success\" aria-hidden=\"true\"></i>";
        $("#smllnm").empty().append(strchg);
        $("#smllnm").attr("class" , "success");
        chk.lname = true;
        console.log(chk);
    } else {
        strchg = "<i class=\"fa fa-times fail\" aria-hidden=\"true\"></i>";
        $("#smllnm").empty().append(strchg);
        $("#smllnm").attr("class" , "fail");
        chk.lname = false;
        console.log(chk);
    }
    enablechk();
});
// Validate phone
$("#phone").change(function() {
    var str = $("#phone").val();
    var reg = RegExp("[^0-9]|[\W ]");
    var res = reg.test(str);
    console.log(res);
    if (res == true) {
        strchg = "A diez d&#237;gitos, ej. 664-123-5678 sin guiones";
        $("#smlphn").empty().append(strchg);
        $("#smlphn").attr("class" , "fail");
        chk.phone = false;
        console.log(chk);
    } else {
        strchg = "<i class=\"fa fa-check success\" aria-hidden=\"true\"></i>";
        $("#smlphn").empty().append(strchg);
        $("#smlphn").attr("class" , "success");
        chk.phone = true;
        console.log(chk);
    }
    enablechk();
});
// Validate Email
$("#eml").change(function(){
    var eml = $('#eml').val();
    var reg = RegExp("^[A-Za-z0-9_!#$%&'*+/=?`{|}~^.-]+@[A-Za-z0-9.-]+$");
    var res = reg.test(eml);
    console.log(res);
    if (res == false) {
        strchg = "El correo eletronico no es valido";
        $("#smleml").empty().append(strchg);
        $("#smleml").attr("class" , "fail");
        chk.email = false;
        console.log(chk);
    } else {
        strtext = "<i class=\"fa fa-check success\" aria-hidden=\"true\"></i>";
        $("#smleml").empty().append(strtext);
        $("#smleml").attr("class" , "success");
        chk.email = true;
        console.log(chk);
    }
    enablechk();
});
// Debug log
console.log(str);
console.log(str.length);
});

