// message.js
function sendMessage() {
  var messageInput = document.getElementById("messageInput");
  var message = messageInput.value.trim();

  if (message !== "") {
    // Create a new message element
    var newMessage = document.createElement("div");
    newMessage.className = "message sent";
    newMessage.innerHTML = "<p>" + message + "</p>";

    // Append the new message to the messages container
    var messagesContainer = document.getElementById("messagesContainer");
    messagesContainer.appendChild(newMessage);

    // Clear the input field
    messageInput.value = "";

    // Show the confirmation box
    showMessageBox();
  }
}

function showMessageBox() {
  // Display the message box
  var messageBox = document.createElement("div");
  messageBox.className = "message-box";
  messageBox.innerHTML = "<p>Message sent to the company!</p>";

  document.body.appendChild(messageBox);

  // Hide the message box after 3 seconds
  setTimeout(function () {
    messageBox.style.display = "none";
  }, 3000);
}
