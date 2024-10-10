
<!--
If para validar si existe un error
error es una variable de sesión
En caso de que exista un error, mostrar mensaje de alerta
-->
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
