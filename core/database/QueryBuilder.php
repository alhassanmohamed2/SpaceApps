<?php

namespace App\Core\Database;
use Exception;
use PDO;

class QueryBuilder
{

     // foreach (App::get('tables') as $name => $table) {
            //     App::get('database')->create_table($name, $table);
            // }
       

    /**
     * The PDO instance.
     *
     * @var PDO
     */
    protected $pdo;

    /**
     * Create a new QueryBuilder instance.
     *
     * @param PDO $pdo
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Select all records from a database table.
     *
     * @param string $table
     */
    
   
    public function selectAll($table, $range = [], $conditions = [])
    {
        $where = '';
        if ($range !== []) {
            $where = "WHERE id BETWEEN {$range[0]} AND  {$range[1]}";
        } elseif ($conditions !== []) {
            $i = 0;
            $where = 'WHERE ';
            foreach ($conditions as $key => $value) {
                $where .= "{$key} = \"{$value}\"";
                if (++$i !== count($conditions)) {
                    $where .= ' AND ';
                }
            }
        }
        try {


            $statement = $this->pdo->prepare("SELECT * FROM {$table} {$where}");

            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
        }
    }

    /**
     * Insert a record into a table.
     *
     * @param  string $table
     * @param  array  $parameters
     */
    public function insert($table, $parameters)
    {
        $set = '';
        $i = 0;
        $col = '';
        foreach ($parameters as $key => $value) {
            $set .= "\"{$value}\"";
            $col .= "{$key}";
            if (++$i !== count($parameters)) {
                $set .= ', ';
                $col .= ', ';
            }
        }

        $sql = "INSERT INTO {$table} ({$col}) values({$set});";

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
        } catch (\Exception $e) {
        }
    }


    /**
     * Update a record in a table.
     *
     * @param  string $table
     * @param  array  $parameters
     * @param  array  $conditions
     */
    public function update($table, $parameters, $conditions)
    {
        $set = '';
        $where = '';
        $i = 0;

        foreach ($parameters as $key => $value) {
            $set .= "{$key} = \"{$value}\"";
            if (++$i !== count($parameters)) {
                $set .= ', ';
            }
        }

        $i = 0;

        foreach ($conditions as $key => $value) {
            $where .= "{$key} = \"{$value}\"";
            if (++$i !== count($conditions)) {
                $where .= ' AND ';
            }
        }

        $sql = "UPDATE {$table} SET {$set} WHERE {$where}";

        try {
            $statement = $this->pdo->prepare($sql);

            $parameters = array_merge($parameters, $conditions);

            $statement->execute();
        } catch (\Exception $e) {
            
        }
    }

    /**
     * Delete a record from a table.
     *
     * @param  string $table
     * @param  array  $conditions
     */
    public function delete($table, $conditions)
    {

        $where = '';
        $i = 0;

        foreach ($conditions as $key => $value) {
            $where .= "{$key} = \"{$value}\"";
            if (++$i !== count($conditions)) {
                $where .= ' AND ';
            }
        }

        $sql = "DELETE FROM {$table} WHERE {$where}";

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute();

            $statement_alter = $this->pdo->prepare("SET @n=0;
        UPDATE `{$table}` SET `id` = @n := @n + 1 ORDER BY `id`");

            $statement_alter->execute();
        } catch (\Exception $e) {
            //
        }
    }

    /**
     * Fetch a single record from a table.
     *
     * @param  string $table
     * @param  array  $conditions
     * @return mixed
     */
    public function selectOne($table, $conditions = [])
    {
        if ($conditions === []) {
            $where = '';
        } else {
            $where = 'WHERE ';
            $i = 0;
        }

        foreach ($conditions as $key => $value) {
            $where .= "{$key} = \"{$value}\"";
            if (++$i !== count($conditions)) {
                $where .= ' AND ';
            }
        }
        try {
            $sql = "SELECT * FROM {$table} {$where} LIMIT 1";

            $statement = $this->pdo->prepare($sql);

            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return false;
        }
    }


    /**
     * Create a table.
     *
     * @param  string $table
     * @param  array  $parameters
     */
    public function create_table($table, $parameters)
    {
        $set = '';
        $i = 0;

        foreach ($parameters as $key => $value) {
            $set .= "{$key} {$value}";
            if (++$i !== count($parameters)) {
                $set .= ', ';
            }
        }

        $sql = "CREATE TABLE IF NOT EXISTS {$table} ( {$set} );";

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
        } catch (Exception $e) {
        }
    }
    public function check_table_exists($table)
    {
        $sql = "
        SELECT 
            TABLE_NAME as table_n
        FROM 
        information_schema.TABLES 
        WHERE 
            TABLE_NAME = '{$table}'
        LIMIT 1
     ";
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            return (bool) $statement->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
        }
    }
}