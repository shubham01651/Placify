<?php
session_start(); // Required to access the session
session_unset(); // Optional: clears all session variables
session_destroy(); // Destroys the session

// Optional: ensure the session cookie is deleted
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Redirect to login page or homepage
header("Location: index.php"); // change as needed
exit();
