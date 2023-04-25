<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        a {
            text-decoration:none;
        }
        th {
            font-size: 20px;
            color: black;
            font-weight: 600;
        }
        h1{
            color: blueviolet;
            font-size: 40px;
            font-weight: 900;  
            margin-bottom: 30PX;
        }
    </style>
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">LISTADO DE RESERVAS</h1>
    
    <table class="table table-hover text-center">
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
                         <button class="btn btn-warning"><a class="text-light" href="{{ route('reservas.edit', $reserva->id) }}">Editar</a></button>
                         <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Desea eliminar la reserva ?')">
                     </td>
                 </form>
              </tr>
         @endforeach
     </tbody>
    </table>
    <button class="btn btn-success"><a class="text-light" href="{{ url('reservas/create') }}">Nuevo registro</a></button>


        
    </div>
    
    
</body>
</html>