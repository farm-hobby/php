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

- Tipos básicos
    - Integer
    - String
    - Float
    - Boolean
- Tipos Compostos
    - Array
    - Object
- Tipos Especiais
    - Resource
    - NULL

#### Tipos Básicos

```php
// String
$name = "Daniel";
$site = 'www.danielsimao.com.br';

// Integer
$ano = 1991;

// Float
$salario = 5500.99;

// Boolean
$bloqueado = false;
```

#### Tipos Básicos

```php
// Array
$frutas = array('abacaxi', 'laranja', 'manga');
var_dump($frutas);

// Object
$nascimento = new DateTime();
var_dump($nascimento);
```

#### Tipos Especiais

```php
// Resource
$arquivo = fopen('002-conhecendo-a-linguagem-php\002-tipos-de-dados.php', 'r');
var_dump($arquivo);

/*
    NULL

    Nulo é a ausência de valor
    Vazio foi iniciado mas sem informação (reservado em memória)
*/
$nulo = NULL;
```

### Variáveis pre-definidas

As variáveis pre-definidas também são conhecidas como **Arrays Super Globais**
ou **Variáveis Super Globais**, como exemplo temos:

- $_GET
- $_POST
- $_SESSION
- $_SERVER

Vamos utilizar de exemplo o Array Super Global **$_GET**, para pegar informações
enviadas pelo usuário:

```php
<?php
    $name = $_GET["name"];
    var_dump($name); // String(4) "Daniel"
?>
```

Todas os dados retornas via GET e POST são strings, então, por exemplo caso quisermos
receber uma informação que deveria ser um inteiro podemos converte-lo da seguinte forma:

```php
<?php
    $age = (int)$_GET["age"];
    var_dump($age); // int(28)
?>
```

Como coletar o script em execução no cliente e o IP da máquina do usuário

```php
<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $script = $_SERVER['SCRIPT_NAME'];

    var_dump($ip, $script);
?>
```

A URL é dividida em várias partes chamadas URI, cada URI tem uma significancia,
mas detalha uma URL de exemplo:

##### URL

https://www.site.com.br?name=Daniel&age=28#origin

##### PROTOCOLO

https

##### DOMINIO

www.site.com.br

##### QUERY STRING

?name=Daniel&age=28

##### HASH

\#origin


### Escopo de variáveis

O escopo de variáveis no PHP funciona da seguinte forma,
algo criar uma função na raiz de forma "global" e depois utilizarmos
a mesma dentro de alguma função, ocorrerá um erro, porque ela não
existe dentro do escopo da função criada, por exemplo:

```php
<?php
$name = "Daniel";

function sayMyName() {
    echo $name; // Ocorrerá um erro Undefined variable: name
}
?>
```

Para conseguirmos utilizar variáveis globais dentro do escopo de
funções, devemos utilizar a palavra reservada **global**

```php
<?php
$name = "Daniel";

function sayMyName() {
    global $name;
    echo $name; // Ocorrerá um erro Undefined variable: name
}
?>
```

### Operadores

##### Operadores de Atribuição

- Atribuição = (Igual)
- Concatenação . (Ponto)
- Composto .= (Ponto e Igual)

##### Operadores Aritméticos

- Adição +
- Subtração -
- Multiplicação *
- Divisão /
- Modulo (Resto) %
- Exponênciação **
- Incremento ++ (++$num ou $num++)
- Decremento -- (--$num ou $num--)

##### Operadores de Comparação

- Maior que >
- Menor que <
- Comparador de igualdade de valor ==
- Comparador de igualdade de valor e tipo ===
- Comparador de diferente de valor !=
- Comparador de diferente de valor e tipo !==

##### Operadores Lógicos

- E && - $a && $b
- OR || - $a || $b
- NOT ! - !$a

##### Novos operadores PHP 7.x.x

- Spaceship $a <=> $b [1, 0, -1]

Caso o primeiro dado for maior retorna 1,
caso seja igual zero,
caso o segundo dado for maior retorna -1

- Null Coalesce $a ?? $b ?? $c

verifica se a primeira variável não é null, senão, retorna o seu valor, caso seja null
vai para a proxima variável e repete o processo.

### Strings

Qual a diferença entre aspas duplas e aspas simples,
nas aspas duplas se colocarmos uma variável dentro da string sem concatenar
o php procura o valor dessa variável e interpola no lugar da váriaveis, por exemplo:

```php
<?php
    $name = 'Daniel';

    $frase = "O $name é foda!";

    echo $frase;

    echo '<br>'; // O Daniel é foda!

    $frase2 = 'O $name é foda!';

    echo $frase2; // O $name é foda!

    echo '<br>';
?>
```

##### Métodos String

- **strtoupper**(String) - Torna a String Maiuscula
- **strtolower**(String) - Torna a String Minúscula
- **ucwords**(String) - Deixa todas as palabras capitalizadas
- **ucfirst**(String) - Deixa apenas a primeira palavra capitalizada
- **str_replate**(SubstringTarget, SubstringToChange, String) - Substitui uma substring em uma string
- **strpos**(String, Substring) - Pega o index de certa substring
- **substr**(String, Index) - Pega uma Substring
- **strlen**(String) - Pega o comprimento da String

### Include e require

#### require

Obriga que o arquivo existe e esteja funcionando corretamente, pois
pode gerar um erro fatal e para a execução do código.

#### include

Tenta funcionar mesmo que o arquivo não exista ou esteja com algum tipo de problema,
também pode trazer arquivos do **include path**, é configurado no php.ini, caso ele
não encontrar um modulo específico ele procura no **include path** configurado.

#### require_once ou include_once

inclui apenas uma vez o arquivo especificado.


- No PHP7 todo erro se torna execeção para ser tratado com try/catch
