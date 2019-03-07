
#### Sumario

- [História do PHP](#história-do-php)
- [A arquitetura Cliente-Servidor](#a-arquitetura-cliente-servidor)

# História do PHP

- Rasmus Lerdorf (Criador do PHP)
- Inicialmente PHP significava: Personal Home Page
- 1994 o PHP surgiu
- Andi Gutmans e Zeev Suraski (Co-Fundadores da ZEND e Israelenses)
- A ZEND reescreveu o PHP desde a versão 5.0 (ZEND Engine 2.0)
- 1998 10% dos servidores da web tinham o PHP 3.0
- 2000 PHP versão 4.0
- 2004 PHP versão 5.3
- versões mais conhecidas: 5.3, 5.4, 5.6
- versão atual 7.x.x
- ZEND possui certificação PHP

# A arquitetura Cliente-Servidor

1) O Cliente acessa um endereço de um site
2) O Cliente (Browser) faz uma Requisição (Request) para um Servidor
3) O Servidor verifica as permissões
4) O Servidor devolve uma Resposta (Response)
5) O Cliente (Browser) recebe a Resposta (Response)

### Esquema

**Requisição**: `Cliente ----- Request -----> Servidor`

**Resposta**: `Cliente <---- Response ----- Servidor`

### Portas Web e Banco de dados:

- Portas reservadas para servidor web são: 80/443
- Porta para MySQL 3306 com permissão do Firewall
