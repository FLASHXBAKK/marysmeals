<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Stock Management — Mary's Meals Malawi</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link href="https://fonts.gstatic.com" crossorigin rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet"/>
<link href="assets/app.css" rel="stylesheet"/>
<script src="assets/app.js" defer></script>
</head>
<body data-page="stock">

<main class="mm-main">
  <div class="mm-content">

    <div class="mm-page-head">
      <h1>Stock Management</h1>
      <p>Grain and commodity inventory across regional depots.</p>
    </div>

    <div class="mm-grid cols-4">
      <div class="mm-metric"><div class="mm-metric-label">Total Stock (MT)</div><div class="mm-metric-value">184.5</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Depots</div><div class="mm-metric-value">6</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Low Stock Items</div><div class="mm-metric-value">3</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Days of Cover</div><div class="mm-metric-value">21</div></div>
    </div>

    <div class="mm-card" style="margin-top:20px">
      <h2>Record Stock Intake</h2>
      <p class="mm-card-sub">Add received grain or commodity to a depot.</p>
      <form id="stockForm" onsubmit="event.preventDefault(); mmSubmit('stockForm','Stock intake recorded successfully.');">
        <div class="mm-form-section">
          <div class="mm-grid cols-2">
            <div class="mm-field"><label>Commodity</label>
              <select><option>Maize meal</option><option>Soja / soy blend</option><option>IKU (root flour)</option><option>Beans</option><option>Cooking oil</option><option>Salt</option></select>
            </div>
            <div class="mm-field"><label>Quantity</label><input type="number" min="0" step="0.1" placeholder="e.g. 12.5" required/></div>
            <div class="mm-field"><label>Unit</label><select><option>Metric tonnes</option><option>Kilograms</option><option>50kg bags</option></select></div>
            <div class="mm-field"><label>Depot</label>
              <select><option>Mpande Depot</option><option>Lilongwe Central</option><option>Zomba Store</option><option>Mzuzu Depot</option></select>
            </div>
            <div class="mm-field"><label>Supplier / Donation Ref</label><input type="text" placeholder="e.g. Don-2026-0318"/></div>
            <div class="mm-field"><label>Expiry Date</label><input type="date"/></div>
          </div>
        </div>
        <div class="mm-btn-row"><button class="mm-btn" type="submit">Save Stock</button><button class="mm-btn secondary" type="reset">Clear</button></div>
      </form>
    </div>

    <div class="mm-card">
      <h2>Current Inventory</h2>
      <table class="mm-table">
        <thead><tr><th>Commodity</th><th>Depot</th><th>Balance</th><th>Reorder Level</th><th>Status</th></tr></thead>
        <tbody>
          <tr><td>Maize meal</td><td>Mpande Depot</td><td>42.0 MT</td><td>20 MT</td><td><span class="mm-pill ok"><span class="dot"></span>Healthy</span></td></tr>
          <tr><td>Soja blend</td><td>Mpande Depot</td><td>8.5 MT</td><td>12 MT</td><td><span class="mm-pill warn"><span class="dot"></span>Low</span></td></tr>
          <tr><td>Cooking oil</td><td>Zomba Store</td><td>1.2 MT</td><td>3 MT</td><td><span class="mm-pill bad"><span class="dot"></span>Critical</span></td></tr>
          <tr><td>Beans</td><td>Lilongwe Central</td><td>26.0 MT</td><td>10 MT</td><td><span class="mm-pill ok"><span class="dot"></span>Healthy</span></td></tr>
        </tbody>
      </table>
    </div>

  </div>
</main>

</body>
</html>
