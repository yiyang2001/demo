<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function showCarModel(str) {
            $.ajax({
                url: "getCars.php",
                type: "GET",
                data: { q: str },
                success: function(response) {
                    $("#model").html(response);
                },
                error: function() {
                    alert("Error fetching car models.");
                }
            });
        }
    </script>
</head>
<body>
    <form id="carForm" name="carForm">
        <fieldset>
            <legend>Choose Your Car</legend>

            <label for="make">Make:</label>
            <select id="make" onchange="showCarModel(this.value)">
                <option value="">Select make</option>
                <option value="Ford">Ford</option>
                <option value="Honda">Honda</option>
                <option value="Mazda">Mazda</option>
                <option value="dummy">Dummy cars</option>
            </select>
            <br><br>
            <label for="model">Model:</label>
            <select id="model">
                <option value="">Select model</option>
            </select>
        </fieldset>
    </form>
</body>
</html>
