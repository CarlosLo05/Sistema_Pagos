<?php
include("php/dbconnect.php");
include("php/checklogin.php");
$errormsg= '';
if(isset($_POST['save']))
{
$paid = mysqli_real_escape_string($conn,$_POST['paid']);
$joindate = date('Y-m-d');
/*$submitdate = mysqli_real_escape_string($conn,$_POST['submitdate']);*/
$transcation_remark = mysqli_real_escape_string($conn,$_POST['transcation_remark']);
$sid = mysqli_real_escape_string($conn,$_POST['sid']);


$sql1 = "select fees,balance  from student where id = '$sid'";
$sq = $conn->query($sql1);
$sr = $sq->fetch_assoc();
$totalfee = $sr['fees'];
if($sr['balance']>0)
{
$sql2 = "insert into fees_transaction(stdid,sname,contact,submitdate,transcation_remark,paid,balance,fees) values('$sid','$sname','$contact','$joindate','$transcation_remark','$paid','$fees','$balance') ";
$conn->query($sql2);
$sql3 = "SELECT sum(paid) as totalpaid FROM fees_transaction WHERE stdid = '$sid'";
$tpq = $conn->query($sql3);
$tpr = $tpq->fetch_assoc();
$totalpaid = $tpr['totalpaid'];
$tbalance = $totalfee - $totalpaid;

$sql4 = "update student set balance='$tbalance' where id = '$sid'";
$conn->query($sql4);
$sql5 = "update fees_transaction set balance='$tbalance' where id = '$sid'";
$conn->query($sql5);

 echo '<script type="text/javascript">window.location="fees.php?act=1";</script>';
}
}

if(isset($_REQUEST['act']) && @$_REQUEST['act']=="1")
{
$errormsg = "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Excelente!</strong> Pago realizado exitósamente</div>";
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="/micono.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="57x57" href="./img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./img/favicon/ms-icon-144x144.png">
    <meta property="og:description" content="Cobros Padres de Familia D.O.C">
    <meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,shrink-to-fit=no,user-scalable=no" name="viewport">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="expires" content="43200"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:image" content="./img/favicon/android-icon-192x192.png">
    <meta name="theme-color" content="#ffffff">
    <title>Sistema de Cobros D.O.C</title>

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
	<script src="https://kit.fontawesome.com/c5157cae10.js" crossorigin="anonymous"></script>

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
            <span class="stickers">
                    <img class="stickerOne" src="img/scotch.png" alt="pegatina">
                    <img class="stickerTwo" src="img/scotch.png" alt="peagtina">
                </span>
                <div class="row">
                    <div class="col-md-12">
                       <h1 class="page-head-line">
                        <img class="pagos" src="img/pago-en-efectivo.png" alt="pagos">
                             Abonar / Cancelar Pago 
                        </h1>
                    </div>
                </div>
    	<?php
		echo $errormsg;
		?>
		
		

<div class="row" style="margin-bottom:20px;">
<div class="col-md-12">
<fieldset class="scheduler-border" >
    <legend  class="scheduler-border">Búsqueda:</legend>
<form class="form-inline" role="form" id="searchform">
  <div class="form-group">
    <label for="email">Nombre:</label>
    <input type="text" class="form-control" id="student" name="student">
  </div>
  
   <div class="form-group">
    <label for="email"> Fecha de Ingreso:</label>
    <input type="text" class="form-control" id="doj" name="doj" >
  </div>
  
  <div class="form-group">
    <label for="email"> Año Estudiante:</label>
    <select  class="form-control año" id="branch" name="branch" >
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
   <button type="button" class="btn btn-success btn-sm" id="find" > Buscar </button>
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
						   type: 'studentname'
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
        
              $("#subjectresult").html('<table class="table table-striped table-bordered table-hover" id="tSortable22"><thead><tr><th>Nombre/Cédula</th><th>Total Adeudado</th><th>Por Pagar</th><th>Año</th><th>Fecha de Ingreso</th><th>Acción</th></tr></thead><tbody></tbody></table>');
			  
			    $("#tSortable22").dataTable({
							      'sPaginationType' : 'full_numbers',
							     "bLengthChange": false,
                  "bFilter": false,
                  "bInfo": true,
							       'bProcessing' : true,
							       'bServerSide': true,
							       'sAjaxSource': "datatable.php?"+$('#searchform').serialize()+"&type=feesearch",
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
                  "bInfo": true,
                  
                  'bProcessing' : true,
				  'bServerSide': true,
                  'sAjaxSource': "datatable.php?type=feesearch",
				  
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
            data: {student:sid,req:'1'},
            success: function (data) {
              $('#formcontent').html(data);
			  $("#myModal").modal({backdrop: "static"});
            }
          });


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
          Gestionar Pagos  
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
					<th>Fecha Ingreso</th>
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
          <h4 class="modal-title">Tomar Pago</h4>
        </div>
        <div class="modal-body" id="formcontent">
        
        </div>
        <div class="modal-footer">
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
    <p>&copy;Desarrollo Web Carlos Lo</p>
        <p>Consultas al Whatsapp <a href="https://api.whatsapp.com/send?phone=+507 64822800&text=Hola%20Carlos%20necesito%20ayuda%20con%20algo%20del%20programa"target=_blank> Carlos Lo</a></p>
    </div>
   
  
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>

    <!--whatsapp-->

<div id='whatsapp-chat' class='hide'>
	<div class='header-chat'>
	<div class='head-home'><h3>Soporte Carlos Lo</h3>
		<div class='info-avatar'><img src='https://sistemadecotizaciones.files.wordpress.com/2020/08/supportmale.png'/></div>
		
	</div>
 
	<div class='get-new'>
		<div id='get-label'>SOPORTE</div>
		<div id='get-nama'>Servicio al cliente</div>
		
	</div>
</div>
 
<div class='start-chat'>
<div class='first-msg'><span>¡Hola! ¿Qué puedo hacer por ti?</span></div>
<div class='blanter-msg'><textarea id='chat-input' placeholder='Escribe un mensaje' maxlength='120' row='1'></textarea>
<a href='#' onclick="enviar_mensaje();" id='send-it'>Enviar</a></div></div>
<div id='get-number'>+507 64822800</div><a class='close-chat' onclick="cerrar_chat();" href='#'>×</a>
</div>
 
 
<a class='blantershow-chat' onclick="mostrar_chat();" href='#' title='Show Chat'><svg width="20" viewBox="0 0 24 24"><defs/><path fill="#eceff1" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z"/><path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z"/><path fill="#fafafa" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z"/></svg> 
Chatea con nosotros</a>

<script>
function enviar_mensaje(){
	var a = document.getElementById("chat-input");
    if ("" != a.value) {
        var b = document.getElementById("get-number").innerHTML,c = document.getElementById("chat-input").value, d = "https://web.whatsapp.com/send", e = b,  f = "&text=" + c;
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) var d = "whatsapp://send";  var g = d + "?phone=" + e + f;  window.open(g, "_blank");
    }
}
 
const whatsapp_chat =document.getElementById("whatsapp-chat");
   
   function cerrar_chat(){
		whatsapp_chat.classList.add("hide");
		whatsapp_chat.classList.remove("show");
	   
   }
   
   function mostrar_chat(){
	    whatsapp_chat.classList.add("show");
		whatsapp_chat.classList.remove("hide");
   }
    
</script>
<style>
/* CSS Whatsapp Chat */
#whatsapp-chat {
    position: fixed;
    background: #fff;
    width: 350px;
    border-radius: 10px;
    box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
    bottom: 90px;
    right: 30px;
    overflow: hidden;
    z-index: 99;
    animation-name: showchat;
    animation-duration: 1s;
    transform: scale(1);
}
 
a.blantershow-chat {
    /*   background: #009688; */
    background: #fff;
    color: #404040;
    position: fixed;
    display: flex;
    font-weight: 400;
    justify-content: space-between;
    z-index: 98;
    bottom: 25px;
    right: 30px;
    font-size: 15px;
    padding: 10px 20px;
    border-radius: 30px;
    box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
}
 
a.blantershow-chat svg {
    transform: scale(1.2);
    margin: 0 10px 0 0;
}
 
.header-chat {
    background: #095e54;
    color: #fff;
    padding: 20px;
}
.header-chat h3 {
    margin: 0 0 10px;
}
.header-chat p {
    font-size: 14px;
    line-height: 1.7;
    margin: 0;
}
.info-avatar {
    position: relative;
}
.info-avatar img {
    border-radius: 100%;
    width: 50px;
    float: left;
    margin: 0 10px 0 0;
}
.info-avatar:before {
    content: "\f232";
    z-index: 1;
    font-family: "Font Awesome 5 Brands";
    background: #23ab23;
    color: #fff;
    padding: 4px 5px;
    border-radius: 100%;
    position: absolute;
    top: 30px;
    left: 30px;
}
 
.info-chat span {
    display: block;
}
#get-label,
span.chat-label {
    font-size: 12px;
    color: #888;
}
#get-nama,
span.chat-nama {
    margin: 5px 0 0;
    font-size: 15px;
    font-weight: 700;
    color: #222;
}
#get-label,
#get-nama {
    color: #fff;
}
span.my-number {
    display: none;
}
.blanter-msg {
    color: #444;
    padding: 20px;
    font-size: 12.5px;
    text-align: center;
    border-top: 1px solid #ddd;
}
textarea#chat-input {
    border: none;
    font-family: "Arial", sans-serif;
    width: 100%;
    height: 20px;
    outline: none;
    resize: none;
}
a#send-it {
    color: #555;
    width: 55px;
    margin: -5px 0 0 5px;
    font-weight: 700;
    padding: 8px;
    background: #eee;
    border-radius: 10px;
}
.first-msg {
    background: #f5f5f5;
    padding: 30px;
    text-align: center;
}
.first-msg span {
    background: #e2e2e2;
    color: #333;
    font-size: 14.2px;
    line-height: 1.7;
    border-radius: 10px;
    padding: 15px 20px;
    display: inline-block;
}
.start-chat .blanter-msg {
    display: flex;
}
#get-number {
    display: none;
}
a.close-chat {
    position: absolute;
    top: 5px;
    right: 15px;
    color: #fff;
    font-size: 30px;
}
@keyframes showhide {
    from {
        transform: scale(0.5);
        opacity: 0;
    }
}
@keyframes showchat {
    from {
        transform: scale(0);
        opacity: 0;
    }
}
@media screen and (max-width: 480px) {
    #whatsapp-chat {
        width: auto;
        left: 5%;
        right: 5%;
        font-size: 80%;
    }
}
.hide {
    display: none;
    animation-name: showhide;
    animation-duration: 1.5s;
    transform: scale(1);
    opacity: 1;
}
.show {
    display: block;
    animation-name: showhide;
    animation-duration: 1.5s;
    transform: scale(1);
    opacity: 1;
}
</style>
    
</body>
</html>
