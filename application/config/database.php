<?php defined('BASEPATH') OR exit('No direct script access allowed');

    $active_group  = 'cris';
    $query_builder = TRUE;

    $db['cris'] = array(
        'dsn'          => '',
        'hostname'     => 'localhost',
        'username'     => 'root',
        'password'     => 'root',
        'database'     => 'db_cms',
        'dbdriver'     => 'mysqli',
        'dbprefix'     => '',
        'pconnect'     => FALSE,
        'db_debug'     => (ENVIRONMENT !== 'production'),
        'cache_on'     => FALSE,
        'cachedir'     => '',
        'char_set'     => 'utf8',
        'dbcollat'     => 'utf8_general_ci',
        'swap_pre'     => '',
        'encrypt'      => FALSE,
        'compress'     => FALSE,
        'stricton'     => FALSE,
        'failover'     => array(),
        'save_queries' => TRUE
    );

    $db['producao'] = array(
        'dsn'          => '',
        'hostname'     => 'localhost',
        'username'     => 'loremipsum_root',
        'password'     => '$_aB3)i#9pWX',
        'database'     => 'loremipsum_site',
        'dbdriver'     => 'mysqli',
        'dbprefix'     => '',
        'pconnect'     => FALSE,
        'db_debug'     => (ENVIRONMENT !== 'production'),
        'cache_on'     => FALSE,
        'cachedir'     => '',
        'char_set'     => 'utf8',
        'dbcollat'     => 'utf8_general_ci',
        'swap_pre'     => '',
        'encrypt'      => FALSE,
        'compress'     => FALSE,
        'stricton'     => FALSE,
        'failover'     => array(),
        'save_queries' => TRUE
    );
