<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">
  <h1>Lista de usuarios  
      <a class="btn btn-primary float-right" href="/producttype/create">Nuevo</a>
  </h1>
  <table class="table table-striped">
        <thead>
            <tr>
            <th>Nombre</th>
            <th></th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($producttypes as $producttype) {?>
                <tr>
                <td><?= $producttype->name ?></td>
                <td><a class="btn btn-primary btn-sm" href="/producttype/show/<?= $producttype->id ?>">  Ver </a></td>
                <td><a class="btn btn-primary btn-sm" href="/producttype/edit/<?= $producttype->id ?>">  Editar </a></td>
                <td><a class="btn btn-primary btn-sm" href="/producttype/delete/<?= $producttype->id ?>">  Borrar </a></td>
                </tr>
            <?php } ?>            
        </tbody>
    </table>
</main>

<?php include('../views/parts/footer.php'); ?>