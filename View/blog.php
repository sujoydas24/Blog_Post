<?php
include('temp/header.php');

require_once('../Database/alldb.php');
$show=show();

?>
<!-- Button -->
      <a href="blogAdmin.php"><button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
        Admin Panel
      </button>
    </div></a>
  </nav>


  
    <!-- Card Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <?php while($post=mysqli_fetch_assoc($show)) { ?>  
      <!-- Card  -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
        <img src="../Upload/postImage/<?php echo $post['img'] ?>" alt="<?php echo $post['img'] ?>" class="w-full h-40 object-cover">
        <div class="p-4">
          <h2 class="text-lg font-semibold text-gray-800"><?php echo $post['title']?></h2>
          <button class="mt-4 w-full bg-purple-600 hover:bg-purple-700 text-white py-2 px-4 rounded-lg transition">
            Read More
          </button>
        </div>
      </div>
  
      <?php } ?>

    </div>
  </div>

  </div>

</body>
</html>