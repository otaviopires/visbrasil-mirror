<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Começa o Main -->
<main class="mdl-layout__content">
	<div class="page-content">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--12-col-phone">
				<div class="mdl-card mdl-cell mdl-cell--1-offset-desktop mdl-cell--10-col mdl-cell--12-col-phone container mdl-shadow--4dp">
					<div class="mdl-card__title">
						<div><h2 class="mdl-card__title-text">Atualizar Área de Atuação</h2></div>
						<div class="btn-dropdown">
							<button id="demo-menu-lower-left" class="mdl-button mdl-js-button mdl-button--icon">
								<i class="material-icons arrow">arrow_drop_down</i>
							</button>
							<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect menu-background"	for="demo-menu-lower-left">
								<a href="<?=base_url()?>Indexacao/cadastro">
									<li class="mdl-menu__item">Adicionar Indexação</li>
								</a>
							</ul>
						</div>
					</div>
					<div class="container">
						<form action="<?= base_url()?>AreaAtuacao/salvar_atualizacao" method="POST">
							<input type="hidden" name="CO_AREA_ATUACAO" id="CO_AREA_ATUACAO" value="<?= $area->CO_AREA_ATUACAO?>">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--1-offset mdl-cell--8-col-desktop cad-margin ">
								<input class="mdl-textfield__input" type="text" id="DS_AREA_ATUACAO" name="DS_AREA_ATUACAO"
								value="<?= $area->DS_AREA_ATUACAO?>" required>
								<label class="mdl-textfield__label" for="DS_AREA_ATUACAO">Título...</label>
							</div>
							<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-edit">
								Atualizar
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main> <!-- Fim do Main -->
</div> <!-- Fim da div que fica no header -->


<!-- JS-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</body>
</html>