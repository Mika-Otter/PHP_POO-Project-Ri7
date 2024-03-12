<?php 
class Post extends Model{
    public function __construct(){
        $this->table = "thread";
        $this->getConnection();
    }
}