<!doctype html>

        <title>Index</title>

        <!-- Fonts -->
        <head>
    </head>
    <body>
        
		<h1 class="text-primary">Lista de Eventos</h1>
    <div class="table-responsive">
        <table class="table">
  <thead>
    <tr>
        <th class="text-center">Id evento</th>
        <th class="text-center">Descripción</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Foto</th>
    </tr>
  </thead>
  <tbody>
    @foreach($eventos as $evento)
        <tr>
            <td class="text-center">{{ $evento->id}}</td>
            <td class="text-center">{{ $evento->description }}</td>
            <td class="text-center">{{ $evento->fecha}}</td>
			 <td class="text-center">
			 
			 <img src="data:image/png;base64,{{ chunk_split(base64_encode($evento->foto)) }}" height="100" width="100"> </td>
            <td>
                <a href="{{ route('eventos.show', $evento->id) }}" class="btn btn-info">Ver</a>

            </td>
        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <th class="text-center">Id evento</th>
      <th class="text-center">Descripción</th>
      <th class="text-center">Fecha</th>
	  <th class="text-center">Foto</th>
      
    </tr>
  </tfoot>
</table>
    </div>
		
		
		
		
    </body>
</html>
