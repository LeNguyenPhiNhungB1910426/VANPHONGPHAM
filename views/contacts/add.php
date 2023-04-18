<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>
<?php $this->start("page") ?>
<link href="../css/sticky-footer.css" rel="stylesheet">

<div class="container" style="margin-bottom: 65px;">
    <section id="inner" class="inner-section section">
        <div class="container">

            <!-- SECTION HEADING -->
            <h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">ADMIN</h2>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <p class="wow fadeIn" data-wow-duration="2s">Manage</p>
                </div>
            </div>

            <div class="inner-wrapper row">
                <div class="col-md-12">

                    <form name="frm" id="frm" action="/contacts" method="post" class="col-md-6 col-md-offset-3">


                        <!-- IdProduct -->
                        <div class="form-group <?= isset($errors['id']) ? ' has-error' : '' ?>">
                            <label for="id">IdProduct </label>
                            <input type="text" name="id" class="form-control" maxlen="255" id="id" placeholder="Enter Id" value="<?= isset($old['id']) ? $this->e($old['id']) : '' ?>" />

                            <?php if (isset($errors['id'])) : ?>
                                <span class="help-block">
                                    <strong><?= $this->e($errors['id']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>


                        <!-- Name -->
                        <div class="form-group <?= isset($errors['name']) ? ' has-error' : '' ?>">
                            <label for="name">NameProduct </label>
                            <input type="text" name="name" class="form-control" maxlen="255" id="name" placeholder="Enter Name" value="<?= isset($old['name']) ? $this->e($old['name']) : '' ?>" />

                            <?php if (isset($errors['name'])) : ?>
                                <span class="help-block">
                                    <strong><?= $this->e($errors['name']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>

                    
                        <!-- Price -->
                        <div class="form-group <?= isset($errors['price']) ? ' has-error' : '' ?>">
                            <label for="price">Price </label>
                            <input type="text" name="price" class="form-control" maxlen="255" id="price" placeholder="Enter Price" value="<?= isset($old['price']) ? $this->e($old['price']) : '' ?>" />

                            <?php if (isset($errors['price'])) : ?>
                                <span class="help-block">
                                    <strong><?= $this->e($errors['price']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>

                        <!-- Quantity -->
                        <div class="form-group <?= isset($errors['quantity']) ? ' has-error' : '' ?>">
                            <label for="quantity">Quantity </label>
                            <input type="text" name="quantity" class="form-control" maxlen="255" id="quantity" placeholder="Enter Quantity" value="<?= isset($old['quantity']) ? $this->e($old['quantity']) : '' ?>" />

                            <?php if (isset($errors['quantity'])) : ?>
                                <span class="help-block">
                                    <strong><?= $this->e($errors['quantity']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>

                        <!-- Description -->
                        <div class="form-group<?= isset($errors['notes']) ? ' has-error' : '' ?>">
                            <label for="description">Notes </label>
                            <textarea name="notes" id="notes" class="form-control" placeholder="Enter Notes (maximum character limit: 255)"><?= isset($old['notes']) ? $this->e($old['notes']) : '' ?></textarea>

                            <?php if (isset($errors['notes'])) : ?>
                                <span class="help-block">
                                    <strong><?= $this->e($errors['notes']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>

                        <!-- Submit -->
                        <button type="submit" name="submit" id="submit" class="btn btn-primary">Add Contact</button>
                    </form>

                </div>
            </div>

        </div>
    </section>
</div>
<?php $this->stop() ?>

