<div class="modal fade mdl">
	<div class="modal-dialog">
		<div class="modal-content">
			<form class="form-horizontal form" action="" method="post">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Jadwal</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label class="col-sm-2 control-label">Kelas</label>
					<div class="col-sm-2">
						<input type="text" name="kelas" maxlength="20" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Matakuliah</label>
					<div class="col-sm-7">
						<select name="kd_matkul" class="form-control select2" style="width: 100%;">
							<?php foreach($dataMatkul as $dmatkul):?>
							<option value="<?php echo $dmatkul->kd_matkul?>"><?php echo $dmatkul->kd_matkul."-".$dmatkul->matkul?></option>
							<?php endforeach;?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Dosen</label>
					<div class="col-sm-7">
						<select name="nip" class="form-control select2" style="width: 100%;">
							<?php foreach($dataDosen as $ddosen):?>
							<option value="<?php echo $ddosen->nip?>"><?php echo $ddosen->nama?></option>
							<?php endforeach;?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Dosen</label>
					<div class="col-sm-7">
						<select name="nip" class="form-control select2" style="width: 100%;">
							<?php foreach($dataRuang as $druang):?>
							<option value="<?php echo $druang->kd_ruang?>"><?php echo $druang->ruang?></option>
							<?php endforeach;?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Hari</label>
					<div class="col-sm-7">
						<select name="hari" class="form-control select2" style="width: 100%;">
							<option value="Senin">Senin</option>
							<option value="Selasa">Selasa</option>
							<option value="Rabu">Rabu</option>
							<option value="Kamis">Kamis</option>
							<option value="Jumat">Jumat</option>
							<option value="Sabtu">Sabtu</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Jam Mulai</label>
					<div class="col-sm-7">
						<input type="time" name="jam_mulai" class="form-control"/>
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