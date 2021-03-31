    function Avaliar(estrela) {

        var url = window.location;
        url = url.toString()
        url = url.split("create");
        url = url[0];

        var star0 = "../img/star0.png";
        var star1 = "../img/star1.png";

        var s1 = document.getElementById("s1").src;
        var s2 = document.getElementById("s2").src;
        var s3 = document.getElementById("s3").src;
        var s4 = document.getElementById("s4").src;
        var s5 = document.getElementById("s5").src;
        var avaliacao = 0;

        var uriStar0 = star0.substring(3)
        var uriS1 = s1.substring(s1.length-13);
        var uriS2 = s2.substring(s2.length-13);
        var uriS3 = s3.substring(s3.length-13);
        var uriS4 = s4.substring(s4.length-13);
        var uriS5 = s5.substring(s5.length-13);

        if (estrela == 5){
            if (uriS5 == uriStar0) {
                document.getElementById("s1").src = star1;
                document.getElementById("s2").src = star1;
                document.getElementById("s3").src = star1;
                document.getElementById("s4").src = star1;
                document.getElementById("s5").src = star1;
                avaliacao = 5;
            }
            else {
                document.getElementById("s1").src = star1;
                document.getElementById("s2").src = star1;
                document.getElementById("s3").src = star1;
                document.getElementById("s4").src = star1;
                document.getElementById("s5").src = star0;
                avaliacao = 4;
            }
        }

        //ESTRELA 4
        if (estrela == 4){
            if (uriS4 == uriStar0) {
                document.getElementById("s1").src = star1;
                document.getElementById("s2").src = star1;
                document.getElementById("s3").src = star1;
                document.getElementById("s4").src = star1;
                document.getElementById("s5").src = star0;
                avaliacao = 4;
            }
            else {
                document.getElementById("s1").src = star1;
                document.getElementById("s2").src = star1;
                document.getElementById("s3").src = star1;
                document.getElementById("s4").src = star0;
                document.getElementById("s5").src = star0;
                avaliacao = 3;
            }
        }

        //ESTRELA 3
        if (estrela == 3){
            if (uriS3 == uriStar0) {
                document.getElementById("s1").src = star1;
                document.getElementById("s2").src = star1;
                document.getElementById("s3").src = star1;
                document.getElementById("s4").src = star0;
                document.getElementById("s5").src = star0;
                avaliacao = 3;
            }
            else {
                document.getElementById("s1").src = star1;
                document.getElementById("s2").src = star1;
                document.getElementById("s3").src = star0;
                document.getElementById("s4").src = star0;
                document.getElementById("s5").src = star0;
                avaliacao = 2;
            }
        }

        //ESTRELA 2
        if (estrela == 2){
            if (uriS2 == uriStar0) {
                document.getElementById("s1").src = star1;
                document.getElementById("s2").src = star1;
                document.getElementById("s3").src = star0;
                document.getElementById("s4").src = star0;
                document.getElementById("s5").src = star0;
                avaliacao = 2;
            }
            else {
                document.getElementById("s1").src = star1;
                document.getElementById("s2").src = star0;
                document.getElementById("s3").src = star0;
                document.getElementById("s4").src = star0;
                document.getElementById("s5").src = star0;
                avaliacao = 1;
            }
        }

        //ESTRELA 1
        if (estrela == 1){
            if (uriS1 == uriStar0) {
                document.getElementById("s1").src = star1;
                document.getElementById("s2").src = star0;
                document.getElementById("s3").src = star0;
                document.getElementById("s4").src = star0;
                document.getElementById("s5").src = star0;
                avaliacao = 1;
            }
            else {
                document.getElementById("s1").src = star0;
                document.getElementById("s2").src = star0;
                document.getElementById("s3").src = star0;
                document.getElementById("s4").src = star0;
                document.getElementById("s5").src = star0;
                avaliacao = 0;
            }
        }

        document.getElementById('rating').innerHTML = avaliacao;

    }
