

/* ========== Jquery Section Starts =============== */




 
 

  // jquery for validating SKU id starts
  
   /* ============= ajax section starts ============ */
  
   $(document).ready(function () {
  
    $("#sku").on('keyup', function(){ 
  
    var sku = $("#sku").val();
  
    $.ajax({
        url: 'skuCheck/skuExists.php',
        type: "POST",
        data: {sku: sku},
        success: function(data) {
  
          if (data == 'exists') {
  
  
            // show an error message if the sku id already exists
  
          alert("SKU Id already exists Please choose another one");
          $('#error-message').html('<p style = "color:red">SKU id already exists</p>');
            $("#save").attr("disabled", true);    
   
      
          }
          
          else if($("#sku").val() == "" || $("#sku").val() <= 0) {
          
             // show an available message if the sku id already does not exists
                
            $('#error-message').html('<p style = "color:red">Please enter sku Id</p>');
            $("#save").attr("disabled", true);
  
          }

          else {

            $('#error-message').html('<p style = "color:green">SKU ID is available</p>');
            $("#save").attr("disabled", false);

          }
        }
      });
    
    });
  
    
  });
  
  /* ========== ajax section ends ============*/
   
  
   
  // jquery for validating SKU id ends
  
  
      /* ================= prevent default for <input type = "number"> starts ================== */
  
      $('#price, #size, #weight, #height, #width, #length').on('keypress', function(e){
  
          if(e.key === 'e' || e.key === '+' || e.key === '-'){
              e.preventDefault();
          }
  
      });
  
      /* ================= prevent default for <input type = "number"> ends ================== */
  
   
 
  
  
  
   
  /* ========== Jquery Section ends =============== */


/* ====== Javascript for select option starts ========== */

// getting form names 

/* ==== querySelector section starts ====  */
  
 const size = document.querySelector(".size");
 const weight = document.querySelector(".weight");
 const height = document.querySelector(".height");
 const width = document.querySelector(".width");
 const length = document.querySelector(".length");

 /* ==== querySelector section ends ====  */

 /* ==== getElementById section starts ====  */

 const select = document.getElementById("productType");
 const size_input = document.getElementById("size");
 const weight_input = document.getElementById("weight");
 const height_input = document.getElementById("height");
 const width_input = document.getElementById("width");
 const length_input = document.getElementById("length");

 /* ==== getElementById section ends ====  */

 /* ======= JavaScript to hide or show input field if type is switched starts ======= */
 
 function selectOption() {

    if (select.value == 'DVD'){
  
     size.style.display = "block";
     weight.style.display = "none";
     height.style.display = "none";
     width.style.display = "none";
     length.style.display = "none";

     size_input.setAttribute("required", true);

     /* To remove required attribute if type is switched */

     weight_input.removeAttribute("required");
     height_input.removeAttribute("required");
     width_input.removeAttribute("required");
     length_input.removeAttribute("required");
   
  /* JavaScript to reset input field if type is switched */

  weight_input.value = ''; 
  height_input.value = ''; 
  width_input.value = ''; 
  length_input.value = ''; 

    }
   
    else if (select.value == 'Book'){

        weight.style.display = "block";
        size.style.display = "none";
        height.style.display = "none";
        width.style.display = "none";
        length.style.display = "none";

        
        /* JavaScript to add attribute if type is switched */

        weight_input.setAttribute("required", true);


        
        /* JavaScript to remove attribute if type is switched */

        size_input.removeAttribute("required");   
        height_input.removeAttribute("required");
        width_input.removeAttribute("required");
        length_input.removeAttribute("required");

          /* JavaScript to reset input field if type is switched */

            size_input.value = ''; 
            height_input.value = ''; 
            width_input.value = ''; 
            length_input.value = ''; 

    }

    else if (select.value == 'Furniture'){

        height.style.display = "block";
        width.style.display = "block";
        length.style.display = "block";
        size.style.display = "none";
        weight.style.display = "none";

        /* JavaScript to add attribute if type is switched */

        height_input.setAttribute("required", true);
        width_input.setAttribute("required", true);
        length_input.setAttribute("required", true);

        /* JavaScript to remove attribute if type is switched */

        weight_input.removeAttribute("required");
        size_input.removeAttribute("required");   


          /* JavaScript to reset input field if type is switched */

            weight_input.value = ''; 
            size_input.value = ''; 
           
         
        
         

    }
    
    else if(select.value == ''){


        size.style.display = "none";
        weight.style.display = "none";
        height.style.display = "none";
        width.style.display = "none";
        length.style.display = "none";

    }

    else{

    }
    
  
  }


  /* ======= JavaScript to hide or show input field if type is switched ends ======= */

/* ====== Javascript for select option ends ========== */



 