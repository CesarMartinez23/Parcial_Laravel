<h1>Nuevo Reserva</h1>

<form action="{{ url('/reservas') }}" method="POST">
    @csrf

    @include('reservas.form')
</form>