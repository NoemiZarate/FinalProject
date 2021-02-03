@extends('Layout.master')
@section('Title','Profile')
@section('section')
 <div class="container-fluid pt-5 pb-3">
        <div class="container">
        	
            <div class="text-center pb-2">
                <h1 class="mb-4">Students Profile</h1>
            </div>
            <div>
            	<table border = 1 class="table table-dark table-striped">
            		<th>Child ID</th>
					<th>Child First Name</th>
					<th>Child Last Name</th>
					<th>Gender</th>
					<th>Date_of_Birth</th>
					<th>Registration Date</th>
					<th>Sessions</th>
					<th>Total Session Price</th>	


					@foreach($data as $data)				

					<tr>
						<td> {{ $data->ChildID}}</td>
						<td> {{ $data->Child_fname}}</td>
						<td> {{ $data->Child_lname}}</td>
						<td> {{ $data->Child_gender}}</td>
						<td> {{ $data->Child_DOB}}</td>
						<td> {{ $data->RegDate}}</td>
						<td> {{ $data->SessionDay}}</td>
						<td> {{ $data->SessionPrice}}</td>
					</tr>				
					@endforeach
				</table>

				<table border="1" class="table table-dark table-striped">
					<th>Child ID</th>
					<th>Father's First Name</th>
					<th>Father's Last Name</th>
					<th>Mother's First Name</th>
					<th>Mother's Last Name</th>
					<th>Contact Number</th>

					@foreach($data1 as $data1)
					<tr>
						<td> {{ $data1->ChildID}}</td>
						<td> {{ $data1->Father_fname}}</td>
						<td> {{ $data1->Father_lname}}</td>
						<td> {{ $data1->Mother_fname}}</td>
						<td> {{ $data1->Mother_lname}}</td>
						<td> {{ $data1->Contact}}</td>
					</tr>
					@endforeach
				</table>
			</div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

@endsection