<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Form Basics</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
      @include('partials.sidebar')

    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('partials.header')

        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Formulaire d'ajout de tâche</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Form Basics</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Formulaire</h6>
                </div>
                <div class="card-body">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>                    
                @endif

                <ul>
                    @foreach ($errors-> all() as $error)
                    <li class="alert alert-danger">
                        {{session($error)}}
                    </li>  
                    @endforeach
                </ul>

                  <form action="\ajouter\traitement " method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Titre de la tâche</label>
                      <input type="text" class="form-control" name="title" id="titre" placeholder="titre de la tâche" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                    </div>
                   <textarea placeholder="Description de la tâche" name="description" id="description" name="w3reviw" cols="60" required>
                   
                   </textarea>

                    <div class="form-group">
                    <br>

                      <label for="exampleInputEmail1">Statut de la tâche</label>
                      <br>
                      <input type="radio" class="form-colntrol" name="statut" value="En cours" > En cours
                      <br>
                      <input type="radio" class="form-colntrol" name="statut"  value=" Terminé"> Terminé

                    </div>

                    <button type="submit" class="btn btn-primary">Envoyer</button>
                  </form>
                </div>
              </div>

            </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>