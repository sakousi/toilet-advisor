<?php require 'component/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1><?= $_GET['error'] ?></h1>
            <?php if (isset($_GET['errorMsg'])): ?>
                <p><?= $_GET['errorMsg'] ?></p>
            <?php endif ?>
        </div>
    </div>

<?php require 'component/footer.php' ?>