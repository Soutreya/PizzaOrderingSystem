<h1>Customers</h1>
<table class="table">
    <thread>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
    </thread>
    <tbody>
    @if($customers)
        @foreach($customers as $customer)
            <tr>
                <td>{{$customer->c_id}}</td>
                <td>{{$customer->c_name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->created_at->diffForHumans()}}</td>
                <td>{{$customer->updated_at->diffForHumans()}}</td>
                <td><a href="/admin/customers/edit"><button>Edit</button></a></td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
