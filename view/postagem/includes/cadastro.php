<div class="modal fade ModalCadastro" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Cadastro de Postagem</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="StrTitulo">Titulo</label>
						<input type="text" class="form-control" id="StrTitulo" name="StrTitulo">
					</div>
					<div class="form-group">
						<label for="StrResumo">Resumo</label>
						<textarea class="form-control" id="StrResumo" name="StrResumo"></textarea>
					</div>
					<div class="form-group">
						<label for="StrConteudo">Conteúdo</label>
						<textarea class="form-control" id="StrConteudo" name="StrConteudo"></textarea>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="DtPostagem">Data Postagem</label>
								<input type="text" class="form-control" id="DtPostagem" name="DtPostagem">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="DtFim">Data Fim</label>
								<input type="text" class="form-control" id="DtFim" name="DtFim">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="NumIdCategoria">Categoria</label>
						<select class="form-control" id="NumIdCategoria" name="NumIdCategoria">
							<option value="">Selecione</option>
							<option value="1">Categoria 1</option>
							<option value="2">Categoria 2</option>
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