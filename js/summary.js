/*!
// SUMMARY - Contents
// ------------------------------------------------

 1. Global Settings
 2. Set Default Colors
 3. Select Colors
 4. Quantity
 
/*!---------- 1. GLOBAL SETTINGS ----------*/ 

//define global variables

var price_1=0, price_2=0, price_3=0;
var code_1 = '00', code_2 = '00', code_3 = '00';
var item_quantity = 1;
var total_basket = item_quantity*(price_1 + price_2 + price_3);



/*!---------- 2. SET DEFAULT COLORS ----------*/ 

//Eye Color (show on first load)

$('#price1-1').ready(function(){
	price_1 = parseFloat($('#price1-1').data('price'));
	$('#total').text(price_1 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_1 = $('#price3-1').data('code');
	$('#code_1').text('ITEM: ' +code_1);	
});

//Lip Color (show on first load)

$('#price2-1').ready(function(){
	price_2 = parseFloat($('#price2-1').data('price'));
	$('#total_2').text(price_2 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_2 = $('#price2-1').data('code');
	$('#code_2').text('ITEM: ' +code_2);	
});

//highlighter Color (show on first load)

$('#price3-1').ready(function(){
	price_3 = parseFloat($('#price3-1').data('price'));
	$('#total_3').text(price_3 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_3 = $('#price1-1').data('code');
	$('#code_3').text('ITEM: ' + code_3);
});

/*!---------- 3. SELECT COLORS ----------*/ 

//Eye Colors

$('#price1-1').click(function(){
	price_1 = parseFloat($('#price1-1').data('price'));
	$('#total').text(price_1 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_3 = $('#price1-1').data('code');
	$('#code_3').text('ITEM: ' + code_3);
});

$('#price1-2').click(function(){
	price_1 = parseFloat($(this).data('price'));
	$('#total').text(price_1 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_3 = $(this).data('code');
	$('#code_3').text('ITEM: ' + code_3);
});
$('#price1-3').click(function(){
	price_1 = parseFloat($(this).data('price'));
	$('#total').text(price_1 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_3 = $(this).data('code');
	$('#code_3').text('ITEM: ' + code_3);
});
$('#price1-4').click(function(){
	price_1 = parseFloat($(this).data('price'));
	$('#total').text(price_1 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_3 = $(this).data('code');
	$('#code_3').text('ITEM: ' + code_3);
});
$('#price1-5').click(function(){
	price_1 = parseFloat($(this).data('price'));
	$('#total').text(price_1 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_3 = $(this).data('code');
	$('#code_3').text('ITEM: ' + code_3);
});
$('#price1-6').click(function(){
	price_1 = parseFloat($(this).data('price'));
	$('#total').text(price_1 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_3 = $(this).data('code');
	$('#code_3').text('ITEM: ' + code_3);
});
$('#price1-7').click(function(){
	price_1 = parseFloat($(this).data('price'));
	$('#total').text(price_1 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_3 = $(this).data('code');
	$('#code_3').text('ITEM: ' + code_3);
});
$('#price1-8').click(function(){
	price_1 = parseFloat($(this).data('price'));
	$('#total').text(price_1 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_3 = $(this).data('code');
	$('#code_3').text('ITEM: ' + code_3);
});
$('#price1-9').click(function(){
	price_1 = parseFloat($(this).data('price'));
	$('#total').text(price_1 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_3 = $(this).data('code');
	$('#code_3').text('ITEM: ' + code_3);
});
$('#price1-10').click(function(){
	price_1 = parseFloat($(this).data('price'));
	$('#total').text(price_1 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_3 = $(this).data('code');
	$('#code_3').text('ITEM: ' + code_3);
});

//Lip Color

$('#price2-1').click(function(){
	price_2 = parseFloat($('#price2-1').data('price'));
	$('#total_2').text(price_2 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3 + price_4 + price_5);
	$('#count_tot').text(total_basket);	
	
	code_2 = $('#price2-1').data('code');
	$('#code_2').text('ITEM: ' +code_2);	
});
$('#price2-2').click(function(){
	price_2 = parseFloat($(this).data('price'));
	$('#total_2').text(price_2 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_2 = $(this).data('code');
	$('#code_2').text('ITEM: ' + code_2);	
});
$('#price2-3').click(function(){
	price_2 = parseFloat($(this).data('price'));
	$('#total_2').text(price_2 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_2 = $(this).data('code');
	$('#code_2').text('ITEM: ' + code_2);	
});
$('#price2-4').click(function(){
	price_2 = parseFloat($(this).data('price'));
	$('#total_2').text(price_2 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_2 = $(this).data('code');
	$('#code_2').text('ITEM: ' + code_2);	
});
$('#price2-5').click(function(){
	price_2 = parseFloat($(this).data('price'));
	$('#total_2').text(price_2 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_2 = $(this).data('code');
	$('#code_2').text('ITEM: ' + code_2);	
});

//Highlighter Colors

$('#price3-1').click(function(){
	price_3 = parseFloat($(this).data('price'))
	$('#total_3').text(price_3 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_1 = $('#price3-1').data('code');
	$('#code_1').text('ITEM: ' + code_1);	
});
$('#price3-2').click(function(){
	price_3 = parseFloat($(this).data('price'));
	$('#total_3').text(price_3 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_1 = $(this).data('code');
	$('#code_1').text('ITEM: ' + code_1);	
});
$('#price3-3').click(function(){
	price_3 = parseFloat($(this).data('price'));
	$('#total_3').text(price_3 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_1 = $(this).data('code');
	$('#code_1').text('ITEM: ' + code_1);	
});
$('#price3-4').click(function(){
	price_3 = parseFloat($(this).data('price'));
	$('#total_3').text(price_3 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_1 = $(this).data('code');
	$('#code_1').text('ITEM: ' + code_1);	
});
$('#price3-5').click(function(){
	price_3 = parseFloat($(this).data('price'));
	$('#total_3').text(price_3 + ' $');
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
	
	code_1 = $(this).data('code');
	$('#code_1').text('ITEM: ' + code_1);	
});	

/*!---------- 4. QUANTITY ----------*/ 

//add to box button

$(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });
    
});
	
//set quantity 

$('#num_item_basket').click(function(){
	item_quantity = document.getElementById('quantity').value;
	total_basket = item_quantity*(price_1 + price_2 + price_3);
	$('#count_tot').text(total_basket);	
});