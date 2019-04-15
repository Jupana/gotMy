
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

// Color link en click Popap y quitar color en los demas 
var newPopup = function (){
  if (this.style.color === ''){
    this.style.color ="#F75A60"
    document.getElementById("op4t").style.color = "white";
  }else{ 
    this.style.color = ''
  };  
  return true;
};

setTimeout(function () {
  var op4 = document.getElementById('op4');
  var op4t = document.getElementById('op4t');
  op4.onclick = newPopup;
  op4t.onclick = newPopup;

}, 100);

//end Color Popup 

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