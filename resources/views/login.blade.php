<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página inicial de login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Login</h3>           
                    <div class="box">
                        <!-- Mensagem de erro ao usuário na tela de login, email ou senha em branco -->
                        @if ($errors->any())          
                            <div class="notification is-danger"> 
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}<br></li> 
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- Caso usuário erre seu email ou senha mandar um aviso -->
                        @if (session('danger'))          
                            <div class="notification is-danger"> 
                                {{session('danger')}}
                            </div>      
                        @endif
                        <form action="{{route('autenticacao.user')}}" method="POST">
                            @csrf
                            <div class="field">
                                <div class="control">
                                    <input name="email" name="text" class="input is-large" placeholder="Seu email" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="password" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button> <br>                           
                            <a class="button is-block is-link is-large is-fullwidth" href="cadastrar-usuario.php" role="button">Cadastro de usuário</a> <br>
                            <a class="button is-block is-link is-large is-fullwidth" href="cadastrar-coloborador" role="button">Cadastro coloborador</a>                                      
                        </form>                       
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>

</html>