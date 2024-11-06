@extends('admin.master')

@section('content')
<div class="shadow p-4 d-flex justify-content-between align-items-center">
    <h4 class="text-uppercase">View Employee Details</h4>
    <div>
        <a href="{{ route('manageEmployee.addEmployee') }}" class="btn btn-success p-2 text-lg rounded-pill">
            <i class="fa-solid fa-plus me-1"></i> Add New Employee
        </a>
    </div>
</div>

<div class="my-5 py-3">
    <div class="d-flex justify-content-end">
        <div class="input-group rounded w-25 mb-5">
            <form action="{{ route('employee.search') }}" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="search">
                    <button type="submit" class="input-group-text border-0 bg-transparent" id="search-addon">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <table class="table align-middle text-center bg-white">
        <thead class="bg-light">
            <tr>
                <th>SL NO</th>
                <th>Employee Name</th>
                <th>Image</th>
                <th>Employee ID</th>
                <th>Department</th>
                <th>Designation</th>
                <th>Salary Grade</th>
                <th>Mode of Join</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $key => $employee)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $employee->name }}</td>
                <td>
                    <img class="rounded-circle" width="60" height="60" src="{{ asset('uploads/' . $employee->employee_image) }}" alt="">
                </td>
                <td>{{ $employee->employee_id }}</td>
                <td>{{ optional($employee->department)->department_name }}</td>
                <td>{{ optional($employee->designation)->designation_name }}</td>
                <td>{{ optional($employee->salaryStructure)->salary_class }}</td>
                <td>{{ $employee->joining_mode }}</td>
                <td>
                    <a class="btn btn-warning rounded-pill fw-bold text-white" href="{{ route('Employee.profile', $employee->id) }}">
                        <i class="fa-regular fa-eye"></i>
                    </a>
                    <a class="btn btn-success rounded-pill fw-bold text-white" href="{{ route('Employee.edit', $employee->id) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a href="{{ route('Employee.delete',$employee->id) }}" class="btn btn-danger rounded-pill fw-bold text-white" data-bs-toggle="modal" data-bs-target="#deleteEmployeeModal">
                        <i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="w-25 mx-auto mt-4">
        {{ $employees->links() }}
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteEmployeeModal" tabindex="-1" aria-labelledby="deleteEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteEmployeeModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this employee?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form id="deleteForm" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function prepareDeleteForm(deleteUrl) {
        document.getElementById('deleteForm').setAttribute('action', deleteUrl);
    }
</script>

@endsection
