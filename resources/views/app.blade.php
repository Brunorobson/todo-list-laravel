<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title> Todo List </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  {{-- Janela Flutuante --}}
  <!-- Adicione os estilos CSS do Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- Adicione os scripts JavaScript do Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row min-vh-80">
        <div class="col-6 mx-auto">
          <div class="card mt-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Todo List</h6>
                <p class="mb-0 text-white ps-3">Gerencie suas tarefas</p>
              </div>
            </div>
            <div class="card-body">

                @include('create')

                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Tarefas</h6>
                <table class="table mb-0 text-white ps-3 ">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <thead>
                    <tr>
                        <td>{{ $task->nome }}</td>
                        <td>
                            @if ($task->status == 'Em espera')
                                <span class="badge bg-gradient-warning">Em espera</span>
                            @elseif ($task->status == 'Em andamento')
                                <span class="badge bg-gradient-info">Em Andamento</span>
                            @elseif ($task->status == 'Concluído')
                                <span class="badge bg-gradient-success">Concluido</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-success">
                                <i class="fas fa-edit"></i> Editar
                            </a>

                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash"></i> Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                </thead>
                @endforeach
            </tbody>
        </table>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
      </div>
      <hr class="horizontal dark my-1">
    </div>
  </div>

</body>

</html>
