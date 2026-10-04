<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Dashboard — Mary's Meals Malawi</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link href="https://fonts.gstatic.com" crossorigin rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet"/>
<link href="assets/app.css" rel="stylesheet"/>
<script src="assets/app.js" defer></script>
</head>
<body data-page="dashboard">

<main class="mm-main">
  <div class="mm-content">

    <div class="mm-page-head">
      <h1>Welcome back, Chifuniro</h1>
      <p>Today's programme and donation overview for the Blantyre region.</p>
    </div>

    <div class="mm-grid cols-4">
      <div class="mm-metric">
        <div class="mm-metric-label">Children Fed Today</div>
        <div class="mm-metric-value">18,240</div>
        <div class="mm-metric-foot">Across 32 schools</div>
      </div>
      <div class="mm-metric">
        <div class="mm-metric-label">Donations This Month</div>
        <div class="mm-metric-value">MK 42.6M</div>
        <div class="mm-metric-foot">+8.4% vs last month</div>
      </div>
      <div class="mm-metric">
        <div class="mm-metric-label">Active Donors</div>
        <div class="mm-metric-value">1,285</div>
        <div class="mm-metric-foot">34 new this week</div>
      </div>
      <div class="mm-metric">
        <div class="mm-metric-label">Meals Funded</div>
        <div class="mm-metric-value">512,000</div>
        <div class="mm-metric-foot">Year to date</div>
      </div>
    </div>

    <div class="mm-grid cols-2" style="margin-top:20px">
      <div class="mm-card">
        <h2>Recent Donations</h2>
        <p class="mm-card-sub">Latest gifts recorded in the system.</p>
        <div class="mm-list">
          <div class="mm-list-item">
            <div><div class="mm-li-title">Limbani Family Trust</div><div class="mm-li-sub">Designated: Zomba primary schools</div></div>
            <div style="text-align:right"><div class="mm-li-title">MK 2,500,000</div><div class="mm-li-sub">2 hours ago</div></div>
          </div>
          <div class="mm-list-item">
            <div><div class="mm-li-title">Global Meals Partner</div><div class="mm-li-sub">Unrestricted gift</div></div>
            <div style="text-align:right"><div class="mm-li-title">USD 15,000</div><div class="mm-li-sub">Yesterday</div></div>
          </div>
          <div class="mm-list-item">
            <div><div class="mm-li-title">M. Banda</div><div class="mm-li-sub">Designated: Mangochi feeding centre</div></div>
            <div style="text-align:right"><div class="mm-li-title">MK 350,000</div><div class="mm-li-sub">2 days ago</div></div>
          </div>
        </div>
        <div class="mm-btn-row"><a class="mm-btn" href="donations.html">Manage Donations</a></div>
      </div>

      <div class="mm-card">
        <h2>Operations Status</h2>
        <p class="mm-card-sub">Items requiring attention today.</p>
        <div class="mm-list">
          <div class="mm-list-item">
            <div><div class="mm-li-title">Mpande Depot — Maize meal</div><div class="mm-li-sub">Below reorder level</div></div>
            <span class="mm-pill warn"><span class="dot"></span>Low stock</span>
          </div>
          <div class="mm-list-item">
            <div><div class="mm-li-title">Truck MW-2391-B</div><div class="mm-li-sub">En route to Machinga</div></div>
            <span class="mm-pill info"><span class="dot"></span>In transit</span>
          </div>
          <div class="mm-list-item">
            <div><div class="mm-li-title">Nsanje School audit</div><div class="mm-li-sub">Portion count variance</div></div>
            <span class="mm-pill bad"><span class="dot"></span>Needs review</span>
          </div>
          <div class="mm-list-item">
            <div><div class="mm-li-title">Blantyre weekly feed log</div><div class="mm-li-sub">Verified by field officer</div></div>
            <span class="mm-pill ok"><span class="dot"></span>Verified</span>
          </div>
        </div>
        <div class="mm-btn-row"><a class="mm-btn secondary" href="notifications.html">View all alerts</a></div>
      </div>
    </div>

  </div>
</main>

</body>
</html>
