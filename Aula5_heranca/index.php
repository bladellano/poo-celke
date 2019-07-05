<!DOCTYPE html>
<html lang="pt=br">
    <head>
        <title>Celke</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        require "./Cliente.php";
        require "./ClientePessoaFisica.php";
        require "./ClientePessoaJuridica.php";

        $cliente = new Cliente();
        $cliente->setEndereco('Av. Republica Argentina');
        $cliente->setBairro('Novo Mundo');

        echo $cliente->verEndereco();

        $clientePf = new ClientePessoaFisica();
        $clientePf->setCpf(83202919253);
        $clientePf->setNome('Caio');
        $clientePf->setEndereco('Cond. Flor de Rocaille');
        $clientePf->setBairro('Distrito');
        echo $clientePf->verEndereco();
        
        $clientePj = new ClientePessoaJuridica();
        $clientePj->setCnpj('50.463.725/0001-94');
        $clientePj->setNomeFantasia('Firefly');        
        $clientePj->setEndereco('Av. Paulista');
        $clientePj->setBairro('Centro');
        echo $clientePj->verEndereco();        
                
        ?>
    </body>
</html>
