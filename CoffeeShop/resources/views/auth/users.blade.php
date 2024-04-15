<!DOCTYPE html>
<html lang="en">

<head>
    @include('auth.admincss')
</head>

<body>

    <div class="container-scroller">
        @include('auth.nav')

        <div class="main-panel page-body-wrapper" style="text-align: left; position:relative;top:50px ;right:300px">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <table class="table" style="background-color: rgb(19, 17, 17);color:white;border:2px">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>message</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    @if ($item->name != 'omayer')
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->message }}</td>
                                            <td><a href="{{ url('/Rdeletion/' . $item->id) }}">delete</a></td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>








    </div>

    @include('auth.adminJS')



</html>
