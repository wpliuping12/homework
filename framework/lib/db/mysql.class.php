<?php

/**
 * Created by PhpStorm.
 * User: 我是好人
 * Date: 2016/11/15
 * Time: 20:58
 */
class mysql
{
    function err($error)
    {
        die("sorry you faild" . $error);
    }

    function connect($config)
    {
        extract($config);
        if (!($con = mysql_connect($dbhost, $dbuser, $dbpass))) {
            $this->err(mysql_error());
        }
        if (!mysql_select_db($dbname, $con)) {
            $this->err(mysql_error());
        }
        mysql_query("set names " . $dbcharset);
    }

    function query($sql)
    {
        if (!$query = mysql_query($sql)) {
            $this->err($sql . "<br/>" . mysql_error());
        } else {
            return $query;
        }
    }

    function findAll($query){
        while($rs=mysql_fetch_array($query, MYSQL_ASSOC)){//mysql_fetch_array函数把资源转换为数组，一次转换出一行出来
            $list[]=$rs;
        }
        return isset($list)?$list:"";
    }

    function findOne($query)
    {
        $rs = mysql_fetch_array($query, MYSQLI_ASSOC);
        return $rs;
    }

    function findResult($query, $row = 0, $filed = 0)
    {
        $rs = mysql_result($query, $row, $filed);
        return $rs;
    }

    function insert($table, $arr)
    {
        foreach ($arr as $key => $value) {
            $value = mysql_real_escape_string($value);
            $keyArr[] = "`" . $key . "`";
            $valueArr[] = "'" . $value . "'";
        }
        $keys = implode(",", $keyArr);
        $values = implode(",", $valueArr);
        $sql = "insert into " . $table . "(" . $keys . ") values(" . $values . ")";
        $this->query($sql);
        return mysql_insert_id();
    }

    function update($table, $arr, $where)
    {
        foreach ($arr as $key => $value) {
            $value = mysql_real_escape_string($value);
            $keyAndValueArr[] = "`" . $key . "`='" . $value . "'";
        }
        $keyAndValues = implode(",", $keyAndValueArr);
        $sql = "update " . $table . " set " . $keyAndValues . " where " . $where;
        $this->query($sql);
    }

    function del($table, $where)
    {
        $sql = "delete from " . $table . " where " . $where;
        $this->query($sql);
    }
}