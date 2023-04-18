<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page_specific_css") ?>
<link href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="//cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet">
<?php $this->stop() ?>

<?php $this->start("page") ?>

<div class="container">

    <a href="Link"><img src="img/hinh30.jpg" width="1150" height="400" /> </a>

    <br> <br>
    <style>
        .left {
            width: 600px;
            float: left;
        }

        .left .tt img {
            width: 500px;
            height: 300px;
            margin-left: 20px;
            display: flex;
            margin-bottom: 10px;
        }

        .left .tt p {
            text-align: justify;
            margin-left: 55px;
        }

        .right {
            width: 600px;
            float: right;
        }

        .right li img {
            width: 500px;
            height: 300px;
            margin-right: 20px;
            display: flex;
            margin-bottom: 10px;
        }

        .right li {
            list-style: none;
            margin-bottom: 165px;
        }

        .right li p {
            text-align: justify;
            margin: 55px;
        }
    </style>
    <section>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-6">
                    <a href="">
                        <img src="<?= $product->Hinhanh ?>" width="300px" height="400px">
                    </a><br>
                    <b style="color: black; ">IdProduct: <?= $product->Masanpham ?></b><br>
                    <b style="font-size: 25px;">
                        <?= $product->Tensp ?>
                    </b><br>
                    <b style="color: black; ">GIÁ: <?= $product->Gia ?>VND</b><br>
                    <b><span>Số lượng:

                    <form action="addgiohang" method="post">
                        <input type="hidden" value="<?= $product->Masanpham ?>" name="masp">
                        <input type="number" min="1" max="100" class="sp001" name="soluong">
                        <input type="submit" value="Thêm vào giỏ hàng">
                    </form><br>
                        
                        <a href="/addgiohang?masp=<?= $product->Masanpham ?>"></a>
                    </span></b><br><br>
                </div>
            <?php } ?>
        </div>
    </section>
</div>
<?php $this->stop() ?>
<?php $this->start("page_specific_js") ?>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        new WOW().init();

        $('#contacts').DataTable();
    });
</script>
<?php $this->stop() ?>