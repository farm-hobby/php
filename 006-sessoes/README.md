# Sumário

- [Criando e entendendo sessões](#criando-e-entendendo-sessões)
- [ID de sessões](#id-de-sessões)
- [Funções para sessões](#funções-para-sessões)

### Criando e entendendo sessões

Diferença entre variaveis locais e de sessão:

##### Variáveis locais:

- Podem ser utilizadas dentro do próprio módulo em que foram criadas;
- Podemos acessar variáveis de módulos importados;

##### Variáveis de sessão:

- São vistas por todo o código enquanto o usuário estiver conectado no nosso site, se parecem com variáveis super globais;

##### Iniciando sessões

é necessário iniciar as sessões através de um método chamado `session_start()`,
toda vez que for trabalhar com sessões é necessário fazer uso desse método;

##### Configurando sessões

As sessões são como arrays super globais, então elas tem a mesma notação
que `$_GET` e `$_SERVER`, ou seja, utilizaremos a syntax: `$_SESSION`;

##### Criando arquivo de configuração

Pdemos criar um arquivo de configuração chamado `config.php` para não termos que reescrever
a em todo arquivo que iremos utilziar sessions.

##### Apagando variáveis de sessão

Para apagar as varáveis de sessões temos 2 métodos com funções diferentes:

- O método `session_unset()` sem indicar uma variável apaga todas as variáveis configuradas e mantêm o usuário ativo;
- O método `unset($_SESSION["nome"])` apaga a variável indicada;
- O método `session_destroy()` destroy as variáveis e remove o usuário da sessão;

### ID de sessões

##### visualizar ID da sessão

Cada sessão gera um ID para identificar essa sessão criada no servidor, para
saber esse id use a método `session_id()`;

##### Criando novo ID de sessão

Para criar uma nova session ID podemos utilizar o método `session_regenerate_id()`;

##### Para recuperar uma sessão

Para recuperar uma sessão é necessário saber o id da sessão desejada e passar como
parâmetro na função `session_id(brg5nhg97dium24ehhk9itqgh9)`

### Funções para sessões

Para ter acesso as funções que tratam as sessões devemos acessar http://php.net/manual/pt_BR/ref.session.php
