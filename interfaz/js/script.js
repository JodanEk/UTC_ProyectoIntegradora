$(function(){ 
		$(".botones").on("click","input",agregarLista);
		$('#lista_pizza > ul').on("click","li > a",eliminarLista);
		//$('#btnEnviar').on("click",enviarPizza);
		$(".menu").on("click","a",MenuIndex);
		$(".menu").on("click","a",MenuDisplay);
		$("#btnEntrar").on("click",login);
		$("#btnGuardar").on("click",registrarUsuario);
		$(document).ready(focus);
		$(document).ready(slider);
 
});

		

function agregarLista (){
			var lista = $('#lista_pizza > ul');
			var liNuevoNombre = $('<li/>').html('<a class="clsEliminarElemento"></a>' + this.value +     '|     $55      | Mediana');
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
           url: "../vista/login.php",
            data: "name="+username+"&pwd="+password,
           success: function(datos){ 
            if(datos==1)    {
             window.location="../index.php";
            }
            else{
            validaciones();
            }

           },
           beforeSend:function()
           {
            $("#result").css({"background-color":"yellow","color":"black","font-size":"14px","border-radius":"5px"});
            $("#result").html("cargando...")
           }
          });
        return false;
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
          show: "blind",
          hide: "explode",
          buttons: {
            "Cerrar" : function(){
              $(this).dialog("close");
            }
          }

      });

    };

          function registrarUsuario(){
          //validacionesRegistro();
          var dataString = 'nombre=' + nombre + '&apellido=' + apellido + '&telefono=' + telefono + '&direccion=' + direccion + '&usu=' + usuario + '&con=' + contra;
      $.ajax({
           type: "POST",
           url: "../vista/registro.php",
            data:dataString,
           success: function(datos){ 
            if(datos==1){
              validacionesRegistro();
            $("#mensaje").css({"color":"green","font-size":"14px","border-radius":"5px"});
            $("#mensaje").html("Datos guardados...");
            }
             else{

              $("#mensaje").css({"color":"red","font-size":"14px","border-radius":"5px"});
            $("#mensaje").html("Error al insertar los datos...");
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

    function eliminarUsuario(){
          //validacionesRegistro();
          var dataString = 'nombre=' + nombre + '&apellido=' + apellido + '&telefono=' + telefono + '&direccion=' + direccion + '&usu=' + usuario + '&con=' + contra;
      $.ajax({
           type: "POST",
           url: "../vista/registro.php",
            data:dataString,
           success: function(datos){ 
            if(datos==1){
              validacionesRegistro();
            $("#mensaje").css({"color":"green","font-size":"14px","border-radius":"5px"});
            $("#mensaje").html("Datos guardados...");
            }
             else{

              $("#mensaje").css({"color":"red","font-size":"14px","border-radius":"5px"});
            $("#mensaje").html("Error al insertar los datos...");
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


    function modificarUsuario(){
          //validacionesRegistro();
          var dataString = 'nombre=' + nombre + '&apellido=' + apellido + '&telefono=' + telefono + '&direccion=' + direccion + '&usu=' + usuario + '&con=' + contra;
      $.ajax({
           type: "POST",
           url: "../vista/registro.php",
            data:dataString,
           success: function(datos){ 
            if(datos==1){
              validacionesRegistro();
            $("#mensaje").css({"color":"green","font-size":"14px","border-radius":"5px"});
            $("#mensaje").html("Datos guardados...");
            }
             else{

              $("#mensaje").css({"color":"red","font-size":"14px","border-radius":"5px"});
            $("#mensaje").html("Error al insertar los datos...");
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

    
    function modificarUsuario(){
          //validacionesRegistro();
          var dataString = 'nombre=' + nombre + '&apellido=' + apellido + '&telefono=' + telefono + '&direccion=' + direccion + '&usu=' + usuario + '&con=' + contra;
      $.ajax({
           type: "POST",
           url: "../vista/registro.php",
            data:dataString,
           success: function(datos){ 
            if(datos==1){
              validacionesRegistro();
            $("#mensaje").css({"color":"green","font-size":"14px","border-radius":"5px"});
            $("#mensaje").html("Datos guardados...");
            }
             else{

              $("#mensaje").css({"color":"red","font-size":"14px","border-radius":"5px"});
            $("#mensaje").html("Error al insertar los datos...");
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


/*

          function registrarUsuario(){
                      nombre=$("#nombre").val();
          apellido=$("#apellido").val();
          telefono=$("#telefono").val();
          direccion=$("#direccion").val();
          usuario=$("#usuario_reg").val();
          contra=$("#contra_reg").val();
      $.ajax({
           type: "POST",
           url: "registro.php",
            data:{
              dato:$("#formRegistro").serialize(),
              console.log(dato);
            }
           success: function(datos){ 
            
             alert(datos);
           }
           beforeSend:function()
           {
            $("#mensaje").css({"background-color":"yellow","color":"black","font-size":"14px","border-radius":"5px"});
            $("#mensaje").html("guardando datos...");
           }
          });
        return false;

    }


      function registrarUsuario() {  
          /*nombre=$("#nombre").val();
          apellido=$("#apellido").val();
          telefono=$("#telefono").val();
          direccion=$("#direccion").val();
          usuario=$("#usuario_reg").val();
          contra=$("#contra_reg").val();
          $.post('../vista/registro.php',$(this).serialize(),function(msg){
          if(msg){
            alert(msg);
          }
          else{
            alert("error al enviar datos");
          }
    }
        
        return false;
  }
}
        function registrarUsuario() {  
          nombre=$("#nombre").val();
          apellido=$("#apellido").val();
          telefono=$("#telefono").val();
          direccion=$("#direccion").val();
          usuario=$("#usuario_reg").val();
          contra=$("#contra_reg").val();
          $.ajax({
           type: "POST",
           url: "../vista/registro.php",
            data: "nombre="+nombre+"&apellido="+apellido+"&telefono="+telefono+"&direccion="+direccion+"&usuario_reg="+usuario+"&contra_reg="+contra,
           success: function(datos){ 
            if(datos==1)    {
             
            }
            else{
            validaciones();
            }

           },
           beforeSend:function()
           {
            $("#result").css({"background-color":"yellow","color":"black","font-size":"14px","border-radius":"5px"});
            $("#result").html("cargando...")
           }
          });
        return false;
  }
	
	function enviarPizza(){
		//alert("hola");
		$.ajax({
           type: "POST",
           url: "venta.php",
            data:{
            	dato:$("#formVenta").serialize(),
            }
           success: function(datos){ 
            if(datos)    {
             //window.location="../index.php";
             alert(datos);
            }
            else{
            alert("No se pudo realizar el envio de datos");
           },
           beforeSend:function()
           {
            $("#espera").css({"background-color":"yellow","color":"black","font-size":"14px","border-radius":"5px"});
            $("#espera").html("enviando...");
           }
          });
        return false;

	}*/


   
