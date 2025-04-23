<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <x-navbar />
    <section style="margin-left: 19.5%">
        <div>
            <h2>Grade Page</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, placeat.</p>
        </div><br><br>
        <a href="/add_grade">Add Grade</a>
        @if (Session::has('message'))
            <div>{{ Session::get('message') }}</div>
        @endif
        <table border="2" style="width: 135%; border-collapse: collapse;">
            <tr>
                <th>id</th>
                <th>First Name</th>
                <th>Second Name</th>
                <th>Exam Date</th>
                <th>Phone Number</th>
                <th>License Exam Category</th>
                <th>Obtain Marks/20</th>
                <th>Decision</th>
                <th>Action</th>
            </tr>
            <br><br>
            @forelse ($grades as $key => $grade)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $grade->candidate->firstName }}</td>
                    <td>{{ $grade->candidate->secondName }}</td>
                    <td>{{ $grade->candidate->examDate }}</td>
                    <td>0{{ $grade->candidate->phoneNumber }}</td>
                    <td>{{ $grade->licenseExamCategory }}</td>
                    <td>{{ $grade->obtainedMarks_20 }}</td>
                    <td>{{ $grade->decision }}</td>
                    <td style="display: flex;gap:10px">
                        <button><a href="{{ route('grade.edit_grade', $grade->id) }}">edit</a></button>
                        <form action="{{ route('grade.delete_grade', $grade->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button onclick="alert('do you want to delete')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" style="text-align: center;">No records found</td>
                </tr>
            @endforelse
            {{-- <tr>
                <td >Total Candidate</td>
                <td colspan="8">{{$sum_grade}}</td>
            </tr> --}}
        </table>
    </section>

</body>

</html>
