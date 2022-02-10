$(document).ready(function () {
  $("#plus").click(function () {
    console.log("what the hell");
    // i have addedid secomd inthe span incase any error during backend chage it or remove it
    var element =
      '<span id="second"> <input required type="number" name="pincode" id="pincode"placeholder="Enter  Pincode" />   <i class="fa-solid fa-circle-xmark fa-2xl" id="what"></i> </span> ';

    $(".item").append(element);
  });
  $("#what").click(function (e) {
    console.log(e);
    var variants = $(this).closest("#second");
    $(variants).remove();
  });
  $("body").on("click", "#what", function () {
    //alert('hai');
    var variants = $(this).closest("#second");
    console.log(variants);
    $(variants).remove();
  });
});

// console.log(fuck());
