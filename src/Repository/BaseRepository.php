<?php
declare(strict_types=1);

namespace App\Repository;

use App\Connection\Database;
use PDO;

class BaseRepository
{
    /** @var PDO|null */
    protected ?PDO $conn;

    public function __construct()
    {
        $this->conn = Database::connect();
    }
}