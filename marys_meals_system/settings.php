<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Settings — Mary's Meals Malawi</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link href="https://fonts.gstatic.com" crossorigin rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet"/>
<link href="assets/app.css" rel="stylesheet"/>
<script src="assets/app.js" defer></script>
</head>
<body data-page="settings">

<main class="mm-main">
  <div class="mm-content">

    <div class="mm-page-head">
      <h1>Settings</h1>
      <p>Configure organisation and system preferences.</p>
    </div>

    <div class="mm-card">
      <h2>Organisation</h2>
      <p class="mm-card-sub">Core programme configuration.</p>
      <form id="settingsForm" onsubmit="event.preventDefault(); mmSubmit('settingsForm','Settings saved successfully.');">
        <div class="mm-form-section">
          <div class="mm-grid cols-2">
            <div class="mm-field"><label>Organisation Name</label><input type="text" value="Mary's Meals Malawi"/></div>
            <div class="mm-field"><label>Primary Region</label><select><option>Southern</option><option>Central</option><option>Northern</option></select></div>
            <div class="mm-field"><label>Default Currency</label><select><option>MWK — Malawi Kwacha</option><option>USD — US Dollar</option></select></div>
            <div class="mm-field"><label>Cost per Meal (MK)</label><input type="number" value="22" min="0"/></div>
            <div class="mm-field"><label>Contact Email</label><input type="email" value="ops@marysmeals.org"/></div>
            <div class="mm-field"><label>Depot Alert Threshold (days)</label><input type="number" value="14" min="0"/></div>
          </div>
        </div>

        <div class="mm-card" style="margin-top:16px;padding:16px">
          <h2 style="font-size:15px">Preferences</h2>
          <label style="display:flex;align-items:center;gap:10px;padding:8px 0;font-size:14px"><input type="checkbox" checked style="width:auto;height:auto"/> Email me when stock falls below reorder level</label>
          <label style="display:flex;align-items:center;gap:10px;padding:8px 0;font-size:14px"><input type="checkbox" checked style="width:auto;height:auto"/> Notify on new donations</label>
          <label style="display:flex;align-items:center;gap:10px;padding:8px 0;font-size:14px"><input type="checkbox" style="width:auto;height:auto"/> Enable offline field data caching</label>
        </div>

        <div class="mm-btn-row"><button class="mm-btn" type="submit">Save Settings</button><button class="mm-btn secondary" type="reset">Reset</button></div>
      </form>
    </div>

  </div>
</main>

</body>
</html>
