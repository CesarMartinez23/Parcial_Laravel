<h1>Nuevo registro de Vuelo</h1>

<form action="{{ url('/vuelos') }}" method="POST">
    @csrf

    @include('vuelos.form')
</form>