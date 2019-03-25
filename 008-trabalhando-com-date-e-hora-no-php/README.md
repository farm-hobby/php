[Home](../README.md) / Data e Hora

# Sumário

- [Funções Date e a Função Time](#funções-date-e-a-função-time)
- [Definindo a configuração regional com setlocale](#Definindo-a-configuração-regional-com-setlocale)
- [Classe DateTime](#classe-datetime)

### Funções Date e a Função Time

##### date(string $format, int $timestamp) :string

O método date retorna formatos de data e hora formatados:

```php
<?php
    echo date('d/m/Y H:i:s'); // 13/03/2019 22:41:34
?>
```

pode ser que seja necessário configurar a timezone do servidor para retornar
os dados corretos da região

```php
<?php
    date_default_timezone_set('America/Sao_paulo');
?>
```

Podemos passar um segundo parâmetro chamado `$timestamp` para o método date,
onde o mesmo é um integer em segundos que inicia o seu valor a partir de 01/01/1970.
Para pegar o timestamp corrente podemos utilizar o método `time()`.

```php
<?php
    $currentTime = time();

    echo $currentTime;

    echo '<br>';

    echo date('d/m/Y H:i:s', $currentTime);
?>
```

##### time(void) :int

O método time nos retorna o timestamp corrente

```php
<?php
    echo time(); //1552528683
?>
```

##### strtotime(string $format) :int

A função `strtotime` retorna um timestamp equivalente ao formato de data/hora
que lhe é passado por parâmetro

```php
<?php
    $time = strtotime('2030-12-01');

    echo $time;
?>
```

também podemos passar palabras chaves para retonar o dia de amanhã,
o dia de hoje, ou 1 semana depois

```php
<?php
    echo strtotime('now');
    echo '<br>';
    echo strtotime('+1 day');
    echo '<br>';
    echo strtotime('+1 week');
?>
```

### Definindo a configuração regional com setlocale

Para definir as configurações de data e hora locais utilziamos o método
`setlocale` da seguinte forma:

```php
<?php
    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
?>
```

Agora para trabalharmos com data/hora formatadas conforme as configurações locais,
utilizamos o método `strftime`, que recebe uma string com a formatação e um timestampe
em em segundos (igual o strtotime, a diferença esta apenas na string passada
como formato), veja um exemplo:

```php
<?php
    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

    echo strftime('%A %B'); // segunda-feira dezembro
?>
```

### Classe DateTime

Definindo data e hora com DateTime

```php
<?php

    $dt = new DateTime();

    $interval = new DateInterval('P15D');

    echo $dt->format('d/m/Y H:i:s');

    $dt->add($interval);

    echo $dt->format('d/m/Y H:i:s');

?>
```
