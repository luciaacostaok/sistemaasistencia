
<style>
	.collapse a{
		text-indent:10px;
	}
	nav#sidebar{
		/*background: url(assets/uploads/<?php echo $_SESSION['system']['cover_img'] ?>) !important*/
	}
</style>

<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">
				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-tachometer-alt "></i></span>Escritorio</a>
				<?php if($_SESSION['login_faculty_id'] <= 0): ?>
				<a href="index.php?page=courses" class="nav-item nav-courses"><span class='icon-field'><i class="fa fa-th-list "></i></span>Años</a>
				<a href="index.php?page=subjects" class="nav-item nav-subjects"><span class='icon-field'><i class="fa fa-book "></i></span> Materias</a>
				<a href="index.php?page=class" class="nav-item nav-class"><span class='icon-field'><i class="fa fa-list-alt "></i></span> Grados</a>
				<a href="index.php?page=faculty" class="nav-item nav-faculty"><span class='icon-field'><i class="fa fa-user-tie "></i></span>Profesores</a>
				<a href="index.php?page=students" class="nav-item nav-students"><span class='icon-field'><i class="fa fa-user-friends "></i></span> Estudiantes</a>
				<a href="index.php?page=class_subject" class="nav-item nav-class_subject"><span class='icon-field'><i class="fa fa-user-friends "></i></span> Materias por grado</a>
				<?php endif; ?>
				<a href="index.php?page=check_attendance" class="nav-item nav-check_attendance"><span class='icon-field'><i class="fa fa-tasks "></i></span>Pasar asistencia</a>
				<a href="index.php?page=attendance_record" class="nav-item nav-attendance_record"><span class='icon-field'><i class="fa fa-tasks "></i></span> Record de asistencia</a>
				<a href="index.php?page=attendance_report" class="nav-item nav-attendance_report"><span class='icon-field'><i class="fa fa-tasks "></i></span> Reporte de asistencia </a>
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users "></i></span> Usuarios</a>
				<!-- <a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs text-danger"></i></span> System Settings</a> -->
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
