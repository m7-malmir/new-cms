<?php
require_once 'dbh.classes.php';
class ShowProduct extends Dbh{
    protected function getProductInfo(){
        $stmt=$this->connect()->prepare("SELECT * FROM `product`");
        $stmt->execute();
        $row=$stmt->fetchAll();
        return $row;
    }
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
    protected function updateProduct($id, $prtitle, $prcontent, $prsrc1, $prkey1, $prsrc2, $prkey2, $prsrc3, $prkey3, $prsrc4, $prkey4, $feature) {
        try {
            // آماده‌سازی کوئری
            $stmt = $this->connect()->prepare(
                'UPDATE `product`
                 SET `title` = :title, `body` = :body, `src1` = :src1, `key1` = :key1, `src2` = :src2, `key2` = :key2,
                     `src3` = :src3, `key3` = :key3, `src4` = :src4, `key4` = :key4, `is_featured` = :is_featured
                 WHERE `id` = :id;'
            );
    
            // اجرای کوئری
            $stmt->execute([
                ':title' => $prtitle,
                ':body' => $prcontent,
                ':src1' => $prsrc1,
                ':key1' => $prkey1,
                ':src2' => $prsrc2,
                ':key2' => $prkey2,
                ':src3' => $prsrc3,
                ':key3' => $prkey3,
                ':src4' => $prsrc4,
                ':key4' => $prkey4,
                ':is_featured' => $feature,
                ':id' => $id
            ]);
    
        } catch (PDOException $e) {
            // مدیریت خطا
            error_log("Database Error: " . $e->getMessage());
            header("Location: ../manage/profile.php?error=databaseerror");
            exit();
        }
    }
    
    
    
    
    
}    