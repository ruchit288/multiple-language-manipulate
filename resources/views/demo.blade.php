<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #000;
            font-family: 'Raleway', sans-serif;
            font-weight: 600;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }
        ul {
            list-style: none;
            background: #f8f9fa;
            width: 20%;
            display: block;
            margin: 0 auto;
            padding: 20px;
        }
        /*li {*/
            /*text-align: center;*/
        /*}*/
        .list-dropbox {
            margin: 5%;
        }
        h2 {
            color: #f4645f;
            font-size: 30px;
            font-weight: 600;
            margin-top: 10%;
        }
        h3 {
            color:#f4645f;
            font-weight: 600;
            font-size: 20px;
        }
        lable {
            padding-right: 20px;
            color: #f4645f;
            font-size: 20px;
            font-weight: 600;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        select {
            padding: 10px;
            background: transparent;
            border-color: #f4645f;
            color: black;
            font-weight:600;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <h2 class="text-center">Multiple Language Manipulate Demo</h2>
            <div class="list-dropbox text-center">
                <lable>{{labelManipulate('magic-label','current_language')}} : {{$keySpecificValue}}</lable>
            </div>

            <div class="list-dropbox text-center">
                <lable>{{labelManipulate('magic-label','select_drop_down')}} :</lable>

                    <select class="mdb-select md-form">
                        <option value="" disabled selected>{{ labelManipulate('magic-label','choose_your_option') }}</option>
                        @if(count($industrySectors))
                            @foreach($industrySectors as $key => $value)
                                <option value="{{$key}}">{{ $value }}</option>
                            @endforeach
                        @endif
                    </select>

            </div>
            <h3 class="text-center">{{ labelManipulate('magic-label','industry_sector') }}</h3>
            <ul>
                @if(count($industrySectors))
                    @foreach($industrySectors as $key => $value)
                        <li>{{$value}}</li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
