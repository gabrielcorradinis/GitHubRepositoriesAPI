# GitHubRepositoriesAPI
Projeto de Integração de repositórios pessoais do GitHub.

## Pré-requisitos

- Docker instalado. (Caso for Windows, é necessário do WSL 2 instalado e habilitado no Docker).
- Conta na plataforma GitHub e um OAuth Apps cadastrado.

## Para instalar e utilizar o projeto, siga estas etapas:

- Clone do projeto em uma pasta.
- Copiar o arquivo arquivo '.env.example' e renomear um para '.env'.
- Popular com as credenciais no .env, sendo elas: 
  - Dados do OAuth Apps do GitHub (GITHUB_CLIENT_ID,  GITHUB_CLIENT_SECRET, GITHUB_REDIRECT, dados cadastrados no App).
- Para concluir a instalação, utilize os seguintes comandos via terminal:
  - Acesse a pasta `src/`
  - `make up` para subir o container do Docker.
  - `make install` para instalar as dependencias no container.
  - `make permissions` para dar as devidas permissões.
  - `make migrate` para criar a tabela na db.
- Para acessar na Web, utilize o link `localhost:8000/login`.
 
- Para integrar a aplicação, basta logar com sua conta do GitHub e autorizar o App. 
- Após registrado basta selecionar o repositório que gostaria de obter as informações.
