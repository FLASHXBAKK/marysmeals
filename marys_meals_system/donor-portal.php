<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Donor Impact Portal — Mary's Meals Malawi</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link href="https://fonts.gstatic.com" crossorigin rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet"/>
<link href="assets/app.css" rel="stylesheet"/>
<script src="assets/app.js" defer></script>
</head>
<body data-page="donor-portal">

<main class="mm-main">
  <div class="mm-content">

    <div class="mm-page-head">
      <h1>Donor Impact Portal</h1>
      <p>See how your gifts turn into daily meals for children.</p>
    </div>

    <div class="mm-grid cols-4">
      <div class="mm-metric"><div class="mm-metric-label">Your Total Given</div><div class="mm-metric-value">MK 4.2M</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Meals You Funded</div><div class="mm-metric-value">190,900</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Children Supported</div><div class="mm-metric-value">512</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Schools Reached</div><div class="mm-metric-value">7</div></div>
    </div>

    <div class="mm-card" style="margin-top:20px">
      <h2>Make a Donation</h2>
      <p class="mm-card-sub">Every MK 22 funds one child's daily meal.</p>
      <form id="giveForm" onsubmit="event.preventDefault(); mmSubmit('giveForm','Thank you! Your donation has been received.');">
        <div class="mm-form-section">
          <div class="mm-grid cols-2">
            <div class="mm-field"><label>Full Name</label><input type="text" placeholder="Your name" required/></div>
            <div class="mm-field"><label>Email</label><input type="email" placeholder="you@example.com" required/></div>
            <div class="mm-field"><label>Amount (MK)</label><input type="number" min="22" step="22" placeholder="e.g. 2200" required/></div>
            <div class="mm-field"><label>Frequency</label><select><option>One-time</option><option>Monthly</option><option>Quarterly</option><option>Annual</option></select></div>
            <div class="mm-field"><label>Support Where</label>
              <select><option>Where most needed</option><option>Mpande Primary</option><option>Zomba Central</option><option>Nsanje Feed Centre</option></select>
            </div>
            <div class="mm-field"><label>Payment Method</label><select><option>Card</option><option>Bank Transfer</option><option>Mobile Money</option></select></div>
          </div>
        </div>
        <div class="mm-btn-row"><button class="mm-btn" type="submit"><span class="material-symbols-outlined">favorite</span>Donate Now</button></div>
      </form>
    </div>

    <div class="mm-card">
      <h2>Impact of Your Giving</h2>
      <div class="mm-list">
        <div class="mm-list-item"><div><div class="mm-li-title">Mpande Primary</div><div class="mm-li-sub">640 children · Likuni Phala daily</div></div><span class="mm-pill ok"><span class="dot"></span>Funded</span></div>
        <div class="mm-list-item"><div><div class="mm-li-title">Zomba Central Primary</div><div class="mm-li-sub">820 children · Your gift covers 40%</div></div><span class="mm-pill ok"><span class="dot"></span>Funded</span></div>
        <div class="mm-list-item"><div><div class="mm-li-title">Nsanje Feed Centre</div><div class="mm-li-sub">295 children · Needs additional support</div></div><span class="mm-pill warn"><span class="dot"></span>Partially funded</span></div>
      </div>
    </div>

  </div>
</main>

</body>
</html>
