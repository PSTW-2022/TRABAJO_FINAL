<table >
    <thead>
      <tr>
        <th scope="col">nombre</th>
        <th scope="col">descripcion</th>
        <th scope="col">precio</th>
      </tr>
    </thead>
    <tbody>
      @foreach($producto as $item)
      <tr>
        <td>{{$item->nombre}}</td>
        <td>{{$item->descripcion}}</td>
        <td>{{$item->precio}}</td>
        @endforeach
    </tbody>
  </table>