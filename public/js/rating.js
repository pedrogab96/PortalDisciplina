function Avaliar(estrela, classificationId) {

    var url = window.location;
    url = url.toString()
    url = url.split("create");
    url = url[0];

    var star0 = "../img/star0.png";
    var star1 = "../img/star1.png";

    var classification = document.getElementById(classificationId);

    var s1 = classification.getElementsByClassName('s1')[0].children[0].src;
    var s2 = classification.getElementsByClassName('s2')[0].children[0].src;
    var s3 = classification.getElementsByClassName('s3')[0].children[0].src;
    var s4 = classification.getElementsByClassName('s4')[0].children[0].src;
    var s5 = classification.getElementsByClassName('s5')[0].children[0].src;
    var avaliacao = 0;

    var uriStar0 = star0.substring(3)
    var uriS1 = s1.substring(s1.length-13);
    var uriS2 = s2.substring(s2.length-13);
    var uriS3 = s3.substring(s3.length-13);
    var uriS4 = s4.substring(s4.length-13);
    var uriS5 = s5.substring(s5.length-13);


    if (estrela == 5){
        if (uriS5 == uriStar0) {
            classification.getElementsByClassName('s1')[0].children[0].src = star1;
            classification.getElementsByClassName('s2')[0].children[0].src = star1;
            classification.getElementsByClassName('s3')[0].children[0].src = star1;
            classification.getElementsByClassName('s4')[0].children[0].src = star1;
            classification.getElementsByClassName('s5')[0].children[0].src = star1;
            avaliacao = 5;
        }
        else {
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
        if (uriS4 == uriStar0) {
            classification.getElementsByClassName('s1')[0].children[0].src = star1;
            classification.getElementsByClassName('s2')[0].children[0].src = star1;
            classification.getElementsByClassName('s3')[0].children[0].src = star1;
            classification.getElementsByClassName('s4')[0].children[0].src = star1;
            classification.getElementsByClassName('s5')[0].children[0].src = star0;
            avaliacao = 4;
        }
        else {
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
        if (uriS3 == uriStar0) {
            classification.getElementsByClassName('s1')[0].children[0].src = star1;
            classification.getElementsByClassName('s2')[0].children[0].src = star1;
            classification.getElementsByClassName('s3')[0].children[0].src = star1;
            classification.getElementsByClassName('s4')[0].children[0].src = star0;
            classification.getElementsByClassName('s5')[0].children[0].src = star0;
            avaliacao = 3;
        }
        else {
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
        if (uriS2 == uriStar0) {
            classification.getElementsByClassName('s1')[0].children[0].src = star1;
            classification.getElementsByClassName('s2')[0].children[0].src = star1;
            classification.getElementsByClassName('s3')[0].children[0].src = star0;
            classification.getElementsByClassName('s4')[0].children[0].src = star0;
            classification.getElementsByClassName('s5')[0].children[0].src = star0;
            avaliacao = 2;
        }
        else {
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
        if (uriS1 == uriStar0) {
            classification.getElementsByClassName('s1')[0].children[0].src = star1;
            classification.getElementsByClassName('s2')[0].children[0].src = star0;
            classification.getElementsByClassName('s3')[0].children[0].src = star0;
            classification.getElementsByClassName('s4')[0].children[0].src = star0;
            classification.getElementsByClassName('s5')[0].children[0].src = star0;
            avaliacao = 1;
        }
        else {
            classification.getElementsByClassName('s1')[0].children[0].src = star0;
            classification.getElementsByClassName('s2')[0].children[0].src = star0;
            classification.getElementsByClassName('s3')[0].children[0].src = star0;
            classification.getElementsByClassName('s4')[0].children[0].src = star0;
            classification.getElementsByClassName('s5')[0].children[0].src = star0;
            avaliacao = 0;
        }
    }

    classification.getElementsByClassName('rating')[0].innerHTML = avaliacao;

}
