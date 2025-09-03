<?php
session_start();
if (empty($_SESSION['id'])) {
    header("location:login.php");
}
include('temp/header.php');
//edit data fetch
require_once('../Database/alldb.php');
$id = $_GET['update'];
$update_id = update($id);
//print_r($show_id);
$post = mysqli_fetch_assoc($update_id);
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
    <h1 class="text-2xl font-semibold text-gray-900 mb-6">Edit the Post</h1>

    <!-- Form -->
    <form class="space-y-6 bg-white p-6 rounded-xl shadow-sm" action="../Controller/editCheck.php" method="POST"
        enctype="multipart/form-data">

        <!-- Hidden ID -->
        <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
        <!-- Title -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
            <input type="text" id="title" name="title" value="<?php echo $post['title'] ?>"
                class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition">
        </div>

        <!-- Description -->
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
            <textarea id="description" name="description" rows="4" value=""
                class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition"><?php echo $post['description'] ?></textarea>
        </div>

        <!-- Featured Image -->
        <div>
            <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Featured Image</label>
            <input type="file" name="image" value="<?php echo $post["img"] ?>">
            <?php if (!empty($post['img'])): ?>
                <p class="mt-2 text-sm text-gray-600">Current: <img src="../Upload/postImage/<?php echo $post['img']; ?>"
                        width="120"></p>
            <?php endif; ?>
        </div>

        <!-- Submit Button -->
        <button type="submit" name="update"
            class="w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 rounded-lg transition">
            Update
        </button>
    </form>
</div>


</body>

</html>