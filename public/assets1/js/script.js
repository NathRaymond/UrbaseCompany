var personalityTestBtn = document.querySelectorAll(".personality-test-stack-btn");
for (let i = 0; i < personalityTestBtn.length; i++) {

	personalityTestBtn[i].addEventListener("click", (eve) => {
		eve.currentTarget.classList.toggle("personality-test-stack-btn-selected");
	})

}


function otpTimer() {
	var otpMinute = 3;
	var otpSecond = 60;
	var otpMinuteValue = document.querySelector(".otp-minute");
	var otpSecondValue = document.querySelector(".otp-second");
	var currentOtpSecond = 60;

	otpMinuteValue.textContent = "0" + otpMinute;

	var currentOtpMinute = 3;



	var startSecondTimer = setInterval(() => {
		var currentOtpMinuteTime;

		if (currentOtpSecond > 0) {
			currentOtpSecond = currentOtpSecond - 1;

			if (currentOtpSecond < 10) {
			otpSecondValue.textContent = ":0" + currentOtpSecond;

			} else {
				otpSecondValue.textContent = ":" + currentOtpSecond;

			}

		} else if (currentOtpSecond == 0) {
			currentOtpMinute = currentOtpMinute - 1;
			currentOtpMinuteTime = currentOtpMinute;
			otpMinuteValue.textContent = "0" + currentOtpMinute;

			currentOtpSecond = 60;
			
		}



		if (currentOtpMinuteTime == 0) {
			
			clearInterval(startSecondTimer)
			otpSecondValue.textContent = ":00";


		}



	}, 1000);

}







var showTrackSubmenuParent = document.querySelector("#track-sidebar-menu-item");
var trackSubmenu = document.querySelector("#sidebar-track-submenu-parent");
var showDropdownIcon = document.querySelector("#track-sidebar-menu-item-icon")
var showTrackSubmenuParentMobile = document.querySelector("#track-sidebar-menu-item-mobile");
var trackSubmenuMobile = document.querySelector("#sidebar-track-submenu-parent-mobile");
var showDropdownIconMobile = document.querySelector("#track-sidebar-menu-item-icon-mobile")
showTrackSubmenuParent.addEventListener("click", () => {
	trackSubmenu.classList.toggle("showtracksubmenu")
	if (trackSubmenu.classList.contains("showtracksubmenu")) {
		showDropdownIcon.setAttribute('icon', 'bxs:down-arrow')
	} else {
		showDropdownIcon.setAttribute('icon', 'bxs:right-arrow')
	}
})

showTrackSubmenuParentMobile.addEventListener("click", () => {
	trackSubmenuMobile.classList.toggle("showtracksubmenu")
	if (trackSubmenuMobile.classList.contains("showtracksubmenu")) {
		showDropdownIconMobile.setAttribute('icon', 'bxs:down-arrow')
	} else {
		showDropdownIconMobile.setAttribute('icon', 'bxs:right-arrow')
	}
})


var faqQuestionParentContainer = document.querySelectorAll(".faq-question-parent-container");

for (let i = 0; i < faqQuestionParentContainer.length; i++) {
	faqQuestionParentContainer[i].addEventListener("click", (eve) => {
		eve.target.children[1].classList.toggle("faq-show-answer-container");
		if (eve.target.children[1].classList.contains("faq-show-answer-container")) {
			eve.target.children[0].children[1].setAttribute('icon', 'jam:minus');

		} else {
			eve.target.children[0].children[1].setAttribute('icon', 'jam:plus');

		}

	})
}

var availableBalanceIcon = document.querySelector(".available-amount-icon");
var balanceAmount = document.querySelector(".available-amount")


availableBalanceIcon.addEventListener("click", () => {
	availableBalanceIcon.classList.toggle("showhidebalance");
	if (availableBalanceIcon.classList.contains("showhidebalance")) {
		balanceAmount.textContent = "********"
		availableBalanceIcon.setAttribute('icon', 'clarity:eye-hide-line');
	} else {
		balanceAmount.textContent = "$1320.00";
		availableBalanceIcon.setAttribute('icon', 'clarity:eye-show-line');


	}
})





function showPassword() {
	var password = document.querySelector('.password-box');
	var passwordIcon = document.querySelector('.show-password-icon');
	if (password.type === "password") {
		password.type = "text";
		passwordIcon.setAttribute('data-icon', 'clarity:eye-show-solid');
	} else {
		password.type = "password";
		passwordIcon.setAttribute('data-icon', 'clarity:eye-hide-solid');
	}
}

function changeStyle() {
	var var1 = document.querySelector('#nav-icon-anim');
	var showNavM = document.querySelector('#collapsibleNavId22');
	var body = document.querySelector('body');
	var1.classList.toggle('open');
	if (var1.classList.contains('open')) {
		showNavM.className = "";
		showNavM.classList.toggle('shownavbarmobile');
		body.style.overflow = "hidden";
	} else {
		showNavM.classList.toggle('hidenavbar');
		body.style.overflow = "auto";
	}
}

function workMode() {
	var toggleSwitch = document.querySelector(".toggle-checkbox");
	var readyModeText = document.querySelector(".ready-to-work-text");
	toggleSwitch.classList.toggle("offline-mode")
	if (toggleSwitch.classList.contains("offline-mode")) {
		readyModeText.textContent = "Not Available"
	} else {
		readyModeText.textContent = "Ready to work"
	}

}
