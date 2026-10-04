<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Field Audits — Mary's Meals Malawi</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link href="https://fonts.gstatic.com" crossorigin rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet"/>
<link href="assets/app.css" rel="stylesheet"/>
<script src="assets/app.js" defer></script>
</head>
<body data-page="field-audits">

<main class="mm-main">
  <div class="mm-content">

    <div class="mm-page-head">
      <h1>Field Audits</h1>
      <p>On-site verification of feeding records and stock.</p>
    </div>

    <div class="mm-grid cols-4">
      <div class="mm-metric"><div class="mm-metric-label">Audits This Month</div><div class="mm-metric-value">48</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Passed</div><div class="mm-metric-value">44</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Flagged</div><div class="mm-metric-value">4</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Compliance Rate</div><div class="mm-metric-value">91.7%</div></div>
    </div>

    <div class="mm-card" style="margin-top:20px">
      <h2>Record Field Audit</h2>
      <p class="mm-card-sub">Log an on-site verification visit.</p>
      <form id="auditForm" onsubmit="event.preventDefault(); mmSubmit('auditForm','Field audit recorded successfully.');">
        <div class="mm-form-section">
          <div class="mm-grid cols-2">
            <div class="mm-field"><label>School</label>
              <select><option>Mpande Primary</option><option>Zomba Central Primary</option><option>Mangochi Community</option><option>Nsanje Feed Centre</option></select>
            </div>
            <div class="mm-field"><label>Audit Date</label><input type="date"/></div>
            <div class="mm-field"><label>Auditor</label><input type="text" placeholder="Field officer name" required/></div>
            <div class="mm-field"><label>Register (Children Listed)</label><input type="number" min="0" placeholder="e.g. 640"/></div>
            <div class="mm-field"><label>Portions Observed</label><input type="number" min="0" placeholder="e.g. 638"/></div>
            <div class="mm-field"><label>Stock Balance Verified</label><input type="number" min="0" step="0.1" placeholder="e.g. 42.0"/></div>
          </div>
          <div class="mm-field"><label>Findings / Remarks</label><textarea rows="2" placeholder="Discrepancies, observations"></textarea></div>
        </div>
        <div class="mm-btn-row"><button class="mm-btn" type="submit">Save Audit</button><button class="mm-btn secondary" type="reset">Clear</button></div>
      </form>
    </div>

    <div class="mm-card">
      <h2>Recent Audits</h2>
      <table class="mm-table">
        <thead><tr><th>School</th><th>Date</th><th>Auditor</th><th>Variance</th><th>Status</th></tr></thead>
        <tbody>
          <tr><td>Mpande Primary</td><td>03 Oct 2026</td><td>C. Phiri</td><td>2</td><td><span class="mm-pill ok"><span class="dot"></span>Passed</span></td></tr>
          <tr><td>Nsanje Feed Centre</td><td>02 Oct 2026</td><td>R. Kachale</td><td>28</td><td><span class="mm-pill bad"><span class="dot"></span>Flagged</span></td></tr>
          <tr><td>Zomba Central</td><td>01 Oct 2026</td><td>S. Mbewe</td><td>0</td><td><span class="mm-pill ok"><span class="dot"></span>Passed</span></td></tr>
        </tbody>
      </table>
    </div>

  </div>
</main>

</body>
</html>
