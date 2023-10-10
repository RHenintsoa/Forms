$(document).ready(function(){
    function validateForm() {
        var name = document.getElementById("inputName").value;
        
        if (name.trim() === "") {
            
            $("#alert").show();
            return false; 
        } else {
            $("#alert").hide(); 
            return true; 
        }
    }
});