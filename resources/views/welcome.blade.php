<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <title>حطب</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset("website/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("website/css/fonts.google-apis.css")}}">
    <link rel="stylesheet" href="{{asset("website/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("website/css/style.css")}}">

</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">حطب لخدمات الأخشاب</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">

                    <div class="row no-gutters">
                        <div class="col-md-7">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4 text-center">تواصل معنا</h3>
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">
                                    Your message was sent, thank you!
                                </div>
                                    @include("website.messages")

                                <form method="post" action="{{url("/shipment-request/send")}}" class="contactForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="name">الاسم كامل</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="أكتب الاسم كامل" value="{{ old("name") }}">
                                                @error("name")<span class="error text-danger error-message">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="phone">رقم الهاتف</label>
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="أكتب رقم الهاتف" value="{{ old("phone") }}">
                                                @error("phone")<span class="error text-danger error-message">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="address">العنوان</label>
                                                <input type="text" class="form-control" name="address" id="address" placeholder="أكتب العنوان" value="{{ old("address") }}">
                                                @error("address")<span class="error text-danger error-message">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" name="latitude" id="latitude" value="">
                                                <input type="hidden" name="longitude" id="longitude" value="">
                                                <button class="btn btn-light background-c3" id="pick_location" title="اضغط هنا لتحديد موقعك على الخريطة">
                                                    <span> تحديد موقعك </span>
                                                    <i class="fa fa-map-pin text-danger" title="اضغط هنا لتحديد موقعك على الخريطة"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="activity">النشاط</label>
                                                <select class="form-control" name="activity" id="activity" >
                                                    <option value="">أختر نشاط</option>
                                                    <option value="بائع حطب"> بائع حطب</option>
                                                    <option value="متجول">متجول</option>
                                                    <option value="محل رحلات">محل رحلات</option>
                                                    <option value="بقالة">بقالة</option>
                                                    <option value="استراحة">استراحة</option>
                                                    <option value="تاجر جملة">تاجر جملة</option>
                                                    <option value="أخرى">أخرى</option>
                                                </select>
                                                @error("activity")<span class="error text-danger error-message">{{ $message }}</span> @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="label other-activity" for="other_activity">نشاط آخر</label>
                                                <input type="text" class="form-control other-activity" name="other_activity" id="other_activity" placeholder="أكتب نشاط آخر" value="{{ old("other_activity") }}">
                                                @error("other_activity")<span class="error text-danger error-message">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="have_sample">استلم عينه</label>
                                                <div class="switch-field">
                                                    <input type="radio" id="radio-one"  name="have_sample" value="1" {{ old("have_sample") == 1 ? "checked" : "" }}/>
                                                    <label for="radio-one">نعم</label>
                                                    <input type="radio" id="radio-two" name="have_sample" value="0" {{ old("have_sample") == 0 ? "checked" : "" }} />
                                                    <label for="radio-two">لا</label>
                                                </div>
                                                @error("have_sample")<span class="error text-danger error-message">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="offer_value">قيمة العرض المقدم</label>
                                                <input type="number" class="form-control" name="offer_value" id="offer_value" placeholder="أكتب قيمة العرض المقدم" value="{{ old("offer_value") }}">
                                                @error("offer_value")<span class="error text-danger error-message">{{ $message }}</span> @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="have_sample">اختر تقييمك</label>
                                                <div class="rate">
                                                    <input type="radio" id="star5" name="rate" value="5" />
                                                    <label for="star5" title="5"></label>
                                                    <input type="radio" id="star4" name="rate" value="4" />
                                                    <label for="star4" title="4"></label>
                                                    <input type="radio" id="star3" name="rate" value="3" />
                                                    <label for="star3" title="3"></label>
                                                    <input type="radio" id="star2" name="rate" value="2" />
                                                    <label for="star2" title="2"></label>
                                                    <input type="radio" id="star1" name="rate" value="1" />
                                                    <label for="star1" title="1"></label>
                                                </div>
                                            </div>
                                                @error("rate")<h6 class="error text-danger error-message">{{ $message }}</h6> @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="feedback">تعليق</label>
                                                <input type="text" class="form-control" name="feedback" id="feedback" placeholder="أكتب التعليق" value="{{ old("feedback") }}">
                                                @error("feedback")<span class="error text-danger error-message">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        {{--<div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">البريد الالكتروني</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="أكتب البريد الالكتروني">
                                            </div>
                                        </div>--}}

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="vendor_name">اسم البائع</label>
                                                <input type="text" class="form-control" name="vendor_name" id="name" placeholder="أكتب اسم البائع" value="{{ old("vendor_name") }}">
                                                @error("vendor_name")<span class="error text-danger error-message">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="notes">ملاحظات</label>
                                                <textarea name="notes" class="form-control" id="notes" cols="30" rows="4" placeholder="أكتب الملاحظات">{{ old("notes") }}</textarea>
                                                @error("notes")<span class="error text-danger error-message">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="ارسال" class="btn btn-primary display-flex">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap w-100 p-5 img" style="background-image: url({{ asset("website/images/woods.jpg") }});"></div>
                            <div id="map" class="map-style"></div>

                        </div>

                    </div>
                    <div class="row mb-5 margin-top-5">
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text">
                                    <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text">
                                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text">
                                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="text">
                                    <p><span>Website</span> <a href="#">yoursite.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--<p>Click the button to get your coordinates.</p>

                    <button onclick="getLocation()">Try It</button>

                    <p id="demo"></p>--}}
                    {{--<div id="map" style="width:600px;height:300px"></div>--}}
                </div>
            </div>
        </div>
    </div>
</section>


<script src="{{asset("website/js/jquery.min.js")}}"></script>

<script src="{{asset("website/js/popper.js")}}"></script>
<script src="{{asset("website/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("website/js/jquery.validate.min.js")}}"></script>
<script src="{{asset("website/js/main.js")}}"></script>
<script src="{{asset("website/js/plugin.js")}}"></script>
<script language=javascript src='https://maps.google.com/maps/api/js?sensor=false'></script>


<script>
    //var x = document.getElementById("demo");
    $("#pick_location").on('click',function (event){
        event.preventDefault();
        getLocation();
    });

    function getLocation() {
        //console.log(navigator.geolocation.getCurrentPosition(latitude))
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            //x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        $("#longitude").val(position.coords.longitude);
        $("#latitude").val(position.coords.latitude);
        navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
       /* x.innerHTML = "Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude;*/
    }



     function successCallback(position){
        console.log(position);

        initialize(position.coords.latitude,position.coords.longitude);
         //google.maps.event.addDomListener(window,'load',in);
        return  position;
    }

    const errorCallback = (error) => {
        console.log(error);
    };

    //navigator.geolocation.getCurrentPosition(successCallback, errorCallback);


    function initialize(la,lo){
        var latlon = new google.maps.LatLng(la,lo);
        var myOptions={
            center:latlon,zoom:14,
            mapTypeId:google.maps.MapTypeId.ROADMAP,
            mapTypeControl:false,
            navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
        };
        var map = new google.maps.Map(document.getElementById("map"), myOptions);
        var marker=new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
        //google.maps.event.addDomListener(window,'load', myOptions);
    }

    //google.maps.event.addDomListener(window,'load', initialize);
</script>

</body>
</html>

