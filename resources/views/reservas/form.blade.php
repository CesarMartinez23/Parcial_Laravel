
Asiento:
<input type="number" name="Asiento" id="Asiento" value="{{ isset($reserva)?$reserva->Asiento:'' }}">

Precio:
<input type="text" name="Precio" id="Precio" value="{{ isset($reserva)?$reserva->Precio:'' }}">

Fecha de Reserva:
<input type="date" name="Fecha_Reserva" id="Fecha_Reserva" value="{{ isset($reserva)?$reserva->Fecha_Reserva:'' }}">

<button type="submit">Reservar</button>