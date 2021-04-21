MAX_RATE = 20;

function checkBalance()
{
    if(this.sum() > 20)
    {
        return false;
    }
    return true;
}

function sum()
{
    x1 = document.getElementById("classificacao-metodologias-classicas").value;
    x2 = document.getElementById("classificacao-metodologias-ativas").value;
    x3 = document.getElementById("classificacao-discussao-social").value;
    x4 = document.getElementById("classificacao-discussao-tecnica").value;
    x5 = document.getElementById("classificacao-abordagem-teorica").value;
    x6 = document.getElementById("classificacao-abordagem-pratica").value;
    x7 = document.getElementById("classificacao-av-provas").value;
    x8 = document.getElementById("classificacao-av-atividades").value;
    sum = x1+x2+x3+x4+x5+x6+x7+x8;
    return sum;
}

function update()
{
    if(!this.checkBalance())
    {
        document.getElementById("aviso").value = "passou do limite";
    }
    document.getElementById("aviso").value = "tudo tranquilo ate agores";
}
