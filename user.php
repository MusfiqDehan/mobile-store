<?php
$pageTitle = 'User Profile';

include 'includes/config.php';
include 'includes/header.php';

$user_id = $_SESSION['user_id'];

// Fetch the user data from the database
$user_query = mysqli_query($conn, "SELECT * FROM `user_info` WHERE id = '$user_id'") or die(mysqli_error($conn));
$user = mysqli_fetch_assoc($user_query);

// Male or Female avatar
$avatar = $user['gender'] === 'male' ? 'images/boyuser.webp' : 'images/girluser.png';
?>

<div class="user-profile">
    <img class="avatar" src="<?php echo $avatar; ?>" alt="User Avatar">
    <h2><?php echo $user['firstname'] . ' ' . $user['lastname']; ?></h2>
    <h3><?php echo $user['username']; ?></h3>
    <p><?php echo $user['email']; ?></p>
</div>

<?php include 'includes/footer.php'; ?>