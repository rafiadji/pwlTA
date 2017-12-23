<div class="box">
	<div class="box-header">
		<h3 class="box-title">Data Program Studi</h3>
		<div class="box-tools pull-left">
			<a class="btn btn-success tambah" onclick="tambah()"><i class="fa fa-plus"></i> Tambah Program Studi</a>
		</div>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-striped dataTable">
			<thead>
			<tr>
				<th>Kode Program Studi</th>
				<th>Program Studi</th>
			</tr>
			</thead>
			<tbody class="isiTabel">
				<?php foreach ($dataTable as $row) :?>
					<tr>
						<td><?php echo $row->kd_prodi?></td>
						<td><?php echo $row->prodi?></td>
						<td>
							<a class="btn btn-primary btn-sm ubah" onclick="ubah('<?php echo trim($row->kd_prodi)?>')"><i class="fa fa-pencil"></i> Ubah</a>
							<a href="<?php echo site_url('prodi/prodi/hapusData/'.$row->kd_prodi)?>" class="btn btn-danger btn-sm hapus" onclick="return confirm('Apakah anda ingin data Prodi <?php echo trim($row->prodi)?>')"><i class="fa fa-trash"></i> Hapus</a>
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
<?php include "form_prodi.php"?>
<script>
	$(document).ready(function(){
		
	})
	
	function tambah() {
		$('input[name=kd_prodi]').val("").removeAttr('disabled', 'disabled');
		$('input[name=kd_prodi_hid]').val("");
		$('input[name=prodi]').val("");
		$('form').attr('action', '<?php echo site_url('prodi/prodi/tambahData')?>');
		$('input[type=submit]').attr('value', 'Tambah')
		$('.mdl').modal('show');
	}
	
	function ubah(id) {
		$.ajax({
			type:"POST",
			dataType:"json",
			url:"<?php echo site_url('prodi/prodi/satuData/')?>"+id,
			success:function(msg){
				$('input[name=kd_prodi]').val(msg.data.kd_prodi).attr('disabled', 'disabled');
				$('input[name=kd_prodi_hid]').val(msg.data.kd_prodi);
				$('input[name=prodi]').val(msg.data.prodi);
				$('form').attr('action', '<?php echo site_url('prodi/prodi/ubahData')?>');
				$('input[type=submit]').attr('value', 'Ubah')
				$('.mdl').modal('show');
			}
		})
	}
</script>