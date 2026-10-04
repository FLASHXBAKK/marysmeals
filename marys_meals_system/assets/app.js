/* Mary's Meals Malawi — shared application shell.
   Renders the sidebar navigation and top bar so all pages are linked,
   with minimal, consistent, professional markup. */

(function () {
  const NAV = [
    { group: "Overview", items: [
      { key: "dashboard", label: "Dashboard", icon: "dashboard", href: "index.php" },
      { key: "reports", label: "Reports & Analytics", icon: "monitoring", href: "reports.php" },
    ]},
    { group: "Programmes", items: [
      { key: "schools", label: "Schools", icon: "school", href: "schools.php" },
      { key: "enrollment", label: "Enrollment", icon: "how_to_reg", href: "enrollment.php" },
      { key: "daily-consumption", label: "Daily Consumption", icon: "restaurant", href: "daily-consumption.php" },
      { key: "field-audits", label: "Field Audits", icon: "fact_check", href: "field-audits.php" },
    ]},
    { group: "Donations & Impact", items: [
      { key: "donations", label: "Donations", icon: "volunteer_activism", href: "donations.php" },
      { key: "donor-portal", label: "Donor Impact Portal", icon: "public", href: "donor-portal.php" },
    ]},
    { group: "Logistics", items: [
      { key: "stock", label: "Stock Management", icon: "inventory_2", href: "stock.php" },
      { key: "dispatch", label: "Procurement & Dispatch", icon: "local_shipping", href: "dispatch.php" },
      { key: "shipment-receipt", label: "Shipment Receipt", icon: "receipt_long", href: "shipment-receipt.php" },
      { key: "gps", label: "GPS Vehicle Tracking", icon: "fmd_good", href: "gps.php" },
    ]},
    { group: "Administration", items: [
      { key: "notifications", label: "Notifications", icon: "notifications", href: "notifications.php" },
      { key: "users", label: "Users & Roles", icon: "manage_accounts", href: "users.php" },
      { key: "settings", label: "Settings", icon: "settings", href: "settings.php" },
    ]},
  ];

  const TITLES = {
    "dashboard": ["Operations Dashboard", "Programme and donation overview"],
    "schools": ["Schools", "School directory and kitchen management"],
    "enrollment": ["Enrollment", "Child enrollment register"],
    "donations": ["Donations", "Donation intake and tracking"],
    "dispatch": ["Procurement & Dispatch", "Consignment planning and dispatch"],
    "gps": ["GPS Vehicle Tracking", "Live logistics fleet status"],
    "stock": ["Stock Management", "Grain and commodity inventory"],
    "shipment-receipt": ["Shipment Receipt", "Inbound consignment verification"],
    "daily-consumption": ["Daily Consumption", "Daily feeding verification log"],
    "field-audits": ["Field Audits", "On-site verification records"],
    "notifications": ["Notifications", "Operational alerts"],
    "reports": ["Reports & Analytics", "Programme and donation reporting"],
    "donor-portal": ["Donor Impact Portal", "Transparency and impact for donors"],
    "users": ["Users & Roles", "System users and access"],
    "settings": ["Settings", "System configuration"],
  };

  function icon(name) {
    return '<span class="material-symbols-outlined">' + name + "</span>";
  }

  function renderSidebar(active) {
    let links = "";
    NAV.forEach(function (section) {
      links += '<div class="mm-nav-group">' + section.group + "</div>";
      section.items.forEach(function (item) {
        const cls = "mm-nav-link" + (item.key === active ? " active" : "");
        links += '<a class="' + cls + '" href="' + item.href + '">' + icon(item.icon) +
          "<span>" + item.label + "</span></a>";
      });
    });

    return '' +
      '<aside class="mm-sidebar" id="mm-sidebar">' +
        '<div class="mm-brand">' +
          '<div class="mm-logo">' + icon("volunteer_activism") + "</div>" +
          "<div><div class=\"mm-title\">Mary's Meals</div><div class=\"mm-sub\">Malawi Operations</div></div>" +
        "</div>" +
        '<nav class="mm-nav">' + links + "</nav>" +
        '<div class="mm-foot">' +
          '<div class="mm-avatar">CP</div>' +
          "<div><div style=\"color:#fff;font-weight:600\">Chifuniro Phiri</div>Field Coordinator</div>" +
        "</div>" +
      "</aside>";
  }

  function renderTopbar(active) {
    const t = TITLES[active] || ["Mary's Meals", ""];
    return '' +
      '<header class="mm-topbar">' +
        '<div style="display:flex;align-items:center;gap:14px">' +
          '<button class="mm-menu-btn" onclick="mmToggleSidebar()">' + icon("menu") + "</button>" +
          "<div><div class=\"mm-page-title\">" + t[0] + '</div><div class="mm-crumb">' + t[1] + "</div></div>" +
        "</div>" +
        '<div class="mm-search">' + icon("search") +
          '<input type="text" placeholder="Search schools, donors, consignments..." />' +
        "</div>" +
      "</header>";
  }

  function mount() {
    const active = document.body.dataset.page || "dashboard";
    document.body.insertAdjacentHTML("afterbegin", renderSidebar(active) + renderTopbar(active));
    if (!document.getElementById("mm-toast")) {
      document.body.insertAdjacentHTML("beforeend", '<div id="mm-toast"></div>');
    }
  }

  // Global helpers used by pages
  window.mmToast = function (msg) {
    const el = document.getElementById("mm-toast");
    if (!el) { return; }
    el.textContent = msg;
    el.classList.add("show");
    clearTimeout(window._mmToastT);
    window._mmToastT = setTimeout(function () { el.classList.remove("show"); }, 2600);
  };

  window.mmSubmit = function (formId, msg) {
    const form = document.getElementById(formId);
    if (form) { form.reset(); }
    mmToast(msg || "Record saved successfully.");
  };

  window.mmToggleSidebar = function () {
    const s = document.getElementById("mm-sidebar");
    if (s) { s.classList.toggle("open"); }
  };

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", mount);
  } else {
    mount();
  }
})();
