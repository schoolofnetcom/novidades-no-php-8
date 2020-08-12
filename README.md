# novidades-no-php-8
Direto ao ponto para mostrar novidades do PHP 8

Caso queiram rodar a imagem que utilizei para instalar o PHP 8 basta rodar o comando de BUILD, depois rodar o comando RUN passando o volume para o container para compartilhar os arquivos de teste local

Para "buildar" a imagem com o PHP 8 basta rodar o comando abaixo dentro da pasta onde está o arquivo **Dockerfile**:

```
docker build -t php-8 .
```

Depois de buildar você tem que subir o container.

```
docker run -v $(pwd)/src:/var/www --name php-8 -d php-8:latest
```

Para conseguir acessar o terminal do container e testar o PHP 8, basta rodar o comando abaixo.

```
docker exec -it nome_do_container bin/sh
```

Rodando os três comandos acima, conseguiram ter o mesmo ambiente que o meu e testar todos as demais features do PHP 8 versão beta1.

Espero ter ajudado vocês.

Bons estudos!!!
