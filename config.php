<?php

    /**
     * configura��o do framework
     */
    $config->application_name = 'bCode PHP Framework'; // nome da aplica��o em desenvolvimento

    $config->url_base         = 'http://localhost/bCodePHP'; // url ra�z do sistema

    $config->error_report     = -1; // ativa ou desativa a apresenta��o do erro para o usuario(true ou false)

    $config->index_page       = 'home'; // nome do controlador a ser executado por padr�o

    $config->notfound_page    = 'notfound'; // nome do controlador responsavel pela pagina Not Found

    /**
     * configura��o do banco de dados
     */
    $config->db_driver = 'mysql'; // driver de conex�o com banco de dados

    $config->db_host   = 'localhost'; // endere�o do servidor do banco de dados

    $config->db_name   = 'testedb'; // nome do banco de dados

    $config->db_user   = 'root'; // usu�rio do banco de dados

    $config->db_pass   = ''; // senha do banco de dados

    /**
     * configura��o de rota
     */
    $config->application            = 'application'; // nome do diret�rio que cont�m sua aplica��o

    $config->resources              = 'resources'; // nome do diret�rio que cont�m seus arquivos auxiliares(css/js/imags)

    $config->controllers            = 'controllers'; // nome do diret�rio que cont�m seus controladores

    $config->cores                  = 'cores'; // nome do diret�rio que cont�m suas regras de neg�cios

    $config->models                 = 'models'; // nome do diret�rio que cont�m seus modelos(banco de dados/regras de neg�cio)

    $config->views                  = 'views'; // nome do diret�rio que cont�m seus arquivos front-end(html)

    $config->cascading_style_sheets = 'css'; // nome do diret�rio que cont�m seus arquivos de estilos(css)

    $config->images                 = 'imgs'; // nome do diret�rio que cont�m seus arquivos de imagens(jpg/png/gif/svg/etc)

    $config->javascript             = 'js'; // nome do diret�rio que cont�m seus arquivos de intera��o din�mica(javascript)

    $config->views_compiled         = 'views_c'; // nome do diret�rio que cont�m seus arquivos front-end compilados

    /**
     * configura��o de tipos
     */
    $config->view_type = '.html'; // exten��o dos arquivos views