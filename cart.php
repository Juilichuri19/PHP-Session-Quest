<?php
require 'inc/head.php';
require 'inc/data/products.php';

if (!isset($_SESSION['loginname'])) {
    header("Location: login.php");
}
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
//print_r($_SESSION['cart']);
?>
<section class="cookies container-fluid">
        <div class="row">
            <table border=1>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                </tr>
            <?php
               foreach ($_SESSION['cart'] as $product => $qty) {
                   if (isset($catalog[$product])) { ?>
                       <tr>
                           <td><?= $catalog[$product]['name']; ?> </td>
                           <td> <?= $qty ?></td>
                       </tr>
               <?php
                   }
               }
               ?>
            </table>
        </div>
</section>
<?php require 'inc/foot.php'; ?>
