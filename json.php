<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula de manipulação de json </title>
    </head>
    <body>
       <?php
            $json = file_get_contents("http://www.correiodoestado.com.br/climatempo/json/");
            //echo $json;

            $json = json_decode($json);
            //print_r($json);
            
            $obj = new StdClass();
            /*
             { "previsao":[{"codigo":212,"cidade":"Campo Grande","uf":"MS","baixa":21,"alta":36,"ico":2,"frase":"Sol com algumas nuvens. N\u00e3o chove.","data":"19\/09 Ter","dia_mes":"19\/09","dia_semana":"Ter","selecionada":1}, 
             */
            
            $obj->codigo = 111;
            $obj->cidade = "São Paulo";
            $obj->uf = "SP";
            $obj->baixa = 01;
            $obj->alta = 02;
            $obj->ico = 2;
            $obj->frase = "Alguma coisa";
            $obj->data = "12/12/2004";
            $obj->dia_mes = "Janeiro";
            $obj->dia_semana = "alguma";
            $obj->selecionada = 1;
            
            $json->previsao[] = $obj;

          echo "Cidades retornanadas: ". count($json->previsao)."</br></br>";

            foreach ($json->previsao as $item) {
                echo "Cidade: ".$item->cidade." - Baixa: ".$item->baixa." - Alta: ".$item->alta." - (".$item->frase.")</br></br>";
        }
          
          
            //echo json_encode($json); // mostra na tela json 
        
            // criando um json do zero.
            $json1 = array(
                "nome" => "Júlio",
                "idade" => 90,
                "cor" => "negro"
            );
            
            //print_r($json1); aqui mostra o array
            
            echo json_encode($json1); // aqui mostra um json
        ?> 
    </body>
</html>

