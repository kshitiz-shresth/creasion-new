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
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Institution Name:</strong> {{ $institutionName }}</p>
    <p><strong>Social Media or Website Link:</strong> {{ $socialMediaOrWebsiteLink }}</p>
    <p><strong>Contact Number:</strong> {{ $contactNumber }}</p>
    <p><strong>Address:</strong> {{ $address }}</p>
    <p><strong>Brief Description:</strong> {{ $briefDescription }}</p>
    <p><strong>Reasons:</strong> {{ $reasons }}</p>
</body>
</html>