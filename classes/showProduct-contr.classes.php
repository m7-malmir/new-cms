<?php

class ShowProductContr extends ShowProduct{
    private $postid;
    public function __construct($postid){
        $this->postid=$postid;
    }
    public function showProduct(){
        return $this->getProductInfo();
    }
    protected function newProduct(){
        
    }
}
