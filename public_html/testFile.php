<!DOCTYPE html>
<html>
<head>
	<title>Test page</title>
        <script src="js/jquery-3.3.1.js"></script>
        
        <script>
           $(document).ready(function(){
              $("#logged_in").click(function(){
                 
                 $.post("PHP/checkSession.php", function(name){
                    
                    alert(name);
                    
                    if(name != ""){
                        var _continue = confirm("Logged in as "+name+". Continue?");
                        
                         if(_continue==true){
                            window.location.replace("login.php");
                        }else{
                            window.location.replace("Login Page.php");
                        }
                    }
                    
                 });
                 
              });
              
           });
            
        </script>
        
</head>
<body>

    <button id="logged_in">Click me</button>

</body>
</html>
