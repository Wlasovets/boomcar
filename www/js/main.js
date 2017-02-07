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
        data: {quantity: $('#itemCnt_' + itemId).val()},
        dataType: 'json',
        success: function (data) {

            if (data['success']) {
                $('#cartCntItems').html(data['cntItems']);
                $('#addCart_' + itemId).hide();
                $('#removeCart_' + itemId).show();

                //Изменение свойств страницы корзины при добавлении товара
                $('#productName_' + itemId).css('text-decoration', 'none');
                var itemRealPrice = Number($('#itemRealPrice_' + itemId).attr('value'));
                var totalCost = Number($('#totalCostId').attr('value'));
                totalCost = totalCost + itemRealPrice;
                totalCost = Math.round(totalCost * 1000) / 1000;
                $('#totalCostId').html(totalCost);
                $('#totalCostId').attr('value', totalCost);

                $('#productName_' + itemId).attr('deleted', false);
            }
        }
    });
}

/**
 * @param int itemId - ID товара
 * @return - в случае успеха обновятся данные корзины на странице
 */
function removeFromCart(itemId) {

    console.log("js - removeFromCart(" + itemId + ")");

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
                var itemRealPrice = Number($('#itemRealPrice_' + itemId).attr('value'));
                var totalCost = Number($('#totalCostId').attr('value'));
                totalCost = totalCost - itemRealPrice;
                totalCost = Math.round(totalCost * 1000) / 1000;
                $('#totalCostId').html(totalCost);
                $('#totalCostId').attr('value', totalCost);

                $('#productName_' + itemId).attr('deleted', true);
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

    // Вычесляем общую стоимость отдельного товара
    var newCnt = Number($('#itemCnt_' + itemId).val());
    var itemPrice = Number($('#itemPrice_' + itemId).attr('value'));
    var newRealPrice = (newCnt * (itemPrice * 100)) / 100;

    if ($('#productName_' + itemId).attr('deleted') === 'false') {

        // Вычесляем общую стоимость всех товаров
        var oldRealPrice = Number($('#itemRealPrice_' + itemId).attr('value'));
        var totalCost = Number($('#totalCostId').attr('value'));
        totalCost = totalCost - oldRealPrice + newRealPrice;
        totalCost = Math.round(totalCost * 1000) / 1000;

        // Изменение общей стоимости всех товаров
        $('#totalCostId').html(totalCost);
        $('#totalCostId').attr('value', totalCost);
    }

    // Измение стоимостьи отдельного товара
    $('#itemRealPrice_' + itemId).html(newRealPrice);
    $('#itemRealPrice_' + itemId).attr('value', newRealPrice);
}

/**
 * Получение данных из формы
 *
 * @param obj_form - объект формы
 */
function getData(obj_form) {

    var hData = {};

    $('input, textarea, select', obj_form).each(function () {
        if (this.name && this.name != '') {
            hData[this.name] = this.value;
            console.log('hData[' + this.name + '] = ' + hData[this.name]);
        }
    });

    return hData;
}

/**
 * Регистрация нового пользователя
 *
 */
function registerNewUser() {

    var postData = getData('#registerBox');

    $.ajax({
        type: 'POST',
        async: false,
        url: "/user/register/",
        data: postData,
        dataType: 'json',
        success: function (data) {
            if (data['success']) {

                $('#loginLink').hide();
                $('#logoutLink').show();
                $('#userLink').attr('href', '/user/');
                $('#userLink').html(data['userName']);
                $(location).attr('href', "/");
                //alert('Регистрация прошла успешно');
            } else {
                alert(data['message']);
            }
        }
    });
}

/**
 * Авторизация пользователя
 *
 * email - id поля email
 * pwd - id поля password
 */
function login(email, pwd) {

    var email = $('#' + email).val();
    var pwd = $('#' + pwd).val();

    var postData = "email=" + email + "&pwd=" + pwd;

    $.ajax({
        type: 'POST',
        async: false,
        url: "/user/login/",
        data: postData,
        dataType: 'json',
        success: function (data) {

            if (data['success']) {

                $('#loginLink').hide();
                $('#logoutLink').show();
                $('#userLink').attr('href', '/user/');
                //$('#userLink').html(data['userName']);
                $(location).attr('href', "/");

            } else {
                alert(data['message']);
            }
        }
    });
}