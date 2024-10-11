if(document.querySelector('#mapa')){
    const lat = 10.2487376;
    const long = -67.6023421;
    const zoom = 16;
    const map = L.map('mapa').setView([lat, long], zoom);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([lat, long]).addTo(map)
        .bindPopup(`
            <h2 class="mapa__heading">DevWebCamp</h2>
            <p class="mapa__texto">Teatro de la Ópera Maracay</p>
        `)
        .openPopup();
}