
$('#data-bf').click(function () {
  sendPOST("add_favorite", { productId: $(this).attr('data-product') });
});

$('#data-bc').click(function () {
  sendPOST("add_cart", { productId: $(this).attr('data-product') });
});

function sendPOST(action, params) {
  $.ajax({
    method: 'POST',
    url: '/services.php',
    data: {
      action: action,
      params: JSON.stringify(params)
    },
    success: function (response) {
      console.log(JSON.parse(response));
    }
  });
}