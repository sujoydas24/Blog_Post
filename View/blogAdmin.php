<?php
session_start();
if (empty($_SESSION['id'])) {
  header("location:login.php");
}
include('temp/header.php');

require_once('../Database/alldb.php');
$show = show();
?>

<!-- Button -->
<a href="../Controller/logout.php"><button
  class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
  Logout
</button></a>
</div>
</nav>

<!-- Page content -->
<div class="container mx-auto px-4 py-6">

  <!-- Back + Create Buttons -->
  <div class="flex justify-between mb-6">
    <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-lg transition">
      ← Back
    </button>
    <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg transition">
      <a href="createPost.php">+ Create</a>
    </button>
  </div>

  <!-- Table -->
  <div class="bg-white shadow-md rounded-lg overflow-hidden">
    <table class="w-full text-left border-collapse">
      <thead class="bg-gray-100">
        <tr>
          <th class="px-6 py-3 text-gray-600 font-semibold">Title</th>
          <th class="px-6 py-3 text-gray-600 font-semibold">Actions</th>
        </tr>
      </thead>
      <?php while ($post = mysqli_fetch_assoc($show)) { ?>
        <tbody>
          <tr class="border-t hover:bg-gray-50">
            <td class="px-6 py-3"><?php echo $post['title'] ?></td>
            <td class="px-6 py-3">
              <form action="../Controller/delEdit.php">
              <button class="text-blue-600 hover:underline" name="edit" value= "<?php echo $post["id"]; ?>">Edit</button> |
              <button class="text-red-600 hover:underline" name="delete" value= "<?php echo $post["id"]; ?>">Delete</button>
              </form>
            </td>
        </tbody>
      <?php } ?>
    </table>
  </div>

</div>
</body>

</html>