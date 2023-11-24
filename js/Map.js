function initMap() {
    // The location of Uluru
    const uluru = { lat: 21.762833197033977, lng: 72.10383946327008 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("googleMap"), {
        zoom: 19,
        center: uluru
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
}