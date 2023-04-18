<h1>Editar Reserva</h1>

<form action="{{ url('/reservas/'.$reserva->id) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    @include('reservas.form')
</form>