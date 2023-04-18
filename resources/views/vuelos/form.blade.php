
Numero de Vuelo:
<input type="number" name="Numero_Vuelo" id="Numero_Vuelo" value="{{ isset($vuelo)?$vuelo->Numero_Vuelo:'' }}">

Origen:
<input type="text" name="Origen" id="Origen" value="{{ isset($vuelo)?$vuelo->Origen:'' }}">

Destino:
<input type="text" name="Destino" id="Destino" value="{{ isset($vuelo)?$vuelo->Destino:'' }}">

Fecha de Salida:
<input type="date" name="Fecha_Salida" id="Fecha_Salida" value="{{ isset($vuelo)?$vuelo->Fecha_Salida:'' }}">

<button type="submit">Save</button>