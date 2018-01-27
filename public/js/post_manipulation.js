//Redirect the user to the Show more info section
$('#table_user tbody').on('click', 'tr', function() {
    var post_id = $(this).attr("data-send");
    console.log(post_id);
    // console.log(user_id);
    // window.location = "/admin/user/view/" + user_id;
});