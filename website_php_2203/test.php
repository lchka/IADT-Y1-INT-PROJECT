<?php
require_once 'classes/db.php';
echo'<pre>';
print_r(Category::findById($story->category_id)->name);
echo '</pre>';

try {
    
} catch (Exception $e) {
    echo $e->getMessage();
}
?>