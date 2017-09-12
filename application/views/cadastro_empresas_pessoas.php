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
                        <a href="#">Cadastro de Empresas e Pessoas</a>
                    </li>
                </ol>
            </div> 

            <div  style="margin:25px;max-width:650px;">               

                    <!-- alertas de erro de validação de form-->
                    <?php if ($form_erros!=NULL) echo "<div class=\"alert alert-danger\">  $form_erros</div>" ;?>
                                           
                    <div class="form-group">
                        <?php echo form_label('Tipo de Cadastro','tipo_cadastro');?><br>
                        <?php echo form_radio(['name'=>'tipo_cadastro','id'=>'tipo_cadastro','value'=>'J','onchange'=>'muda_cadastro(this)','checked'=>'true']) ?>Pessoa Jurídica&nbsp&nbsp
                        <?php echo form_radio(['name'=>'tipo_cadastro','id'=>'tipo_cadastro','value'=>'F','onchange'=>'muda_cadastro(this)']) ?>Pessoa Física<br>
                    </div>
                    
                    <?php echo form_open('empresas_pessoas/cadastro'); ?>
                    
                    <div id="pessoa_juridica" name="pessoa_juridica">
                    
                    <div class="form-group" style="max-width: 200px;margin-bottom: 35px;">
                        <?php echo form_label('CNPJ:','cnpj');?><br>
                        <?php echo form_input(['name' => 'cnpj', 'id' => 'cnpj','maxlength' => '14', 'class' => 'form-control', 'value' => set_value('cnpj'), 'placeholder' => 'Digite o CNPJ']); ?>
                    </div>

                    <div style="margin-top:-20px;" class="form-group">
                        <?php echo form_label('Nome da Empresa:','nome_empresa');?><br>
                        <?php echo form_input(['name' => 'nome_empresa', 'id' => 'nome_empresa','maxlength' => '255', 'class' => 'form-control', 'value' => set_value('nome_empresa'), 'placeholder' => 'Digite o nome da empresa']); ?>
                    </div>

                    <div class="row" >
                        <div class="col-6" style='min-width: 200px;'>
                            <?php echo form_label('Contato:','contato');?><br>
                            <?php echo form_input(['name' => 'contato', 'id' => 'contato','maxlength' => '150', 'class' => 'form-control', 'value' => set_value('contato'), 'placeholder' => 'Nome do contato']); ?>
                        </div>
                        <div class="col-3" style='min-width: 200px;'>
                            <?php echo form_label('Telefone 1:','telefone1');?><br>
                            <?php echo form_input(['name' => 'telefone1', 'id' => 'telefone1','maxlength' => '15', 'class' => 'form-control', 'value' => set_value('telefone1'), 'placeholder' => '(XX) XXXX-XXXX']); ?>
                        </div>
                        <div class="col-3" style='min-width: 200px;'>
                            <?php echo form_label('Telefone 2:','telefone2');?><br>
                            <?php echo form_input(['name' => 'telefone2', 'id' => 'telefone2','maxlength' => '15', 'class' => 'form-control', 'value' => set_value('telefone2'), 'placeholder' => '(XX) XXXX-XXXX']); ?>
                        </div>
                    </div>
                    </div>
                    
                    <div id="pessoa_fisica" name="pessoa_fisica" >
                      
                    <div class="form-group" style="max-width: 200px">
                        <?php echo form_label('CPF:','cpf');?><br>
                        <?php echo form_input(['name' => 'cpf', 'id' => 'cpf','maxlength' => '11', 'class' => 'form-control', 'value' => set_value('cpf'), 'placeholder' => 'Digite o CPF']); ?>
                    </div>    
                        
                        
                    <div class="form-group" >
                        <?php echo form_label('Nome:','nome_pessoa');?><br>
                        <?php echo form_input(['name' => 'nome_pessoa', 'id' => 'nome_pessoa','maxlength' => '255', 'class' => 'form-control', 'value' => set_value('nome_pessoa'), 'placeholder' => 'Digite o nome']); ?>                        
                    </div>
                    </div>
                        
                    <br>
                    
                    <?php echo form_checkbox(['name'=>'termo','id'=>'termo','onchange'=>'verifica(this)']); ?>Li e aceito os termos e condições de uso<br><br>

                    <?php echo form_submit(['name'=>'enviar','class' => 'btn btn-primary','disabled'=>'true','value'=>'Enviar','name'=>'enviar','id'=>'enviar']); ?>
                    

            <?php echo form_close(); ?>
            </div>

    </body>

</html>

<script>
    //Inicialização
    document.getElementById('enviar').disabled = true;
    $("#pessoa_fisica").hide();
    
    function verifica(aceitou) {
        if (aceitou.checked)
            document.getElementById('enviar').disabled = false;
        else
            document.getElementById('enviar').disabled = true;
    }
    
    function muda_cadastro(valor){       
        if (valor.value=='J'){
           $("#pessoa_juridica").show();
           $("#pessoa_fisica").hide();
        }
        if (valor.value=='F'){
           $("#pessoa_fisica").show();
           $("#pessoa_juridica").hide();
        }
        
    }
</script>