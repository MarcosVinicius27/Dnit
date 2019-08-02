<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Comercial Laravel</title>

        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />       

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">       
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('/')}}" 
                   title="Página Inicial" style="margin-top: -3px">
                    <img src="{{URL::asset('img/logo.png')}}"></a>
                <button type="button" class="navbar-toggle" 
                        data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>               
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav" id="link-white">
                    <li>
                        <a href="#" style="text-decoration: none">
                            <span class="glyphicon glyphicon-home"></span> 
                            <span id="underline">Panel</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" 
                           href="#" style="text-decoration: none">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <span id="underline">Cadastros</span> 
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">                                                                                    
                            <li><a href="{{route('user.index')}}">Produtos</a></li>                                               
                        </ul>
                    </li>
                </ul>
                    <li><a href="#" 
                           style="text-decoration: none">
                            <span class="glyphicon glyphicon-log-in"></span> 
                            <span id="underline">Sair</span></a></li>  
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </ul>
            </div>       
        </nav>        
        <br><br><br><br>
        <div class="container">
                <div class="row">
                    <div class="col-md-12">   
                        <br />
                        <h4 id="center"><b>USUÁRIOS CADASTRADOS ({{$total}})</b></h4>
                        <a href="{{route('user.index')}}">Usuários</a>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th id="center">Código</th>
                                        <th id="center">Nome</th>  
                                        <th id="center">cpf</th>
                                        <th>Data Nascimento</th>                               
                                        <th id="center">Ações</th>                
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($usuarios as $usuario)
                                    
                                    <tr>
                                        <td id="center">{{$usuario->id}}</td>
                                        <td title="name">{{$usuario->name}}</td>
                                        <td title="cpf" id="center">{{$usuario->cpf}}</td>
                                        <td title="data" id="center">{{$usuario->data}}</td>
                                        <td id="center">
                                            <a class="btn btn-primary" href="{{route('user.edit', $usuario->id)}}" 
                                               data-toggle="tooltip" 
                                               data-placement="top"
                                               title="Alterar">ALTERAR</a>
                                            &nbsp;<form style="display: inline-block;" method="POST" 
                                                        action="{{route('user.destroy', $usuario->id)}}"                                                        
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Excluir" 
                                                        onsubmit="return confirm('Confirma exclusão?')">
                                                {{method_field('DELETE')}}{{ csrf_field() }}                                                
                                                <button class="btn btn-danger" type="submit">
                                                     EXCLUIR                                                  
                                                </button>
                                                </form></td>               
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                         </div>
                    </div>
                  </div>
              </div>

        
            </body>
