  $(document).ready(function(){
    $('.sidenav').sidenav();
    $('select').formSelect();
    $('.modal').modal();
  });
 
$('.triggerDescription').click(function(){
   var page = $(this).data('page');
   var cardNumb = $(this).data('card');
   console.log(page);
   console.log(cardNumb);


$.ajax({
    url: 'modal.php',
    type: 'POST',
    data: 'page=' + page + '&card=' +cardNumb,
    success: function(data) {
      $('.modal p').html(data);
    }
});
});