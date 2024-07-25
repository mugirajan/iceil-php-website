<?php
header('Content-Type: text/plain'); // Tells the browser to expect plain text

// Define the rules for robots here
echo "User-agent: *\n"; // Applies to all robots
echo "Disallow: /private/\n"; // Do not allow robots to visit the /private/ directory
echo "Allow: /public/\n"; // Allow robots to visit the /public/ directory
?>
