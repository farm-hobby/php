[Home](../README.md) / Banco de dados - mysqli

# Sumário

- [Criando uma conexão com o Banco de Dados](#criando-uma-conexão-com-o-banco-de-dados)
- [Verificando se ocorreu algum erro](#verificando-se-ocorreu-algum-erro)
- [Definindo SQL Query](#definindo-sql-query)
- [Vinculando valores por referência](#vinculando-valores-por-referência)
- [Executando nossa Query](#executando-nossa-query)
- [Encerrando conexão com a database](#encerrando-conexão-com-a-database)
- [Realizando consultas na database](#realizando-consultas-na-database)


### Criando uma conexão com o Banco de Dados

Primeiro devemos configurar nossa conexão com as seguintes informações,
`endereço`, `login`, `senha`, `database`:

```php
<?php 
    $connection = new mysqli(
        'localhost',
        'root',
        '',
        'dbphp7'
    );
?>
```


### Verificando se ocorreu algum erro

A instancia do mysqli possui um atributo chamado `connect_error`
que nos informa se ocorreu algum erro de conexão, podemos exibir erro da
seguinte forma:

```php
<?php 
    
    if ($connection->connect_error) {
        echo 'Error: ' . $connection->connect_error;
    }

?>
```

### Definindo SQL Query

Depois que realizamos uma conexão bem sucedida, podemos criar 
nossa SQL Query e preparar para trabalhar com nossa database, através do
método `$connection->prepare()` que nossa conexão possui:

Perceba que nos valores inserimos exclamações, isso porque devemos vincular
os valores através de outro método, que veremos no tópico seguinte:

```php
<?php 
    
    $sql = 'INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)';
    $query = $connect->prepare($sql);

?>
```

### Vinculando valores por referência

O mysqli precisa que os valores que iremos vincular com nossa query
sejam referências, pois o método `$connection->bind_param` foi definido desse modo (&param).

O método `$connection->bind_param` recebe no primeiro parametro os tipos dos valores, 
os demais parametros são os valores a serem incrementados na nossa SQL Query:

Legenda dos tipos:

- i: Inteiro
- d: Double
- s: String
- b: Blob

```php
<?php 
    
    $login = 'user';
    $senha = '123456';

    $query->bind_param('ss', $login, $senha);

?>
```
### Executando nossa Query

```php
<?php 
    
    $query->execute();

?>
```

### Encerrando conexão com a database

```php
<?php 
    
    $query->close();

?>
```

### Realizando consultas na database

Após conectarmos na database e não houver nenhum erro de conexão,
vamos utilizar o método `$connect->query()`, onde informaremos a nossa
SQL Query para realizar uma consulta e retornar os valores que desejamos.

O método `query` nos retorno um outro objeto com os dados da database e 
alguns métodos para tratamento dos mesmos, como o `fetch_array` e `fetch_assoc`,
que retornam ou como arrays ou como arrays associativos, na documentação encontramos
mais métodos e informaçõe sobre [https://www.php.net/manual/pt_BR/class.mysqli-result.php](https://bit.ly/2U1PzRe).

Veja que utilizamos o `while`, pois não sabemos quantos registros (rows) 
retornaremos da database, verificando se há algum retorno validando no próprio `while`.

```php
<?php 
    
    $result = $connection->query('SELECT * FROM tb_usuarios ORDER BY deslogin');    

    while($row = $result->fetch_assoc()) {
        var_dump($row);
    }
?>
```


