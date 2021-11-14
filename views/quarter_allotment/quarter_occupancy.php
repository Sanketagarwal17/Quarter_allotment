<?php $ui = new UI();?>

<div id="print_info">
<center>

</center>
</div>

<div id="myDiv1" style="text-align:center;">
<h3 style="font-weight:bold">Quarter Information</h3>
</div>
<div style= 'text-align:center'>
<a href="<?php echo site_url('quarter_allotment/quarter_insert'); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style = 'margin-right:40px'> Insert New Quarter</a>
<a href="<?php echo site_url('quarter_allotment/quarter_update'); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style = 'margin-right:40px'> Update/Delete Quarter</a>
<a href="<?php echo site_url('quarter_allotment/quarter_electric_info'); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style = 'margin-right:40px'> Quarter Electric Info</a>
<a href="<?php echo site_url('login'); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style = 'margin-right:40px'> Allotment Requests</a>
</div>


<?php



    $row = $ui->row()->open();
    $box = $ui->box()
          ->solid()
          ->uiType('primary')
          ->open();
          $table = $ui->table()->hover()->bordered()
								->sortable()->searchable()->paginated()
							    ->open();
		?>

    <thead>
        <tr>
            <th>Sl No.</th>
            <th>Quarter id </th>
            <th>Quarter Name</th>
            <th>Occupancy Status</th>
            <th>Visibility Status</th>
        </tr>
    </thead>

    
    <?php
       $i=0;
       $total =count($traffic);
       // foreach($guest_details as $guest) {
	?> 
     <?php for($i=0;$i<$total;$i++) { ?>
		<tr>
			<td><?= $i+1 ?></td>
            <td><?= $traffic[$i]->quarter_id ?></td>
            <td><?= $traffic[$i]->quarter_name ?></td>
            <td><?= $traffic[$i]->is_occupied ?></td>
            <td><?= $traffic[$i]->is_visible ?></td>
        </tr>
    <?php } 
    $table->close();
		$box->close();
		$row->close();
    ?>





