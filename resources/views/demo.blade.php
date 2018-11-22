<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            /* background: rgba(223, 238, 242, 1);
            background: -moz-linear-gradient(top, rgba(223, 238, 242, 1) 0%, rgba(197, 211, 214, 1) 19%, rgba(134, 175, 186, 1) 43%, rgba(107, 173, 189, 1) 54%, rgba(48, 199, 199, 1) 100%);
            background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(223, 238, 242, 1)), color-stop(19%, rgba(197, 211, 214, 1)), color-stop(43%, rgba(134, 175, 186, 1)), color-stop(54%, rgba(107, 173, 189, 1)), color-stop(100%, rgba(48, 199, 199, 1)));
            background: -webkit-linear-gradient(top, rgba(223, 238, 242, 1) 0%, rgba(197, 211, 214, 1) 19%, rgba(134, 175, 186, 1) 43%, rgba(107, 173, 189, 1) 54%, rgba(48, 199, 199, 1) 100%);
            background: -o-linear-gradient(top, rgba(223, 238, 242, 1) 0%, rgba(197, 211, 214, 1) 19%, rgba(134, 175, 186, 1) 43%, rgba(107, 173, 189, 1) 54%, rgba(48, 199, 199, 1) 100%);
            background: -ms-linear-gradient(top, rgba(223, 238, 242, 1) 0%, rgba(197, 211, 214, 1) 19%, rgba(134, 175, 186, 1) 43%, rgba(107, 173, 189, 1) 54%, rgba(48, 199, 199, 1) 100%);
            background: linear-gradient(to bottom, rgba(223, 238, 242, 1) 0%, rgba(197, 211, 214, 1) 19%, rgba(134, 175, 186, 1) 43%, rgba(107, 173, 189, 1) 54%, rgba(48, 199, 199, 1) 100%); */
            font-family: 'Raleway', sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
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

        /* ul {
            list-style: none;
            background: #f8f9fa;
            width: 20%;
            display: block;
            margin: 0 auto;
            padding: 20px;
        } */

        /*li {*/
        /*text-align: center;*/
        /*}*/

        /* h2 {
            color: #f4645f;
            font-size: 30px;
            font-weight: 600;
            margin-top: 10%;
        } */

        /* h3 {
            color: #f4645f;
            font-weight: 600;
            font-size: 20px;
        } */

        /* lable {
            padding-right: 20px;
            color: #f4645f;
            font-size: 20px;
            font-weight: 600;
        } */

        /* .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        } */

        /* select {
            padding: 10px;
            background: transparent;
            border-color: #f4645f;
            color: black;
            font-weight: 600;
        } */

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>
</head>

<body class="bg-grey-lighter">

    <div class="container m-auto">
        <div class="flex mb-4">
            <div class="w-full text-center">
                <h2 class="text-center font-semibold mt-24 text-3xl text-red-light">{{labelManipulate('magic-label','title')}}</h2>
                <div class="m-16 text-center">
                    <lable class="pr-5 text-xl font-semibold text-red-light">{{labelManipulate('magic-label','current_language')}}
                        : {{$keySpecificValue}}</lable>
                </div>

                <div class="flex mb-4 justify-between">
                    <div class="w-1/2 text-center max-w-sm rounded overflow-hidden shadow-lg bg-white p-10 flex justify-center">
                        <div class="self-center">
                            <div>
                                <h3 class="text-center text-xl font-semibold text-red-light pb-2 border-b-2 inline-block mb-6">
                                    {{labelManipulate('magic-label','select_drop_down')}}:
                                </h3>
                                <!-- <lable class="pr-5 text-xl font-semibold text-red-light">{{labelManipulate('magic-label','select_drop_down')}}
                                :</lable> -->
                            </div>
                            <select class="mdb-select md-form border border-red-light font-semibold bg-transparent p-2">
                                <option value="" disabled selected>{{
                                    labelManipulate('magic-label','choose_your_option')
                                    }}</option>
                                @if(count($industrySectors))
                                @foreach($industrySectors as $key => $value)
                                <option value="{{$key}}">{{ $value }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="w-1/2 max-w-sm rounded overflow-hidden shadow-lg bg-white p-10 content-center">
                        <h3 class="text-center text-xl font-semibold text-red-light pb-2 border-b-2 inline-block mb-6">{{
                            labelManipulate('magic-label','industry_sector') }}</h3>
                        <ul class="list-reset bg-white block p-4 text-left w-64 m-auto border border-red-light">
                            @if(count($industrySectors))
                            @foreach($industrySectors as $key => $value)
                            <li class="text-base font-semibold text-black leading-normal">{{$value}}</li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
</body>

</html>
