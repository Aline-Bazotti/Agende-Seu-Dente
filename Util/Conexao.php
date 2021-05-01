<?php

final class Conexao
{
    private static $instance = null;
    private function __construct(){}
    private function __clone(){}


    // método de conexão
    public static function conectar() {
        if (!isset(self::$instance)) {
            // Use a Data source name (DSN) to connect to Cloud SQL through the proxy
            $dsn = 'mysql:host=localhost;port=3306;dbname=agendeseudenteco_prod';
            // Instantiate your DB using the DSN, username, and password
            $dbUser = 'agendeseudenteco_prod';
            $dbPass = 'SGhJGNUYgp7n';
            // conexão não existe, então cria
            try {
                self::$instance = new PDO($dsn, $dbUser, $dbPass);
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
