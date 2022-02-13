$(document).ready(function () {
  $("#plus").click(function () {
    // i have addedid secomd inthe span incase any error during backend chage it or remove it
    var element =
      ' <div class="ctypes" id="two"><select name="catertype" id="catertype"><option value="" disabled selected hidden>Catering Types</option><option value="Vegetarian">Vegetarian</option>  <option value="Non-Vegetrian">Non-Vegetrian</option> <option value="Baverages">Baverages</option><option value="Shamiyana">Shamiyana</option></select><i class="fa-solid fa-circle-xmark fa-2xl" id="delete"></i> </div>';

    $(".flexcontent").append(element);
  });

  $("#add").click(function () {
    console.log("what the hell");

    var block =
      '<div class="additem" id="second"><div class="item"><label for="Name" class="form__label">Add Item</label> <select name="pincodes" id="pincodes"> <option value="530045">530045</option><option value="530041">530041</option><option value="530014">530014</option> <option value="530012">530012</option> </select></div><div class="item"> <label for="cost" class="form__label">Cost</label><input required type="text" name="cost" id="cost" placeholder="Enter Cost of item" /></div><i class="fa-solid fa-circle-xmark fa-2xl" id="remove"></i></div>';
    $(".grid3").append(block);
  });

  // $("#delete").click(function (e) {
  //   // console.log(e);
  //   var variants = $(this).closest("#second");
  //   $(variants).remove();
  // });
  $("body").on("click", "#delete", function () {
    var variants = $(this).closest("#two");
    console.log(variants);
    $(variants).remove();
  });
  $("body").on("click", "#remove", function () {
    var variants = $(this).closest("#second");
    console.log(variants);
    $(variants).remove();
  });
});

// console.log(fuck());
