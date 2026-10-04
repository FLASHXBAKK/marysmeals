<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>GPS Vehicle Tracking — Mary's Meals Malawi</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link href="https://fonts.gstatic.com" crossorigin rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet"/>
<link href="assets/app.css" rel="stylesheet"/>
<script src="assets/app.js" defer></script>
<style>
  .mm-map {
    background: repeating-linear-gradient(45deg, #eef4fb, #eef4fb 18px, #e6eefb 18px, #e6eefb 36px);
    border: 1px solid var(--mm-border); border-radius: 10px;
    height: 320px; display: flex; align-items: center; justify-content: center;
    color: var(--mm-muted); flex-direction: column; gap: 8px;
  }
</style>
</head>
<body data-page="gps">

<main class="mm-main">
  <div class="mm-content">

    <div class="mm-page-head">
      <h1>GPS Vehicle Tracking</h1>
      <p>Live status of the logistics fleet delivering rations.</p>
    </div>

    <div class="mm-grid cols-4">
      <div class="mm-metric"><div class="mm-metric-label">Fleet Size</div><div class="mm-metric-value">8</div></div>
      <div class="mm-metric"><div class="mm-metric-label">In Transit</div><div class="mm-metric-value">3</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Idle at Depot</div><div class="mm-metric-value">4</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Maintenance</div><div class="mm-metric-value">1</div></div>
    </div>

    <div class="mm-card" style="margin-top:20px">
      <h2>Fleet Map</h2>
      <p class="mm-card-sub">Live vehicle positions across the delivery network.</p>
      <div class="mm-map">
        <span class="material-symbols-outlined" style="font-size:40px">location_on</span>
        <div>Live map view — vehicles plotted in real time</div>
      </div>
    </div>

    <div class="mm-card">
      <h2>Vehicle Status</h2>
      <table class="mm-table">
        <thead><tr><th>Vehicle</th><th>Driver</th><th>Location</th><th>Consignment</th><th>Status</th></tr></thead>
        <tbody>
          <tr><td>MW-2391-B</td><td>D. Namwinga</td><td>Machinga road</td><td>CON-2041</td><td><span class="mm-pill info"><span class="dot"></span>In transit</span></td></tr>
          <tr><td>MW-1180-C</td><td>E. Mhone</td><td>Nsanje</td><td>CON-2040</td><td><span class="mm-pill warn"><span class="dot"></span>Delayed</span></td></tr>
          <tr><td>MW-5567-A</td><td>B. Zimba</td><td>Mpande Depot</td><td>—</td><td><span class="mm-pill ok"><span class="dot"></span>Idle</span></td></tr>
          <tr><td>MW-7742-F</td><td>—</td><td>Workshop</td><td>—</td><td><span class="mm-pill bad"><span class="dot"></span>Maintenance</span></td></tr>
        </tbody>
      </table>
    </div>

  </div>
</main>

</body>
</html>
