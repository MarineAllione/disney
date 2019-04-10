<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Histoires</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" href="css/book.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-image: url('img/i.jpg');
            background-size: cover;


        }

        .content {
            text-align: center;
        }

    </style>

  </head>
  <body>

    <div class="component">
  <ul class="align">
                          <!-- Book 1 -->
    <li>
      <figure class='book'>
        <!-- Front -->
        <ul class='hardcover_front'>
          <li>
            <img src="img/pocahontas1.jpeg" alt="" width="100%" height="100%">
          </li>
          <li></li>
        </ul>
        <!-- Pages -->
        <ul class='page'>
          <li></li>
          <li>
            <a class="btn" href="">Lire</a>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
        <!-- Back -->
        <ul class='hardcover_back'>
          <li></li>
          <li></li>
        </ul>
        <ul class='book_spine'>
          <li></li>
          <li></li>
        </ul>
      </figure>
    </li>
      </figure>
    </li>
  </ul>
</div>

                      <!-- btn retour-->
<form>
    <div class="content">
      <div class="title m-b-md">
        <img type = "button" src="img/retour.png"  onclick = "history.back()">
      </div>
    </div>
</form>



                      <!--script-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
