# Cadastro de Colaboradores ⚡ 

Este projeto é um sistema simples de cadastro de colaboradores utilizando MySQL.

<br>

## 📦 Tabela do Banco de Dados 

```sql
CREATE TABLE colaboradores (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255),
    sobrenome VARCHAR(255),
    email VARCHAR(255),
    formacao VARCHAR(255),
    descricao VARCHAR(255),
    PRIMARY KEY (id)
);
```

<br>

## 🚀 Funcionalidades
- Adicionar um novo colaborador
- Listar todos os colaboradores
- Editar informações de um colaborador
- Excluir um colaborador

<br>

## 💻 Requisitos
- MySQL
- PHP

## Configuração ⚙️
1. Clone o repositório
2. Configure o arquivo `dbConnection.php` com as credenciais do seu banco de dados

<br>

## 🔌 Uso 
- Acesse a página principal para visualizar a lista de colaboradores
- Use o botão "Adicionar Colaborador" para incluir novos registros
- Utilize as opções "Editar" e "Excluir" para gerenciar os colaboradores

<br>

## 👨‍💻 Autor
[@Victor-Lis](https://github.com/Victor-Lis)
