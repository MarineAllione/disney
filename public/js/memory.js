// Tout les objets utiles et les raccourcis pour simplifier le codage
let objects = ['bicycle', 'bicycle', 'leaf', 'leaf', 'cube', 'cube', 'anchor', 'anchor', 'paper-plane-o', 'paper-plane-o', 'bolt', 'bolt', 'bomb', 'bomb', 'diamond', 'diamond'],

    // Sélecteurs utiles raccourcis
    $container = $('.container'),
    $scorePanel = $('.score-panel'),
    $rating = $('.fa-star'),
    $moves = $('.moves'),
    $timer = $('.timer'),
    $restart = $('.restart'),
    $deck = $('.deck'),

    // Initialiser les variables pour raccourcir le code
    nowTime,
    allOpen = [],
    match = 0,
    second = 0,
    moves = 0,
    wait = 420,
    totalCard = objects.length / 2,

    // Système de score allant de 1 à 3 étoiles pour raccourcir le code
    stars3 = 14,
    stars2 = 16,
    star1 = 20;

// Système de mélanges : évite que des parties différentes aient la même disposition de cartes 
function shuffle(array) {
    let currentIndex = array.length, temporaryValue, randomIndex;

    while (currentIndex !== 0) {
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }
    return array;
}

// La fonction init() permet au jeu de démarrer
function init() {

    // La fonction shuffle() mélanges le tableau des objets
    let allCards = shuffle(objects);
    $deck.empty();

    // La partie commence avec aucun score et aucun mouvement
    match = 0;
    moves = 0;
    $moves.text('0');

    // Une boucle for crée 16 balises <li> avec la classe .card et avec à l'intérieur une balise <i>,
    // pour chaque balise <i> : une classe .fa et une classe .fa- suivi du nom de chaque objet 
    // du tableau objets=[] ici mélangé dans allCards=[]
    for (let i = 0; i < allCards.length; i++) {
        $deck.append($('<li class="card"><i class="fa fa-' + allCards[i] + '"></i></li>'))
    }
    addCardListener();

    // Remet le timer à 0 quand la partie recommmence
    resetTimer(nowTime);
    second = 0;
    $timer.text(`${second}`)
    initTime();
}

// Ajoute un score allant de 0 à 3 étoiles et dépendant du nombres de mouvement effectués
function rating(moves) // on déclare une fonction rating qui prend "moves" en paramètre
{
    let rating = 3; // on déclare un score de base de 3 étoiles
    if (moves > stars3 && moves < stars2) // si le nombre de mouvement est compris entre 14 et 16
    {
        // on sélectionne l'étoile à l'index 2 (3è) et on la vide ( = on perd un point)
        $rating.eq(2).removeClass('fa-star').addClass('fa-star-o');
        rating = 2; // on fixe le score à 2 étoiles
    } 
    else if (moves >= stars2 && moves <= star1) // sinon s'il est compris entre 16 et 20
    {
        // on sélectionne l'étoile à l'index 1 (2è) et on la vide ( = on perd un 2è point)
        $rating.eq(1).removeClass('fa-star').addClass('fa-star-o');
        rating = 1; // on fixe le score à 1 étoile
    } 
    else if (moves > star1) // sinon s'il est supérieur à 20
    {
        // on sélectionne l'étoile à l'index 0 (1è) et on la vide ( = on perd un dernier point)
        $rating.eq(0).removeClass('fa-star').addClass('fa-star-o');
        rating = 0; // on fixe le score à 0 étoile
    }
    return { score: rating }; // la fonction renvoie le score allant de 0 à 3
}

// Ajoute une fenêtre d'alerte modale via bootstrap montrant la durée, les mouvements, le score de la partie, 
// et qui s'affiche quand toutes les cartes sont associées.
function gameOver(moves, score) {
    $('#winnerText').text(`In ${second} seconds, you did a total of ${moves} moves with a score of ${score}. Well done!`);
    $('#winnerModal').modal('toggle');
}

// Cliquer sur le bouton en haut à droite du jeu, remet les cartes à zéro
$restart.bind('click', function (confirmed) {
    if (confirmed) {
        $rating.removeClass('fa-star-o').addClass('fa-star');
        init();
    }
});

// Cette fonction permet à chaque carte sur laquelle on a cliqué de rester retournée jusqu'à ce qu'une autre soit retournée 
// Si les cartes ne correspondent pas, les deux cartes sont remises de dos.
let addCardListener = function () {

    // Ceci permet de retourner la carte sur laquelle on clique
    $deck.find('.card').bind('click', function () {
        let $this = $(this);

        if ($this.hasClass('show') || $this.hasClass('match')) { return true; }

        let card = $this.context.innerHTML;
        $this.addClass('open show');
        allOpen.push(card);

        // Vérifie si les cartes sont identiques
        if (allOpen.length > 1) {
            if (card === allOpen[0]) {
                $deck.find('.open').addClass('match');
                setTimeout(function () {
                    $deck.find('open').removeClass('open show');
                }, wait);
                match++;

                // Si les cartes ne sont pas identiques, il y a un délai de 630ms et les cartes sont retournées de nouveau.
            } else {
                $deck.find('.open').addClass('notmatch');
                setTimeout(function () {
                    $deck.find('.open').removeClass('open show');
                }, wait / 1.5);
            }

            // Le tableau allOpen contient toutes les cartes ajoutées qui sont retournées
            allOpen = [];

            // Incrémente le nombre de mouvements de 1 quand deux cartes sont retournées (identiques ou non)
            moves++;

            // Le nombre de mouvements est ajouté à la fonction rating() qui déterminera le score en étoiles
            rating(moves);

            // Le nombre de mouvements est ajouté à l'alerte modale HTML
            $moves.html(moves);
        }

        // La partie est terminée quand toutes les cartes sont retournées et associées, avec un court délai (500ms)
        if (totalCard === match) {
            rating(moves);
            let score = rating(moves).score;
            setTimeout(function () {
                gameOver(moves, score);
            }, 500);
        }
    });
}

// Initialise le timer après 1s que la partie soit chargée
function initTime() {
    nowTime = setInterval(function () {
        $timer.text(`${second}`)
        second = second + 1
    }, 1000);
}

// Remet à zéro le timer quand la partie se termine ou est relancée
function resetTimer(timer) {
    if (timer) {
        clearInterval(timer);
    }
}

init();