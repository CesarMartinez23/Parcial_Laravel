<h1>Listado de Reservas</h1>
<a href="{{ url('reservas/create') }}">Nuevo Registro</a>

<table>
    <thead>
        <th>#Asiento</th>
        <th>Precio</th>
        <th>Fecha Reserva</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach($reservas as $reserva)
            <tr>
                <td>{{ $reserva->Asiento }}</td>
                <td>$ {{ $reserva->Precio }}</td>
                <td>{{ $reserva->Fecha_Reserva }}</td>

                <form action="{{ url('/reservas/'.$reserva->id) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }} 
                    <td>
                        <a href="{{ route('reservas.edit', $reserva->id) }}">Editar</a>
                        <input type="submit" value="Delete" onclick="return confirm('Desea eliminar la reserva ?')">
                    </td>
                </form>
            </tr>
        @endforeach
    </tbody>
</table>