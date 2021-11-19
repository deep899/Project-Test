<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinitybrains - Consulting | IT Services | Digital Transformation</title>
    <?php include_once("includes/head.php"); ?>
</head>
<body>
    <!-- START HEADER PART-->
    <?php include_once("includes/header.php"); ?>
    <!-- END HEADER PART-->

    <div class="pt-5 sidebar-page-container">
         <div class="auto-container">
            <div class="clearfix row d-flex justify-content-between">
				<div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
                  <aside class="sidebar ">
                     <div class="pt-5 sidebar-widget">
                        <div class="mt-0 appointment-form">
                           <h2 class="pt-5 mb-3 text-center">Apply Now</h2>
                           @foreach ($errors->all() as $error) <small class="d-block text-danger">{{$error}}</small> @endforeach @if(session()->has('message')) 
                           <div class="alert alert-success">{{session()->get('message')}}</div>
                           @endif 
                           <form method="POST" action="{{route('career.store')}}" enctype="multipart/form-data" autocomplete="off" class="form-horizontal custm-form" role="form">
                              {{csrf_field()}}
                              <div class="clearfix row">
                                 <!--<div class="col-lg-12 col-md-12 col-sm-12 form-control">-->
                                    <select class="con-field contact-formdropdown custom-select required" title="Select Inquiry Type" name="uploaded_by" id="uploaded_by" aria-required="true" aria-invalid="false" value="{{old('uploaded_by')}}">
                                       <option disabled="disabled" selected="selected">Select who I am?</option>
                                       <option value="0" @if (old('uploaded_by') == '0') selected="selected" @endif>I am Candidate</option>
                                       <option  value="1" @if (old('uploaded_by') == '1') selected="selected" @endif>I am HR</option>
                                       <option value="2" @if (old('uploaded_by') == '2') selected="selected" @endif>I am Consultant</option>
                                      
                                    </select>
                                 <!--</div>-->

                                 <div class="col-lg-12 col-md-12 col-sm-12 form-control d-none" id="uploaded_by_email_wrapper">
                                    <div class="form-row">
                                       <div class="form-group col-md-12">
                                          <input class="con-field{{$errors->has('') ? ' is-invalid' : ''}}" type="text" name="uploaded_by_email" id="txtEmail" placeholder="HR Email"  value="{{old('uploaded_by_email')}}"  >
                                          <span class="icon fa fa-envelope"></span>
                                          <small id="displayVerifyMessage" class="form-text"></small>
                                       </div>
                                   </div>
                                </div>

                                 <div class="col-lg-12 col-md-12 col-sm-12"> 
                                    <div class="mb-2 input-group">
                                       <div class="input-group-prepend">
                                          <div class="input-group-text"><span class="icon fa fa-user"></span></div>
                                       </div>
                                       <input class="form-control con-field{{$errors->has('full_name') ? ' is-invalid' : ''}}" type="text" name="full_name" id="full_name inlineFormInputGroup" 
                                       placeholder="Candidate Full Name" maxlength="50">@if ($errors->has('full_name')) <span class="invalid-feedback" role="alert"> <strong>{{$errors->first('full_name')}}</strong> </span> @endif 
                                    </div>
                                 </div>

                                 
                                 <div class="col-lg-12 col-md-12 col-sm-12"> 
                                    <div class="mb-2 input-group">
                                       <div class="input-group-prepend">
                                          <div class="input-group-text"><span class="icon fa fa-envelope"></span></div>
                                       </div>   
                                       <input class="form-control con-field required{{$errors->has('email') ? ' is-invalid' : ''}}" type="email" name="email" id="email inlineFormInputGroup" placeholder="Candidate Email Address" maxlength="150"  >
                                    </div>
                                 </div>
                                 
                                 <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mb-2 input-group">
                                       <div class="input-group-prepend">
                                          <div class="input-group-text"><span class="icon fa fa-phone"></span></div>
                                       </div> 
                                       <input class="form-control con-field required{{$errors->has('contact') ? ' is-invalid' : ''}}" type="number" name="contact" id="contact inlineFormInputGroup" placeholder="Candidate Contact Number" maxlength="18">
                                    </div>
                                 </div>
 

                                       <div class="col-lg-6 col-md-6 col-sm-12"> 
                                          <div class="mb-2 input-group">
                                             <div class="input-group-prepend">
                                                <div class="input-group-text"><span class="icon fa fa-network-wired"></span></div>
                                             </div>
                                             <input class="form-control con-field{{$errors->has('work_exp') ? ' is-invalid' : ''}}" type="number" name="work_exp" id="work_exp inlineFormInputGroup" placeholder="Experiance" maxlength="50"> 
                                             @if ($errors->has('work_exp')) 
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{$errors->first('work_exp')}}</strong>
                                             </span> @endif 
                                          </div>
                                       </div>

                                       <div class="col-lg-6 col-md-6 col-sm-12">
                                          <div class="mb-2 input-group">
                                             <div class="input-group-prepend">
                                                <div class="input-group-text"><span class="icon fa fa-rupee-sign"></span></div>
                                             </div> 
                                             <input class="form-control con-field{{$errors->has('current_ctc') ? ' is-invalid' : ''}}" type="number" name="current_ctc" id="current_ctc inlineFormInputGroup" placeholder="Current CTC" maxlength="50"  > 

                                             @if ($errors->has('current_ctc')) 
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{$errors->first('current_ctc')}}</strong>
                                             </span> @endif 
                                          </div>
                                       </div>

                                       <div class="col-lg-12 col-md-12 col-sm-12">
                                          <div class="mb-2 input-group">
                                             <div class="input-group-prepend">
                                                <div class="input-group-text"><span class="icon fa fa-map-marker"></span></div>
                                             </div> 
                                             <input class="form-control con-field{{$errors->has('current_location') ? ' is-invalid' : ''}}" type="text" name="current_location" id="current_location inlineFormInputGroup" placeholder="Current location" maxlength="50"  >
                                             
                                             @if ($errors->has('current_location'))
                                             <span class="invalid-feedback" role="alert"> 
                                               <strong>{{$errors->first('current_location')}}</strong>
                                              </span> @endif 
                                          </div>
                                       </div>




                                 <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mb-2 input-group">
                                       <select style="text-transform: capitalize;" class="form-control con-field contact-formdropdown custom-select required" title="Select Inquiry Type" name="apply_type" id="apply_type inlineFormInputGroup" aria-required="true" aria-invalid="false" value="{{old('apply_type')}}">
                                          <option disabled="disabled" selected="selected" >Select Vacancy</option>
                                          @foreach($vacancies_dd as $car) 
                                          <option style="text-transform: capitalize;" value="{{$car->title}}"{{(old("apply_type")==$car ? "selected":"")}}>
                                             {{$car->title}}
                                          </option> 
                                          @endforeach 
                                          <option value="Others">Others</option>
                                       </select>
                                    </div>
                                 </div>
                                 
                                 <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mb-2 input-group">
                                       <div>
                                          <p>Upload Resume:<small >&ensp;(Max file upload size is 2MB)</small></p>
                                          <input type="file" id="resume" class="con-field{{$errors->has('resume') ? ' is-invalid' : ''}}" type="file" name="resume" accept=".pdf,.doc,.docx" value="{{old('resume')}}"/> <input type="hidden" name="MAX_FILE_SIZE" value="67108864"/> 
                                       </div>
                                    </div>
                                 </div>


                                 <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mb-2 input-group"> 
                                       <textarea class="form-control w-100 con-field p-2{{$errors->has('address') ? ' is-invalid' : ''}}" name="address" id="address inlineFormInputGroup" maxlength="500" placeholder="Message" style="height: 100px;" onKeyPress>{{old('address')}}</textarea> 
                                    </div>
                                 </div>

                                 <div class="col-lg-12 col-md-12 col-sm-12"> 
                                    <div class="mb-2 input-group"> 
                                       <button class="form-control w-50 btn btn-info" id="btnSubmit inlineFormInputGroup" type="submit" name="submit-form"><span class="txt">Apply</span></button> 
                                    </div>
                                 </div>
                           
                           </div>
						   </form>
                        </div>
					</div>
                  </aside>
				</div>
				
				<div class="pt-5 content-side right-sidebar col-lg-8 col-md-12 col-sm-12">
                     <section class="faq-page-section">
                        <div class="auto-container" style="padding: 0px 0px;">
                           <div class="sec-title centered"> <br></div>
                           <div class="clearfix row">
                              <div class="column col-lg-12 col-md-12 col-sm-12">
                                 <div id="accordion" class="">
                                 @foreach($vacancies as $car) 
                                       <div class="card">
                                          <div class="card-header" id="heading">
                                             <h5 class="mb-0 accordion-toggle">
                                                <button class="btn btn-outline-info" data-toggle="collapse" data-target="#collapse{{$car->id}}" aria-expanded="true" aria-controls="collapse">
                                                {{$car->title}}
                                                </button>
                                             </h5>
                                          </div>
                                                   
                                          <div id="collapse{{$car->id}}" class="accordian-body collapse" aria-labelledby="heading" data-parent="#accordion">
                                             <div class="card-body hiddenRow">
                                                <ul class="list-style-two">
                                                   {!! html_entity_decode($car->description) !!}
                                                </ul>         
                                             </div>
                                          </div>
                                       </div>
                                    @endforeach 
                                 </div>
                           </div>
                              </div>
                           </div>
                           {{$vacancies->appends($_GET)->links()}}
                        </div>
                     </section>
                  </div>
               
			   
            </div>
         </div>   
    </div> 

    <?php include_once("includes/footer.php"); ?>
<?php include_once("includes/script.php"); ?>

<script type="text/javascript">

         $(document).ready(function() {
            
            $("#uploaded_by").change();
            
            // $("#uploaded_by_email_wrapper").removeClass('d-none');
            // if($(this).val() == "1") 
            //    $("#txtEmail").attr("placeholder", "HR Email address");
            // else if($(this).val() == "2") 
            //    $("#txtEmail").attr("placeholder", "Consultant Email address");
            // else
            //    $("#uploaded_by_email_wrapper").addClass('d-none');
         });

         $("#uploaded_by").on("change", function() {
            $("#uploaded_by_email_wrapper").removeClass('d-none');
            if($(this).val() == "1") 
               $("#txtEmail").attr("placeholder", "HR Email address");
            else if($(this).val() == "2") 
               $("#txtEmail").attr("placeholder", "Consultant Email address");
            else
               $("#uploaded_by_email_wrapper").addClass('d-none');
         });

         $("#txtEmail").on("blur", function() { 
            if($("#txtEmail").val().trim() != "") {
               $.ajax({
                  type: "POST",
                  url: '{{ route('email.varification') }}',
                  data: {
                     "email" : $(this).val(),
                     "user_type" : $("#uploaded_by").val(),
                     _token: '{{ csrf_token() }}'
                  },
                  dataType: "json",
                  success: function( res ) {
                     if(res.is_exists) {
                        $(this).css('border-color', '#28a745');
                        $("#displayVerifyMessage").addClass('text-success').removeClass('text-danger').html("Verify Success.");
                        setTimeout(function() { $("#displayVerifyMessage").hide(); }, 50000);
                     } else {
                        $(this).css('border-color', '#dc3545');
                        $("#displayVerifyMessage").addClass('text-danger').removeClass('text-success').html("Verify Fail.");
                        setTimeout(function() { $("#displayVerifyMessage").hide(); }, 50000);
                     }
                  },
                  error: function (jqXHR, exception) {
                     $(this).css('border-color', '#dc3545');
                     $("#displayVerifyMessage").addClass('text-danger').html("Verify Fail.");
                     setTimeout(function() { $("#displayVerifyMessage").hide(); }, 50000);
                  }
               });
            }
         });
      </script>
</body>
</html>