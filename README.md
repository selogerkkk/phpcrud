# Documentação do Projeto PHP CRUD

Este é um projeto de aplicativo web simples em PHP chamado CRUD (Create, Read, Update, Delete), que permite a criação, leitura, atualização e exclusão de registros de usuários em um banco de dados MySQL. O projeto é composto por vários arquivos PHP e um arquivo SQL para criar e configurar a tabela de usuários no banco de dados.

![image](https://github.com/selogerkkk/phpcrud/assets/101962124/4d0c0184-6f85-4a84-b4b4-375018ac546d)
![image](https://github.com/selogerkkk/phpcrud/assets/101962124/733ee1c2-bf5e-4b9b-bd9b-0a19bbb3b4e2)


## Estrutura do Projeto

A estrutura do projeto consiste nos seguintes arquivos e diretórios:

```markdown
|-- index.php
|-- config.php
|-- edit-user.php
|-- list-users.php
|-- new-user.php
|-- save-user.php
|-- users.sql
|-- README.md
```

Aqui está uma descrição geral de cada arquivo no projeto:

- `index.php`: A página inicial da aplicação, que serve como ponto de entrada e exibe a barra de navegação.
- `config.php`: O arquivo de configuração que contém informações de conexão com o banco de dados MySQL.
- `edit-user.php`: A página que permite a edição de um usuário existente, exibindo um formulário com os dados do usuário selecionado.
- `list-users.php`: A página que lista todos os usuários cadastrados no banco de dados e fornece opções de edição e exclusão.
- `new-user.php`: A página que exibe um formulário para criar um novo usuário.
- `save-user.php`: O script que lida com a lógica de inserção, atualização e exclusão de usuários no banco de dados com base nas ações do usuário.
- `users.sql`: O arquivo SQL que contém as instruções para criar a tabela de usuários e configurar o ambiente.
- `README.md`: Documentação geral do projeto (este documento).

## Funcionalidades

As funcionalidades do projeto incluem:

### Página Inicial (`index.php`)

- A página inicial exibe a barra de navegação com links para "Home", "Novo usuário" e "Listar usuários".

### Configuração do Banco de Dados (`config.php`)

- O arquivo `config.php` contém as configurações de conexão com o banco de dados MySQL. Certifique-se de configurá-lo corretamente antes de usar o projeto.

### Edição de Usuário (`edit-user.php`)

- A página `edit-user.php` permite a edição de um usuário existente. Ela exibe um formulário com os dados do usuário selecionado para edição, como nome, e-mail, senha e data de nascimento.

### Listagem de Usuários (`list-users.php`)

- A página `list-users.php` exibe uma lista de todos os usuários cadastrados no banco de dados em uma tabela HTML. Ela também fornece opções para editar e excluir cada usuário.

### Criação de Novo Usuário (`new-user.php`)

- A página `new-user.php` exibe um formulário para criar um novo usuário com campos para nome, e-mail, senha e data de nascimento.

### Lógica de Manipulação de Usuários (`save-user.php`)

- O arquivo `save-user.php` lida com a lógica de inserção, atualização e exclusão de usuários no banco de dados com base nas ações do usuário. Ele exibe mensagens de sucesso ou erro conforme necessário.

### Configuração do Banco de Dados (`users.sql`)

- O arquivo `users.sql` contém as instruções SQL para criar a tabela de usuários no banco de dados e configurar o ambiente. Certifique-se de importá-lo em seu sistema de gerenciamento de banco de dados MySQL antes de usar o projeto.

Este é um projeto de exemplo e pode ser personalizado e aprimorado conforme necessário. Certifique-se de implementar medidas de segurança adequadas ao trabalhar com dados de usuário, como validação de entrada e prevenção de SQL injection.
## Configuração do Banco de Dados

O arquivo `config.php` contém as configurações de conexão com o banco de dados. Certifique-se de definir corretamente os seguintes valores:

- `HOST`: Nome do host do servidor MySQL.
- `USER`: Nome de usuário do MySQL.
- `PASS`: Senha do MySQL.
- `BASE`: Nome da base de dados a ser usada.

Certifique-se de que o servidor MySQL esteja em execução e acessível a partir do servidor web onde o aplicativo está sendo executado.

## Uso

1. Inicie um servidor web com suporte a PHP, como Apache ou Nginx.

2. Importe o arquivo `users.sql` em seu sistema de gerenciamento de banco de dados MySQL para criar a tabela de usuários e configurar o ambiente.

3. Certifique-se de que o arquivo `config.php` esteja configurado corretamente com as informações de conexão do banco de dados.

4. Acesse a aplicação abrindo o arquivo `index.php` em seu navegador.

5. Você pode navegar entre as páginas "Home", "Novo usuário" e "Listar usuários" usando a barra de navegação.

6. Use as opções fornecidas nas páginas para criar, editar e excluir usuários.

Lembre-se de que este é um projeto de exemplo e pode ser expandido e aprimorado conforme necessário. Certifique-se de tomar medidas de segurança adequadas ao desenvolver aplicativos web que interagem com bancos de dados, como a validação de entrada do usuário e a proteção contra SQL injection.
