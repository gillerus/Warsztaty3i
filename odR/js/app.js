$(function () {
    var ulList = $('ul.booksList');
    $.ajax({
        url: 'api/books.php',
        type: 'GET',
        dataType: 'json',
        success: function (result) {
            $.each(result, function (index, val) {
//                <li>
//                    <h4 class="bookTitle">TYTUŁ</h4>
//                    <div class="bookDescription"></div>
//                </li>
                var newLi = $('<li>');
                var newH4 = $('<h4 class="bookTitle" data-id="' + val.id + '">' + val.name + '</h4>');
                var newDescription = $('<div class="bookDescription"></div>');
                newLi.append(newH4, newDescription);
                ulList.append(newLi);
            });
        },
        error: function () {
            console.log('wystapil blad');
        }
    });
    $('ul.booksList').on('click', '.bookTitle', function () {
        var clickedH4 = this;
        var clickedId = clickedH4.dataset.id;
        $.ajax({
            url: 'api/books.php',
            type: 'GET',
            data: {id: clickedId},
            dataType: 'json',
            success: function (result) {
                $(clickedH4).next().html(result.description);
            },
            error: function () {
                console.log('wystapil blad');
            }
        });
    });
});