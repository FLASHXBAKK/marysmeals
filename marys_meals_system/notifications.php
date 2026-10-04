<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Notifications — Mary's Meals Malawi</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link href="https://fonts.gstatic.com" crossorigin rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet"/>
<link href="assets/app.css" rel="stylesheet"/>
<script src="assets/app.js" defer></script>
</head>
<body data-page="notifications">

<main class="mm-main">
  <div class="mm-content">

    <div class="mm-page-head">
      <h1>Notifications</h1>
      <p>Operational alerts across programmes and logistics.</p>
    </div>

    <div class="mm-card">
      <h2>Alerts</h2>
      <div class="mm-list">
        <div class="mm-list-item">
          <div style="display:flex;gap:12px;align-items:center">
            <span class="material-symbols-outlined" style="color:var(--mm-danger)">warning</span>
            <div><div class="mm-li-title">Cooking oil critically low at Zomba Store</div><div class="mm-li-sub">1.2 MT remaining · 10 minutes ago</div></div>
          </div>
          <a class="mm-btn secondary" href="stock.html">Resolve</a>
        </div>
        <div class="mm-list-item">
          <div style="display:flex;gap:12px;align-items:center">
            <span class="material-symbols-outlined" style="color:var(--mm-warn)">local_shipping</span>
            <div><div class="mm-li-title">Truck MW-1180-C delayed at Nsanje</div><div class="mm-li-sub">Consignment CON-2040 · 1 hour ago</div></div>
          </div>
          <a class="mm-btn secondary" href="gps.html">Track</a>
        </div>
        <div class="mm-list-item">
          <div style="display:flex;gap:12px;align-items:center">
            <span class="material-symbols-outlined" style="color:var(--mm-warn)">fact_check</span>
            <div><div class="mm-li-title">Nsanje audit flagged: portion variance of 28</div><div class="mm-li-sub">Field audit · 2 hours ago</div></div>
          </div>
          <a class="mm-btn secondary" href="field-audits.html">Review</a>
        </div>
        <div class="mm-list-item">
          <div style="display:flex;gap:12px;align-items:center">
            <span class="material-symbols-outlined" style="color:var(--mm-success)">volunteer_activism</span>
            <div><div class="mm-li-title">New donation received: Chirwa Foundation</div><div class="mm-li-sub">MK 1,200,000 · Emergency food fund · Today</div></div>
          </div>
          <a class="mm-btn secondary" href="donations.html">View</a>
        </div>
      </div>
    </div>

  </div>
</main>

</body>
</html>
