# Arquivo do Projeto

/meu-site-ebooks
│── /public            # CSS, JS, imagens  
│── /config            # Configurações do banco de dados  
│── /includes          # Cabeçalho, rodapé  
│── /views             # Páginas visuais  
│   ├── index.php      # Página inicial  
│   ├── loja.php       # Página da loja  
│   ├── ebook.php      # Página individual do e-book  
│   ├── login.php      # Formulário de login  
│   ├── cadastro.php   # Formulário de cadastro  
│   ├── obrigado.php   # Pós-compra  
│   ├── contato.php    # Página de contato
|   |── dashboard.php
│── /controllers       # Processamento das ações  
│   ├── authController.php  # Processa login e cadastro  
│── /models            # Comunicação com banco de dados  
│   ├── User.php       # Classe para gerenciar usuários  
│── index.php          # Arquivo principal  
│── composer.json      # Configuração do Composer  


# Comands cmd
composer init
composer require vlucas/phpdotenv

