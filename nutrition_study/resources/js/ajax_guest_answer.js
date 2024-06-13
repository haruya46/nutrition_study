export const ajax_guest_answer = function () {


    $("#guest-show-submit").click(function () {
        $.ajax({
            type: "post", //HTTP通信の種類
            url: '/homnutritionist/guest/show_answer/{quiz}', //通信したいURL
            dataType: 'json',
            data: {
                uid: 100,
                subject: "テストタイトル",
                from: "テストfrom",
                body: "テストbody",
            }
        })
            //通信が成功したとき
            .done((res) => {
                console.log(res)
            })
            //通信が失敗したとき
            .fail((error) => {
                console.log(error)
            })
    });

}