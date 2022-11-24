<div class="conteudo">
    <div class="tabela">
        <table>
            <?php
            $css = '<link href="../css/jogo.css" rel="stylesheet">';
            require_once("conexao.php");
            $sql = mysqli_query($con, "SELECT palavra FROM palavras ORDER BY rand() LIMIT 1");
            $linha = $sql->fetch_assoc();
            echo $css;
            ?>

            <tr class="itens-tabela">
                <td><?= $linha['palavra'] ?></td>
            </tr>

        </table>
    </div>
    <div class="formulario">
        <form action="verificaPalavra.php" method="get">
            Tradução: <input type="text" name="traducao_texto" id="traducao_texto" autofocus>
            <button type="submit">Traduzir</button>
    </div>
    </form>
<a href="adicionaPalavra.php">Adionar Palavra</a>
</div>