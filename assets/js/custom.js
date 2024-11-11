

$(document).ready(function () {

    $(document).on('click', '.cong_btn', function (e) {

        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();

        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 20) {
            value++;
            var qty = $(this).closest('.product_data').find('.input-qty').val(value);
        }

    });
    $(document).on('click', '.tru_btn', function (e) {

        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();

        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            var qty = $(this).closest('.product_data').find('.input-qty').val(value);
        }

    });
    $(document).on('click', '.AddtoCartbtn', function (e) {
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();
        var proid = $(this).val();


        $.ajax({
            method: "POST",
            url: "function/handlecart.php",
            data: {
                "prodid": proid,
                "prodqty": qty,
                "scope": "add"
            },
            success: function (response) {
                $("#message").html(response);

            }
        });

    });

    $(document).on('click', '.update_qty', function () {

        var qty = $(this).closest('.product_data').find('.input-qty').val();

        var prod_id = $(this).closest('.product_data').find('.prodId').val();


        $.ajax({
            method: "POST",
            url: "function/handlecart.php",
            data: {
                "prod_id": prod_id,
                "prod_qty": qty,
                "scope": "update"
            },
            success: function (response) {
                $("#message").html(response);

            }
        });


    });


    $(document).on('click', '.deleteItem', function () {
        var cart_id = $(this).val();
        // alert(cart_id);
        $.ajax({
            method: "POST",
            url: "function/handlecart.php",
            data: {
                "cart_id": cart_id,
                "scope": "delete"
            },
            success: function (response) {

                $("#message").html(response);
              
                $('#mycart').load(location.href + " #mycart"); // load lại cái id mycart

            }
        });


    });

    $(document).on('click', '.AddtoWishlist', function (e) {
        e.preventDefault();
        var prod_id = $(this).val();
        $.ajax({
            method: "POST",
            url: "function/handlecart.php",
            data: {
                "prod_id": prod_id,
                "scope": "wishlist"
            },
            success: function (response) {

                $("#message").html(response);
              

            }
        });


    });
    $(document).on('click', '.delete-wishlist', function () {
        var wishlist_id = $(this).val();
        $.ajax({
            method: "POST",
            url: "function/handlecart.php",
            data: {
                "wishlist_id": wishlist_id,
                "scope": "delete_wishlist"
            },
            success: function (response) {
                
                $("#message").html(response);            
              
                $('#wishlist').load(location.href + " #wishlist"); // load lại cái id mycart

            }
        });


    });
    


});