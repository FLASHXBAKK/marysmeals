<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Enrollment — Mary's Meals Malawi</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link href="https://fonts.gstatic.com" crossorigin rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet"/>
<link href="assets/app.css" rel="stylesheet"/>
<script src="assets/app.js" defer></script>
</head>
<body data-page="enrollment">

<main class="mm-main">
  <div class="mm-content">

    <div class="mm-page-head">
      <h1>Enrollment</h1>
      <p>Register children into the daily feeding programme.</p>
    </div>

    <div class="mm-grid cols-4">
      <div class="mm-metric"><div class="mm-metric-label">Total Enrolled</div><div class="mm-metric-value">18,240</div></div>
      <div class="mm-metric"><div class="mm-metric-label">New This Week</div><div class="mm-metric-value">142</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Primary Schools</div><div class="mm-metric-value">24</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Secondary Schools</div><div class="mm-metric-value">8</div></div>
    </div>

    <div class="mm-card" style="margin-top:20px">
      <h2>Enroll a Child</h2>
      <p class="mm-card-sub">Add a child to a school's feeding register.</p>
      <form id="enrollForm" onsubmit="event.preventDefault(); mmSubmit('enrollForm','Child enrolled successfully.');">
        <div class="mm-form-section">
          <div class="mm-grid cols-2">
            <div class="mm-field"><label>Child's Full Name</label><input type="text" placeholder="e.g. Tendai Mwale" required/></div>
            <div class="mm-field"><label>School</label>
              <select><option>Mpande Primary</option><option>Zomba Central Primary</option><option>Mangochi Community</option><option>Nsanje Feed Centre</option></select>
            </div>
            <div class="mm-field"><label>Age</label><input type="number" min="3" max="18" placeholder="e.g. 8"/></div>
            <div class="mm-field"><label>Gender</label><select><option>Female</option><option>Male</option></select></div>
            <div class="mm-field"><label>Guardian Name</label><input type="text" placeholder="Parent / guardian"/></div>
            <div class="mm-field"><label>Guardian Phone</label><input type="tel" placeholder="e.g. +265 991 000 000"/></div>
          </div>
        </div>
        <div class="mm-btn-row"><button class="mm-btn" type="submit">Enroll Child</button><button class="mm-btn secondary" type="reset">Clear</button></div>
      </form>
    </div>

    <div class="mm-card">
      <h2>Recent Enrollments</h2>
      <table class="mm-table">
        <thead><tr><th>Child</th><th>School</th><th>Age</th><th>Enrolled</th><th>Status</th></tr></thead>
        <tbody>
          <tr><td>Tendai Mwale</td><td>Mpande Primary</td><td>8</td><td>04 Oct 2026</td><td><span class="mm-pill ok"><span class="dot"></span>Active</span></td></tr>
          <tr><td>Grace Phiri</td><td>Zomba Central</td><td>10</td><td>03 Oct 2026</td><td><span class="mm-pill ok"><span class="dot"></span>Active</span></td></tr>
          <tr><td>Kelvin Banda</td><td>Mangochi Community</td><td>7</td><td>02 Oct 2026</td><td><span class="mm-pill warn"><span class="dot"></span>Awaiting verification</span></td></tr>
        </tbody>
      </table>
    </div>

  </div>
</main>

</body>
</html>
