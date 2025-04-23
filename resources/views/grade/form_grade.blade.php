<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade_Form</title>
</head>

<body>
    <x-navbar />
    <section style="margin-left: 19.5%">
        <div>
            <h2>Create Grade </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, eveniet.</p>
        </div>
        <br>
        <form action="{{ route('grade.register_grade') }}" method='POST'>
            @csrf
            @method('post')
            @if ($candidates)
                <input type="hidden" name="candidateNationalId" value="{{ $candidates->id }}" required>
                <label for="">Candidate Name</label><br>
                <input type="text" name="candidate_name"
                    value="{{ $candidates->firstName }} - {{ $candidates->secondName }}" required><br><br>
            @else
                {{-- <select name="candidateNationalId" required>
            <option value="hidden">Select Data</option>
            @forelse ($candidates as $candidate)
                <option value="{{ $candidate->id }}">  <span>{{ $candidate->firstName }}</span> - <span>{{  $candidate->secondName }}</span></option>
            @empty
                <option value="">No data</option>
            @endforelse
        </select><br><br> --}}
            @endif
            <label for="">License Exam Category</label><br>
            <input type="text" name="licenseExamCategory" required><br><br>
            <label for="">Obtained Marks</label><br>
            <input type="number" name="obtainedmarks_20" required><br><br>
            <button>Add Grade</button>
            <button> <a href="{{ route('grade') }}"></a> Cancel</button>
        </form>
    </section>
</body>

</html>
