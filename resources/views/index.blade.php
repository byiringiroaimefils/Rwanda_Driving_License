<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rwanda_Driving_Lisence||Dashboard_page</title>
</head>

<body>
    {{-- <div class="main"> --}}
    <x-navbar />
    <section style="margin-left: 19.5%">
        <div>
            <h2 class="text-white">DashBoard Page</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, harum?</p>
        </div>
        <br><br>
        <p> Welcome , <b>{{ $data->adminName }}</b></p>
        <br><br>
        <div>
            <div class="cards">
                <div class="card_1">
                    <h3>Total Candidates</h3>
                    <p>08</p>
                </div>
                <div class="card_2">
                    <h3> Pass Candidate</h3>
                    <p>02</p>
                </div>
                <div class="card_3">
                    <h3>Fail Candidate</h3>
                    <p>03</p>
                </div>
            </div>
            <br><br>
            <div class="table">
                <table border="2" style="width: 160%; border-collapse: collapse;">
                    <tr>
                        <th>id</th>
                        <th>Names</th>
                        <th>License Exam Category</th>
                        <th>Obtain Marks/20</th>
                        <th>Decision</th>
                    </tr>
                    @forelse ($candidate_dashboard as $key => $candidate)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $candidate->firstName }} {{ $candidate->secondName }}</td>
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
                        <td colspan="4">{{ $count_candidate }}</td>
                    </tr>
                </table>

            </div>
            {{-- </div> --}}
    </section>
    </div>

</body>

</html>
