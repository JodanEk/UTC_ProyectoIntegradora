$(function(){ 
		$(".botones").on("click","input",agregarLista);
    $("#btnGuardar").on("click",registrarUsuario);
    $("#btnGuardarP").on("click",registrarPizza);
    $(".delUser").on("click",EliminarUsuario);
    $(".delPizza").on("click",EliminarPizza);
    $("#btnModificar_usu").on("click",modificarUsuario);
    $("#btnModificar_piz").on("click",modificarPizza);
    $(".actualizarUsuario").on("click",enviarDatoUsuario);
    $(".actualizarPizza").on("click",enviarDatoUPizza);
		$('#lista_pizza > ul').on("click","li > a",eliminarLista);
		//$('#btnEnviar').on("click",enviarPizza);
		$(".menu").on("click","a",MenuIndex);
		$(".menu").on("click","a",MenuDisplay);
		$("#btnEntrar").on("click",login);
    $("#btnRegistrar").on("click",registrar);
    //$("#btnAgregarPizza").on("click",agregarPizza);
		$(document).ready(focus);
		$(document).ready(slider);
    $(document).ready(consulta);
    $.ajaxSetup({ cache:false });
    
 
});

		

function agregarLista (){
			var lista = $('#lista_pizza > ul');
			var liNuevoNombre = $('<li/>').html('<a class="clsEliminarElemento"></a><input type="text" value="'+this.value+'" size="5" disabled/><input type="text" value="mediana" size="5" disabled/><input type="text" value="55" size="1" disabled/><input type="text" value="1" size="3" disabled/>');
			lista.append(liNuevoNombre);
		};

		$(function(){ 
		$('.clsEliminarElemento').on('click',eliminarLista);


	});

		 function eliminarLista(){

			var lista=$(this);
			lista.parent().remove();

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
				if(this.name == "perfil"){
					$("#contenido").html("perfil");
				}
				if(this.name == "pizza"){
					$("#contenido").load("pizza.php");
				}
				else if(this.name == "usuario"){
					$("#contenido").load("usuario.php");
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
		 username=$("#usuario").val();
          password=$("#contra").val();
          $.ajax({
           type: "POST",
           url: "../controlador/controlador_usuario.php",
            data: "usuario="+username+"&contra="+password,
           success: function(datos){ 
             if(datos==1){
             window.location="../index.php";
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

	function consulta(){
   setInterval(function() {  
    
}, 2000);
}

  function slider(){
    $('#slider div:gt(0)').show();
    setInterval(function(){
      $('#slider div:first-child').fadeOut(1000)
         .next('div').fadeIn(1000)
         .end().appendTo('#slider');}, 4000);
}

function validacionesRegistro(){
            nombre=$("#nombre").val();
          apellido=$("#apellido").val();
          telefono=$("#telefono").val();
          direccion=$("#direccion").val();
          usuario=$("#usuario_reg").val();
          contra=$("#contra_reg").val();
	var css = $("#mensaje").css({"background-color":"yellow","color":"black","font-size":"14px","border-radius":"5px","display":"inline-block"});
	           if(nombre == ""){
            css;
            $("#mensaje").html("Llenar campo nombre");
            $("#nombre").focus();         
            }
            else if(apellido == ""){
            css;
            $("#mensaje").html("Llenar campo apellido");
            $("#apellido").focus();
            }
             else if(telefono == ""){
            css;
            $("#mensaje").html("Llenar campo telefono");
            $("#telefono").focus();
            }
             else if(direccion == ""){
            css;
            $("#mensaje").html("Llenar campo direccion");
            $("#direccion").focus();
            }
            else if(usuario == ""){
            css;
            $("#mensaje").html("Llenar campo usuario");
            $("#usuario_reg").focus();
            }
            else {
            css;
            $("#mensaje").html("LLenar campo contraseña");
            $("#contra_reg").focus();
            }
            return false;
        }


    function registrar() {

      $( "#dialog" ).dialog({

            show: "scale",
            hide: "scale", 
            resizable: "false", 
            position: "center",
           
          buttons: {
            "Cerrar" : function(){
              $(this).dialog("close");
            }
          }

      });

    }

        function agregarPizza() {
      alert(1234);
      $( "#dialog_pizza" ).dialog({
            show: "scale",
            hide: "scale", 
            resizable: "false", 
            position: "center",
          buttons: {
            "Cerrar" : function(){
              $(this).dialog("close");
            }
          }
      });
    };

          function registrarUsuario(){

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
            $("#mensaje").css({"border":"1px black dashed","color":"red","font-size":"14px","border-radius":"5px"});
            $("#mensaje").html("Datos guardados...");
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
            fila.parent().remove();

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
            $("#mensaje_mod").html("Datos modificados...");
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
          var piz=$("#piz").val();
          var pre=$("#pre").val();
          var tam=$("#tam").val();
          var dataString = 'piz='+ piz+'&pre=' + pre + '&tam=' + tam;
          alert(piz);
      $.ajax({
           type: "POST",
           url: "../controlador/controlador_pizza.php",
            data: dataString,
           success: function(datos){ 
            alert(datos);
            if(datos==1){
            $("#mensaje_p").css({"border":"1px black dashed","color":"red","font-size":"14px","border-radius":"5px"});
            $("#mensaje_p").html("Datos guardados...");
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
            alert("Registro eliminado correctamente!")
            fila.parent().remove();

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
          alert(dataString);
         $.ajax({
           type: "POST",
           url: "../controlador/controlador_pizza.php",
            data:dataString,
           success: function(datos){ 
            alert(datos);
            if(datos==1){
            $("#mensaje_pm").css({"border":"1px black dashed","color":"red","font-size":"14px","border-radius":"5px"});
            $("#mensaje_pm").html("Datos modificados...");
            }
           },
           beforeSend:function()
           {
            $("#mensaje_pm").css({"background-color":"yellow","color":"black","font-size":"14px","border-radius":"5px"});
            $("#mensaje_pm").html("enviando datos...");
           }
          });
        return false;
    }
/*
    
	}*/


   
