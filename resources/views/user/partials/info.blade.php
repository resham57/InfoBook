<table class="table table-borderless">
    <tr>
        <th>Name</th>
        <td>{{ $dataToShow['name'] }}</td>
    </tr>
    <tr>
        <th>Gender</th>
        <td>{{ $dataToShow['gender'] == 'm' ? 'Male' : 'Female' }}</td>
    </tr>

    <tr>
        <th>Address</th>
        <td>{{ $dataToShow['address'] }}</td>
    </tr>

    <tr>
        <th>Email</th>
        <td>{{ $dataToShow['email'] }}</td>
    </tr>
    <tr>
        <th>Phone</th>
        <td>{{ $dataToShow['phone'] }}</td>
    </tr>
    <tr>
        <th>Preferred Contact</th>
        <td>{{ $dataToShow['preferContact'] }}</td>
    </tr>
    <tr>
        <th>Nationality</th>
        <td>{{ $dataToShow['nationality'] }}</td>
    </tr>
    <tr>
        <th>DOB</th>
        <td>{{ $dataToShow['dob'] }}</td>
    </tr>

    <tr>
        <th>Education</th>
        <td>{{ $dataToShow['education'] }}</td>
    </tr>
</table>