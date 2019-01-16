 @include('frontend.ecommerce.dashboards.vendor.include.header')
 
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
 <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
 <style type="text/css">
  .edit_input{
    border:none;
    background-color: #ffffff;
  }
  input:focus{
    outline: none;
    border-bottom: 1px solid black;
  }
  input{
    border: none;
  }
  .name{
    text-transform: capitalize;
  }
  .basic-info{
    padding-top: 17px;
    padding-bottom: 12px;
    background-color: white;
    margin-top: 19px;
    margin-left: 0px;
    margin-right: 0px;
  }
  .profile-image > span {
    position: absolute;
    top: 70px;
    left: 70px;
    /* opacity: 0.5; */
    /* background-color: #56585a; */
    width: 139px;
    height: 70px;
    border-bottom-right-radius: 70px;
    border-bottom-left-radius: 70px;
    color: white;
    padding-top: 24px;
    font-size: 16px;
    background-color: rgb(52, 58, 0.);
    background-color: rgba(192,192,192,0.3);
    color: #343a40;
    font-weight: 600;
    cursor: pointer;
      }
  .profile-image{
    text-align: center;
    padding-top: 25px;
  }
  .profile-image > img{
    height: 106px;
    width: 106px;
    border-radius: 50%
  }
  .basic-info-2{
    padding-top: 25px;
  }
  .basic-info-3{
    padding-top: 25px;
  }
  ul.tabs li[data-v-85c5a11c] {
    padding-left: 31px;
    padding-right: 31px;
  }
  /*main{
    background-color: #f7f7f7;
    height: -webkit-fill-available;
  }*/
  .tabs-details{
    background-color: white;
    padding: 18px;
  }
  .nav-item{
text-align: center;
padding: 0px;
}
.tabs{
padding-top: 10px;
}
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    border-bottom: 2px solid black;
    border-right: none;
    border-left: none;
    border-top: none;
}
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link:hover {
    border-right: none;
    border-left: none;
    border-top: none;
}
.fa-edit{
        cursor: pointer;
        right: 0;
}
.attribute > span{
    font-weight: 600;
}
.attribute{
    padding-top: 10px;
}
.attribute > i{
    float: right;
}
.attribute > input{
    text-transform: capitalize;
}
.modified_select{
        border-right: none;
    border-top: none;
    border-left: none;
    background-color: #ffffff !important;
    border-radius: 0px;
    height: 23px;
    display: inline-block;
    width: 50%;
    padding-top: 0px;
    padding-bottom: 0px;
    font-size: 13px
}
.modified_select:focus{
    background-color: #fff;
    box-shadow: 0 0 0 0.2rem rgb(249, 249, 249);
}
.gj-datepicker{
    display: inline-flex;
}
.form-check-label {
    padding-left: 32px;
    display: none;
}
#datepicker{
    height: 30px;
    font-size: 15px;
}
.gj-icon{
    top: 6px !important;
}
.company-first-div{
    padding-bottom: 27px;
    background: white;
    border: 1px solid gainsboro;
    text-align: center;
}
.company-first-div-2{
    padding-bottom: 27px;
    background: white;
    border: 1px solid gainsboro;
    text-align: justify;
    padding: 18px;

    margin-top: 20px; 
}
.company-first-div-2 > p{
    font-size: 14px;
    font-family: serif; 
}
.company-2nd-div{
    border: 1px solid gainsboro;
    background-color: white;
    padding-top: 7px;
}
.company-2nd-div > p{
    display: inline;
}
.heading-p{
    font-size: 16px;
    font-weight: 500;
}
.underline{
    border-bottom: 5px solid #494e53;
    line-height: 1.6;
    margin-bottom: 31px !important;
    display: flex;
}
.incharge{
        height: 50px;
    float: left;
    width: 50px;
}
</style>
<div class="container-fluid">
    <div class="row">
        @include('frontend.ecommerce.dashboards.vendor.include.left-sidebar')            
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            @if (session('status'))
                <div class="alert alert-success" style="margin-bottom: 0px;">
                    {{ session('status') }}
                </div>
            @endif 
            <div class="row basic-info">
                <div class="col-md-3 col-sm-6" style="text-align: center;">
                    <label class="profile-image">
                        <img   src="{{$vendor->profile_url}}" id="profile_image">
                    </label>
                    
                    <a href="javascript:void(0)" style="display: block;" id="clickBtn">Change image</a>
                    <!-- <span  id="change_img">Change</span> -->
                    <input style="display: none;" type="file" id="file" name="profile-image">
                </div>
                <div class="col-md-4 col-sm-6 basic-info-2">
                    <h4 class="name">{{$vendor->first_name}}&nbsp;{{$vendor->last_name}}</h4>
                    <p class="email">{{$vendor->email}}</p>
                    <!-- <p class="gender">{{$vendor->gender}}</p> -->
                    <p class="gender">{{$vendor->gender}}</p>
                    <p class="contact">{{$vendor->contact_number}}</p>
                </div>
                <div class="col-md-4 col-sm-6 basic-info-3">
                    <p class="address">{{$vendor->address}}</p>
                    @if($vendor->area)
                    <p class="email">{{$vendor->area->area_name}}</p>
                    @endif
                    @if($vendor->area)
                    <p class="contact">{{$vendor->city->city_name}}</p>
                    @endif
                    <p class="contact">{{$vendor->city->country->country_name   }}</p>
                </div>
            </div>
            <div class="col-md-12 tabs">
                <ul class="nav nav-tabs">
                    <li class="nav-item col-md-4">
                        <a class="nav-link" data-toggle="tab" href="#profile">Your Profile</a>
                    </li>
                    <li class="nav-item col-md-4">
                        <a class="nav-link active" data-toggle="tab" href="#company">Company</a>
                    </li>
                    <li class="nav-item col-md-4">
                        <a class="nav-link" data-toggle="tab" href="#menu2">Reviews</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="profile" class="container tab-pane"><br>
                        <form action="{{url('ecommerce/vendor/profile')}}/{{$vendor->id}}" method="post">
                            {{csrf_field()}}
                            {{ method_field('PUT')}}                        
                            <div class="row" style="background-color: #ffffff;">
                                <div class="col-md-6 col-sm-6 col-xs-6 row attribute">
                                    <div class="col-md-3">
                                        <span  >First Name : </span>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="first_name" id="first_name"  class="edit_input" type="text" value="{{$vendor->first_name}}" >
                                    </div>
                                    <div class="col-md-3">
                                        <i class="fa fa-edit" onclick="return makeFocus('first_name');"></i>
                                    </div>
                                    
                                    <!-- <span contenteditable="true">{{$vendor->first_name}}</span> -->
                                    
                                    
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 row attribute">
                                    <div class="col-md-3">
                                        <span >Last Name : </span>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="last_name" id="last_name"  class="edit_input" type="text" value="{{$vendor->last_name}}" >
                                    </div>
                                    <div class="col-md-3">
                                        <i class="fa fa-edit" onclick="return makeFocus('last_name');"></i>
                                    </div>
                                    
                                    
                                    
                                    <!-- <editable :content="text" @update="text = $event">{{$vendor->last_name}}</editable> -->
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 row attribute">
                                    <div class="col-md-3">
                                        <span >Email : </span>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="email" id="email"  class="edit_input" type="text" value="{{$vendor->email}}" >
                                    </div>
                                    <div class="col-md-3">
                                        <i class="fa fa-edit" onclick="return makeFocus('email');"></i>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 row attribute">
                                    <div class="col-md-3">
                                        <span >Contact :</span>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="contact_number" id="contact_number"  class="edit_input" type="text" value="{{$vendor->contact_number}}" >
                                    </div>
                                    <div class="col-md-3">
                                        <i class="fa fa-edit" onclick="return makeFocus('contact_number');"></i>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 row attribute">
                                    <div class="col-md-3">
                                         <span style="text-transform: capitalize;">Gender :</span>
                                    </div>
                                    <div class="col-md-6">
                                        {{$vendor->gender}}
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender" value="male" @if($vendor->gender == 'male') checked @endif>Male
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender" value="female" @if($vendor->gender == 'female') checked @endif>Female
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <i class="fa fa-edit" onclick="return genderFocus();"></i>
                                    </div>
                                   

                                    
                                    
                                    <!-- <input name="gender" id="gender"  class="edit_input" type="text" value="{{$vendor->gender}}" > -->
                                    
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 row attribute">
                                    <div class="col-md-3">
                                        <span >CNIC : </span>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="cnic" id="cnic"  class="edit_input" type="text" value="{{$vendor->cnic}}" >
                                    </div>
                                    <div class="col-md-3">
                                        <i class="fa fa-edit" onclick="return makeFocus('cnic');"></i>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 row attribute">
                                    <div class="col-md-3">
                                        <span >Nationality : </span>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="nationality" id="nationality"  class="edit_input" type="text" value="{{$vendor->nationality}}" >
                                    </div>
                                    <div class="col-md-3">
                                        <i class="fa fa-edit" onclick="return makeFocus('nationality');"></i>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 row attribute">
                                    <div class="col-md-3">
                                        <span >City :</span>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control modified_select" name="city" id="city">
                                        <option disabled>please select</option>
                                        @foreach($cities as $city)
                                        <option value="{{$city->id}}" @if($vendor->city_id == $city->id) selected @endif>{{$city->city_name}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 row attribute">
                                    <div class="col-md-3">
                                        <span >Area :</span>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control modified_select" name="area" id="area">
                                            <option disabled>please select</option>
                                            @foreach($areas as $area)
                                            <option value="{{$area->id}}" @if($vendor->area_id == $area->id) selected @endif>{{$area->area_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 row attribute">
                                    <div class="col-md-3">
                                        <span >Address : </span>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="address" id="address"  class="edit_input" type="text" value="{{$vendor->address}}" >
                                    </div>
                                    <div class="col-md-3">
                                        <i class="fa fa-edit" onclick="return makeFocus('address');"></i>
                                    </div>
                                    
                                    
                                    
                                </div>
                                
                                
                                <div class="col-md-6 col-sm-6 col-xs-6 row attribute">
                                    <div class="col-md-3">
                                        <span >Date Of Birth:</span>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="date_of_birth" id="datepicker"  class="" type="text" value="{{$vendor->date_of_birth}}" width="193" >
                                    </div>
                                    
                                    
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 row attribute">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-3"></div>
                                    <button class="btn btn-success" style="float: right; display: none;">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="company" class="container tab-pane active"><br>
                        <div class="row">
                            <div class="col-md-5" style="padding-left: 0px;
                                padding-right: 0px;">
                                <div class="company-first-div" >
                                    <label class="profile-image">
                                        <img   src="{{$company->logo_path}}" id="profile_image">
                                    </label>
                                    <h4>{{$company->vendor_name}}</h4>
                                    <hr style="margin-right: 37px;     margin-left: 37px;">
                                    <label>{{$company->vendor_email}}</label>
                                    <br>
                                    <label>{{$company->vendor_contact}}</label><br>
                                    <label><a href="www.brothers.com">{{$company->vendor_url}}</a></label>
                                </div>
                                <div class="company-first-div-2" >
                                    <h5>Description</h5>
                                    <p>{{$company->vendor_description}}</p>
                                </div>
                            </div>
                            
                            <div style="    width: 40px;"></div>
                            <div class="col-md-6 company-2nd-div">
                                <img class="incharge" src="{{url('public/frontend/ecommerce/vendor/assets/icons/incharge.png')}}">
                                <h5 class="underline">Incharge</h5>
                                <p class="heading-p">Full Name</p>
                                <p>{{$company->person_incharge}}</p><br>

                                <p class="heading-p">Email</p>
                                <p>{{$company->incharge_email}}</p><br>

                                <p class="heading-p">Contact</p>
                                <p>{{$company->incharge_contact}}</p><br>

                                <p class="heading-p">CNIC No.</p>
                                <p>{{$company->incharge_cnic}}</p><br>

                                <p class="heading-p">CNIC Image back</p>
                                <p>coming soon</p><br>

                                <p class="heading-p">CNIC Image back</p>
                                <p>coming soon</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12"></div>
            </div>
            
        </main>
    </div>
</div>
@include('frontend.ecommerce.dashboards.vendor.include.footer')
<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
<script type="text/javascript">
    var makeFocus = function(id){
        $('#'+id).focus();
        $(".btn-success").css("display","inline-block");
    }
    var genderFocus = function(id){
        $(".form-check-label").css("display","inline-block");
        $(".btn-success").css("display","inline-block");
    }

    $('#city').change(function(){
        $(".btn-success").css("display","inline-block");
    });
    $('#area').change(function(){
        $(".btn-success").css("display","inline-block");
    });
    $('#datepicker').change(function(){
        $(".btn-success").css("display","inline-block");
    });

    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#clickBtn').click(function(){
        $('#file').click();
    })
    $('#file').change(function () {
                        var file_data = $('#file').prop('files')[0];
                        var form_data = new FormData();
                        form_data.append('file', file_data);
                        form_data.append('id', {{$vendor->id}});
                        $.ajax({

                            url: 'http://localhost:8080/Eitmad5.5/ecommerce/vendor/upload/profile', // point to server-side controller method
                            // url: 'http://localhost/Eitmad5.5/ecommerce/vendor/upload/profile', // point to server-side controller method

                            dataType: 'text', // what to expect back from the server
                            cache: false,
                            contentType: false,
                            processData: false,
                            data: form_data,
                            type: 'post',
                            success: function (response) {
                                // $('#msg').html(response); // display success response from the server
                                console.log(response);
                                $('#profile_image').attr('src',response);
                                $('#file').val('');
                            },
                            error: function (response) {
                                $('#msg').html(response); // display error response from the server
                            }
                        });
                    });
</script>