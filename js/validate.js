function validate() {
var phone = $("#just_phone_number").value;
var re = /^\d[\d\(\)\ -]{4,14}\d$/;
var valid = re.test(Phone);
if (valid==true) {
	return true}
else {
	output = 'Номер телефона введен неправильно!';
	$("#message").html(output);
	return false
}
}