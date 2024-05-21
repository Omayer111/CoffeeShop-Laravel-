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
            /* Change to auto for responsive horizontal scrolling */
        }
    </style>
</head>

<body>

    <div class="container-scroller">
        @include('auth.nav')

        <div class="main-panel page-body-wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="table-responsive">
                            <table class="table" style="background-color: rgb(19, 17, 17); color: white; border: 2px">
                                <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>phone</th>
                                        <th>time</th>
                                        <th>date</th>
                                        <th>number</th>
                                        <th>message</th>
                                        <th>action</th>
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
    </div>

    @include('auth.adminJS')

</body>

</html>
