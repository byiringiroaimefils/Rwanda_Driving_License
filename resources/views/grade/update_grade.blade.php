<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade_Form</title>
</head>

<body>
    <h2>Grade Update</h2>
    <form action="{{ route('grade.update_grade', $grade->id) }}" method='post'>
        @csrf
        @method('put')
        <input type="hidden" name="candidateNationalId" value="{{ $candidates->id }}" required>
        <label for="">Candidate Name</label><br>
        <input type="text" name="candidate_name" value="{{ $candidates->firstName }} - {{ $candidates->secondName }}"
            required><br><br>
        {{-- <select name="candidateNationalId" required>
            <option value="hidden">Select Data</option>
            @forelse ($candidates as $candidate)
                <option value="{{ $candidate->candidateNationalId }}"> <span>{{ $candidate->firstName }}</span> -
                    <span>{{ $candidate->secondName }}</span>
                </option>
            @empty
                <option value="">No data</option>
            @endforelse
        </select><br> --}}
        <label for="">License Exam Category</label><br>
        <input type="text" name="licenseExamCategory" required value="{{ $grade->licenseExamCategory }}"><br><br>
        <label for="">Obtained Marks</label><br>
        <input type="number" name="obtainedmarks_20" value="{{ $grade->obtainedMarks_20 }}" required><br><br>
        <button>update Grade</button>
    </form>
</body>

</html>
