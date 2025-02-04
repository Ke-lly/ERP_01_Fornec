<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!--NÃO ALTERAR-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="src/css/styles.css">
</head>

<body>
    <!--NÃO ALTERAR-->
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-purple sidebar">
                <div class="logo">
                    <i class="bi bi-0-circle-fill"></i>
                    <h2>HORIZON+</h2>
                </div>
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="bi bi-1-circle-fill"></i>
                                <i class="bi bi-phone-fill icon-large"></i>
                                <span>Produtos</span>
                                <i id="indicator" class="bi bi-caret-left-fill indicator"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-basket2-fill icon-large"></i>
                                <span>Pedidos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-people-fill icon-large"></i>
                                <span>Fornecedores</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-person-badge-fill icon-large"></i>
                                <span>Funcionários</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-box-fill icon-large"></i>
                                <span>Estoque</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-pc-display-horizontal icon-large"></i>
                                <span>Equipamentos</span>
                            </a>
                        </li>
                    </ul>
                    <div class="user">
                        <div class="nav-item">
                            <div class="d-flex align-items-center card-user">
                                <i class="bi bi-person-circle users"></i>
                                <div class="ml-2">
                                    <div>Funcionário</div>
                                    <div class="text-muted" style="font-size: 0.8em;">Função xyz</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!--NÃO ALTERAR-->

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                    <h1 class="h2">Cadastro de Fornecedores</h1>
                </div>
                <!--NÃO ALTERAR-->
            
                <!--MEXER AQUI -->
                <form>
                <div class="form-section">
  <div class="mb-3">
    <label for="fornecedorNome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="fornecedorNome" required>
  </div>
  
  <div class="mb-3">
    <label for="fornecedorTelefone" class="form-label">Telefone</label>
    <input type="tel" class="form-control" id="fornecedorTelefone" required>
  </div>
  
  <div class="mb-3">
    <label for="fornecedorEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="fornecedorEmail" aria-describedby="emailHelp" required>
  </div>

  <div class="mb-3">
    <label for="fornecedorEndereco" class="form-label">Endereço</label>
    <input type="text" class="form-control" id="fornecedorEndereco" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>



                <!--MEXER AQUI -->
                
                <!--NÃO ALTERAR-->
            </main>
        </div>
    </div>
    <!--NÃO ALTERAR-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="src/js/script.js"></script>
    <!--NÃO ALTERAR-->
</body>

</html>