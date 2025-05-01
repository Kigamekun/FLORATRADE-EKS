
<div class="container">
    <h2 class="mb-4">Peta SIG - Lokasi Negara</h2>
    <div id="map" style="height: 500px;"></div>
</div>

<!-- Sertakan library Leaflet CSS & JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
    // Inisialisasi peta dengan tampilan awal global (koordinat [0,0] dan zoom level 2)
    var map = L.map('map').setView([0, 0], 2);

    // Menambahkan layer OpenStreetMap sebagai dasar peta
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    }).addTo(map);

    // Ambil data negara dari controller (convert ke JSON)
    var countries = @json($countries);

    // Tambahkan marker untuk setiap negara yang memiliki data koordinat
    countries.forEach(function(country) {
        if (country.latitude && country.longitude) {
            L.marker([country.latitude, country.longitude])
             .addTo(map)
             .bindPopup(
                "<b>" + country.country_name + "</b><br/>" +
                "Latitude: " + country.latitude + "<br/>" +
                "Longitude: " + country.longitude
             );
        }
    });
</script>
