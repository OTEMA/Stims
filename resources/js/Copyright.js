    var year = new Date().getFullYear();
    document.getElementById("year").innerHTML = year;
    
   //function to add callender to the date field
$(document).ready(function () {
    var date_input = $('input[name="date"]');
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true
    });
});
$(document).ready(function () {
    var date_input = $('input[name="date1"]');
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true
    });
});
function passwordChecker(){
    var password = document.getElementById('pwd').value;
    var confirmPassword = document.getElementById('cpwd').value;
    if(password === confirmPassword){
        document.getElementById('pwd').style.borderColor='#a0b3b0';
        document.getElementById('cpwd').style.borderColor='#1ab188';
        document.getElementById('pwd').style.boxShadow='None';
        document.getElementById('cpwd').style.boxShadow='None';
        
    }
    else{
      document.getElementById('pwd').style.borderColor='#ff0000';
      document.getElementById('pwd').style.boxShadow='0 4px 10px 4px rgba(255, 0, 0, 0.3)';
        document.getElementById('cpwd').style.borderColor='#ff0000';
        document.getElementById('cpwd').style.boxShadow='0 4px 10px 4px rgba(255, 0, 0, 0.3)';
    }
    }