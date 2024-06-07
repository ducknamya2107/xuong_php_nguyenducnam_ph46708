<?php

namespace Nam\Xuongoop\Commons;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Query\QueryBuilder;

class Model
{

    protected Connection|null $conn;
    protected QueryBuilder $queryBuilder;
    protected string $tableName;
    /// kết nối csdl bằng __construct và ngắt kết nối bằng destruct
    public function __construct()
    {
        $connectionParams = [
            'dbname'    => $_ENV['DB_NAME'],
            'user'      => $_ENV['DB_USERNAME'],
            'password'  => $_ENV['DB_PASSWORD'],
            'host'      => $_ENV['DB_HOST'],
            'port'      => $_ENV['DB_PORT'],
            'driver'    => $_ENV['DB_DRIVER'],
        ];

        $this->conn = DriverManager::getConnection($connectionParams);

        $this->queryBuilder = $this->conn->createQueryBuilder();
    }

    // CRUD
    public function all()
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->orderBy('id', 'desc')
            ->fetchAllAssociative();
        // lấy ra toàn bộ bản ghi 
    }

    public function count()
    {
        return $this->queryBuilder
            ->select("COUNT(*) as $this->tableName")
            ->from($this->tableName)
            ->fetchOne();
    }
    // chức năng phân trang 
    public function paginate($page = 1, $perPage = 5)
    {    $queryBuilder = clone($this->queryBuilder);
        // lấy tổng số trang
        $totalPage = ceil($this->count() / $perPage);
        // offset : vị trí bắt đầu lấy dữ liệu trở đi
        $offset = $perPage * ($page - 1);

        $data = $queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->setFirstResult($offset) // phải tính
            ->setMaxResults($perPage)
            ->orderBy('id', 'desc')
            ->fetchAllAssociative();

        return [$data, $totalPage];
    }

    public function findByID($id)
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            // hiểu rằng: để tăng tính bảo mâtj, set id = 0 
            ->where('id = ?')->setParameter(0, $id)
            ->fetchAssociative();
        // trả về 1 bản ghi
    }

    public function insert(array $data)
    {
        if (!empty($data)) {
            $query = $this->queryBuilder->insert($this->tableName);

            $index = 0;
            // parameter luôn bắt đầu từ 0 , nên khai báo $index =0 = $index
            foreach ($data as $key => $value) {
                $query->setValue($key, '?')->setParameter($index, $value);

                ++$index;
            }

            $query->executeQuery();

            return true;
        }

        return false;
    }

    public function update($id, array $data)
    {
        if (!empty($data)) {
            $query = $this->queryBuilder->update($this->tableName);

            // $data = [
            //     'name' => 'Ahihi',
            //     'email' => 'keke@gnai.com',
            //     'address' => 'HN'
            // ];

            $index = 0;
            foreach ($data as $key => $value) {
                $query->set($key, '?')->setParameter($index, $value);

                ++$index;
            }

            $query->where('id = ?')
                ->setParameter(count($data), $id)
                ->executeQuery();

            return true;
        }

        return false;
    }

    public function delete($id)
    {
        return $this->queryBuilder
            ->delete($this->tableName)
            ->where('id = ?')
            ->setParameter(0, $id)
            ->executeQuery();
        // hàm delete k có trả về dữ liệu, chỉ thực thi 
    }

    public function __destruct()
    {
        $this->conn = null;
    }
}
