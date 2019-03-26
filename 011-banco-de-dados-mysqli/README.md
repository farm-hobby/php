[Home](../README.md) / Banco de dados - mysqli

# Sumário

- [title](#title)


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
método `prepare()` que nossa conexão possui:

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
sejam referências, pois o método `bind_param` foi definido desse modo (&param).

O método `bin_param` recebe no primeiro parametro os tipos dos valores, 
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
