<!DOCTYPE html>
<html>
<head>
    <title>Datepicker</title>

   
    <!-- Jquery -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Datepicker Files -->
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker3.css')}}">
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker.standalone.css')}}">
    <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>
    <!-- Languaje -->
    <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>

</head>
<body>
<div class="container">
        <label for="date">Fecha</label>
        <input type="text" class="form-control datepicker2" name="date">
    <div class="content">

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-4 col-md-offset-4">

                    <form action="/test/save" method="post">
                       
                      
                        <button type="submit" class="btn btn-default btn-primary">Enviar</button>
                    </form>
                  
                </div>
            </div>
        </div>

    </div>
</div>
<script>
        $('.datepicker2').datepicker({
            format: "yyyy/mm/dd",
            language: "es",
            autoclose: true
        });
    </script>
</body>
</html>