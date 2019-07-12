$(document).ready(function () {

    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).siblings('.custom-file-label').addClass('selected').html(fileName);
    });
/*
    $('.buy-btn').on('click', function (event) {
        event.preventDefault();

        $.ajax({
            url: '/basket',
            method: 'post',
            data: {
                '_token':     $('[name="_token"]').val(),
                'product_id': $('[name="product_id"]').val(),
                'quantity':   $('[name="quantity"]').val()
            },
        }).done(function onDone (result) {
            $('#basket-count').html(result);
        });
    });*/
});