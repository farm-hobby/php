# Sumário

- [Estruturas Condicionais](#estruturas-condicionais)
- [Switch Case](#switch-case)
- [For](#for)
- [Foreach](#foreach)
- [While](#while)

### Estruturas Condicionais

Para controlar os fluxos e regras de negócio durante a execução do programa,
o PHP fornece em sua syntax um conjunto de declarações de controle de fluxo,
são conhecidos como **if, else, else if**:

```php

<?php

    $idade = 28;

    $MAIORDEIDADE = 18;
    $MAIORIDADE = 60;

    if ($idade >= $MAIORIDADE) {
        echo "Está na flor da idade :D";
    } else if ($idade >= $MAIORDEIDADE) {
        echo "É maior de idade!";
    } else {
        echo "É menor de idade!";
    }
?>

```
Podemos também utilizar uma versão menor do controle de fluxo, é
chamado de operador ternário, sua composição é a seguinte:
condição ? caso verdadeiro retorna um valor : caso falso retorne outro valor,
veja um exemplo:

```php

<?php

    $idade = 28;
    $MAIORDEIDADE = 18;

    echo ($idade >= $MAIORDEIDADE) ? "Maior de idade" : "Menor de idade";

?>

```

### Switch Case

A declaração switch case é utilizada quando sabemos os possíveis valores
e conseguimos ter um fluxo mais controlado, veja a syntax:

```php
<?php
    $diaDaSemana = date('w');

    switch ($diaDaSemana) {
        case 0:
            echo "Domingo";
        break;
        case 1:
            echo "Segunda";
        break;
        case 2:
            echo "Terça";
        break;
        case 3:
            echo "Quarta";
        break;
        case 4:
            echo "Quinta";
        break;
        case 5:
            echo "Sexta";
        break;
        case 6:
            echo "Sábado";
        break;
        default:
            echo "Data inválida!";
        break;
    }
?>
```

### For

O loop for serve para fazermos iterações, seja ela em arrays, range de números, e outros, até satisfazer uma condição:

```php
<?php

    for ($i = 0; $i <= 10; $i += 2) {
        echo 'O número é '.$i;
    }
?>
```

### Foreach

Um loop que existe no PHP para percorrer Arrays e Objetos, possui duas syntaxes, a primeira:

```php
<?php
    $frutas = array('maçã', 'abacaxi', 'laranja');

    foreach($arr as $value) {
        echo 'A fruta se chama '.$value
    }
?>
```

E a segunda:

```php
<?php
    $frutas = array('maçã', 'abacaxi', 'laranja');

    foreach($arr as $key => $value) {
        echo 'A fruta se chama '.$value.' e esta na posição '.$key;
    }
?>
```

### While and Do While

While executa **enquanto** tal condição for true:

```php
<?php
    $number = 10;

    while ($number > 0) {
        echo $number;
        $number--;
    }
?>
```

O Do While avalia as condições da mesma forma que o While, porém ele verifica no final da declaração

```php
<?php
    $number = 10;

    do {
        echo $number;
        $number--;
    } ($number > 0);
?>
```
