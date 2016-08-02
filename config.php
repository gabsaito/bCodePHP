<?php

    /**
     * configuração do framework
     */
    $config->application_name = 'b.CodePHP Framework'; // nome da aplicação em desenvolvimento

    $config->url_base         = 'http://localhost/bcodephp'; // url raíz do sistema

    $config->error_report     = -1; // ativa ou desativa a apresentação do erro para o usuario(true ou false)

    $config->index_page       = 'home'; // nome do controlador a ser executado por padrão

    $config->notfound_page    = 'notfound'; // nome do controlador responsavel pela pagina Not Found

    /**
     * configuração do banco de dados
     */
    $config->db_driver = 'mysql'; // driver de conexão com banco de dados

    $config->db_host   = 'localhost'; // endereço do servidor do banco de dados

    $config->db_name   = 'testedb'; // nome do banco de dados

    $config->db_user   = 'root'; // usuário do banco de dados

    $config->db_pass   = ''; // senha do banco de dados

    /**
     * configuração de rota
     */
    $config->application            = 'application'; // nome do diretório que contém sua aplicação

    $config->resources              = 'resources'; // nome do diretório que contém seus arquivos auxiliares(css/js/imags)

    $config->controllers            = 'controllers'; // nome do diretório que contém seus controladores

    $config->cores                  = 'cores'; // nome do diretório que contém suas regras de negócios

    $config->models                 = 'models'; // nome do diretório que contém seus modelos(banco de dados/regras de negócio)

    $config->views                  = 'views'; // nome do diretório que contém seus arquivos front-end(html)

    $config->cascading_style_sheets = 'css'; // nome do diretório que contém seus arquivos de estilos(css)

    $config->images                 = 'imgs'; // nome do diretório que contém seus arquivos de imagens(jpg/png/gif/svg/etc)

    $config->javascript             = 'js'; // nome do diretório que contém seus arquivos de interação dinâmica(javascript)