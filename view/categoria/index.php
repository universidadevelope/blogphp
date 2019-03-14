<?php include '../../includes/head.php'; ?>
<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-md-11">
			<h1><i class="fas fa-align-justify"></i> Categoria</h1>
		</div>
		<div class="col-mg-1">
			<button type="button" class="btn btn-success" data-toggle="modal" data-target=".ModalCadastro"><i class="far fa-file"></i> Novo</button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover">
				<thead class="thead-dark">
					<tr>
						<th>Nome</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Categoria 1</td>
						<td><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i> Editar</button></td>
					</tr>
					<tr>
						<td>Categoria 2</td>
						<td><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i> Editar</button></td>
					</tr>
					<tr>
						<td>Categoria 3</td>
						<td><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i> Editar</button></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php include 'includes/cadastro.php'; ?>

<?php include '../../includes/footer.php'; ?>	