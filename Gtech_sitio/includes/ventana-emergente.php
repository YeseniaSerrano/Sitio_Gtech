<style type="text/css">
.center{
	position:absolute;
	width:700px;
	height:600px;
	top:50%;
	left:50%;
	margin-left:-350px;
	margin-top:-250px;	
}
.modalmask {
	position: fixed;
	font-family: Arial, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
}
.modalmask:target {
	opacity:1;
	pointer-events: auto;
}
.modalbox{
	width: 400px;
	position: relative;
	padding: 5px 20px 13px 20px;
	background: #fff;
	border-radius:3px;
	-webkit-transition: all 500ms ease-in;
	-moz-transition: all 500ms ease-in;
	transition: all 500ms ease-in;	
}
.movedown {
	margin: 0 auto;
}
.rotate {
	margin: 10% auto;
	-webkit-transform: scale(-5,-5); 
	transform: scale(-5,-5);
}
.resize {
	margin: 10% auto;
	width:0;
	height:0;
}
.modalmask:target .movedown{		
	margin:10% auto;
}
.modalmask:target .rotate{		
	transform: rotate(360deg) scale(1,1);
    -webkit-transform: rotate(360deg) scale(1,1);
}
.modalmask:target .resize{
	width:400px;
	height:200px;
}
.close {
	background: #606061;
	color: #FFFFFF;
	line-height: 25px;
	position: absolute;
	right: 1px;
	text-align: center;
	top: 1px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	border-radius:3px;
	font-size:16px;
}
.close:hover { 
	background: #FAAC58; 
	color:#222;
}
.nsc{
	position:absolute;
	bottom:40%;
	right:0;
}
</style>


<div class="center">
	<div id="modal1" class="modalmask">
		<div class="modalbox movedown">
			<a href="#close" title="Close" class="close">X</a>
			 <form name="suscribete" method="post" action="envio/suscripciones.php">
			 	<h2>Formulario de Suscripción</h2>
		        <div class="form-group">
		          <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
		        </div>
		        <div class="form-group">
		          <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo Electrónico" required>
		         </div>
		         <div class="form-group">
		          <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="Teléfono">
		         </div>
		         <div class="form-group ">
		           <input type="checkbox" value="Si" name="notificaciones" id="notificaciones"> Desea recibir Notificaciones
		         </div>
		        <button type="submit" class="btn btn-default">Enviar</button><br><br>
		     </form>		
		</div>
	</div>	
</div>