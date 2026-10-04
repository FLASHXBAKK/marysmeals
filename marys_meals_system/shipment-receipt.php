<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Shipment Receipt — Mary's Meals Malawi</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link href="https://fonts.gstatic.com" crossorigin rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet"/>
<link href="assets/app.css" rel="stylesheet"/>
<script src="assets/app.js" defer></script>
</head>
<body data-page="shipment-receipt">

<main class="mm-main">
  <div class="mm-content">

    <div class="mm-page-head">
      <h1>Shipment Receipt</h1>
      <p>Verify and confirm inbound consignments at the depot.</p>
    </div>

    <div class="mm-grid cols-4">
      <div class="mm-metric"><div class="mm-metric-label">Awaiting Receipt</div><div class="mm-metric-value">3</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Received Today</div><div class="mm-metric-value">7</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Discrepancies</div><div class="mm-metric-value">1</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Avg. Verification</div><div class="mm-metric-value">99.2%</div></div>
    </div>

    <div class="mm-card" style="margin-top:20px">
      <h2>Log Shipment Receipt</h2>
      <p class="mm-card-sub">Confirm quantities received against the manifest.</p>
      <form id="receiptForm" onsubmit="event.preventDefault(); mmSubmit('receiptForm','Shipment receipt logged successfully.');">
        <div class="mm-form-section">
          <div class="mm-grid cols-2">
            <div class="mm-field"><label>Consignment / Manifest No.</label><input type="text" placeholder="e.g. CON-2041" required/></div>
            <div class="mm-field"><label>Receiving Depot</label>
              <select><option>Mpande Depot</option><option>Lilongwe Central</option><option>Zomba Store</option></select>
            </div>
            <div class="mm-field"><label>Quantity Expected</label><input type="number" min="0" step="0.1" placeholder="e.g. 2.5"/></div>
            <div class="mm-field"><label>Quantity Received</label><input type="number" min="0" step="0.1" placeholder="e.g. 2.5" required/></div>
            <div class="mm-field"><label>Condition</label>
              <select><option>Good</option><option>Partial damage</option><option>Rejected</option></select>
            </div>
            <div class="mm-field"><label>Receiving Officer</label><input type="text" placeholder="Officer name"/></div>
          </div>
          <div class="mm-field"><label>Remarks</label><textarea rows="2" placeholder="Notes on delivery, damages, etc."></textarea></div>
        </div>
        <div class="mm-btn-row"><button class="mm-btn" type="submit">Confirm Receipt</button><button class="mm-btn secondary" type="reset">Clear</button></div>
      </form>
    </div>

    <div class="mm-card">
      <h2>Recent Receipts</h2>
      <table class="mm-table">
        <thead><tr><th>Consignment</th><th>Depot</th><th>Received</th><th>Officer</th><th>Status</th></tr></thead>
        <tbody>
          <tr><td>CON-2038</td><td>Mpande Depot</td><td>4.0 / 4.0 MT</td><td>J. Gondwe</td><td><span class="mm-pill ok"><span class="dot"></span>Verified</span></td></tr>
          <tr><td>CON-2037</td><td>Zomba Store</td><td>1.8 / 2.0 MT</td><td>P. Chirwa</td><td><span class="mm-pill bad"><span class="dot"></span>Shortage</span></td></tr>
          <tr><td>CON-2036</td><td>Lilongwe Central</td><td>6.0 / 6.0 MT</td><td>A. Mwale</td><td><span class="mm-pill ok"><span class="dot"></span>Verified</span></td></tr>
        </tbody>
      </table>
    </div>

  </div>
</main>

</body>
</html>
