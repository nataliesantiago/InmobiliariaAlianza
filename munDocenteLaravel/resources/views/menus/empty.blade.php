@if(Auth::user()->type==3)
   	<li><a href="/admin">
		<i class="glyphicon glyphicon-ok-sign"></i> Activar Usuarios</a></li>
    <li><a href="/own_publications">
		<i class="glyphicon glyphicon-education"></i> Mis publicaciones</a></li>       
	<li><a href="/university">
		<i class="glyphicon glyphicon-education"></i> Universidades</a></li>
    <li><a href="/manage_publications">
		<i class="glyphicon glyphicon-education"></i> Administrar Publicaciones</a></li>

@else
<li style="white-space: nowrap;"><a href="/">
    	<i class="glyphicon glyphicon-home"></i> Home</a></li>
<li style="white-space: nowrap;"><a href="/teacher_call">
	<i class="glyphicon glyphicon-briefcase"></i> Convocatorias</a></li>
<li style="white-space: nowrap;"><a href="/scientific_magazine">
	<i class="glyphicon glyphicon-book"></i> Revistas científicas</a></li>
<li style="white-space: nowrap;"><a href="/academic_event">
	<i class="glyphicon glyphicon-bullhorn"></i> Eventos académicos</a></li>

@endif