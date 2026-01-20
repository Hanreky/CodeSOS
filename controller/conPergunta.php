<?php
include 'conexao.php';

function carregarPergunta(){
    session_start();
    global $conn;
    conectar();

    $sql = "SELECT * FROM TBPERGUNTA 
    WHERE IDPERGUNTA = 1 ";

    ;

    $consulta = mysqli_execute_query($conn, $sql);

    $pergunta = mysqli_fetch_assoc($consulta);

    return $pergunta;
}
?>