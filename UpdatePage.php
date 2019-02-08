<!DOCTYPE html>
<html>
<head>
    <?php 
    require __DIR__."/App/GetCliente.php";
    ?>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Luis Felipe de Paula Costa">
    <title>H4Money</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

   
<div class="container border rounded">
          <h2>Update de Cliente</h2>
          <form action="app\UpdateCliente.php" method="POST">
            <div class=form-group>
            <input type="hidden" name="id"  value="<?php echo "{$cliente['id']}"?>" readonly><br>
              Nome: <input class="form-control" type="nome" value="<?php echo "{$cliente['nome']}"?>" name="nome"><br>
              Email: <input class="form-control" type="email"  value="<?php echo "{$cliente['email']}"?>" name="email"><br>
              cep: <input class="cep form-control" type="text" value="<?php echo "{$cliente['cep']}"?>" name="cep"><br>
              endereço: <input class="endereco form-control" type="text" value="<?php echo "{$cliente['endereco']}"?>" name="endereco"><br>
              numero: <input class="form-control" type="text" value="<?php echo "{$cliente['numero']}"?>" name="numero"><br>
              bairro: <input class="bairro form-control" type="text" value="<?php echo "{$cliente['bairro']}"?>" name="bairro"><br>
              cidade: <input class="cidade form-control" type="text" value="<?php echo "{$cliente['cidade']}"?>" name="cidade"><br>
              UF: <input class="uf form-control" type="text" value="<?php echo "{$cliente['uf']}"?>" name="uf"><br>
              cpf: <input class="cpf form-control" type="text" value="<?php echo "{$cliente['cpf']}"?>" name="cpf"><br>

            </div>
            <input type="submit"  class="btn btn-primary center" value="Submit">
          </form>
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