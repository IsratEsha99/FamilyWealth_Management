<?php
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../config/database.php';
$current = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FamilyWealth Management System</title>
<link rel="stylesheet" href="<?= app_url('assets/css/style.css') ?>">
</head>
<body>
<div class="app-shell">
<aside class="sidebar">
    <div class="brand">
        <div class="brand-icon">FW</div>
        <div>
            <strong>FamilyWealth</strong>
            <span>MANAGEMENT SYSTEM</span>
        </div>
    </div>

    <nav class="side-nav">
        <a href="<?= app_url('dashboard.php') ?>">▦ <span>Dashboard</span></a>
        <a class="<?= str_contains($_SERVER['REQUEST_URI'],'/family/') ? 'active':'' ?>" href="<?= app_url('family/index.php') ?>">◇ <span>Family Structure</span></a>
        <a class="<?= str_contains($_SERVER['REQUEST_URI'],'/savings/') ? 'active':'' ?>" href="<?= app_url('savings/index.php') ?>">◎ <span>Savings</span></a>
    </nav>

    <div class="sidebar-bottom">
        <?php if (!empty($_SESSION['user_id'])): ?>
            <div class="user-mini">
                <div class="avatar small"><?= strtoupper(substr($_SESSION['full_name'],0,2)) ?></div>
                <div>
                    <strong><?= htmlspecialchars($_SESSION['full_name']) ?></strong>
                    <span>Administrator</span>
                </div>
            </div>
            <a class="logout-link" href="<?= app_url('auth/logout.php') ?>">↪ Logout</a>
        <?php endif; ?>
    </div>
</aside>

<main class="main">
<header class="topbar">
    <div class="breadcrumb">Family Wealth Management System <b>/</b> <?= htmlspecialchars($page_title ?? 'Dashboard') ?></div>
    <div class="top-actions">
        <a class="export-btn" href="#">↓ Export</a>
        <div class="search-mini">⌕ &nbsp; Quick search...</div>
        <div class="notification-dot">3</div>
    </div>
</header>
