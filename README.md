# docker-course-examples
Mini curso de Docker para auxiliar no entendimento inicial da tecnologia.

## Dependencias
Para rodar a aplicação, é necessário ter instalado em sua máquina os programas abaixo:

> docker

> docker-compose

Para instalar basta seguir o passo à passo disponível no [site](https://docs.docker.com/install/).

## App1
Nesta primeira seção temos o Dockerfile mínimo, especificando um container para mostrar apenas a versão do `php` na qual está rodando.
Para gerar o container basta usar o seguinte comando(dentro do diretório):

```docker build -t app1 .``` 

E para executar o container, basta utilizar:

```docker run -it app1```

## App2
Nesta aplicação iremos subir um container e iniciar um servidor _web_ do próprio `php`.

Assim como na seção do App1, iremos executar o _build_ e depois o _run_, sucessivamente, como abaixo.

```docker build -t app2 .```

```docker run -dit -p "8080:8090" app2```

Para checar o resultado, basta ir no seu navegador e acessar: `http://0.0.0.0:8080`.

## App3
Nesta secção, iremos utilizar o `docker-compose` ao invés dos comandos `docker` convencionais.

Para gerar o build da aplicação, basta usar o seguinte comando(dentro do diretório):

```docker-compose build``` 

Para rodar a aplicação, basta usar o comando:

```docker-compose up -d```

Para checar se as aplicaçoes estão rodando corretamente, utiliza-se o seguinte e-mail:

```docker ps```

Para popular a base de dados, basta acessar o banco e ingerir os dados disponíveis em `db/dump.sql`, com os seguintes comandos:

```docker exec db bash```

```mysql -uroot -proot```

Para testar o programa, acesse `http://0.0.0.0:8081` e visualizar o resultado.

## Db
Assim como no App3, vamos usar os mesmos comandos do `docker-compose` e subir dois containers de bases de dados.

```docker-compose build```

```docker-compose up -d```

Para checar os resultados, basta ver os processos criados no `docker`, usando o comando abaixo.

```docker ps```
