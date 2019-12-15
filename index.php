<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    .input-group-addon {
      color: #ff0000;
      background-color: #ffffff;
    }
  </style>
  <title>Mesin Pencari</title>
</head>

<body>
  <div class="container h100 pt-4">
    <div class="row h100 justify-content-center align-items-center py-4">
      <div class="col-5 mx-auto">
        <div class="d-flex justify-content-center">
          <img src="rocket.svg" class="d-block" width="200" alt="">
        </div>
      </div>
    </div>
    <form action="cari.php" method="post" onsubmit="return checkBeforeSend(this)">
      <div class="row h100 justify-content-center align-items-center pb-4">
        <div class="col-5 mx-auto">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">></span>
            </div>
            <input type="text" class="form-control" id="cari" name="cari">
          </div>
        </div>
      </div>
      <div class="row h100 justify-content-center align-items-center">
        <div class="col-5 mx-auto">
          <div class="d-flex justify-content-around">
            <button type="submit" onclick="checkButton(this)" name="biasa" class="btn btn-secondary">Telurusi dunia!</button>
            <button type="submit" onclick="checkButton(this)" name="sial" class="btn btn-secondary">Saya tidak pernah beruntung</button>
          </div>
        </div>
      </div>
    </form>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script>
    let tombol;

    const checkButton = (btn) => {
      tombol = btn;
    }

    const checkBeforeSend = (form) => {
      console.log(tombol.getAttribute('name'));

      if (tombol.getAttribute('name') == 'sial') {
        window.location.href = "https://www.google.com/"
      }

    }
  </script>
</body>

</html>