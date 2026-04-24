<?php
session_start();

// Initialize or increment the page view count
if (!isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] = 1;
} else {
    $_SESSION['page_views']++;
}
$count = $_SESSION['page_views'];

// mam code
// if(isset($_SESSION['c'])){
//     $_SESSION['c']++;
// }else{
//     $_SESSION['c']=1;
// }
// echo "Page visit count: ",$_SESSION['c'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page View Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: #f0f0f0;
        }
        .counter-box {
            background: #fff;
            padding: 40px 60px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            text-align: center;
        }
        .counter-box h1 {
            margin: 0 0 10px;
            color: #333;
        }
        .count {
            font-size: 3rem;
            font-weight: bold;
            color: #4a90d9;
        }
        p {
            color: #666;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="counter-box">
        <h1>Page View Counter</h1>
        <div class="count"><?php echo $count; ?></div>
        <p>Refresh the page to increment the counter.</p>
    </div>
</body>
</html>
