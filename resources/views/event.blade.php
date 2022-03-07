@extends('layouts.layout')
	@section('content')

		 <div class="page-title">
			<h3 class="title">Event Schedule</h3>
		</div>
		<div class="portlet">
		@if(Session::get('success'))
            <div class="alert alert-success">
              {{Session::get('success')}}
            </div>
          	@endif

        	@if(Session::get('fail'))
            <div class="alert alert-danger">
              {{Session::get('fail')}}
            </div>
        	@endif
			<!-- /primary heading -->
		<form action="addev" enctype="multipart/form-data" method="post">
			@csrf
			<div class="form-group">
				<input class="form-control" type="file" name="es" id="es" placeholder="Select pdf file">
			</div>
			{{-- <script src="https://panchayatiduniya.com/rose-festival/resources/assets/ckeditor/ckeditor.js"></script>
			<script src="https://panchayatiduniya.com/rose-festival/resources/assets/ckeditor/samples/js/sample.js"></script> --}}
			<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
			<script src="{{asset('ckeditor/samples/js/sample.js')}}"></script>
			<div class="portlet-heading">
				
				<div class="adjoined-bottom" >
					<div class="grid-container">
						<div class="grid-width-100">
							
						<input type="hidden" name="id" value="21">
						<textarea id="editor" name="editor" required>
						<div class="rules-competition">
							<h1>11th Panjab University Rose Festival Schedule</h1>

							<h3>1st Day (07.02.2020) (Friday)</h3>

								<table class="table table-bordered">
									<tbody>
										<tr>
											<td><strong>PROGRAMME</strong></td>
											<td><strong>TIMING</strong></td>
											<td><strong>VENUE</strong></td>
										</tr>
										<tr>
											<td>Flower &amp; Photography Competition (Judgement)</td>
											<td>12:00 noon</td>
											<td>Prof. R.C. Paul Rose Garden</td>
										</tr>
										<tr>
											<td>Inauguration</td>
											<td>2:00 p.m.</td>
											<td>Prof. R.C. Paul Rose Garden</td>
										</tr>
										<tr>
											<td>Band Competition of various Schools</td>
											<td>4:30 p.m.</td>
											<td>Prof. R.C. Paul Rose Garden</td>
										</tr>
										<tr>
											<td>Cultural Night</td>
											<td>7:00 p.m. to 10:00 p.m.</td>
											<td>Old Convocation Ground</td>
										</tr>
									</tbody>
								</table>

									<h3>2nd Day (08.02.2020) (Saturday)</h3>

							<table class="table table-bordered">
								<tbody>
									<tr>
										<td><strong>Competition</strong></td>
										<td><strong>Reporting Time</strong></td>
										<td><strong>Categories</strong></td>
										<td><strong>VENUE</strong></td>
									</tr>
									<tr>
										<td>Singing Competition</td>
										<td>10:00 a.m.</td>
										<td>1st group (5-12 yrs)<br />
										2nd group (12-18 yrs)<br />
										3rd group (18-27 yrs)</td>
										<td>Old Convocation Ground</td>
									</tr>
									<tr>
										<td>Rangoli</td>
										<td>10:00 a.m.</td>
										<td>1st group (5-12 yrs)<br />
										2nd group (12-18 yrs)<br />
										3rd group (18-27 yrs)</td>
										<td>Pond near Admn. Block</td>
									</tr>
									<tr>
										<td>Collage Making</td>
										<td>12:15 p.m.</td>
										<td>1st group (5-12 yrs)<br />
										2nd group (12-18 yrs)<br />
										3rd group (18-27 yrs)</td>
										<td>Old Convocation Ground</td>
									</tr>
									<tr>
										<td>Slogan Writing</td>
										<td>2:00 p.m.</td>
										<td>1st group (5-12 yrs)<br />
										2nd group (12-18 yrs)<br />
										3rd group (18-27 yrs)</td>
										<td>Old Convocation Ground</td>
									</tr>
									<tr>
										<td>Face Painting</td>
										<td>3:00 p.m.</td>
										<td>1st group (5-12 yrs)<br />
										2nd group (12-18 yrs)<br />
										3rd group (18-27 yrs)</td>
										<td>Old Convocation Ground</td>
									</tr>
									<tr>
										<td>Cultural Night</td>
										<td>7.00 p.m. to 10:00 p.m.</td>
										<td>&nbsp;</td>
										<td>Old Convocation Ground</td>
									</tr>
								</tbody>
							</table>

									<h3>3rd Day (09.02.2020) (Sunday)</h3>

									<table class="table table-bordered">
										<tbody>
											<tr>
												<td><strong>Competition</strong></td>
												<td><strong>Reporting Time</strong></td>
												<td><strong>Categories</strong></td>
												<td><strong>VENUE</strong></td>
											</tr>
											<tr>
												<td>Poetic Recitation</td>
												<td>10.00 a.m.</td>
												<td>1st group (5-12 yrs)<br />
												2nd group (12-18 yrs)<br />
												3rd group (18-27 yrs)</td>
												<td>Balwant Gargi Open Air Theatre</td>
											</tr>
											<tr>
												<td>Dancing Competition</td>
												<td>10.00 a.m.</td>
												<td>1st group (3-10 yrs)<br />
												2nd group (10-15 yrs)<br />
												3rd group (above 15 yrs)</td>
												<td>Old convocation Ground</td>
											</tr>
											<tr>
												<td>Creative Mehandi Competition</td>
												<td>10.00 a.m.</td>
												<td>1st group (5-12 yrs)<br />
												2nd group (12-18 yrs)<br />
												3rd group (18-27 yrs)</td>
												<td>Old Convocation Ground</td>
											</tr>
											<tr>
												<td>Rose Prince &amp; Rose Princess</td>
												<td>10:00 a.m.<br />
												11:00 am<br />
												12:00 noon</td>
												<td>1st group (0 -1 year)<br />
												2nd group (1-2 yrs)<br />
												3rd group (2-3 yrs)</td>
												<td>Prof. R.C. Paul Rose Garden</td>
											</tr>
											<tr>
												<td>Painting Competition</td>
												<td>12.00 noon</td>
												<td>1st group(5-10 yrs)<br />
												2nd group (10-15 yrs)<br />
												3rd group (16-30 yrs)</td>
												<td>Old Convocation Ground</td>
											</tr>
											<tr>
												<td>Fancy Dress</td>
												<td>2.00 p.m.</td>
												<td>1st group (3-6 yrs)<br />
												2nd group (6-9 yrs)<br />
												3rd group (9-12 yrs)</td>
												<td>Prof. R.C. Paul Rose Garden</td>
											</tr>
											<tr>
												<td>Star Night</td>
												<td>7.00 p.m. to 10:00 p.m.</td>
												<td>&nbsp;</td>
												<td>Old Convocation Ground</td>
											</tr>
										</tbody>
									</table>

									<ul>
										<li>a. Flower Competition ---------- Rs. 50 per entry per participant.</li>
										<li>b. Singing, Dancing, Fashion and Rose Prince &amp; Princess Competitions ------ Rs. 300 per entry per participant.</li>
										<li>c. School Band Competition ----------- Free Entry.</li>
										<li>d. Other competitions ----------- Rs. 100 per entry per participant.</li>
									</ul>

									<ol>
										<li>Entry Fees (Per Entry) for various competitions will be as following:-</li>
										<li>A participant participating in more than one competition will have to deposit separate entry fees for each competition.</li>
										<li>Competition in which participants have to participate in duet or group category, each member of the duet or group will have to deposit separate entry fees.</li>
										<li>Entries for flower competition will be accepted upto 06.02.2020 till 5:00 p.m. at Rose Festival Secretariat, Single Window Enquiry, Near Post Office, Panjab University, Sector-14, Chandigarh and on 07.02.2020 till 10:00 a.m. at Prof. R.C. Paul Rose Garden, Panjab University, Chandigarh.</li>
										<li>Entries for photography competition will be accepted upto 04.02.2020 till 5:00 p.m.</li>
										<li>Entries for all other competitions will be accepted upto 05.02.2020 till 5:00 p.m.</li>
										<li>The organizers reserve the power to cancel, postpone or change the venue of any event without assigning any reason. The organisers can divide a group into sub-groups and can also merge two or more groups into one.</li>
										<li>Rules for participation in all competitions will be available in Rose Festival Secretariat, Single Window Enquiry, Near Post Office, Panjab University, Sector-14, Chandigarh and also at website &lsquo;www.panjabuniversityrosefestival.in&rsquo; and on Facebook at page &lsquo;P.U. Rose Festival&rsquo;. Participants are requested to check for any updates regarding change in venue or dates through online channels.</li>
										<li>All the forms of competition will be sold and received in Rose Festival Secretariat from 9:00 am to 5:00 pm. and on the website &lsquo;www.panjabuniversityrosefestival.in&rsquo; till last dates for respective competitions.</li>
										<li>No Cash Prizes will be awarded.</li>
										<li>Those applying online should bring the acknowledgement receipt and an attested copy of DOB certificate at the venue of the Competition.</li>
									</ol>
										</div>	</textarea>
										<br>
										<button type="submit" class="btn btn-primary">Publish</button>
										
										</div>
							</div>
						</div>
						<script>
							initSample();
						</script>
						<div class="clearfix">
						</div>
					</div>
			</form>
		</div>
		
		<!-- Page Content Ends -->
    </section>
    <!-- /.content -->
  </div>
@stop

