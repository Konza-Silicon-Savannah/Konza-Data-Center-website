<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>CustomerName:{{ $mailData['CustomerName'] }}</h1>
    <h3>Customer details are as follows:</h3>
    <p>Email:{{ $mailData['CustomerEmail'] }}</p>
    <p>Phone Number:{{ $mailData['CustomerPhone'] }}</p>
    <p>Organization name:{{ $mailData['OrgName'] }}</p>

    <label>Confirm the following requested items:</label>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Service</th>
                <th scope="col">Type</th>
                <th scope="col">Description</th>
                <th scope="col">Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($CartItems as $item)
            <tr>
                <td>{{$item->service}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->quantity}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p>Preferred ISP:{{ $mailData['ISP'] }}</p>
    <p> Other Comments:{{ $mailData['Comments'] }}</p>



    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>