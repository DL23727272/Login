<!DOCTYPE html>
<html>

<head>
    <title>Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    
    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <style>
    html, body {
        height: 100%;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    </style>
</head>

<body>
    <div class="modal fade" id="twin" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Log in</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form" action="signupProcess.php" method="post">
                        <h1>Student Form</h1>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="contact1" name="email" type="email" class="form-control"
                                autofocus placeholder="Enter an email" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name1" name="fname" type="text" class="form-control" autofocus
                                required>
                        </div>

                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input id="pass" name="password" type="password" class="form-control" autofocus
                                placeholder="Enter a Password" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="send" id="Tsave">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

   
    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#twin">Sign-Up</button>
    </div>

</body>

</html>
