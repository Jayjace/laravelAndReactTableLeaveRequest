<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Requests</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table th, .table td {
            text-align: center;
        }
        .btn {
            min-width: 100px;
        }
        .header-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header-buttons {
            display: flex;
            gap: 10px; /* Space between buttons */
        }
        .add-btn {
            margin-right: auto; /* Push the add button to the left */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="header-row">
            <h1 class="text-center mb-4">Leave Requests</h1>
            <div class="header-buttons">
                <a href="{{ route('leave-requests.create') }}" class="btn btn-primary add-btn">Add Leave Request</a>
                <a href="{{ route('welcome') }}" class="btn btn-secondary">Back to Welcome</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Employee Name</th>
                        <th class="d-none d-sm-table-cell">Leave Type</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th class="d-none d-sm-table-cell">Reason</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($leaveRequests as $request)
                    <tr>
                        <td>{{ $request->employee_name }}</td>
                        <td class="d-none d-sm-table-cell">{{ $request->leave_type }}</td>
                        <td>{{ \Carbon\Carbon::parse($request->start_date)->format('Y-m-d') }}</td>
                        <td>{{ \Carbon\Carbon::parse($request->end_date)->format('Y-m-d') }}</td>
                        <td class="d-none d-sm-table-cell">{{ $request->reason }}</td>
                        <td>
                            <a href="{{ route('leave-requests.edit', $request->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('leave-requests.destroy', $request->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $leaveRequests->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
