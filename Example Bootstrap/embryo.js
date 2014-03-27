

$(document).ready(function(){

   //Adjust height of overlay to fill screen when page loads
   $("#fade").css("height", $(document).height());

   //When the link that triggers the message is clicked fade in overlay/msgbox
   $(".alert").click(function(){
      $("#fade").fadeIn();
      return false;
   });

   //When the message box is closed, fade out
   $(".close").click(function(){
      $("#fade").fadeOut();
      return false;
   });

});

//Adjust height of overlay to fill screen when browser gets resized
$(window).bind("resize", function(){
   $("#fade").css("height", $(window).height());
});
// For the tabbed content


$('#myTab a[href="#aboutus"]').tab('show');


$('#myTab a[href="#monkey"]').tab('show');
$('#myTab a[href="#around"]').tab('show');
$('#myTab a[href="#contact"]').tab('show');

