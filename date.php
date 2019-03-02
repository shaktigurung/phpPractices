<?php
    // echo date('d');//Day
    // echo date('m'); //Month
    // echo date('Y'); //Year

    // echo date('Y/m/d');
    // echo date('Y-m-d');

    // echo date('h'); //Hour
    // echo date('i'); //Min
    // echo date('s'); //Seconds
    // echo date('a'); //AM or PM

    //Set Time Zone
    date_default_timezone_set('Australia/Sydney');

   // echo date('h:i:sa');
   /*
    Unix timestamp is a long integer containing the number of seconds between the Unix Epoch ( January 1 1970 00:00:00 GMT) and the time specified
   */
   //$timestamp = mktime(10,14,54,9,10,1981);
   //echo $timestamp; // this will give the number of seconds from the above mentioned date time now

  // echo date('m/d/Y h:i:sa', $timestamp);

//   $timestamp2 = strtotime('7:00pm March 22 2016');
//   $timestamp3 = strtotime('tomorrow');
 // $timestamp4 = strtotime('next monday');
  $timestamp5 = strtotime('+2 Months');

  //echo $timestamp2;
  //echo date('m/d/Y h:i:sa', $timestamp2);
  echo date('m/d/Y h:i:sa', $timestamp5);
?>