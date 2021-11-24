<table>
    <thead>
    <tr>
        <th>Date</th>
        <th>Time of call</th>
        <th>Name of counsellor</th>
        <th>Nature of case</th>
        <th>Case category</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Location</th>
        <th>Contact number</th>
        <th>Short description of case</th>
        <th>Action taken</th>
        <th>Case status</th>
        <th>Comment</th>
    </tr>
    </thead>
    <tbody>
        @component('admin.export-table', ['resources' => $adultLines])
        @endcomponent
        @component('admin.export-table', ['resources' => $childLines])
        @endcomponent
    </tbody>
</table>
