<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  </head>
  <body>


<form class="" action="/orders" method="post">

  <section>
<div class="panel panel-footer" >
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cantidad</th>
          <th>Precio</th>
          <th>Monto</th>

         <th><a href="#" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
      </tr>
    </thead>



<!-- toma en cuenta estos campos input como array dentro del body-->
    <tbody>
      <tr>
        <td><input class="form-control" name="name[]" type="text"></td>
        <td><input class="form-control" name="apellido[]" type="text"></td>
        <td><input class="form-control cantidad" name="cantidad[]" type="text"></td>
        <td><input class="form-control precio" name="precio[]" type="text" ></td>
        <td><input class="form-control monto" name="monto[]" type="text"></td>


      <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>

      </tr>

    </tbody>

    <!-- -->

    <tfoot>
<tr>

  <td style="border: none"></td>
  <td style="border: none"></td>
  <td style="border: none"></td>
  <td>Total :</td>
  <td><b class="total"></b></td>

       <td><input type="submit" name="" value="Submit" class="btn btn-success"></td>
</tr>

    </tfoot>

  </table>
</div>
</section>

</form>




<script type="text/javascript">



$('tbody').delegate('.cantidad,.precio','keyup',function(){

  var tr = $(this).parent().parent();
  var cantidad = tr.find('.cantidad').val();
  var precio = tr.find('.precio').val();
  var monto = (cantidad*precio);
  tr.find('.monto').val();

  total();

});




$('.addRow').on('click',function (){

addRow();

});



function addRow(){

var tr = '<tr>'+

'<td><input name="name[]" type="text" class="form-control" ></td>'+

'<td><input name="apellido[]" type="text" class="form-control"></td>'+

'<td><input name="cantidad[]" type="text" class="form-control"></td>'+

'<td><input name="precio[]" type="text" class="form-control"></td>'+

'<td><input name="monto[]" type="text" class="form-control"></td>'+


'<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+

'</tr>';


$('tbody').append(tr);

};





$('.remove').live('click',function(){

var last = $('tbody tr').length;

if (last == 1) {

alert('Esta columna no se puede borrar');
}else {

  $(this).parent().parent().remove();
}




});

</script>

</body>
</html>
