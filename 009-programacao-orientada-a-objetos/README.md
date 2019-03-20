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

texto

```php
<?php

?>
```

### Encapsulamento

texto

```php
<?php

?>
```

### Herança

texto

```php
<?php

?>
```

### Interface

texto

```php
<?php

?>
```

### Classe Abstrata

texto

```php
<?php

?>
```

### Polimorfismo

texto

```php
<?php

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
