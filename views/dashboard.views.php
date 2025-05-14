<?php require("views/partials/head.php"); ?>
<link rel="stylesheet" href="css/dashboard.css">
<main>
  <aside>
    <img src="/assets/image/logo.png" alt="Toprank logo" class="toprank-logo">
    <?php require("views/partials/sidebar.php"); ?>
  </aside>
  <section>
    <div class="banner">
      <div>
        <?= $dateNow ?>
      </div>
      <p><?= htmlspecialchars($user['role']); ?></p>

    </div>
  </section>
</main>



<script src="javascript/sidebar.js"></script>
<?php require("views/partials/footer.php"); ?>