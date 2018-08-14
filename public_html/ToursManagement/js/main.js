function del(package){   
    var del = confirm("Delete "+package+" ?");
        
        if(!del){
            return false;
        }
        else{
            return true;
        }
}

function delBooking(){   
    var del = confirm("Delete this booking?");
        
        if(!del){
            return false;
        }
        else{
            return true;
        }
}

$(document).ready(function(){
           
     $(".delete").click(function(){        
        var package = $(this).closest("tr").children().eq(1).text();
        return del(package);
     });
     
      $(".delete_booking").click(function(){
          return delBooking();
      });
        
        
});