$(document).ready(function(){
  console.log( "ready!" );
  $( "#form" ).submit(function( event ) {
    event.preventDefault();
    var lis=$("li").size();
    $.ajax({
      type:'post',
      url:'file/search.php',
      data:$('form').serialize(),
      success: function(data){
        var json=$.parseJSON(data);
        var count=1;
        $.each(json,function(key,value){
          key=key.toUpperCase();
          if(count<=lis){
            $("#"+count).html("<strong>"+key+"</strong>");
          }
          else{
            $("ul").append('<li class="list-group-item" id="'+count+'">'+"<strong>"+key+"</strong>"+"</li>");
          }
          count++;
        });
      }
    });
  });
});
