# SQL Injection
Esta aplicação foi feita atendendo os requisitos da atividade avaliativa da matéria de Banco de Dados 2 do curso de Ciência da Computação – UNIFEI.
#### Dupla:
**Flavio Mota Gomes -- 2018005379**

**Rafael Antunes Vieira -- 2018000980**

## Descrição dos arquivos
- ### index.php
   Contem o código em HTML, responsavel por capturar o login e senha do usuario e passar para o arquivo login.php.
- ### login.php
   Contem o código em PHP, responsavel por fazer a conexão com o banco.
- ### Style.css
   Contem o código em CSS, responsavel pelo estilo de cores, imagens e fonte da pagina da aplicação.
- ### Style.css
   Arquivo com o banco de dados do PostgreSQL, disponibilizado para restaurar e testar a aplicação.
   
## Como Funciona

O SQL Injection consiste em uma técnica de injeção de código com capacidade de acessar ao banco de dados, o que representa um risco. Ocorre, geralmente, durante a entrada de um usuário. Quando solicita-se ao usuário a entrada no sistema, como um nome/senha, o usuário fornece, em vez disso, uma instrução em SQL que será executada no banco de dados sem o conhecimento do administrador do banco.

#(FLAVIO EXPLCIA AQUI)
   
## Como Executar a aplicação:  

#### 1. Primeiramente precisamos restaurar o arquivo database ``` SQLInjection.backup``` no servidor do PostgreSQL.

#### 2. Após a configuração do PostgreSQL, abra o arquivo ```login.php``` e na linha **17** coloque o host e a porta do servidor. Na linha **18** coloque o usuário e na linha **19** coloque a senha de acesso do servidor onde você restaurou o databese.

IMAGEM 1

#### 3. Após ter mostrado o caminho do PostgreSQL para a aplicação, vamos instalar o servidor ``` APACHE ``` para executar a aplicação. Recomendamos instalar a ferramenta ```XAMPP``` para ter acesso ao servidor;

IMAGEM 2

#### 4. Agora, iremos configurar o servidor e colocar os arquivos dentro dele para executar. Procure pelo arquivo ```php.ini``` na pasta do ```XAMPP```. Na instalação padrão do sistema Windows, ela se encontra em ```C:\xampp\php```.

IMAGEM 3

#### 5. Abra com o bloco de notas e procure pelo comando ```;extension=pgsql``` e retire o ```;``` e salve o arquivo.

IMAGEM 4

#### 6. Copie os arquivos ```index.php```, ```Style.css```, ```login.php``` e a pasta ```image``` para a pasta chamada ```htdocs``` que se encontra dentro da pasta onde está instalado o ```XAMPP```. Na instalação padrão do sistema Windows, ela se encontra em ``` C:\xampp\htdocs```.


#### 7. Para finalizar, ligue o servidor APACHE no XAMPP:

IMAGEM 5

#### 8. Após ligar o servidor, abra o navegar e digite o endereço http://localhost/index.php

IMAGEM 6

#### Pronto! Agora pode se replicar a falha SQL Ingection conforme explicado no tópico abaixo **Como Funciona**.

   


