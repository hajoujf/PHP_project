<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<a href="./../Main.php"><img src="../Images/navLogo.png" style="height:50px;margin-left:35px"></a>

    <div class="jumbotron">
        <h1 class="text-center">
            Admin
        </h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12">
                <form action="Submit.php" method="POST">
                <div class="form-group">
                        <label>AdminID</label>
                        <input type="text" class="form-control" name="AID" id="AID"></input>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="pname" id="name">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" id="email"></input>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="pass" id="pass" ></input>
                    </div>
                    <div class="form-group">
                        <label>BranchID</label>
                        <input type="text" class="form-control" name="branchid" id="branchid" ></input>
                    </div>
                    <input type="submit" name="submitForm" value="submit" class="btn btn-primary btn-block">
                </form>
            </div>
        </div>
    </div>
</body>