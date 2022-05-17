@extends('layouts/layout')
@section('content')
    <!-- Aside Ends-->
        <!--Main Content Start -->
            <section class="content">
              <!-- Header -->
              <script>
               jQuery(document).ready(function () {
                 var url = window.location;
                // Will only work if string in href matches with location
                jQuery('ul.nav a[href="' + url + '"]').parent().addClass('active');

                // Will also work for relative and absolute hrefs
                jQuery('ul.nav a').filter(function () {
                     return this.href == url;
                 }).parent().addClass('active').parent().parent().addClass('active');
                });
              </script>

                <script type="text/javascript">
                     jQuery(function() {
                        jQuery('.ajax-link').click( function() {
                        $.get( $(this).attr('href'), function(msg) {
                            alert( "Data Saved: " + msg );
                        });
                        return false; // don't follow the link!
                        });
                    });
                </script>
                <!-- Header Ends -->

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
                      <div class="portlet-heading">
                          <h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
                                   Reports
                          </h3>
                              <br>
                          <form action="formshow" method="post" enctype="multipart/form-data">
                                  @csrf
                                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                                   <div class="portlet">
                                      <div class="col-md-4">
                                             <select name="eventname" class="form-control input-md" id="eventname" :value="old('eventname')" required autofocus >
                                                <option value="no" hidden>Select Your Event </option>
                                                <option value="Collargemaking">Collarge Making Competition </option>
                                                <option value="Creativemehandi">Creative Mehandi Competition</option>
                                                <option value="Dance">Dancing Competition </option>
                                                <option value="Facepainting">Face Painting </option>
                                                <option value="Fancydress">Fancy Dress Competition </option>
                                                <option value="Paintingmentally">Painting Competition For Children With Intellectual Disability (Mentally Challenged)</option>
                                                <option value="Paintingcom">Painting Competition </option>
                                                <option value="photography">Photography Competition </option>
                                                <option value="Poeticrecitation">Poetic Recitation </option>
                                                <option value="Rangolicom">Rangoli Competition </option>
                                                <option value="Roseprincess">Rose Prince And Rose Princess </option>
                                                <option value="Rosequiz">Rose Quiz </option>
                                                <option value="Singing">Singing Competition </option>
                                                <option value="Sloganwriting">Slogan Writing Competition </option>
                                                <!---<option value="fashion">FASHION COMPETITION </option>-->
                                           </select>
                                       </div>
                                      <div class="col-md-4">
                                          <select name="agegroup" id="agegroup" style="display:none" class="form-control input-md"  :value="old('agegroup')" >
                                          </select>
                                      </div>
                                      <div class="col-md-4">
                                            <select name="members" id="members" style="display:none" class="form-control input-md" :value="old('members')" >
                                            </select>
                                      </div>
<script>
          jQuery(document).ready(function(){
          jQuery("#eventname").change(function(){
              var eventName=$(this).val();
                  if(eventName=='Collargemaking' || eventName=='Creativemehandi' || eventName=='Poeticrecitation' || eventName=='Rangolicom' || eventName=='Sloganwriting' || eventName=='Rosequiz' || eventname=="photography")
                  {
                      $('#agegroup').css('display','block');
                      $('#agegroup').html('<option value="" hidden>---Select AgeGroup---</option><option value="5-11 Year">5 to 11 Year</option><option value="12-17 Year">12 to 17 year</option><option value="18-27 Year">18 to 27 year</option>');
                      $('#members').css('display','none').val('Solo');
                  }
                  else if(eventName=='Dance')
                  {
                      $('#agegroup').css('display','block');
                      $('#members').css('display','block');
                      $('#agegroup').html('<option value="" hidden>---Select AgeGroup---</option><option value="3-10 Year">3 to 10 Year</option><option value="11-15 Year">10 to 15 year</option><option value="16-40 Year">above 15</option>');
                      $('#members').html('<option value="" hidden>---Select Members---</option><option value="Solo">Solo</option><option value="Duet">Duet</option><option value="Group">Group</option>');
                 }
                  else if(eventName=='Facepainting')
                  {
                      $('#agegroup').css('display','block');
                      $('#agegroup').html('<option value="" hidden>---Select AgeGroup---</option><option value="5-12 Year">5 to 12 Year</option><option value="12-18 Year">12 to 18 year</option><option value="18-27 Year">18 to 27</option>');
                      $('#members').css('display','none');
                  }
                  else if(eventName=='Fancydress')
                  {
                      $('#agegroup').css('display','block');
                      $('#agegroup').html('<option value="" hidden>---Select AgeGroup---</option><option value="3-6 Year">3 to 6 Year</option><option value="6-9 Year">6 to 9 year</option><option value="9-12 Year">9 to 12</option>');
                      $('#members').css('display','none');
                  }
                  else if(eventName=='Paintingmentally')
                  {
                      $('#agegroup').css('display','block');
                      $('#agegroup').html('<option value="" hidden>---Select AgeGroup---</option><option value="12-18 Year">12 to 18 Year</option><option value="18-35 Year">18 to 35 year</option><option value="36-100 Year">above 35</option>');
                      $('#members').css('display','none');
                  }
                  else if(eventName=='Paintingcom')
                  {
                      $('#agegroup').css('display','block');
                      $('#agegroup').html('<option value="" hidden>---Select AgeGroup---</option><option value="5-10 Year">5 to 10 Year</option><option value="11-15 Year">10 to 15 year</option><option value="15-30 Year">15 to 30</option>');
                      $('#members').css('display','none');
                  }
                  else if(eventName=='Roseprincess')
                  {
                      $('#agegroup').css('display','block');
                      $('#agegroup').html('<option value="" hidden>---Select AgeGroup---</option><option value="0-1 Year">0 to 1 Year</option><option value="1-2 Year">1 to 2 year</option><option value="2-3 Year">2 to 3</option>');
                      $('#members').css('display','none');
                  }
                  else if(eventName=='Singing')
                  {
                      $('#members').css('display','block');
                      $('#agegroup').css('display','block');
                      $('#agegroup').html('<option value="" hidden>---Select AgeGroup---</option><option value="5-12 Year">5 to 12 Year</option><option value="12-18 Year">12 to 18 year</option><option value="18-27 Year">18 to 27 year</option>');
                      $('#members').html('<option value="" hidden>---Select Members---</option><option value="Solo">Solo</option><option value="Duet">Duet</option><option value="Group">Group</option>');
                  }
                  else
                  {
                      $('#agegroup').css('display','block');
                      $('#agegroup').html('<option value="" hidden>---Select AgeGroup---</option><option value="5-12 Year">5 to 12 Year</option><option value="12-18 Year">12 to 18 year</option><option value="18-27 Year">18 to 27 year</option>');
                  }
                });
            });
</script>
        <button class="col-md-4 form-control input-md btn btn-primary">Submit</button>

            <div class="clearfix">
            </div>

        </div>
            </form>
                </br>
                    </div>
                          </div>
                  <!-- end col -->
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="portlet">
                          <h3 class="portlet-title text-dark text-uppercase">Rose Festival 2021
                                </h3>
                              <!-- /primary heading -->
                              <div class="portlet-heading">
                              <div class="portlet">
                                  <div class="portlet-body">
                                      <div class="table-responsive">
                                        @if(isset($users))
							            <table class="table">
                                                @if($users==null)
                                                <div class></div>
                                                @else
									        <thead>
									        	<tr>
									        		<th>Register ID</th>
                                                    <th>Competition</th>
									        		<th>Name</th>
                                                    <th>Father Name</th>
                                                    <th>Group Name</th>
									        		<th>Members</th>
									        		<th>Payment</th>
									        		<th>DOB</th>
									        	</tr>
									        </thead>
                                            @endif
							                @foreach($users as $user)
									<tr>
										<td>{{$user->PURF_ID}}</td>
                                        <td>{{$user->eventname}}</td>
										<td>{{$user->name}}</td>
										<td>{{$user->fname}}</td>
										<td>{{$user->groupname}}</td>
                                        <td>{{$user->member}}</td>
                                        @if($user->payment=='success')
										<td><span class="label label-success">{{$user->payment}}</span></td>
                                        @else
                                        <td><span class="label label-danger">{{$user->payment}}</span></td>
                                        @endif
										<td>{{$user->dob}}</td>
									</tr>
								@endforeach

                                @if($users==null)
                                <div class="row-col" style="display:none;">
                                </div>
                                @elseif(count($users) < 5)
                                <div class="row-col" style="display:none;">
                                </div>
                                @else

                                <div class="row-col">
                                    {{-- {!! var_dump($users) !!} --}}
                                     {{$users->render('vendor.pagination.bootstrap-4') }}
                                    {{-- {{ $users->render('vendor.pagination.simple-default') }} --}}
                                </div>
                                <style>
                                    .w-5{
                                        display: none;
                                    }
                                </style>
                                @endif
                            </table>

                            @if($users==null)
                            <div class="text-center"><h2>There isn't Any Data!</h2></div>
                            @endif

                            @else
								<div class="text-center"><h2>There isn't Any Data!</h2></div>
                            @endif


                            {{-- {{ dump($users)}} --}}



                                      </div>
                                      <hr class="hidden-xs">
                                      <div class="row">

                                          <button class="col-md-4 col-lg-4 col-xs-4 btn btn-primary" onclick="exportTableToCSV('members.csv')"><i class="zmdi zmdi-cloud-download"></i>&nbsp;Excel File</button>
                                          <div class="col-md-2 col-lg-2 col-xs-2"></div>

                                          <button class="col-md-4 col-xs-4 col-lg-4 btn btn-danger" type="button" id="create_pdf" value="Generate PDF"><i class="zmdi zmdi-cloud-download"></i>&nbsp;PDF File</button>
                                          <div class="col-md-2 col-lg-2 col-xs-2"></div>

                                      </div>
                                  </div>
                              </div>

<script>
          function downloadCSV(csv, filename) {
              var csvFile;
              var downloadLink;

              // CSV file
              csvFile = new Blob([csv], {type: "text/csv"});

              // Download link
              downloadLink = document.createElement("a");

              // File name
              downloadLink.download = filename;

              // Create a link to the file
              downloadLink.href = window.URL.createObjectURL(csvFile);

              // Hide download link
              downloadLink.style.display = "none";

              // Add the link to DOM
              document.body.appendChild(downloadLink);

              // Click download link
              downloadLink.click();
          }

          function exportTableToCSV(filename) {
              var csv = [];
              var rows = document.querySelectorAll("table tr");

              for (var i = 0; i < rows.length; i++) {
                  var row = [], cols = rows[i].querySelectorAll("td, th");

                  for (var j = 0; j < cols.length; j++)
                      row.push(cols[j].innerText);

                  csv.push(row.join(","));
              }

              // Download CSV file
              downloadCSV(csv.join("\n"), filename);
          }
          </script>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
             <script>
              (function () {
                  var
                   form = $('.table'),
                   cache_width = form.width(),
                   a4 = [595.28, 841.89]; // for a4 size paper width and height

                  $('#create_pdf').on('click', function () {
                      $('body').scrollTop(0);
                      createPDF();
                  });
                  //create pdf
                  function createPDF() {
                      getCanvas().then(function (canvas) {
                          var
                           img = canvas.toDataURL("image/png"),
                           doc = new jsPDF({
                               unit: 'px',
                               format: 'a4'
                           });
                          doc.addImage(img, 'JPEG', 20, 10);
                          doc.save('PURF Report.pdf');
                          form.width(cache_width);
                      });
                  }
                  // create canvas object
                  function getCanvas() {
                      form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');
                      return html2canvas(form, {
                          imageTimeout: 2000,
                          removeContainer: false
                      });
                  }
              }());
          </script>
          <script>
              /*
           * jQuery helper plugin for examples and tests
           */
              (function ($) {
                  $.fn.html2canvas = function (options) {
                      var date = new Date(),
                      $message = null,
                      timeoutTimer = false,
                      timer = date.getTime();
                      html2canvas.logging = options && options.logging;
                      html2canvas.Preload(this[0], $.extend({
                          complete: function (images) {
                              var queue = html2canvas.Parse(this[0], images, options),
                              $canvas = $(html2canvas.Renderer(queue, options)),
                              finishTime = new Date();

                              $canvas.css({ position: 'absolute', left: 0, top: 0 }).appendTo(document.body);
                              $canvas.siblings().toggle();

                              $(window).click(function () {
                                  if (!$canvas.is(':visible')) {
                                      $canvas.toggle().siblings().toggle();
                                      throwMessage("Canvas Render visible");
                                  } else {
                                      $canvas.siblings().toggle();
                                      $canvas.toggle();
                                      throwMessage("Canvas Render hidden");
                                  }
                              });
                              throwMessage('Screenshot created in ' + ((finishTime.getTime() - timer) / 1000) + " seconds<br />", 4000);
                          }
                      }, options));

                      function throwMessage(msg, duration) {
                          window.clearTimeout(timeoutTimer);
                          timeoutTimer = window.setTimeout(function () {
                              $message.fadeOut(function () {
                                  $message.remove();
                              });
                          }, duration || 2000);
                          if ($message)
                              $message.remove();
                          $message = $('<div></div>').html(msg).css({
                              margin: 0,
                              padding: 10,
                              background: "#000",
                              opacity: 0.7,
                              position: "fixed",
                              top: 10,
                              right: 10,
                              fontFamily: 'Tahoma',
                              color: '#fff',
                              fontSize: 12,
                              borderRadius: 12,
                              width: 'auto',
                              height: 'auto',
                              textAlign: 'center',
                              textDecoration: 'none'
                          }).hide().fadeIn().appendTo('body');
                      }
                  };
              })(jQuery);

                      </script>
            </div>
							</div>
						</div>
						{{-- <script>
							initSample();
						</script>
					<div class="clearfix">
						</div> --}}
					</div>
			</form>
		</div>

		<!-- Page Content Ends -->
    </section>
    <!-- /.content -->
  </div>
@stop
