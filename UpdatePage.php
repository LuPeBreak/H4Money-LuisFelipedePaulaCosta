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
    <link href="Css\Style.css" rel="stylesheet">
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
    <script>

        function validate(){

            if(document.getElementById('cpf').value == ''){
                alert('preencha o cpf por favor');
                document.getElementById('cpf').focus();
                return false;
            }
            if(document.getElementById('nome').value == ''){
                alert('preencha o nome por favor');
                document.getElementById('nome').focus();
                return false;
            }
            if(document.getElementById('cpf').value.length != 14){
                alert('preencha um cpf valido');
                document.getElementById('cpf').focus();
                return false;
            }
            if(document.getElementById('endereco').value.length >= 45){
                alert('O endereco esta muito grande, por favor utilize padroes reduzidos como R.nomedarua');
                document.getElementById('endereco').focus();
                return false;
            }
            if(document.getElementById('uf').value.length != 2){
                alert('Utilize a sigla de seu estado no campo UF. Ex: Rio de janeiro = RJ');
                document.getElementById('uf').focus();
                return false;
            }
            
        }

</script>

    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">H4Money</a>
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
                            <a class="nav-link" href="/Register.php">
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

                <?php 
    require __DIR__."\App\GetClient.php";
?>
                <div class="container border rounded">
                    <h2>Atualizar Cliente</h2>
                    <form action="app\UpdateClient.php" method="POST" onSubmit='return validate()'>
                        <div class=form-group>
                            <input type="hidden" name="id" value="<?php echo "{$cliente['id']}"?>" readonly><br>
                            Nome: <input id='nome' class="nome form-control" type="nome" value="<?php echo "{$cliente['nome']}"?>"name="nome"><br>
                            Email: <input class="email form-control" type="email" value="<?php echo "{$cliente['email']}"?>" name="email"><br>
                            cep: <input class="cep form-control" type="text" value="<?php echo "{$cliente['cep']}"?>"name="cep"><br>
                            endereço: <input id='endereco' class="endereco form-control" type="text" value="<?php echo "{$cliente['endereco']}"?>" name="endereco"><br>
                            numero: <input class="numero form-control" type="text" value="<?php echo "{$cliente['numero']}"?>" name="numero"><br>
                            bairro: <input class="bairro form-control" type="text" value="<?php echo "{$cliente['bairro']}"?>" name="bairro"><br>
                            cidade: <input class="cidade form-control" type="text" value="<?php echo "{$cliente['cidade']}"?>" name="cidade"><br>
                            UF: <input id='uf' class="uf form-control" type="text" value="<?php echo "{$cliente['uf']}"?>"name="uf"><br>
                            cpf: <input id='cpf' class="cpf form-control" type="text" value="<?php echo "{$cliente['cpf']}"?>"name="cpf"><br>
                        </div>
                        <input type="submit" class="btn btn-primary center" value="Submit">
                    </form>
                </div>

        </div>

        </main>


    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>


    <script>
        $(".cep").change(function () {
            cep = $(".cep").val();
            $.get("https://viacep.com.br/ws/" + cep + "/json/", function (data) {

                $(".endereco").val(data['logradouro']);
                $(".bairro").val(data['bairro']);
                $(".uf").val(data['uf']);
                $(".cidade").val(data['localidade']);

                if (data['erro']) {
                    alert('cep nao encontrado');
                };



            });

        });



        $(".cpf").mask('999.999.999-99');
        $(".cep").mask('99999-999');
    </script>
</body>

</html>