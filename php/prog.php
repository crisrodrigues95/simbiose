<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet"  href="style.php">
    <link href="../css/global.css" rel="stylesheet">
    <title>Resultado</title>

    <style>
        body {background-color: rgba(151, 209, 151, 0.582);}
        h1 {text-align:center;margin-top:10%}
        p {font-size:15px}
        .container{background-color:whitesmoke; border-radius:10px; max-width:650px;}
        
    </style>
</head>
<body>
    

<div class="container">


<?php


/*Coleta dos dados do html*/

$n = 25;
$q = array();
$q[] = 0;




for  ($i = 1; $i <= $n; $i++) {
    $f = "q$i";
    $q[] = $_POST[$f];
}

/*Calculo da média*/
$soma = array_sum($q);

$media = ($soma/$n);

$media = (round($media, 2));


/*Avaliação do nível*/

if ($media <= 0.54) {

    $resul = 'NIM';
    $tipol = 'Não interessada no momento';
}

if (($media > 0.54) and ($media <= 1.24)) {

    $resul = 'NPM';
    $tipol = 'Não preparada no momento';
}

if (($media > 1.24) and ($media <= 2.71)) {

    $resul = 'CNI';
    $tipol = 'A caminho – Nível I';
}

if (($media > 2.71) and ($media <= 3.76)) {

    $resul = 'CNII';
    $tipol = 'A caminho – Nível II';
}

if (($media > 3.76) and ($media <= 4.67)) {

    $resul = 'CNIII';
    $tipol = 'A caminho – Nível III';
}

if ($media > 4.67) {

    $resul = 'P';
    $tipol = 'Preparada';
}


/*Texto para cada nível*/

if ($resul == 'NIM') {


    $car = "O grupo “não interessada no momento” agrupa as empresas que por questões de desconhecimento, inviabilidade econômica ou por decisão interna da própria empresa, por ora, não se interessa em praticar a SI com outra indústria geograficamente próxima. Considera-se nessa tipologia as empresas que ainda não realizam a troca de nenhum recurso e não tem a capacidade de troca (fatores facilitadores).";
    $texto = "Sugere-se que, em razão dos benefícios da SI e pela crescente escassez de recursos materiais, a empresa procure informações sobre os conceitos que envolvem a SI, começando uma reflexão sobre a sua funcionalidade e possível inserção na estratégia de negócios da empresa. Associações locais podem ajudar no processo de capacitação e levantamento de informação sobre o assunto.";

}


if ($resul == 'NPM') {

    $car = 'O grupo “não preparada no momento” classifica as empresas que identificaram alguns resíduos e subprodutos como opção de troca com outras indústrias geograficamente próximas, porém têm dificuldades em estabelecer parcerias, compartilhar e acessar informação de recursos, e ter infraestrutura disponível; estando despreparada no momento para implementar a SI. Considera-se nessa tipologia as empresas que realizam apenas a troca de resíduos e/ou subprodutos, em baixa frequência e quantidade, mas não tem ainda a capacidade de troca (fatores facilitadores).';
    $texto = "Recomenda-se que a empresa se esforce para identificar recursos de troca variados e inicie as tratativas para captação de possíveis parceiros de troca dentro do conjunto de empresas co-localizadas. Aconselha-se que a empresa focalize parceiros que poderão absorver quantidades razoáveis de recursos e que tenham constância no processo de compartilhamento. A conjuntura de fatores relacionados à confiança, parceria, informação, políticas públicas e infraestrutura devem ser considerados pela empresa para aprofundar os reais motivos da falta de preparo atual para implementação da SI.";

}


if ($resul == 'CNI') {

    $car = 'O grupo “a caminho” engloba empresas que tem potencial para implementar a SI, todavia ainda têm embaraços no estabelecimento de vínculos fortes de confiança com parceiros, no acesso às informações de produção dos agentes que realiza a troca, e na obtenção de subsídios e financiamento. O “a caminho – nível I” associa as empresas que realizam apenas a troca de resíduos e subprodutos, em média frequência e quantidade, e tem baixa capacidade de troca (fatores facilitadores).';
    $texto = "Propõe-se que as empresas explorem melhor as relações com os parceiros, tanto em quantidade de agentes de troca quanto em qualidade da relação, e também melhore a comunicação com parceiros pouco frequentes e futuros, principalmente no quesito de transparência. O uso de tecnologias da indústria 4.0, como o Big Data, podem ajudar a comunicação entre os parceiros da relação simbiótica. Demais, a criação de contratos poderá mitigar os problemas de confiança.";

}

if ($resul == 'CNII') {

    $car = 'O grupo “a caminho” engloba empresas que tem potencial para implementar a SI, todavia ainda têm embaraços no estabelecimento de vínculos fortes de confiança com parceiros, no acesso às informações de produção dos agentes que realiza a troca, e na obtenção de subsídios e financiamento. O “a caminho – nível II” agrega empresas que realizam apenas a troca de resíduos e subprodutos, em média frequência e quantidade, e tem média capacidade de troca (fatores facilitadores).';
    $texto = "Propõe-se que as empresas explorem melhor as relações com os parceiros, tanto em quantidade de agentes de troca quanto em qualidade da relação, e também melhore a comunicação com parceiros pouco frequentes e futuros, principalmente no quesito de transparência. O uso de tecnologias da indústria 4.0, como o Big Data, podem ajudar a comunicação entre os parceiros da relação simbiótica. Demais, a criação de contratos poderá mitigar os problemas de confiança.";

}

if ($resul == 'CNIII') {

    $car = 'O grupo “a caminho” engloba empresas que tem potencial para implementar a SI, todavia ainda têm embaraços no estabelecimento de vínculos fortes de confiança com parceiros, no acesso às informações de produção dos agentes que realiza a troca, e na obtenção de subsídios e financiamento. O “a caminho – nível III”  agrupa empresas que realizam apenas a troca de resíduos e subprodutos, em alta frequência e quantidade, e tem alta capacidade de troca (fatores facilitadores).';
    $texto = "Propõe-se que as empresas explorem melhor as relações com os parceiros, tanto em quantidade de agentes de troca quanto em qualidade da relação, e também melhore a comunicação com parceiros pouco frequentes e futuros, principalmente no quesito de transparência. O uso de tecnologias da indústria 4.0, como o Big Data, podem ajudar a comunicação entre os parceiros da relação simbiótica. Demais, a criação de contratos poderá mitigar os problemas de confiança.";

}


if ($resul == 'P') {

    $car = 'O grupo “preparada” classifica as empresas como preparadas para implementar a SI, visto que desenvolve boas relações com os parceiros, consegue compartilhar e captar informação com a cadeia, tem acesso a políticas de incentivo e de infraestrutura, além de alcançar ganhos econômicos com a SI. Acredita que a SI é uma estratégia que torna os sistemas produtivos circulares, sendo fundamental para a gestão de resíduos. Considera-se nessa tipologia as empresas que realizam a troca de água, energia, resíduos e subprodutos, em alta frequência e quantidade, e tem alta capacidade de troca (fatores facilitadores).';
    $texto = "O ideal é que a empresa intensifique e mantenha as trocas simbióticas atuais, procurando aumentar o número de parceiros que tenha acordos ganha-ganha entre empresas co-localizadas. Ao intensificar suas trocas simbióticas, a empresa aumentará o seu know how de troca, e desenvolverá ações de correções dos erros que ainda persistem. Conseguir, por meio de políticas ambientais governamentais, investimentos em infraestrutura e usar plataformas de compartilhamento são essenciais para concretizar a implementação da SI no conjunto de ecossistema industrial que pertence.";
}

/*Exibição dos resultados*/

echo "<h1>Resultado<h1>";



    


echo "

<h1>O resultado da sua empresa é: $resul<h1>
<h1>$tipol<h1>
<p> <b>Caracteristica:</b> $car<P>
<p> <b>Recomendação:</b> $texto<p>"







?>


</div>
</body>


</html>