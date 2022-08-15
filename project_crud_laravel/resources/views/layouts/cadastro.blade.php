<!DOCTYPE html>
 <html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Crud</title>
    </head>
    <body>
        <form action="{{route ('endereco')}}" method="POST">   
            <div class="row">
                <div class="col s4 offset-s4 card">
                    <div class="card">  
                        <div class="card-action">
                        <span class="text-black"><b>Informe seu Cep</b></span> 
                        <br>
                        <input name= "cep" id="cep" type="int"> <a class="btn-floating #69f0ae green accent-2"><i class="material-icons">search</i></a> 
                        <br>
                        <input class="text-black" placeholder= Rua name="rua" id="rua" type="text">
                        <br>
                        <br>
                        <input  placeholder= Bairro name="bairro" id="bairro" type="text">
                        <br>
                        <br>
                        <input  placeholder= Cidade name="cidade" id="cidade" type="text">
                        <br>
                        <br>
                        <input  placeholder= UF name="uf" id="uf" type="text">
                        <br>
                        <br>
                        <span class="text-black"><b>Informe o numero da casa:</b></span> 
                        <br>
                        <input name= "numero" id="numero" type="int">
                        <br>
                        <br>
                        <span class="text-black"><b>Informe o ponto de referencia:</b></span>
                        <br>
                        <input  name="referencia" id="reference" type="text">
                        <br>
                        <br>
                        <a class="waves-effect waves-light btn-large #69f0ae green accent-2"><i class="material-icons left">cloud</i>Cadastrar Informações</a>              
        </form>
                    </div> 
                </div>    
            </div>   
     <!--JavaScript at end of body for optimized loading-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   </body>
 </html>
