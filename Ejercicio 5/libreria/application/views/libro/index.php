<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>Altas, Bajas y Modificaciones</h1>

	<div id="LibroTableContainer"></div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.css">
	<script src="<?php echo base_url(); ?>/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/jtable.2.4.0/themes/metro/blue/jtable.min.css">
	<script src="<?php echo base_url(); ?>/assets/plugins/jtable.2.4.0/jquery.jtable.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/plugins/jtable.2.4.0/localization/jquery.jtable.es.js"></script>
	<script type="text/javascript">

	    $(document).ready(function () {
	        $('#LibroTableContainer').jtable({
	            title: 'Tabla de Docentes',
	            actions: {
	                listAction: '<?php echo site_url(); ?>/libro/list',
	                createAction: '<?php echo site_url(); ?>/libro/create',
	                updateAction: '<?php echo site_url(); ?>/libro/update',
	                deleteAction: '<?php echo site_url(); ?>/libro/delete'
	            },
	            fields: {
	                ci: {
	                	title: 'Ci',
	                    width: '20%',
	                    key: true,
	                    list: true,
	                    create: true,
	                    edit: true
	                },
	                nombre: {
	                    title: 'Nombre',
	                    width: '30%'
	                },
	                fechanac: {
	                    title: 'Fecha de Nacimiento',
	                    width: '20%',
	                    type: 'date',
	                    create: true,
	                    edit: true
	                },
	                departamento: {
	                    title: 'Departamento',
	                    width: '20%',
	                },
	                personaje: {
	                    title: 'Rol',
	                    width: '10%',
	                }
	            }
	        });
	        $('#LibroTableContainer').jtable('load');
	    });

	</script>
</body>
</html>