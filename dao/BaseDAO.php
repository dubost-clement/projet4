<?php

class BaseDAO
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=projet_blog;charset=utf8', 'root', '');
        return $db;
    }
}
