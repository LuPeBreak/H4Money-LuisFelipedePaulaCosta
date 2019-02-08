<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
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







        <div class="panel panel-default">
          <h2>Clientes</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>nome</th>
                  <th>email</th>
                  <th>endereço</th>
                  <th>numero</th>
                  <th>bairro</th>
                  <th>cep</th>
                  <th>cidade</th>
                  <th>uf</th>
                  <th>cpf</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                require __DIR__."/App/ReadClientes.php";

                foreach($clientes as $cliente){
                  echo "<tr>";
                  echo "<td>{$cliente['nome']}</td>";
                  echo "<td>{$cliente['email']}</td>";
                  echo "<td>{$cliente['endereco']}</td>";
                  echo "<td>{$cliente['numero']}</td>";
                  echo "<td>{$cliente['bairro']}</td>";
                  echo "<td>{$cliente['cep']}</td>";
                  echo "<td>{$cliente['cidade']}</td>";
                  echo "<td>{$cliente['uf']}</td>";
                  echo "<td>{$cliente['cpf']}</td>";
                  echo "<td><a class='btn btn-danger btn-sm' href='App/DeleteClientes.php?id={$cliente['id']}'>Delete</a>  <a class='btn btn-light btn-sm' href='UpdatePage.php?id={$cliente['id']}'>Update</a></td>";
                  echo "</tr>";
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>

      </main>


    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  
</body>

</html>