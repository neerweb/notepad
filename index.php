<?php
include 'db.php'; // Include the database connection file
include 'header.php'; // Include the header file
// Save a new note
if (isset($_POST['save_note'])) {
    $noteText = $_POST['note_text'];
    
    $sql = "INSERT INTO Notes (NoteText) VALUES (?)";
    $params = array($noteText);

    $stmt = sqlsrv_query($conn, $sql, $params);

    if (!$stmt) {
        die(print_r(sqlsrv_errors(), true));
    } else {
        echo "Note saved successfully!";
    }
}

// Fetch all notes
$sql = "SELECT NoteID, NoteText, CreatedAt FROM Notes ORDER BY CreatedAt DESC";
$stmt = sqlsrv_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notepad App</title>
</head>
<body>
    <h1>Notepad App</h1>
    
    <!-- Form to create a new note -->
    <form method="POST" action="">
        <textarea name="note_text" rows="5" cols="30" placeholder="Write your note here..." required></textarea><br>
        <button type="submit" name="save_note">Save Note</button>
    </form>

    <h2>Saved Notes</h2>
    <ul>
        <?php
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            echo "<li><strong>{$row['CreatedAt']->format('Y-m-d H:i:s')}</strong>: " . htmlspecialchars($row['NoteText']) . "</li>";
        }
        ?>
    </ul>
</body>
    <?php include 'footer.php'; // Include the footer file ?>
</html>
