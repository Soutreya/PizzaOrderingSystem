<a href="/"><button>HOME</button></a>
<br>
<h1>Customers</h1>
<table class="table">
    <thread>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
    </thread>
    <tbody>
    @if($customers)
        @foreach($customers as $customer)
            @if($customer->role==0)
            <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->created_at->diffForHumans()}}</td>
                <td>{{$customer->updated_at->diffForHumans()}}</td>
            </tr>
            @endif
        @endforeach
    @endif
    </tbody>
</table>
<a href="/admin"><button>Back</button></a>