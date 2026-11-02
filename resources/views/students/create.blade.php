<!DOCTYPE html>
<html>
<head>
    <title>Add New Student</title>
</head>
<body>

    <h1>Add New Student</h1>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p style="color: red;">{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <label>Roll Number:</label><br>
        <input type="text" name="roll_no" value="{{ old('roll_no') }}" required><br><br>

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}" required><br><br>

        <label>Department:</label><br>
        <input type="text" name="department" value="{{ old('department', 'CSE') }}" required><br><br>

        <label>Semester:</label><br>
        <input type="number" name="semester" min="1" max="8" value="{{ old('semester', 7) }}" required><br><br>

        <label>CGPA:</label><br>
        <input type="number" name="cgpa" min="0" max="10" step="0.01" value="{{ old('cgpa') }}"><br><br>

        <button type="submit">Save Student</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Back to Student List</a>

</body>
</html>