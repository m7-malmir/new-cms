<?php
require_once 'dbh.classes.php';
class ShowProduct extends Dbh{
    protected function getProductInfo(){
        $stmt=$this->connect()->prepare("SELECT * FROM `product`");
        $stmt->execute();
        $row=$stmt->fetchAll();
        return $row;
    }
    // protected function setNewProduct($prtitle,$prcontent,$prsrc1,$prkey1,$prsrc2,$prkey2,$prsrc3,$prkey3,$prsrc4,$prkey4,$feature){
    //     $stmt=$this->connect()->prepare('INSERT INTO `product`(`title`, `body`, `src1`, `key1`, `src2`, `key2`, `src3`, `key3`, `src4`, `key4`, `is_featured`) VALUES (?,?,?,?,?,?,?,?,?,?,?);');
    //     if(!$stmt->execute(array($prtitle,$prcontent,$prsrc1,$prkey1,$prsrc2,$prkey2,$prsrc3,$prkey3,$prsrc4,$prkey4,$feature))){
    //         $stmt= null;
    //         header("location: profile.php?error=stmtfailed");
    //         exit();
    //     }
    //     $stmt=null;   
    // }
    protected function setNewProduct($prtitle, $prcontent, $prsrc1, $prkey1, $prsrc2, $prkey2, $prsrc3, $prkey3, $prsrc4, $prkey4, $feature) {
        try {
            // آماده‌سازی کوئری
            $stmt = $this->connect()->prepare(
                'INSERT INTO `product`(`title`, `body`, `src1`, `key1`, `src2`, `key2`, `src3`, `key3`, `src4`, `key4`, `is_featured`) 
                 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);'
            );
    
            // اجرای کوئری
            if (!$stmt->execute(array($prtitle, $prcontent, $prsrc1, $prkey1, $prsrc2, $prkey2, $prsrc3, $prkey3, $prsrc4, $prkey4, $feature))) {
                header("Location: ../manage/profile.php?error=stmtfailed");
                exit();
            }
        } catch (PDOException $e) {
            // مدیریت خطا
            error_log("Database Error: " . $e->getMessage());
            header("Location: ../manage/profile.php?error=databaseerror");
            exit();
        } finally {
            // بستن اتصال
            $stmt = null;
        }
    }
    
    
    
}    