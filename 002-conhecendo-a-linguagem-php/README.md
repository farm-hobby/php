# Sumário

- [Variáveis](#variáveis)
- [Tipos de dados](#tipos-de-dados)
- [Variáveis pre-definidas](#variáveis-pre-definidas)
- [Escopo de variáveis](#escopo-de-variáveis)
- [Operadores](#operadores)
- [Strings](#strings)
- [Include e Require](#include-e-require)

### Variáveis

As variaveis no PHP iniciam com cifrão ($) segue um exemplo

```php
$name = 'Daniel';
```

Utilize camelCase para criar variaveis com palavras compostas

```php
$anoNascimento = 1991;
$nomeCompleto = 'Daniel Simão'
```

O PHP é case sensitive ou seja uma mesma variável com case diferente
são variáveis diferentes

```php
$anoNascimento = 1991;
$AnonascimentO = 1991;
```

Na criação do nome da variável após o cifrão ($), não se pode 
iniciar os nomes das variáveis com números (0-9) ou com caracteres
especiais (\/%-#)

```php
// Errado
$1name = 'João';
$%age = 25;

// Certo
$name1 = 'Daniel';
$age = 28;

// Melhor
$name = 'Daniel';
```

Não utilizar nomes de variáveis definidas pela linguagem,
são conhecidas como **palavras revervadas**

```php
// Palavra reversava

$this
```
Limpando variáveis da memória com `unset`

```php
$name = 'Daniel';
$age = 28;

unset($name, $age);

/* 
    Ocorrerá um erro e o php informará qual variável não foi definida
*/

echo $name
```

Exibindo informações sobre a variável com `var_dump`, mostra o tipo, tamanho e valor contido

```php
$name = 'Daniel'

var_dump($name)

/* 
    string(6) "Daniel"
*/
```

Informa se a variável foi iniciada com `isset`

```php
$name = 'Daniel'

isset($name)

/* 
    true/false
*/
```

### Comentários

Comentário de uma linha

```php
// criação da variável nome

$name = 'Daniel'
```

Comentário multi-linha

```php
/*
    criação da variável nome
*/

$name = 'Daniel'
```

Concatenando strings em variáveis com o simbolo ponto (.)

```php
$name = 'Daniel'
$surname = 'Simão'

echo $name.$surname;
echo $name . $surname;
echo $name.' '.$surname;
echo $name . ' ' . $surname;

/* 
    DanielSimão
    DanielSimão
    Daniel Simão
    Daniel Simão
*/
```

### Tipos de dados



### Variáveis pre-definidas



### Escopo de variáveis



### Operadores



### Strings



### Include e require


