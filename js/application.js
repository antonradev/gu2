/**
 * Updating total XP number
 * 
 * The XP number is auto update without page refresh.
 */

// Removing the default DOM element with the PHP generated value
setTimeout(function() {
  $('span.static-xp-number').fadeOut();
}, 10000);

/* Replacing the default DOM element with the PHP generated value with
 * new value, extracted from JSON formated PHP page.
 * The element reloads using jQuery timer. 
 * Quick flashing highlight effect appears when value if refreshed.
 */

setInterval(function() {
  $.get("http://iko.gotobg.net/~mynshost/xp2/Data.php", function(data) {
    $('.total-xp .number').addClass('highlighted');
    setTimeout(function() {
      $('.total-xp .number').removeClass('highlighted');
    }, 1500);
    $(".total-xp .number").text(data.total_xp_data);

  })
          .fail(function() {
    $(".total-xp .number").text("Loading...");
  });


}, 10000);


$(document).ready(function() {

  /**
   * Refreshes counts update
   * 
   * PHP generates an specific element that flashes and small message
   * appears for a while 
   */
  if ($(".mastered-views-leveling").length > 0) {
    $(".additional-info .mastered-views").append("<div class='masterview-levelup'><span>Master View + 1</span></div>");
    $(".number.mastered-views").addClass("highlighted");
    setTimeout(function() {
      $('.masterview-levelup').animate({
        marginTop: '-90px',
        opacity: '0'
      }, 1000); // End animate
    }, 1000); // End timeout counter

    // Removing the element from the DOM. It is not needed anymore for now.
    setTimeout(function() {
      $(".masterview-levelup").remove();
      $(".number.mastered-views").removeClass("highlighted");
    }, 2000); // End timeout counter

  }


  /**
   * Modal Window
   * 
   * Open, Close with button and ESC key
   * 
   */

  // Opens modal window
  $(".profile").delegate('.open-modal', 'click', function(e) {
    $('.modal').animate({
      marginTop: '90px',
      opacity: '1'
    }, 500);
    $("body").append("<div class='overlay'></div>");
  });

// Close modal window button
  $(".modal").delegate('.close-modal span', 'click', function(e) {
    $('.modal').animate({
      marginTop: '-690px',
      opacity: '0'
    }, 500);
    $(".overlay").remove();
  });

  /* Hides modal window when escape key is pressed */
  $(document).keydown(function(e) {
    if (e.keyCode === 27) {
      $('.modal').animate({
        marginTop: '-690px',
        opacity: '0'
      }, 500);
      $(".overlay").remove();
    }
  });





}); /* End document ready */


