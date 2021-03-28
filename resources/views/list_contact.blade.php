<html>
<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body class="container">
<br>
    <div class="row">
    <div class="col-md-4">
        <div class="container-fluid">
            <H2 class="text-primary"> Ajouter Contact </H2>
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session::get('success') }}
                </div>
            @endif
            <form action="{{ route('save_contact') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputName1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputSujet" class="form-label">Sujet</label>
                    <input type="text" name="sujet" class="form-control" id="exampleInputSujet" required>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea class="form-control"rows="5" name="message" placeholder="Leave a Message here" id="floatingTextarea" required></textarea>
                        <label for="floatingTextarea">Message</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputSujet" class="form-label">Photo</label>
                    <input type="file" name="photo" class="form-control" id="exampleInputSujet" required>
                </div>
                <div class="mb-3">
                    <input class="btn btn-primary" type="submit" value="Envoyer">
                </div>
            </form></div>
    </div>
    <div class="col-md-8">
<h2>Liste Contact</h2>
<table class="table">
    <thead>
    <th>photo</th>
    <th>name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>message</th>
    </thead>
    <tbody>
    @foreach($all_contact as $contact)
        <tr>
            <td> <img src="{{ env('APP_STORAGE') }}{{@$contact->photo}}" style="width: 50%;"  /></td>
            <td>{{ @$contact->name}}</td>
            <td>{{ @$contact->email}}</td>
            <td>{{ @$contact->sujet}}</td>
            <td>{{ @$contact->message}}</td>
            <td>
             <a class="btn btn-danger" href="{{ route('delete_contact',[@$contact->id])}}">Supprimer</a>
            </td>
            <td>
                <a  class="btn btn-success" href="{{ route('modifier_contact',[@$contact->id])}}">Editer</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
