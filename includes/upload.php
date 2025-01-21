<?php require_once 'config.php'; 
$fileName = 'example.pdf';
$fileType = 'application/pdf';
$filePath = 'path/to/example.pdf';
$fileSize = filesize($filePath);
$fileContent = file_get_contents($filePath);

// Insert the file into the database
$sql = "INSERT INTO files (name, file_type, file_size, file_content) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssis", $fileName, $fileType, $fileSize, $fileContent);
$stmt->execute();
$stmt->close();
$conn->close();
echo "File uploaded successfully!";
?>