document.addEventListener('DOMContentLoaded', function () {
  // Dummy data for demonstration purposes
  const airports = ['Airport A', 'Airport B', 'Airport C'];
  
  // Populate 'From' and 'To' dropdowns
  const fromDropdown = document.getElementById('from');
  const toDropdown = document.getElementById('to');

  airports.forEach(airport => {
      const option = document.createElement('option');
      option.value = airport;
      option.text = airport;
      fromDropdown.add(option);
  });

  airports.forEach(airport => {
      const option = document.createElement('option');
      option.value = airport;
      option.text = airport;
      toDropdown.add(option);
  });

  // Dummy data for demonstration purposes
  const flights = [
      { id: 1, name: 'Flight 1', itinerary: 'Itinerary 1', fees: 100, passengers: 150, time: '09:00 AM' },
      { id: 2, name: 'Flight 2', itinerary: 'Itinerary 2', fees: 120, passengers: 120, time: '02:30 PM' },
      { id: 3, name: 'Flight 3', itinerary: 'Itinerary 3', fees: 90, passengers: 200, time: '06:45 AM' }
  ];

  // Populate the list of available flights
  const flightList = document.getElementById('flightList');
  
  flights.forEach(flight => {
      const listItem = document.createElement('li');
      listItem.innerHTML = `<b>${flight.name}</b><br>Itinerary: ${flight.itinerary}<br>Fees: $${flight.fees}<br>Passengers: ${flight.passengers}<br>Time: ${flight.time}`;
      listItem.setAttribute('data-flight-id', flight.id); // Store flight ID as a data attribute
      listItem.addEventListener('click', showFlightInfo); // Add click event listener
      flightList.appendChild(listItem);
  });

  // Function to show flight info when a flight is clicked
  function showFlightInfo(event) {
      const flightId = event.currentTarget.getAttribute('data-flight-id');
      alert(`Showing detailed info for flight with ID: ${flightId}`);
      // You can redirect to a new page or perform other actions here
  }

  // Dummy function for searching flights (you can implement this as needed)
  window.searchFlights = function () {
      alert('Searching flights...');
      // You can perform the search and update the list dynamically here
  };
});
