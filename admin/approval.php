<div class="col-md-12  edit-view-badan-usaha edit-content page-wrapper">       
    <div class="well well-edit well-header-auto">
        <div class="table-responsive col-table">
			<table class=" table  table-bordered table-hover ">
				<thead class="table-edit" style="">          
					<tr>
						<td><?php echo anchor('welcome/admin/approval/'.$offset.'/id/'.$new_order,'Id');?></td>
						<td><?php echo anchor('welcome/admin/approval/'.$offset.'/nama_badan_usaha/'.$new_order,'Nama Badan Usaha');?> </td>
						<td><?php echo anchor('welcome/admin/approval/'.$offset.'/nama/'.$new_order,'nama');?></td>
						<td><?php echo anchor('welcome/admin/approval/'.$offset.'/email/'.$new_order,'email');?></td>
						
					</tr>
				</thead>
				<tbody class="table-edit-body">
				<?php $no = 0;
					foreach($query as $baris){?>
					<tr>
						<td ><?php  echo $baris->id; ?></td>
						<td><?php echo $baris->nama_badan_usaha; ?> 	</td>
						<td><?php echo $baris->nama ;?></td>
						<td><?php echo $baris->email; ?></td>
					 
						<td><?php echo anchor('members/index.php/mail'.$offset.'/nama/'.$new_order,'Approve');?></td>
						<td><?php echo anchor(''.$offset.'/email/'.$new_order,'Delete');?></td>
						
					</tr>
					<?php }?>
				</tbody>
            </table> 	
				<div class="halaman"><?php echo $pagination;?></div>
        </div>       
    </div>
</div>

        