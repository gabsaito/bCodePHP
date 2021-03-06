<?php

    /**
     * inclusão do arquivo de configuração de constantes
     */
    $arquivoConfig = 'config.php';
    if(!file_exists($arquivoConfig))
    {
        exit('Atenção! O arquivo "config.php" não foi encontrado, por favor reinstale o bCode PHP - Framework.');
    }

    $config = new \stdClass();
    require_once($arquivoConfig);

    /**
     * controlador de error do sistema
     */
    error_reporting($config->error_report);

    define('DS', DIRECTORY_SEPARATOR);

    /**
     * constantes do framework
     */
    define('NAME', $config->application_name);
    define('URL_BASE', $config->url_base . DS);
    define('DEFAULT_INDEX', $config->index_page);
    define('NOTFOUND_PAGE', $config->notfound_page);

    /**
     * constantes para o banco de dados
     */
    define('DB_DRIVER', $config->db_driver);
    define('DB_HOST', $config->db_host);
    define('DB_NAME', $config->db_name);
    define('DB_USER', $config->db_user);
    define('DB_PASS', $config->db_pass);

    /**
     * constantes de rotas
     */
    define('ROOT_PATH', dirname(__FILE__) . DS);
    define('SYSTEM_PATH', 'system' . DS);
    define('APP_PATH', $config->application . DS);
    define('RESOURCES_PATH', $config->resources . DS);

    /* defines application */
    define('CONTROLLERS_PATH', APP_PATH . $config->controllers . DS);
    define('CORES_PATH', APP_PATH . $config->cores . DS);
    define('MODELS_PATH', APP_PATH . $config->models . DS);
    define('VIEWS_PATH', APP_PATH . $config->views . DS);

    /* defines resources */
    define('CSS_PATH', RESOURCES_PATH . $config->cascading_style_sheets . DS);
    define('IMGS_PATH', RESOURCES_PATH . $config->images . DS);
    define('JS_PATH', RESOURCES_PATH . $config->javascript . DS);

    /**
     * Verificar instalação do composer
     */
    $autoload_composer = 'vendor' . DS . 'autoload.php';
    if(!file_exists($autoload_composer))
    {
        exit('Atenção! O composer ainda não foi instalado.');
    }

    /**
     * Faz a inclusão do autoload composer
     */
    require_once($autoload_composer);

    /**
     * Inicia o programa
     */
    $bCode = new \system\core\BCodePHP();
    $bCode->start();

