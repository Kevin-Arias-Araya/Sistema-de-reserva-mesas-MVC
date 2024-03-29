<?php 
if($inst_loginControlador->encryption($_SESSION['rut_SDR'])!=$pagina[1]){
	if( $_SESSION['privilegio_SDR']==0){
		echo $inst_loginControlador->forzar_cierre_sesion_controlador();
		exit();
}
}


?>



<!-- Page header -->
<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-plus fa-fw"></i> &nbsp; ACTUALIZAR DATOS CLIENTE
				</h3>
				<p class="text-justify">
				
			</p>
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					
				</ul>	
			</div>
			
			<!-- Content here-->
			<div class="container-fluid">
			<?php 
				//Controlador para actualizar datos de cliente
				require_once "./controladores/clienteControlador.php"; 
				$inst_cliente= new clienteControlador();

				$datos_cliente=$inst_cliente->datos_cliente_controlador("Unico",$pagina[1]);

				if($datos_cliente->rowCount()==1){
					$campos=$datos_cliente->fetch();
				?>
				<form  class="form-neon FormularioAjax" action="<?php echo SERVERURL; ?>ajax/clienteAjax.php" method="POST" data-form="update" autocomplete="off">
				<input type="hidden" name="cliente_rut_update" value="<?php echo $pagina[1]?>">
					<fieldset>
						<legend><i class="fas fa-user"></i> &nbsp; Información Cliente</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_dni" class="bmd-label-floating">RUT</label>
										<input type="text" pattern="\d{3,8}-[\d|kK]{1}" class="form-control" name="cliente_rut_up" id="cliente_rut" maxlength="27" value="<?php echo $campos['rut_cliente_pk'];?>">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_nombre" class="bmd-label-floating">Nombre</label>
										<input type="text"  class="form-control" name="cliente_nombre_up" id="cliente_nombre" maxlength="40" value="<?php echo $campos['nombre'];?>">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_apellido" class="bmd-label-floating">Apellido</label>
										<input type="text"  class="form-control" name="cliente_apellido_up" id="cliente_apellido" maxlength="40" value="<?php echo $campos['apellido'];?>">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_clave_1" class="bmd-label-floating">Contraseña</label>
										<input type="password" class="form-control" name="cliente_clave_1_up" id="cliente_clave_1" pattern="[A-Za-z0-9!?-]{8,12}" maxlength="100" required=""  >
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_clave_2" class="bmd-label-floating">Repetir contraseña</label>
										<input type="password" class="form-control" name="cliente_clave_2_up" id="cliente_clave_2" pattern="[A-Za-z0-9!?-]{8,12}" maxlength="100" required="" >
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_correo" class="bmd-label-floating">Email</label>
										<input type="email" class="form-control" name="cliente_email_up" id="cliente_email_up" maxlength="70"  value="<?php echo $campos['correo_cliente'];?>">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_telefono" class="bmd-label-floating">Teléfono</label>
										<input type="text"  class="form-control" name="cliente_telefono_up" id="cliente_telefono" maxlength="20" value="<?php echo $campos['telefono'];?>">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_direccion" class="bmd-label-floating">Dirección</label>
										<input type="text"  class="form-control" name="cliente_direccion_up" id="cliente_direccion" maxlength="150" value="<?php echo $campos['direccion'];?>">
									</div>
								</div>
								<div class="col-12 col-md-4">
								<div class="form-group">
										<label for="cliente_direccion" class="bmd-label-floating">comuna</label>
										<select class="form-control" name="cliente_comuna_up">
										<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="Cerillos">Cerillos</option>
                                            <option value="Cerro Navia">Cerro Navia</option>
                                            <option value="Conchalí">Conchalí</option>
                                            <option value="El bosque">El bosque</option>
                                            <option value="Estación Central">Estación Central</option>
                                            <option value="Huechuraba">Huechuraba</option>
                                            <option value="Independencia">Independencia</option>
                                            <option value="La Cisterna">La Cisterna</option>
                                            <option value="La Florida">La Florida</option>
                                            <option value="La Granja">La Granja</option>
                                            <option value="La Pintana">La Pintana</option>
                                            <option value="La Reina">La Reina</option>
                                            <option value="Las Condes">Las Condes</option>
                                            <option value="Lo Barnechea">Lo Barnechea</option>
                                            <option value="Lo Espejo">Lo Espejo</option>
                                            <option value="Lo Prado">Lo Prado</option>
                                            <option value="Macul">Macul</option>
                                            <option value="Maipú">Maipú</option>
                                            <option value="Ñuñoa">Ñuñoa</option>
                                            <option value="Pedro Aguirre Cerda">Pedro Aguirre Cerda</option>
                                            <option value="Peñalolén">Peñalolén</option>
                                            <option value="Providencia">Providencia</option>
                                            <option value="Pudahuel">Pudahuel</option>
                                            <option value="Quilicura">Quilicura</option>
                                            <option value="Quinta Normal">Quinta Normal</option>
                                            <option value="Recoleta">Recoleta</option>
                                            <option value="Renca">Renca</option>
                                            <option value="San Joaquín">San Joaquín</option>
                                            <option value="San Miguel">San Miguel</option>
                                            <option value="San Ramón">San Ramón</option>
                                            <option value="Vitacura">Vitacura</option>
                                            <option value="Puente Alto">Puente Alto</option>
                                            <option value="Pirque">Pirque</option>
                                            <option value="San José de Maipo">San José de Maipo</option>
                                            <option value="Colina">Colina</option>
                                            <option value="Lampa">Lampa</option>
                                            <option value="San Bernardo">San Bernardo</option>
                                            <option value="Buin">Buin</option>
                                            <option value="Calera de Tango">Calera de Tango</option>
                                            <option value="Paine">Paine</option>
                                            <option value="Melipilla">Melipilla</option>
                                            <option value="Padre Hurtado">Padre Hurtado</option>
                                            <option value="Peñaflor">Peñaflor</option>
                                            <option value="Talagante">Talagante</option>
                                            <option value="Isla de Maipo">Isla de Maipo</option>
                                            <option value="El Monte">El Monte</option>
                                            <option value="María Pinto">María Pinto</option>
                                            <option value="San Pedro">San Pedro</option>
                                            

										</select>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<p class="text-center" style="margin-top: 40px;">
						<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
						&nbsp; &nbsp;
						<button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
					</p>
				</form>
				<?php 
				}else{
				?>

				<div class="alert alert-danger text-center" role="alert">
					<p><i class="fas fa-exclamation-triangle fa-5x"></i></p>
					<h4 class="alert-heading">¡Ocurrió un error inesperado!</h4>
					<p class="mb-0">Lo sentimos, no podemos mostrar la información solicitada debido a un error.</p>
				</div>
				<?php 
				}
				?>
			</div>	