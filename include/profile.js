$('#delete_history').on('click', function () {
    var email = $("#loggd_in_email").text();
    $.ajax({
        url: 'include/rest/delete_history.php',
        type: 'GET',
        data: "email=" + email,
        async: true,
        cache: false,
        contentType: false,
        processData: false,
        success: function (returndata) {
            // alert("Done");         //for alerting the response from server
            $("#history_div").empty()
            location.reload();
        },
        error: function () {
            alert("Something went wrong ");
        }
    });
    return false;

});


$('#remove_fav').on('click', function () {
    var email = $("#loggd_in_email").text();
    var url = $("#url_song").text();
    $.ajax({
        url: 'include/rest/remove_fav.php',
        type: 'GET',
        data: "email=" + email + "&url=" + url,
        async: true,
        cache: false,
        contentType: false,
        processData: false,
        success: function (returndata) {
            // alert("Song Removed");
            // alert(returndata);
            location.reload();
        },
        error: function () {
            alert("Something went wrong ");
        }
    });
    return false;

});

$('#clear_fav_list').on('click', function () {
    var email = $("#loggd_in_email").text();
      console.log("abhi")
      console.log(email);
    $.ajax({
        url: 'include/rest/clear_fav.php',
        type: 'GET',
        data: "email=" + email,
        async: true,
        cache: false,
        contentType: false,
        processData: false,
        success: function (returndata) {
            // alert(returndata);
            location.reload();
        },
        error: function () {
            alert("Something went wrong ");
        }
    });
    return false;

});


$('#empty_cart').on('click', function () {
  console.log("abhi")
    var email = $("#loggd_in_email").text();
    $.ajax({
        url: 'include/rest/clear_cart.php',
        type: 'GET',
        data: "email=" + email,
        async: true,
        cache: false,
        contentType: false,
        processData: false,
        success: function (returndata) {
            // alert(returndata);
            location.reload();
        },
        error: function () {
            alert("Something went wrong ");
        }
    });
    return false;

});
