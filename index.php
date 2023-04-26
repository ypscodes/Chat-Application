<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat App | Yash Singhvi</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <div class="wrapper card">
        <section class="form signup">
            <header>Realtime Chat Application</header>
            <form action="#">
                <div class="error-txt">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input class="abc" name="fname" type="text" placeholder="eg. John" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input class="abc" name="lname" type="text" placeholder="eg. Doe" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input class="abc" name="email" type="text" placeholder="eg. abc@example.com" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input class="abc" name="password" type="password" placeholder="Enter new password" required>
                    <i class="fa fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
                <span class="anim-border top"></span>
                <span class="anim-border right"></span>
                <span class="anim-border bottom"></span>
                <span class="anim-border left"></span>
            </form>
            <div class="link">Already signed up? <a href="#">Login Now</a></div>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>

</html>