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
