<form name="frmSearch" id="frmSearch" action="#" class="form-search" method="post">
<div class="row-fluid">
	<div class="span4 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Nombre</label>
			<div class="controls">
						<input type="text" name="nombreF" id="nombreF" class="m-wrap span12" placeholder="Nombre"/>

			</div>
		</div>
	</div>

	<div class="span4">
		<div class="control-group">
			<label class="control-label" for="firstName">Via de administracion</label>
			<div class="controls">
				
				<select class="span12" name="vAdministracionF" id="vAdministracionF">
					<option value="">Todos</option>                                
					<option value="Inyectable"> Inyectable</option>
					<option value="Intramamario"> Intramamario</option>
				</select>
			</div>
		</div>
	</div>
	<div class="span4 ">
		<div class="control-group">
			<label class="control-label" for="firstName">&nbsp;</label>
			<div class="controls">

			<button type="button" class="btn blue" onclick="Search(0)">Buscar &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
									
			</div>
		</div>
	</div>
</div>

<hr class="clearfix" />

</form>
