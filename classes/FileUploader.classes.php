<?php 
class FileUploader {
    private $uploadDir;
    private $maxFileSize = 1024 * 1024; // 1 MB
    private $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    private $allowedTypes = ['image/jpeg', 'image/png', 'image/gif']; // پسوندهای مجاز برای تصویر
    // سازنده برای تنظیم پوشه آپلود
    public function __construct($uploadDir = '../upload/') {
        $this->uploadDir = rtrim($uploadDir, '/') . '/'; // پوشه آپلود
    }

    // بررسی نوع و اندازه فایل
    private function isValidImage($file) {

        if (!isset($file['tmp_name']) || empty($file['tmp_name'])) {
            $_SESSION['error'] = 'فایل عکس انتخاب نشده است!!!';
            header("location: ../manage/add-product");
                exit();
        }
        $mimeType = mime_content_type($file['tmp_name']);
        $validMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($mimeType, $validMimeTypes)) {
            $_SESSION['error'] = 'فرمت عکس مجاز نیست';
            header("location: ../manage/add-product");
                exit();
        }
        if ($file['size'] > $this->maxFileSize) {
            $_SESSION['error'] = 'حجم فایل بارگزاری شده بیش از 1 مگابایت است';
            header("location: ../manage/add-product");
                exit();

        }
        $fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($fileExtension, $this->allowedExtensions)) {
            $_SESSION['error'] = 'فرمت عکس مجاز نیست';
            header("location: ../manage/add-product");
                exit();
        }

        return true;
    }

    // آپلود یک فایل
    public function uploadSingle($file) {
        if (is_array($file) && isset($file['tmp_name'])) {
            // بررسی اعتبار فایل
            $validationResult = $this->isValidImage($file);
            if ($validationResult !== true) {
                return $validationResult; // بازگشت پیغام خطا در صورت عدم اعتبار فایل
            }

            // مسیر ذخیره فایل
            $filePath = $this->uploadDir . basename($file['name']);
            
            // انتقال فایل از مسیر موقت به پوشه مقصد
            if (move_uploaded_file($file['tmp_name'], $filePath)) {
                return $filePath; // اگر موفق بود، مسیر فایل ذخیره‌شده را برمی‌گرداند
            } else {
                return 'Failed to upload file.'; // اگر مشکلی در آپلود بود
            }
        }
        return 'No file uploaded.'; // اگر فایل آپلود نشده باشد
    }
    public function replaceFiles($oldFiles, $newFiles) {
        $uploadedPaths = []; // مسیر فایل‌های جدید ذخیره‌شده

        try {
            // حذف فایل‌های قدیمی
            foreach ($oldFiles as $oldFile) {
                $oldFilePath = $this->uploadDir . basename($oldFile);
                if ($oldFile && file_exists($oldFilePath)) {
                    unlink($oldFilePath); // حذف فایل
                }
            }

            // آپلود فایل‌های جدید
            foreach ($newFiles as $file) {
                if (isset($file['tmp_name']) && $file['error'] === UPLOAD_ERR_OK) {
                    // بررسی حجم فایل
                    if ($file['size'] > $this->maxFileSize) {
                        $_SESSION['error'] = 'فایل عکس انتخاب نشده است!!!';
                        header("location: ../manage/add-product");
                            exit();
                    }

                    // بررسی نوع فایل
                    if (!in_array(mime_content_type($file['tmp_name']), $this->allowedTypes)) {
                        $_SESSION['error'] = 'فایل عکس انتخاب نشده است!!!';
                        header("location: ../manage/add-product");
                            exit();
                    }

                    // تولید نام یکتا و بررسی نام فایل
                    $uniqueName = uniqid() . '_' . basename($file['name']);
                    $destination = $this->uploadDir . $uniqueName;

                    // اطمینان از عدم وجود مسیر غیرمجاز
                    if (strpos(realpath($destination), realpath($this->uploadDir)) !== 0) {
                        $_SESSION['error'] = 'فایل عکس انتخاب نشده است!!!';
                        header("location: ../manage/add-product");
                            exit();
                    }

                    // انتقال فایل به مسیر
                    if (move_uploaded_file($file['tmp_name'], $destination)) {
                        $uploadedPaths[] = $uniqueName; // مسیر جدید ذخیره‌شده
                    } else {
                        $_SESSION['error'] = 'فایل عکس انتخاب نشده است!!!';
                        header("location: ../manage/add-product");
                            exit();
                    }
                } else {
                    $uploadedPaths[] = null; // اگر فایل جدیدی آپلود نشد
                }
            }

            return $uploadedPaths; // بازگرداندن مسیر فایل‌های جدید
        } catch (Exception $e) {
            error_log("File replacement error: " . $e->getMessage());
            throw $e; // ارسال خطا به سطح بالاتر
        }
    }
}
