# Sumário

- [Contantes](#contantes)
- [Array Constantes](#array-constantes)

### Contantes

Constante não podem ser alteradas para cria-las utilizamos um método
chamado `define()`, que recebe 2 parametros o nome e o valor, e há um 3º parametro
optional para habilitar o modo case insensitive:

```php
<?php
    define("SERVIDOR", "127.0.0.1");

    echo SERVIDOR;
?>
```

### Array Contantes

Agora na versão 7.x.x do PHP podemos criar Arrays Contantes,
da mesma forma que anteriormente, porém passando um array no valor:

```php
<?php
    define("CONFIG", [
        "127.0.0.1",
        "root",
        "password"
    ]);

    print_r(CONFIG);
?>
```
### Contantes Reservadas pelo PHP

O PHP já vem com uma variedades de contates definidas, como:

```php
<?php
    echo PHP_VERSION;

    echo "<br>";

    echo DIRECTORY_SEPARATOR;
?>
```

