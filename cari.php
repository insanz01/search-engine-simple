<?php

include('config/db.php');
$show = false;

if (isset($_POST['cari'])) {
  $cari = $_POST['cari'];

  $query = "SELECT * FROM articles WHERE content LIKE '%$cari%' OR title LIKE '%$cari%'";
  // $query = "SELECT * FROM articles";
  $results = mysqli_query($conn, $query);

  // var_dump($results);
  // die;

  if ($results) {
    $show = true;
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Akhir Pencarian!</title>
</head>

<body>
  <div class="container">
    <h1 class="text-center py-4">Dongeng sebelum tidur!</h1>
    <?php if ($show) : ?>
      <div class="row">
        <?php while ($data = mysqli_fetch_array($results)) : ?>
          <div class="col-10 mx-auto">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title"><?= $data['title'] ?></h5>
                <p class="card-text"><?= substr($data['content'], 0, 120); ?>...</p>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else : ?>
      <div class="col-10 mx-auto d-flex justify-content-center">
        <div class="card text-white bg-danger mb-3">
          <div class="card-body text-center">
            <!-- <h5 class="card-title">Tidak</h5> -->
            <p class="card-text">Tidak ada konten!</p>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>