<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Donations — Mary's Meals Malawi</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link href="https://fonts.gstatic.com" crossorigin rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet"/>
<link href="assets/app.css" rel="stylesheet"/>
<script src="assets/app.js" defer></script>
</head>
<body data-page="donations">

<main class="mm-main">
  <div class="mm-content">

    <div class="mm-page-head">
      <h1>Donations</h1>
      <p>Record incoming gifts and track how donations fund meals across schools.</p>
    </div>

    <div class="mm-grid cols-4">
      <div class="mm-metric"><div class="mm-metric-label">Total Raised (MTD)</div><div class="mm-metric-value">MK 42.6M</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Donations Logged</div><div class="mm-metric-value">318</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Average Gift</div><div class="mm-metric-value">MK 134K</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Meals Funded</div><div class="mm-metric-value">512,000</div></div>
    </div>

    <div class="mm-card" style="margin-top:20px">
      <h2>Record a Donation</h2>
      <p class="mm-card-sub">Enter donor details and the gift amount.</p>
      <form id="donationForm" onsubmit="event.preventDefault(); mmSubmit('donationForm','Donation recorded successfully.');">
        <div class="mm-form-section">
          <div class="mm-grid cols-2">
            <div class="mm-field"><label>Donor Name</label><input type="text" placeholder="e.g. Limbani Family Trust" required/></div>
            <div class="mm-field"><label>Donor Email</label><input type="email" placeholder="donor@example.org"/></div>
            <div class="mm-field"><label>Amount</label><input type="number" min="0" step="0.01" placeholder="0.00" required/></div>
            <div class="mm-field"><label>Currency</label>
              <select><option>MWK — Malawi Kwacha</option><option>USD — US Dollar</option><option>EUR — Euro</option><option>GBP — Pound Sterling</option></select>
            </div>
            <div class="mm-field"><label>Donation Date</label><input type="date"/></div>
            <div class="mm-field"><label>Payment Method</label>
              <select><option>Bank Transfer</option><option>Card</option><option>Mobile Money</option><option>Cash</option><option>Cheque</option></select>
            </div>
            <div class="mm-field"><label>Designation</label>
              <select><option>Unrestricted</option><option>Specific school</option><option>Specific region</option><option>Emergency food fund</option></select>
            </div>
            <div class="mm-field"><label>Designated School / Region</label><input type="text" placeholder="Optional"/></div>
          </div>
          <div class="mm-field"><label>Note</label><textarea rows="2" placeholder="Reference number, message, etc."></textarea></div>
        </div>
        <div class="mm-btn-row"><button class="mm-btn" type="submit">Save Donation</button><button class="mm-btn secondary" type="reset">Clear</button></div>
      </form>
    </div>

    <div class="mm-card">
      <h2>Recent Donations</h2>
      <p class="mm-card-sub">Latest recorded gifts.</p>
      <table class="mm-table">
        <thead><tr><th>Donor</th><th>Date</th><th>Amount</th><th>Designation</th><th>Status</th></tr></thead>
        <tbody>
          <tr><td>Limbani Family Trust</td><td>04 Oct 2026</td><td>MK 2,500,000</td><td>Zomba primary schools</td><td><span class="mm-pill ok"><span class="dot"></span>Confirmed</span></td></tr>
          <tr><td>Global Meals Partner</td><td>03 Oct 2026</td><td>USD 15,000</td><td>Unrestricted</td><td><span class="mm-pill ok"><span class="dot"></span>Confirmed</span></td></tr>
          <tr><td>M. Banda</td><td>02 Oct 2026</td><td>MK 350,000</td><td>Mangochi feeding centre</td><td><span class="mm-pill warn"><span class="dot"></span>Pending</span></td></tr>
          <tr><td>Chirwa Foundation</td><td>01 Oct 2026</td><td>MK 1,200,000</td><td>Emergency food fund</td><td><span class="mm-pill ok"><span class="dot"></span>Confirmed</span></td></tr>
        </tbody>
      </table>
    </div>

  </div>
</main>

</body>
</html>
