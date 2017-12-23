<div class="box">
	<div class="box-header">
		<h3 class="box-title">Data Mata Kuliah</h3>
		<div class="box-tools pull-left">
			<a class="btn btn-success tambah" onclick="tambah()"><i class="fa fa-plus"></i> Tambah Mata Kuliah</a>
		</div>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-striped dataTable">
			<thead>
			<tr>
				<th>Kode Mata Kuliah</th>
				<th>Mata Kuliah</th>
				<th>Opsi</th>
			</tr>
			</thead>
			<tbody class="isiTabel">
				<?php foreach ($dataTable as $row) :?>
					<tr>
						<td><?php echo $row->kd_matkul?></td>
						<td><?php echo $row->matkul?></td>
						<td>
							<a class="btn btn-primary btn-sm ubah" onclick="ubah('<?php echo trim($row->kd_matkul)?>')"><i class="fa fa-pencil"></i> Ubah</a>
							<a href="<?php echo site_url('matkul/matkul/hapusData/'.$row->kd_matkul)?>" class="btn btn-danger btn-sm hapus" onclick="return confirm('Apakah anda ingin data Mata Kuliah <?php echo trim($row->matkul)?>')"><i class="fa fa-trash"></i> Hapus</a>
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
<?php include "form_matkul.php"?>
<script>
	$(document).ready(function(){
		
	})
	
	function tambah() {
		$('input[name=kd_matkul]').val("").removeAttr('disabled', 'disabled');
		$('input[name=kd_matkul_hid]').val("");
		$('input[name=matkul]').val("");
		$('form').attr('action', '<?php echo site_url('matkul/matkul/tambahData')?>');
		$('input[type=submit]').attr('value', 'Tambah')
		$('.mdl').modal('show');
	}
	
	function ubah(id) {
		$.ajax({
			type:"POST",
			dataType:"json",
			url:"<?php echo site_url('matkul/matkul/satuData/')?>"+id,
			success:function(msg){
				$('input[name=kd_matkul]').val(msg.data.kd_matkul).attr('disabled', 'disabled');
				$('input[name=kd_matkul_hid]').val(msg.data.kd_matkul);
				$('select[name=kd_prodi]').val(msg.data.kd_prodi).attr('disabled', 'disabled');
				$('input[name=kd_prodi_hid]').val(msg.data.kd_prodi);
				$('input[name=matkul]').val(msg.data.matkul);
				$('form').attr('action', '<?php echo site_url('matkul/matkul/ubahData')?>');
				$('input[type=submit]').attr('value', 'Ubah')
				$('.mdl').modal('show');
			}
		})
	}
</script>