$(document).ready(function () {

    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).siblings('.custom-file-label').addClass('selected').html(fileName);
    });

    //ADD TO BASKET 
    $('.buy-btn').on('click', function (event) {
        event.preventDefault();

        $.ajax({
            url: '/basket',
            method: 'post',
            data: {
                '_token':     $(event.currentTarget).parent().children('[name="_token"]').val(),
                'product_id': $(event.currentTarget).parent().children('[name="product_id"]').val(),
                'quantity':   $(event.currentTarget).parent().children('[name="quantity"]').val()
            },
        }).done(function onDone (result) {
            $('#basket-count').html(result);
        });
    });
    /*/DELETE FROM BASKET
    $('.btn-delete').on('click', function (event) {
        event.preventDefault();

        $.ajax({
            url: '/basket/delete-from-basket',
            method: 'post',
            data: {
                '_token':     $(event.currentTarget).parent().children('[name="_token"]').val(),
                'product_id': $(event.currentTarget).parent().children('[name="id"]').val()
            },
        }).done(function onDone (result) {
            $('#basket-count').html(result);
        });
    });*/

    //SEARCH PRODUCTS

    $('[type="search"]').on('keyup', function(event){
        let word = $(event.currentTarget).val();

        $('#search-form').remove();

        if(word.length > 2){
            $.ajax({
                url:  '/search',
                data: {
                    word: word
                }
            }).done(function(result){
                var list = '';

                for (let i=0; i<result.length; i++){
                    list += '<li><a href="/' + result[i]['category_id'] + '/' + result[i]['id'] + '">' +
                            '<span class="search-article">' +  result[i]['article'] + '</span>' +
                            '<span class="search-price"> Price:'  +  result[i]['price'] + '</span>' +
                            '</li></a>';
                }

                let searchForm;

                if (list !== ''){
                    searchForm = $('<div id="search-form"><ul>' + list + '</ul></div>');
                    $('#search-box').append(searchForm);
                }

                /*if($(event.currentTarget).val() == '' || word.length < 3){
                    $('#search-form').remove();
                }*/
            });
        }
    });
});