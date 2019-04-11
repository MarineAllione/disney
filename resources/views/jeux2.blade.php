<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ben's Matching Game</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Coda">
    <link rel="stylesheet" href="css/styles.css">

                              <!-- Styles -->
  <style>
  html, body {
  background-image: url('img/i.jpg');
  background-size: cover;
  background-attachment: fixed;



  }

  .content {
  text-align: center;
  }

  </style>
</head>

<body>
                  <!--titre-->
  <div class="content">
    <div class="title m-b-md">
      <img src="img/memory.png">
    </div>
  </div>
  <br>
  <br>

                      <!--jeux-->
    <div class="modal fade" id="winnerModal" tabindex="-1" role="dialog" aria-labelledby="winnerModal-label">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="winnerModal-label">We Have a Winner!</h4>
                </div>
                <div class="modal-body">
                    <p id="winnerText"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="init(), $rating.removeClass('fa-star-o').addClass('fa-star'); " class="btn btn-default" data-dismiss="modal">Go Again!</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <section class="score-panel">
            <ul class="stars">
                <li>
                    <i class="fa fa-star"></i>
                </li>
                <li>
                    <i class="fa fa-star"></i>
                </li>
                <li>
                    <i class="fa fa-star"></i>
                </li>
            </ul>
            <span class="moves">0</span> Moves | Time:
            <span class="timer">0</span> s
            <div class="restart">
                <i class="fa fa-repeat"></i>
            </div>
<br>
        </section>
        <ul class="deck"></ul>
    </div>

                      <!-- btn retour-->
    <form>
      <div class="content">
        <div class="title m-b-md">
          <img type = "button" src="img/retour.png" onclick = "history.back()">
        </div>
      </div>
    </form>


                    <!--script-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <script src="js/memory.js"></script>
</body>

</html>
