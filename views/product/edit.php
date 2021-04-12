<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">    
    <h1> Edicion de producto</h1>

    <form class="form" action="/product/update/<?= $product->id ?>" method="POST">

    <div class="form-group">
        <label>Nombre:</label>
        <input class="form-control" type="text" name="name" value="<?= $product->name ?>"> 
    </div>

    <div class="form-group">
        <label >Tipo:</label>
        <select class="from-control" name="type_id" id="" >
            <?php foreach ($types as $type ) {?>
            <option value="<?= $type->id?>"
            <?= $type->id == $product->type_id ? "selected" :"" ?>
            >
                <?=$type->name?>
            </option>
            <?php }?>
        </select>
    </div>

    <div class="form-group">
        <label>Precio</label>
        <input class="form-control" type="text" name="price" value="<?= $product->price ?>"> 
    </div>

    <div class="form-group">
        <input class="form-control" type="submit" value="actualizar"> 
    </div>
    </form>

</main>

<?php include('../views/parts/footer.php'); ?>