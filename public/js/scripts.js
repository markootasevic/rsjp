$(document).ready(function() {             

                var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd='0'+dd
} 
if(mm<10) {
    mm='0'+mm
} 
today = mm+'/'+dd+'/'+yyyy;

document.getElementById('datepicker1').value=""+today ;
                    });


if ($('#back-to-top').length) {
    var scrollTrigger = 300, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}

if ($('#back-to-top2').length) {
    var scrollTrigger = 300, // px
        backToTop2 = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top2').addClass('show');
            } else {
                $('#back-to-top2').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop2();
    });
    $('#back-to-top2').on('click', function (e) {
        e.preventDefault();
         $("html, body").animate({ scrollTop: $(document).height() }, "slow");
    });
}



$('#izbor2g1').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g1').removeAttr('disabled');
        $('#izbor4g1').removeAttr('disabled');
        $('#izbor5g1').removeAttr('disabled');
        $('#izbor6g1').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g1').attr('disabled', true);
        $('#izbor3g1').attr('checked', false);
        $('#izbor4g1').attr('disabled', true);
        $('#izbor4g1').attr('checked', false);
        $('#izbor5g1').attr('disabled', true);
        $('#izbor5g1').attr('checked', false);
        $('#izbor6g1').attr('disabled', true);
        $('#izbor6g1').attr('checked', false);
        //disable input
    }
});


$('#izbor2g2').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g2').removeAttr('disabled');
        $('#izbor4g2').removeAttr('disabled');
        $('#izbor5g2').removeAttr('disabled');
        $('#izbor6g2').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g2').attr('disabled', true);
        $('#izbor3g2').attr('checked', false);
        $('#izbor4g2').attr('disabled', true);
        $('#izbor4g2').attr('checked', false);
        $('#izbor5g2').attr('disabled', true);
        $('#izbor5g2').attr('checked', false);
        $('#izbor6g2').attr('disabled', true);
        $('#izbor6g2').attr('checked', false);
        //disable input
    }
});
$('#izbor2g3').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g3').removeAttr('disabled');
        $('#izbor4g3').removeAttr('disabled');
        $('#izbor5g3').removeAttr('disabled');
        $('#izbor6g3').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g3').attr('disabled', true);
        $('#izbor3g3').attr('checked', false);
        $('#izbor4g3').attr('disabled', true);
        $('#izbor4g3').attr('checked', false);
        $('#izbor5g3').attr('disabled', true);
        $('#izbor5g3').attr('checked', false);
        $('#izbor6g3').attr('disabled', true);
        $('#izbor6g3').attr('checked', false);
        //disable input
    }
});

$('#izbor2g4').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g4').removeAttr('disabled');
        $('#izbor4g4').removeAttr('disabled');
        $('#izbor5g4').removeAttr('disabled');
        $('#izbor6g4').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g4').attr('disabled', true);
        $('#izbor3g4').attr('checked', false);
        $('#izbor4g4').attr('disabled', true);
        $('#izbor4g4').attr('checked', false);
        $('#izbor5g4').attr('disabled', true);
        $('#izbor5g4').attr('checked', false);
        $('#izbor6g4').attr('disabled', true);
        $('#izbor6g4').attr('checked', false);
        //disable input
    }
});

$('#izbor2g5').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g5').removeAttr('disabled');
        $('#izbor4g5').removeAttr('disabled');
        $('#izbor5g5').removeAttr('disabled');
        $('#izbor6g5').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g5').attr('disabled', true);
        $('#izbor3g5').attr('checked', false);
        $('#izbor4g5').attr('disabled', true);
        $('#izbor4g5').attr('checked', false);
        $('#izbor5g5').attr('disabled', true);
        $('#izbor5g5').attr('checked', false);
        $('#izbor6g5').attr('disabled', true);
        $('#izbor6g5').attr('checked', false);
        //disable input
    }
});

$('#izbor2g6').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g6').removeAttr('disabled');
        $('#izbor4g6').removeAttr('disabled');
        $('#izbor5g6').removeAttr('disabled');
        $('#izbor6g6').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g6').attr('disabled', true);
        $('#izbor3g6').attr('checked', false);
        $('#izbor4g6').attr('disabled', true);
        $('#izbor4g6').attr('checked', false);
        $('#izbor5g6').attr('disabled', true);
        $('#izbor5g6').attr('checked', false);
        $('#izbor6g6').attr('disabled', true);
        $('#izbor6g6').attr('checked', false);
        //disable input
    }
});

$('#izbor2g7').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g7').removeAttr('disabled');
        $('#izbor4g7').removeAttr('disabled');
        $('#izbor5g7').removeAttr('disabled');
        $('#izbor6g7').removeAttr('disabled');
      
        //enable input
        
    } else {
        $('#izbor3g7').attr('disabled', true);
        $('#izbor3g7').attr('checked', false);
        $('#izbor4g7').attr('disabled', true);
        $('#izbor4g7').attr('checked', false);
        $('#izbor5g7').attr('disabled', true);
        $('#izbor5g7').attr('checked', false);
        $('#izbor6g7').attr('disabled', true);
        $('#izbor6g7').attr('checked', false);
        //disable input
    }
});

$('#izbor2g8').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g8').removeAttr('disabled');
        $('#izbor4g8').removeAttr('disabled');
        $('#izbor5g8').removeAttr('disabled');
        $('#izbor6g8').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g8').attr('disabled', true);
        $('#izbor3g8').attr('checked', false);
        $('#izbor4g8').attr('disabled', true);
        $('#izbor4g8').attr('checked', false);
        $('#izbor5g8').attr('disabled', true);
        $('#izbor5g8').attr('checked', false);
        $('#izbor6g8').attr('disabled', true);
        $('#izbor6g8').attr('checked', false);
        //disable input
    }
});

$('#izbor2g9').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g9').removeAttr('disabled');
        $('#izbor4g9').removeAttr('disabled');
        $('#izbor5g9').removeAttr('disabled');
        $('#izbor6g9').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g9').attr('disabled', true);
        $('#izbor3g9').attr('checked', false);
        $('#izbor4g9').attr('disabled',true);
        $('#izbor4g9').attr('checked', false);
        $('#izbor5g9').attr('disabled', true);
        $('#izbor5g9').attr('checked', false);
        $('#izbor6g9').attr('disabled', true);
        $('#izbor6g9').attr('checked', false);
        //disable input
    }
});

$('#izbor2g10').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g10').removeAttr('disabled');
        $('#izbor4g10').removeAttr('disabled');
        $('#izbor5g10').removeAttr('disabled');
        $('#izbor6g10').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g10').attr('disabled', true);
        $('#izbor3g10').attr('checked', false);
        $('#izbor4g10').attr('disabled', true);
        $('#izbor4g10').attr('checked', false);
        $('#izbor5g10').attr('disabled', true);
        $('#izbor5g10').attr('checked', false);
        $('#izbor6g10').attr('disabled', true);
        $('#izbor6g10').attr('checked', false);
        //disable input
    }
});

$('#izbor2g11').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g11').removeAttr('disabled');
        $('#izbor4g11').removeAttr('disabled');
        $('#izbor5g11').removeAttr('disabled');
        $('#izbor6g11').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g11').attr('disabled', true);
        $('#izbor3g11').attr('checked', false);
        $('#izbor4g11').attr('disabled', true);
        $('#izbor4g11').attr('checked', false);
        $('#izbor5g11').attr('disabled', true);
        $('#izbor5g11').attr('checked', false);
        $('#izbor6g11').attr('disabled', true);
        $('#izbor6g11').attr('checked', false);
        //disable input
    }
});

$('#izbor2g12').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g12').removeAttr('disabled');
        $('#izbor4g12').removeAttr('disabled');
        $('#izbor5g12').removeAttr('disabled');
        $('#izbor6g12').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g12').attr('disabled', true);
        $('#izbor3g12').attr('checked', false);
        $('#izbor4g12').attr('disabled', true);
        $('#izbor4g12').attr('checked', false);
        $('#izbor5g12').attr('disabled', true);
        $('#izbor5g12').attr('checked', false);
        $('#izbor6g12').attr('disabled', true);
        $('#izbor6g12').attr('checked', false);
        //disable input
    }
});

$('#izbor2g13').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g13').removeAttr('disabled');
        $('#izbor4g13').removeAttr('disabled');
        $('#izbor5g13').removeAttr('disabled');
        $('#izbor6g13').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g13').attr('disabled', true);
        $('#izbor3g13').attr('checked', false);
        $('#izbor4g13').attr('disabled', true);
        $('#izbor4g13').attr('checked', false);
        $('#izbor5g13').attr('disabled', true);
        $('#izbor5g13').attr('checked', false);
        $('#izbor6g13').attr('disabled', true);
        $('#izbor6g13').attr('checked', false);
        //disable input
    }
});

$('#izbor2g14').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g14').removeAttr('disabled');
        $('#izbor4g14').removeAttr('disabled');
        $('#izbor5g14').removeAttr('disabled');
        $('#izbor6g14').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g14').attr('disabled', true);
        $('#izbor3g14').attr('checked', false);
        $('#izbor4g14').attr('disabled', true);
        $('#izbor4g14').attr('checked', false);
        $('#izbor5g14').attr('disabled', true);
        $('#izbor5g14').attr('checked', false);
        $('#izbor6g14').attr('disabled', true);
        $('#izbor6g14').attr('checked', false);
        //disable input
    }
});

$('#izbor2g15').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g15').removeAttr('disabled');
        $('#izbor4g15').removeAttr('disabled');
        $('#izbor5g15').removeAttr('disabled');
        $('#izbor6g15').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g15').attr('disabled', true);
        $('#izbor3g15').attr('checked', false);
        $('#izbor4g15').attr('disabled', true);
        $('#izbor4g15').attr('checked', false);
        $('#izbor5g15').attr('disabled', true);
        $('#izbor5g15').attr('checked', false);
        $('#izbor6g15').attr('disabled', true);
        $('#izbor6g15').attr('checked', false);
        //disable input
    }
});

$('#izbor2g16').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g16').removeAttr('disabled');
        $('#izbor4g16').removeAttr('disabled');
        $('#izbor5g16').removeAttr('disabled');
        $('#izbor6g16').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g16').attr('disabled', true);
        $('#izbor3g16').attr('checked', false);
        $('#izbor4g16').attr('disabled', true);
        $('#izbor4g16').attr('checked', false);
        $('#izbor5g16').attr('disabled', true);
        $('#izbor5g16').attr('checked', false);
        $('#izbor6g16').attr('disabled', true);
        $('#izbor6g16').attr('checked', false);
        //disable input
    }
});

$('#izbor2g17').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g17').removeAttr('disabled');
        $('#izbor4g17').removeAttr('disabled');
        $('#izbor5g17').removeAttr('disabled');
        $('#izbor6g17').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g17').attr('disabled', true);
        $('#izbor3g17').attr('checked', false);
        $('#izbor4g17').attr('disabled', true);
        $('#izbor4g17').attr('checked', false);
        $('#izbor5g17').attr('disabled', true);
        $('#izbor5g17').attr('checked', false);
        $('#izbor6g17').attr('disabled', true);
        $('#izbor6g17').attr('checked', false);
        //disable input
    }
});

$('#izbor2g18').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g18').removeAttr('disabled');
        $('#izbor4g18').removeAttr('disabled');
        $('#izbor5g18').removeAttr('disabled');
        $('#izbor6g18').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g18').attr('disabled', true);
        $('#izbor3g18').attr('checked', false);
        $('#izbor4g18').attr('disabled', true);
        $('#izbor4g18').attr('checked', false);
        $('#izbor5g18').attr('disabled', true);
        $('#izbor5g18').attr('checked', false);
        $('#izbor6g18').attr('disabled', true);
        $('#izbor6g18').attr('checked', false);
        //disable input
    }
});

$('#izbor2g19').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g19').removeAttr('disabled');
        $('#izbor4g19').removeAttr('disabled');
        $('#izbor5g19').removeAttr('disabled');
        $('#izbor6g19').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g19').attr('disabled', true);
        $('#izbor3g19').attr('checked', false);
        $('#izbor4g19').attr('disabled', true);
        $('#izbor4g19').attr('checked', false);
        $('#izbor5g19').attr('disabled', true);
        $('#izbor5g19').attr('checked', false);
        $('#izbor6g19').attr('disabled', true);
        $('#izbor6g19').attr('checked', false);
        //disable input
    }
});

$('#izbor2g20').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g20').removeAttr('disabled');
        $('#izbor4g20').removeAttr('disabled');
        $('#izbor5g20').removeAttr('disabled');
        $('#izbor6g20').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g20').attr('disabled', true);
        $('#izbor3g20').attr('checked', false);
        $('#izbor4g20').attr('disabled', true);
        $('#izbor4g20').attr('checked', false);
        $('#izbor5g20').attr('disabled', true);
        $('#izbor5g20').attr('checked', false);
        $('#izbor6g20').attr('disabled', true);
        $('#izbor6g20').attr('checked', false);
        //disable input
    }
});

$('#izbor2g21').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g21').removeAttr('disabled');
        $('#izbor4g21').removeAttr('disabled');
        $('#izbor5g21').removeAttr('disabled');
        $('#izbor6g21').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g21').attr('disabled', true);
        $('#izbor3g21').attr('checked', false);
        $('#izbor4g21').attr('disabled', true);
        $('#izbor4g21').attr('checked', false);
        $('#izbor5g21').attr('disabled', true);
        $('#izbor5g21').attr('checked', false);
        $('#izbor6g21').attr('disabled', true);
        $('#izbor6g21').attr('checked', false);
        //disable input
    }
});

$('#izbor2g22').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g22').removeAttr('disabled');
        $('#izbor4g22').removeAttr('disabled');
        $('#izbor5g22').removeAttr('disabled');
        $('#izbor6g22').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g22').attr('disabled', true);
        $('#izbor3g22').attr('checked', false);
        $('#izbor4g22').attr('disabled', true);
        $('#izbor4g22').attr('checked', false);
        $('#izbor5g22').attr('disabled', true);
        $('#izbor5g22').attr('checked', false);
        $('#izbor6g22').attr('disabled', true);
        $('#izbor6g22').attr('checked', false);
        //disable input
    }
});

$('#izbor2g23').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g23').removeAttr('disabled');
        $('#izbor4g23').removeAttr('disabled');
        $('#izbor5g23').removeAttr('disabled');
        $('#izbor6g23').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g23').attr('disabled', true);
        $('#izbor3g23').attr('checked', false);
        $('#izbor4g23').attr('disabled', true);
        $('#izbor4g23').attr('checked', false);
        $('#izbor5g23').attr('disabled', true);
        $('#izbor5g23').attr('checked', false);
        $('#izbor6g23').attr('disabled', true);
        $('#izbor6g23').attr('checked', false);
        //disable input
    }
});

$('#izbor2g24').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g24').removeAttr('disabled');
        $('#izbor4g24').removeAttr('disabled');
        $('#izbor5g24').removeAttr('disabled');
        $('#izbor6g24').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g24').attr('disabled', true);
        $('#izbor3g24').attr('checked', false);
        $('#izbor4g24').attr('disabled', true);
        $('#izbor4g24').attr('checked', false);
        $('#izbor5g24').attr('disabled', true);
        $('#izbor5g24').attr('checked', false);
        $('#izbor6g24').attr('disabled', true);
        $('#izbor6g24').attr('checked', false);
        //disable input
    }
});

$('#izbor2g25').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g25').removeAttr('disabled');
        $('#izbor4g25').removeAttr('disabled');
        $('#izbor5g25').removeAttr('disabled');
        $('#izbor6g25').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g25').attr('disabled', true);
        $('#izbor3g25').attr('checked', false);
        $('#izbor4g25').attr('disabled', true);
        $('#izbor4g25').attr('checked', false);
        $('#izbor5g25').attr('disabled', true);
        $('#izbor5g25').attr('checked', false);
        $('#izbor6g25').attr('disabled', true);
        $('#izbor6g25').attr('checked', false);
        //disable input
    }
});

$('#izbor2g26').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g26').removeAttr('disabled');
        $('#izbor4g26').removeAttr('disabled');
        $('#izbor5g26').removeAttr('disabled');
        $('#izbor6g26').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g26').attr('disabled', true);
        $('#izbor3g26').attr('checked', false);
        $('#izbor4g26').attr('disabled', true);
        $('#izbor4g26').attr('checked', false);
        $('#izbor5g26').attr('disabled', true);
        $('#izbor5g26').attr('checked', false);
        $('#izbor6g26').attr('disabled', true);
        $('#izbor6g26').attr('checked', false);
        //disable input
    }
});

$('#izbor2g27').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g27').removeAttr('disabled');
        $('#izbor4g27').removeAttr('disabled');
        $('#izbor5g27').removeAttr('disabled');
        $('#izbor6g27').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g27').attr('disabled', true);
        $('#izbor3g27').attr('checked', false);
        $('#izbor4g27').attr('disabled', true);
        $('#izbor4g27').attr('checked', false);
        $('#izbor5g27').attr('disabled', true);
        $('#izbor5g27').attr('checked', false);
        $('#izbor6g27').attr('disabled', true);
        $('#izbor6g27').attr('checked', false);
        //disable input
    }
});

$('#izbor2g28').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g28').removeAttr('disabled');
        $('#izbor4g28').removeAttr('disabled');
        $('#izbor5g28').removeAttr('disabled');
        $('#izbor6g28').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g28').attr('disabled', true);
        $('#izbor3g28').attr('checked', false);
        $('#izbor4g28').attr('disabled', true);
        $('#izbor4g28').attr('checked', false);
        $('#izbor5g28').attr('disabled', true);
        $('#izbor5g28').attr('checked', false);
        $('#izbor6g28').attr('disabled', true);
        $('#izbor6g28').attr('checked', false);
        //disable input
    }
});

$('#izbor2g29').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g29').removeAttr('disabled');
        $('#izbor4g29').removeAttr('disabled');
        $('#izbor5g29').removeAttr('disabled');
        $('#izbor6g29').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g29').attr('disabled', true);
        $('#izbor3g29').attr('checked', false);
        $('#izbor4g29').attr('disabled', true);
        $('#izbor4g29').attr('checked', false);
        $('#izbor5g29').attr('disabled', true);
        $('#izbor5g29').attr('checked', false);
        $('#izbor6g29').attr('disabled', true);
        $('#izbor6g29').attr('checked', false);
        //disable input
    }
});

$('#izbor2g30').click(function () {

      //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izbor3g30').removeAttr('disabled');
        $('#izbor4g30').removeAttr('disabled');
        $('#izbor5g30').removeAttr('disabled');
        $('#izbor6g30').removeAttr('disabled');
       
        //enable input
        
    } else {
        $('#izbor3g30').attr('disabled', true);
        $('#izbor3g30').attr('checked', false);
        $('#izbor4g30').attr('disabled', true);
        $('#izbor4g30').attr('checked', false);
        $('#izbor5g30').attr('disabled', true);
        $('#izbor5g30').attr('checked', false);
        $('#izbor6g30').attr('disabled', true);
        $('#izbor6g30').attr('checked', false);
        //disable input
    }
});





$('#izmenitiPostupak').click(function () {

  $('#izmenitiPostupakInput').prop('hidden', false);
  $('#ukinutiPostupakInput').prop('disabled', true);

});

// $('#izmenitiPostupak').change(function() {
//   $('#izmenitiPostupakInput').prop('hidden', false);
//   $('#ukinutiPostupakInput').prop('disabled', true);
  // $('#izbor-1').attr('checked', false);
  // $('#izbor-2').attr('checked', false);
  // $('#izbor-3').attr('checked', false);
  // $('#izbor-4').attr('checked', false);
  // $('#izbor-5').attr('checked', false);
  // $('#izbor-6').attr('checked', false);
  // $('#izbor-7').attr('checked', false);
  // $('#izbor-8').attr('checked', false);
  // $('#izbor-9').attr('checked', false);
  // $('#izbor-10').attr('checked', false);
  // $('#izbor-11').attr('checked', false);
  // $('#izbor-12').attr('checked', false);
  // $('#izbor-13').attr('checked', false);
  // $('#izbor-14').attr('checked', false);


  // $('#izmenaInput1').attr('disabled', true);
  // $('#izmenaInput2').attr('disabled', true);
  // $('#izmenaInput3').attr('disabled', true);
  // $('#izmenaInput4').attr('disabled', true);
  // $('#izmenaInput5').attr('disabled', true);
  // $('#izmenaInput6').attr('disabled', true);
  // $('#izmenaInput7').attr('disabled', true);
  // $('#izmenaInput8').attr('disabled', true);
  // $('#izmenaInput9').attr('disabled', true);
  // $('#izmenaInput10').attr('disabled', true);
  // $('#izmenaInput11').attr('disabled', true);
  // $('#izmenaInput12').attr('disabled', true);
  // $('#izmenaInput13').attr('disabled', true);
  // $('#izmenaInput14').attr('disabled', true);
// });


$('#ukinutiPostupak').change(function() {
  $('#ukinutiPostupakInput').prop('disabled', false);
    $('#z4').prop('hidden', false);
    $('#z5').prop('hidden', true);
    $('#z6').prop('hidden', false);


});



$('#neMenjati').change(function() {
  $('#izmenitiPostupakInput').prop('hidden', true);
  $('#ukinutiPostupakInput').prop('disabled', true);
    $('#z4').prop('hidden', true);
    $('#z6').prop('hidden', true);


});

$('#izmenitiPostupak').change(function() {
    $('#z4').prop('hidden', true);
    $('#z5').prop('hidden', false);
     $('#z6').prop('hidden', false);


});


$('#postojiPreklapanje').change(function() {
  $('#opisPreklapanja').prop('disabled', false);

});

$('#nePostojiPreklapanje').change(function() {
  $('#opisPreklapanja').prop('disabled', true);

});

$('#digitalizacijaPostupka1').change(function() {
  $('#opisDigitalizacije').prop('disabled', false);

});

$('#digitalizacijaPostupka2').change(function() {
  $('#opisDigitalizacije').prop('disabled', true);

});

$('#postojiZastarelost').change(function() {
  $('#opisZastarelosti').prop('disabled', false);

});

$('#nePostojiZastarelost').change(function() {
  $('#opisZastarelosti').prop('disabled', true);

});

$('#ponavljajuci').change(function() {
  $('#ucestalost').prop('disabled', false);

});

$('#ponavljajuci2').change(function() {
  $('#ucestalost').prop('disabled', true);

});

$('#jednokratni').change(function() {
  $('#ucestalost').prop('disabled', true);

});

$('#organKomunikacijaDa').change(function() {
  $('#preklapanjeOrganizacija').prop('hidden', false);

});

$('#organKomunikacijaNe').change(function() {
  $('#preklapanjeOrganizacija').prop('hidden', true);

});


$('#test').change(function() {
  $('.testiranje').prop('disabled', true);
});
$('#test1').change(function() {
  $('.testiranje').prop('disabled', false);
});
$('#test2').change(function() {
  $('.testiranje').prop('disabled', false);
});



$('#remove1').click(function() {
  $('#b0').prop('hidden', true);

});

// Prikazivanje B sekcije
function b1_show() {
   document.getElementById('b1').style.display = "block";
}

function b2_show() {
   document.getElementById('b2').style.display = "block";
}

function b3_show() {
   document.getElementById('b3').style.display = "block";
}

function b4_show() {
   document.getElementById('b4').style.display = "block";
}

function b5_show() {
   document.getElementById('b5').style.display = "block";
}

function b6_show() {
   document.getElementById('b6').style.display = "block";
}

function b7_show() {
   document.getElementById('b7').style.display = "block";
}

function b8_show() {
   document.getElementById('b8').style.display = "block";
}

function b9_show() {
   document.getElementById('b9').style.display = "block";
}


// Sakrivanje B sekcije
function b1_hide() {
   document.getElementById('b1').style.display = "none";
}

function b2_hide() {
   document.getElementById('b2').style.display = "none";
}

function b3_hide() {
   document.getElementById('b3').style.display = "none";
}

function b4_hide() {
   document.getElementById('b4').style.display = "none";
}

function b5_hide() {
   document.getElementById('b5').style.display = "none";
}

function b6_hide() {
   document.getElementById('b6').style.display = "none";
}

function b7_hide() {
   document.getElementById('b7').style.display = "none";
}

function b8_hide() {
   document.getElementById('b8').style.display = "none";
}

function b9_hide() {
   document.getElementById('b9').style.display = "none";
}


// Prikazivanje D sekcije
function d2_show() {
   document.getElementById('d2').style.display = "block";
}

function d3_show() {
   document.getElementById('d3').style.display = "block";
}

function d4_show() {
   document.getElementById('d4').style.display = "block";
}

function d5_show() {
   document.getElementById('d5').style.display = "block";
}

function d6_show() {
   document.getElementById('d6').style.display = "block";
}

function d7_show() {
   document.getElementById('d7').style.display = "block";
}

function d8_show() {
   document.getElementById('d8').style.display = "block";
}

function d9_show() {
   document.getElementById('d9').style.display = "block";
}

function d10_show() {
   document.getElementById('d10').style.display = "block";
}

// Sakrivanje D sekcije


function d2_hide() {
   document.getElementById('d2').style.display = "none";
}

function d3_hide() {
   document.getElementById('d3').style.display = "none";
}

function d4_hide() {
   document.getElementById('b4').style.display = "none";
}

function d5_hide() {
   document.getElementById('d5').style.display = "none";
}

function d6_hide() {
   document.getElementById('d6').style.display = "none";
}

function d7_hide() {
   document.getElementById('d7').style.display = "none";
}

function d8_hide() {
   document.getElementById('d8').style.display = "none";
}

function d9_hide() {
   document.getElementById('d9').style.display = "none";
}

function d10_hide() {
   document.getElementById('d10').style.display = "none";
}


$('#dodajg1').click(function() {
  $('#uklonig1').prop('hidden', false);
 $('#g2').prop('hidden', false);
   $('#razmakg2').prop('hidden', false);

});

$('#dodajg2').click(function() {
 $('#g3').prop('hidden', false);
   $('#razmakg3').prop('hidden', false);


});

$('#dodajg3').click(function() {
 $('#g4').prop('hidden', false);
   $('#razmakg4').prop('hidden', false);


});
$('#dodajg4').click(function() {
 $('#g5').prop('hidden', false);
   $('#razmakg5').prop('hidden', false);


});
$('#dodajg5').click(function() {
 $('#g6').prop('hidden', false);
  $('#razmakg6').prop('hidden', false);

});
$('#dodajg6').click(function() {
 $('#g7').prop('hidden', false);
  $('#razmakg7').prop('hidden', false);

});
$('#dodajg7').click(function() {
 $('#g8').prop('hidden', false);
  $('#razmakg8').prop('hidden', false);

});
$('#dodajg8').click(function() {
 $('#g9').prop('hidden', false);
  $('#razmakg9').prop('hidden', false);

});
$('#dodajg9').click(function() {
 $('#g10').prop('hidden', false);
  $('#razmakg10').prop('hidden', false);
});
$('#dodajg10').click(function() {
 $('#g11').prop('hidden', false);
  $('#razmakg11').prop('hidden', false);
});
$('#dodajg11').click(function() {
 $('#g12').prop('hidden', false);
  $('#razmakg12').prop('hidden', false);
});
$('#dodajg12').click(function() {
 $('#g13').prop('hidden', false);
  $('#razmakg13').prop('hidden', false);
});
$('#dodajg13').click(function() {
 $('#g14').prop('hidden', false);
  $('#razmakg14').prop('hidden', false);
});
$('#dodajg14').click(function() {
 $('#g15').prop('hidden', false);
  $('#razmakg15').prop('hidden', false);
});
$('#dodajg15').click(function() {
 $('#g16').prop('hidden', false);
  $('#razmakg16').prop('hidden', false);
});
$('#dodajg16').click(function() {
 $('#g17').prop('hidden', false);
  $('#razmakg17').prop('hidden', false);
});
$('#dodajg17').click(function() {
 $('#g18').prop('hidden', false);
  $('#razmakg18').prop('hidden', false);
});
$('#dodajg18').click(function() {
 $('#g19').prop('hidden', false);
  $('#razmakg19').prop('hidden', false);
});
$('#dodajg19').click(function() {
 $('#g20').prop('hidden', false);
  $('#razmakg20').prop('hidden', false);
});
$('#dodajg20').click(function() {
 $('#g21').prop('hidden', false);
  $('#razmakg21').prop('hidden', false);
});
$('#dodajg21').click(function() {
 $('#g22').prop('hidden', false);
  $('#razmakg22').prop('hidden', false);
});
$('#dodajg22').click(function() {
 $('#g23').prop('hidden', false);
  $('#razmakg23').prop('hidden', false);
});
$('#dodajg23').click(function() {
 $('#g24').prop('hidden', false);
  $('#razmakg24').prop('hidden', false);
});
$('#dodajg24').click(function() {
 $('#g25').prop('hidden', false);
  $('#razmakg25').prop('hidden', false);
});
$('#dodajg25').click(function() {
 $('#g26').prop('hidden', false);
  $('#razmakg26').prop('hidden', false);
});
$('#dodajg26').click(function() {
 $('#g27').prop('hidden', false);
  $('#razmakg27').prop('hidden', false);
});
$('#dodajg27').click(function() {
 $('#g28').prop('hidden', false);
  $('#razmakg28').prop('hidden', false);
});
$('#dodajg28').click(function() {
 $('#g29').prop('hidden', false);
  $('#razmakg29').prop('hidden', false);
});
$('#dodajg29').click(function() {
 $('#g30').prop('hidden', false);
  $('#razmakg30').prop('hidden', false);
});





$('#dodajv1').click(function() {
  $('#removev1').prop('hidden', false);
 $('#v2').prop('hidden', false);
});
$('#dodajv2').click(function() {
 $('#v3').prop('hidden', false);
});
$('#dodajv3').click(function() {
 $('#v4').prop('hidden', false);
});
$('#dodajv4').click(function() {
 $('#v5').prop('hidden', false);
});

$('#dodajv5').click(function() {
 $('#v6').prop('hidden', false);
});
$('#dodajv6').click(function() {
 $('#v7').prop('hidden', false);
});
$('#dodajv7').click(function() {
 $('#v8').prop('hidden', false);
});
$('#dodajv8').click(function() {
 $('#v9').prop('hidden', false);
});
$('#dodajv9').click(function() {
 $('#v10').prop('hidden', false);
});










// $('#dodajd1').click(function() {
//  $('#d2').prop('hidden', false);
//  $('#uklonid1').prop('hidden', false);
// });
// $('#dodajd2').click(function() {
//  $('#d3').prop('hidden', false);
// });
// $('#dodajd3').click(function() {
//  $('#d4').prop('hidden', false);
// });
// $('#dodajd4').click(function() {
//  $('#d5').prop('hidden', false);
// });
// $('#dodajd5').click(function() {
//  $('#d6').prop('hidden', false);
// });
// $('#dodajd6').click(function() {
//  $('#d7').prop('hidden', false);
// });
// $('#dodajd7').click(function() {
//  $('#d8').prop('hidden', false);
// });
// $('#dodajd8').click(function() {
//  $('#d9').prop('hidden', false);
// });
// $('#dodajd9').click(function() {
//  $('#d10').prop('hidden', false);
// });


$('#lbl180').click(function() {
  console.write("pera");
});





$('#remove2').click(function() {
  $('#b1').prop('hidden', true);

});

$('#remove3').click(function() {
  $('#b2').prop('hidden', true);

});

$('#remove4').click(function() {
  $('#b3').prop('hidden', true);

});

$('#remove5').click(function() {
  $('#b4').prop('hidden', true);

});

$('#remove6').click(function() {
  $('#b5').prop('hidden', true);

});

$('#remove7').click(function() {
  $('#b6').prop('hidden', true);

});

$('#remove8').click(function() {
  $('#b7').prop('hidden', true);

});
$('#remove9').click(function() {
  $('#b8').prop('hidden', true);

});
$('#remove10').click(function() {
  $('#b9').prop('hidden', true);
});



$('#removev1').click(function() {
  $('#v1').prop('hidden', true);
});
$('#removev2').click(function() {
  $('#v2').prop('hidden', true);
});
$('#removev3').click(function() {
  $('#v3').prop('hidden', true);
});
$('#removev4').click(function() {
  $('#v4').prop('hidden', true);
});
$('#removev5').click(function() {
  $('#v5').prop('hidden', true);
});
$('#removev6').click(function() {
  $('#v6').prop('hidden', true);
});
$('#removev7').click(function() {
  $('#v7').prop('hidden', true);
});
$('#removev8').click(function() {
  $('#v8').prop('hidden', true);
});
$('#removev9').click(function() {
  $('#v9').prop('hidden', true);
});
$('#removev10').click(function() {
  $('#v10').prop('hidden', true);
});







$('#uklonig1').click(function() {
  $('#g1').prop('hidden', true);
  $('#razmakg1').prop('hidden', true);


});

$('#uklonig2').click(function() {
  $('#g2').prop('hidden', true);
    $('#razmakg2').prop('hidden', true);


});
$('#uklonig3').click(function() {
  $('#g3').prop('hidden', true);
    $('#razmakg3').prop('hidden', true);


});
$('#uklonig4').click(function() {
  $('#g4').prop('hidden', true);
    $('#razmakg4').prop('hidden', true);


});
$('#uklonig5').click(function() {
  $('#g5').prop('hidden', true);
    $('#razmakg5').prop('hidden', true);


});
$('#uklonig6').click(function() {
  $('#g6').prop('hidden', true);
    $('#razmakg6').prop('hidden', true);


});
$('#uklonig7').click(function() {
  $('#g7').prop('hidden', true);
    $('#razmakg7').prop('hidden', true);


});
$('#uklonig8').click(function() {
  $('#g8').prop('hidden', true);
    $('#razmakg8').prop('hidden', true);
});
$('#uklonig9').click(function() {
  $('#g9').prop('hidden', true);
    $('#razmakg9').prop('hidden', true);
});
$('#uklonig10').click(function() {
  $('#g10').prop('hidden', true);
    $('#razmakg10').prop('hidden', true);
});
$('#uklonig11').click(function() {
  $('#g11').prop('hidden', true);
    $('#razmakg11').prop('hidden', true);
});
$('#uklonig12').click(function() {
  $('#g12').prop('hidden', true);
    $('#razmakg12').prop('hidden', true);
});
$('#uklonig13').click(function() {
  $('#g13').prop('hidden', true);
    $('#razmakg13').prop('hidden', true);
});
$('#uklonig14').click(function() {
  $('#g14').prop('hidden', true);
    $('#razmakg14').prop('hidden', true);
});
$('#uklonig15').click(function() {
  $('#g15').prop('hidden', true);
    $('#razmakg15').prop('hidden', true);
});
$('#uklonig16').click(function() {
  $('#g16').prop('hidden', true);
    $('#razmakg16').prop('hidden', true);
});
$('#uklonig17').click(function() {
  $('#g17').prop('hidden', true);
    $('#razmakg17').prop('hidden', true);
});
$('#uklonig18').click(function() {
  $('#g18').prop('hidden', true);
    $('#razmakg18').prop('hidden', true);
});
$('#uklonig19').click(function() {
  $('#g19').prop('hidden', true);
    $('#razmakg19').prop('hidden', true);
});
$('#uklonig20').click(function() {
  $('#g20').prop('hidden', true);
    $('#razmakg20').prop('hidden', true);
});
$('#uklonig21').click(function() {
  $('#g21').prop('hidden', true);
    $('#razmakg21').prop('hidden', true);
});
$('#uklonig22').click(function() {
  $('#g22').prop('hidden', true);
    $('#razmakg22').prop('hidden', true);
});
$('#uklonig23').click(function() {
  $('#g23').prop('hidden', true);
    $('#razmakg23').prop('hidden', true);
});
$('#uklonig24').click(function() {
  $('#g24').prop('hidden', true);
    $('#razmakg24').prop('hidden', true);
});
$('#uklonig25').click(function() {
  $('#g25').prop('hidden', true);
    $('#razmakg25').prop('hidden', true);
});
$('#uklonig26').click(function() {
  $('#g26').prop('hidden', true);
    $('#razmakg26').prop('hidden', true);
});
$('#uklonig27').click(function() {
  $('#g27').prop('hidden', true);
    $('#razmakg27').prop('hidden', true);
});
$('#uklonig28').click(function() {
  $('#g28').prop('hidden', true);
    $('#razmakg28').prop('hidden', true);
});
$('#uklonig29').click(function() {
  $('#g29').prop('hidden', true);
    $('#razmakg29').prop('hidden', true);
});
$('#uklonig30').click(function() {
  $('#g30').prop('hidden', true);
    $('#razmakg30').prop('hidden', true);
});










$('#uklonid1').click(function() {
  $('#d1').prop('hidden', true);
});
$('#uklonid2').click(function() {
  $('#d2').prop('hidden', true);
});
$('#uklonid3').click(function() {
  $('#d3').prop('hidden', true);
});
$('#uklonid4').click(function() {
  $('#d4').prop('hidden', true);
});
$('#uklonid5').click(function() {
  $('#d5').prop('hidden', true);
});
$('#uklonid6').click(function() {
  $('#d6').prop('hidden', true);
});
$('#uklonid7').click(function() {
  $('#d7').prop('hidden', true);
});
$('#uklonid8').click(function() {
  $('#d8').prop('hidden', true);
});
$('#uklonid9').click(function() {
  $('#d9').prop('hidden', true);
});
$('#uklonid10').click(function() {
  $('#d10').prop('hidden', true);
});








$('#removeg1').click(function() {
  $('#g1').prop('hidden', true);

});


// auto adjust the height of
$('#container').on( 'keydown', 'textarea', function (e){
    $(this).css('height', 'auto' );
    $(this).height( this.scrollHeight );
});

$('#container').find( 'textarea' ).keydown();



$('#izbor-1').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izmenaInput1').attr('disabled', false);
                
    } else {
        $('#izmenaInput1').attr('disabled', true);
        
        //disable input
    }
});



$('#izbor-2').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izmenaInput2').removeAttr('disabled');
                
    } else {
        $('#izmenaInput2').attr('disabled', true);
        
        //disable input
    }
});

$('#izbor-3').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izmenaInput3').removeAttr('disabled');
                
    } else {
        $('#izmenaInput3').attr('disabled', true);
        
        //disable input
    }
});

$('#izbor-4').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izmenaInput4').removeAttr('disabled');
                
    } else {
        $('#izmenaInput4').attr('disabled', true);
        
        //disable input
    }
});

$('#izbor-5').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izmenaInput5').removeAttr('disabled');
                
    } else {
        $('#izmenaInput5').attr('disabled', true);
        
        //disable input
    }
});

$('#izbor-6').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izmenaInput6').removeAttr('disabled');
                
    } else {
        $('#izmenaInput6').attr('disabled', true);
        
        //disable input
    }
});

$('#izbor-7').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izmenaInput7').removeAttr('disabled');
                
    } else {
        $('#izmenaInput7').attr('disabled', true);
        
        //disable input
    }
});

$('#izbor-8').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izmenaInput8').removeAttr('disabled');
                
    } else {
        $('#izmenaInput8').attr('disabled', true);
        
        //disable input
    }
});

$('#izbor-9').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izmenaInput9').removeAttr('disabled');
                
    } else {
        $('#izmenaInput9').attr('disabled', true);
        
        //disable input
    }
});

$('#izbor-10').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izmenaInput10').removeAttr('disabled');
                
    } else {
        $('#izmenaInput10').attr('disabled', true);
        
        //disable input
    }
});

$('#izbor-11').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izmenaInput11').removeAttr('disabled');
                
    } else {
        $('#izmenaInput11').attr('disabled', true);
        
        //disable input
    }
});

$('#izbor-12').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izmenaInput12').removeAttr('disabled');
                
    } else {
        $('#izmenaInput12').attr('disabled', true);
        
        //disable input
    }
});

$('#izbor-13').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izmenaInput13').removeAttr('disabled');
                
    } else {
        $('#izmenaInput13').attr('disabled', true);
        
        //disable input
    }
});

$('#izbor-14').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#izmenaInput14').removeAttr('disabled');
                
    } else {
        $('#izmenaInput14').attr('disabled', true);
        
        //disable input
    }
});


$('#id180').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        console.log("pera");
                
    } else {
              console.log("laza");

        
        //disable input
    }
});




$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "Нема слике",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Измени");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});




$('textarea').keyup(function(){
    $(this).scrollTop(9999)
})


$("textarea").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#e-mail").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[\u0400-\u04FF]/gi);
   if (verified) {
  e.preventDefault();
   }
 });

$("#link1").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[\u0400-\u04FF]/gi);
   if (verified) {
  e.preventDefault();
   }
 });
$("#link2").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[\u0400-\u04FF]/gi);
   if (verified) {
  e.preventDefault();
   }
 });

$("#a41").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#a42").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#b41").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#b42").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#b43").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#b44").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#b45").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#b46").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#b47").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#b48").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#b49").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#b410").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d51").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d52").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d53").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d54").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d55").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d56").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d57").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d58").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d59").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d510").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d61").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d62").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d63").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d64").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d65").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d66").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d67").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d68").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d69").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d610").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d101").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d102").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d103").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d104").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d105").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d106").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d107").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d108").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d109").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d1010").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d111").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d112").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d113").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d114").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d115").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d116").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d117").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d118").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d119").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#d1110").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#đ3").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#đ6").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#đ7").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#đ8").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#đ12").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#đ17").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#e6").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#e13").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

$("#e14").keypress(function(e) {
   var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
   if (verified) {
  e.preventDefault();
   }
 });

// Funkcije za fajl input polja

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl1').popover('hide');
    // Hover befor close the preview
    $('.fajl1').hover(
        function () {
           $('.fajl1').popover('show');
        }, 
         function () {
           $('.fajl1').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl1').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl1-clear').click(function(){
        $('.fajl1').attr("data-content","").popover('hide');
        $('.fajl1-filename').val("");
        $('.fajl1-clear').hide();
        $('.fajl1-input input:file').val("");
        $(".fajl1-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl1-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl1-input-title").text("Измени");
            $(".fajl1-clear").show();
            $(".fajl1-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl1").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl2').popover('hide');
    // Hover befor close the preview
    $('.fajl2').hover(
        function () {
           $('.fajl2').popover('show');
        }, 
         function () {
           $('.fajl2').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl2').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl2-clear').click(function(){
        $('.fajl2').attr("data-content","").popover('hide');
        $('.fajl2-filename').val("");
        $('.fajl2-clear').hide();
        $('.fajl2-input input:file').val("");
        $(".fajl2-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl2-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl2-input-title").text("Измени");
            $(".fajl2-clear").show();
            $(".fajl2-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl2").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl3').popover('hide');
    // Hover befor close the preview
    $('.fajl3').hover(
        function () {
           $('.fajl3').popover('show');
        }, 
         function () {
           $('.fajl3').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl3').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl3-clear').click(function(){
        $('.fajl3').attr("data-content","").popover('hide');
        $('.fajl3-filename').val("");
        $('.fajl3-clear').hide();
        $('.fajl3-input input:file').val("");
        $(".fajl3-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl3-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl3-input-title").text("Измени");
            $(".fajl3-clear").show();
            $(".fajl3-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl3").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl4').popover('hide');
    // Hover befor close the preview
    $('.fajl4').hover(
        function () {
           $('.fajl4').popover('show');
        }, 
         function () {
           $('.fajl4').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl4').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl4-clear').click(function(){
        $('.fajl4').attr("data-content","").popover('hide');
        $('.fajl4-filename').val("");
        $('.fajl4-clear').hide();
        $('.fajl4-input input:file').val("");
        $(".fajl4-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl4-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl4-input-title").text("Измени");
            $(".fajl4-clear").show();
            $(".fajl4-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl4").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl5').popover('hide');
    // Hover befor close the preview
    $('.fajl5').hover(
        function () {
           $('.fajl5').popover('show');
        }, 
         function () {
           $('.fajl5').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl5').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl5-clear').click(function(){
        $('.fajl5').attr("data-content","").popover('hide');
        $('.fajl5-filename').val("");
        $('.fajl5-clear').hide();
        $('.fajl5-input input:file').val("");
        $(".fajl5-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl5-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl5-input-title").text("Измени");
            $(".fajl5-clear").show();
            $(".fajl5-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl5").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl6').popover('hide');
    // Hover befor close the preview
    $('.fajl6').hover(
        function () {
           $('.fajl6').popover('show');
        }, 
         function () {
           $('.fajl6').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl6').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl6-clear').click(function(){
        $('.fajl6').attr("data-content","").popover('hide');
        $('.fajl6-filename').val("");
        $('.fajl6-clear').hide();
        $('.fajl6-input input:file').val("");
        $(".fajl6-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl6-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl6-input-title").text("Измени");
            $(".fajl6-clear").show();
            $(".fajl6-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl6").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl7').popover('hide');
    // Hover befor close the preview
    $('.fajl7').hover(
        function () {
           $('.fajl7').popover('show');
        }, 
         function () {
           $('.fajl7').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl7').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl7-clear').click(function(){
        $('.fajl7').attr("data-content","").popover('hide');
        $('.fajl7-filename').val("");
        $('.fajl7-clear').hide();
        $('.fajl7-input input:file').val("");
        $(".fajl7-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl7-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl7-input-title").text("Измени");
            $(".fajl7-clear").show();
            $(".fajl7-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl7").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl8').popover('hide');
    // Hover befor close the preview
    $('.fajl8').hover(
        function () {
           $('.fajl8').popover('show');
        }, 
         function () {
           $('.fajl8').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl8').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl8-clear').click(function(){
        $('.fajl8').attr("data-content","").popover('hide');
        $('.fajl8-filename').val("");
        $('.fajl8-clear').hide();
        $('.fajl8-input input:file').val("");
        $(".fajl8-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl8-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl8-input-title").text("Измени");
            $(".fajl8-clear").show();
            $(".fajl8-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl8").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl9').popover('hide');
    // Hover befor close the preview
    $('.fajl9').hover(
        function () {
           $('.fajl9').popover('show');
        }, 
         function () {
           $('.fajl9').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl9').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl9-clear').click(function(){
        $('.fajl9').attr("data-content","").popover('hide');
        $('.fajl9-filename').val("");
        $('.fajl9-clear').hide();
        $('.fajl9-input input:file').val("");
        $(".fajl9-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl9-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl9-input-title").text("Измени");
            $(".fajl9-clear").show();
            $(".fajl9-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl9").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl10').popover('hide');
    // Hover befor close the preview
    $('.fajl10').hover(
        function () {
           $('.fajl10').popover('show');
        }, 
         function () {
           $('.fajl10').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl10').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl10-clear').click(function(){
        $('.fajl10').attr("data-content","").popover('hide');
        $('.fajl10-filename').val("");
        $('.fajl10-clear').hide();
        $('.fajl10-input input:file').val("");
        $(".fajl10-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl10-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl10-input-title").text("Измени");
            $(".fajl10-clear").show();
            $(".fajl10-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl10").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl11').popover('hide');
    // Hover befor close the preview
    $('.fajl11').hover(
        function () {
           $('.fajl11').popover('show');
        }, 
         function () {
           $('.fajl11').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl11').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl11-clear').click(function(){
        $('.fajl11').attr("data-content","").popover('hide');
        $('.fajl11-filename').val("");
        $('.fajl11-clear').hide();
        $('.fajl11-input input:file').val("");
        $(".fajl11-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl11-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl11-input-title").text("Измени");
            $(".fajl11-clear").show();
            $(".fajl11-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl11").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl12').popover('hide');
    // Hover befor close the preview
    $('.fajl12').hover(
        function () {
           $('.fajl12').popover('show');
        }, 
         function () {
           $('.fajl12').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl12').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl12-clear').click(function(){
        $('.fajl12').attr("data-content","").popover('hide');
        $('.fajl12-filename').val("");
        $('.fajl12-clear').hide();
        $('.fajl12-input input:file').val("");
        $(".fajl12-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl12-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl12-input-title").text("Измени");
            $(".fajl12-clear").show();
            $(".fajl12-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl12").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl13').popover('hide');
    // Hover befor close the preview
    $('.fajl13').hover(
        function () {
           $('.fajl13').popover('show');
        }, 
         function () {
           $('.fajl13').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl13').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl13-clear').click(function(){
        $('.fajl13').attr("data-content","").popover('hide');
        $('.fajl13-filename').val("");
        $('.fajl13-clear').hide();
        $('.fajl13-input input:file').val("");
        $(".fajl13-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl13-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl13-input-title").text("Измени");
            $(".fajl13-clear").show();
            $(".fajl13-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl13").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl14').popover('hide');
    // Hover befor close the preview
    $('.fajl14').hover(
        function () {
           $('.fajl14').popover('show');
        }, 
         function () {
           $('.fajl14').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl14').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl14-clear').click(function(){
        $('.fajl14').attr("data-content","").popover('hide');
        $('.fajl14-filename').val("");
        $('.fajl14-clear').hide();
        $('.fajl14-input input:file').val("");
        $(".fajl14-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl14-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl14-input-title").text("Измени");
            $(".fajl14-clear").show();
            $(".fajl14-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl14").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl15').popover('hide');
    // Hover befor close the preview
    $('.fajl15').hover(
        function () {
           $('.fajl15').popover('show');
        }, 
         function () {
           $('.fajl15').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl15').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl15-clear').click(function(){
        $('.fajl15').attr("data-content","").popover('hide');
        $('.fajl15-filename').val("");
        $('.fajl15-clear').hide();
        $('.fajl15-input input:file').val("");
        $(".fajl15-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl15-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl15-input-title").text("Измени");
            $(".fajl15-clear").show();
            $(".fajl15-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl15").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl16').popover('hide');
    // Hover befor close the preview
    $('.fajl16').hover(
        function () {
           $('.fajl16').popover('show');
        }, 
         function () {
           $('.fajl16').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl16').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl16-clear').click(function(){
        $('.fajl16').attr("data-content","").popover('hide');
        $('.fajl16-filename').val("");
        $('.fajl16-clear').hide();
        $('.fajl16-input input:file').val("");
        $(".fajl16-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl16-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl16-input-title").text("Измени");
            $(".fajl16-clear").show();
            $(".fajl16-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl16").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl17').popover('hide');
    // Hover befor close the preview
    $('.fajl17').hover(
        function () {
           $('.fajl17').popover('show');
        }, 
         function () {
           $('.fajl17').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl17').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl17-clear').click(function(){
        $('.fajl17').attr("data-content","").popover('hide');
        $('.fajl17-filename').val("");
        $('.fajl17-clear').hide();
        $('.fajl17-input input:file').val("");
        $(".fajl17-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl17-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl17-input-title").text("Измени");
            $(".fajl17-clear").show();
            $(".fajl17-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl17").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl18').popover('hide');
    // Hover befor close the preview
    $('.fajl18').hover(
        function () {
           $('.fajl18').popover('show');
        }, 
         function () {
           $('.fajl18').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl18').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl18-clear').click(function(){
        $('.fajl18').attr("data-content","").popover('hide');
        $('.fajl18-filename').val("");
        $('.fajl18-clear').hide();
        $('.fajl18-input input:file').val("");
        $(".fajl18-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl18-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl18-input-title").text("Измени");
            $(".fajl18-clear").show();
            $(".fajl18-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl18").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl19').popover('hide');
    // Hover befor close the preview
    $('.fajl19').hover(
        function () {
           $('.fajl19').popover('show');
        }, 
         function () {
           $('.fajl19').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl19').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl19-clear').click(function(){
        $('.fajl19').attr("data-content","").popover('hide');
        $('.fajl19-filename').val("");
        $('.fajl19-clear').hide();
        $('.fajl19-input input:file').val("");
        $(".fajl19-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl19-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl19-input-title").text("Измени");
            $(".fajl19-clear").show();
            $(".fajl19-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl19").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl20').popover('hide');
    // Hover befor close the preview
    $('.fajl20').hover(
        function () {
           $('.fajl20').popover('show');
        }, 
         function () {
           $('.fajl20').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl20').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl20-clear').click(function(){
        $('.fajl20').attr("data-content","").popover('hide');
        $('.fajl20-filename').val("");
        $('.fajl20-clear').hide();
        $('.fajl20-input input:file').val("");
        $(".fajl20-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl20-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl20-input-title").text("Измени");
            $(".fajl20-clear").show();
            $(".fajl20-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl20").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl21').popover('hide');
    // Hover befor close the preview
    $('.fajl21').hover(
        function () {
           $('.fajl21').popover('show');
        }, 
         function () {
           $('.fajl21').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl21').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl21-clear').click(function(){
        $('.fajl21').attr("data-content","").popover('hide');
        $('.fajl21-filename').val("");
        $('.fajl21-clear').hide();
        $('.fajl21-input input:file').val("");
        $(".fajl21-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl21-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl21-input-title").text("Измени");
            $(".fajl21-clear").show();
            $(".fajl21-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl21").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl22').popover('hide');
    // Hover befor close the preview
    $('.fajl22').hover(
        function () {
           $('.fajl22').popover('show');
        }, 
         function () {
           $('.fajl22').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl22').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl22-clear').click(function(){
        $('.fajl22').attr("data-content","").popover('hide');
        $('.fajl22-filename').val("");
        $('.fajl22-clear').hide();
        $('.fajl22-input input:file').val("");
        $(".fajl22-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl22-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl22-input-title").text("Измени");
            $(".fajl22-clear").show();
            $(".fajl22-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl22").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl23').popover('hide');
    // Hover befor close the preview
    $('.fajl23').hover(
        function () {
           $('.fajl23').popover('show');
        }, 
         function () {
           $('.fajl23').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl23').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl23-clear').click(function(){
        $('.fajl23').attr("data-content","").popover('hide');
        $('.fajl23-filename').val("");
        $('.fajl23-clear').hide();
        $('.fajl23-input input:file').val("");
        $(".fajl23-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl23-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl23-input-title").text("Измени");
            $(".fajl23-clear").show();
            $(".fajl23-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl23").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl24').popover('hide');
    // Hover befor close the preview
    $('.fajl24').hover(
        function () {
           $('.fajl24').popover('show');
        }, 
         function () {
           $('.fajl24').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl24').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl24-clear').click(function(){
        $('.fajl24').attr("data-content","").popover('hide');
        $('.fajl24-filename').val("");
        $('.fajl24-clear').hide();
        $('.fajl24-input input:file').val("");
        $(".fajl24-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl24-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl24-input-title").text("Измени");
            $(".fajl24-clear").show();
            $(".fajl24-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl24").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl25').popover('hide');
    // Hover befor close the preview
    $('.fajl25').hover(
        function () {
           $('.fajl25').popover('show');
        }, 
         function () {
           $('.fajl25').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl25').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl25-clear').click(function(){
        $('.fajl25').attr("data-content","").popover('hide');
        $('.fajl25-filename').val("");
        $('.fajl25-clear').hide();
        $('.fajl25-input input:file').val("");
        $(".fajl25-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl25-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl25-input-title").text("Измени");
            $(".fajl25-clear").show();
            $(".fajl25-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl25").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

$(document).on('click', '#close-preview1', function(){ 
    $('.fajl26').popover('hide');
    // Hover befor close the preview
    $('.fajl26').hover(
        function () {
           $('.fajl26').popover('show');
        }, 
         function () {
           $('.fajl26').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn1 = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview1',
        style: 'font-size: initial;',
    });
    closebtn1.attr("class","close pull-right");
    // Set the popover default content
    $('.fajl26').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn1)[0].outerHTML,
        content: "Није додат фајл.",
        placement:'bottom'
    });
    // Clear event
    $('.fajl26-clear').click(function(){
        $('.fajl26').attr("data-content","").popover('hide');
        $('.fajl26-filename').val("");
        $('.fajl26-clear').hide();
        $('.fajl26-input input:file').val("");
        $(".fajl26-input-title").text("Додај датотеку"); 
    }); 
    // Create the preview image
    $(".fajl26-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic1',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".fajl26-input-title").text("Измени");
            $(".fajl26-clear").show();
            $(".fajl26-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".fajl26").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});