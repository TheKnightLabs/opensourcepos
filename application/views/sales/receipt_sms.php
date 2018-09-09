<?php 
	// Temporarily loads the system language for _lang to print invoice in the system language rather than user defined.
	load_language(TRUE,array('customers','sales','employees'));
?>Thank you for the order at LAAMIKA. Ref: <?php echo $sale_id; ?> amounting to : Rs.<?php echo to_currency_no_money($total); ?> dated : <?php echo $transaction_time ?>. We wish to serve you again. 