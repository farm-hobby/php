[Home](../README.md) / Arrays

# Sumário

- [Arrays em PHP](#arrays-em-php)
- [JSON](#json)

### Array em PHP

Como criamos um Array:

```php
<?php
    $frutas = array('laranja', 'pera', 'maçã');

    print_r($frutas);
?>
```

Utilizando o método `print_r($frutas)` conseguimos ver as informações
do array de forma legível, ou de qualquer variável

```php
<?php
    print_r($frutas);

    // Array ( [0] => laranja [1] => maçã [2] => pêra )
?>
```

Utilizando o método `end($frutas)` o ponteiro do array é levado para
a última posição do array:

```php
<?php

    $frutas = array('laranja', 'pera', 'maçã');

    echo end($frutas);

    // 'maçã'
?>
```

##### Métodos para tratar Arrays

- array_push() - insere um novo item no final do array
- $array[] = 'value' - funciona como um push tambem

##### Arrays associativos

```php
<?php
    $people = array(
        'Brad'  => 35,
        'Dan'   => 28,
        'Ju'    => 28
    );

    print_r($people);
?>
```

### JSON

- json-encode: transforma um array em uma string JSON
- json-decode: transform um JSON em um array com objetos, e caso queira que esses objetos se tornem arrays basta passar `true` como segundo parametro

```php
<?php

    $cars = array(
        array('Fiat' => 1991),
        array('Wolksvagem' => 2000),
        array('Hiunday' => 2018),
    );

    $json = json_encode($cars);

    echo $json;

    echo '<br>';

    print_r(json_decode($json, true));

?>
```
