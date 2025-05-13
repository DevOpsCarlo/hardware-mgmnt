<?php require("views/partials/head.php"); ?>
<link rel="stylesheet" href="css/index.css">

<main class="container">
  <div class="login-box">
    <div class="logo-container">
      <img src="assets/image/logo.png" alt="TopRank Logo" class="toprank-image">
    </div>
    <div class="form-box">
      <h2 class="login-title">Login</h2>
      <form action="/" method="POST">
        <div class="input-container">
          <input type="text" name="username" class="input-user" placeholder="Username">
          <input type="password" name="password" class="password" placeholder="Password">
          <span class="input-error"></span>
          <?php if (!empty($error)): ?>
            <span class="input-error"><?= htmlspecialchars($error) ?></span>
          <?php endif; ?>
        </div>
        <button class="btn btn-submit">Submit</button>
      </form>
    </div>
  </div>

</main>


<script src="javascript/index.js"></script>
<?php require("views/partials/footer.php"); ?>