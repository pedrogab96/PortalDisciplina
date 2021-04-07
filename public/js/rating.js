function Avaliar(estrela, classificationName) {

    var url = window.location;
    url = url.toString()
    url = url.split("create");
    url = url[0];

    var star0 = "../img/star0.png";
    var star1 = "../img/star1.png";

    var classificationId = "classification-" + classificationName;
    var classificationStars = "stars-" + classificationName;

    var classification = document.getElementById(classificationId);

    var s1 = classification.getElementsByClassName('s1')[0].children[0].src;
    var s2 = classification.getElementsByClassName('s2')[0].children[0].src;
    var s3 = classification.getElementsByClassName('s3')[0].children[0].src;
    var s4 = classification.getElementsByClassName('s4')[0].children[0].src;
    var s5 = classification.getElementsByClassName('s5')[0].children[0].src;

    var avaliacao = 0;
    var stars = starSum();
    var starsAvailable = 20 - stars;

    var uriStar0 = star0.substring(3)
    var uriS1 = s1.substring(s1.length-13);
    var uriS2 = s2.substring(s2.length-13);
    var uriS3 = s3.substring(s3.length-13);
    var uriS4 = s4.substring(s4.length-13);
    var uriS5 = s5.substring(s5.length-13);

    //ESTRELA 5
    if (estrela == 5){
        // if (uriS5 == uriStar0) {
        if (uriS5 == uriStar0 && verifyStars(classificationStars, 5)) {
            classification.getElementsByClassName('s1')[0].children[0].src = star1;
            classification.getElementsByClassName('s2')[0].children[0].src = star1;
            classification.getElementsByClassName('s3')[0].children[0].src = star1;
            classification.getElementsByClassName('s4')[0].children[0].src = star1;
            classification.getElementsByClassName('s5')[0].children[0].src = star1;
            avaliacao = 5;
        }
        // else {
        else if(verifyStars(classificationStars, 4)) {
            classification.getElementsByClassName('s1')[0].children[0].src = star1;
            classification.getElementsByClassName('s2')[0].children[0].src = star1;
            classification.getElementsByClassName('s3')[0].children[0].src = star1;
            classification.getElementsByClassName('s4')[0].children[0].src = star1;
            classification.getElementsByClassName('s5')[0].children[0].src = star0;
            avaliacao = 4;
        }
    }

    //ESTRELA 4
    if (estrela == 4){
        if (uriS4 == uriStar0 && verifyStars(classificationStars, 4)) {
            classification.getElementsByClassName('s1')[0].children[0].src = star1;
            classification.getElementsByClassName('s2')[0].children[0].src = star1;
            classification.getElementsByClassName('s3')[0].children[0].src = star1;
            classification.getElementsByClassName('s4')[0].children[0].src = star1;
            classification.getElementsByClassName('s5')[0].children[0].src = star0;
            avaliacao = 4;
        }
        else if(verifyStars(classificationStars, 3)) {
            classification.getElementsByClassName('s1')[0].children[0].src = star1;
            classification.getElementsByClassName('s2')[0].children[0].src = star1;
            classification.getElementsByClassName('s3')[0].children[0].src = star1;
            classification.getElementsByClassName('s4')[0].children[0].src = star0;
            classification.getElementsByClassName('s5')[0].children[0].src = star0;
            avaliacao = 3;
        }
    }

    //ESTRELA 3
    if (estrela == 3){
        if (uriS3 == uriStar0 && verifyStars(classificationStars, 3)) {
            classification.getElementsByClassName('s1')[0].children[0].src = star1;
            classification.getElementsByClassName('s2')[0].children[0].src = star1;
            classification.getElementsByClassName('s3')[0].children[0].src = star1;
            classification.getElementsByClassName('s4')[0].children[0].src = star0;
            classification.getElementsByClassName('s5')[0].children[0].src = star0;
            avaliacao = 3;
        }
        else if(verifyStars(classificationStars, 2)) {
            classification.getElementsByClassName('s1')[0].children[0].src = star1;
            classification.getElementsByClassName('s2')[0].children[0].src = star1;
            classification.getElementsByClassName('s3')[0].children[0].src = star0;
            classification.getElementsByClassName('s4')[0].children[0].src = star0;
            classification.getElementsByClassName('s5')[0].children[0].src = star0;
            avaliacao = 2;
        }
    }

    //ESTRELA 2
    if (estrela == 2){
        if (uriS2 == uriStar0 && verifyStars(classificationStars, 2)) {
            classification.getElementsByClassName('s1')[0].children[0].src = star1;
            classification.getElementsByClassName('s2')[0].children[0].src = star1;
            classification.getElementsByClassName('s3')[0].children[0].src = star0;
            classification.getElementsByClassName('s4')[0].children[0].src = star0;
            classification.getElementsByClassName('s5')[0].children[0].src = star0;
            avaliacao = 2;
        }
        else if(verifyStars(classificationStars, 1)) {
            classification.getElementsByClassName('s1')[0].children[0].src = star1;
            classification.getElementsByClassName('s2')[0].children[0].src = star0;
            classification.getElementsByClassName('s3')[0].children[0].src = star0;
            classification.getElementsByClassName('s4')[0].children[0].src = star0;
            classification.getElementsByClassName('s5')[0].children[0].src = star0;
            avaliacao = 1;
        }
    }

    //ESTRELA 1
    if (estrela == 1){
        if (uriS1 == uriStar0 && verifyStars(classificationStars, 1)) {
            classification.getElementsByClassName('s1')[0].children[0].src = star1;
            classification.getElementsByClassName('s2')[0].children[0].src = star0;
            classification.getElementsByClassName('s3')[0].children[0].src = star0;
            classification.getElementsByClassName('s4')[0].children[0].src = star0;
            classification.getElementsByClassName('s5')[0].children[0].src = star0;
            avaliacao = 1;
        }
        // else {
        else if(verifyStars(classificationStars, 0)) {
            classification.getElementsByClassName('s1')[0].children[0].src = star0;
            classification.getElementsByClassName('s2')[0].children[0].src = star0;
            classification.getElementsByClassName('s3')[0].children[0].src = star0;
            classification.getElementsByClassName('s4')[0].children[0].src = star0;
            classification.getElementsByClassName('s5')[0].children[0].src = star0;
            avaliacao = 0;
        }
    }

    classification.getElementsByClassName('rating')[0].innerHTML = avaliacao;
    document.getElementById(classificationStars).value = avaliacao;
    stars = starSum();
    document.getElementById('rating-total').innerHTML = stars;
    document.getElementById('stars-total').value = stars;

    // TODO teste
    starsAvailable = 20 - stars;
    document.getElementById('rating-available').innerHTML = starsAvailable;
}

// TODO Bugado; Revisar lógica
function verifyStars(classificationStars, avaliacao){
    var stars = parseInt(document.getElementById(classificationStars).value);
    var diff = avaliacao - stars;

    stars = starSum();
    starsAvailable = 20 - (stars + diff);

    console.log(document.getElementById(classificationStars));
    console.log(stars,avaliacao,diff,starsAvailable);

    if(starsAvailable >= 0)
        return true;
    else
        return false;
}

function starSum() {
    var sum = 0;

    sum += parseInt(document.getElementById('stars-apresentacao-trabalhos').value);
    sum += parseInt(document.getElementById('stars-producao-textual').value);
    sum += parseInt(document.getElementById('stars-lista-exercicios').value);
    sum += parseInt(document.getElementById('stars-discussao-social').value);
    sum += parseInt(document.getElementById('stars-discussao-tecnica').value);
    sum += parseInt(document.getElementById('stars-abordagem-teorica').value);
    sum += parseInt(document.getElementById('stars-abordagem-pratica').value);
    sum += parseInt(document.getElementById('stars-avaliacao-prova-escrita').value);
    sum += parseInt(document.getElementById('stars-avaliacao-atividades').value);

    return sum;
}
