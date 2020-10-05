<?php
echo "<ul class='pagination'>";
//button first page
if($page>1){
    echo "<li><a href='{$page_url}' title='Go to the first page.'>";
        echo "First";
    echo "</a></li>";
}
//calculate total pages
$total_pages = ceil($total_rows / $records_per_page);
//range of links to show
?>