<?php
include 'db.php';

$query_search = "SELECT * FROM cadastro WHERE idcadastro = '27'
                 OR idcadastro = '28'
                 OR idcadastro = '29'
                 OR idcadastro = '30' ";
$consulta_search = mysqli_query($conexao, $query_search);


?>

<table class="table table-hover table-striped" id="pesquisa">
	<thead>
		<tr>
			<th> Nome Contato </th>
            <th> Nome da empresa </th>
			<th> Segmento </th>
            <th> CNPJ </th>
            <th> Editar </th>
			<th> Deletar </th>
            <th> Concluídos </th>
		</tr>
	</thead>
	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_search)){
				echo '<tr><td >'.$linha['nomeContato'].'</td>';
                echo '<td>'.$linha['nomeEmpresa'].'</td>';
				echo '<td>'.$linha['Segmento'].'</td>';
                echo '<td>'.$linha['CNPJ'].'</td>';
                
                ?>

                <td><a href="?pagina=inserir_cadastro&editar=<?php echo $linha['idcadastro']; ?>"><img src="img/editar.svg"></a></td>
                <td><a href="deleta_cadastro.php?idcadastro=<?php echo $linha['idcadastro']; ?>"><img src="img/excluir.svg"></a></td>
                
            <?php
                echo '<td><input type="checkbox"></td></tr>';
                }
            ?>
        </tbody>
    
    </table>