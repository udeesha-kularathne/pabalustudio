$(function () {
    $("#mass3").click(function () {
        $.ajax({
            type : 'get',
            url : 'login-page.html',
            dataType : 'html',
            success : function (content) {
                $("#mass").html(content)
            }
        })
    })
})