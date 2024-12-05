<?php

class FileUploader {
    private $allowedTypes = ['image/jpeg', 'image/png'];
    private $maxSize = 2 * 1024 * 1024; // 2MB
    private $uploadDir = 'uploads/';

    public function upload($file) {
        if ($file['error'] !== UPLOAD_ERR_OK) {
            throw new Exception("خطا در آپلود فایل: " . $file['error']);
        }

        $fileType = mime_content_type($file['tmp_name']);
        $fileSize = $file['size'];
        $fileName = basename($file['name']);

        // بررسی نوع و سایز فایل
        if (!in_array($fileType, $this->allowedTypes)) {
            throw new Exception("نوع فایل مجاز نیست.");
        }
        if ($fileSize > $this->maxSize) {
            throw new Exception("اندازه فایل بیش از حد مجاز است.");
        }

        // حذف کاراکترهای خاص
        $safeFileName = preg_replace("/[^a-zA-Z0-9\.\-_]/", "", $fileName);

        // مسیر ذخیره فایل
        $uploadPath = $this->uploadDir . $safeFileName;

        if (!move_uploaded_file($file['tmp_name'], $uploadPath)) {
            throw new Exception("خطا در ذخیره فایل.");
        }

        return $uploadPath; // مسیر فایل ذخیره‌شده
    }
}
