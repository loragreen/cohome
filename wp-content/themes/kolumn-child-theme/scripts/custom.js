// function hideSumoMe(){
//   $( 'a[title="SumoMe"]' ).remove();
// }

// function fixSumoMe(){
//   $('.sumome-stylebufferbottom-shim').remove();
// }

$(document).ready(function(){

  var grid = $("#grid");

  grid.imagesLoaded(function(){
    grid.isotope({
      itemSelector:'.grid-item'
    });
  });

  $('.filters').on('click', 'button', function(){
    var filterValue = $(this).attr('data-filter');
    grid.isotope({ filter: filterValue });
    $(this).siblings('button').removeClass('selected');
    $(this).toggleClass('selected');
    ga('send', 'event', 'home filters', 'click', filterValue.toString());
  });

  $('#joinModal').on('shown.bs.modal', function () {
    
  });

  $('.btn[data-target="#joinModal"]').on('click', function(){
    var member = $(this).data('member');
    $('#mce-MMERGE5').val(member);
    console.log($('#mce-MMERGE5').val());
    if (member == "") {
      $('#subscribe-checkbox').remove();
    }
  });

  // $('.checkbox-input')[0].change(function(){
  //   console.log('something');
  //   var checkbox = $('.checkbox-input')[0];
  //   if (checkbox.checked) {
  //     var type = 'host';
  //   }
  //   else {
  //     var type = 'user';
  //   }
  //   member = member + type;
  //   $('#mce-MMERGE5').val(member);
  //   console.log($('#mce-MMERGE5').val());
  // });

  // setTimeout("hideSumoMe()", 1000);
  // setTimeout("fixSumoMe()", 2000);

  $("#mc-embedded-subscribe-form").submit(function(){
      var checkbox = $('.checkbox-input')[0];
      if (checkbox.checked) {
        var user = 'new host';
      }
      else {
        var user = 'new user';
      }
      ga('send', 'event', user, 'send form', location.toString());
  });

  // Home video player with custom and nice overlay

  $("#videoOverlay").bind("click", function(){
    $(this).fadeOut('slow');         
    $(this).promise().done(function(){
      videoUrl = $(this).attr("data-video-src");           
      $("#video").attr("src", videoUrl)         
      $("#videoIFrame").toggleClass('hidden');  

    });
  });       

});