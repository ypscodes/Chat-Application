<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat App | Yash Singhvi</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper card">
        <section class="form login">
            <header>Realtime Chat Application</header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="field input">
                    <label>Email Address</label>
                    <input class="abc" class="details" name="email" type="text" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input class="abc" class="details" name="password" type="password" placeholder="Enter your password">
                    <i class="fa fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
                <span class="anim-border top"></span>
                <span class="anim-border right"></span>
                <span class="anim-border bottom"></span>
                <span class="anim-border left"></span>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>

</html>