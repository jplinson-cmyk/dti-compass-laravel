<nav id="sidebar" aria-label="Sidebar">
    <ul class="list-unstyled components">
        <li><a href="#">Dashboard</a></li>
        <li class="{{ Request::is('employees/' . $employee->id . '/competency_assessments*') ? 'active' : '' }}">
            <a class="rounded" href="#homeSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle"
                aria-controls="homeSubmenu">My Assessment</a>
            <ul class="collapse list-unstyled show" id="homeSubmenu">
                <li>
                    <ul class="collapse show" id="assessmentSubmenn">
                        <li
                            class="list-unstyled {{ Request::routeIs('competency_assessment.about', ['employee' => $employee->id]) ? 'active' : '' }} ">
                            <a class="rounded"
                                href="{{ route('competency_assessment.about', ['employee' => $employee->id]) }}">About</a>
                        </li>
                        <li
                            class="list-unstyled {{ Request::routeIs('competency_assessment.dictionary', ['employee' => $employee->id]) ? 'active' : '' }}">
                            <a class="rounded" href="{{ route('competency_assessment.dictionary', ['employee' => $employee->id]) }}">Competency
                                Dictionary</a>
                        </li>
                        <li
                            class="list-unstyled {{ Request::routeIs('competency_assessment.employee_profile', ['employee' => $employee->id]) ? 'active' : '' }}">
                            <a class="rounded"
                                href="{{ route('competency_assessment.employee_profile', ['employee' => $employee->id]) }}">Employee
                                Profile</a>
                        </li>
                        @if ($employee->competencyAssessments->isNotEmpty())
                            <li
                                class="list-unstyled {{ Request::routeIs('competency_assessment.rating_scale', ['employee' => $employee->id, 'id' => $employee->competencyAssessments->first()->id]) ? 'active' : '' }}">
                                <a class="rounded"
                                    href="{{ route('competency_assessment.rating_scale', ['employee' => $employee->id, 'id' => $employee->competencyAssessments->first()->id]) }}">Rating
                                    Scale</a>
                            </li>
                            <li
                                class="list-unstyled {{ Request::routeIs('competency_assessment.instructions', ['employee' => $employee->id, 'id' => $employee->competencyAssessments->first()->id]) ? 'active' : '' }}">
                                <a class="rounded"
                                    href="{{ route('competency_assessment.instructions', ['employee' => $employee->id, 'id' => $employee->competencyAssessments->first()->id]) }}">Instructions</a>
                            </li>

                            @php
                                $currentAssessment = $employee->current_competency_assessment;
                                $currentCategoryId = request()->route('categoryId');
                            @endphp
                            @foreach ($categoryIds as $categoryId)
                                @if (isset($categories[$categoryId]))
                                    <li class="list-unstyled {{ $currentCategoryId == $categoryId ? 'active' : '' }}">
                                        <a class="rounded"
                                            href="{{ route('competency_assessment.form', ['employee' => $employee->id, 'id' => $currentAssessment->id, 'categoryId' => $categoryId]) }}">
                                            {{ $categories[$categoryId]->category_name }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                    </ul>
                </li>
                <li
                    class="list-unstyled {{ Request::routeIs('competency_assessment.summary', ['employee' => $employee->id, 'id' => $employee->competencyAssessments->first()->id]) ? 'active' : '' }}">
                    <a class="rounded"
                        href="{{ route('competency_assessment.summary', ['employee' => $employee->id, 'id' => $employee->competencyAssessments->first()->id]) }}">Rating
                        Summary</a></li>
                <li class="list-unstyled"><a href="#">Career Development Plan</a></li>
                @endif
            </ul>
        </li>
        <li><a class="rounded" href="#">Assessment History</a></li>
    </ul>
</nav>
