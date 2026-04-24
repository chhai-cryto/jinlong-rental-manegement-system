<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JinLong — Rental Management</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --sidebar-w: 230px;
    --topbar-h: 60px;
    --bg: #F5F4F0;
    --surface: #FFFFFF;
    --surface2: #F0EFE9;
    --border: rgba(0,0,0,0.07);
    --border2: rgba(0,0,0,0.12);
    --text: #1A1916;
    --text-2: #6B6A65;
    --text-3: #A09E99;
    --accent: #2E5BFF;
    --accent-light: #EBF0FF;
    --green: #0D7A5F;
    --green-light: #E3F5EF;
    --amber: #B45309;
    --amber-light: #FEF3C7;
    --red: #B91C1C;
    --red-light: #FEE2E2;
    --sidebar-bg: #141412;
    --sidebar-text: rgba(255,255,255,0.55);
    --sidebar-text-active: #FFFFFF;
    --sidebar-accent: #2E5BFF;
    --radius: 12px;
    --radius-sm: 8px;
  }

  html, body { height: 100%; font-family: 'DM Sans', sans-serif; background: var(--bg); color: var(--text); font-size: 14px; }

  /* ── SIDEBAR ─────────────────────────────── */
  .sidebar {
    position: fixed; top: 0; left: 0; width: var(--sidebar-w); height: 100vh;
    background: var(--sidebar-bg); display: flex; flex-direction: column;
    z-index: 100; border-right: 1px solid rgba(255,255,255,0.04);
  }
  .sidebar-brand {
    padding: 22px 20px 18px; border-bottom: 1px solid rgba(255,255,255,0.05);
  }
  .brand-logo {
    display: flex; align-items: center; gap: 10px;
  }
  .brand-icon {
    width: 32px; height: 32px; background: var(--accent); border-radius: 8px;
    display: flex; align-items: center; justify-content: center;
  }
  .brand-icon svg { width: 16px; height: 16px; }
  .brand-name { font-size: 14px; font-weight: 600; color: #fff; letter-spacing: -0.2px; }
  .brand-sub { font-size: 11px; color: rgba(255,255,255,0.3); margin-top: 1px; }

  .nav { padding: 12px 0; flex: 1; overflow-y: auto; }
  .nav-section { margin-bottom: 4px; }
  .nav-section-label {
    font-size: 10px; font-weight: 500; letter-spacing: 1.2px; text-transform: uppercase;
    color: rgba(255,255,255,0.2); padding: 10px 20px 6px;
  }
  .nav-item {
    display: flex; align-items: center; gap: 10px; padding: 9px 20px;
    color: var(--sidebar-text); font-size: 13.5px; font-weight: 400;
    cursor: pointer; border-left: 2px solid transparent;
    transition: all 0.15s ease; text-decoration: none;
  }
  .nav-item:hover { color: rgba(255,255,255,0.8); background: rgba(255,255,255,0.04); }
  .nav-item.active {
    color: var(--sidebar-text-active); background: rgba(46,91,255,0.12);
    border-left-color: var(--sidebar-accent);
  }
  .nav-item svg { width: 15px; height: 15px; flex-shrink: 0; opacity: 0.7; }
  .nav-item.active svg { opacity: 1; }
  .nav-badge {
    margin-left: auto; font-size: 10px; font-family: 'DM Mono', monospace;
    background: rgba(255,255,255,0.08); color: rgba(255,255,255,0.5);
    padding: 2px 7px; border-radius: 20px;
  }
  .nav-item.active .nav-badge { background: rgba(46,91,255,0.3); color: #93ABFF; }

  .sidebar-footer {
    padding: 14px 20px; border-top: 1px solid rgba(255,255,255,0.05);
  }
  .user-card { display: flex; align-items: center; gap: 10px; }
  .user-av {
    width: 32px; height: 32px; border-radius: 50%; background: var(--accent);
    display: flex; align-items: center; justify-content: center;
    font-size: 11px; font-weight: 600; color: #fff; flex-shrink: 0;
  }
  .user-name { font-size: 12.5px; color: #fff; font-weight: 500; }
  .user-role { font-size: 11px; color: rgba(255,255,255,0.3); }

  /* ── LAYOUT ──────────────────────────────── */
  .layout { margin-left: var(--sidebar-w); min-height: 100vh; display: flex; flex-direction: column; }

  /* ── TOPBAR ──────────────────────────────── */
  .topbar {
    height: var(--topbar-h); background: var(--surface); border-bottom: 1px solid var(--border);
    display: flex; align-items: center; justify-content: space-between;
    padding: 0 28px; position: sticky; top: 0; z-index: 50;
  }
  .topbar-left { display: flex; align-items: center; gap: 8px; }
  .topbar-crumb { font-size: 13px; color: var(--text-3); }
  .topbar-crumb-sep { color: var(--text-3); font-size: 13px; }
  .topbar-page { font-size: 13px; font-weight: 500; color: var(--text); }
  .topbar-right { display: flex; align-items: center; gap: 10px; }
  .topbar-btn {
    height: 32px; padding: 0 14px; border: 1px solid var(--border2); border-radius: 8px;
    background: var(--surface); font-size: 12.5px; font-family: 'DM Sans', sans-serif;
    color: var(--text-2); cursor: pointer; display: flex; align-items: center; gap: 6px;
    transition: all 0.15s;
  }
  .topbar-btn:hover { background: var(--surface2); border-color: var(--border2); color: var(--text); }
  .topbar-btn-primary {
    background: var(--accent); color: #fff; border-color: var(--accent); font-weight: 500;
  }
  .topbar-btn-primary:hover { background: #2450E8; border-color: #2450E8; color: #fff; }
  .notif-dot {
    width: 6px; height: 6px; border-radius: 50%; background: #FF4444;
    position: absolute; top: 6px; right: 8px;
  }
  .notif-wrap { position: relative; }

  /* ── CONTENT ─────────────────────────────── */
  .content { padding: 28px; flex: 1; }

  .page-header { margin-bottom: 24px; }
  .page-title { font-size: 22px; font-weight: 600; letter-spacing: -0.5px; color: var(--text); }
  .page-sub { font-size: 13px; color: var(--text-2); margin-top: 4px; }

  /* ── STAT CARDS ──────────────────────────── */
  .stat-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px; margin-bottom: 20px; }

  .stat-card {
    background: var(--surface); border: 1px solid var(--border); border-radius: var(--radius);
    padding: 20px 22px; position: relative; overflow: hidden;
    animation: fadeUp 0.4s ease both;
  }
  .stat-card:nth-child(2) { animation-delay: 0.05s; }
  .stat-card:nth-child(3) { animation-delay: 0.10s; }

  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .stat-top { display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 14px; }
  .stat-icon-wrap {
    width: 38px; height: 38px; border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
  }
  .stat-icon-wrap svg { width: 18px; height: 18px; }
  .stat-delta-badge {
    font-size: 11px; font-family: 'DM Mono', monospace; font-weight: 500;
    padding: 3px 8px; border-radius: 20px; display: flex; align-items: center; gap: 3px;
  }
  .delta-up { background: var(--green-light); color: var(--green); }
  .delta-down { background: var(--red-light); color: var(--red); }
  .stat-label { font-size: 12px; color: var(--text-3); font-weight: 400; letter-spacing: 0.2px; margin-bottom: 6px; }
  .stat-value { font-size: 28px; font-weight: 600; letter-spacing: -1px; color: var(--text); line-height: 1; }
  .stat-sub { font-size: 11.5px; color: var(--text-3); margin-top: 6px; }

  /* ── ROW ─────────────────────────────────── */
  .row { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 20px; }
  .row-3 { display: grid; grid-template-columns: 1.4fr 1fr; gap: 14px; margin-bottom: 20px; }

  /* ── CARDS ───────────────────────────────── */
  .card {
    background: var(--surface); border: 1px solid var(--border); border-radius: var(--radius);
    overflow: hidden; animation: fadeUp 0.4s ease 0.15s both;
  }
  .card-head {
    display: flex; align-items: center; justify-content: space-between;
    padding: 16px 20px 14px; border-bottom: 1px solid var(--border);
  }
  .card-title { font-size: 13.5px; font-weight: 600; color: var(--text); }
  .card-action { font-size: 12px; color: var(--accent); cursor: pointer; font-weight: 500; }
  .card-body { padding: 0; }

  /* ── TENANT TABLE ────────────────────────── */
  .tenant-table { width: 100%; border-collapse: collapse; }
  .tenant-table th {
    font-size: 11px; font-weight: 500; color: var(--text-3); letter-spacing: 0.5px;
    text-transform: uppercase; padding: 10px 20px; text-align: left;
    background: var(--surface2); border-bottom: 1px solid var(--border);
  }
  .tenant-table td { padding: 12px 20px; border-bottom: 1px solid var(--border); vertical-align: middle; }
  .tenant-table tr:last-child td { border-bottom: none; }
  .tenant-table tr { transition: background 0.1s; }
  .tenant-table tr:hover td { background: var(--surface2); }
  .tenant-av-wrap { display: flex; align-items: center; gap: 10px; }
  .t-av {
    width: 30px; height: 30px; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 11px; font-weight: 600; flex-shrink: 0;
  }
  .t-name { font-size: 13px; font-weight: 500; color: var(--text); }
  .t-unit { font-size: 11px; color: var(--text-3); margin-top: 1px; }
  .t-amount { font-size: 13px; font-weight: 500; font-family: 'DM Mono', monospace; color: var(--text); }
  .pill {
    display: inline-flex; align-items: center; font-size: 11px; font-weight: 500;
    padding: 3px 9px; border-radius: 20px; white-space: nowrap;
  }
  .pill-green { background: var(--green-light); color: var(--green); }
  .pill-amber { background: var(--amber-light); color: var(--amber); }
  .pill-red { background: var(--red-light); color: var(--red); }
  .pill-blue { background: var(--accent-light); color: var(--accent); }

  /* ── REVENUE CHART ───────────────────────── */
  .rev-chart { padding: 18px 20px 20px; }
  .chart-bars { display: flex; align-items: flex-end; gap: 8px; height: 120px; margin-bottom: 8px; }
  .bar-col { flex: 1; display: flex; flex-direction: column; align-items: center; gap: 6px; }
  .bar-wrap { width: 100%; border-radius: 5px 5px 0 0; position: relative; cursor: pointer; transition: opacity 0.15s; }
  .bar-wrap:hover { opacity: 0.85; }
  .bar-val-tip { 
    position: absolute; top: -24px; left: 50%; transform: translateX(-50%);
    font-size: 10px; font-family: 'DM Mono', monospace; font-weight: 500;
    color: var(--text-2); white-space: nowrap; opacity: 0; transition: opacity 0.15s;
  }
  .bar-wrap:hover .bar-val-tip { opacity: 1; }
  .bar-month { font-size: 10.5px; color: var(--text-3); text-align: center; }
  .chart-total {
    display: flex; justify-content: space-between; align-items: center;
    border-top: 1px solid var(--border); padding-top: 14px; margin-top: 2px;
  }
  .chart-total-label { font-size: 12px; color: var(--text-3); }
  .chart-total-val { font-size: 18px; font-weight: 600; font-family: 'DM Mono', monospace; color: var(--text); letter-spacing: -0.5px; }

  /* ── ACTIVITY ────────────────────────────── */
  .activity-list { padding: 0; }
  .activity-item {
    display: flex; align-items: flex-start; gap: 12px;
    padding: 13px 20px; border-bottom: 1px solid var(--border);
    transition: background 0.1s;
  }
  .activity-item:last-child { border-bottom: none; }
  .activity-item:hover { background: var(--surface2); }
  .act-dot-wrap { display: flex; flex-direction: column; align-items: center; padding-top: 4px; }
  .act-dot { width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; }
  .act-line { width: 1px; background: var(--border); flex: 1; margin-top: 4px; min-height: 16px; }
  .activity-item:last-child .act-line { display: none; }
  .act-content { flex: 1; }
  .act-text { font-size: 13px; color: var(--text); line-height: 1.4; }
  .act-text strong { font-weight: 600; }
  .act-time { font-size: 11px; color: var(--text-3); margin-top: 3px; font-family: 'DM Mono', monospace; }

  /* ── OCCUPANCY ───────────────────────────── */
  .occ-card .card-body { padding: 20px; }
  .occ-ring-wrap { display: flex; align-items: center; justify-content: center; margin-bottom: 16px; }
  .occ-ring { position: relative; width: 100px; height: 100px; }
  .occ-ring svg { transform: rotate(-90deg); }
  .occ-ring-center {
    position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);
    text-align: center;
  }
  .occ-pct { font-size: 20px; font-weight: 600; font-family: 'DM Mono', monospace; color: var(--text); }
  .occ-lbl { font-size: 10px; color: var(--text-3); }
  .occ-stats { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
  .occ-stat {
    background: var(--surface2); border-radius: var(--radius-sm);
    padding: 10px 12px; text-align: center;
  }
  .occ-stat-val { font-size: 18px; font-weight: 600; font-family: 'DM Mono', monospace; color: var(--text); }
  .occ-stat-lbl { font-size: 11px; color: var(--text-3); margin-top: 2px; }

  /* ── SCROLLBAR ───────────────────────────── */
  ::-webkit-scrollbar { width: 5px; }
  ::-webkit-scrollbar-track { background: transparent; }
  ::-webkit-scrollbar-thumb { background: rgba(0,0,0,0.12); border-radius: 4px; }
</style>
</head>
<body>

<!-- SIDEBAR -->
<aside class="sidebar">
  <div class="sidebar-brand">
    <div class="brand-logo">
      <div class="brand-icon">
        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2 14V7L8 2l6 5v7h-4v-4H6v4H2z" fill="white"/>
        </svg>
      </div>
      <div>
        <div class="brand-name">JinLong</div>
        <div class="brand-sub">Rental Management</div>
      </div>
    </div>
  </div>

  <nav class="nav">
    <div class="nav-section">
      <div class="nav-section-label">Main</div>
      <a class="nav-item active" href="#">
        <svg viewBox="0 0 16 16" fill="none"><rect x="1" y="1" width="6" height="6" rx="1.2" fill="currentColor"/><rect x="9" y="1" width="6" height="6" rx="1.2" fill="currentColor"/><rect x="1" y="9" width="6" height="6" rx="1.2" fill="currentColor"/><rect x="9" y="9" width="6" height="6" rx="1.2" fill="currentColor"/></svg>
        Dashboard
      </a>
      <a class="nav-item" href="#">
        <svg viewBox="0 0 16 16" fill="none"><path d="M2 14V7L8 2l6 5v7h-4v-4H6v4H2z" stroke="currentColor" stroke-width="1.3" fill="none"/></svg>
        Properties
        <span class="nav-badge">10</span>
      </a>
      <a class="nav-item" href="#">
        <svg viewBox="0 0 16 16" fill="none"><circle cx="8" cy="5.5" r="3" stroke="currentColor" stroke-width="1.3" fill="none"/><path d="M2 14c0-2.761 2.686-5 6-5s6 2.239 6 5" stroke="currentColor" stroke-width="1.3" fill="none"/></svg>
        Tenants
        <span class="nav-badge">25</span>
      </a>
    </div>
    <div class="nav-section">
      <div class="nav-section-label">Finance</div>
      <a class="nav-item" href="#">
        <svg viewBox="0 0 16 16" fill="none"><rect x="1" y="4" width="14" height="9" rx="1.3" stroke="currentColor" stroke-width="1.3" fill="none"/><path d="M5 4V3a3 3 0 016 0v1" stroke="currentColor" stroke-width="1.3"/></svg>
        Payments
      </a>
      <a class="nav-item" href="#">
        <svg viewBox="0 0 16 16" fill="none"><path d="M2 12l4-4 3 3 5-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" fill="none"/></svg>
        Reports
      </a>
    </div>
    <div class="nav-section">
      <div class="nav-section-label">System</div>
      <a class="nav-item" href="#">
        <svg viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="2.5" stroke="currentColor" stroke-width="1.3" fill="none"/><path d="M8 1v2M8 13v2M1 8h2M13 8h2M3.05 3.05l1.41 1.41M11.54 11.54l1.41 1.41M3.05 12.95l1.41-1.41M11.54 4.46l1.41-1.41" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
        Settings
      </a>
    </div>
  </nav>

  <div class="sidebar-footer">
    <div class="user-card">
      <div class="user-av">JL</div>
      <div>
        <div class="user-name">Admin</div>
        <div class="user-role">admin@jinlong.com</div>
      </div>
    </div>
  </div>
</aside>

<!-- MAIN LAYOUT -->
<div class="layout">
  <!-- TOPBAR -->
  <header class="topbar">
    <div class="topbar-left">
      <span class="topbar-crumb">JinLong</span>
      <span class="topbar-crumb-sep">/</span>
      <span class="topbar-page">Dashboard</span>
    </div>
    <div class="topbar-right">
      <button class="topbar-btn">
        <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><rect x="1" y="3" width="12" height="10" rx="1.2" stroke="currentColor" stroke-width="1.2"/><path d="M5 3V2a2 2 0 014 0v1" stroke="currentColor" stroke-width="1.2"/></svg>
        April 2026
      </button>
      <div class="notif-wrap">
        <button class="topbar-btn">
          <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M7 1a4 4 0 014 4v3l1 2H2l1-2V5a4 4 0 014-4zM5.5 11a1.5 1.5 0 003 0" stroke="currentColor" stroke-width="1.2" fill="none"/></svg>
          Alerts
        </button>
        <span class="notif-dot"></span>
      </div>
      <button class="topbar-btn topbar-btn-primary">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 1v10M1 6h10" stroke="white" stroke-width="1.5" stroke-linecap="round"/></svg>
        Add Property
      </button>
    </div>
  </header>

  <!-- CONTENT -->
  <main class="content">
    <div class="page-header">
      <div class="page-title">Welcome back 👋</div>
      <div class="page-sub">Here's what's happening with your properties today, April 23 2026.</div>
    </div>

    <!-- STAT CARDS -->
    <div class="stat-grid">
      <div class="stat-card">
        <div class="stat-top">
          <div class="stat-icon-wrap" style="background:#EBF0FF;">
            <svg viewBox="0 0 18 18" fill="none"><path d="M2 16V8.5L9 3l7 5.5V16H12v-5H6v5H2z" fill="#2E5BFF"/></svg>
          </div>
          <span class="stat-delta-badge delta-up">+2 ↑</span>
        </div>
        <div class="stat-label">Total Properties</div>
        <div class="stat-value">10</div>
        <div class="stat-sub">2 added this month</div>
      </div>
      <div class="stat-card">
        <div class="stat-top">
          <div class="stat-icon-wrap" style="background:#E3F5EF;">
            <svg viewBox="0 0 18 18" fill="none"><circle cx="9" cy="6" r="3.5" fill="#0D7A5F"/><path d="M2 16c0-3.314 3.134-6 7-6s7 2.686 7 6" stroke="#0D7A5F" stroke-width="1.5" fill="none"/></svg>
          </div>
          <span class="stat-delta-badge delta-up">+3 ↑</span>
        </div>
        <div class="stat-label">Total Tenants</div>
        <div class="stat-value">25</div>
        <div class="stat-sub">23 active leases</div>
      </div>
      <div class="stat-card">
        <div class="stat-top">
          <div class="stat-icon-wrap" style="background:#FEF3C7;">
            <svg viewBox="0 0 18 18" fill="none"><path d="M9 2a7 7 0 100 14A7 7 0 009 2z" stroke="#B45309" stroke-width="1.3" fill="none"/><path d="M9 5v4l2.5 2.5" stroke="#B45309" stroke-width="1.3" stroke-linecap="round"/></svg>
          </div>
          <span class="stat-delta-badge delta-up">+8.2% ↑</span>
        </div>
        <div class="stat-label">Monthly Revenue</div>
        <div class="stat-value">$5,000</div>
        <div class="stat-sub">vs $4,620 last month</div>
      </div>
    </div>

    <!-- ROW: TENANTS + REVENUE -->
    <div class="row-3">
      <!-- TENANTS -->
      <div class="card">
        <div class="card-head">
          <span class="card-title">Tenant overview</span>
          <span class="card-action">View all →</span>
        </div>
        <div class="card-body">
          <table class="tenant-table">
            <thead>
              <tr>
                <th>Tenant</th>
                <th>Unit</th>
                <th>Rent</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><div class="tenant-av-wrap"><div class="t-av" style="background:#EBF0FF;color:#2E5BFF;">SK</div><div><div class="t-name">Sophea Kim</div><div class="t-unit">since Jan 2025</div></div></div></td>
                <td style="font-size:13px;color:var(--text-2);">4A</td>
                <td><div class="t-amount">$600</div></td>
                <td><span class="pill pill-green">Paid</span></td>
              </tr>
              <tr>
                <td><div class="tenant-av-wrap"><div class="t-av" style="background:#E3F5EF;color:#0D7A5F;">RP</div><div><div class="t-name">Ratha Pov</div><div class="t-unit">since Mar 2025</div></div></div></td>
                <td style="font-size:13px;color:var(--text-2);">2B</td>
                <td><div class="t-amount">$450</div></td>
                <td><span class="pill pill-amber">Due soon</span></td>
              </tr>
              <tr>
                <td><div class="tenant-av-wrap"><div class="t-av" style="background:#FEE2E2;color:#B91C1C;">MC</div><div><div class="t-name">Maly Chan</div><div class="t-unit">since Aug 2024</div></div></div></td>
                <td style="font-size:13px;color:var(--text-2);">7C</td>
                <td><div class="t-amount">$750</div></td>
                <td><span class="pill pill-red">Overdue</span></td>
              </tr>
              <tr>
                <td><div class="tenant-av-wrap"><div class="t-av" style="background:#F3E8FF;color:#7C3AED;">DV</div><div><div class="t-name">Dara Vong</div><div class="t-unit">since Feb 2026</div></div></div></td>
                <td style="font-size:13px;color:var(--text-2);">1D</td>
                <td><div class="t-amount">$500</div></td>
                <td><span class="pill pill-green">Paid</span></td>
              </tr>
              <tr>
                <td><div class="tenant-av-wrap"><div class="t-av" style="background:#FEF3C7;color:#B45309;">BN</div><div><div class="t-name">Bopha Noun</div><div class="t-unit">since Nov 2024</div></div></div></td>
                <td style="font-size:13px;color:var(--text-2);">3F</td>
                <td><div class="t-amount">$680</div></td>
                <td><span class="pill pill-blue">New</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- RIGHT COLUMN -->
      <div style="display:flex;flex-direction:column;gap:14px;">
        <!-- REVENUE CHART -->
        <div class="card">
          <div class="card-head">
            <span class="card-title">Revenue trend</span>
            <span class="card-action">6 months</span>
          </div>
          <div class="rev-chart">
            <div class="chart-bars">
              <div class="bar-col">
                <div class="bar-wrap" style="height:72%;background:var(--surface2);border-radius:5px 5px 0 0;">
                  <span class="bar-val-tip">$3,600</span>
                </div>
                <span class="bar-month">Nov</span>
              </div>
              <div class="bar-col">
                <div class="bar-wrap" style="height:78%;background:var(--surface2);border-radius:5px 5px 0 0;">
                  <span class="bar-val-tip">$3,900</span>
                </div>
                <span class="bar-month">Dec</span>
              </div>
              <div class="bar-col">
                <div class="bar-wrap" style="height:75%;background:var(--surface2);border-radius:5px 5px 0 0;">
                  <span class="bar-val-tip">$3,750</span>
                </div>
                <span class="bar-month">Jan</span>
              </div>
              <div class="bar-col">
                <div class="bar-wrap" style="height:82%;background:var(--surface2);border-radius:5px 5px 0 0;">
                  <span class="bar-val-tip">$4,100</span>
                </div>
                <span class="bar-month">Feb</span>
              </div>
              <div class="bar-col">
                <div class="bar-wrap" style="height:90%;background:var(--surface2);border-radius:5px 5px 0 0;">
                  <span class="bar-val-tip">$4,500</span>
                </div>
                <span class="bar-month">Mar</span>
              </div>
              <div class="bar-col">
                <div class="bar-wrap" style="height:100%;background:#2E5BFF;border-radius:5px 5px 0 0;">
                  <span class="bar-val-tip" style="color:#2E5BFF;font-weight:600;">$5,000</span>
                </div>
                <span class="bar-month" style="color:var(--text);font-weight:600;">Apr</span>
              </div>
            </div>
            <div class="chart-total">
              <span class="chart-total-label">April revenue</span>
              <span class="chart-total-val">$5,000 <span style="font-size:11px;color:var(--green);font-family:'DM Sans',sans-serif;">↑ 8.2%</span></span>
            </div>
          </div>
        </div>

        <!-- OCCUPANCY -->
        <div class="card occ-card">
          <div class="card-head">
            <span class="card-title">Occupancy</span>
            <span class="card-action">Details</span>
          </div>
          <div class="card-body">
            <div class="occ-ring-wrap">
              <div class="occ-ring">
                <svg width="100" height="100" viewBox="0 0 100 100">
                  <circle cx="50" cy="50" r="38" fill="none" stroke="#F0EFE9" stroke-width="10"/>
                  <circle cx="50" cy="50" r="38" fill="none" stroke="#2E5BFF" stroke-width="10"
                    stroke-dasharray="239" stroke-dashoffset="20" stroke-linecap="round"/>
                </svg>
                <div class="occ-ring-center">
                  <div class="occ-pct">92%</div>
                  <div class="occ-lbl">occupied</div>
                </div>
              </div>
            </div>
            <div class="occ-stats">
              <div class="occ-stat">
                <div class="occ-stat-val" style="color:#0D7A5F;">23</div>
                <div class="occ-stat-lbl">Occupied</div>
              </div>
              <div class="occ-stat">
                <div class="occ-stat-val" style="color:#B91C1C;">2</div>
                <div class="occ-stat-lbl">Vacant</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ACTIVITY -->
    <div class="card" style="animation-delay:0.25s;">
      <div class="card-head">
        <span class="card-title">Recent activity</span>
        <span class="card-action">View all →</span>
      </div>
      <div class="activity-list">
        <div class="activity-item">
          <div class="act-dot-wrap"><div class="act-dot" style="background:#0D7A5F;"></div><div class="act-line"></div></div>
          <div class="act-content">
            <div class="act-text">Payment received from <strong>Sophea Kim</strong> — Unit 4A · $600</div>
            <div class="act-time">2 hours ago</div>
          </div>
          <span class="pill pill-green" style="flex-shrink:0;">Payment</span>
        </div>
        <div class="activity-item">
          <div class="act-dot-wrap"><div class="act-dot" style="background:#2E5BFF;"></div><div class="act-line"></div></div>
          <div class="act-content">
            <div class="act-text">New lease signed — Unit 9F, <strong>Dara Vong</strong></div>
            <div class="act-time">Yesterday at 3:42 PM</div>
          </div>
          <span class="pill pill-blue" style="flex-shrink:0;">Lease</span>
        </div>
        <div class="activity-item">
          <div class="act-dot-wrap"><div class="act-dot" style="background:#B45309;"></div><div class="act-line"></div></div>
          <div class="act-content">
            <div class="act-text">Maintenance request submitted — Unit 2B, plumbing issue</div>
            <div class="act-time">Apr 21 · 10:15 AM</div>
          </div>
          <span class="pill pill-amber" style="flex-shrink:0;">Maintenance</span>
        </div>
        <div class="activity-item">
          <div class="act-dot-wrap"><div class="act-dot" style="background:#B91C1C;"></div><div class="act-line"></div></div>
          <div class="act-content">
            <div class="act-text">Overdue payment notice sent to <strong>Maly Chan</strong> — Unit 7C</div>
            <div class="act-time">Apr 20 · 9:00 AM</div>
          </div>
          <span class="pill pill-red" style="flex-shrink:0;">Overdue</span>
        </div>
      </div>
    </div>

  </main>
</div>

</body>
</html>