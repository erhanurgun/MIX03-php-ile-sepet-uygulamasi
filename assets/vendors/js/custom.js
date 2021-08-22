/* jQuery Function */
const cardItem = (btnClass, url, dataP, logical) => {
  $(btnClass).click(function () {
    let data = {
      p: dataP,
      product_id: $(this).attr("product-id"),
    };
    $.post(url, data, function (response) {
      if (logical) {
        $("#cart-count").text(response);
      } else {
        window.location.reload();
      }
    });
  });
};

/* Query DB */
let url = "assets/lib/query-cart.php";
cardItem(".btnAddToCart", url, "addToCart", true);
cardItem(".btnRemoveFromCart", url, "removeFromCart", false);
cardItem(".btnRemoveAllCart", url, "removeAllCart", false);
