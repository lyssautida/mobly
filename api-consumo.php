//consumindo api atraves de url ou de arquivo
$jsonobj = '{"ALVARO":35,"MARCOS":37,"JOEL":43}';
<?php
    print_r(json_decode($jsonobj));

    $conteudo = file_get_contents('http://localhost/agenda/api_cadastro.php');

    //$conteudo = file_get_contents('C:\Users\Adriano\Downloads\exemplo.json');
    $dados = json_decode($conteudo);

    //print_r($dados);


    foreach ($dados as $key => $value){
        echo $value->camara_municipal_de_corrente_pi ."<br>";
        echo $value->field_2 ."<br>";
    }

    echo "Total de Registros: ". count($dados);

    header('Content-Type: application/json'); 