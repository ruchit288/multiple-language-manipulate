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
            font-family: 'Raleway', sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
        }

    </style>
</head>

<body class="bg-grey-lighter">
    <div class="max-w-4xl m-auto">
        <div class="flex mb-4">
            <div class="w-full text-center">
                <h2 class="text-center font-semibold mt-24 text-3xl text-red-light">{{labelManipulate('magic-label','title')}}</h2>
                <div class="m-16 text-center">
                    <lable class="pr-5 text-xl font-semibold text-red-light">{{labelManipulate('magic-label','current_language')}}
                        : {{$keySpecificValue}}</lable>
                </div>

                <div class="flex mb-4 justify-around">
                    <div class="rounded-lg w-2/5 border border-red-light">
                        <div class="w-full rounded-lg overflow-hidden shadow-lg bg-white p-10 justify-center">
                            <div class="w-full">
                                <h3 class="text-center text-xl font-semibold text-red-light pb-2 border-b-2 inline-block mb-6">
                                    {{labelManipulate('magic-label','select_drop_down')}}:
                                </h3>
                            </div>
                            <div class="w-full">
                                <select class="border border-red-light font-semibold bg-transparent p-2">
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
                        <div class="bg-grey-light w-full overflow-hidden rounded-lg">
                            <pre class="w-full overflow-auto py-4 text-sm text-left">
    <code>&lt;div class="w-full min-w-sm rounded-lg overflow-hidden shadow-lg bg-white p-10 justify-center"&gt;
        &lt;div class="w-full"&gt;
            &lt;h3 class="text-center text-xl font-semibold text-red-light pb-2 border-b-2 inline-block mb-6"&gt;{{labelManipulate('magic-label','select_drop_down')}}:&lt;/h3&gt;
        &lt;/div&gt;    
        &lt;div class="w-full"&gt;
            &lt;select class="border border-red-light font-semibold bg-transparent p-2"&gt;
                &lt;option value="" disabled selected&gt;{{labelManipulate('magic-label','choose_your_option')}}&lt;/option&gt;
            @if(count($industrySectors))@foreach($industrySectors as $key => $value)
    &lt;option value="{{$key}}">{{ $value }}&gt;&lt;/option&gt;
            @endforeach @endif
&lt;/select&gt;
        &lt;/div&gt;
    &lt;/div&gt;
                                    </code>
                                    </pre>
                        </div>
                    </div>
                    <div class="rounded-lg w-2/5 border border-red-light">
                        <div class="w-full rounded-lg overflow-hidden shadow-lg bg-white p-10 content-center">
                            <h3 class="text-center text-xl font-semibold text-red-light pb-2 border-b-2 inline-block mb-6">{{
                                labelManipulate('magic-label','industry_sector') }}</h3>
                            <ul class="bg-white block p-0 text-left w-64 m-auto">
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
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
</body>

</html>
