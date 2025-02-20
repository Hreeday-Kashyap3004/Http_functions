<?php
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    parse_str(file_get_contents("php://input"), $_DELETE);
    $id = $_DELETE['id'] ?? null;

    if ($id) {
        echo "Record with ID $id deleted successfully.";
    } else {
        echo "No ID provided for deletion.";
    }
} else {
?>
    <form method="POST" action="delete.php" onsubmit="sendDeleteRequest(event)">
        ID to Delete: <input type="text" id="delete_id" name="id"><br>
        <input type="submit" value="Delete">
    </form>

    <script>
        function sendDeleteRequest(event) {
            event.preventDefault();
            let id = document.getElementById("delete_id").value;

            fetch("delete.php", {
                method: "DELETE",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: "id=" + encodeURIComponent(id)
            })
            .then(response => response.text())
            .then(data => alert(data));
        }
    </script>
<?php
}
?>
