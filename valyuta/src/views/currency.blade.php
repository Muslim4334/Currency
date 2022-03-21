<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <form class="container" style="background-color: blue" action="{{ route('create')}}" method="post">
        @csrf



        <label>Valyuta nomi: </label>
        <input type="hidden"  name="code" value="{!! $collection['code'] !!}"> {!! $collection['code'] !!}"
        <input type="hidden" name="title" value="{!! $collection['title'] !!}"> {!! $collection['title'] !!}


        <label>Sotib olish:</label>
        <input type="hidden"  name="buy_price" value="{!! $collection['nbu_buy_price'] !!}"> {!! $collection['nbu_buy_price'] !!}

        <label>Sotish:</label>
        <input type="hidden"  name="cell_price" value="{!! $collection['nbu_cell_price'] !!}"> {!! $collection['nbu_cell_price'] !!}
        <label>Vaqti:</label>
        <input type="hidden"  name="data" value="{!! $collection['date'] !!}"> {!! $collection['date'] !!},



        <button type="Submit" style="background-color: #e2e8f0" name="send">Save</button>

    </form>


</body>
</html>
