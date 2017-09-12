<!DOCTYPE html>
<html lang="en">

  <head>

  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">


    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Painel de Empresas e Pessoas</a>
          </li>
          <li class="breadcrumb-item active">Localizar</li>
        </ol>

      </div> 
        
        <div>
            <?php if (isset($retorno)){ echo $retorno; };?>
        </div>
        
        <div style="text-align: right;margin:15px;">
            <a  class="nav-link" href="<?php echo base_url('index.php/empresas_pessoas/cadastro'); ?>">
                <input type="button" class="btn btn-primary" value="Novo Cadastro" >
            </a>
            
        </div>
       

        

        

    

    

  </body>

</html>
