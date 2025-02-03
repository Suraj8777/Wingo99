<?php
// Function to list all files and directories in the current directory
function listFilesAndDirectories($dir) {
    if ($handle = opendir($dir)) {
        echo "<ul>";
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                $fullPath = $dir . '/' . $entry;
                if (is_dir($fullPath)) {
                    echo "<li><input type='checkbox' name='delete[]' value='" . htmlspecialchars($fullPath) . "' class='file-checkbox'> [DIR] $entry
                    <a href='?rename=" . urlencode($fullPath) . "'>Rename</a></li>";
                    echo "<ul>";
                    listFilesAndDirectories($fullPath);
                    echo "</ul>";
                } else {
                    echo "<li><input type='checkbox' name='delete[]' value='" . htmlspecialchars($fullPath) . "' class='file-checkbox'> $entry
                    <a href='?rename=" . urlencode($fullPath) . "'>Rename</a></li>";
                }
            }
        }
        echo "</ul>";
        closedir($handle);
    }
}

// Function to delete a file or directory
function deleteFileOrDirectory($path) {
    if (is_dir($path)) {
        $files = array_diff(scandir($path), array('.','..'));
        foreach ($files as $file) {
            deleteFileOrDirectory($path . '/' . $file);
        }
        rmdir($path);
        echo "<p>Directory '$path' deleted.</p>";
    } elseif (file_exists($path)) {
        unlink($path);
        echo "<p>File '$path' deleted.</p>";
    } else {
        echo "<p>'$path' does not exist.</p>";
    }
}

// Function to rename a file or directory
function renameFileOrDirectory($oldName, $newName) {
    if (file_exists($oldName)) {
        rename($oldName, $newName);
        echo "<p>'$oldName' renamed to '$newName'.</p>";
    } else {
        echo "<p>'$oldName' does not exist.</p>";
    }
}

// Handle file or directory deletions
if (isset($_POST['delete'])) {
    foreach ($_POST['delete'] as $path) {
        deleteFileOrDirectory($path);
    }
}

// Handle file or directory renaming
if (isset($_GET['rename']) && isset($_POST['new_name'])) {
    renameFileOrDirectory($_GET['rename'], $_POST['new_name']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Soumya Gamers X File and Directory Manager</title>
    <script>
        function toggleSelectAll(source) {
            checkboxes = document.getElementsByClassName('file-checkbox');
            for(var i=0, n=checkboxes.length;i<n;i++) {
                checkboxes[i].checked = source.checked;
            }
        }
    </script>
</head>
<body>
    <h1>Soumya Gamer X File and Directory Manager</h1>
    <form method="post" action="">
        <input type="checkbox" onclick="toggleSelectAll(this)"> Select All<br><br>
        <?php
        // List files and directories in the current directory
        listFilesAndDirectories(".");
        ?>
        <input type="submit" value="Delete Selected">
    </form>

    <?php
    // Show rename form if a file or directory is selected for renaming
    if (isset($_GET['rename'])) {
        echo "<form method='post' action=''>
            <input type='hidden' name='rename' value='" . htmlspecialchars($_GET['rename']) . "'>
            <label for='new_name'>Rename '" . htmlspecialchars($_GET['rename']) . "' to: </label>
            <input type='text' name='new_name' id='new_name'>
            <input type='submit' value='Rename'>
        </form>";
    }
    ?>
</body>
</html>
