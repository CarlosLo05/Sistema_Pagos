<?php
include("php/dbconnect.php");
include("php/checklogin.php");

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="/micono.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema de Pago D.O.C</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	
	<link href="css/ui.css" rel="stylesheet" />
	<link href="css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" />	
	<link href="css/datepicker.css" rel="stylesheet" />	
	   <link href="css/datatable/datatable.css" rel="stylesheet" />
	   
    <script src="js/jquery-1.10.2.js"></script>	
    <script type='text/javascript' src='js/jquery/jquery-ui-1.10.1.custom.min.js'></script>
   <script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
 
		 <script src="js/dataTable/jquery.dataTables.min.js"></script>
		
		 
	
</head>
<?php
include("php/header.php");
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Reporte Pagos
						
						</h1>

                    </div>
                </div>
				
				
	
		
		

<div class="row" style="margin-bottom:20px;">
<div class="col-md-12">
<fieldset class="scheduler-border" >
    <legend  class="scheduler-border">Búsqueda:</legend>
<form class="form-inline" role="form" id="searchform">
  <div class="form-group">
    <label for="email">Nombre</label>
    <input type="text" class="form-control" id="student" name="student">
  </div>
  
   <div class="form-group">
    <label for="email"> Fecha de Ingreso </label>
    <input type="text" class="form-control" id="doj" name="doj" >
  </div>
  
  <div class="form-group">
    <label for="email"> Año Estudiante </label>
    <select  class="form-control" id="branch" name="branch" >
		<option value="" >Selecciona Año</option>
                                    <?php
									$sql = "select * from branch where delete_status='0' order by branch.id asc";
									$q = $conn->query($sql);
									
									while($r = $q->fetch_assoc())
									{
									echo '<option value="'.$r['id'].'"  '.(($branch==$r['id'])?'selected="selected"':'').'>'.$r['branch'].'</option>';
									}
									?>
	</select>
  </div>
  
   <button type="button" class="btn btn-success btn-sm" id="find" > Búsqueda </button>
  <button type="reset" class="btn btn-danger btn-sm" id="clear" > Limpiar </button>
</form>
</fieldset>

</div>
</div>

<script type="text/javascript">
$(document).ready( function() {

/*
$('#doj').datepicker( {
        changeMonth: true,
        changeYear: true,
        showButtonPanel: false,
        dateFormat: 'mm/yy',
        onClose: function(dateText, inst) { 
            $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
        }
    });
	1353c-p function 18cp 
*/
	
/******************/	
	 $("#doj").datepicker({
         
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'mm/yy',
        onClose: function(dateText, inst) {
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).val($.datepicker.formatDate('MM yy', new Date(year, month, 1)));
        }
    });

    $("#doj").focus(function () {
        $(".ui-datepicker-calendar").hide();
        $("#ui-datepicker-div").position({
            my: "center top",
            at: "center bottom",
            of: $(this)
        });
    });

/*****************/
	
$('#student').autocomplete({
		      	source: function( request, response ) {
		      		$.ajax({
		      			url : 'ajx.php',
		      			dataType: "json",
						data: {
						   name_startsWith: request.term,
						   type: 'report'
						},
						 success: function( data ) {
						 
							 response( $.map( data, function( item ) {
							
								return {
									label: item,
									value: item
								}
							}));
						}
						
						
						
		      		});
		      	}
				/*,
		      	autoFocus: true,
		      	minLength: 0,
                 select: function( event, ui ) {
						  var abc = ui.item.label.split("-");
						  //alert(abc[0]);
						   $("#student").val(abc[0]);
						   return false;

						  },
                 */
  

						  
		      });
	

$('#find').click(function () {
mydatatable();
        });


$('#clear').click(function () {

$('#searchform')[0].reset();
mydatatable();
        });
		
function mydatatable()
{
        
              $("#subjectresult").html('<table class="table table-striped table-bordered table-hover" id="tSortable22"><thead><tr><th>Nombre/Cedula</th><th>Total Adeudado</th><th>Por Pagar</th><th>Año</th><th>Fecha de Ingreso</th><th>Acción</th></tr></thead><tbody></tbody></table>');
			  
			    $("#tSortable22").dataTable({
							      'sPaginationType' : 'full_numbers',
							     "bLengthChange": false,
                  "bFilter": false,
                  "bInfo": false,
							       'bProcessing' : true,
							       'bServerSide': true,
							       'sAjaxSource': "datatable.php?"+$('#searchform').serialize()+"&type=report",
							       'aoColumnDefs': [{
                                   'bSortable': false,
                                   'aTargets': [-1] /* 1st one, start by the right */
                                                }]
                                   });


}
		
////////////////////////////
 $("#tSortable22").dataTable({
			     
                  'sPaginationType' : 'full_numbers',
				  "bLengthChange": false,
                  "bFilter": false,
                  "bInfo": false,
                  
                  'bProcessing' : true,
				  'bServerSide': true,
                  'sAjaxSource': "datatable.php?type=report",
				  
			      'aoColumnDefs': [{
                  'bSortable': false,
                  'aTargets': [-1] /* 1st one, start by the right */
              }]
            });

///////////////////////////		


	
});


function GetFeeForm(sid)
{

$.ajax({
            type: 'post',
            url: 'getfeeform.php',
            data: {student:sid,req:'2'},
            success: function (data) {
              $('#formcontent').html(data);
        $("#myModal").modal({backdrop: "static"});
            }
          });


}
function prueba(){
  var divContents = document.getElementById("formcontent").innerHTML; 
  console.log(divContents)
}
function printDiv() { 
             var divContents = document.getElementById("formcontent").innerHTML; 
             var a = window.open('', '', 'height=500, width=500'); 
             a.document.write('<html>'); 
             a.document.write('<head>');
             a.document.write('<link href="css/bootstrap.css" rel="stylesheet" />')
             a.document.write('</head>');
             a.document.write('<body > <h1>Reporte de Pago <br>'); 
             a.document.write(divContents); 
             a.document.write('</body></html>'); 
             a.document.close(); 
             a.print(); 
         }
</script>


		

<style>
#doj .ui-datepicker-calendar
{
display:none;
}

</style>
		
		<div class="panel panel-default">
                        <div class="panel-heading">
                            Gestionar Reporte de Pagos  
                        </div>
                        <div class="panel-body">
                            <div class="table-sorting table-responsive" id="subjectresult">
                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr>
                                          
                                            <th>Nombre</th>                                            
                                            <th>Total Adeudado</th>
											<th>Por Pagar</th>
											<th>Año</th>
											<th>Fecha de Ingreso</th>
											<th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
								    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     
	
	<!-------->
	
	<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reporte de Pagos</h4>
        </div>
        <div class="modal-body" id="formcontent">
        
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-danger"  onclick="printDiv()" >imprimir </input>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

	
    <!--------->
    			
            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
    <a target="_blank">Carlos Lo</a>
    </div>
   
  
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>

    
</body>
</html>