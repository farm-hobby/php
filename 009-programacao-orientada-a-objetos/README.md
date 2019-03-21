# Sumário

- [Conceitos de OOP](#conceitos-de-oop)
- [Criando um a Classe](#criando-um-a-classe)
- [Atributos e Métodos](#atributos-e-métodos)
- [Métodos Estáticos](#métodos-estáticos)
- [Métodos Mágicos](#métodos-mágicos)
- [Encapsulamento](#encapsulamento)
- [Herança](#herança)
- [Interface](#interface)
- [Classe Abstrata](#classe-abstrata)
- [Polimorfismo](#polimorfismo)
- [Incluindo classes com Autoload](#incluindo-classes-com-autoload)
- [Usando Namespace](#usando-namespace)

### Conceitos de OOP

Uma `Classe` é um conjunto de `atributos` e `métodos`, a partir da **Classe**
**instanciamos objetos** através da palavra chave **new**, usaremos a **Classe** como **modelo** para criar a **estrutura** desses **objetos**.

### Criando um a Classe

```php
<?php

    class Person {

        public $name;

        public function talk() {
            return 'My name\'s '.$this->name;
        }
    }

    $me = new Person();
    $me->name = 'Daniel Simão';
    echo $me->talk();
?>
```

### Atributos e Métodos

Criando atributos privados com a palavra chave `private`, onde os mesmos não podem ser acessados diretamente do objeto de forma pública, somente através de métodos que chamados de Getters/Setters,
utilizamos a conversão de tipos em alguns getters por exemplo `:int`

```php
<?php

    class Car {

        private $model;
        private $motor;
        private $year;

        public function getModel() {
            return $this->model;
        }

        public function setModel($model) {
            $this->model = $model;
        }

        public function getMotor():float {
            return $this->motor;
        }

        public function setMotor($motor) {
            $this->motor = $motor;
        }

        public function getYear():int {
            return $this->year;
        }

        public function setYear($year) {
            $this->year = $year;
        }

        public function display() {
            return [
                "model" => $this->model,
                "motor" => $this->motor,
                "year"  => $this->year
            ];
        }
    }

?>
```

Instanciando um objeto para visualizar o uso dos métodos

```php
<?php
    $gol = new Car();

    $gol->setModel('Gol GT');
    $gol->setMotor('1.6');
    $gol->setYear('2018');

    print_r($gol->display());
?>
```

### Métodos Estáticos

Podemos acessar métodos estáticos diretamente da Classe, sem precisar
instanciar um objeto para invocar tais métodos

```php
<?php

    class Document {

        private $number;

        public function getNumber() {
            return $this->number;
        }

        public function setNumber($number) {
            $isValid = Document::validateCPF($number);

            if (!$isValid) {
                throw new Exception("Please, informs a valid CPF!");
            }

            $this->number = $number;
        }

        public static function validateCPF($cpf):bool {

            if(empty($cpf)) {
                return false;
            }

            $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

            $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);


            if (strlen($cpf) != 11) {
                echo "length";
                return false;
            } else if ($cpf == '00000000000' ||
                $cpf == '11111111111' ||
                $cpf == '22222222222' ||
                $cpf == '33333333333' ||
                $cpf == '44444444444' ||
                $cpf == '55555555555' ||
                $cpf == '66666666666' ||
                $cpf == '77777777777' ||
                $cpf == '88888888888' ||
                $cpf == '99999999999') {
                return false;

            } else {

                for ($t = 9; $t < 11; $t++) {

                    for ($d = 0, $c = 0; $c < $t; $c++) {
                        $d += $cpf{$c} * (($t + 1) - $c);
                    }
                    $d = ((10 * $d) % 11) % 10;
                    if ($cpf{$c} != $d) {
                        return false;
                    }
                }

                return true;
            }
        }
    }

    $cpf = new Document();
    $cpf->setNumber("87867147241");

    var_dump($cpf->getNumber());
?>
```

### Métodos Mágicos

São uma espécie de hooks que executam em determinados
momentos do ciclo de vida de um objeto

##### __construct

É chamado quando o objeto é instanciado com a keyword `new`:

```php
<?php

    class Address {

        private $place;
        private $number;
        private $city;

        public function __construct($place, $number, $city) {
            $this->place = $place;
            $this->number = $number;
            $this->city = $city;
        }
    }

    $address = new Address('Av. Francisco Rodrigues Filho', '2011', 'Mogi das Cruzes');

    var_dump($address);

?>
```

###### __destruct

É chamado quando o objeto é limpado da memória através de `unset()`, ou
o fim de execução de algum script não reutilizavél, pode ser utilizado para
limpar variáveis da memória ou por exemplo se desconectar do banco de dados

```php
<?php

    class Address {

        private $place;
        private $number;
        private $city;

        public function __construct($place, $number, $city) {
            $this->place = $place;
            $this->number = $number;
            $this->city = $city;
        }

        public function __destruct() {
            var_dump('DESTROY');
        }
    }

    $address = new Address('Av. Francisco Rodrigues Filho', '2011', 'Mogi das Cruzes');

    var_dump($address);

    unset($address);

?>
```

##### __toString

É a representação em String do objeto quando executado em um contexto que é necessário
uma string, por exemplo utilizando após o `echo`;

```php
<?php

    class Address {

        private $place;
        private $number;
        private $city;

        public function __construct($place, $number, $city) {
            $this->place = $place;
            $this->number = $number;
            $this->city = $city;
        }

        public function __destruct() {
            var_dump('DESTROY');
        }

        public function __toString() {
            return $this->place . ', ' . $this->place . ', ' . $this->place;
        }
    }

    $address = new Address('Av. Francisco Rodrigues Filho', '2011', 'Mogi das Cruzes');

    var_dump($address);

    echo '<br>';

    echo $address;

    echo '<br>';

    unset($address);

?>
```

### Encapsulamento

O Encapsulamento protege os atributos e métodos de serem modificados/acessados, organizando quem pode acessar
esses atributos/métodos.

```php
<?php

    class Person {

        public $name = 'My Name';
        protected $year = 45;
        private $password = 'ahdb58#$%';

        public getInfo() {
            echo $this->name . '<br>';
            echo $this->year . '<br>';
            echo $this->password . '<br>';
        }
    }

    $me = new Person();

    echo $me->name . '<br>';
    echo $me->year . '<br>'; // Uncaught Error: Cannot access protected property Person::$year
    echo $me->password . '<br>'; // Uncaught Error: Cannot access private property Person::$password

?>
```

Utilizando com Herança não temos acesso a propriedades e métodos definidos como `private`, apenas como
`public` e `protected`.

```php
<?php

    class Person {

        public $name = 'My Name';
        protected $year = 45;
        private $password = 'ahdb58#$%';

        public getInfo() {
            echo $this->name . '<br>';
            echo $this->year . '<br>';
            echo $this->password . '<br>';
        }
    }

    class Developer extends Person {
        
        public getInfo() {
            echo $this->name . '<br>';
            echo $this->year . '<br>';
            echo $this->password . '<br>';
        }
    }

    $me => new Developer(); // Undefined Property Developer::$password

?>
```

##### Public

Podemos acessar atributos/métodos definidos como `public` através de objetos, internamente na Classe e através de Herança

##### Protected

Podemos acessar atributos/métodos definidos como `protected` internamente na Classe e através de Herança, mas NÃO diretamente pelo objeto

##### Private

Podemos acessar atributos/métodos definidos como `private` SOMENTE internamente na Classe;


### Herança

A Herança é quando uma Classe herda atributos e métodos de outra Classe

```php
<?php

    class Document {
        
        private $number;

        public function getNumber():int {
            return $this->number;
        }

        public function setNumber($number) {
            $this->number = (int)$number;
        }
    }

    class CPF  extends Document {

        public function validate():bool {
            return gettype($this->getNumber()) === 'integer';
        }
    }

    $me = new CPF();

    $me->setNumber('39084495888');
    var_dump($me->validate());
    var_dump($me->getNumber());

?>
```

##### Métodos Auxiliares

- `get_class()` — Retorna o nome da classe de um objeto
- `get_parent_class()` - Recupera o nome da classe pai para o objeto ou classe
- `gettype()` - Obtém o tipo da variável
- `is_subclass_of()` - Verifica se o objeto tem esta classe como uma de suas classes pai

### Interface

A Interface determina quais métodos uma Classe obrigatóriamente deve implementar,
aqui não informamos o que esses métodos devem fazer, apenas informar qual o método, 
seus parâmetros e encapsulamento.

Então a `interface` na organização do código, integrar equipes e principalmente
na integração de APIs de código de 3ºs.

```php
<?php

    interface Vehicle {
        public function accelerate($velocity);
        public function brake($velocity);
        public function toggleGear($gear);
    }

    class Civic implements Vehicle {

    }

    $car = new Civic();

?>
```

### Classe Abstrata

A classe Abstrata define métodos, seus encapsulamentos e suas implementações de código, 
definimos uma classe abstrada com a palavra chave `abstract` antes da palabra `class`.

Está Classe não pode ser instânciada, somente Extendida.

```php
<?php

    interface Vehicle {
        public function accelerate($velocity);
        public function brake($velocity);
        public function changeGear($gear);
    }

    abstract class Automovel implements Vehicle {

        public function accelerate($velocity) {
            echo 'The vehicle accelerated to the speed of ' . $velocity . 'km/h.';
        }

        public function brake($velocity) {
            echo 'The vehicle braked to the speed of ' . $velocity . 'km/h.';
        }

        public function changeGear($gear) {
            echo 'The vehicle changed to the ' . $gear . ' gear.';
        }

    }

    class Fiat extends Automovel {

        public function Trunk(bool $state = false) {
            $trunkState = $state ? 'open' : 'close';
            echo 'The vehicle trunk is ' . $trunkState . '!';
        }

    }

    $car = new Fiat();

    $car->accelerate(150);
    echo '<br>';
    $car->trunk();

?>
```

### Polimorfismo

Polimorfismo é quando herdamos um método da classe pai, porém a reimplementamos
para executar de uma forma diferente ou retornar um valor customizado para
a nova classe em especifico.

```php
<?php

    abstract class Animal {
        public function talk() {
            return 'talk';
        }        

        public function move() {
            return 'move';
        }        
    }

    class Cat extends Animal {
        public function talk() {
            return 'meow';
        }
    }

    class Dog extends Animal {
        public function talk() {
            return 'bark';
        }
    }

    class Bird extends Animal {
        public function talk() {
            return 'sing';
        }

        public function move() {
            return 'fly and ' . parent::move();
        }
    }

    $cat = new Cat();
    $dog = new Dog();
    $bird = new Bird();

    
    echo $cat->talk() . '<br>';
    echo $cat->move() . '<br>';
    
    echo '---------------------<br>';
    
    echo $dog->talk() . '<br>';
    echo $dog->move() . '<br>';
    
    echo '---------------------<br>';

    echo $bird->talk() . '<br>';
    echo $bird->move() . '<br>';

?>
```

### Incluindo classes com Autoload

texto

```php
<?php

?>
```

### Usando Namespace

texto

```php
<?php

?>
```
