<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100 font-sans">
  
  <div class="bg-white shadow-lg rounded-2xl p-6 sm:p-8 w-full max-w-md mx-4">
    <!-- Logo + Title -->
    <a href="blog.php"><div class="flex flex-col items-center mb-8">
      <div class="">
        <img src="../Upload/logo/Group.png" alt="">
      </div>
      <h1 class="text-2xl font-semibold text-gray-800">BLOG</h1>
    </div></a>

    <!-- Form -->
    <form id="loginForm" class="space-y-6" method="POST" action="../Controller/loginCheck.php">
      <!-- Username -->
      <div>
        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your username"
               class="mt-1 w-full px-4 py-3 border rounded-lg text-base focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition">
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" placeholder="••••••••"
               class="mt-1 w-full px-4 py-3 border rounded-lg text-base focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition">
      </div>

      <!-- Submit Button -->
      <button type="submit"
              class="w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 rounded-lg text-lg transition-colors">
        Login
      </button>
    </form>
  </div>

</body>
</html>
