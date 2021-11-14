
<?php $ui = new UI();?>
	<body style="overflow:hidden;" class="skin-blue">
	    <div class="center" >
		<?php
		$err_msg="";
		if($err_code==1)
		{
		$err_msg="Invalid details";
		}
		
		
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
			->desc( "Quarter Details added successfully")
			->uiType('success')
			 ->show();
}

else if($err_code==0 && $traffic=="FALSE")
{
 $ui->alert()
            ->title('Fail!!!')
			->desc( "Quarter Details Insertion Failed")
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
		   ->action('quarter_insert/index')
		   ->open();
		   	    
			$academic = $ui->input()
			
			   ->type("text")

			   ->name("name")
			   ->placeholder("abc")
			   ->required()
			   ->width(6)
			   ->label('Quarter Name');
			   
			 
			   $academic->show();

			   $ui->select()
			   ->name('type_of_quarter')
			   ->label('Type of Quarter')
			   ->width(6)
			   ->options(array(
				       $ui->option()->value('NULL')->text('---SELECT QUARTER TYPE---')->selected($type_id=='NULL'),
					   $ui->option()->value('A')->text('A')->selected($type_id=='A'),
	                   $ui->option()->value('B')->text('B')->selected($type_id=='B'),
	                   $ui->option()->value('C')->text('C')->selected($type_id=='C')
					   ))
	           ->required()
			   ->show();

			   
			    $ui->input()
			   ->type("text")
			   ->name("building_name")
			   ->placeholder("xyz")
			   ->required()
			   ->label("Building Name")
			   ->width(6)
			   ->show();


			    $ui->input()
			   ->type("number")
			   ->name("flat_number")
			   ->placeholder("123")
			   ->required()
			   ->label("Flat Number")
			   ->width(3)
			   ->show();


			   $ui->datePicker()

               ->width(3)
               ->label("Date of Opening")
               ->name('date_of_opening')
               ->placeholder("yyyy-mm-dd")
               //->value(date('d-m-Y'))
               ->dateFormat('yyyy-mm-dd')
               ->show();

			   
			    $ui->input()
			   ->type("text")
			   ->name("address")
			   ->placeholder("")
			   ->required()
			   ->label("Address")
			   ->width(12)
			   ->show();

			   
			    $ui->input()
			   ->type("number")
			   ->name("carpet_area")
			   ->placeholder("800")
			   ->required()
			   ->label("Carpet Area (sq ft)")
			   ->width(3)
			   ->show();


			    $ui->input()
			   ->type("number")
			   ->name("number_of_rooms")
			   ->placeholder("5")
			   ->required()
			   ->label("No of Rooms")
			   ->width(3)
			   ->show();

			   
			    $ui->input()
			   ->type("number")
			   ->name("number_of_people")
			   ->placeholder("4")
			   ->required()
			   ->label("Suitable for (no of people)")
			   ->width(3)
			   ->show();

			   $ui->input()
			   ->type("number")
			   ->name("number_of_washrooms")
			   ->placeholder("2")
			   ->required()
			   ->label("No of Washrooms")
			   ->width(3)
			   ->show();

			   $ui->select()
			   ->name('eligibility_requirement')
			   ->label('Eligibility Requirement')
			   ->width(12)
			   ->options(array(
				       $ui->option()->value('NULL')->text('---SELECT ELIGIBILITY---')->selected($eligibility_id=='NULL'),
					   $ui->option()->value('Level - 1')->text('1')->selected($eligibility_id=='1'),
	                   $ui->option()->value('Level - 2')->text('2')->selected($eligibility_id=='2'),
	                   $ui->option()->value('Level - 3')->text('3')->selected($eligibility_id=='3'),
	                   $ui->option()->value('Level - 4')->text('4')->selected($eligibility_id=='4'),
	                   $ui->option()->value('Level - 5')->text('5')->selected($eligibility_id=='5'),
	                   $ui->option()->value('Level - 6')->text('6')->selected($eligibility_id=='6')
					   ))
	           ->required()
			   ->show();

			   $ui->input()
			   ->type("number")
			   ->name("number_of_fan")
			   ->placeholder("5")
			   ->required()
			   ->label("No of Fans")
			   ->width(3)
			   ->show();

			   $ui->input()
			   ->type("number")
			   ->name("number_of_entrance")
			   ->placeholder("2")
			   ->required()
			   ->label("No of Entrance")
			   ->width(3)
			   ->show();

			   $ui->input()
			   ->type("number")
			   ->name("number_of_socket")
			   ->placeholder("18")
			   ->required()
			   ->label("No of Sockets")
			   ->width(3)
			   ->show();

			   $ui->input()
			   ->type("number")
			   ->name("number_of_meters")
			   ->placeholder("1")
			   ->required()
			   ->label("No of Meters")
			   ->width(3)
			   ->show();

			   $ui->input()
			   ->type("number")
			   ->name("license_fee")
			   ->placeholder("2000")
			   ->required()
			   ->label("License Fee")
			   ->width(3)
			   ->show();

			   $ui->input()
			   ->type("number")
			   ->name("reserved_for")
			   ->placeholder("0")
			   ->required()
			   ->label("Reserved for  (emp id)")
			   ->width(3)
			   ->show();

			   $ui->input()
			   ->type("text")
			   ->name("additional_info")
			   ->placeholder("")
			   ->required()
			   ->label("Additional Information")
			   ->width(6)
			   ->show();

			   $ui->checkbox()
			   ->name("is_balcony")
			   ->label("Is Balcony Present")
			   ->width(4)
			   ->show();

			   $ui->checkbox()
			   ->name("is_parking")
			   ->label("Is Parking Present")
			   ->width(4)
			   ->show();

			   $ui->checkbox()
			   ->name("is_geyser")
			   ->label("Is Geyser Present")
			   ->width(4)
			   ->show();
                
						   

$bodycol->close();
$formBox->close();
?>

<div align="center" >
<?php
		$col_buttn1=$ui->row()->width(12)->open();
		$ui->button()
		//    ->id('booking_form')
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



		


		
	




		


	



	