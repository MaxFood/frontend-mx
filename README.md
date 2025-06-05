
# 🍔 MAX FOOD - Frontend

![Laravel](https://img.shields.io/badge/Laravel-Framework-red)
![PHP](https://img.shields.io/badge/PHP-8%2B-blue)


> MAX FOOD é uma plataforma digital completa para pedidos de comida online, desenvolvida com foco na experiência do usuário, tanto para clientes quanto para restaurantes parceiros.

Inspirado em apps como iFood e Uber Eats, o MAX FOOD permite que usuários explorem restaurantes, façam pedidos personalizados, acompanhem o status da entrega em tempo real e realizem pagamentos de forma rápida e segura..


## 🚀 Tecnologias utilizadas

- **PHP 8+**
- **Laravel** (substitua pela versão exata ex: `v10.x`)
- **Blade** (template engine do Laravel)
- **Laravel Mix** ou **Vite**
- **HTML5**, **CSS3**, **JavaScript**
- **Bootstrap** ou outro framework CSS

---

## 📦 Instalação

Clone o repositório e instale as dependências:

```bash
git clone https://github.com/MaxFood/frontend-mx.git
cd max-food
composer install
```


Rode as migrations para criar as tabelas no banco de dados:

```bash
php artisan migrate
```


Configure o ambiente:

```bash
cp .env.example .env
php artisan key:generate
```

Rode o servidor:

```bash
php artisan serve
```

Acesse em: [http://localhost:4200](http://localhost:4200)

---

## 🔗 Integração com o Backend

Este projeto se comunica com o backend por meio de **rotas web** e/ou **API RESTful**. Certifique-se de que o backend esteja rodando corretamente e configurado para aceitar as requisições do frontend.

### Configuração de URL base (se estiver usando API separada)

Edite o arquivo `.env` e adicione:

```env
API_URL=http://localhost:8001/api
```

---

---

## 📁 Estrutura básica

```
MAX-FOOD/
├── app/ → Código principal da aplicação (Models, Controllers, etc.)
│ └── Http/
│ └── Controllers/ → Controladores da aplicação
├── bootstrap/ → Arquivo de inicialização do framework
├── config/ → Arquivos de configuração do Laravel
├── database/ → Migrations, seeders e factories
│ └── migrations/ → Controle de estrutura do banco de dados
├── public/ → Pasta pública (acesso web)
│   ├── css/
│   ├── fonts/
│   └── images/
├── resources/
│ ├── views/ → Arquivos Blade (layouts e páginas)
├── routes/
│ └── web.php → Rotas da aplicação (web)
├── .env → Arquivo de ambiente (configurações sensíveis)
├── artisan → CLI do Laravel
├── composer.json → Gerenciador de dependências PHP
└── README.md → Documentação do projeto
```


