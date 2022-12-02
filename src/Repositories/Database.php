<?php

declare(strict_types=1);

namespace Invoices\Repositories;

use PDO;
use PDOException;

class Database
{
    /**
     * @var string
     */
    private string $dbHost;

    /**
     * @var string
     */
    private string $dbName;

    /**
     * @var string
     */
    private string $dbPassword;

    /**
     * @var string
     */
    private string $dbUser;

    public function __construct()
    {
        $this->dbHost     = $_ENV["DB_HOST"];
        $this->dbName     = $_ENV["DB_NAME"];
        $this->dbPassword = $_ENV["DB_PASSWORD"];
        $this->dbUser     = $_ENV["DB_USER"];
    }

    public function connection(): PDO
    {
        try {
            return new PDO(
                "mysql:host={$this->dbHost};dbname={$this->dbName};charset=UTF8",
                $this->dbUser,
                $this->dbPassword
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
