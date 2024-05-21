<!DOCTYPE html>
<html lang="en">

<head>
    @include('auth.admincss')
</head>

<body>

    <div class="container-scroller">
        @include('auth.nav')

        <div class="main-panel page-body-wrapper"
            style="text-align: left; position:relative; top:50px; right:300px; overflow-x: auto;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <table style="background-color: rgb(19, 17, 17); color: white;">
                            <thead>
                                <tr>
                                    <th style="padding: 10px; width: 10%;">ID</th> <!-- New column for ID -->
                                    <th style="padding: 10px; width: 20%;">Name</th>
                                    <th style="padding: 10px; width: 20%;">Position</th>
                                    <th style="padding: 10px; width: 20%;">Image</th>
                                    <th style="padding: 10px; width: 20%;">Action</th>
                                    <!-- New column for file input -->
                                    <th style="padding: 10px; width: 10%;">Change Photo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chefs as $item)
                                    <tr>
                                        <td style="padding: 10px;">{{ $item->id }}</td> <!-- Display ID -->
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
                                        <!-- Input field for changing photo -->
                                        <td style="padding: 10px;">
                                            <form action="{{ route('change_photo', ['id' => $item->id]) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="file" name="new_photo">
                                                <button type="submit" class="btn btn-primary">Upload</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- Input row for adding a new chef -->
                                <tr>
                                    <form action="{{ route('add_new_chef') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <td style="padding: 10px;">
                                            <!-- ID field left empty for new chef -->
                                        </td>
                                        <td style="padding: 10px;">
                                            <input type="text" name="new_chef_name" placeholder="Enter chef's name">
                                        </td>
                                        <td style="padding: 10px;">
                                            <input type="text" name="new_chef_position"
                                                placeholder="Enter chef's position">
                                        </td>
                                        <td style="padding: 10px;">
                                            <input type="file" name="new_chef_photo">
                                        </td>
                                        <td style="padding: 10px;">
                                            <button type="submit" class="btn btn-success">Add New Chef</button>
                                        </td>
                                        <td style="padding: 100px;"></td> <!-- Empty column for consistency -->
                                    </form>
                                    <br><br><br><br>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('auth.adminJS')

</body>

</html>
