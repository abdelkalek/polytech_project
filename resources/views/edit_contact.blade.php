<html>
<head>
    <title>Contact Page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body class="container">
<div class="container-fluid">
    <H1> Modfier Contact </H1>
    @if(Session::has('success'))
        <h3 style="color: darkgreen; ">
            {{ session::get('success') }}
        </h3>
    @endif
    <form action="{{route('save_modification_contact')}}" method="POST" enctype="multipart/form-data">
        @csrf
<input type="hidden" name="id" value="{{$contact->id}}"/>
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{$contact->name}}" id="exampleInputName1" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control"   value="{{$contact->email}}"  id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputSujet" class="form-label">Sujet</label>
            <input type="text" name="sujet" class="form-control"  value="{{$contact->sujet}}"  id="exampleInputSujet" required>
        </div>
        <div class="mb-3">
            <div class="form-floating">
                <textarea class="form-control"rows="5" name="message" placeholder="Leave a Message here" id="floatingTextarea" required> {{$contact->message}}" </textarea>
                <label for="floatingTextarea">Message</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputSujet" class="form-label">Photo</label>
            <input type="file" name="photo" class="form-control" id="exampleInputSujet" required>
        </div>
        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value="Submit">
        </div>
    </form></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>
