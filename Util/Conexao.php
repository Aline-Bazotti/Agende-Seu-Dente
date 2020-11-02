<?php

final class Conexao
{
    private static $instance = null;
    private function __construct(){}
    private function __clone(){}

    // método de conexão
    public static function conectar() {
        if (!isset(self::$instance)) {
            // conexão não existe, então cria
            try {
                self::$instance = new PDO('mysql:
                host=35.199.79.53;
                dbname=agendeseudente;
                charset=utf8', 'root',
                    'qutf41Ja1898xlGJ'
                );
                self::$instance->setAttribute(
                    PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
                );
            } catch(PDOException $e) {
                echo "Erro na conexão: " .
                    $e->getMessage();
            }
        }

        return self::$instance;
    }
}