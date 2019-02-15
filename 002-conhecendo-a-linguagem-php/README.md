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

    $1nome = 'João';
    $%idade = 25;

    // Certo

    $nome1 = 'Daniel';
    $idade = 28;

    // Melhor
    $nome = 'Daniel';

```

Não utilizar nomes de variáveis definidas pela linguagem,
são conhecidas como **palavras revervadas**

```php
    // Palavra reversava
    $this

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

### Tipos de dados



### Variáveis pre-definidas



### Escopo de variáveis



### Operadores



### Strings



### Include e require


