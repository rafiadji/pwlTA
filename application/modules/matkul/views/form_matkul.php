<div class="modal fade mdl">
	<div class="modal-dialog">
		<div class="modal-content">
			<form class="form-horizontal form" action="" method="post">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Matkul</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label class="col-sm-2 control-label">Kode Mata Kuliah</label>
					<div class="col-sm-5">
						<input type="text" name="kd_matkul" maxlength="20" class="form-control">
						<input type="hidden" name="kd_matkul_hid" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Program Studi</label>
					<div class="col-sm-5">
						<select name="kd_prodi" class="form-control">
							<?php foreach($dataProdi as $pd):?>
							<option value="<?php echo $pd->kd_prodi?>"><?php echo $pd->prodi?></option>
							<?php endforeach;?>
						</select>
						<input type="hidden" name="kd_prodi_hid" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Mata Kuliah</label>
					<div class="col-sm-10">
						<input type="text" name="matkul" class="form-control">
					</div>
				</div>
			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
				<input type="submit" class="btn btn-primary" value="" />
			</div>
			</form>
		</div>
	</div>
</div>