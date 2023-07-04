<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="https://i.postimg.cc/254G1YT1/fastprint.jpg" alt=""></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li <?php if($this->uri->segment(1) == "app" && $this->uri->segment(2) == ""){echo "class='active'"; } ?>"><a href="<?php echo base_url() ?>app">Beranda</a></li>
        <li <?php if($this->uri->segment(1) == "app" && $this->uri->segment(2) == "notsell"){echo "class='active'"; } ?>"><a href="<?php echo base_url() ?>app/notsell">Produk Yang Tidak Bisa Dijual</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li <?php if($this->uri->segment(1) == "app" && $this->uri->segment(2) == "tambah"){echo "class='active'"; } ?>"><a href="<?php echo base_url() ?>app/tambah"><span class="glyphicon glyphicon-log-in"></span> Tambah Data</a></li>
      </ul>
    </div>
  </div>
</nav>