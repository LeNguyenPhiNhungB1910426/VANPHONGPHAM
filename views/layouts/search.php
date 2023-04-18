<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>

<link rel="stylesheet" href="assets/css/product.css">
<main class="container">
    
<?php
    echo '<h4 class="ps-5 my-5">Kết quả tìm kiếm từ khóa "' . $_POST['search']. '": </h4>';
    echo'<div class="row m-0">';
    foreach ($result as $r) {
        echo ' <img src="'. $r->Hinhanh .'" width="300px" height="400px">';
        echo '<b><p class="fw-bold mt-2">' . $r->Tensp . '</p></b>';
        echo '<b>GIÁ: </b>';
        echo '<b class="fw-bold mt-2">' . $r->Gia . '</b>';
        echo '<b>VND </b>
        </div>';
    }
?>

</main>
<?php $this->stop() ?>