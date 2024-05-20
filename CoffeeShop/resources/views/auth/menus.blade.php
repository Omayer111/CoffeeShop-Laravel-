<!DOCTYPE html>
<html lang="en">

<head>
    @include('auth.admincss')
    <style>
        /* Add this CSS to your existing CSS file or in a separate CSS file */
        .table {
            width: 100%;
        }

        .table-responsive {
            overflow-x: auto;
        }
    </style>
</head>

<body>

    <div class="container-scroller">
        @include('auth.nav')

        <div class="main-panel page-body-wrapper" style="text-align: left;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table" style="background-color: rgb(19, 17, 17);color:white;border:2px">
                                <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>description</th>
                                        <th>price</th>
                                        <th>action</th>
                                        <th>update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bmenus as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td><a href="{{ url('/Bdeletion/' . $item->id) }}">delete</a></td>
                                            <td><a href="{{ url('/Bupdate/' . $item->id) }}">update</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br><br>
                        <div class="table-responsive">
                            <table class="table" style="background-color: rgb(19, 17, 17);color:white;border:2px">
                                <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>description</th>
                                        <th>price</th>
                                        <th>action</th>
                                        <th>update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cmenus as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td><a href="{{ url('/Cdeletion/' . $item->id) }}">delete</a></td>
                                            <td><a href="{{ url('/Cupdate/' . $item->id) }}">update</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('auth.adminJS')

</body>

</html>
