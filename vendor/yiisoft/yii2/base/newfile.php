<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/6 0006
 * Time: 下午 3:57
 */
/**
 * 规范独立对象和组合对象必须实现的方法，保证它们提供给客户端统一的
 * 访问方式
 */
abstract class Filesystem{
    protected $name;
    function __construct($name)
    {
        return $this->name;
    }
    public abstract function getName();
    public abstract function getSize();
}

/**
 * 目录类
 */
class Dir extends Filesystem
{
   private $filesystems=[];
   public function add(){

   }
}