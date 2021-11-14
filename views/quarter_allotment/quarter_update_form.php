
<?php $ui = new UI();?>
	<body style="overflow:hidden;" class="skin-blue">
	    <div class="center" >
		<?php
		$err_msg="";
		if($err_code==1)
		{
		$err_msg="Quarter ID required";
		}
		
		
		echo '<div id="myDiv3" style="text-align:center; font-weight:bold;">
    	<p></p>
  		</div>';
?>
<div id="print_info">
	<center>
<?php

if($err_code==0 && ($traffic=="Updation" || $traffic=="Deletion"))
{
 $ui->alert()
            ->title('Success!!!')
			->desc( "Quarter Details ".$traffic." successful")
			->uiType('success')
			 ->show();
}

else if($err_code==0 && $traffic=="FALSE")
{
 $ui->alert()
            ->title('Fail!!!')
			->desc( "Quarter Details Updation/ Deletion Failed")
			->uiType('danger')
			 ->show();
}
			 ?>
	</center>
</div>
<?php
	     $logoImg = '<img class="big-logo" src="'.base_url().'assets/images/mis-logo-big.png" height="40" style="padding-right: 5px"/>';
		 $bodycol=$ui->col()->width(12)->m_width(12)->t_width(12)->open();
		 $formBox = $ui->box()->width(12)->m_width(12)->t_width(12)->title($logoImg . " Quarter Details")->open();
				if($err_code==1)
				{
			   $ui->callout()
			   ->uiType("error")
			   ->desc($err_msg)
			   ->show();
				}				   

		$form = $ui->form()
		   ->multipart()
		   ->action('quarter_allotment/quarter_update/index')
		   ->open();
		   	    
		   	$column_id = $ui->col()
                                      ->width(12)
                                      ->open();
                            echo '<label> Quarter ID <span style= "color:red;"> *</span></label>';
			$academic = $ui->input()
			
			   ->type("text")

			   ->name("quarter_id")
			   
			   ->placeholder("year_of_opening + building_name + flat_number + quarter_of_quarter")
			   ->required();
			   //->width(12)
			   //->label('Quarter ID');
			   
			    if($err_code==1)
				{
			   		$academic->uiType("error");
			    }
			   $academic->show();
			   $column_id->close();
			   

			   $ui->input()
			   ->type("number")
			   ->name("number_of_fan")
			   ->placeholder("5")
			   
			   ->label("No of Fans")
			   ->width(6)
			   ->show();

			   

			   $ui->input()
			   ->type("number")
			   ->name("number_of_socket")
			   ->placeholder("18")
			   
			   ->label("No of Sockets")
			   ->width(6)
			   ->show();



			   $ui->input()
			   ->type("number")
			   ->name("reserved_for")
			   ->placeholder("0")
			   
			   ->label("Reserved for  (emp id)")
			   ->width(6)
			   ->show();

				$column_vis = $ui->col()
                                      ->width(3)
                                      ->open();
                            echo '<label> Is Visible </label>';

                           $ui->radio()
                               ->name('is_visible')
                               ->label('Yes')
                               ->value(True)
                               ->show();

                            $ui->radio()
                               ->name('is_visible')
                               ->label('No')
                               ->value(False)
                               ->show();
                        $column_vis->close();

			   // $ui->checkbox()
			   // ->name("is_visible")
			   // ->label("Is Visible")
			   // ->width(3)
			   // ->show();

                $column_vis = $ui->col()
                                      ->width(3)
                                      ->open();
                            echo '<label> Is geyser present </label>';

                           $ui->radio()
                               ->name('is_geyser')
                               ->label('Yes')
                               ->value(True)
                               ->show();

                            $ui->radio()
                               ->name('is_geyser')
                               ->label('No')
                               ->value(False)
                               ->show();
                        $column_vis->close();
			   
						   
echo '<span style= "color:red;"> *</span>please alter only those fields that are need to be updated';
$bodycol->close();
$formBox->close();
?>

<div align="center" >
<?php
		$col_buttn1=$ui->row()->width(12)->open();
		$ui->button()
		   ->value('Update')
		   ->uiType('primary')
		   ->submit()
		   ->name('Update')
		 
		   ->icon($ui->icon('check'))
		   ->show();
           

    echo '&nbsp';
		$ui->button()
		   ->value('Delete')
		   ->uiType('danger')
		   ->submit()
		   ->name('Delete')
		 
		   ->icon($ui->icon('check'))
		   ->show();
           $col_buttn1->close();

		$form->close();
		
?> 
</div>
