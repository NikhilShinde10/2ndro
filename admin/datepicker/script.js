/*  jQuery ready function. Specify a function to execute when the DOM is fully loaded.  */
/*$(document).ready(
  

  function () {
    $( "#datepicker" ).datepicker({
      changeMonth: true,//this option for allowing user to select month
      changeYear: true //this option for allowing user to select from year range
    });
  }

);*/
$(document).ready(
  

  function () {
$( " #datepicker" ).datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,
    dateFormat: 'dd-mm-yy',
    minDate: new Date(), // <-------- this will disable all dates prior to the date passed there.
    onClose: function( selectedDate ) {
        $( "#datepicker" ).datepicker( "option", "minDate", selectedDate);
	$( "#datepicker" ).datepicker( "option", "dateFormat" );
	//setter
	$( "#datepicker" ).datepicker( "option", "dateFormat", 'dd-mm-yy' );

    }
});
$( "#datepicker1" ).datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,
    dateFormat: 'dd-mm-yy',
    minDate: new Date(), // <-------- this will disable all dates prior to the date passed there.
    onClose: function( selectedDate ) {
        $( "#datepicker" ).datepicker( "option", "minDate", selectedDate);
	$( "#ad_start_date" ).datepicker( "option", "dateFormat" );
	//setter
	$( "#ad_start_date" ).datepicker( "option", "dateFormat", 'dd-mm-yy' );

    }
});
$( "#ad_start_date" ).datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,
    dateFormat: 'dd-mm-yy',
    minDate: new Date(), // <-------- this will disable all dates prior to the date passed there.
    onClose: function( selectedDate ) {
        $( "#datepicker" ).datepicker( "option", "minDate", selectedDate);
	$( "#ad_start_date" ).datepicker( "option", "dateFormat" );
	//setter
	$( "#ad_start_date" ).datepicker( "option", "dateFormat", 'dd-mm-yy' );

    }
});
$( "#ad_start_date" ).datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,
    dateFormat: 'dd-mm-yy',
    minDate: new Date(), // <-------- this will disable all dates prior to the date passed there.
    onClose: function( selectedDate ) {
        $( "#datepicker" ).datepicker( "option", "minDate", selectedDate);
	$( "#ad_start_date" ).datepicker( "option", "dateFormat" );
	//setter
	$( "#ad_start_date" ).datepicker( "option", "dateFormat", 'dd-mm-yy' );

    }
});
$( "#ad_start_date" ).datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,
    dateFormat: 'dd-mm-yy',
    minDate: new Date(), // <-------- this will disable all dates prior to the date passed there.
    onClose: function( selectedDate ) {
        $( "#datepicker" ).datepicker( "option", "minDate", selectedDate);
	$( "#ad_start_date" ).datepicker( "option", "dateFormat" );
	//setter
	$( "#ad_start_date" ).datepicker( "option", "dateFormat", 'dd-mm-yy' );

    }
});
$( "#ad_start_date" ).datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,
    dateFormat: 'dd-mm-yy',
    minDate: new Date(), // <-------- this will disable all dates prior to the date passed there.
    onClose: function( selectedDate ) {
        $( "#datepicker" ).datepicker( "option", "minDate", selectedDate);
	$( "#ad_start_date" ).datepicker( "option", "dateFormat" );
	//setter
	$( "#ad_start_date" ).datepicker( "option", "dateFormat", 'dd-mm-yy' );

    }
});
$( "#ad_start_date" ).datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,
    dateFormat: 'dd-mm-yy',
    minDate: new Date(), // <-------- this will disable all dates prior to the date passed there.
    onClose: function( selectedDate ) {
        $( "#datepicker" ).datepicker( "option", "minDate", selectedDate);
	$( "#ad_start_date" ).datepicker( "option", "dateFormat" );
	//setter
	$( "#ad_start_date" ).datepicker( "option", "dateFormat", 'dd-mm-yy' );

    }
});
$( "#ad_start_date" ).datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,
    dateFormat: 'dd-mm-yy',
    minDate: new Date(), // <-------- this will disable all dates prior to the date passed there.
    onClose: function( selectedDate ) {
        $( "#datepicker" ).datepicker( "option", "minDate", selectedDate);
	$( "#ad_start_date" ).datepicker( "option", "dateFormat" );
	//setter
	$( "#ad_start_date" ).datepicker( "option", "dateFormat", 'dd-mm-yy' );

    }
});
$( "#ad_start_date" ).datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,
    dateFormat: 'dd-mm-yy',
    minDate: new Date(), // <-------- this will disable all dates prior to the date passed there.
    onClose: function( selectedDate ) {
        $( "#datepicker" ).datepicker( "option", "minDate", selectedDate);
	$( "#ad_start_date" ).datepicker( "option", "dateFormat" );
	//setter
	$( "#ad_start_date" ).datepicker( "option", "dateFormat", 'dd-mm-yy' );

    }
});

$( "#ad_end_date" ).datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,

   // minDate: new Date(), // <-------- this will disable all dates prior to the date passed there.
   dateFormat: 'yy-mm-dd',
    onClose: function( selectedDate ) {
        //$( "#datepicker" ).datepicker( "option", "minDate", selectedDate);
	$( "#ad_end_date" ).datepicker( "option", "dateFormat" );
	//setter
	$( "#ad_end_date" ).datepicker( "option", "dateFormat", 'yy-mm-dd' );

    }
});
$( "#payment_date" ).datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,
   // minDate: new Date(), // <-------- this will disable all dates prior to the date passed there.
    dateFormat: 'dd-mm-yy',
    onClose: function( selectedDate ) {
      //  $( "#datepicker" ).datepicker( "option", "minDate", selectedDate);
	$( "#payment_date" ).datepicker( "option", "dateFormat" );
	//setter
	$( "#payment_date" ).datepicker( "option", "dateFormat", 'dd-mm-yy' );

    }
});
});
