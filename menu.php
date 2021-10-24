<?php
    include 'conecta.php';
    $usuario = $_SESSION["user"];
    $menu_query = "SELECT * FROM usuario WHERE login='".$usuario."' AND tipo='Administrador'";
    $result = $conn->query($menu_query);
    if($result->num_rows>0){
        echo "<a href='loja.php' type='button' class='btn btn-light'>HOME</a>&nbsp;&nbsp;";
        echo "<a href='usuario.php' type='button' class='btn btn-light'>USUÁRIO</a>&nbsp;&nbsp;";
        echo "<a href='sair.php' type='button' class='btn btn-light'>SAIR</a>&nbsp;&nbsp;";
    }
    else {
        echo "<a href='loja.php' type='button' class='btn btn-light'>HOME</a>&nbsp;&nbsp;";
        echo "<a href='sair.php' type='button' class='btn btn-light'>SAIR</a>&nbsp;&nbsp;";
    }
?>