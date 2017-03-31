
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<label class="col-sm-4 text-right virtuallabel" for="title"></label><div class="col-sm-8 input-icon right"><input type="tel" size="12" class="form-control  validate[required]" name="virtualnumber[]" id="virtualnumber" value=""><a href="#" class="remove_field">Remove</a></div>'); //add input box
             $("#virtualno").val(x);
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); 
      $(this).parent().prev('label.virtuallabel').remove()
     .end().remove();
          x--;
        $("#virtualno").val(x);
    })

});
    

