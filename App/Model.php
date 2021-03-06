<?php

namespace App;

abstract class Model
{

    public $id;

    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table;
        return $db->query($sql, [], static::class);
    }

    public static function findOneById($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        return $db->query($sql, [':id' => $id], static::class)[0];
    }

    public static function countAll()
    {
        $db = new Db();
        $sql = 'SELECT COUNT(*) AS num FROM ' . static::$table;
        return (int)$db->query($sql, [], static::class)[0]->num;
    }

    public function update()
    {
        $sets = [];
        $data = [];
        foreach ($this as $key => $value) {
            $data[':' . $key] = $value;
            if ('id' == $key) {
                continue;
            }
            $sets[] = $key . '=:' . $key;
        }
        $db = new Db();
        $sql = 'UPDATE ' . static::$table . ' 
        SET ' . implode(',', $sets) . ' 
        WHERE id=:id';
        return $db->execute($sql, $data);
    }

    public function insert()
    {
        $data = [];
        $fields = [];
        foreach ($this as $key => $value) {
            if ('id' == $key) {
                continue;
            }
            $data[':' . $key] = $value;
            $fields[] = $key;
        }
        $db = new Db();
        $sql = 'INSERT INTO ' . static::$table . ' (' . implode(',', $fields) . ') VALUES (' . implode(',', array_keys($data)) . ')';

        if (true === $db->execute($sql, $data)) {
            $this->id = $db->findId();
            return true;
        } else {
            return false;
        }

    }

    public function save()
    {
        if (null === $this->id) {
            return $this->insert();
        } else {
            return $this->update();
        }
    }

    public function delete()
    {
        $db = new Db();
        $sql = 'DELETE FROM ' . static::$table . ' WHERE id = :id';
        $db->execute($sql, [':id' => $this->id]);
    }

}