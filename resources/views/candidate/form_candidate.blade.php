<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form_candidate</title>
</head>

<body>
    <h2>Candidate Form</h2>
    <form action="{{route('candidate.register_candidate')}}" method='post'>
        @csrf
        @method('post')
        <label for="">First Name</label><br>
        <input type="text" name="firstName" required><br><br>
        <label for="">Second Name</label><br>
        <input type="text" name="secondName" required><br><br>
        <label for="">Male</label>
        <input type="radio" value="Male" name="gender" required><br>
        <label for="">Female</label>
        <input type="radio" value="Female" name="gender" required><br><br>
        <label for="">Date of Birth</label><br>
        <input type="date" name="dof" required><br><br>
        <label for="">Exam Date</label><br>
        <input type="date" name="examDate" required><br><br>
        <label for="">Exam Date</label><br>
        <input type="number" name="phoneNumber" required><br><br>
        <button>Add Candidate</button>
    </form>
</body>

</html>
