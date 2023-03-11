<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF - 8">
    <meta http-equiv="X-UA-Compatible" content="IE = edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <title> </title>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/css/bootstrap.min.css' />
</head>

<body class="bg-dark">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'> </script>
    <script>
    $(document).ready(function() {
        $(".add_item_btn").click(function(e) {
            e.preventDefault();
            $("#show_item").prepend(
                '<div class="row"><div class=" col-md-3 mb-1 "><input type="number" name="mark[]" class="form-control"placeholder="Mark Obtained"></div><div class=" col-md-3 mb-1 "><input type="number" name="total[]" class="form-control" placeholder="Total Mark"></div><div class=" col-md-3 mb-3 "><select name="bt[]" class="form-control"><option value="">select</option><option value="Part-A">k1</option><option value="Part-B">k2</option><option value="Part-C">k3</option></select></div><div class=" col-md-3 mb-3 "><button class="btn btn-danger remove_item_btn "> Remove </button></div></div>'
            );
        });
    });

    $(document).on('click ', '.remove_item_btn ', function(e) {
        e.preventDefault();
        let row_item = $(this).parent().parent();
        $(row_item).remove();
    });

        $("#add_form ").submit(function(e) {
        e.preventDefault(); 
        $("#add_btn").val('Adding ... '); 
        $.ajax({
        url: 'action.php',
        method: 'post ',
        data: $(this).serialize(),
        success: function(response) {
            console.log(response);
        }
    });
    });
    </script>
    <div class="container">
        <div class="row my-8">
            <div class="col-lg-10 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h2>Mark</h2>
                    </div>
                    <div class="card-body p-3">
                        <h5>Part-A</h5>
                        <form action="#" method="POST" id="add_form">
                            <div id="show_item">
                                <br>
                                <div class="row">
                                    <div class=" col-md-3 mb-3 ">
                                        <input type="number" name="mark[]" class="form-control"
                                            placeholder="Mark Obtained">
                                    </div>
                                    <div class=" col-md-3 mb-3 ">
                                        <input type="number" name="total[]" class="form-control"
                                            placeholder="Total Mark">
                                    </div>
                                    <div class=" col-md-3 mb-3 ">
                                        <select name="bt[]" class="form-control">
                                            <option value="">select</option>
                                            <option value="Part-A">k1</option>
                                            <option value="Part-B">k2</option>
                                            <option value="Part-C">k3</option>
                                        </select>
                                    </div>
                                    <div class=" col-md-3 mb-3 ">
                                        <button class="btn btn-success add_item_btn "> Add </button>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div>
                                <input type="submit" value=" Submit " class=" btn btn-danger w-25 " id=" add_btn ">
                                <input type="submit" value=" Next " class=" btn btn-danger w-25 ">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <body>

</html>