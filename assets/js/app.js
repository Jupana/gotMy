
import 'bootstrap';
import '../css/app.scss';
import './jsCalendar.js';


$(function(){
  $('[rel=popover]').popover({ 
    html : true ,
    container: 'body',
    content: function() {
      return $('#popover_content').html();
    }
  });
});


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

  