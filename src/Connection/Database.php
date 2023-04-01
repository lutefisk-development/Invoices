<?php
declare(strict_types=1);

namespace App\Connection;

use PDO;
use PDOException;

class Database
{
    /**
     * @return PDO|null
     */
    public static function &connect(): ?PDO
    {
        try {
            $conn = new PDO(
                "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}",
                $_ENV['DB_USERNAME'],
                $_ENV['DB_PASSWORD']
            );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'PDO Error: ' . $e->getMessage();
            $conn = null;
        }

        return $conn;
    }
}