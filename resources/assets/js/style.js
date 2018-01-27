// For the alerts auto dismist
$("#success-alert").fadeTo(500, 500).slideUp(500, function() {
    $("#success-alert").slideUp(500);
});


//Modal post manipulation
$(".click-row").click(function(event) {
    $post_id = $(this).attr("data-send");
    $.ajax({
        method: 'GET',
        url: '/admin/postshow',
        data: {
            'id': $post_id
        },
        success: function(response) {
            $("#button_accept").attr("data-send", response.id);
            $('#myModalLabel').empty().append(response.subject);
            $('.modal-body').empty().append(response.body);
            $('#myModal').modal({ backdrop: "static" });
            console.log(response);

        }
    })
});

$('#button_accept').on('click', function() {
    $post_id = $(this).attr("data-send");
    $.ajax({
        method: 'GET',
        url: 'updatepost',
        data: {
            'id': $post_id
        },
        success: function(response) {
            $('#post-status').replaceWith('<td class="read-post">Read</td>');
            console.log(response);
        }
    })

})