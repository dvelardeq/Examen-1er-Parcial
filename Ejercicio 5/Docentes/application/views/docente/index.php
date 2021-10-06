<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Facultad de Ciencias Puras y Naturales</title>
</head>
<body>
	<h1 align="center">ALTAS, BAJAS Y MODIFICACIONES</h1>

		<div id="DocenteTableContainer"></div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.css">
	<script src="<?php echo base_url(); ?>/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/jtable.2.4.0/themes/metro/blue/jtable.min.css">
	<script src="<?php echo base_url(); ?>/assets/plugins/jtable.2.4.0/jquery.jtable.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/plugins/jtable.2.4.0/localization/jquery.jtable.es.js"></script>
	<script type="text/javascript">

	    $(document).ready(function () {
	        $('#DocenteTableContainer').jtable({
	            title: 'Tabla de Docentes',
	            actions: {
	                listAction: '<?php echo site_url(); ?>/docente/list',
	                createAction: '<?php echo site_url(); ?>/docente/create',
	                updateAction: '<?php echo site_url(); ?>/docente/update',
	                deleteAction: '<?php echo site_url(); ?>/docente/delete'
	            },
	            fields: {
	                ci: {
	                	title: 'Ci',
	                    width: '20%',
	                    key: true,
	                    list: true,
	                    create: true,
	                    edit: false
	                },
	                nombre: {
	                    title: 'Nombre',
	                    width: '40%'
	                },
	                fechanac: {
	                    title: 'Fecha de Nacimiento',
	                    width: '20%',
	                    type: 'date',
	                },
	                departamento: {
	                    title: 'Departamento',
	                    width: '20%',
	                },
	                personaje: {
	                    title: 'Rol',
	                    create: false,
	                    edit: false,
	                    list: true                }
	            }
	        });
	        $('#DocenteTableContainer').jtable('load');
	    });

	</script>
</body>
</html>