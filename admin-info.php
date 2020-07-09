<?php require_once 'start.php'; ?>
<?php if ($user && $user->hasPermission('admin')): ?>
    <?php require_once FRONTEND_INCLUDE . 'header.php'; ?>
    <?php require_once FRONTEND_INCLUDE . 'navbarAdmin.php'; ?>
    <?php require_once FRONTEND_INCLUDE . 'messages.php'; ?>
    <?php require_once FRONTEND_PAGE . 'admin-info.php'; ?>
    <?php require_once FRONTEND_INCLUDE . 'footer.php'; ?>
<?php else: ?>
    <?php Redirect::to('index.php'); ?>
<?php endif; ?>