'use strict';
include('jquery.js');
class Packs{

    send(url,data){
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/server', true);
        xhr.onload = function () {
            console.log(xhr.send())
            // Запрос завершен. Здесь можно обрабатывать результат.
        };
        // $.ajax({
        //     type: "POST",
        //     url: url,
        //     data: data,
        //     success: function (data) {
        //         console.log(data);
        //     }
        // });
    }



}







$(document).ready(function () {

    let packs= new Packs();
    $('.reprice').click(function () {
        packs.send('/web/proccesing.php?r=packs%2Fpacks&type=1','asdasd');
        console.log('CONSOLE');
    });

});


