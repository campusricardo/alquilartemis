<?php 

$url_entrada = "http://localhost/alquilartemis/apiRest/controllers/entrada_api.php?op=GetAll";
$url_salida = "http://localhost/alquilartemis/apiRest/controllers/salida_api.php?op=GetAll";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url_entrada);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$output = json_decode(curl_exec($curl));
curl_close($curl);

$curl2 = curl_init();
curl_setopt($curl2, CURLOPT_URL, $url_salida);
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, 1);
$output2 = json_decode(curl_exec($curl2));



?>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th> Entrega ID</th>
                    <th> Empleado ID</th>
                    <th>Constructora ID</th>
                    <th> Inventario ID</th>
                    <th>Obra ID</th>
                    <th> Entrada Cantidad</th>
                    <th> Fecha Entrega </th>
                    <th> Observaciones</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($output as $out){?>
                  <tr>
                    <td> <?= $out->entrada_id ?> </td>
                    <td> <?= $out->id_empleado ?> </td>
                    <td> <?= $out->id_constructora ?> </td>
                    <td> <?= $out->id_inventario ?> </td>
                    <td> <?= $out->id_obra ?> </td>
                    <td> <?= $out->entrada_cantidad ?> </td>
                    <td> <?= $out->fecha_entreda ?> </td>
                    <td> <?= $out->observaciones ?> </td>
                  </tr>
                  <?php } ?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th> Entrega ID</th>
                    <th> Empleado ID</th>
                    <th>Constructora ID</th>
                    <th> Inventario ID</th>
                    <th>Obra ID</th>
                    <th> Entrada Cantidad</th>
                    <th> Fecha Entrega </th>
                    <th> Observaciones</th>
                  </tr>
                  </tfoot>
                </table>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th> Salida ID</th>
                    <th> Constructora ID</th>
                    <th>Empleado ID</th>
                    <th> Obra ID</th>
                    <th>Inventario ID</th>
                    <th> Fecha Salida</th>
                    <th> Sub Total Peso </th>
                    <th> Placa de Transporte </th>
                    <th> Observaciones </th>
                    <th> Cantidad Salida </th>
                    <th> Valor Unitario </th>
                    <th> Fecha StandBye</th>
                    <th> Estado </th>
                    <th> Valor Total</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($output2 as $out){?>
                  <tr>
                    <td> <?= $out->salida_id ?> </td>
                    <td> <?= $out->id_constructora ?> </td>
                    <td> <?= $out->id_empleado ?> </td>
                    <td> <?= $out->id_obra ?> </td>
                    <td> <?= $out->id_inventario ?> </td>
                    <td> <?= $out->fecha_salida ?> </td>
                    <td> <?= $out->subtotalPeso ?> </td>
                    <td> <?= $out->placatransporte ?> </td>
                    <td> <?= $out->observaciones ?> </td>
                    <td> <?= $out->cantidad_salida ?> </td>
                    <td> <?= $out->valorUnitario ?> </td>
                    <td> <?= $out->fecha_standBye ?> </td>
                    <td> <?= $out->estado ?> </td>
                    <td> <?= $out->valorTotal ?> </td>
                  </tr>
                  <?php } ?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th> Salida ID</th>
                    <th> Constructora ID</th>
                    <th>Empleado ID</th>
                    <th> Obra ID</th>
                    <th>Inventario ID</th>
                    <th> Fecha Salida</th>
                    <th> Sub Total Peso </th>
                    <th> Placa de Transporte </th>
                    <th> Observaciones </th>
                    <th> Cantidad Salida </th>
                    <th> Valor Unitario </th>
                    <th> Fecha StandBye</th>
                    <th> Estado </th>
                    <th> Valor Total</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>