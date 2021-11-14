<?php $ui = new UI();?>
<body style="overflow:hidden;" class="skin-blue">
	    <div class="center" >
		<?php
        $err_msg="";
		if($err_code==1)
		{
		$err_msg="Invalid details";
		}
		echo '<br>';
		echo '<br>';

    echo '<div id="myDiv3" style="text-align:center; font-weight:bold;">
    	<p></p>
  		</div>';
?>

<div id="print_info">
	<center>
<?php

if($err_code==0 && $traffic=="TRUE")
{
 $ui->alert()
            ->title('Success!!!')
			->desc( "Quarter Electric Info added successfully")
			->uiType('success')
			 ->show();
}

else if($err_code==0 && $traffic=="FALSE")
{
 $ui->alert()
            ->title('Fail!!!')
			->desc( "Quarter Electric Info  Failed")
			->uiType('danger')
			 ->show();
}
			 ?>
	</center>
</div>


<?php
	     $logoImg = '<img class="big-logo" src="'.base_url().'assets/images/mis-logo-big.png" height="40" style="padding-right: 5px"/>';
		 $bodycol=$ui->col()->width(12)->m_width(12)->t_width(12)->open();
		 $formBox = $ui->box()->width(12)->m_width(12)->t_width(12)->title($logoImg . " Quarter Electric Info")->open();
         if($err_code==1)
				{
			   $ui->callout()
			   ->uiType("error")
			   ->desc($err_msg)
			   ->show();
				}		

            $form = $ui->form()
		   ->multipart()
		   ->action('quarter_electric_info/index')
		   ->open();

            $quarter_id = $ui->input()
			   ->type("text")
			   ->name("quarter_id")
			   ->placeholder("2016AmberA104A")
			   ->required()
			   ->width(12)
			   ->label('Quarter ID');
			   $quarter_id->show();


            $meter_start_reading = $ui->input()
			   ->type("text")
			   ->name("meter_start_reading")
			   ->placeholder("1000")
			   ->required()
			   ->width(6)
			   ->label('Meter Start Reading');
			   $meter_start_reading->show();

            
            $meter_end_reading = $ui->input()
			   ->type("text")
			   ->name("meter_end_reading")
			   ->placeholder("2000")
			   ->required()
			   ->width(6)
			   ->label('Meter End Reading');
			   $meter_end_reading->show();

            $meter_start_date = $ui->input()
            ->type("date")
            ->name("meter_start_date")
            ->placeholder("1-Jan-2020")
            ->required()
            ->width(6)
            ->label('Meter Start Date');
            $meter_start_date->show();

            
            $meter_end_date = $ui->input()
            ->type("date")
            ->name("meter_end_date")
            ->placeholder("1-Feb-2020")
            ->required()
            ->width(6)
            ->label('Meter End Date');
            $meter_end_date->show();
            

            $meter_number = $ui->input()
            ->type("number")
            ->name("meter_number")
            ->placeholder("1123")
            ->required()
            ->width(6)
            ->label('Meter Number');
            $meter_number->show();

         
         $meter_record_id = $ui->input()
            ->type("number")
            ->name("meter_record_id")
            ->placeholder("123")
            ->required()
            ->width(6)
            ->label('Meter Record Id');
            $meter_record_id->show();

        $remark = $ui->input()
            ->type("text")
            ->name("remark")
            ->placeholder("Remark")
            ->width(12)
            ->label('Remark');
            $remark->show();

    $bodycol->close();
    $formBox->close();
?>

<div align="center" >
<?php
		$col_buttn1=$ui->row()->width(12)->open();
		$ui->button()
	
		   ->value('Submit')
		   ->uiType('primary')
		   ->submit()
		   ->name('submit')
		 
		   ->icon($ui->icon('check'))
		   ->show();
           $col_buttn1->close();

		$form->close();
		
?> 
</div>