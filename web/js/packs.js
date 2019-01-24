'use strict';

class Packs{

    send(url,data){
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function (data) {
                console.log(data);
            },
        });
    }



}







$(document).ready(function () {


    $('.reprice').click(function () {
        console.log('CONSOLE');
    });

});


