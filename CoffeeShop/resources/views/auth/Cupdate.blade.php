<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('auth.admincss')
</head>


<body>

    <div class="container-scroller">
        @include('auth.nav')

        <div class="main-panel page-body-wrapper" style="text-align: left; position:relative;top:50px ;right:300px">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form action="{{ route('CupdateNow') }}" method="POST" class="mt-4"> @csrf
                            <div class="form-group">
                                <label for="idU">ID:</label>
                                <input type="text" class="form-control text-dark" id="idU"
                                    value="{{ $data->id }}" name="idU" readonly>

                            </div>
                            <div class="form-group">
                                <label for="nameU">Name:</label>
                                <input type="text" class="form-control" id="nameU" value="{{ $data->name }}"
                                    name="nameU">
                            </div>
                            <div class="form-group">
                                <label for="descriptionU">Description:</label>
                                <input type="text" class="form-control" id="descriptionU"
                                    value="{{ $data->description }}" name="descriptionU">
                            </div>
                            <div class="form-group">
                                <label for="priceU">Price:</label>
                                <input type="text" class="form-control" id="priceU" value="{{ $data->price }}"
                                    name="priceU">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Item</button>
                        </form>
                        <br><br>
                        {{-- <table class="table" style="background-color: rgb(19, 17, 17);color:white;border:2px">
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
                        </table> --}}
                    </div>
                </div>
            </div>
        </div>








    </div>

    @include('auth.adminJS')



</html>
