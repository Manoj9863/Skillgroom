$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
 
  var base_url = 'http://localhost:8000/';

  $(document).on('click', '#BookClass', function(){

    var classes = $("#classes").val();
    var teacher_id = $("#teacher_id").val();
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var email = $("#email").val();
    var contact = $("#contact").val();
    var country = $("#country").val();
    var state = $("#state").val();
    var city = $("#city").val();


    var ClassData = {
        teacher_id: teacher_id, 
        classes: classes,
        first_name : first_name,
        last_name: last_name,
        email: email,
        contact: contact,
        country: country,
        state: state,
        city: city
    }

    $.ajax({
        type: "post",
        url: base_url+"api/store_classes",
        data: ClassData,
        dataType: "JSON",
        success: function (data) {
            if(data.error){
                // alert(data.message);
                return false;
            }else{
                // alert(data.message);
                $("#ShowMsg").show();
                $("#SussMsg").text(data.message);
                setTimeout(function(){
                    location.reload();
                  }, 3000);  
                return false;
            }
        }
    });
  });




  $(document).on('click', '#AddPartners', function(){

    var name = $("#name").val();
    var email = $("#email").val();
    var mobile = $("#mobile").val();
    var state = $("#state").val();
    var city = $("#city").val();
    var tution = $("#tution").val();
    var subjects = $("#subjects").val();
    var standard = $("#standard").val();
    var education = $("#education").val();
    var no_of_students = $("#no_of_students").val();
    var website = $("#website").val();


    var PartnersData = {
        name : name,
        email: email,
        mobile: mobile,
        state: state,
        city: city,
        tution: tution,
        subjects: subjects,
        standard: standard,
        education: education,
        no_of_students: no_of_students,
        website: website
    }

    $.ajax({
        type: "post",
        url: base_url+"api/store_partners",
        data: PartnersData,
        dataType: "JSON",
        success: function (data) {
            if(data.error){
                // alert(data.message);
                return false;
            }else{
                // alert(data.message);
                $("#ShowMsg").show();
                $("#SussMsg").text(data.message);
                setTimeout(function(){
                    location.reload();
                  }, 4000);  
                return false;
            }
        }
    });
  });





  $(document).on('click', '#Inquiry', function(){

    var name = $("#name").val();
    var email = $("#email").val();
    var mobile = $("#mobile").val();
    var location = $("#location").val();
    var category = $("#category").val();
    var inquiry = $("#inquiry").val();


    var InquiryData = {
        name : name,
        email: email,
        mobile: mobile,
        location: location,
        category: category,
        inquiry: inquiry,
    }

    $.ajax({
        type: "post",
        url: base_url+"api/store_inquiry",
        data: InquiryData,
        dataType: "JSON",
        success: function (data) {
            if(data.error){
                // alert(data.message);
                return false;
            }else{
                // alert(data.message);
                $("#ShowMsgInq").show();
                $("#SussMsgInq").text(data.message);
                setTimeout(function(){
                    window.location.reload();
                  }, 4000);  
                return false;
            }
        }
    });
  });