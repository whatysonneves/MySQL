# Class MySQL
Facilitar o acesso ao MySQL através do PHP.

![Funcionando](https://img.shields.io/badge/Funcionando-OK-green.svg?style=flat-square) ![PHP](https://img.shields.io/badge/PHP-5.4.12-blue.svg?style=flat-square)

Através dos atributos e métodos da classe, com este arquivo viso melhorar a forma como trabalhamos com MySQL em nosso projetos.

## Usando

### Conectando
    require "mysql.class.php";

    $sql = new MySQL();
    $sql->host = "localhost";
    $sql->connect();

### Executando consulta
    $sql->query("SELECT * FROM nomes");

### Resultados e contagem
    echo $sql->count()." linhas";
    // Resultado: 5 linhas
    
    while($dados = $sql->fetch()) {
      var_dump($dados);
    }

### Diferentes consultas
    $consulta1 = $sql->query("SELECT * FROM nomes");
    $consulta2 = $sql->query("SELECT * FROM telefones");
    echo "Tem ".$sql->count($consulta1)." nomes e ".$sql->count($consulta2)." telefones";
    // Resultado: Tem 5 nomes e 7 telefones

Espero que tenham gostado e que seja útil para tornar o código mais limpo.

Desenvolvido por ProMasters
