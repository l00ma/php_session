<?php require 'inc/head.php'; ?>
<?php require 'inc/data/session.php'; ?>
<?php require 'inc/data/products.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <ul>
            <?php foreach ($_SESSION['cart'] as $id) {
                echo ("<li>" . $catalog[$id]['name'] . "</li>");
            } ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>