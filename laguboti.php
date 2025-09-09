<?php include 'partials/header.php'; ?>

<div class="monitoring-page">
    <div class="location-header">
        <h1>LAGUBOTI</h1>
        <hr>
    </div>

    <div class="monitoring-title">
        <h2>MONITORING WEATHER</h2>
    </div>

    <div class="main-map-container">
    <div class="map-box-monitoring">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31895.3951565261!2d99.0493693194998!3d2.333423331693304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e01e625555555%3A0x8542385b331f4761!2sBalige%2C%20Kec.%20Balige%2C%20Toba%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1694082522421!5m2!1sid!2sid" 
            width="100%" 
            height="100%" 
            style="border:0; border-radius: 10px;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    </div>

    <div class="data-cards-container">
        <div class="data-card-new">
            <div class="label">Suhu :</div>
            <div class="value">28°C</div>
        </div>
        <div class="data-card-new">
            <div class="label">Kecepatan Angin :</div>
            <div class="value">10 km/jam</div>
        </div>
        <div class="data-card-new">
            <div class="label">Curah Hujan :</div>
            <div class="value">5 mm</div>
        </div>
        <div class="data-card-new">
            <div class="label">Rotasi :</div>
            <div class="value">15 RPM</div>
        </div>
        <div class="data-card-new">
            <div class="label">Jumlah Tip :</div>
            <div class="value">120</div>
        </div>
        <div class="data-card-new">
            <div class="label">Cahaya :</div>
            <div class="value">800 lux</div>
        </div>
    </div>
</div>

<?php // Footer bisa ditambahkan di sini jika ada ?>
</main>
</body>
</html>