<h2>Logs</h2>

<?php
$sql = "SELECT * FROM logs";
$result = $conn->query($sql, PDO::FETCH_ASSOC);
?>

<table>
    <tr>
        <th>ID</th>
        <th>Administrador</th>
        <th>Ação</th>
        <th>Horário</th>
    </tr>
    <?php
        while($linha = $result->fetch()){
    ?>
        <tr>
            <?php 
                foreach($linha as $chave => $valor){
            ?>
                <td><?= $valor ?></td>
            <?php
                }
            ?>          
        </tr>
    <?php
        }
    ?>
</table>