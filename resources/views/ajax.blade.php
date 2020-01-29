<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" id="sample_form">
        {{ csrf_field() }}
        @method('POST')
        <input type="text" name="name" id="name">
        <input type="text" name="last_name" id="last_name">

        <input type="hidden" name="hidden_id" id="hidden_id">
        <input type="submit" name="action_button" id="action_button" value="Add">
    </form>

    <script>
        $('#sample_form').on('submit', function(event){
            event.preventDefault();
            // if($('#action').val() == 'Add'){
                $.ajax({
                    type: 'POST', 
                    url: '/store',
                    dataType: 'json',
                    data: new FormData(this),
                    success: function(data){

                    }
                })
            // }
        });
    </script>
</body>
</html>