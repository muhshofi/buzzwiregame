var mins =1;
var seconds =30;

$('#start').click(function(){
      startTimer();
});

$('#pause').click(function(){
      clearTimeout(timex);
});

$('#reset').click(function(){
    mins =1;      seconds =30;
  $('#mins').html('01:');
  $('#seconds').html('30');
});

function startTimer(){
  timex = setTimeout(function(){
      seconds--;
    if(seconds <0){seconds=59;mins--;
       if(mins>59) {
       mins=0;hours++;
         if(hours <10) {$("#hours").text('0'+hours+':')} else $("#hours").text(hours+':');
        }
                       
    if(mins<10){                     
      $("#mins").text('0'+mins+':');}       
       else $("#mins").text(mins+':');
                   }    
    if(seconds <10) {
      $("#seconds").text('0'+seconds);} else {
      $("#seconds").text(seconds);
      }
     
      startTimer();   
  },1000);

   if(mins == 0 && seconds == 0){
    // document.getElementById("timer").innerHTML = "TIME UP!";
    clearTimeout(timex);
    mins =1;      seconds =30;
    } 
}
    
  