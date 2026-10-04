<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Procurement &amp; Dispatch — Mary's Meals Malawi</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link href="https://fonts.gstatic.com" crossorigin rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet"/>
<link href="assets/app.css" rel="stylesheet"/>
<script src="assets/app.js" defer></script>
</head>
<body data-page="dispatch">

<main class="mm-main">
  <div class="mm-content">

    <div class="mm-page-head">
      <h1>Procurement &amp; Dispatch</h1>
      <p>Plan consignments and dispatch rations to schools.</p>
    </div>

    <div class="mm-grid cols-4">
      <div class="mm-metric"><div class="mm-metric-label">Open Consignments</div><div class="mm-metric-value">6</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Dispatched This Week</div><div class="mm-metric-value">38</div></div>
      <div class="mm-metric"><div class="mm-metric-label">In Transit</div><div class="mm-metric-value">9</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Delivered</div><div class="mm-metric-value">29</div></div>
    </div>

    <div class="mm-card" style="margin-top:20px">
      <h2>Create Dispatch</h2>
      <p class="mm-card-sub">Assign rations from a depot to a school.</p>
      <form id="dispatchForm" onsubmit="event.preventDefault(); mmSubmit('dispatchForm','Dispatch consignment created.');">
        <div class="mm-form-section">
          <div class="mm-grid cols-2">
            <div class="mm-field"><label>Destination School</label>
              <select><option>Mpande Primary</option><option>Zomba Central Primary</option><option>Mangochi Community</option><option>Nsanje Feed Centre</option></select>
            </div>
            <div class="mm-field"><label>Source Depot</label>
              <select><option>Mpande Depot</option><option>Lilongwe Central</option><option>Zomba Store</option></select>
            </div>
            <div class="mm-field"><label>Commodity</label>
              <select><option>Maize meal</option><option>Soja blend</option><option>Beans</option><option>Cooking oil</option></select>
            </div>
            <div class="mm-field"><label>Quantity (MT)</label><input type="number" min="0" step="0.1" placeholder="e.g. 2.5" required/></div>
            <div class="mm-field"><label>Vehicle</label>
              <select><option>MW-2391-B</option><option>MW-1180-C</option><option>MW-5567-A</option></select>
            </div>
            <div class="mm-field"><label>Dispatch Date</label><input type="date"/></div>
          </div>
        </div>
        <div class="mm-btn-row"><button class="mm-btn" type="submit">Create Dispatch</button><button class="mm-btn secondary" type="reset">Clear</button></div>
      </form>
    </div>

    <div class="mm-card">
      <h2>Active Consignments</h2>
      <table class="mm-table">
        <thead><tr><th>Consignment</th><th>School</th><th>Commodity</th><th>Vehicle</th><th>Status</th></tr></thead>
        <tbody>
          <tr><td>CON-2041</td><td>Machinga Primary</td><td>2.5 MT maize</td><td>MW-2391-B</td><td><span class="mm-pill info"><span class="dot"></span>In transit</span></td></tr>
          <tr><td>CON-2040</td><td>Nsanje Feed Centre</td><td>1.0 MT soja</td><td>MW-1180-C</td><td><span class="mm-pill warn"><span class="dot"></span>Loading</span></td></tr>
          <tr><td>CON-2039</td><td>Zomba Central</td><td>3.0 MT maize</td><td>MW-5567-A</td><td><span class="mm-pill ok"><span class="dot"></span>Delivered</span></td></tr>
        </tbody>
      </table>
    </div>

  </div>
</main>

</body>
</html>
