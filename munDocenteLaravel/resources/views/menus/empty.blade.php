 @if (! Auth::guest())
            @if(Auth::user()->type== 1 || Auth::user()->type== 2)
	<li style="white-space: nowrap;"><a href="/">
    	<i class="glyphicon glyphicon-home"></i> Home</a></li>
    <li style="white-space: nowrap;"><a href="/teacher_call">
    	<i class="glyphicon glyphicon-briefcase"></i> Convocatorias</a></li>
    <li style="white-space: nowrap;"><a href="/scientific_magazine">
    	<i class="glyphicon glyphicon-book"></i> Revistas científicas</a></li>
    <li style="white-space: nowrap;"><a href="/academic_event">
    	<i class="glyphicon glyphicon-bullhorn"></i> Eventos académicos</a></li>
    	@endif

    	@if(Auth::user()->type== 3)
    	<li ><a href="/admin">
		<i class="glyphicon glyphicon-ok-sign"></i> Activar Usuarios</a></li>
		<li ><a href="/university">
		<i class="glyphicon glyphicon-education"></i> Universidades o Instituciones Académicas</a></li>
		@endif
@endif