# Sumário

- [Criando funções de usuário](#criando-funções-de-usuario)
- [Parâmetros de funções](#parâmetros-de-funções)
- [Parâmetros por Valor X Referência](#parâmetros-por-valor-x-referência)
- [Funções no PHP 7 Novidades](#funções-no-php-7-novidades)
- [Funções Recursivas](#funções-recursivas)
- [Funções Anônimas](#funções-anônimas)

### Criando funções de usuário

A estrutura das funções contém, a palara reservada `function`, seu nome, um par de parenteses, chaves de abertura/encerramento, e dentro pode haver um valor de retorno com a palavra reservava `return`;

```php
<?php 
    function greeting() {
        return 'Hello!';
    }

    echo greeting();
?>
```

### Parâmetros de funções

Dentro dos parênteses podemos informar `parâmetros`, esses parâmetros podem ser obrigatórios
ou opcionais para o funcionamento das funções, os parâmetros também podem ter valores padrão:

```php
<?php 
    function greet($text = 'World', $period = 'Good Morning') {
        return 'Hello '.$text.', '.$period.'! <br>'; 
    }

    echo greet('Everyone', 'Good Night');
    echo greet('Everyone');
    echo greet('', '');
?>
```

Dica: parâmetros que não possuem valores padrão, sempre a esquerda!


### Parâmetros como Array

Nas funções do PHP conseguimos pegar todos os parâmetros informados em sua chamada,
sem especifica-los, utilizando o método `func_get_args()`. Recuperando todos os argumentos
como um Array.

```php
<?php 
    function greet() {
        $args = func_get_args();

        return $args;
    }

    var_dump(greet());
    var_dump(greet("Good", "Morning"));
    var_dump(greet('String', [], 10, 15.2, false));
?>
```

### Parâmetros por Valor X Referência

##### Parâmetros por valor

Como o parâmetro é criado no escopo da função, o valor recebido é uma cópia, ou seja, 
caso alterarmos o valor do parâmetro a variável externa não sofrerá nenhuma alteração/modificação

```php
<?php 
    $year = 1991;

    function incrementYear($year) {
        return ++$year;
    }

    $newYear = incrementYear($year);

    echo $year;
    echo $newYear;
?>
```

##### Parâmetros por referência

Conseguimos alterar a fonte original passada por parêmetro se informarmos para a função que
queremos passar o valor como **referência**, para fazer isso devemos adicionar um `&` (E comercial) como prefixo
da variável desejada.

```php
<?php 
    $year = 1991;

    function incrementYear(&$year) {
        return ++$year;
    }

    $newYear = incrementYear($year);

    echo $year;
    echo '<br>';
    echo $newYear;

?>
```

### Funções no PHP 7 Novidades

##### Splat Operator

Utilizando na construção de funções podemos pegar parametros direto como um Array 
e conseguimos também definir o tipo dos dados inseridos neste Array, esse operador é conhecido como `Variadic Functions`,
utilizamos 3 pontos (...) para funcionar.

```php
<?php 
    function makePhrase(...$sentences) {
        $string = '';

        foreach($sentences as $value) {
            $string .= $string.' ';
        }

        return $string;
    }
?>
```

Podemos também separar os dados de um Array e passar como parâmetros de algum função, este operador é conhecido como `Argument Unpacking`,
utilizamos 3 pontos (...) para funcionar;

```php
<?php
    $mailPieses = Array();

    $mailPieses[] = 'to: test@gmail.com';
    $mailPieses[] = 'from: author@gmail.com';
    $mailPieses[] = 'subject: test 1';

    mail(...$mailPieces);
?>
```

##### Return Type Declarations

```php
<?php 
    function getFullName(string $firstname, string $lastname):string {
        return $firstname . ' ' . $lastname;
    }

    echo getFullName('Daniel', 'Simão');
?>
```

### Funções Recursivas



### Funções Anônimas




