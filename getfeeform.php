<?php
include("php/dbconnect.php");
$joindate = date('Y-m-d');
$datePicker = date("Y-m-d", strtotime($joindate));
if(isset($_POST['req']) && $_POST['req']=='1') 
{

$sid = (isset($_POST['student']))?mysqli_real_escape_string($conn,$_POST['student']):'';

 $sql = "select s.id,s.sname,s.balance,s.fees,s.contact,b.branch,s.joindate from student as s,branch as b where b.id=s.branch and  s.delete_status='0' and s.id='".$sid."'";
$q = $conn->query($sql);
if($q->num_rows>0)
{

$res = $q->fetch_assoc();
echo '  <form class="form-horizontal" id ="signupForm1" action="fees.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Nombre y Apellido:</label>
    <div class="col-sm-10">
      <input type="text" class="form-label" disabled  value="'.$res['sname'].'" >
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Cédula:</label>
    <div class="col-sm-10">
      <input type="text" class="form-label" disabled  value="'.$res['contact'].'" />
    </div>
  </div>
  
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Pago Total:</label>
    <div class="col-sm-10">
      <input type="text" class="form-label" name="totalfee" id="totalfee"   value="'.$res['fees'].'" disabled />
    </div>
  </div>
  
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Por Pagar:</label>
    <div class="col-sm-10">
      <input type="text" class="form-label" name="balance"  id="balance" value="'.$res['balance'].'" disabled />
	  <input type="hidden" value="'.$res['id'].'" name="sid">
    </div>
  </div>
  
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Cantidad a Pagar:</label>
    <div class="col-sm-10">
      <input type="text" class="form-label" name="paid"  id="paid"  />
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Fecha:</label>
    <div class="col-sm-10">
	
      <input type="text" class="form-label" name="submitdate" disabled value="'.$datePicker.'"  id="submitdate"  readonly />
    </div>
  </div>
  
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">Observación:</label>
    <div class="col-sm-10">
      <textarea class="form-label" name="transcation_remark" id="transcation_remark"></textarea>
    </div>
  </div>
 
 
 
 
 
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="save">Guardar</button>
    </div>
  </div>
</form>

<script type="text/javascript">
$(document).ready( function() {
  
$("#submitdate").datepicker( {
        changeMonth: true,
        changeYear: true,
       
        dateFormat: "yy-mm-dd",
      
    });
	
	
///////////////////////////

$( "#signupForm1" ).validate( {
				rules: {
					
					
					paid: {
						required: true,
						digits: false,
						max:'.$res['balance'].'
					}	
					
					
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".col-sm-10" ).addClass( "has-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}

					
					if ( !element.next( "span" )[ 0 ] ) {
						$( "<span class=\'glyphicon glyphicon-remove form-control-feedback\'></span>" ).insertAfter( element );
					}
				},
				success: function ( label, element ) {
					if ( !$( element ).next( "span" )[ 0 ] ) {
						$( "<span class=\'glyphicon glyphicon-ok form-control-feedback\'></span>" ).insertAfter( $( element ) );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-10" ).addClass( "has-error" ).removeClass( "has-success" );
					$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-10" ).addClass( "has-success" ).removeClass( "has-error" );
					$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
				}
			} );


//////////////////////////	
	
	
	
});

</script>
';

}else
{
echo "Something Goes Wrong! Try After sometime.";
}


}

if(isset($_POST['req']) && $_POST['req']=='2') 
{

$sid = (isset($_POST['student']))?mysqli_real_escape_string($conn,$_POST['student']):'';
$sql = "select paid,submitdate,transcation_remark from fees_transaction  where stdid='".$sid."'";
$fq = $conn->query($sql);
if($fq->num_rows>0)
{


 $sql = "select s.id,s.sname,s.balance,s.fees,s.contact,b.branch,s.emailid,s.about,s.joindate from student as s,branch as b where b.id=s.branch  and s.id='".$sid."'";
$sq = $conn->query($sql);
$sr = $sq->fetch_assoc();

echo'
<div id="logo">
<img class="insignia" src="logo.png">
</div>
<h4 class="empresa"><strong>Asociación De Padres De Familia D.O.C</strong></h4>
<h4 class="empresa"><strong>Dirección: La Concepción, Bugaba</strong></h4>
<h4 class="empresa"><strong>Teléfono: 730-0270</strong></h4>
<h4 class="web"><strong>Web: http://www.sistpagos.com</strong></h4>
<hr/>
';

echo '
<h4>Información del Estudiante:</h4>
<div class="table-responsive">
<table class="table table-bordered">
<tr>
<th>Nombre</th>
<td>'.$sr['sname'].'</td>
<th>Año</th>
<td>'.$sr['branch'].'</td>
</tr>
<tr>
<th>Cedula</th>
<td>'.$sr['contact'].'</td>
<th>Correo:</th>
<td>'.$sr['emailid'].'</td>
</tr>
<th>Grupo:</th>
<td>'.$sr['about'].'</td>
<th>Fecha de Ingreso:</th>
<td>'.date("d-m-Y", strtotime($sr['joindate'])).'</td>
</tr>


</table>
</div>
';


echo '
<h4>Información de Pagos:</h4>
<div class="table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Fecha</th>
        <th>Pago</th>
        <th>Observaciones</th>
      </tr>
    </thead>
    <tbody>';
	$totapaid = 0;
while($res = $fq->fetch_assoc())
{
$totapaid+=$res['paid'];
        echo '<tr>
        <td>'.date("d-m-Y", strtotime($res['submitdate'])).'</td>
        <td>'.$res['paid'].'</td>
        <td>'.$res['transcation_remark'].'</td>
      </tr>' ;
}
      
echo '	  
    </tbody>
  </table>
 </div> 
 
<table style="width:150px;" >
<tr>
<th>Total Adeudado: 
</th>
<td>'.$sr['fees'].'
</td>
</tr>

<tr>
<th>Total Pagado: 
</th>
<td>'.number_format($totapaid,2).'
</td>
</tr>

<tr>
<th>Por Pagar: 
</th>
<td>'.$sr['balance'].'
</td>
</tr>
</table>
 ';
echo '
 </br>
 <h3 class="final">Este documento no es válido sin sello fresco.<h3>
';

 }
else
{
echo 'Sin pagos ingresados.';
}
 
}
		
		 
			
			
	

?>