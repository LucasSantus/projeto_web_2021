<h2>Excluir usuário</h2>

<?php

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $usuario_resp= $_SESSION["nome"];
    $descricao = ("Deletar | id -> ".$id);
    $data_hora = date('Y-m-d H:i:s');

    # Delete no banco de dados
    $stmt = $conn->prepare("delete from usuarios where id = :id ");
    $stmt1 = $conn->prepare("INSERT INTO logs (usuario_resp, descricao, data_hora) VALUES (:usuario_resp, :descricao, :data_hora)");

    $bind_param = ["id" => $id];
    $bind_param1 = ["usuario_resp"=> $usuario_resp, "descricao" =>$descricao, "data_hora"=>$data_hora];

    try {
        $conn->beginTransaction();
        $stmt->execute($bind_param);
        $stmt1->execute($bind_param1);
        echo '<div class="msg-cadastro-contato msg-cadastro-sucesso">Usuário Deletado!</div>';
        $conn->commit();
    } catch(PDOExecption $e) {
        $conn->rollback();
        echo '<div class="msg-cadastro-contato msg-cadastro-erro">Não foi possível deletar o usuário -> ' . $e->getMessage() . '</div>';
    }
}
?>
<div id="btn-limpar-sessao">
    <a href="?pg=usuario/usuarios">Voltar</a>
</div>