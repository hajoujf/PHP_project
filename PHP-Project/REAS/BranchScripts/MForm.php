<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<a href="./../Main.php"><img src="../Images/navLogo.png" style="height:50px;margin-left:35px"></a>

    <div class="jumbotron">
        <h1 class="text-center">
            Branch
        </h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12">
                <form action="Submit.php" method="POST">
                <div class="form-group">
                        <label>BranchID</label>
                        <input type="text" class="form-control" name="BID" id="BID"></input>
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
                        <label>Address</label>
                        <input type="text" class="form-control" name="Address" id="Address"></input>
                    </div>
                    <div class="form-group">
                        <label>Opening Hours</label>
                        <input type="time" class="form-control" name="open" id="open" ></input>
                    </div>
                    <div class="form-group">
                        <label>Closing Hours</label>
                        <input type="time" class="form-control" name="close" id="close" ></input>
                    </div>
                    <div class="form-group">
                        <label>Admin ID</label>
                        <input type="text" class="form-control" name="AID" id="AID" ></input>
                    </div>
                    <input type="submit" name="submitForm" value="submit" class="btn btn-primary btn-block">
                </form>
            </div>
        </div>
    </div>
</body>