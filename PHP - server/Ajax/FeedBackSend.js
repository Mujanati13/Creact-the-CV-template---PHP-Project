var msg = "";
$('#btn-send').click(function (e) {
    console.log('cliked');
    e.preventDefault();
    msg = $('.masg').val()
});

$('#btn-sends').click(function (e) {
    e.preventDefault();
    let email = $('.email').val()
    let data = 'msg' + msg + 'email' + email;
    $.ajax({
        type: "GET",
        url: "/Creact-the-CV-template---PHP-Project/PHP%20-%20server/Ajax/feedback.php?email=" + email + "&" + "msg=" + msg,
        data: data,
        cache: false,
        success: function (date) {
            console.log(date);
        }
    });

    setTimeout(() => {
        $('.thanks-div').css('display', 'none');
        $('.question-side-client p').html('You have already answer us, thanks 🖤');
        $('.question-side-client p').css('color' , 'green');
    }, 5000)
});

