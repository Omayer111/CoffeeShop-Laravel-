<!DOCTYPE html>
<html lang="en">

<head>
    @include('auth.admincss')
</head>

<body>

    <div class="container-scroller">
        @include('auth.nav')

        <div class="main-panel page-body-wrapper" style="text-align: left; position:relative; top:50px; right:300px;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <table style="background-color: rgb(19, 17, 17); color: white;">
                            <thead>
                                <tr>
                                    <th style="padding: 10px;" style="width: 25%;">Name</th>
                                    <th style="padding: 10px;"style="width: 25%;">Position</th>
                                    <th style="padding: 10px;" style="width: 25%;">Image</th>
                                    <th style="padding: 10px;" style="width: 25%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chefs as $item)
                                    <tr>
                                        <td style="padding: 10px;">{{ $item->name }}</td>
                                        <td style="padding: 10px;">{{ $item->position }}</td>
                                        <td style="padding: 10px;">
                                            <img src="images/team/{{ $item->image }}" alt="Chef Image"
                                                style="max-width: 200px; max-height: 200px;">
                                        </td>
                                        <td style="padding: 10px;">
                                            <a href="{{ url('/Chefdeletion/' . $item->id) }}"
                                                class="btn btn-danger">Delete</a>
                                        </td>
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
