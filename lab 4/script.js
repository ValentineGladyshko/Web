"use strict";
$(document).ready(function () {
	$('#login-trigger').click(function () {
        $(this).next('#login-content').slideToggle();
		$(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $(this).find('span').html('&#x25B2;');
        } else {
			$(this).find('span').html('&#x25BC;');
		}
	});
});
function Valid() {
        var myName = document.getElementById('name').value,
		valid0 = false,
		original,
		upper,
		re = /^[+\d\(\)\ -]{4,19}\d$/,
		myPhone = document.getElementById('phoneNum').value;
	var	valid1 = re.test(myPhone);
    
    myName += '';
    upper = myName.charAt(0).toUpperCase();
    original = myName.charAt(0);

    if (upper === original) {
		valid0 = true;
	}
		else
		{
			alert('Invalid name');
			return false;
		}
	if (valid1 === valid0) {
        return true;
		
	}
		else {
			alert('Invalid number');
			return false;
		}
}