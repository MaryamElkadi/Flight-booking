function openPaymentWindow() {
  document.getElementById("paymentModal").style.display = "block";
}

function closePaymentModal() {
  document.getElementById("paymentModal").style.display = "none";
}

function confirmPaymentAmount() {
  // Add your logic for confirming payment amount
  var amount = document.getElementById("userInputAmount").value;
  alert("Payment confirmed: $" + amount);
}

function sendMessage() {
  // Add your logic for sending a message here
  var message = document.getElementById("messageCompany").value;
  alert("Sending message: " + message);
}

function searchFlight() {
  // Add your logic for searching flight information
  var fromLocation = document.getElementById("searchFrom").value;
  var toLocation = document.getElementById("searchTo").value;
  
  alert("Searching for flights from " + fromLocation + " to " + toLocation);
}
