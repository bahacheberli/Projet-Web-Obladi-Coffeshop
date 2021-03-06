<?php
include '../core/clientC.php';
$cli = new clientC();
$limit=3;
$page=isset($_GET['page']) ? $_GET['page'] :1;
$start=($page - 1)*$limit;
$listcli = $cli->afficherClient();

$listcli1 = $cli->afficherParPagination($start,$page,$limit);
 
 $totales=0;
 foreach($listcli as $row)
 {
   $totales++;
 }
$pages=ceil($totales / $limit);

$Previous=$page -1;
if ($Previous<1) {
    $Previous=1;
}


$Next=$page +1;
if ($Next>$pages) {
    $Next=$pages;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Compte Client</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Med Baha</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library 
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Gestion des Données
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>-->
            <ul class="nav nav-treeview">
              <!--
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="./index2.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compte client</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            -->
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Gérer les clients
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="afficherComptes.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Afficher les Comptes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="lesCartes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Afficher Carte Fidelite</p>
                </a>
              </li>
              
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Afficher les Comptes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Afficher les Comptes</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
           <!-- AFFICHAGE DE TOUS LES COMPTES CLIENTS :) -->
            <div style=" margin-top: 70px ;margin-left: 0px ;text-align: center;">
               <!-- nombres des clients et moyenne d'age-->
               <form method="POST" action="nombreTotaleClients.php" >
               <input type="hidden" name="nbclient" id="nbclient" value="nombre">
                <input type="submit" name="nbclient" class="btn btn-outline-primary "  value="Le nombre totales de clients">
               </form>
                   </br>
               <form method="POST" action="moyenneAge.php" >
               <input type="hidden" name="moyenneage" id="moyenneage" value="age">
                <input type="submit" name="moyenneage" class="btn  btn-outline-primary"  value="La moyenne d'age des clients">
               </form>
           </div>
           </br>

</br>
</br>
           <div>
               <form method="POST" action="lesCompteCherch.php">
                    <p style="margin-left: 20px">Chercher:</p>
                   <input type="text" name="search" id="search" placeholder="Search by  Name" style="margin-left: 20px ">
                   <input type="submit" name="bbb" value="search" class="btn btn-primary"  ; style="margin-left: 20px ">
               </form>
           </div>



          <!-- <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon" style="margin-left: 5px ;background-color: #bdc3c7">Search</span>
                    <input type="text" name="search_text" id="search_text" placeholder="Search by  Details" class="form-control" style="margin-right: 500px ; margin-left: 20px" />
                </div>
            <br />
            <div id="result"></div>                 
                          </div>  -->
</br>
           <div>
               <!-- TRI-->
               <form method="POST" action="lesComptesTrier.php">
                <p style="margin-left: 20px">Trier Par :</p>
               <input type="hidden" name="tri" id="tri" value="age">
                <input type="submit" name="tri" class="btn btn-primary" style="margin-left: 20px " value="Age des Clients">
               </form>
           </div>


</br>
</br>


     <div style="text-align: center ">
        <nav>
         <ul>

            <li> pages:
                 <a style="color: #2980b9;" href="pagination.php?page=<?= $Previous ?>">Previous</a>|

             <?php for($i=1; $i<=$pages;$i++) :?>
             <a style="color: #2980b9;" href="pagination.php?page=<?= $i; ?>" > <?= $i; ?></a> |
         <?php endfor; ?>

          <a style="color: #2980b9;" href="pagination.php?page=<?= $Next ?>">Next</a>
         </li>

         </ul>
         </nav>
     </div>

      <div id="afficher" class="card-body">

     
        <table class="table table-bordered table-striped" style="margin-right: 0px ;margin-left: 00px ;margin-top: 35px; background-color: #dfe6e9">
    <thead>
    <tr>
        <th>Identifient</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Age</th>
        <th>Login</th>
        <th>Mot de passe</th>
        <th>Email</th>
        <th>Numéro de télephone</th>
        <th>Adresse</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
</thead>
<?php

foreach ($listcli1 as $row)
{
    echo '
        <tr>
            <td>'.$row["idclient"].'</td>
            <td>'.$row["nomclient"].'</td>
            <td>'.$row["prenomclient"].'</td>
            <td>'.$row["ageclient"].'</td>
            <td>'.$row["login"].'</td>
            <td>'.$row["mdp"].'</td>
            <td>'.$row["email"].'</td>
            <td>'.$row["numclient"].'</td>
            <td>'.$row["adresseclient"].'</td>
            <td>
                <form action="modifierClient.php" method="get">
                    <input type="hidden" id="id" name="id" value="'.$row["idclient"].'">
                    <input type="hidden" id="nom" name="nom" value="'.$row["nomclient"].'">
                    <input type="hidden" id="prenom" name="prenom" value="'.$row["prenomclient"].'">
                    <input type="hidden" id="age" name="age" value="'.$row["ageclient"].'">
                    <input type="hidden" id="login" name="login" value="'.$row["login"].'">
                    <input type="hidden" id="mdp" name="mdp" value="'.$row["mdp"].'">
                    <input type="hidden" id="email" name="email" value="'.$row["email"].'">
                    <input type="hidden" id="num" name="num" value="'.$row["numclient"].'">
                    <input type="hidden" id="adresse" name="adresse" value="'.$row["adresseclient"].'">
                    <input type="submit" name="modifier" value="modifier" class="btn bg-info style="background-color: #636e72;">
                </form>

            </td>



            <td><form method="POST" action="suppClient.php">
            <input type="hidden" id="id" name="id" value="'.$row["idclient"].'">
    <input type="submit" name="supprimer" value="supprimer" class="btn bg-danger style="background-color: #d63031">
     
    </form>
    </td>

        </tr>
    ';
}
?>
</table>
     
</div>
</br>
</br>

           


    <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
