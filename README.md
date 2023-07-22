**DomPixel Shop: Catalogo de Produtos**

Projeto de leitura, inserção, edição e remoção de produtos para a loja DomPixel

**Para iniciar o projeto faça os seguintes passos:

 1. Verifique se todas as tecnologias necessarias já estão instaladas.
    No projeto utilizamos PHP, Composer (para o Laravel), Docker e MySQL, caso não tenha algumas das tecnologias todas os links para iniciar em cada uma estarão abaixo:
    - PHP: https://www.php.net/downloads.php
    - Composer: https://getcomposer.org/download/
    - Docker: https://www.docker.com/get-started/
 
 2. Após instalar todas as dependencias abra o terminal na pasta raiz do projeto e rode os seguintes comandos:
	- `docker compose up -d`
	-  `php artisan migrate`
	-  `php artisan serve`
 3. Acessar o projeto:
	 O projeto estará rodando em http://localhost:8000.
	 Na URL http://localhost:8080 está disponivel o phpmyadmin do banco de dados.
 4. Funcionalidades dos Produtos:
	 Para acessar as funcionalidades dos produtos acesse http://localhost:8000/products, nessa rota está disponivel a lista de produtos e links para todas as outras funcionalidades.

**
