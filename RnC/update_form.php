<?php 
  include "koneksi.php";
  session_start();
  $qmenu = "select * from menu";
  $data_menu = $conn->query($qmenu);  
  $qrecipes = "select * from recipes";
  $data_recipes = $conn->query($qrecipes);  

  $qselect_menu = "select * from menu left join recipes on recipes.recipes_id = menu.recipes_id where menu_id = ".$_GET['menu_id'];

  foreach($conn->query($qselect_menu) as $value){
    $data_select_menu=$value;
  } ;
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Recipes Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" href="assets/images/logo2.png">
    <link href="assets/css/all.css" rel="stylesheet"> 
    <link href="../node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/base-min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/grids-min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/grids-responsive-min.css">
    <meta name="msapplication-config" content="bootstrap-4.4.1/site/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand"href="admin.php"><img width="70" src="assets/images/logo2.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#ff9933 ">
            <span class="navbar-toggler-icon"style="visibility: hidden" ></span><img style="width: 30px" src="assets/images/menu.png">
        </button>
        <div class="collapse navbar-collapse "  id="navbarNav" style="padding-left: 80%">
            <ul class="navbar-nav" >
                
                <li class="nav-item">
                    <a class="nav-link" style="color: #cccccc" href="logout.php" data-toggle="modal" 
                        data-target="#myModal">Logout</a>
            </ul>
        </div>
</nav>
  <body class="bg-light">
    <div class="container">
      <div class="py-5 text-center">
        <h2>Form Recipes</h2>
      </div>
      <h4 class="mb-3">Input Data</h4>
      </div>
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Data recipes</span>
          </h4>
          <?php
              foreach($data_menu as $index => $value){
          ?>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div> 
                <img src="uploads/<?php echo $value['foto']?>" width="80px" height="80px">
              </div>
              <div>
                <h6 class="my-0"><?php echo $value['nama'] ?></h6>
                <small class="text-muted"><?php echo $value['keterangan'] ?></small>
              </div>
              <a href="update_form.php?menu_id=<?php echo $value['menu_id'] ?>" type="button" class="close">
                  <span class="fa fa-pencil"></span>
              </a>
              <a href="hapus_data.php?menu_id=<?php echo $value['menu_id'] ?>" type="button" class="close">
                <span class="fa fa-trash"></span>
              </a>
              </li>
            </ul>
            <?php
            }
            ?>
        </div>
        <div class="col-md-8 order-md-1">
          <form action ="simpan_menu.php" method="POST" enctype="multipart/form-data" > 
            <input type="hidden" name="menu_id" value="<?php echo $data_select_menu['menu_id'] ?>">
             <div class="mb-3">
                 <label for="nama">Nama Recipes</label>
                 <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_select_menu['nama'] ?> " required>
             </div>
             <div class="mb-3">
                 <label for="keterangan">Keterangan</label>
                 <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $data_select_menu['keterangan'] ?> " required>
             </div>
             <div class="mb-3">
                 <label for="bahan_utama">Bahan Utama</label>
                 <input type="text" class="form-control" id="bahan_utama" name="bahan_utama" value="<?php echo $data_select_menu['bahan_utama'] ?> " required>
             </div>
             <div class="mb-3">
                 <label for="bumbu">Bumbu</label>
                 <input type="text" class="form-control" id="bumbu" name="bumbu" value="<?php echo $data_select_menu['bumbu'] ?> " required>
             </div>
             <div class="mb-3">
                 <label for="langkah">Langkah-Langkah</label>
                 <input type="text" class="form-control" id="langkah" name="langkah" value="<?php echo $data_select_menu['langkah'] ?> " required>
             </div>
             <div class="mb-3">
                 <label for="Recipes">Jenis</label>
                 <select class="custom-select d-block w-100" id="Recipes" name="recipes_id" required>
                    <option value="">Pilih...</option>
                    <?php
                       foreach($data_recipes as $index => $value){
                          if($data_select_menu['recipes_id']==$value['recipes_id']){
                            $is_selected = 'selected';
                          }else{
                            $is_selected = '';
                          }
                        ?>
                       <option <?php echo $is_selected ?> value="<?php echo $value['recipes_id'] ?>"><?php echo$value['jenis_recipes'] ?></option>
                      <?php
                       }
                     ?>
                 </select>
            </div>
            <div class="custom-file mb-3">
                Pilih Foto :
                <input type="file" class="form-control" id="gambar"  name="gambar" value="<?php echo $data_select_menu['foto'] ?> " required>
             </div>
               <hr class="mb-4">
               <button class="btn btn-primary btn-lg btn-block" type="submit">Update Data</button>
               <a href="admin.php" class="btn btn-warning btn-lg btn-block" type="submit">Batal</a>
          </form>
        </div>
      </div>

    </div>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2019 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="node_modules/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
<script src="bootstrap-4.4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>