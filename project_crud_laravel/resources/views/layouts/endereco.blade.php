<!DOCTYPE html>
<html>
   <head>
       <!--Import Google Icon Font-->
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <!--Import materialize.css-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
       <!--Let browser know website is optimized for mobile-->
       <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <title>Crud_Listagem</title>
   </head>
   <body>
   <div class="row">
       <div class="col s12 m6 push-m3">
           <table class="striped">
              <thead>
                  <tr>
                      <th>Cep:</th>
                      <th>Rua:</th>
                      <th>Bairro:</th>
                      <th>Cidade:</th>
                      <th>Uf:</th>
                      <th>Numero:</th>
                      <th>Referencia:</th>
                  </tr>
                  <tbody>
                    <tr>
                        @foreach($endereco as $endereco)
                        <li>
                        <tr>
                            <td>{{ $endereco->cep }}</td>
                            <td>{{ $endereco->rua}}</td>
                            <td>{{ $endereco->bairro }}</td>
                            <td>{{ $endereco->cidade}}</td>
                            <td>{{ $endereco->uf}}</td>
                            <td>{{ $endereco->numero}}</td>
                            <td>{{ $endereco->referencia}}</td>
                        </tr>
                        </li>
                        @endforeach
                        <form action="{{ route('cadastro.destroy', $endereco) }}" method="post">   
                        <td><a class="btn-floating #fff176 yellow lighten-2" href="{{ route('cadastro.edit', $endereco) }}"><i class="material-icons">edit</i></a></td>
                        @csrf
                        @method('delete')
                        <td><button type="submit" class="btn-floating red"><i class="material-icons">delete</i></a></td>             
                        <a href="layouts/cadastro/create" class="btn #69f0ae green accent-2"> Adicionar novo endereco</a>
                        </form>

       <br>
       
  </div>
</div>
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>