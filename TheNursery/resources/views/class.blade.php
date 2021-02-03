@extends('Layout.master')
@section('Title','CLASS')
@section('section')
<div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h1 class="bg-primary py-3 ">Classes for Your Kids</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <div class="card-body text-center">
                            <h4 class="card-title">SESSION</h4>
                            <p class="card-text">08:00 am - 12:00 pm</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <div class="card-body text-center">
                            <h4 class="card-title">DAY</h4>
                            <p class="card-text">Choose between Monday through Friday</p>
                        </div>
                    </div>
                </div>                
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <div class="card-body text-center">
                            <h4 class="card-title">PRICE</h4>
                            <p class="card-text">500 pesos/Session</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Class End -->

     <!-- Registration Start -->
        <div class="container">
        <h1 align="center" class="bg-light py-3">JOIN CLASS</h1> <br><br>
         
        <form method="POST" action="/gallery">
            @csrf
            <div>
                    <h5>  <b>Select Session Day/s</b></h5>

                    <input type="checkbox" id="monday" name="day[]" value="Monday" price ="500" class="session">
                    <label for="monday">Monday</label>
                    <input type="checkbox" id="tuesday" name="day[]" value="Tuesday" class="session" price ="500">
                    <label for="tuesday">Tuesday</label>
                    <input type="checkbox" id="wednesday" name="day[]" value="Wednesay" class="session" price ="500">
                    <label for="wednesday">Wednesay</label>
                    <input type="checkbox" id="thursday" name="day[]" value="Thursday" class="session" price ="500">
                    <label for="thursday">Thursday</label>
                    <input type="checkbox" id="friday" name="day[]" value="Friday" class="session" price ="500">
                    <label for="friday">Friday</label><br>
                    <h5>  <b>Total Session Price : ₱ <span id="tots"></span></b></h5>
                       
                    <input type="hidden" name="total" id="total" value="">
                   
                </div>
             <br>
                <div>
                    <h4> <b>Registration Date</b></h4>
                    <input type="date" name="regdate" placeholder="Registration Date">
                    </div><br>
            <div class="dynamic_field ">
                <h4><b>Child Detail</b></h4>
                    <input type="text" name="fname" placeholder="First Name" >
                    <input type="text" name="lname" placeholder="Last Name" >
                    <input type="text" name="gender" placeholder="Gender" >   
                    <b>Date of Birth</b> &nbsp;<input type="Date" name="dob" >    
            </div> <br>
            <div class="dynamic_field2">
                <h4><b>Parent Details</b></h4>
                    <input type="text" name="f_fname" placeholder="Father's First Name" >
                    <input type="text" name="f_lname" placeholder=" Father's Last Name" >
                    <input type="text" name="f_mob" placeholder="Mobile Number" > <br><br> 
                    <input type="text" name="m_fname" placeholder="Mother's First Name" >
                    <input type="text" name="m_lname" placeholder="Mother's Last Name" >
                    <input type="text" name="m_mob" placeholder="Mobile Number" >   <br><br>
                    <input type="text" name="barangay" placeholder="Barangay" >
                    <input type="text" name="town" placeholder="Town/City" >
                    <input type="text" name="prov" placeholder="Province" >
            </div><br>
            <div>
            <h4><b>Incase of Emergency</b></h4>
                    <input type="text" name="contact" placeholder="Contact Number" >  
            </div><br><br>
            <div class="row row-cols-lg-2" style="padding-left: 20px"> 
                <input type="submit" name="submit" value="Enroll" class="btn btn-primary px-5">
            </form>
            </div>
        </div>
    </div>
    <!-- Registration End -->
   


<script type="text/javascript">
          var limit = 3;
          $('input.session').on('change', function(evt) {
            if($(this).siblings(':checked').length >= limit) {
                this.checked = false;
            }
        });
      </script>
<script type="text/javascript">
    function calc() {

  var tots = 0;
  $(".session:checked").each(function() {
    var price = $(this).attr("price");
    tots += parseFloat(price);
  });
  $('#tots').text(tots.toFixed(2));
  var data =  $('#tots').html();
        $('#total').val(data);
}

$(function() {
  $(document).on("change", ".session", calc);
  calc();
  

});


</script>

@endsection