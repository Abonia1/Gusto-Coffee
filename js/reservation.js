//auto generate date and time value
function myChangeFunction(input1) {
    var input2 = document.getElementById('DateForm');
    input2.value = input1.value;
}

function myChangeFunction1(input3) {
    var input4 = document.getElementById('TimeForm');
    input4.value = input3.value;
}


//Form validation
function GEEKFORGEEKS() {
    var name = document.forms["RegForm"]["Name"];
    var email = document.forms["RegForm"]["EMail"];
    var phone = document.forms["RegForm"]["Telephone"];
    var address = document.forms["RegForm"]["Address"];
    if (name.value == "") {
        window.alert("Please enter your name.");
        name.focus();
        return false;
    }
    if (address.value == "") {
        window.alert("Please enter your address.");
        name.focus();
        return false;
    }
    if (email.value == "") {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    if (email.value.indexOf("@", 0) < 0) {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    if (email.value.indexOf(".", 0) < 0) {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    if (phone.value == "") {
        window.alert("Please enter your telephone number.");
        phone.focus();
        return false;
    }
    return true;
}

$(function() {
    $("#datepicker").datepicker({
        dateFormat: "dd-mm-yy",
        yearRange: "-100:+20",
        minDate: '0'
    });
});
$(document).ready(function() {
    $('#timepicker').timepicker({
        timeFormat: 'H:i',
        dropdown: true,
        scrollbar: true,
        minTime: '10:00',
        maxTime: '18:00',
    });
    // $('#numberImg').click(function() {
    //     var $this = $(this);
    //     if ($this.hasClass('active')) {
    //         $this.removeClass('active');
    //     } else {
    //         $('.active').removeClass('active');
    //         $this.addClass('active');
    //     }
    // });
});
//Border change on clicking image
$(document).ready(function() {
    // wait until all images are loaded
    $(window).on("load", function() {
        $('img').click(function() {
            if ($(this).hasClass("selected")) {
                $(this).removeClass('selected').addClass('unselected');
            } else {
                $(this).removeClass('unselected').addClass('selected');
            }
        });
    });
});
//     //toogle class
//     $('#numberImg').click(function() {
//    if( $(this).hasClass('selected') ) {
//         $(this).toggleClass(' unselected selected');
//     }
//     else{
//          $(this).addClass('selected');
//     }
// });
//try 1
jQuery(document).ready(function() {
    // This button will increment the value
    $('.qtyplus').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name=' + fieldName + ']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name=' + fieldName + ']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name=' + fieldName + ']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name=' + fieldName + ']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name=' + fieldName + ']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name=' + fieldName + ']').val(0);
        }
    });
});
//to call show() function to display the plan image
function show() {
    //document.getElementById('planImg').style.maxHeight = "200px";
    document.getElementById('planImg').background = "IMAGES/plan2.PNG";
}