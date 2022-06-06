// Karte hinzufügen
function initMap() {
    // Position
    const uluru = { lat: -25.344, lng: 131.031 };
    // Karte zentrieren
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: uluru,
      map: map,
    });
  }
  
  window.initMap = initMap;