$("document").ready(function(){




  $(".characterNameForm form").submit(function() {
    var characterFormData = {
      ":character_name" : $(this).find("#character_name").val(),
      ":character_class" : $(this).find("#character_class").val(),
    };

    //send adminFormData with AJAX to DB
    chooseAName(characterFormData);

    //empty the form once we're done with the information in it
    $(this).reset();

    //return false to prevent page reload on form submit
    return false;
  });


  function chooseAName(characterFormData) {
    $.ajax({
      url: "../php/save_character.php",
      type: "post",
      dataType: "json",
      data: {
        "character_data" : characterFormData
      },
      success: function(data) {
        console.log("Created character ", data);
      },
      error: function(data) {
        console.log("Create a character error ", data);
      }
    });
  }
});