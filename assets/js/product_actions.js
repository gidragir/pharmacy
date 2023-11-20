
$('#data-bf').click(function () {
  var productId = $(this).attr('data-product');
  $.ajax({
    method: 'POST',
    url: 'product_actions.php',
    data: {
      action: "add_favorite",
      ajax: true,
      product_id: productId
    },
    success: function (response) {
      var jsonData = JSON.parse(response);
      console.log(jsonData);
    }
  });
});