<?php
require_once 'includes/auth.php';
require_login();
$page_title = 'Dashboard';
require 'includes/header.php';
?>
<div class="content">
<div class="page-head"><div><h1>Family Dashboard</h1><div class="subtitle">Family Wealth Management System</div></div></div>
<div class="grid" style="grid-template-columns:repeat(2,1fr)">
<div class="card"><div class="card-title">Module 1 — Family Structure</div><p class="subtitle">View the hierarchical family tree, member profiles, identity documents, expiry tracking and personal net worth.</p><a class="primary-btn" href="family/index.php">Open Family Structure</a></div>
<div class="card"><div class="card-title">Module 2 — Family Savings</div><p class="subtitle">View individual members' savings balances, accounts, banks and recent credits.</p><a class="primary-btn" href="savings/index.php">Open Savings</a></div>
</div>
</div>
<?php require 'includes/footer.php'; ?>
