<h1>Listado de Vuelos</h1>
<a href="{{ url('vuelos/create') }}">Nuevo Registro</a>

<table>
    <thead>
        <th>#</th>
        <th>Origen</th>
        <th>Destino</th>
        <th>Fecha Salida</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach($vuelos as $vuelo)
            <tr>
                <td>{{ $vuelo->Numero_Vuelo }}</td>
                <td>{{ $vuelo->Origen }}</td>
                <td>{{ $vuelo->Destino }}</td>
                <td>{{ $vuelo->Fecha_Salida }}</td>

                <form action="{{ url('/vuelos/'.$vuelo->id) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }} 
                    <td>
                        <a href="{{ route('vuelos.edit', $vuelo->id) }}">Edit</a>
                        <input type="submit" value="Delete" onclick="return confirm('Desea eliminar el registro ?')">
                    </td>
                </form>
            </tr>
        @endforeach
    </tbody>
</table>