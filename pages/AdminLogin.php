<?php
    include '../config/config.php';
    include '../partials/header.php';
?>

<!-- component -->
<div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat" style="background-image:url('https://images.unsplash.com/photo-1499123785106-343e69e68db1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1748&q=80')">
  <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
    <div class="text-white">
      <div class="mb-8 flex flex-col items-center">
        <img src="https://www.logo.wine/a/logo/Instagram/Instagram-Glyph-Color-Logo.wine.svg" width="150" alt="" srcset="" />
        <h1 class="mb-2 text-2xl">Student Login</h1>
        <span class="text-gray-300">Enter Login Details</span>
      </div>

      <!-- Display error message if it exists -->
      <?php if (isset($_SESSION['error_message'])) : ?>
        <div class="mb-4 text-red-500">
          <?php echo $_SESSION['error_message']; ?>
        </div>
      <?php endif; ?>

      <form action="config/authenticate_admin.php" method="post">
        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="text" name="username" placeholder="20145874" />
        </div>

        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="password" name="password" placeholder="*********" />
        </div>

        <div class="mt-8 flex justify-center text-lg text-black">
          <button type="submit" class="rounded-3xl bg-yellow-400 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
  // Clear the error message after displaying it
  unset($_SESSION['error_message']);
  include '../partials/footer.php'; // You may include your footer file here if needed
?>
