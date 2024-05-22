document.getElementById("editProfile").onclick = function() {
	    switchEditProfileDiv();
};

document.getElementById("cancelEditProfile").onclick = function() {
	    switchEditProfileDiv();
};

document.getElementById("changePassword").onclick = function() {
	    switchChangePasswordDiv();
};

document.getElementById("cancelChangePassword").onclick = function() {
	    switchChangePasswordDiv();
};

function switchEditProfileDiv() {
	var editProfileDiv = document.getElementById("editProfileDiv");
	if (editProfileDiv.style.display === "none") {
       	editProfileDiv.style.display = "block";
    } else {
       	editProfileDiv.style.display = "none";
    }
}


function switchChangePasswordDiv() {
	var changePasswordDiv = document.getElementById("changePasswordDiv");
	if (changePasswordDiv.style.display === "none") {
       	changePasswordDiv.style.display = "block";
    } else {
       	changePasswordDiv.style.display = "none";
    }
}
