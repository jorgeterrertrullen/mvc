<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">    
    <h1>Alta de producto</h1>

    <form class="form" action="/product/store" method="POST">

    <div class="form-group">
        <label>Nombre:</label>
        <input class="form-control" type="text" name="name"> 
    </div>

    <div class="form-group">
        <label >Tipo:</label>
        <select class="from-control" name="type_id" id="">
            <?php foreach ($types as $type ) {?>
            <option value="<?= $type->id?>">
                <?=$type->name?>
            </option>
            <?php }?>
        </select>
    </div>

    <div class="form-group">
        <label>Precio</label>
        <input class="form-control" type="text" name="price"> 
    </div>

    <div class="form-group">
        <input class="form-control" type="submit" value="Crear"> 
    </div>
    </form>

</main>

<?php include('../views/parts/footer.php'); ?>
