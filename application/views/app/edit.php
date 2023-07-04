<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FastPrint Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js">
  </script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
  </script>
  
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<?php include "menu.php";?>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Edit Data Produk</h1> <hr>
      <form action="<?php echo base_url() ?>app/editdata" method="post">
      <?php
      $nmr = 1;
      $cekajanjeng = $this->db->query("SELECT * FROM datanya WHERE id_produk='$idne'");
      foreach ($cekajanjeng->result() as $row){
        ?>
        <input type="hidden" name="id_produk" value="<?php echo $row->id_produk ?>">
        <label>Nama Produk</label>
        <input type="text" name="namaproduk" class="form-control" value="<?php echo $row->nama_produk ?>" required> <br>
        <label>Kategori</label>
        <input type="text" name="kategori" class="form-control" value="<?php echo $row->kategori ?>" required> <br>
        <label>Harga</label>
        <input type="number" name="harga" class="form-control" value="<?php echo $row->harga ?>" required> <br>
        <label>Status</label>
        <select class="form-control" name="status" required>
          <option value="bisa dijual" <?php if($row->status == "bisa dijual"){echo "selected";}  ?>>Bisa Dijual</option>
          <option value="tidak bisa dijual" <?php if($row->status == "tidak bisa dijual"){echo "selected";}  ?>>Tidak Bisa Dijual</option>
        </select> <br>        
        <?php
      }
      ?>      
        <button type="submit" class="btn btn-success">Simpan</button> <br> <br>
      </form>
    </div>
    <div class="col-sm-2 sidenav">
      
    </div>
  </div>
</div>
<?php include "footer.php";?>
<script>

/* Initialization of datatable */
$(document).ready(function() {
  $('#tableID').DataTable({ });
});
</script>
</body>
</html>
