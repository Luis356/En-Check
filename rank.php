<?php
require('./php/conexao.php');
$sql = mysqli_query($con, "SELECT nome, pontuacao FROM clientes ORDER BY pontuacao DESC LIMIT 0,6");
$i = 0;
while ($row = mysqli_fetch_assoc($sql)) {
    $i++;

?>
    <div style="background-color: red; width: 100px; height: 30px; padding: 20px">
        <?php echo $row['nome']; ?> com <?php echo $row['pontuacao']; ?>
    </div>
<?php  }
?>