<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>candidate</title>
</head>

<body>
    <x-navbar />
    <section>
        <h2>Candidate Page</h2>
        <a href="/add_candidate">Add Candidate</a>
        <br><br>
        @if (Session::has('message'))
            <div>{{ Session::get('message') }}</div>
        @endif
        <br><br>
        <table border="2" style="width: 80%;">
            <tr>
                <th>id</th>
                <th>First Name</th>
                <th>Second Name</th>
                <th>Gender</th>
                <th>DOF</th>
                <th>Exam Date</th>
                <th>Phone Number</th>
                <th>Action</th>


            </tr>
            @forelse ($candidates as $key => $candidate)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $candidate->firstName }}</td>
                    <td>{{ $candidate->secondName }}</td>
                    <td>{{ $candidate->gender }}</td>
                    <td>{{ $candidate->dof }}</td>
                    <td>{{ $candidate->examDate }}</td>
                    <td>0{{ $candidate->phoneNumber }}</td>
                    <td style="display: flex;gap:10px">
                        <button><a href="{{ route('candidate.edit_grade', $candidate->id) }}">edit</a></button>
                        <form action="{{ route('candidate.delete_candidate', $candidate->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button onclick="alert('Do you want to delete')">Delete</button>
                        </form>
                        <button><a href="{{ route('grade.select_candidate', $candidate->id) }}">Add Grade</a></button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" style="text-align: center;">No records found</td>
                </tr>
            @endforelse
            {{-- <tr>
                <td >Total Candidate</td>
                <td colspan="8">{{$count_candidate}}</td>
            </tr> --}}
        </table>
    </section>
</body>

</html>
