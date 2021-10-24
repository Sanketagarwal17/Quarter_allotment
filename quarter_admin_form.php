<?php $ui = new UI();?>

<div id="print_info">
<center>
<?php
if( $traffic=="FALSE")
{
 $ui->alert()
            ->title('Fail!!!')
			->desc( "Quarter Electric Fetch  Failed")
			->uiType('danger')
			 ->show();
}
			 ?>
</center>
</div>

<div id="myDiv1" style="text-align:center;">
<h3 style="font-weight:bold">Quarter Information</h3>
</div>
<div style= 'text-align:center'>
<a href="<?php echo site_url('login'); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style = 'margin-right:40px'> Insert New Quarter</a>
<a href="<?php echo site_url('login'); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style = 'margin-right:40px'> Update/Delete Quarter</a>
<a href="<?php echo site_url('quarter_booking/quarter_electric_info'); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style = 'margin-right:40px'> Quarter Electric Info</a>
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
            <th>Quarter Detail</th>
        </tr>
    </thead>

    
    <?php
       $i=1;
       $total =100;
       // foreach($guest_details as $guest) {
	?> 
     <?php while($total--) { ?>
		<tr>
			<td><?= $i++ ?></td>
            <td>erferveg</td>
            <td>rferferf</td>
            <td>rferferf</td>
            <td>rferferf</td>
        </tr>
    <?php } 
    $table->close();
		$box->close();
		$row->close();
    ?>




