<?php
/**
 * Created by PhpStorm.
 * User: 我是好人
 * Date: 2016/11/14
 * Time: 19:22
 */
class indexController
{
   public function index(){
        $data = $this ->getName();

       VIEW::assign(array(
           'data' => $data
       ));

        VIEW::display('index.html');
    }

    public function getName()
    {
        $newObj = M('user');
        return $newObj -> find_all();
    }
    public function namead12d(){
        extract($_POST);
        $name = daddslashes($name);
        $newObj = M('user');
        $data = array(
            'name' => $name
        );
        $newObj -> insert($data);
    }
    public function nameliuping(){
        extract($_POST);
        $name = daddslashes($name);
        $newObj = M('user');
        $data = array(
            'name' => $name
        );
        $newObj -> insert($data);
    }
    public function namead11231232d(){
    extract($_POST);
    $name = daddslashes($name);
    $newObj = M('user');
    $data = array(
        'name' => $name
    );
    $newObj -> insert($data);
}
}