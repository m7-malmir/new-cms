<?php
include 'FileUploader.classes.php';
class ShowProductContr extends ShowProduct{
    public function showProduct(){
        return $this->getProductInfo();
    }
    private function emptyInputCheck($prtitle,$prcontent){
        $result='';
        if( empty($prtitle) || empty($prcontent)){
            $result=true;
        }else{
            $result=false;
        }
        return $result;
    }
    public function newProduct($prtitle,$prcontent,$prsrc1,$prkey1,$prsrc2,$prkey2,$prsrc3,$prkey3,$prsrc4,$prkey4,$feature){

        if($this->emptyInputCheck($prtitle,$prcontent)==true){
            $_SESSION['error'] = 'عنوان و توضیحات محصول را وارد نمایید';
            header("location: ../manage/add-product");
            exit();
        }
        $fileUploader = new FileUploader('../upload/');
        if ($fileUploader) {
            $files = [$prsrc1, $prsrc2, $prsrc3, $prsrc4];
            foreach ($files as $index => $file) {
                $files[$index] = $fileUploader->uploadSingle($file); 
            }
            list($prsrc1, $prsrc2, $prsrc3, $prsrc4) = $files;
        }
         $this->setNewProduct($prtitle,$prcontent,$prsrc1,$prkey1,$prsrc2,$prkey2,$prsrc3,$prkey3,$prsrc4,$prkey4,$feature);
    }
}
