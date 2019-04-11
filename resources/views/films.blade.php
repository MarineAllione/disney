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
  <br>                  <!--titre-->

    <div class="content">
      <div class="title m-b-md">
        <img src="img/films.png">
      </div>
    </div>
<br>
                    <!--films-->
@foreach($films as $film)
<div class="content">
  <div class="title m-b-md">
<br>
    <iframe width="759" height="315" src="{{$film->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br>
  </div>
</div>
@endforeach

<br>
                      <!-- btn retour-->
<form>
    <div class="content">
      <div class="title m-b-md">
        <img type = "button" src="img/retour.png" onclick = "history.back()">
      </div>
    </div>
</form>
                      <!--script-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
