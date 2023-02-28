<x-mail::message>

    #{{ $mailData['CustomerName'] }}

    <h3>Customer details are as follows:</h3>
    <p>Email:{{ $mailData['CustomerEmail'] }}</p>
    <p>Phone Number:{{ $mailData['CustomerPhone'] }}</p>
    <p>Organization name:{{ $mailData['OrgName'] }}</p>

    <label>Confirm the following requested items:</label>
    <table class="table">
        <thead>
            <tr>
                <th>Service</th>
                <th>Type</th>
                <th>Description</th>
                <th>Quantity</th>
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



    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>