
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Multiple</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>


  </head>
  <body>

    <div class="container">



    <form class="" action="index.html" method="post">

      <section>

        <div class="panel panel-header">


          <div class="row">

<div class="col-md-6">



          <div class="form-group">

        <input type="text" name="name" class="form-control" value="" placeholder="Nombre">

          </div>
        </div>




            <div class="col-md-6">



                  <div class="form-group">

                <input type="text" name="apellido" class="form-control" value="" placeholder="Apellido">

                  </div>
                </div>





        <div class="panel panel-footer">

          <table class="table table-bordered">

            <thead>
              <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cantidad</th>
                <th>Presupuesto</th>
                <th>Amount</th>

                <th><a href="#" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>  <input type="text" name="name[]" class="form-control" value="" placeholder="Nombre"></td>

                <td>  <input type="text" name="apellido[]" class="form-control" value="" placeholder="Apellido"></td>

                <td>  <input type="text" name="quantity[]" class="form-control" value="" placeholder="Cantidad"></td>

                  <td>  <input type="text" name="budget[]" class="form-control" value="" placeholder="Presupuesto"></td>

                  <td>  <input type="text" name="amount[]" class="form-control amount" value="" placeholder="Monto"></td>


                <td><a href="#" class="btn btn-danger remove" ><i class="glyphicon glyphicon-remove"></i></a></td>
              </tr>
            </tbody>


            <tfoot>

              <tr>

                <td style="border: none">
                </td>
                <td style="border: none" >
                </td>



                <td style="border: none">
                </td>

                  <td>Total</td>

                  <td><b class="total"></b>
                  </td>










                <td><input type="submit" value="Submit" class="btn btn-success" name=""></td>




              </tr>

            </tfoot>

          </table>

        </div>



      </section>

    </form>

    </div>


    <script type="text/javascript">

    $('tbody').delegate('.quantity,.budget','keyup',function(){
          var tr=$(this).parent().parent();
          var quantity=tr.find('.quantity').val();
          var budget=tr.find('.budget').val();
          var amount=(quantity*budget);
          tr.find('.amount').val(amount);
          
      });

    //primero se crea la funcion onclick para que en el momento en q se apriete el boton se aumente el registro en uno

    $('.addRow').on('click',function(){

addRow();

});

function addRow(){

  var tr = '<tr>' +


  '<td> <input type="text" name="name[]" class="form-control"> </td>'+


  '<td> <input type="text" name="apellido[]" class="form-control"> </td>'+

  '<td> <input type="text" name="quantity[]" class="form-control"> </td>'+

    '<td> <input type="text" name="budget[]" class="form-control"> </td>'+

  '<td> <input type="text" name="amount[]" class="form-control"> </td>'+

  '<td><a href="#" class="btn btn-danger remove" ><i class="glyphicon glyphicon-remove"></i></a></td>'+

  '</tr>';

  $('tbody').append(tr);


};


//esta funcion es para boorar un input a la vez

$('.remove').live('click',function(){

  var last= $('tbody tr').length;



// este if evita borrar el ultimo campo
  if(last==1){

    alert("No se puede borrar la ultima columna");


  }else {


    $(this).parent().parent().remove();

  }



});


    </script>

  </body>
</html>
