<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToDo</title>

    <!-- jQuery -->
    <script   src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/add.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">

            <h3>Name: <? echo $user['User_Name']; ?></h3>

            <p><strong id="counter"></strong> Items Left</p>
            <h1>ToDo</h1>
            
            <div class="input-group">
                <input hidden id="User" value="<? echo $user['User_ID'] ?>">
                <input id="text_add" type="text" class="form-control" placeholder="Add todo" autofocus>
                    <span class="input-group-btn">
                        <button id="toAdd" class="btn btn-primary" type="button">Add!</button>
                    </span>
            </div>
            <br/>
            <div><p id="information"></p></div>
            <button id="checkAll" class="btn btn-success">Mark all as done</button>

            <hr>

            <ul class="list-unstyled" id="list">
                
            </ul>


        </div>

        <div class="col-md-3">
            <h1>Done</h1>
            <div class="btn-group btn-group-xs">
                <button id="rest" class="btn btn-success">Restore</button>
                <button id="del" class="btn btn-danger">Delete</button>
            </div>
            <br/>
            <br/>
            <div class="btn-group">
                <button id="restAll" class="btn btn-success">Restore All</button>
                <button id="delAll" class="btn btn-danger">Delete All</button>
            </div>
            <hr>
            <ul class="list-unstyled" id="trash">

            </ul>
        </div>

        <!--
        <div class="col-md-offset-3 col-md-6">
            <div class="todolist">
                <h1>Already Done</h1>
                <ul id="done-items" class="list-unstyled">
                    <li>Some item <button class="remove-item btn btn-default btn-xs pull-right"><span class="glyphicon glyphicon-remove"></span></button></li>
                </ul>
            </div>
        </div>
        -->

    </div>
</div>





</body>
</html>