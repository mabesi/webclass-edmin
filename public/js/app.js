$( document ).ready(function() {

  $(".delete-button").on("click", function() {
    return deleteItem(this);
  });

});

function deleteItem(e) {

      var token = $(e).data('token');
      var resource = ($(e).data('resource') == 'True');
      var previous = $(e).data('previous');
      var url = $(e).attr('href');

      if (confirm('Confirma a exclusão deste item?')==true){
        $.ajax({
          type: "post",
          url: url,
          data: {_method: 'delete',_token: token}
        })
        .done(function(response){
          console.log(response.msg);
            if (response.success){
              alert(response.msg);
              if (resource){
                $(location).attr('href',previous);
              } else {
                location.reload();
              }
            } else {
              alert(response.msg);
            }
        });
      }
      return false;
}
