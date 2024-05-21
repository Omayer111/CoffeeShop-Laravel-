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
            overflow-x: initial;
        }
    </style>

</head>

<body>

    <div class="container-scroller">
        @include('auth.nav')

        <div class="main-panel page-body-wrapper" style="text-align: left;">
            <div class="container">
                <div class="row-md-8 justify-content-center">
                    <div class="col-md-8">
                        <div class="table-responsive">
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
                                                <td><a href="{{ url('/deletion/' . $item->id) }}">delete</a></td>
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
    </div>

    @include('auth.adminJS')

</body>

</html>
