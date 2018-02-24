String.prototype.permalink=function (){
  return this.toString().trim().toLocaleLowerCase().replace(/\s/g,'-');
};

$('.origin-text').on('focusout',function(){
  $('.target-text').val( $(this).val().permalink() );
});

$('.add-to-cart-btn').on('click',function(e){
  e.preventDefault();
  //var id=$(this).data('id');
  
  $.ajax({
    url: BASE_URL+"shop/add-to-cart",
    type: "GET",
    dataType: "html",
    data: { id:$(this).data('id') },
    success: function (response) {
      location.reload();
    }
    });
});

$('div.sm-box').delay(3000).slideUp();

$('.update-cart').on('click',function(){
  $.ajax({
    url: BASE_URL+"shop/update-cart",
    type: "GET",
    dataType: "html",
    data: {id:$(this).data('id'),op:$(this).val()},
    success: function (response) {
      location.reload();
    }
    
  });
});

$('.search').on('keyup', function () {

    var userText = $(this).val().trim();
    
    if (userText.length > 0) {
      
      $.ajax({
        url:  BASE_URL+"shop/autocomplete",
        type: "GET",
        dataType: "json",
        data: {search: userText},
        success: function (response) {
          
          if (response) {

            var availableTags = [];

            $.each(response, function (key, value) {
              availableTags.push(value.title);
            });
            //console.log(availableTags);

            $('#searchField').autocomplete({
              source: availableTags,
              open: function(event,ui){
                $(".ui-autocomplete").css("z-index",2000);
                 $(".ui-autocomplete li").css("z-index",2000);
              },
              select: function (event, ui) {
                $('.submit-btn').click();
              }
            });

          }

        }
      });
    }

  });


  

