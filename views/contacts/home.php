<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page_specific_css") ?>
    <link href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet">
<?php $this->stop() ?>

<?php $this->start("page") ?>
<div class="container" style="margin-top: 65px; margin-bottom: 65px;">
    <section id="inner" class="inner-section section" style="margin-bottom: 30px;">
            <!-- SECTION HEADING -->
            <h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">CART</h2>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <p class="wow fadeIn" data-wow-duration="2s" style="margin-bottom: 50px;">Enjoy the purchase</p>
                </div>
            </div>

            <div class="inner-wrapper row">
                <div class="col-md-12">
                
                    <!-- FLASH MESSAGES HERE -->
                    <a href="/pay" class="btn btn-primary" style="margin-bottom: 30px;">
                        <i class=""></i> Đặt hàng</a>
                        <?php if(isset($delete)):?>
                        <div id="" class="modal" role="dialog" style="display:block;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                
                                                <div class="modal-body">Đặt hàng thành công</div>
                                                <div class="modal-footer">
                                                    
                                                    <a href="/gh">

                                                    <button type="button" 
                                                        class="btn btn-success">Xác nhận</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <?php endif;?>
                    <!-- Table Starts Here -->
                    <table id="CART" class="table table-bordered table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>IdProduct</th>
                                <th>NameProduct</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Notes</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($carts as $cart): ?>
                            <tr>
                                <td><?=$cart->Masanpham?></td>
                                <td><?=$cart->NameProduct?></td>
                                <td><?=$cart->Price?></td>
                                <td><?=$cart->Quantity?></td>
                                <td><?=$cart->Notes?></td>
                                <td><a href="/contacts/edit/<?=$cart->NameProduct?>" 
                                class="btn btn-xs btn-warning">
                                <i alt="Edit" class="fa fa-pencil"> Edit</i></a>
                                <form class="delete" action="/contacts/delete?masp=<?=$cart->Masanpham?>" 
                                        method="POST" style="display: inline;">
                                        <button type="submit" class="btn btn-xs btn-danger"
                                            name="delete-contact">
           	                                <i alt="Delete" class="fa fa-trash"> Delete</i>
                                    </buton>
                                </form>
                            </td>
                                <div id="delete-confirm" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Confirmation</h4>
                                                </div>
                                                <div class="modal-body">Do you want to delete this product?</div>
                                                <div class="modal-footer">
                                                    <button type="button" data-dismiss="modal"
                                                        class="btn btn-danger" id="delete">Delete</button>
                                                    <button type="button" data-dismiss="modal"
                                                        class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                    <!-- Table Ends Here -->
                </div>
            </div>
    </section>
</div>
<?php $this->stop() ?>

<?php $this->start("page_specific_js") ?>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
    <script>
        $(document).ready(function(){
            new WOW().init();
            
            $('#contacts').DataTable(); 
            $('button[name="delete-contact"]').on('click', function(e){
                const $form = $(this).closest('form');
                e.preventDefault();
                $('#delete-confirm').modal({ backdrop: 'static', keyboard: false })
                    .one('click', '#delete', function() {
                        $form.trigger('submit');
                    });
            });          
        });
    </script>
<?php $this->stop() ?>

