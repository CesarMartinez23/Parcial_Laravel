<h1>Editar Registro de Vuelo</h1>

<form action="{{ url('/vuelos/'.$vuelo->id) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    @include('vuelos.form')
</form>