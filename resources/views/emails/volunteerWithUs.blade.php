<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <p><strong>Name:</strong> {{ $firstName.' '.$lastName }}</p>
    <p><strong>Form Type:</strong> {{ $formType }}</p>
    <p><strong>Gender:</strong> {{ $gender=='M' ? 'Male' : 'Female' }}</p>
    <p><strong>Nationality:</strong> {{ $nationality }}</p>
    <p><strong>Contact Number:</strong> {{ $contactNumber }}</p>
    <p><strong>Address:</strong> {{ $address }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Education:</strong> {{ $education }}</p>
    <p><strong>Occupation:</strong> {{ $occupation }}</p>
    <p><strong>Institution:</strong> {{ $institution }}</p>
    <p><strong>Reasons:</strong> {{ $reasons }}</p>
    <p><strong>Availability:</strong> <ul>@foreach ($days as $item)
        <li>{{ $item }}</li>
    @endforeach</ul></p>

</body>
</html>