# Code challenge para Desenvolvedor Backend
## CRUD de produtos

### Executar o projeto
* Após realizar o clone do projeto do repositório do GitHub, ainda na pasta raiz, executar o comando `docker-compose build` para baixar as *docker-images* do projeto;
* Em seguida, executar o comando `docker-composer up -d` para subir os containers;
* Assim que concluída a operação anterior, acesse a pasta `src` com o comando `cd src` e instale todas as dependências do projeto com o comando `composer install`;
* Será necessário também criar a chave de autenticação do Laravel, para isso execute `php artisan key:generate`;
* Ainda dentro da diretório `src`, criar uma cópia do arquivo `.env.example` com o nome de `.env` e neste arquivo insira as configurações da conexão com o banco de dados nas variáveis globais;
* Agora, podemos criar as tabelas do banco de dados do projeto utilizando o comando `php artisan migrate`;
* Por fim, execute `php artisan serve` para subir o servidor PHP e pronto, a aplicação estará disponível.

Ao acessar seu navegador com a url `localhost:8000`, deve ser exibida a tela inicial do projeto Laravel.

Com o Postman é possível consumir os dados da API por meio das seguintes requests:
#### Cadastrar Produto
  - Method: `POST` 
  - URL: `localhost:8000/api/products`
  - Body: `{
             "name": "XXXX",
             "description": "XXXX",
             "brand": "XXXX",
             "category": "XXXX",
             "price": "0.00",
             "color": "XXXX"
           }`

#### Buscar Produto pelo `id`
  - Method: `GET`
  - URL: `localhost:8000/api/product/{id}`

#### Buscar todos Produtos
  - Methos: `GET`
  - URL: `localhost:8000/api/products`

#### Atualizar Produto
  - Method: `PUT` 
  - URL: `localhost:8000/api/product/{id}`

#### Excluir Produto
  - Method: DELETE
  - URL `localhost:8000/api/product/{id}`


