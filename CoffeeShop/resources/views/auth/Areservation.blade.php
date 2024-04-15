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
                                    <th>phone</th>
                                    <th>time</th>
                                    <th>date</th>
                                    <th>number</th>
                                    <th>message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->time }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->number }}</td>
                                        <td>{{ $item->message }}</td>
                                        <td><a href="{{ url('/Rdeletion/' . $item->id) }}">delete</a></td>
                                    </tr>
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
