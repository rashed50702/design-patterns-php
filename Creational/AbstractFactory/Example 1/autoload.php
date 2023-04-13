<?php
function my_autoload($class_name)
{
    // Define the base directory where your PHP files are located
    $base_dir = __DIR__ . '/';

    // Define an array of possible file extensions
    $extensions = array('.php');

    // Loop through the possible file extensions
    foreach ($extensions as $extension) {
        // Check if the class file exists in the base directory
        if (file_exists($base_dir . $class_name . $extension)) {
            // If it does, include the class file
            include $base_dir . $class_name . $extension;
            return;
        }

        // Use RecursiveDirectoryIterator to loop through all files and directories
        $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($base_dir));
        foreach ($iterator as $file) {
            if ($file->isDir()) {
                continue;
            }

            // Check if the file matches the class name with the current extension
            if (
                preg_match('/\\' . $extension . '$/', $file->getPathname()) &&
                preg_match('/' . preg_quote($class_name, '/') . '$/', $file->getBasename($extension))
            ) {
                // If it does, include the class file
                include $file->getPathname();
                return;
            }
        }
    }
}

// Register your autoload function
spl_autoload_register('my_autoload');
