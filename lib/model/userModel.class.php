<?php

/**
 * Created by PhpStorm.
 * User: 我是好人
 * Date: 2016/11/14
 * Time: 20:16
 */
class userModel
{
    public $_table = 'name';
    function find_all(){
        $sql = 'select name from '.$this->_table." where id = 12";
        return DB::findAll($sql);
    }
    function find_one($id){
        $sql = 'select * from '.$this->_table.' where '.$id;
        return DB::findOne($sql);
    }
    function count(){
        $sql = 'select count(*) from '.$this->_table;
        return DB::findResult($sql, 0, 0);
    }
    function insert($data){
        return DB::insert($this->_table,$data);
    }
}