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



### Classe DateTime
