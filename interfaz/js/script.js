$(function(){ 
    $("#btnEnviar").on("click",enviarVenta);
		$(".botones").on("click","article",agregarLista);
    $("#btnGuardar").on("click",registrarUsuario);
    $("#btnGuardarP").on("click",registrarPizza);
    $(".delUser").on("click",EliminarUsuario);
    $(".delPizza").on("click",EliminarPizza);
    $("#btnModificar_usu").on("click",modificarUsuario);
    $("#btnModificar_piz").on("click",modificarPizza);
    $(".actualizarUsuario").on("click",enviarDatoUsuario);
    $(".actualizarPizza").on("click",enviarDatoUPizza);
		$('#lista_pizza > ul').on("click","li > a",eliminarLista);
    $('.clsEliminarElemento').on('click',eliminarLista);
    //$("#suma").on('click',cont);
		//$('#btnEnviar').on("click",enviarPizza);
		$(".menu").on("click","a",MenuIndex);
		$(".menu").on("click","a",MenuDisplay);
		$("#btnEntrar").on("click",login);
    //$("#btnRegistrar").on("click",registrar);
    //$("#btnAgregarPizza").on("click",agregarPizza);
		$(document).ready(focus);
		$(document).ready(slider);
    $(document).ready(consulta);
    //$.ajaxSetup({ cache:false });
    
 
});

function enviarVenta(){
  
  var array = $('#formVenta').serialize();
  var ticket = $("#ticket").val();

          $.ajax({
           type: "POST",
           url: "../controlador/controlador_venta.php",
            data: array,
           success: function(dato){ 
            if(dato==1){
             
              $("#espera_venta").html("Dato(s) enviado a cocina!");
              $("#espera_venta").fadeOut(3000);
              $("#mensaje_venta").html("Puedes realizar otra venta");

              
              $("#lista_pizza").html("<ul></ul>");

            }
           },
           beforeSend:function()
           {
            $("#espera_venta").css({"background-color":"yellow","color":"black","font-size":"14px","border-radius":"1px"});
            $("#espera_venta").html("enviando datos a cocina...");
           }
          });
             $("#mensaje_venta").fadeOut(5000); 
        return false;
      }

		

function agregarLista (){
      //$('#lista_pizza').html("");
			var lista = $('#lista_pizza > ul');
      

      var img = '<a class="clsEliminarElemento"></a>';
      var n = '<td><input type="text" value="napoli" name="nom[]" size="5" /></td>';
      var t = '<td><input type="text" value="mediana" name="tam[]" size="5" readonly="readonly" /></td>';
      var p = '<td><input type="text" value="55" name="pre[]" size="1" readonly="readonly"/>';
      var c = '<td><input type="text" value="1" name="cant[]" id="cant" size="1" readonly="readonly" /></td>';
      var a = '<td><button onclick="sum(); return false" class="button">+</button></td>';
      var d= '<td><button onclick="rest(); return false" class="button">-</button></td>';
      var tr = img+n+t+p+a+c+d;
			var liNuevoNombre = $('<li/>').html(tr);
			lista.append(liNuevoNombre);
		};
		
		 function eliminarLista(){
			var lista=$(this);
			lista.parent().remove();

	}


  function sum(){
    var cant = $("#cant").val();
    var res = parseInt(cant);
    if(res >= 10){
      $("#cant").val(10);
    }
    else{
    res = res +1;
    $("#cant").val(res);
    }
  }

    function rest(){
    var cant = $("#cant").val();
    var res = parseInt(cant);
    if(res <= 1){
    $("#cant").val(1);
    }
    else{
    res = res -1;
    $("#cant").val(res);
    }
  }


		function MenuIndex(){
				if(this.name == "inicio"){
					$("#contenido").html("inicio");
				}
				if(this.name == "somos"){
					$("#contenido").load("vista/somos.html");
				}
				if(this.name == "producto"){
					$("#contenido").load("vista/producto.html");
				}
				if(this.name == "contacto"){
					$("#contenido").load("vista/contacto.html");
				}
			}
				
		function MenuDisplay(){

				if(this.name == "pizza"){
					$("#contenido").load("pizza.php");
				}
				else if(this.name == "usuario"){
					$("#contenido").load("usuario.php");
				}
        else if(this.name == "display"){
          $("#contenido").load("display.php");
        }
          else if(this.name == "venta_dia"){
          $("#contenido").load("venta_dia.php");
        }
			}

		function focus(){
			$("#usuario").focus();
      
		}

		

function validaciones(){
	var css = $("#result").css({"background-color":"yellow","color":"black","font-size":"14px","border-radius":"5px","display":"inline-block"});
	if(username == ""){
            css;
            $("#result").html("Llenar campo usuario");
            focus();
             
            }
            else if(password == ""){
            css;
            $("#result").html("Llenar campo contraseña");
            $("#contra").focus();
            }
            else {
            css;
            $("#result").html("Usuario o/y contraseña incorrectos");
            focus();
            }
        }

	function login() {	
    alert(123);
		 username=$("#usuario").val();
          password=$("#contra").val();
          $.ajax({
           type: "POST",
           url: "../controlador/controlador_usuario.php",
            data: "usuario="+username+"&contra="+password,
           success: function(datos){ 
            
             if(datos==1){
             window.location="../vista/admin.php";
            }
            else{
            validaciones();
            }
           },
           beforeSend:function()
           {    
            $("#result").css({"background-color":"yellow","color":"black","font-size":"14px","border-radius":"2px"});
            $("#result").html("cargando...")
           }
          });
        return false;
	}

	/*function consulta(){
   setInterval(function() {  
       $("#consulta").html("amado");
       
       $.ajax({
        type: 'POST',
        url:'../controlador/controlador_usuario.php',
        data: 'id_eliminar='+id_usuario,
        cache : false,
        success: function(datos){ 
            //alert(datos);
            if(datos==1){
            //alert("Registro eliminado correctamente!")
            fila.parent().fadeOut("slow");
            //fila.parent().remove(fadeOut("slow"));

            }
            else{
              alert("Registro perdido!")
            }
           },
           beforeSend:function()
           {
            
           }
      });
      return false;
    }, 2000);
}*/

  function slider(){
    $('#slider div:gt(0)').show();
    setInterval(function(){
      $('#slider div:first-child').fadeOut(1000)
         .next('div').fadeIn(1000)
         .end().appendTo('#slider');}, 4000);
}

function validacionesRegistro(){
            nombre=$("#nom_mod").val();
          apellido=$("#ape_mod").val();
          telefono=$("#tel_mod").val();
          direccion=$("#dir_mod").val();
          usuario=$("#usu_mod").val();
          contra=$("#con_mod").val();
  var css = $("#mensaje_mod").css({"background-color":"#F2F5A9","color":"black","font-size":"14px","border-radius":"5px","display":"inline-block"});
             if(nombre == ""){
            css;
            $("#mensaje_mod").html("Llenar campo nombre <img src='../img/editar.png' width='16px' height='16px'> ");
            $("#nombre").focus();  
            return false;       
            }
            else if(apellido == ""){
            css;
            $("#mensaje_mod").html("Llenar campo apellido <img src='../img/editar.png' width='16px' height='16px'>");
            $("#apellido").focus();
            return false;
            }
             else if(telefono == ""){
            css;
            $("#mensaje_mod").html("Llenar campo telefono <img src='../img/editar.png' width='16px' height='16px'>");
            $("#telefono").focus();
            return false;
            }
             else if(direccion == ""){
            css;
            $("#mensaje_mod").html("Llenar campo direccion <img src='../img/editar.png' width='16px' height='16px'>");
            $("#direccion").focus();
            return false;
            }
            else if(usuario == ""){
            css;
            $("#mensaje_mod").html("Llenar campo usuario <img src='../img/editar.png' width='16px' height='16px'>");
            $("#usuario_reg").focus();
            return false;
            }
            else if(contra == ""){
            css;
            $("#mensaje_mod").html("LLenar campo contraseña <img src='../img/editar.png' width='16px' height='16px'>");
            $("#contra_reg").focus();
            return false;
            }
            return true;
        }

function validacionesPizza(){
          piz=$("#piz").val();
          pre=$("#pre").val();
          tam=$("#tam").val();
	var css = $("#mensaje_p").css({"background-color":"#F2F5A9","color":"black","font-size":"14px","border-radius":"5px","display":"inline-block"});
	           if(piz == ""){
            css;
            $("#mensaje_p").html("Llenar campo nombre <img src='../img/editar.png' width='16px' height='16px'> ");
            $("#piz").focus();  
            return false;       
            }
            else if(pre == ""){
            css;
            $("#mensaje_p").html("Llenar campo precio <img src='../img/editar.png' width='16px' height='16px'>");
            $("#pre").focus();
            return false;
            }
             else if(tam == ""){
            css;
            $("#mensaje_p").html("Llenar campo tamaño <img src='../img/editar.png' width='16px' height='16px'>");
            $("#tam").focus();
            return false;
            }
            return true;
        }

          function registrarUsuario(){

          if(validacionesRegistro()){
          nombre=$("#nombre").val();
          apellido=$("#apellido").val();
          telefono=$("#telefono").val();
          direccion=$("#direccion").val();
          usuario=$("#usuario_reg").val();
          contra=$("#contra_reg").val();

          var dataString = 'nombre=' + nombre + '&apellido=' + apellido + '&telefono=' + telefono + '&direccion=' + direccion + '&usu=' + usuario + '&con=' + contra;
         
            $.ajax({
           type: "POST",
           url: "../controlador/controlador_usuario.php",
            data:dataString,
            //cache : false,
           success: function(datos){ 
            //alert(datos);
            if(datos==1){
            $("#mensaje").css({"background-color":"green","color":"black","font-size":"14px","border-radius":"5px"});
            $("#mensaje").html("Registro correcto <img src='../img/palomita.png width='24px' height='24px' > ");
            //$("#formRegistro").slideToggle();
              //$("#contenido").load("usuario.php");
            
            

            }
           },
           beforeSend:function()
           {
            $("#mensaje").css({"background-color":"yellow","color":"black","font-size":"14px","border-radius":"5px"});
            $("#mensaje").html("guardando datos...");
           }
          });
        return false;
          }
      
          return false;
    }

    function EliminarUsuario(){
      
      var fila = $(this).parent();
      var id_usuario = this.name;
      //alert(fila);
      $.ajax({
        type: 'POST',
        url:'../controlador/controlador_usuario.php',
        data: 'id_eliminar='+id_usuario,
        cache : false,
        success: function(datos){ 
            //alert(datos);
            if(datos==1){
            //alert("Registro eliminado correctamente!")
            fila.parent().fadeOut("slow");
            //fila.parent().remove(fadeOut("slow"));

            }
            else{
              alert("Registro perdido!")
            }
           },
           beforeSend:function()
           {
            
           }
      });
      return false;
    }

    function enviarDatoUsuario(){
      $("#id_mod_u").val($(this).parent().parent().parent().children('td:eq(0)').text());
      $("#nom_mod").val($(this).parent().parent().parent().children('td:eq(1)').text());
      $("#ape_mod").val($(this).parent().parent().parent().children('td:eq(2)').text());
      $("#tel_mod").val($(this).parent().parent().parent().children('td:eq(3)').text());
      $("#dir_mod").val($(this).parent().parent().parent().children('td:eq(4)').text());
      $("#usu_mod").val($(this).parent().parent().parent().children('td:eq(5)').text());
      //$("#con_mod").val($(this).parent().parent().parent().children('td:eq(6)').text());
      
      
    }


    function modificarUsuario(){
     


          var id_mod_u=$("#id_mod_u").val();
          var nom_mod=$("#nom_mod").val();
          var ape_mod=$("#ape_mod").val();
          var tel_mod=$("#tel_mod").val();
          var dir_mod=$("#dir_mod").val();
          var usu_mod=$("#usu_mod").val();
          var con_mod=$("#con_mod").val();
          var dataString = 'id_mod_u='+ id_mod_u+'&nom_mod=' + nom_mod + '&ape_mod=' + ape_mod + '&tel_mod=' + tel_mod + '&dir_mod=' + dir_mod + '&usu_mod=' + usu_mod + '&con_mod=' + con_mod;
          //alert(dataString);
         $.ajax({
           type: "POST",
           url: "../controlador/controlador_usuario.php",
            data:dataString,
           success: function(datos){ 
            //alert(datos);
            if(datos==1){
            $("#mensaje_mod").css({"border":"1px black dashed","color":"red","font-size":"14px","border-radius":"5px"});
            $("#mensaje_mod").html("Modificacion exitosa! <img src='../img/palomita.png' width='24px' height='24px' >");

            }

           },
           beforeSend:function()
           {
            $("#mensaje_mod").css({"background-color":"yellow","color":"black","font-size":"14px","border-radius":"5px"});
            $("#mensaje_mod").html("enviando datos...");
           }
          });
        return false;
      
    }
//////////////////////// Pizza //////////////////

          function registrarPizza(){
            if(validacionesPizza()){
          var piz=$("#piz").val();
          var pre=$("#pre").val();
          var tam=$("#tam").val();
          var dataString = 'piz='+ piz+'&pre=' + pre + '&tam=' + tam;
          //alert(piz);
      $.ajax({
           type: "POST",
           url: "../controlador/controlador_pizza.php",
            data: dataString,
           success: function(datos){ 
            //alert(datos);
            if(datos==1){
            $("#mensaje_p").css({"border":"1px black dashed","color":"red","font-size":"14px","border-radius":"5px"});
            $("#mensaje_p").html("Registro correcto <img src='../img/palomita.png'> ");
            }
           },
           beforeSend:function()
           {
            $("#mensaje_p").css({"background-color":"yellow","color":"black","font-size":"14px","border-radius":"5px"});
            $("#mensaje_p").html("guardando datos...");
           }
          });
        return false;
        }
        return false;
    }

    function EliminarPizza(){
      //alert("eliminar pizza");
      //var col = $(this).parent().parent().parent().children('td:eq(1)').text();
      var fila = $(this).parent();
      var id_pizza = this.name;
      //alert(id_pizza);
      $.ajax({
        type: 'POST',
        url:'../controlador/controlador_pizza.php',
        data: 'id_del='+id_pizza,
        success: function(datos){ 
            //alert(datos);
            if(datos==1){
            //alert("Registro eliminado correctamente!")
            //fila.parent().remove();
            fila.parent().fadeOut("slow");

            }
            else{
              alert("Registro perdido!")
            }
           },
           beforeSend:function()
           {
            //alert("enviando");
           }
      });
      return false;
    }

    function enviarDatoUPizza(){
      $("#id_mod_p").val($(this).parent().parent().parent().children('td:eq(0)').text());
      $("#nom_mod_p").val($(this).parent().parent().parent().children('td:eq(1)').text());
      $("#pre_mod_p").val($(this).parent().parent().parent().children('td:eq(2)').text());
      $("#tam_mod_p").val($(this).parent().parent().parent().children('td:eq(3)').text());      
     }

         function modificarPizza(){
          var id=$("#id_mod_p").val();
          var nom=$("#nom_mod_p").val();
          var pre=$("#pre_mod_p").val();
          var tam=$("#tam_mod_p").val();
          var dataString = 'id_mod_p='+ id+'&nom_mod_p=' + nom + '&pre_mod_p=' + pre + '&tam_mod_p=' + tam;
          //alert(dataString);
         $.ajax({
           type: "POST",
           url: "../controlador/controlador_pizza.php",
            data:dataString,
           success: function(datos){ 
            //alert(datos);
            if(datos==1){
            $("#mensaje_pm").css({"color":"white","font-size":"14px","border-radius":"4px"});
            $("#mensaje_pm").html("Modificacion exitosa! <img src='../img/palomita.png' width='24px' height='24px' >");
            }
           },
           beforeSend:function()
           {
            $("#mensaje_pm").css({"background-color":"#8A0808","color":"white","font-size":"14px","border-radius":"1px"});
            $("#mensaje_pm").html("enviando datos...");
           }
          });
        return false;
    }
/*
    
	}*/


   
