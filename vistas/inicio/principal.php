<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> MENU</h1>
            <p></p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">MENU</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Cantidad Productos</h3>
              </p>
            </div>
          </div>
          <div class="col-md-6">
    <div class="card">
        <h3 class="card-title">Listado de Productos</h3>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->modelo->Listar() as $producto) : ?>
                        <tr>
                            <td><?= $producto->pro_id ?></td>
                            <td><?= $producto->pro_nom ?></td>
                            <td><?= $producto->pro_mar ?></td>
                            <td><?= $producto->pro_pre ?></td>
                            <td><?= $producto->pro_can ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
      </div>
        </div>
      </div>
    </div>