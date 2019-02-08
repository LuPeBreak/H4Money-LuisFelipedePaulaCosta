<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Luis Felipe de Paula Costa">
    <title>H4Money</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">H4Money</a>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="/Count.php">
                                <i class="fa fa-users"></i>
                                quantidade de Clientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Cadastro.php">
                                <i class="fa fa-user-plus"></i>
                                Cadastro de Clientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                <i class="fa fa-user"></i>
                                Clientes
                            </a>
                        </li>

                    </ul>

                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

                <div class="container">
                    <h2>Cadastro de clientes</h2>
                    <form action="App/InsertCliente.php" method="POST">
                        <div class="form-group">
                            Nome: <input class="form-control" type="text" name="nome" required><br>
                            Email: <input class="form-control" type="email" name="email"><br>
                            Cep: <input class='cep form-control' type="text" name="cep"><br>
                            Endereço: <input class='endereco form-control' type="text" name="endereco"><br>
                            Numero: <input class='form-control' type="text" name="numero"><br>
                            Bairro: <input class='bairro form-control' type="text" name="bairro"><br>
                            Cidade: <input class='cidade form-control' type="text" name="cidade"><br>
                            UF: <input class='uf form-control' type="text" name="uf"><br>
                            Cpf: <input class='cpf form-control' type="text" name="cpf" required><br>

                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>

            </main>


        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
   	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>


    <script>
        $(".cep").change(function () {
            cep = $(".cep").val();
            $.get("https://viacep.com.br/ws/" + cep + "/json/", function (data) {

                $(".endereco").val(data['logradouro']);
                $(".bairro").val(data['bairro']);
                $(".uf").val(data['uf']);
                $(".cidade").val(data['localidade']);

                if(data['erro']){
                    alert('cep nao encontrado');
                };   

                

            });

        });

        

        $(".cpf").mask('999.999.999-99');
        $(".cep").mask('99999-999');

    </script>
</body>

</html>