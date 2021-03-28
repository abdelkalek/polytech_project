<html>
<head>
    <title>Student Page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body class="container">
<div class="container-fluid">
    <H1 class="text-primary"> Liste Student </H1>
    <table class="table">
        <thead>
        <th>name</th>
        <th>Email</th>
        <th>description de Groupe</th>
        </thead>
        <tbody>
        @foreach($all_student as $student)
            <tr>
                <td>{{ @$student->name}}</td>
                <td>{{ @$student->email}}</td>
                <td>{{ @$student->designation}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <tr>
        <table class="table">
            <thead>
            <th>name</th>
            <th>Email</th>
            <th>description de Groupe</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{ @$specific_Student->name}}</td>
                    <td>{{ @$specific_Student->email}}</td>
                    <td>{{ @$specific_Student->designation}}</td>
                </tr>
            </tbody>
        </table>
    </tr>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>
