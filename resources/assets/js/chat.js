
//////////////////////////////////////////////////
// 
//	Chat opening and closing
//
//////////////////////////////////////////////////

var chatIsOpen = false;

// trigger
$('#icon-chat').click(function(e) {
	e.preventDefault();
	toggleChat();
});



// open chat
function openChat() {
	$('body').addClass('text-chat-is-open');
	chatIsOpen = true;
}

// close chat
function closeChat() {
	$('body').removeClass('text-chat-is-open');
	chatIsOpen = false;
}

// toggle open / close chat
function toggleChat() {
	if (chatIsOpen == false) {
		openChat();
	} else {
		closeChat();
	}
}