<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Realtime Chat App</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    </head>
    <body>
        <div class="wrapper">
          <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-text">This is an error message</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" placeholder="First name">
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last name">
                    </div>
                </div>
                <div class="field input">
                    <label>Email</label>
                    <input type="text" placeholder="Email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <i class="fas fa-eye"></i>
                    <input type="password" placeholder="Password">
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file">
                </div>
                <div class="field button">
                    <input type="submit"  value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="#">Login now</a></div>
          </section>
        </div>
        <script src="JS/pass-show-hide.js"></script>
        <script src="JS/signup.js"></script>
      </body>
</html>