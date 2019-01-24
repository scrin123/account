'use strict';

class Packs{

    send(url,data){
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function (data) {
                console.log(data);
            }
        });
    }



}







$(document).ready(function () {

    let packs= new Packs();
    $('.reprice').click(function () {
        packs.send('/web/index.php?r=packs%2Fpacks&type=1','asdasd');
        console.log('CONSOLE');
    });

});


