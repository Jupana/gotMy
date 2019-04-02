
import 'bootstrap';

import '../css/app.scss';
import '../js/jsCalendar.min.js';


// Get the element
var element = document.getElementById("my-calendar");
// Create the calendar
jsCalendar.new(element,"02/04/2019");

jsCalendar.onDateClick(function(event, date){
    // On day click
  });
  
  jsCalendar.onMonthChange(function(event, date){
    // On month change
  });