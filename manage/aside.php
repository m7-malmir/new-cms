<?php  

    $users2   = 'users';
    $category='categories';
    $post='posts';

    //   if (str_contains($query, $users2)) {
    //      $user_export='active';
    //  }elseif (str_contains($query, $category)) {
    //     $cat_export='active';
    //  }elseif(str_contains($query, $post)){
    //     $post_export='active';
    //  }
?>
            <aside> 
                <div class="sidebar">
                    <a href="add-product"><i class="uil uil-plus"></i>
                     <h4>افزودن محصول</h4>
                    </a>
                    <a href="profile" class="<?= $post_export ?? null ?>"><i class="uil uil-postcard"></i>
                     <h4>مدیریت محصولات </h4>
                    </a>
                    
                    <a href="edit-contact"><i class="uil uil-edit"></i>
                     <h4>ویرایش درباره ما</h4>
                    </a>
                  
                </div><!--sidebar-->
            </aside>