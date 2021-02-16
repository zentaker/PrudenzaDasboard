$(document).ready(function(){
    var i=1;
    $('#addd').click(function(){
    i++;
        $('#dynamic_fieldd').append('        <label for="inputEstimatedBudget">Cobertura Asociada</label> <input type="text" name="name[]" placeholder="Beneficio" class="form-control name_list" /> <br><label for="inputEstimatedBudget">Maximo de la cobertura</label><input type="text" name="name[]" placeholder="Maximo"class="form-control name_list" /> <hr> ');
    });
    
    $(document).on('click', '.btn_remove', function(){
    var button_id = $(this).attr("id"); 
    $('#row'+button_id+'').remove();
    });
    
    $('#submit').click(function(){      
    $.ajax({
        url:"nombre.php",
        method:"POST",
        data:$('#add_namee').serialize(),
        success:function(data)
        {
            alert(data);
            $('#add_namee')[0].reset();
        }
    });
    });

    var i=1;
    $('#add').click(function(){
    i++;
        $('#dynamic_field').append('        <label for="inputEstimatedBudget">Benefico asociado</label> <input type="text" name="name[]" placeholder="Beneficio" class="form-control name_list" /> <br><label for="inputEstimatedBudget">Maximo de uso del beneficio</label><input type="text" name="name[]" placeholder="Maximo"class="form-control name_list" /> <hr> ');
    });
    
    $(document).on('click', '.btn_remove', function(){
    var button_id = $(this).attr("id"); 
    $('#row'+button_id+'').remove();
    });
    
    $('#submit').click(function(){      
    $.ajax({
        url:"nombre.php",
        method:"POST",
        data:$('#add_name').serialize(),
        success:function(data)
        {
            alert(data);
            $('#add_name')[0].reset();
        }
    });
    });
    
});
    
