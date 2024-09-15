<?php
// Predefined valid users
$validUsers = [
    [
        'email' => 'krish@gmail.com',
        'password' => '4545'
    ],
    [
        'email' => 'subran@gmail.com',
        'password' => '1234'
    ]
];

// Handle login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Flag to track valid login
    $isValid = false;

    // Validate credentials against predefined users
    foreach ($validUsers as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            $isValid = true;
            break;
        }
    }

    // Redirect based on validation result
    if ($isValid) {
        // Successful login, redirect to home page
        header('Location: home.html');
        exit;
    } else {
        // Invalid login, redirect with error
        header('Location: login.html?error=1');
        exit;
    }
}
?>
