<?php
require_once 'dbh.classes.php';
include 'FileUploader.classes.php';

class EditProduct extends ShowProduct {
    private $postid;

    public function __construct($postid) {
        $this->postid = $postid; 
    }

    // دریافت فایل‌های قدیمی از دیتابیس
    protected function getOldFiles($productId) {
        $stmt = $this->connect()->prepare("SELECT src1, src2, src3, src4 FROM `product` WHERE `id` = ?;");
        $stmt->execute([$productId]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return [$result['src1'], $result['src2'], $result['src3'], $result['src4']];
        } else {
            throw new Exception("Product not found for ID: " . $productId);
        }
    }

    // به‌روزرسانی محصول
    public function updateProductContr($prtitle, $prcontent, $feature) {
        // بررسی ورودی‌ها
        if ($this->emptyInputCheck($prtitle, $prcontent)) {
            header("location: ../profilesettings.php?error=emptyinput");
            exit();
        }

        $fileUploader = new FileUploader('../upload/');
        $newFiles = [
            $_FILES['thumbnail1'],
            $_FILES['thumbnail2'],
            $_FILES['thumbnail3'],
            $_FILES['thumbnail4']
        ];

        // دریافت فایل‌های قدیمی
        $oldFiles = $this->getOldFiles($this->postid);

        // جایگزینی فایل‌های قدیمی با جدید
        $uploadedPaths = $fileUploader->replaceFiles($oldFiles, $newFiles);

        // به‌روزرسانی مسیرهای جدید در دیتابیس
        $this->updateProduct($this->postid, $prtitle, $prcontent, $uploadedPaths[0], $uploadedPaths[1], $uploadedPaths[2], $uploadedPaths[3], $feature);
    }

    // بررسی ورودی‌ها برای خالی نبودن
    private function emptyInputCheck($title, $body) {
        return empty($title) || empty($body);
    }
}
