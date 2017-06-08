<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="Js/jquery-3.2.1.min.js" type="text/javascript"></script>
    </head>
    <body>
        <form id="frmusuario">
            <input id="nomusuario" type="text" name="nomusuario">
            <input id="clave" type="password" name="clave">
            <input id="enviar" type="button" name="enviar" value="enviar">
        </form>
    </body>
    <script>
        $(document).ready(function(){
                $("#enviar").click(function(){
                    /*$("form").hide();
                    alert("Ocultaste el formulario"+$("#nomusuario").value)*/
                if($("#nomusuario").val()!=""&& $("#clave").val()!=""){
                    $("#frmusuario").submit();
                }
                else
                    alert("Debe Agregar el usuario y clave");
                        
                });
            });
    </script>
</html>
