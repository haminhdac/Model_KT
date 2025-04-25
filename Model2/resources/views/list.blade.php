@extends('dashboardlist')  
        
@section('content')
        <h2 class="user-list-title">Danh sách user</h2>
       
            <table class="user-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Orders</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lstuser as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <th>
                                @foreach($user->roles as $role)
                                    <a href="{{ route('user.role', ['id' => $role->id]) }}">
                                        {{ $role->name . '-' }}
                                    </a>
                                @endforeach
                            </th>
                            <th>
                                @foreach($user->orders as $order)
                                    <a href="{{ route('user.order', ['id' => $order->id]) }}">
                                        {{ $order->id . '-' }}
                                    </a>
                                @endforeach
                            </th>
                            <td><a href="{{route('showUpdate',['id' => $user->id])}}">Edit</a> | 
                                <a href="#">View</a> | 
                                <a href="#">Delete</a></td>
                        </tr>       
                    @endforeach

                            
                </tbody>
            </table>
            {{$lstuser->links('pagination::bootstrap-5') }}
        
        
        
        <div class="footer">
            Lập trình web @01/2024
        </div>
        
    </div>
    @endsection('content')