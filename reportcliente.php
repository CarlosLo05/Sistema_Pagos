<?php
include("php/dbconnect.php");

?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="utf-8" />

    <link rel="shortcut icon" href="/micono.ico"/>

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

<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-234MTK1YVK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-234MTK1YVK');
</script>-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HQH7VP8CP3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HQH7VP8CP3');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193321395-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193321395-1');
</script>        
</head>
<?php


include("php/headercliente.php");

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
                <img class="reporte" src="img/video.png" alt="report">
                    Video Guía:</h1> </br>
                </div>
            </div>
  <div class="contvideo">
  <iframe class="responsive-iframe" src="https://www.youtube.com/embed/oN-bqKnPTmA"> </iframe>
</div>
<div class="row">
                <div class="col-md-12">
                <h1 class="page-head-line">
                <img class="reporte" src="img/formulario.png" alt="report">
                    Formulario de Pago:</h1> </br>
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
            <div class="col-md-12">

<fieldset class="scheduler-border" >

    <legend  class="scheduler-border">Formulario:</legend>

<form class="form-inline" role="form" id="searchform">

  <div class="form-group">

    <label for="email">Llenar Formulario de Pago: </label>

  </div>

   <button type="button" class="btn btn-success btn-sm" id="find"> <a href="https://forms.gle/tT3EuAGxHBdLcyjo6"target=_blank>Ir a formulario</a>  </button>

  
  <h4 class="infor">Su pago será verificado lo más pronto posible.</h4>
  <h4 class="infor">Su pago puede tardar en reflejarse hasta 72 horas.</h4>
</form>

</fieldset>

</div>

</div>      
<div class="row">

                    <div class="col-md-12">
                        <h1 class="page-head-line">
                        <img class="reporte" src="img/reporte.png" alt="report">
                             Reportes De Pagos
						</h1>
                    </div>

                </div>
<div class="row" style="margin-bottom:20px;">

<div class="col-md-12">

<fieldset class="scheduler-border" >

    <legend  class="scheduler-border">Búsqueda:</legend>

<form class="form-inline" role="form" id="searchform">

  <div class="form-group">

    <label for="email">Cédula Del Estudiante: </label>

    <input type="text" class="form-control" id="student" name="student">

  </div>

   <button type="button" class="btn btn-success btn-sm" id="find" > Buscar </button>

  <button type="reset" class="btn btn-danger btn-sm" id="clear" > Limpiar </button>
  <h4 class="infor">Si no encuentra resultado alguno al buscar por medio del n° de cédula, <br> utilize el servicio de atención al cliente por medio de whatsapp.</h4>
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

    url : 'ajxcliente.php',

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
    let buscar = $("#student").val();
    if(buscar != ""){
     mydatatable();
    }
    

});


$('#clear').click(function () {
  $('#searchform')[0].reset();
  clearData();
});

		

function mydatatable(){

        

              $("#subjectresult").html('<table class="table table-striped table-bordered table-hover" id="tSortable22"><thead><tr><th>Nombre / Cédula</th><th>Total Adeudado</th><th>Por Pagar</th><th>Año</th><th>Fecha de Ingreso</th><th>Acción</th></tr></thead><tbody></tbody></table>');

			  

			    $("#tSortable22").dataTable({

							      'sPaginationType' : 'full_numbers',

							     "bLengthChange": false,

                  "bFilter": false,

                  "bInfo": false,

							       'bProcessing' : true,

							       'bServerSide': true,

							       'sAjaxSource': "datatablecliente.php?"+$('#searchform').serialize()+"&type=report",

							       'aoColumnDefs': [{

                                   'bSortable': false,

                                   'aTargets': [-1] /* 1st one, start by the right */

                                                }]

                                   });





}
function clearData(){
  $("#subjectresult").html('<table class="table table-striped table-bordered table-hover" id="tSortable22"><thead><tr><th>Nombre / Cédula</th><th>Total Adeudado</th><th>Por Pagar</th><th>Año</th><th>Fecha de Ingreso</th><th>Acción</th></tr></thead><tbody></tbody></table>');
}
		

////////////////////////////

 $("#tSortable22").dataTable({


            });



///////////////////////////		





	

});





function GetFeeForm(sid)

{



$.ajax({

            type: 'post',

            url: 'getfeeformcliente.php',

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
             a.document.write('<link href="css/custom.css" rel="stylesheet" />')

             a.document.write('</head>');

             a.document.write('<body > <h1>Recibo de Pago <br>'); 

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

                            Sus Reportes De Pagos  

                        </div>

                        <div class="panel-body">

                            <div class="table-sorting table-responsive" id="subjectresult">

                                <table class="table table-striped table-bordered table-hover" id="tSortable22">

                                    <thead>

                                        <tr>

                                          

                                            <th>Nombre / Cédula</th>                                            

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

          <h4 class="modal-title">Recibo de Pagos</h4>

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
<!--Start of Tawk.to Script-->
<!--<script class="chat" type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6063062df7ce182709355ccb/1f21d08q9';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>-->
<!--End of Tawk.to Script-->


    <div id="footer-sec">

    <p>&copy;Desarrollo Web Carlos Lo</p>

        <p>Asociación De Padres De Familia</a></p>

    </div>

   

  

    <!-- BOOTSTRAP SCRIPTS -->

    <script src="js/bootstrap.js"></script>

    <!-- METISMENU SCRIPTS -->

    <script src="js/jquery.metisMenu.js"></script>

       <!-- CUSTOM SCRIPTS -->

    <script src="js/custom1.js"></script>
<!--JQuery-->  
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>  
<!--Floating WhatsApp css-->  
<link rel="stylesheet" href="css/floating-wpp.min.css">  
<!--Floating WhatsApp javascript-->  
<script type="text/javascript" src="js/floating-wpp.min.js"></script>
<!--Div where the WhatsApp will be rendered-->  
<div id="WAButton"></div>

<!--whatsapp-->

<div id='whatsapp-chat' class='hide'>
	<div class='header-chat'>
	<div class='head-home'><h3>Padres De Familia D.O.C</h3>
		<div class='info-avatar'><img src='https://sistemadecotizaciones.files.wordpress.com/2020/08/supportmale.png'/></div>
		
	</div>
 
	<div class='get-new'>
		<div id='get-label'>Servicio al cliente</div>
		<div id='get-nama'>Por: Elsy Villegas</div>
		
	</div>
</div>
 
<div class='start-chat'>
<div class='first-msg'><span>¡Hola! ¿Qué puedo hacer por ti?</span></div>
<div class='blanter-msg'><textarea id='chat-input' placeholder='Escribe un mensaje' maxlength='120' row='1'></textarea>
<a href='#' onclick="enviar_mensaje();" id='send-it'>Enviar</a></div></div>
<div id='get-number'>+507 7300270</div><a class='close-chat' onclick="cerrar_chat();" href='#'>×</a>
</div>
 
 
<a class='blantershow-chat' onclick="mostrar_chat();" href='#' title='Show Chat'><svg width="20" viewBox="0 0 24 24"><defs/><path fill="#eceff1" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z"/><path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z"/><path fill="#fafafa" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z"/></svg> 
Escribe Con Nosotros</a>

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