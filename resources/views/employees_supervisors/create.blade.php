@extends('layouts.app-master')

@section('content')
<div class="bg-light p-4 rounded">
    <h1>Tag an Employee</h1>
    <div class="lead">
        Tag an employee to this supervisor.
    </div>

    <div class="container mt-4">
        <form method="POST" action="{{ route('employees_supervisors.tags.store', $supervisor->id) }}">
            @csrf

            <div class="mb-3">
                <label for="supervisor_id" class="form-label">Supervisor</label>
                <input type="text" class="form-control" name="supervisor_id" value="{{ $supervisor->firstname }} {{ $supervisor->lastname }}" disabled>
                <input type="hidden" name="supervisor_id" id="supervisor_id" value="{{ $supervisor->id }}">
            </div>

    
            <div class="mb-3">
                <label for="search_employee" class="form-label">Search Employee to Tag</label>
                <input type="text" class="form-control" id="search_employee" name="search_employee" placeholder="Search for an employee...">
                <div id="search_results">
                    
                </div>
                <input type="hidden" name="employee_id" id="employee_id">

            </div>

            <button type="submit" class="btn btn-primary">Tag Employee</button>
            <a href="{{ route('employees_supervisors.tags.index', $supervisor->id) }}" class="btn btn-default">Back</a>
        </form>
    </div>
</div>


<script>
  // Function to fetch and display search results
function searchEmployees() {
    const searchInput = document.getElementById('search_employee').value;
    const searchResultsDiv = document.getElementById('search_results');
    const supervisorId = document.getElementById('supervisor_id').value; // Get supervisor ID

    // Clear previous search results
    searchResultsDiv.innerHTML = '';

    // Make an AJAX request to fetch matching employees
    if (searchInput.trim() !== '') {
        fetch(`/employees/{$employee}/tags/search?q=${encodeURIComponent(searchInput)}`)
            .then((response) => response.json())
            .then((data) => {
                if (data.length > 0) {
                    const resultList = document.createElement('ul');
                    resultList.classList.add('list-group');

                    data.forEach((employee) => {
                        // Check if the employee ID matches the supervisor ID
                        if (employee.id !== supervisorId) {
                            const listItem = document.createElement('li');
                            listItem.classList.add('list-group-item');
                            listItem.textContent = `${employee.firstname} ${employee.lastname}`;

                            // Add a click event to select the employee
                            listItem.addEventListener('click', () => {
                                document.getElementById('search_employee').value = `${employee.firstname} ${employee.lastname}`;
                                document.getElementById('employee_id').value = employee.id;
                                searchResultsDiv.innerHTML = ''; // Clear the search results
                            });

                            resultList.appendChild(listItem);
                        }
                    });

                    if (resultList.childNodes.length > 0) {
                        searchResultsDiv.appendChild(resultList);
                    } else {
                        searchResultsDiv.innerHTML = '<p>No results found.</p>';
                    }
                } else {
                    searchResultsDiv.innerHTML = '<p>No results found.</p>';
                }
            })
            .catch((error) => {
                console.error('Error fetching data:', error);
            });
    }
}

// Add an event listener for the search input
document.getElementById('search_employee').addEventListener('input', searchEmployees);

</script>

@endsection
