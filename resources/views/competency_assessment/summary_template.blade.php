<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
    }

    h1, h5, .section-header, .section-body, table, th, td {
        font-family: 'Poppins', sans-serif;
    }

    h5 {
        font-size: 1.5rem;
    }

    h1 {
        text-align: center;
    }

    .section {
        margin-bottom: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    .section-header {
        font-size: 1.5rem;
        margin: 0;
        padding: 1rem;
    }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
        margin-bottom: 1rem;
    }

    .col {
        flex: 0 0 100%;
        max-width: 100%;
    }
</style>


<div class="container">
    <h1 style="font-family: Helvetica">Summary of Rating</h1>
    <div class="row" style="font-family: Helvetica">
        <div class="col">
            Employee ID: {{ $employee->employee_id}}
        </div>
    </div>
    <div class="row" style="font-family: Helvetica">
        <div class="col">
            Employee Full Name: {{ $employee->firstname }} {{ $employee->lastname }}
        </div>
    </div>
    <div class="row" style="font-family: Helvetica">
        <div class="col">
            Employee Position Name: {{ $employee->position->name }}
        </div>
    </div>
    <div class="row" style="font-family: Helvetica">
        <div class="col">
            Supervisor: {{ $employee->supervisors->first()->firstname ?? "" }} {{ $employee->supervisors->first()->lastname ?? "" }}
        </div>
    </div>
    @foreach ($structuredItems as $categoryId => $category)
        <div class="section" >
            {{-- <h2 class="section-header" id="heading{{ $categoryId }}">
                <span>{{ $category['category_name'] }}</span>
            </h2> --}}
            <div class="section-body">
                {{-- <h5 class="mt-3 mx-3 mb-3">{{ $competency['name'] }}</h5> --}}
                <table style="text-align: center;">
                    <thead style="font-family: Helvetica">
                        <tr>
                            <th rowspan="2" class="align-middle">{{ $category['category_name'] }}</th>
                            <th rowspan="2" class="align-middle text-nowrap" style="max-width: 10%;">Behavioral
                                Indicators</th>
                            <th colspan="9" class="text-center">Rating</th>
                        </tr>
                        <tr>
                            <th>Self-Assessment</th>
                            <th>Supervisor</th>
                            <th>Final Rating</th>
                            <th>Performance Observation</th>
                            <th>Average Rating</th>
                            <th>Level of Mastery</th>
                            <th>Overall Competency Level</th>
                            <th>Overall Level of Mastery</th>
                            <th>Competency Standard</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category['competencies'] as $competencyId => $competency)
                            @foreach ($competency['indicators'] as $key => $indicator)
                                <tr>
                                    <td class="text-center">{{ $competency['name'] }}
                                        ({{ $indicator['level'] }})
                                    </td>
                                    <td class="text-center">{{ $indicator['description'] }}</td>
                                    <td class="text-center">{{ $indicator['self_assessment'] }}</td>
                                    <td class="text-center">{{ $indicator['supervisor'] }}</td>
                                    <td class="text-center">{{ $indicator['final_rating'] }}</td>
                                    <td class="text-center">{{ $indicator['performance_observation'] }}
                                    </td>

                                    <td class="fw-bolder no-striping text-center">
                                        {{ number_format($competency['levels'][$indicator['level']]['average_rating'], 2) }}
                                    </td>
                                    <td class="fw-bolder text-center">
                                        {{ $competency['levels'][$indicator['level']]['mastery_level'] }}
                                    </td>
                                    <td class="fw-bolder no-striping text-center">
                                        {{ number_format($competency['overall_average_rating'], 2) }}
                                    </td>
                                    <td class="fw-bolder no-striping text-center">
                                        {{ $competency['overall_mastery_level'] }}
                                    </td>

                                    <td class="text-center">{{ $indicator['standard'] }}</td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    @endforeach
</div>
