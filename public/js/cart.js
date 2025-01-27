
// Increment &decrement buttons in Menupage


$(document).ready( function ()
{

        $('.increment-btn').click(function (e) {
            e.preventDefault();
            var incre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(incre_value, 10);
            value = isNaN(value) ? 0 : value;
            if ( value < 10 )
            {
                value++;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }
        });

        $('.decrement-btn').click(function (e) {
            e.preventDefault();
            var decre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(decre_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value>1){
                value--;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }
        });

});
    


// Add to Cart Code

    $(document).ready(function () {
        $('.add-to-cart-btn').click(function (e) {
            e.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var product_id = $(this).closest('.cartpage').find('.product_id').val();
            var quantity = $(this).closest('.cartpage').find('.qty-input').val();

            $.ajax({
                url: "/add-to-cart",
                method: "POST",
                data: {
                    'quantity': quantity,
                    'product_id': product_id,
                },
                success: function (response) {
                    alertify.set('notifier','position','top-right');
                    alertify.success(response.status);
                },
            });
        });
    });



        // Update Cart Data
    // $(document).ready(function () {

    //     $('.changeQuantity').click(function (e) {
    //         e.preventDefault();

    //         var quantity = $(this).closest(".cartpage").find('.qty-input').val();
    //         var product_id = $(this).closest(".cartpage").find('.product_id').val();

    //         var data = {
    //             '_token': $('input[name=_token]').val(),
    //             'quantity':quantity,
    //             'product_id':product_id,
    //         };

    //         $.ajax({
    //             url: '/update-to-cart',
    //             type: 'POST',
    //             data: data,
    //             success: function (response) {
    //                 window.location.reload();
    //                 alertify.set('notifier','position','top-right');
    //                 alertify.success(response.status);
    //             }
    //         });
    //     });

    // });


