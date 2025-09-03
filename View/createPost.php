<?php
session_start();
if (empty($_SESSION['id'])) {
  header("location:login.php");
}
include('temp/header.php');
?>
<!-- Button -->
      <a href="../Controller/logout.php"><button
  class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
  Logout
</button></a>
    </div>
  </nav>

  <div class="container mx-auto px-4 py-8 max-w-2xl">
    
    <!-- Back link -->
    <a href="blogAdmin.php" class="flex items-center text-gray-600 hover:text-gray-900 mb-6 text-sm font-medium">
      <span class="mr-2">←</span> Back to Admin Panel
    </a>

    <!-- Heading -->
    <h1 class="text-2xl font-semibold text-gray-900 mb-6">Create New Post</h1>

    <!-- Form -->
    <form class="space-y-6 bg-white p-6 rounded-xl shadow-sm" action="../Controller/postCheck.php" method="POST" enctype="multipart/form-data">
      
      <!-- Title -->
      <div>
        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
        <input type="text" id="title" name="title" placeholder="Enter your title"
          class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition">
      </div>

      <!-- Description -->
      <div>
        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
        <textarea id="description" name="description" rows="4" placeholder="Write something..."
          class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition"></textarea>
      </div>

      <!-- Featured Image -->
      <div>
        <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Featured Image</label>
        <input type="file" name="image">
      </div>

      <!-- Submit Button -->
      <button type="submit" name="upload"
        class="w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 rounded-lg transition">
        Upload
      </button>
    </form>
  </div>


</body>
</html>
