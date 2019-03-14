<div class="modal fade ModalCadastro" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Cadastro de Usuário</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="StrNome">Nome</label>
						<input type="text" class="form-control" id="StrNome" name="StrNome">
					</div>
					<div class="form-group">
						<label for="StrUsuario">Usuario</label>
						<input type="text" class="form-control" id="StrUsuario" name="StrUsuario">
					</div>
					<div class="form-group">
						<label for="StrSenha">Senha</label>
						<input type="text" class="form-control" id="StrSenha" name="StrSenha">
					</div>
					<div class="form-group">
						<label for="StrEmail">Email</label>
						<input type="text" class="form-control" id="StrEmail" name="StrEmail">
					</div>
					<div class="form-group">
						<label for="NumIdPerfil">Perfil</label>
						<select class="form-control" id="NumIdPerfil" name="NumIdPerfil">
							<option value="">Selecione</option>
							<option value="1">Administrador</option>
							<option value="2">Leitor</option>
						</select>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
			</div>
		</div>
	</div>
</div>