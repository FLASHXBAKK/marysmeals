<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Daily Consumption — Mary's Meals Malawi</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link href="https://fonts.gstatic.com" crossorigin rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet"/>
<link href="assets/app.css" rel="stylesheet"/>
<script src="assets/app.js" defer></script>
</head>
<body data-page="daily-consumption">

<main class="mm-main">
  <div class="mm-content">

    <div class="mm-page-head">
      <h1>Daily Consumption</h1>
      <p>Log each school's daily feeding and verify portions served.</p>
    </div>

    <div class="mm-grid cols-4">
      <div class="mm-metric"><div class="mm-metric-label">Portions Today</div><div class="mm-metric-value">18,240</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Schools Reporting</div><div class="mm-metric-value">30/32</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Verification Rate</div><div class="mm-metric-value">96%</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Meals Funded (YTD)</div><div class="mm-metric-value">512,000</div></div>
    </div>

    <div class="mm-card" style="margin-top:20px">
      <h2>Log Daily Consumption</h2>
      <p class="mm-card-sub">Record the meals served at a school today.</p>
      <form id="consumptionForm" onsubmit="event.preventDefault(); mmSubmit('consumptionForm','Daily consumption logged successfully.');">
        <div class="mm-form-section">
          <div class="mm-grid cols-2">
            <div class="mm-field"><label>School</label>
              <select><option>Mpande Primary</option><option>Zomba Central Primary</option><option>Mangochi Community</option><option>Nsanje Feed Centre</option></select>
            </div>
            <div class="mm-field"><label>Date</label><input type="date"/></div>
            <div class="mm-field"><label>Children Fed</label><input type="number" min="0" placeholder="e.g. 640" required/></div>
            <div class="mm-field"><label>Portions Prepared</label><input type="number" min="0" placeholder="e.g. 640"/></div>
            <div class="mm-field"><label>Commodity Used</label>
              <select><option>Maize meal (Likuni Phala)</option><option>Soja blend</option><option>Beans</option></select>
            </div>
            <div class="mm-field"><label>Quantity Used (kg)</label><input type="number" min="0" step="0.1" placeholder="e.g. 320"/></div>
            <div class="mm-field"><label>Cooking Team Leader</label><input type="text" placeholder="Name"/></div>
            <div class="mm-field"><label>Verified By</label><input type="text" placeholder="Field officer name"/></div>
          </div>
        </div>
        <div class="mm-btn-row"><button class="mm-btn" type="submit">Save Log</button><button class="mm-btn secondary" type="reset">Clear</button></div>
      </form>
    </div>

    <div class="mm-card">
      <h2>Today's Feeding Logs</h2>
      <table class="mm-table">
        <thead><tr><th>School</th><th>Children Fed</th><th>Commodity</th><th>Verified By</th><th>Status</th></tr></thead>
        <tbody>
          <tr><td>Mpande Primary</td><td>640</td><td>Likuni Phala</td><td>C. Phiri</td><td><span class="mm-pill ok"><span class="dot"></span>Verified</span></td></tr>
          <tr><td>Zomba Central</td><td>820</td><td>Likuni Phala</td><td>S. Mbewe</td><td><span class="mm-pill ok"><span class="dot"></span>Verified</span></td></tr>
          <tr><td>Mangochi Community</td><td>410</td><td>Soja blend</td><td>—</td><td><span class="mm-pill warn"><span class="dot"></span>Pending</span></td></tr>
        </tbody>
      </table>
    </div>

  </div>
</main>

</body>
</html>
