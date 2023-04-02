<?php
declare(strict_types=1);

namespace App\Repository;

use App\Model\UserModel;
use PDO;

class UserRepository extends BaseRepository
{
    /**
     * @return array
     */
    public function getUsers(): array
    {
        $users = $this->conn->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);

        $userModels = [];
        foreach ($users as $user) {
            $userModels[] = (new UserModel())
                ->setId((int)$user['id'])
                ->setName($user['name'])
                ->setIncome((int)$user['income']);
        }

        return $userModels;
    }
}