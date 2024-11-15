<?php

class ShowProductContr extends ShowProduct{
    private $postid;
    public function __construct(){
        //$this->postid=$postid;
    }
    public function showProduct(){
        return $this->getProductInfo();
    }
    protected function newProduct($prtitle,$prcontent,$prsrc1,$prkey1,$prsrc2,$prkey2,$prsrc3,$prkey3,$feature){
         $this->setNewProduct($prtitle,$prcontent,$prsrc1,$prkey1,$prsrc2,$prkey2,$prsrc3,$prkey3,$feature);
    }
}
