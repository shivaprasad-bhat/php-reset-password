<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style type="text/css">
        form {
            padding: 2%;
            margin: 2%;
            border: 1px solid black;
            border-radius: 10px;
        }

        input {
            margin: 10px;
            padding: 10px;
        }

        #reset-form {
            margin-top: 10%;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <section class="container">
        <article class="row">
            <div class="col">
                <div id="reset-form">
                    <form action="../backend/reset.php" method="post" onsubmit="return validatePassword()">
                        <h3>Reset Your Password</h3>
                        <div class="form-group">
                            <input class="form-control" type="password" name="new-password" id="new-password" placeholder="Enter New Password" required>
                            <input class="form-control" type="password" name="confirm-passowrd" id="confirm-passowrd" placeholder="Confirm New Password" required>
                            <input class="btn btn-success" type="submit" name="submit" value="Reset">
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </section>
    <script type="text/javascript">
        const validatePassword = () => {
            const password = document.getElementById('new-password').value;
            const confirmPassowrd = document.getElementById('confirm-passowrd').value;
            if (password === confirmPassowrd) {
                console.log('Validated');
                return true;
            } else {
                alert('Passwords must maacth. Please re enter');
                return false;
            }
        }
    </script>
</body>

</html>