$(document).ready(function () {

    //first setup of tasks
    list();

    function counter() {
        var counter = $('#list li').length;
        $('#counter').text(counter);
    }
    function trash() {
        $('#trash').html('');
        $.ajax({
            url: 'modules/trash.php',
            type: "POST",
            data: {user:$('#User').val()},
            success: function (data) {
                data = JSON.parse(data);
                for (var id in data){
                    $('#trash').append($("" +
                        "<li>" +
                        "<div class='checkbox'>" +
                        "<label><input class='trash' id='"+data[id]['Task_ID']+"' type='checkbox' value='"+data[id]['Task_ID']+"'> "+data[id]['Task_Text']+" </label>" +
                        "</div>" +
                        " </li>"));
                }
            }
        });
    }

    function list() {
        $('#list').html('');
        $.ajax({
            url: 'modules/list.php',
            type: "POST",
            data: {user:$('#User').val()},
            success: function (data) {
                data = JSON.parse(data);
                for (var id in data){
                    $('#list').append($("" +
                        "<li>" +
                        "<div class='checkbox'>" +
                        "<label><input id='"+data[id]['Task_ID']+"' type='checkbox' value='"+data[id]['Task_ID']+"'> "+data[id]['Task_Text']+" </label>" +
                        "</div>" +
                        " </li>"));
                }
                counter();
                trash();
            }
        });
    }
    function create(user,text){
        
        $.ajax({
            url: 'modules/toAdd.php',
            type: "POST",
            data: ({user:user,text:text}),
            success: function () {
                list();
            }
        });

    }
    
    function done(doneItem) {
        $.ajax({
            url: 'modules/toTrash.php',
            type: "POST",
            data: ({user:$('#User').val(), task: doneItem}),
            success: function () {
                list();
            }
        });
    }

    function allDone() {

        $.ajax({
            url: 'modules/alldone.php',
            type: "POST",
            data: ({user:$('#User').val()}),
            success: function () {
                list();
            }
        });
    }
    
    function restAll() {
        $.ajax({
            url: 'modules/restAll.php',
            type: "POST",
            data: ({user:$('#User').val()}),
            success: function () {
                list();
            }
        });
    }
    
    function delAll() {
        $.ajax({
            url: 'modules/delAll.php',
            type: "POST",
            data: ({user:$('#User').val()}),
            success: function () {
                list();
            }
        });
    }
    
    function rest() {
        var arr = new Array();
        $('input:checked').each(function(){
            arr.push(this.value);
        });
        if (arr.length > 0) {
            $.ajax({
                url: 'modules/rest.php',
                type: "POST",
                data: ({user: $('#User').val(), arr: arr}),
                success: function () {
                    list();
                }
            });
        }
    }
    
    function del() {
        var arr = new Array();
        $('input:checked').each(function(){
            arr.push(this.value);
        });
        if (arr.length > 0) {
            $.ajax({
                url: 'modules/del.php',
                type: "POST",
                data: ({user: $('#User').val(), arr: arr}),
                success: function () {
                    list();
                }
            });
        }
    }

    // mark task as done
    $('#list').on('change','li input[type="checkbox"]',function(){
        if($(this).prop('checked')){
            var doneItem = $(this).val();
            done(doneItem);
        }
    });

    //create task
    $('#toAdd').on('click', function () {
        var user = $('#User').val();
        var text = $('#text_add').val();
        create(user,text);
        $('#text_add').val('');
    });

    //check all
    $('#checkAll').click(function () {
        allDone();
    });
    
    //restore all
    $('#restAll').on('click', function () {
        restAll();
    });
    
    //delete all
    $('#delAll').on('click', function () {
        delAll();
    });

    //rest task
    $('#rest').on('click', function () {
        rest();
    });
    
    //del task
    $('#del').on('click', function () {
        del();
    });



});