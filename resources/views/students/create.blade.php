<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

<h1>Add New Student</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        <p style="color:red">{{ $error }}</p>
    @endforeach
@endif

<form method="POST" action="{{ route('students.store') }}">
    @csrf

    <p>Roll Number:
        <input type="text" name="roll_no" required>
    </p>

    <p>Name:
        <input type="text" name="name" required>
    </p>

    <p>Email:
        <input type="email" name="email" required>
    </p>

    <p>Department:
        <input type="text" name="department" value="CSE" required>
    </p>

    <p>Semester:
        <input type="number" name="semester" value="7" required>
    </p>

    <p>CGPA:
        <input type="number" name="cgpa" step="0.01">
    </p>

    <button type="submit">Save Student</button>
</form>

</body>
</html>