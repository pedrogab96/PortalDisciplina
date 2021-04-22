MAX_POINTS = 20;
remaing_points = MAX_POINTS;

met_classicas_previous = 0;
met_ativas_previous = 0;
disc_social_previous = 0;
disc_tecnica_previous = 0;
ab_teorica_previous = 0;
ab_pratica_previous = 0;
av_provas_previous = 0;
av_atividades_previous = 0;

function sum_inputs()
{
    met_classicas = document.getElementById("classificacao-metodologias-classicas").value;
    met_ativas = document.getElementById("classificacao-metodologias-ativas").value;
    disc_social = document.getElementById("classificacao-discussao-social").value;
    disc_tecnica = document.getElementById("classificacao-discussao-tecnica").value;
    ab_teorica = document.getElementById("classificacao-abordagem-teorica").value;
    ab_pratica = document.getElementById("classificacao-abordagem-pratica").value;
    av_provas = document.getElementById("classificacao-av-provas").value;
    av_atividades = document.getElementById("classificacao-av-atividades").value;
    sum = parseInt(met_classicas)+parseInt(met_ativas)+parseInt(disc_social)+parseInt(disc_tecnica)
        +parseInt(ab_teorica)+parseInt(ab_pratica)+parseInt(av_provas)+parseInt(av_atividades);
    return parseInt(sum);
}

function checkBalance()
{
    if(sum_inputs() > MAX_POINTS)
    {
        return false;
    }
    return true;
}

function update(input)
{
    while(!checkBalance())
    {
        document.getElementById(input.id).value -=1;
    }

    switch(input.id){
        case 'classificacao-metodologias-classicas':
            remaing_points -= (input.value - met_classicas_previous);
            met_classicas_previous = input.value;
            break;
        case 'classificacao-metodologias-ativas':
            remaing_points -= (input.value - met_ativas_previous);
            met_ativas_previous = input.value;
            break;
        case 'classificacao-discussao-social':
            remaing_points -= (input.value - disc_social_previous);
            disc_social_previous = input.value;
            break;
        case 'classificacao-discussao-tecnica':
            remaing_points -= (input.value - disc_tecnica_previous);
            disc_tecnica_previous = input.value;
            break;
        case 'classificacao-abordagem-teorica':
            remaing_points -= (input.value - ab_teorica_previous);
            ab_teorica_previous = input.value;
            break;
        case 'classificacao-abordagem-pratica':
            remaing_points -= (input.value - ab_pratica_previous);
            ab_pratica_previous = input.value;
            break;
        case 'classificacao-av-provas':
            remaing_points -= (input.value - av_provas_previous);
            av_provas_previous = input.value;
            break;
        case 'classificacao-av-atividades':
            remaing_points -= (input.value - av_atividades_previous);
            av_atividades_previous = input.value;
            break;
    }
    document.getElementById("points").style.width = calcPercentage(remaing_points,MAX_POINTS);
    console.log(calcPercentage(remaing_points,MAX_POINTS));
}

function calcPercentage(current,max){
    percentage = (current/max)*100;
    return parseInt(percentage) + '%';
}

function setWidth(input,current,max){
    document.getElementById(input.id).style.width = calcPercentage(current,max);
}
