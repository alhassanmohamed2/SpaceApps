<?php require('partials/head.php'); ?>
<link rel="stylesheet" href="../../../public/css/about.css">


<div class="container">

    <div class="row">
        <?php foreach ($data_array as $product) : ?>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
                <iframe class="embed-responsive-item" src="<?= $product->youtupe_link ?>" allowfullscreen></iframe>
                <div class="card-body">
                    <h3 class="card-title"><?= $product->name ?></h3>
                    <h5><?= $product->fal_type ?></h5>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</div>

<?php require('partials/footer.php'); ?>