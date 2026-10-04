<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Schools — Mary's Meals Malawi</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link href="https://fonts.gstatic.com" crossorigin rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet"/>
<link href="assets/app.css" rel="stylesheet"/>
<script src="assets/app.js" defer></script>
</head>
<body data-page="schools">

<main class="mm-main">
  <div class="mm-content">

    <div class="mm-page-head">
      <h1>Schools</h1>
      <p>School directory and on-site kitchen management.</p>
    </div>

    <div class="mm-grid cols-4">
      <div class="mm-metric"><div class="mm-metric-label">Total Schools</div><div class="mm-metric-value">32</div></div>
      <div class="mm-metric"><div class="mm-metric-label">With Kitchen</div><div class="mm-metric-value">27</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Children Enrolled</div><div class="mm-metric-value">18,240</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Regions Covered</div><div class="mm-metric-value">9</div></div>
    </div>

    <div class="mm-card" style="margin-top:20px">
      <h2>Register a School</h2>
      <p class="mm-card-sub">Add a new feeding school to the directory.</p>
      <form id="schoolForm" onsubmit="event.preventDefault(); mmSubmit('schoolForm','School registered successfully.');">
        <div class="mm-form-section">
          <div class="mm-grid cols-2">
            <div class="mm-field"><label>School Name</label><input type="text" placeholder="e.g. Mpande Primary School" required/></div>
            <div class="mm-field"><label>District</label><input type="text" placeholder="e.g. Blantyre" required/></div>
            <div class="mm-field"><label>Region</label>
              <select><option>Southern</option><option>Central</option><option>Northern</option></select>
            </div>
            <div class="mm-field"><label>Enrolled Children</label><input type="number" min="0" placeholder="0"/></div>
            <div class="mm-field"><label>Has Kitchen</label>
              <select><option>Yes</option><option>No</option></select>
            </div>
            <div class="mm-field"><label>Cooking Team Size</label><input type="number" min="0" placeholder="0"/></div>
          </div>
          <div class="mm-field"><label>Address / Notes</label><textarea rows="2" placeholder="Location details, contact person"></textarea></div>
        </div>
        <div class="mm-btn-row"><button class="mm-btn" type="submit">Save School</button><button class="mm-btn secondary" type="reset">Clear</button></div>
      </form>
    </div>

    <div class="mm-card">
      <h2>School Directory</h2>
      <table class="mm-table">
        <thead><tr><th>School</th><th>District</th><th>Children</th><th>Kitchen</th><th>Status</th></tr></thead>
        <tbody>
          <tr><td>Mpande Primary</td><td>Blantyre</td><td>640</td><td>Yes</td><td><span class="mm-pill ok"><span class="dot"></span>Active</span></td></tr>
          <tr><td>Zomba Central Primary</td><td>Zomba</td><td>820</td><td>Yes</td><td><span class="mm-pill ok"><span class="dot"></span>Active</span></td></tr>
          <tr><td>Mangochi Community</td><td>Mangochi</td><td>410</td><td>No</td><td><span class="mm-pill warn"><span class="dot"></span>Pending kitchen</span></td></tr>
          <tr><td>Nsanje Feed Centre</td><td>Nsanje</td><td>295</td><td>Yes</td><td><span class="mm-pill bad"><span class="dot"></span>Stock depleted</span></td></tr>
        </tbody>
      </table>
    </div>

  </div>
</main>

</body>
</html>
