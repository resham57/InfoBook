<table  id="listTable" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Nationality</th>
			<th>Option</th>
		</tr>	
	</thead>

	<tbody>
		@forelse($dataToShow as $data)
			<tr>
				<td>{{ $data['name'] }}</td>
				<td>{{ $data['email'] }}</td>
				<td>{{ $data['phone'] }}</td>
				<td>{{ $data['address'] }}</td>
				<td>{{ $data['nationality'] }}</td>
				<td>
					<a href="{{ route('user.show', $data['filename']) }}">
						<i class="fa fa-eye" aria-hidden="true"></i>
					</a>
				</td>
			</tr>
		@empty
			<tr>
				<td>No Data Found!!</td>
			</tr>
		@endforelse
	</tbody>

</table>