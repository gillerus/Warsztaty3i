//$(function () {
//    var divColors = $('#colors');
//    $.ajax({
////      url: 'http://date.jsontest.com/',
//        url: 'json.php',
//        type: 'GET',
//        dataType: 'json',
//        success: function (result) {
//            console.log(result);
//            $('#currentDate').text(result.date);
//            $.each(result, function (index, val) {
//                console.log(index, val);
//
//                var newH1 = $('<h1>' + index + '</h1>');
//                var newDiv = $('<div style="width: 200px; height: 50px; background-color:' + val + '"></div>');
//                divColors.append(newH1, newDiv);
//            });
//        },
//        //zmienne opcjonalne; pojawiają się jak pojawi się błąd;
//        error: function (xhr, status, errorThrown) {
//            console.log('wystapil blad');
//            console.log(xhr);
//            console.log(status);
//            console.log(errorThrown);
//        }
//
//    });
//});

$(function () {
    var divColors = $('#colors');
    $.ajax({
//      url: 'http://date.jsontest.com/',
        url: 'app/books.php',
        type: 'GET',
        dataType: 'json',
        success: function (result) {
            $.each(result, function (index, val) {
                var newLi = $("<li>");
               // var newH4 = $
            });
        },
        error: function (xhr, status, errorThrown) {
            console.log('wystąpił błąd');
        }

    });
});