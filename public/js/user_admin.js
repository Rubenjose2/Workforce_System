//This script is needed to open the Datatable on the user Section 

$('#table_user').DataTable({
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
});

//Redirect the user to the Show more info section
$('#table_user tbody').on('click', 'tr', function() {
    var user_id = $(this).attr("data-send");
    // console.log(user_id);
    window.location = "/admin/user/view/" + user_id;
});