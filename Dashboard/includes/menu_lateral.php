<?php
    require_once('scripts/db.class.php');
    $objDb = new db();
    $link = $objDb->conecta_mysql();

    //--qtde de clientes
        $sql2 = " SELECT COUNT(*) AS qtde_clientes FROM clientes AS t";
        $resultado_cliente = mysqli_query($link, $sql2);
        $qtde_clientes = 0;
        if($resultado_cliente){
            $registro = mysqli_fetch_array($resultado_cliente, MYSQLI_ASSOC);
            $qtde_clientes = $registro['qtde_clientes'];
            } else {
            echo 'Erro ao executar a query';
        }

?>






<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Menu de Navegação</li>
    <li>
        <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa  fa-user-plus"></i>
            <span>Clientes</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"><?= $qtde_clientes ?></span>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="cadastroCliente.php"><i class="fa fa-circle-o"></i> Cadastro de Clientes</a></li>
            <li><a href="relacaoClientes.php"><i class="fa fa-circle-o"></i> Relação de Clientes

                    <span class="pull-right-container">
              <small class="label pull-right bg-green">4 Novos</small>
            </span>
                </a></li>
        </ul>
    </li>
</ul>