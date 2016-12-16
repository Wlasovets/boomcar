/**
 * @param int itemId - ID товара
 * @return - в случае успеха обновятся данные корзины на странице
 */
function addToCart(itemId) {

    console.log("js - addToCart()");

    $.ajax({
        type: 'POST',
        async: false,
        url: "/cart/addtocart/" + itemId + '/',
        dataType: 'json',
        success: function (data) {

            if (data['success']) {
                $('#cartCntItems').html(data['cntItems']);
                $('#addCart_' + itemId).hide();
                $('#removeCart_' + itemId).show();

                //Изменение свойств страницы корзины при добавлении товара
                $('#productName_' + itemId).css('text-decoration', 'none');
                var itemRealPrice = $('#itemRealPrice_' + itemId).attr('value');
                var totalCost = $('#totalCostId').attr('value');
                totalCost = Number(totalCost) + Number(itemRealPrice);
                $('#totalCostId').html(totalCost);
                $('#totalCostId').attr('value', totalCost);
            }
        }
    });
}

/**
 * @param int itemId - ID товара
 * @return - в случае успеха обновятся данные корзины на странице
 */
function removeFromCart(itemId) {

    console.log("js - removeFromCart("+ itemId +")");

    $.ajax({
        type: 'POST',
        async: false,
        url: "/cart/removefromcart/" + itemId + '/',
        dataType: 'json',
        success: function (data) {

            if (data['success']) {
                $('#cartCntItems').html(data['cntItems']);
                $('#addCart_' + itemId).show();
                $('#removeCart_' + itemId).hide();

                //Изменение свойств страницы корзины при удалении товара
                $('#productName_' + itemId).css('text-decoration', 'line-through');
                var itemRealPrice = $('#itemRealPrice_' + itemId).attr('value');
                var totalCost = $('#totalCostId').attr('value');
                totalCost = Number(totalCost) - Number(itemRealPrice);
                $('#totalCostId').html(totalCost);
                $('#totalCostId').attr('value', totalCost);
            }
        }
    });
}

/**
 * Подсчет стоимости покупаемого товара
 *
 * @param int itemId - ID продукта
 */
function conversionPrice(itemId) {

    var newCnt = $('#itemCnt_' + itemId).val();
    var itemPrice = $('#itemPrice_' + itemId).attr('value');
    var itemRealPrice = newCnt * itemPrice;

    $('#itemRealPrice_' + itemId).html(itemRealPrice);
    $('#itemRealPrice_' + itemId).attr('value', itemRealPrice);
}