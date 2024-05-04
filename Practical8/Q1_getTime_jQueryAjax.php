<html>

<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
      $("input[name='username']").change(function () {
        $.get(
          "serverTime.php",
          function(data, status) {
            if (status == "success"){
              $("input[name='time']").val(data);
            }
            else{
              alert("Error retrieving server time.");

            }
        });
      });
    });
  </script>
</head>

<body>
  <h3>Question 1: Get Time</h3>

  <form name="Question1">
    Name: <input type="text" name="username" /><br />
    Time: <input type="text" name="time" />
  </form>
</body>

</html>