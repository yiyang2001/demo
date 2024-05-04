$(document).ready(function() {
    $("#fetch-data").click(function() {
        $.ajax({
            url: "server.php",
            type: "GET",
            success: function(data) {
                $("#result").html(data);
            },
            error: function() {
                $("#result").html("An error occurred.");
            }
        });
    });
});