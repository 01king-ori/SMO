<?php require_once 'config.php';
$id = $_GET['id'];
$sql = "SELECT name, file_type, file_content FROM files WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($fileName, $fileType, $fileContent);
$stmt->fetch();
$stmt->close();

if ($fileContent) {
    header("Content-Type: $fileType");
    header("Content-Disposition: attachment; filename=\"$fileName\"");
    echo $fileContent;
    exit;
} else {
    echo "File not found.";
}
?>