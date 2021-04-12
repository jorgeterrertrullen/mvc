<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">    
    <h1>Detalle del producto</h1>
    <div class="card">
        <div class="card-header">
           Producto numero <?= $product->id ?>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Id: <?= $product->id ?></li>
            <li class="list-group-item">nombre: <?= $product->name ?></li>
            <li class="list-group-item">type_id: <?= $product->type_id ?></li>
            <li class="list-group-item">price: <?= $product->price ?></li>
        </ul>
  </div>    
</main>

<?php include('../views/parts/footer.php'); ?>
