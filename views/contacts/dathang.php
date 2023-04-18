<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page_specific_css") ?>
    <link href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet">
<?php $this->stop() ?>

<?php $this->start("page") ?>
<div class="container">
        <marquee id="marq" scrollamount="15" behavior="scroll" direction="left" loop="50" scrolldelay="5">

        <a href="" style="text-decoration:none;"><img src="/img/hinh31.jpg"  width="450" height="450"/> </a>
        <a href="" style="text-decoration:none;"><img src="/img/hinh32.jpg" width="450" height="450"/> </a>
        <a href="" style="text-decoration:none;"><img src="/img/hinh33.jpg" width="450" height="450"/> </a>
        </marquee>

        <section>
            
            <div>
                <a href="" style="text-decoration:none;">
                    <img src="img/hinh40.jpg" style="margin: 30px 0 50px 0; " width="370x" height="200px"> &nbsp;  
                </a>
                <a href="" style="text-decoration:none;"> 
                    <img src="img/hinh41.jpg" style="margin: 30px 0 50px 0;" width="370x" height="200px"> &nbsp;
                </a>
                <a href="" style="text-decoration:none;"> 
                    <img src="img/hinh42.jpg" style="margin: 30px 0 50px 0;" width="370x" height="200px"> &nbsp;
                </a>
                <a href="" style="text-decoration:none;"> 
                    <img src="img/hinh43.jpg" width="370x" height="200px"> &nbsp;
                </a>
                <a href="" style="text-decoration:none;"> 
                    <img src="img/hinh45.jpg" width="370x" height="200px"> &nbsp;
                </a>
                
            </div>
                
                
        </section>
        <br>
        <br>
        <br>
        <style>
        .left{
            width: 700px;
            float: left;
            margin-bottom: 30px;
        }
        .left .tt img{
            width: 500px;
            height: 300px;
            margin-left: 60px;
            display: flex;
            margin-bottom: 10px;
        }
        .left .tt p{
           text-align: justify;
           margin-left: 55px;
        }
        .right{
            width: 270px;
            float: right;
        }
        .right li img{
            width: 220px;
            height: 100px;
            margin: 0 auto;
            display: flex;
            margin-bottom: 10px;
        }
        .right li{
            list-style: none;
            margin-bottom: 165px;
        }
        .right li p{
           text-align: justify;
           margin: 5px; 
        }
        main{
            border: 1px solid #ccc7c8;
            border-radius: 5px;
            position: absolute;
            width: 1000px;
        }
        </style>
           
            <div class="left">
                <h3>Phá cách</h3>
                <div class="tt">
                    <img src="img/hinh34.jpg">
                    <p>Đừng cứ chọn mãi những đồ dùng đơn giản và nhàm chán, hãy cho mình quyền <br> thay đổi
                      VANPHONGPHAM sẽ giúp bạn điều đó</p>
                </div>
                </br>
                </br>
                <h3>Độc lạ</h3>
                <div class="tt">
                    <img src="img/hinh35.jpg">
                    <p>Bạn có thể chọn những món đồ độc lạ có kèm đồ chơi để giải trí sau 
                     giờ học. Ghé <br> ngay VANPHONGPHAM thử những item khiến mình
                     vui vẻ hơn bạn nhaaa</p>
                </div>
                </br>
                </br>
                <h3>Dễ thương</h3>
                <div class="tt">
                    <img src="img/hinh36.jpg">
                    <p>Hãy thỏa sức lựa chọn những món đồ dễ thương đáng yêu cho bản thân hoặc cho <br>
                     em nhỏ</p>
                </div>
            </div><br><br>
            <div class="right">
                <ul>
                    <li>
                        <h3>Giá cả</h3>
                        <img src="img/hinh39.jpg">
                        <p>Đến với VANPHONGPHAM cùng săn những món hàng dễ thương, độc lạ với giá cả hợp lí.
                        Làm mới bàn học của bạn cùng VANPHONGPHAM.</p>
                    </li>
                </br><br>
                    <li>   
                        <h3>Mặt hàng cho bạn</h3>
                        <img src="img/hinh38.jpg">
                        <p> VANPHONGPHAM nơi chứa những sản phẩm độc đáo, phá cách nhất, các bạn sẽ không thất vọng khi đến với VANPHONGPHAM.
                            Chúng tôi sẽ giúp bạn thực hiện điều đó!</p>
                    </li>
                </ul>
            </div> 
            
</div>
<?php $this->stop() ?>

<?php $this->start("page_specific_js") ?>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
    <script>
        $(document).ready(function(){
            new WOW().init();
            
            $('#contacts').DataTable();           
        });
    </script>
<?php $this->stop() ?>