<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Users &amp; Roles — Mary's Meals Malawi</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link href="https://fonts.gstatic.com" crossorigin rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet"/>
<link href="assets/app.css" rel="stylesheet"/>
<script src="assets/app.js" defer></script>
</head>
<body data-page="users">

<main class="mm-main">
  <div class="mm-content">

    <div class="mm-page-head">
      <h1>Users &amp; Roles</h1>
      <p>Manage system users and their access levels.</p>
    </div>

    <div class="mm-grid cols-4">
      <div class="mm-metric"><div class="mm-metric-label">Total Users</div><div class="mm-metric-value">24</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Administrators</div><div class="mm-metric-value">3</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Field Coordinators</div><div class="mm-metric-value">12</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Inactive</div><div class="mm-metric-value">2</div></div>
    </div>

    <div class="mm-card" style="margin-top:20px">
      <h2>Add User</h2>
      <p class="mm-card-sub">Create a new system user account.</p>
      <form id="userForm" onsubmit="event.preventDefault(); mmSubmit('userForm','User account created successfully.');">
        <div class="mm-form-section">
          <div class="mm-grid cols-2">
            <div class="mm-field"><label>Full Name</label><input type="text" placeholder="e.g. Chifuniro Phiri" required/></div>
            <div class="mm-field"><label>Email</label><input type="email" placeholder="user@marysmeals.org" required/></div>
            <div class="mm-field"><label>Role</label>
              <select><option>Field Coordinator</option><option>Warehouse Dispatcher</option><option>Regional Director</option><option>Volunteer</option><option>Administrator</option></select>
            </div>
            <div class="mm-field"><label>Region</label>
              <select><option>Southern</option><option>Central</option><option>Northern</option></select>
            </div>
          </div>
        </div>
        <div class="mm-btn-row"><button class="mm-btn" type="submit">Create User</button><button class="mm-btn secondary" type="reset">Clear</button></div>
      </form>
    </div>

    <div class="mm-card">
      <h2>System Users</h2>
      <table class="mm-table">
        <thead><tr><th>Name</th><th>Email</th><th>Role</th><th>Region</th><th>Status</th></tr></thead>
        <tbody>
          <tr><td>Chifuniro Phiri</td><td>c.phiri@marysmeals.org</td><td>Field Coordinator</td><td>Southern</td><td><span class="mm-pill ok"><span class="dot"></span>Active</span></td></tr>
          <tr><td>Routma Kachale</td><td>r.kachale@marysmeals.org</td><td>Regional Director</td><td>Southern</td><td><span class="mm-pill ok"><span class="dot"></span>Active</span></td></tr>
          <tr><td>Peters Chirwa</td><td>p.chirwa@marysmeals.org</td><td>Warehouse Dispatcher</td><td>Central</td><td><span class="mm-pill warn"><span class="dot"></span>Inactive</span></td></tr>
        </tbody>
      </table>
    </div>

  </div>
</main>

</body>
</html>
