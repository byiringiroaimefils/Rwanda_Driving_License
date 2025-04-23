<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form_candidate</title>
</head>

<body>
    <x-navbar />
    <section style="margin-left: 19.5%">
        <div>
            <h2>Candidate Form Update</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, esse!</p>
        </div>
        <br><br>
        <form action="{{ route('candidate.update_candidate', $edit_candidate->id) }}" method='post'>
            @csrf
            @method('Put')
            <label for="">First Name</label><br>
            <input type="text" name="firstName" required value="{{ $edit_candidate->firstName }}"><br><br>
            <label for="">Second Name</label><br>
            <input type="text" name="secondName" required value="{{ $edit_candidate->secondName }}"><br><br>
            <label for="">Male</label>
            <input type="radio" name="gender" required value="Male"><br>
            <label for="">Female</label>
            <input type="radio" name="gender" required value="Female"><br><br>
            <label for="">Date of Birth</label><br>
            <input type="date" name="dof" required value="{{ $edit_candidate->dof }}"><br><br>
            <label for="">Exam Date</label><br>
            <input type="date" name="examDate" required value="{{ $edit_candidate->examDate }}"><br><br>
            <label for="">Phone Number</label><br>
            <input type="number" name="phoneNumber" required value="{{ $edit_candidate->phoneNumber }}"><br><br>
            <button>update Candidate</button>
            <button><a href="{{ route('candidate') }}">Cancel</a></button>

        </form>
    </section>

</body>

</html>
