<?php
 
echo "<h1>Listar artigos</h1>";

//var_dump($this->Dados); 

foreach ($this->Dados['artigos'] as $artigo ):
    extract($artigo);
    echo "ID: {$id}<br>";
    echo "Título:{$titulo}<br>";
    echo "Conteúdo:{$conteudo}<br><hr>";
endforeach;