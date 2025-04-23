<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rwanda_Driving_Lisence || Report_page</title>
</head>

<body>
    {{-- <div class="main"> --}}
    <x-navbar />
    <section style="margin-left: 19.5%">
        <div>
            <h2>Report Page</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, mollitia!</p>
        </div>
        <br><br><br>
        <div>

            <form action="{{ route('report') }}" method="GET">
                <label for="">Start Date</label>
                <input type="date" name="start_date">
                <label for="">End Date</label>
                <input type="date" name="end_date">
                <button>Generate Report</button>
            </form>
            <br><br>
            <table border="2" style="width: 120%; border-collapse: collapse;">
                <tr>
                    <th>id</th>
                    <th>First Name</th>
                    <th>Second Name</th>
                    <th>Gender</th>
                    <th>DOF</th>
                    <th>Exam Date</th>
                    <th>Phone Number</th>
                    <th>License Exam Category</th>
                    <th>Obtain Marks/20</th>
                    <th>Decision</th>
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
                        <td>{{ $candidate->grade->licenseExamCategory ?? 'Not Yet' }}</td>
                        <td>{{ $candidate->grade->obtainedMarks_20 ?? 'Not Yet' }}</td>
                        <td>{{ $candidate->grade->decision ?? 'Not Yet' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" style="text-align: center;">No records found</td>
                    </tr>
                @endforelse
                <tr>
                    <td>Total Candidate</td>
                    <td colspan="9">{{ $count_candidate }}</td>
                </tr>
            </table>
            <br>
            <button>Print Report</button>
        </div>
    </section>
    {{-- </div> --}}

</body>

</html>
