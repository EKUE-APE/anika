console.log("salut")
$('#typereference').on('change',function ( ) {
    $.ajax({
        url: '/recuperernomRef-' + $('#typereference').val(),
        type: "get",
        success: function (data) {
            $('#name').empty();
            $('#name').append('<option value=""></option>')

            for (var i = 0; i < data.length; i++) {

                $('#name').append('<option value="'+data[i].id+'">'+data[i].nameref+'</option>')
            }

        }, 
        error: function (data) {
            console.log("erreur")
        },
    })
})