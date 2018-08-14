       $(document).ready(function(){
       
                var id;  
                var package;
                var price;
        
            
               $("button").click(function(){
                   id=this.id;
                   
                   //Selecting the package and its price
                   package = $("#"+id+"_text").text();
                   price = $("#"+id+"_price").text();
                   
                    //Set the value of the hidden field
                    $("#package").val(package);
                    $("#price").val(price);
               });
                                    
               $("form").submit(function(){
                  console.log("Package: "+package+" Price: "+price); 
               });


            $('body').vegas({
                slides: [
                    { src: '../img/rusinga.jpg' },
                    { src: '../img/saltlick.jpg'},
                    { src: '../img/porini.jpg'},
                    { src: '../img/makanyane.jpg' }
                ]
            });

            });