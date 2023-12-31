**DomPixel Shop: Catalogo de Produtos**

Projeto de leitura, inserção, edição e remoção de produtos para a loja DomPixel

**Para iniciar o projeto faça os seguintes passos:**

 1. Verifique se todas as tecnologias necessarias já estão instaladas.
    No projeto utilizamos PHP, Composer (para o Laravel), Docker e MySQL, caso não tenha algumas das tecnologias todas os links para iniciar em cada uma estarão abaixo:
    - PHP: https://www.php.net/downloads.php
    - Composer: https://getcomposer.org/download/
    - Docker: https://www.docker.com/get-started/
 
 2. Após instalar todas as dependencias abra o projeto:
    Crie um arquivo chamado .env e preencha as seguintes variaveis para configurar o banco de dados:
        `DB_CONNECTION=mysql
         DB_HOST=127.0.0.1
         DB_PORT=3306
         DB_DATABASE=dompixel
         DB_USERNAME=admin
         DB_PASSWORD=admin`
    
    Após configurar o banco de dados podemos iniciar o projeto utilizando os seguintes comandos no terminal:
	    - `docker compose up -d`
        -  `composer install`
	    -  `php artisan migrate`
	    -  `php artisan serve`
 4. Acessar o projeto:
	 O projeto estará rodando em http://localhost:8000.
	 Na URL http://localhost:8080 está disponivel o phpmyadmin do banco de dados.
 5. Funcionalidades dos Produtos:
	 Para acessar as funcionalidades dos produtos acesse http://localhost:8000/products, nessa rota está disponivel a lista de produtos e links para todas as outras funcionalidades.

 6. Observações:
    Copie o arquivo .env.example e crie um .env com o mesmo conteudo, só troque os dados do banco de dados.
    Caso use o banco de dados do docker-compose, pode ser que o MySQL demore alguns minutos para subir, então o comando `php artisan migrate` não funcionara. Aguarde alguns minutos e tente novamente.
