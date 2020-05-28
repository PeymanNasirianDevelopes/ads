function split(val) {
    return val.split(/,\s*/);

}
function extractLast(term) {
    return split(term).pop();
}
$(document).ready(function () {
    $('.modal').modal();

    $("#BasicInfoMobile").on("blur", function () {
        var mobNum = $(this).val();
        //  var filter = /^\d*(?:\.\d{1,2})?$/;

        // if (filter.test(mobNum)) {
        if (mobNum.length != 0 && mobNum.length != 11) {
            toastr.error('شماره موبایل را به درستی وارد کنید .');
            $(this).val('');

            return false;
        }

    });
    $("#BasicInfoPhone").on("blur", function () {
        var mobNum = $(this).val();
        //  var filter = /^\d*(?:\.\d{1,2})?$/;

        // if (filter.test(mobNum)) {
        if (mobNum.length != 0 && mobNum.length != 11) {
            toastr.error('شماره تلفن را به درستی وارد کنید .');
            $(this).val('');

            return false;
        }

    });


    $("#BasicInfoEmail").on("blur", function () {
        var mobNum = $(this).val();//ایمیل
        var filter = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;


        if (filter.test(mobNum) || mobNum.length == 0) {

        } else {
            toastr.error('ایمیل به درستی وارد نشده است!');
            $(this).val('');
            return false;
        }

    });
//$('#circle').circleProgress({
//    value: 0,
//    size: 80,
//    fill: {
//      gradient: ["green", "green"]
//    }
//  });
//    var circle = $('#circle').circleProgress({
//  value: 0.0
//}).on('circle-animation-progress', function(event, progressValue, stepValue) {
//  $(this).find('.value').text(stepValue.toFixed(2));
//});
    $('.js-example-basic-multiple').select2({
        dir: "rtl"
    });
    $('.js-example-basic-single').select2();
    //  $('.sidenav').sidenav();


//    $('#SkillInfosSkillName').typeahead({
//        source: function (query, result) {
//            $.ajax({
//                url: siteurl + 'builder1/software',
//                data: {query:query},
//                dataType: "json",
//                type: "POST",
//                success: function (data) {
//                    $.each(data, function (key, value) {
//                        var name = value.name;
//                        var id = value.id;
//                        result($.map(name, function (item) {
//                            return item;
//                        }));
//                    });
//
//
//                }
//            });
//        }
//    });
//$('#autocomplete').autocomplete({
//    paramName: 'searchString',
//    transformResult: function(response) {
//        return {
//            suggestions: $.map(response.myData, function(dataItem) {
//                return { value: dataItem.valueField, data: dataItem.dataField };
//            })
//        };
//    }
//})


//var resulta=['a','b'];
//    $("#SkillInfosSkillName1").autocomplete({
//
//        source: function (request, response) {
//            $.ajax({
//                url: "software/" + request.term + '/',
//                dataType: "jsonp",
//
//                data: {
//                    // q: request.term
//                },
//                success: function (result) {
//                    //  alert(result.data);
//                    response(result.data);
//                }
//            });
//        },
//
//        select: function (event, ui) {
//            // Set selection
//            $('#SkillInfosSkillName').val(ui.item); // display the selected text
//            //$('#selectuser_id').val(ui.item.value); // save selected id to input
//            return false;
//        }
//    });
});
// $("#SkillInfosSkillName1").flexdatalist({
//
//     minLength: 1,
//     searchIn: 'name',
//     data: 'http://127.0.0.1/test/'
//
//});
//    $("#SkillInfosSkillName").autocomplete({
//        source: function (query, result) {
//            $.ajax({
//                url: siteurl + 'builder/software',
//                data: {query: query},
//                dataType: "json",
//                type: "POST",
//                success: function (data) {
//                    var response = new Array();
//                    response[0] = result.data;
//                    if (result.data.length == 0) {
//
//                    } else {
//                      //  $.each(response, function (index, obj) {
//                            $.each(data, function (key, value) {
//                                var name = value.name;
//                                var id = value.id;
//                                 response($.map(value, function(item) {
//          return {
//           value: name,
//           id: id
//          };
//         }));
//                                result($.map(value, function (item) {
//
//                                    return item;
//                                }));

//});
// }


//  }
// });
// }
// });

//$(".dropdown-trigger").dropdown();

var x = 400;
var education = 100;
var y;
var countsocial = 2;
var counteducation = 1;
var current = 1;
var height = 0;
$(function () {
    $("#EducationInfosFieldOfStudy").autocomplete({
        source: "fieldofstudy",
        minLength: 2
    });
//      select: function(event, ui) {
//        event.preventDefault();
//        $(".auto").val(ui.item);
//        $(".auto").val(ui.item);
//    },
//    focus: function(event, ui) {
//        event.preventDefault();
//        $(".auto").val(ui.item);
//    }
    var loadtruecity = function (provice, callback) {

        // $(".clonein2 [name='EducationInfosProvinceId[]']").change(function () {
        //$("#EducationInfosCityId")[0].selectize.clearOptions();
        $(".clonein2 [name='EducationInfosProvinceId[]']").parent().parent().parent().find("[id='EducationInfosCityId'] option").remove().end();
        // $('#EducationInfosCityId').find('option').remove().end();
        $.ajax({
            url: siteurl + "builder/loadcity",
            data: {
                provincename: provice
            },
            type: "Post",
            dataType: 'json',
            success: function (data) {
                if (data.id != '0') {
                    var response = new Array();
                    response[0] = data.data;
                    $.each(response, function (index, obj) {
                        $.each(obj, function (key, valuem) {
                            var val = valuem.value;
                            var tex = valuem.text;
                            // var $select = $('#EducationInfosCityId');
                            //var selectize = $select[0].selectize;
                            // selectize.addOption({value: val, text: tex});
                            //  selectize.addItem(val);
                            //  $(this).parent().parent().parent().find("[id='EducationInfosCityId']").append(new Option(tex, val));
                            $(".clonein2 div[id='selectcity2'] select[id='EducationInfosCityId']").append(new Option(tex, val));
                            //  var o = new Option("option text", "value");
/// jquerify the DOM object 'o' so we can use the html method
//$(o).html("option text");
//$("#selectList").append(o);
                        });
                    });
                    callback();
                }
            }
        });

    }

    var loadtruecity2 = function (provice, callback) {

        // $(".clonein2 [name='EducationInfosProvinceId[]']").change(function () {
        //$("#EducationInfosCityId")[0].selectize.clearOptions();
        $(".clonein3 [name='ExperienceInfosProvinceId[]']").parent().parent().parent().find("[id='ExperienceInfosCityId'] option").remove().end();
        // $('#EducationInfosCityId').find('option').remove().end();
        $.ajax({
            url: siteurl + "builder/loadcity",
            data: {
                provincename: provice
            },
            type: "Post",
            dataType: 'json',
            success: function (data) {
                if (data.id != '0') {
                    var response = new Array();
                    response[0] = data.data;
                    $.each(response, function (index, obj) {
                        $.each(obj, function (key, valuem) {
                            var val = valuem.value;
                            var tex = valuem.text;
                            // var $select = $('#EducationInfosCityId');
                            //var selectize = $select[0].selectize;
                            // selectize.addOption({value: val, text: tex});
                            //  selectize.addItem(val);
                            //  $(this).parent().parent().parent().find("[id='EducationInfosCityId']").append(new Option(tex, val));
                            $(".clonein3 div[id='selectcity3'] select[id='ExperienceInfosCityId']").append(new Option(tex, val));
                            //  var o = new Option("option text", "value");
/// jquerify the DOM object 'o' so we can use the html method
//$(o).html("option text");
//$("#selectList").append(o);
                        });
                    });
                    callback();
                }
            }
        });

    }
    $.ajax({url: siteurl + 'builder/loadinfo',
        type: 'POST',
        data: {},
        dataType: 'json',
        success: function (result) {
            if (result.id == '1') {
                $('#BasicInfoAbout').val(result.BasicInfoAbout);
                $('#BasicInfoAddress').val(result.BasicInfoAddress);
                //      $('#BasicInfoBirthMonth').val(result.BasicInfoBirthMonth);
                //      $('#BasicInfoBirthYear').val(result.BasicInfoBirthYear);
                //     $('#BasicInfoCityId').val(result.BasicInfoCityId);
                $('#BasicInfoCityTitle').val(result.BasicInfoCityTitle);
                //   $('#BasicInfoCountryId').val(result.BasicInfoCountryId);
                $('#BasicInfoEmail').val(result.BasicInfoEmail);
                $('#BasicInfoFirstName').val(result.BasicInfoFirstName);
                // $('#BasicInfoGender').val(result.BasicInfoGender).trigger('change');
                $('#BasicInfoLastName').val(result.BasicInfoLastName);
                // $('#BasicInfoMaritalStatus').val(result.BasicInfoMaritalStatus);
                // $('#BasicInfoMilitaryStatus').val(result.BasicInfoMilitaryStatus);
                $('#BasicInfoMobile').val(result.BasicInfoMobile);
                $('#BasicInfoPhone').val(result.BasicInfoPhone);
                // $('#BasicInfoProvinceId').val(result.BasicInfoProvinceId);
                $('#BasicInfoProvinceTitl').val(result.BasicInfoProvinceTitl);
                $('#BasicInfoWebsite').val(result.BasicInfoWebsite);

                var UserSocialNets = result.UserSocialNets;
                var UserSocialNetsaddress = result.UserSocialNetsaddress;

                var lenghtsocial = result.lenghtsocial;
                var x = 0;
                var y = 0;
                var yy = 0;

                if (lenghtsocial > 0) {
                    if (lenghtsocial > 2) {
                        while ((x + 2) < lenghtsocial) {
                            var $button = $('.clonein').clone();
                            $button.removeClass('clonein');
                            $button.find('.deldiv').removeClass('hidden');
                            $('.socialdiv').append($button);
                            x++;
                        }
                    }

                    $('select[name="UserSocialNets[]"]').each(function () {
                        $(this).val(UserSocialNets[y]);
                        y++;

                    });
                    $('input[name="UserSocialNetsaddress[]"]').each(function () {
                        //  for (var key in UserSocialNetsaddress){
                        if (UserSocialNetsaddress[yy] == 0) {
                            $(this).val('');
                        } else {
                            $(this).val(UserSocialNetsaddress[yy]);
                        }

                        yy++;
                    });


                }
                $('#profilephoto').attr('src', result.imageprofile);
                //********
                var $select = $('#BasicInfoGender').selectize();
                var selectize = $select[0].selectize;

                selectize.setValue(result.BasicInfoGender);

//*********

                var $select = $('#BasicInfoBirthMonth').selectize();
                var selectize = $select[0].selectize;

                selectize.setValue(result.BasicInfoBirthMonth);
//*********
                var $select = $('#BasicInfoBirthYear').selectize();
                var selectize = $select[0].selectize;

                selectize.setValue(result.BasicInfoBirthYear);
//*********
                var $select = $('#BasicInfoCityId').selectize();
                var selectize = $select[0].selectize;

                selectize.setValue(result.BasicInfoCityId);
//*********
                var $select = $('#BasicInfoCountryId').selectize();
                var selectize = $select[0].selectize;

                selectize.setValue(result.BasicInfoCountryId);
//*********
                var $select = $('#BasicInfoMaritalStatus').selectize();
                var selectize = $select[0].selectize;

                selectize.setValue(result.BasicInfoMaritalStatus);
//*********
                var $select = $('#BasicInfoMilitaryStatus').selectize();
                var selectize = $select[0].selectize;

                selectize.setValue(result.BasicInfoMilitaryStatus);
//*********
                var $select = $('#BasicInfoProvinceId').selectize();
                var selectize = $select[0].selectize;

                selectize.setValue(result.BasicInfoProvinceId);
//*********
//*********
                var $select = $('#BasicInfoBirtDay').selectize();
                var selectize = $select[0].selectize;

                selectize.setValue(result.BasicInfoBirthday);

////////////////education info load
                var lenghteducation = result.lenghteducation;
                var x = 0;


                if (lenghteducation > 0) {
                    if (lenghteducation > 1) {
                        while ((x + 1) < lenghteducation) {
                            var $button = $('.clonein2').clone();
                            $button.removeClass('clonein2');
                            $button.find('.deldiv').removeClass('hidden');
                            $('.educationdiv').append($button);
                            x++;
                        }
                    }
                    var ye = 0;
                    $('select[name="EducationInfosEducationLevel[]"]').each(function () {
                        $(this).val(result.EducationInfosEducationLevel[ye]);
                        $(this).trigger('change');
                        ye++;

                    });
                    ye = 0;
                    $('input[name="EducationInfosBranch[]"]').each(function () {
                        //  for (var key in UserSocialNetsaddress){
                        $(this).val(result.EducationInfosBranch[ye]);
                        ye++;
                    });

                    ye = 0;
                    $('input[name="EducationInfosEducationInstitudeTitle[]"]').each(function () {
                        //  for (var key in UserSocialNetsaddress){
                        $(this).val(result.EducationInfosEducationInstitudeTitle[ye]);
                        ye++;
                    });



                    ye = 0;
                    $('input[name="EducationInfosGrade[]"]').each(function () {
                        //  for (var key in UserSocialNetsaddress){
                        $(this).val(result.EducationInfosGrade[ye]);
                        ye++;
                    });

                    ye = 0;
                    $('input[name="EducationInfosCityTitle[]"]').each(function () {
                        //  for (var key in UserSocialNetsaddress){
                        $(this).val(result.EducationInfosCityTitle[ye]);
                        ye++;
                    });
                    ye = 0;
                    $('input[name="EducationInfosProvinceTitle[]"]').each(function () {
                        //  for (var key in UserSocialNetsaddress){
                        $(this).val(result.EducationInfosProvinceTitle[ye]);
                        ye++;
                    });

                    ye = 0;
                    $('select[name="EducationInfosFieldOfStudy[]"]').each(function () {
                        $(this).val(result.EducationInfosFieldOfStudy[ye]);
                        ye++;

                    });
                    ye = 0;
                    $('select[name="EducationInfosUpperGraduageInstitudeType[]"]').each(function () {
                        $(this).val(result.EducationInfosUpperGraduageInstitudeType[ye]);
                        ye++;

                    });
                    ye = 0;
                    $('select[name="EducationInfosUnderGraduateInstitudeType[]"]').each(function () {
                        $(this).val(result.EducationInfosUnderGraduateInstitudeType[ye]);
                        ye++;

                    });
                    ye = 0;
                    $('select[name="EducationInfosCountryId[]"]').each(function () {
                        $(this).val(result.EducationInfosCountryId[ye]);
                        if (result.EducationInfosCountryId[ye] == 2) {
                            $(this).trigger('change');
                        }
                        ye++;

                    });

                    ye = 0;
                    $('select[name="EducationInfosProvinceId[]"]').each(function () {

                        $(this).val(result.EducationInfosProvinceId[ye]);
                        var yx = 0;
                        $('div[name="selectcity2[]"] select[name="EducationInfosCityId[]"]').each(function () {///?erroe
                            if (ye == yx) {
                                var cityid = result.EducationInfosCityId[yx];
                                //  $(this).trigger('change');
                                var that = $(this);
                                loadtruecity(result.EducationInfosProvinceId[ye], function () {
                                    that.val(cityid).change();

                                });

                                yx++;
                            }
                        });
                        ye++;
                    });


                    ye = 0;
                    $('select[name="EducationInfosEntranceYear[]"]').each(function () {
                        $(this).val(result.EducationInfosEntranceYear[ye]);
                        ye++;

                    });
                    ye = 0;
                    $('select[name="EducationInfosGraduateYear[]"]').each(function () {
                        $(this).val(result.EducationInfosGraduateYear[ye]);
                        ye++;

                    });

                    ye = 0;
                    $('input:checkbox[name="studing[]"]').each(function () {
                        if (result.studing[ye] == 1) {

                            $(this).prop('checked', true);
                            $(this).attr("checked", true);
                            $(this).parent().parent().parent().parent().find("[id='EducationInfosGraduateYear']").val('');
                            $(this).parent().parent().parent().parent().find("[id='EducationInfosGraduateYear']").prop('disabled', true);


                            ye++;
                        } else {
                            $(this).prop('checked', false);
                            $(this).attr("checked", false);
                            $(this).parent().parent().parent().parent().find("[id='EducationInfosGraduateYear']").prop('disabled', false);
                        }
                    });
                }


//////////////////////////////////////

                var lenghtexperience = result.lenghtexperience;
                var x = 0;

                if (lenghtexperience > 0) {
                    if (lenghtexperience > 1) {
                        while ((x + 1) < lenghtexperience) {
                            var $button = $('.clonein3').clone();
                            $button.removeClass('clonein3');
                            $button.find('.deldiv').removeClass('hidden');
                            $('.experiencediv').append($button);
                            x++;
                        }
                    }
                    var yex = 0;
                    $('select[name="ExperienceInfosJobCategoryId[]"]').each(function () {
                        $(this).val(result.ExperienceInfosJobCategoryId[yex]);
                        yex++;

                    });
                    yex = 0;
                    $('select[name="ExperienceInfosEmployerType[]"]').each(function () {
                        $(this).val(result.ExperienceInfosEmployerType[yex]);
                        yex++;
                    });

                    yex = 0;
                    $('input[name="ExperienceInfosCompanyName[]"]').each(function () {
                        $(this).val(result.ExperienceInfosCompanyName[yex]);
                        yex++;
                    });

                    ye = 0;
                    $('select[name="ExperienceInfosEmploymentType[]"]').each(function () {
                        $(this).val(result.ExperienceInfosEmploymentType[ye]);
                        ye++;
                    });

                    ye = 0;
                    $('select[name="ExperienceInfosJobLevel[]"]').each(function () {
                        $(this).val(result.ExperienceInfosJobLevel[ye]);
                        ye++;
                    });
                    ye = 0;
                    $('input[name="ExperienceInfosProvinceTitle[]"]').each(function () {
                        $(this).val(result.ExperienceInfosProvinceTitle[ye]);
                        ye++;
                    });

                    ye = 0;
                    $('input[name="ExperienceInfosCityTitle[]"]').each(function () {
                        $(this).val(result.ExperienceInfosCityTitle[ye]);
                        ye++;

                    });
                    ye = 0;
                    $('input[name="ExperienceInfosJobTitle[]"]').each(function () {
                        $(this).val(result.ExperienceInfosJobTitle[ye]);
                        ye++;

                    });
                    ye = 0;
                    $('select[name="ExperienceInfosStartingMonth[]"]').each(function () {
                        $(this).val(result.ExperienceInfosStartingMonth[ye]);
                        ye++;

                    });
                    ye = 0;
                    $('select[name="ExperienceInfosStartingYear[]"]').each(function () {
                        $(this).val(result.ExperienceInfosStartingYear[ye]);
                        ye++;

                    });


                    ye = 0;
                    $('select[name="ExperienceInfosCountryId[]"]').each(function () {
                        $(this).val(result.ExperienceInfosCountryId[ye]);
                        if (result.ExperienceInfosCountryId[ye] == 2) {
                            $(this).trigger('change');
                        }
                        ye++;

                    });


                    ye = 0;
                    $('select[name="ExperienceInfosProvinceId[]"]').each(function () {

                        $(this).val(result.ExperienceInfosProvinceId[ye]);
                        var yx = 0;
                        $('div[name="selectcity3[]"] select[name="ExperienceInfosCityId[]"]').each(function () {///?erroe
                            if (ye == yx) {
                                var cityid = result.ExperienceInfosCityId[yx];
                                //   alert(cityid);
                                //  $(this).trigger('change');
                                var that = $(this);
                                loadtruecity2(result.ExperienceInfosProvinceId[ye], function () {
                                    that.val(cityid).change();

                                });

                                yx++;
                            }
                        });
                        ye++;
                    });
//                    ye = 0;
//                    $('select[name="ExperienceInfosCityId[]"]').each(function () {
//                        $(this).val(result.EducationInfosCityId[ye]);
//                        ye++;
//
//                    });
                    ye = 0;
                    $('select[name="ExperienceInfosFinishingMonth[]"]').each(function () {
                        $(this).val(result.ExperienceInfosFinishingMonth[ye]);
                        ye++;

                    });
                    ye = 0;
                    $('select[name="ExperienceInfosFinishingYear[]"]').each(function () {
                        $(this).val(result.ExperienceInfosFinishingYear[ye]);
                        ye++;

                    });

                    yex = 0;
                    $('input:checkbox[name="working[]"]').each(function () {
                        if (result.working[yex] == 1) {
                            $(this).prop('checked', true);
                            $(this).attr("checked", true);
                            $(this).parent().parent().parent().parent().find("[id='ExperienceInfosFinishingYear']").val('');
                            $(this).parent().parent().parent().parent().find("[id='ExperienceInfosFinishingYear']").prop('disabled', true);
                            $(this).parent().parent().parent().parent().find("[id='ExperienceInfosFinishingMonth']").val('');
                            $(this).parent().parent().parent().parent().find("[id='ExperienceInfosFinishingMonth']").prop('disabled', true);


                            yex++;
                        }
                    });
                }

                //////////////////////////////////////  language
                var lenghtlanguage = result.lenghtlanguage;
                var x = 0;

                if (lenghtlanguage > 0) {
                    if (lenghtlanguage > 1) {
                        while ((x + 1) < lenghtlanguage) {
                            var $button = $('.clonein4').clone();
                            $button.removeClass('clonein4');
                            $button.find('.deldiv').removeClass('hidden');
                            $('.languagediv').append($button);
                            x++;
                        }
                    }
                    var ye = 0;
                    $('select[name="LanguageInfosLanguageName[]"]').each(function () {
                        $(this).val(result.LanguageInfosLanguageName[ye]);
                        ye++;

                    });

                    ye = 0;
                    $('select[name="LanguageInfosReadingLevel[]"]').each(function () {
                        $(this).val(result.LanguageInfosReadingLevel[ye]);
                        ye++;

                    });
                    ye = 0;
                    $('select[name="LanguageInfosWritingLevel[]"]').each(function () {
                        $(this).val(result.LanguageInfosWritingLevel[ye]);
                        ye++;

                    });

                    ye = 0;
                    $('select[name="LanguageInfosListeningLevel[]"]').each(function () {
                        $(this).val(result.LanguageInfosListeningLevel[ye]);
                        ye++;

                    });

                    ye = 0;
                    $('select[name="LanguageInfosSpeakingLevel[]"]').each(function () {
                        $(this).val(result.LanguageInfosSpeakingLevel[ye]);
                        ye++;

                    });
                }

                ///skill
                var lenghtskill = result.lenghtskill;
                var x = 0;

                if (lenghtskill > 0) {
                    if (lenghtskill > 1) {
                        while ((x + 2) < lenghtskill) {
                            var $button = $('.clonein5').clone();
                            $button.removeClass('clonein5');
                            $button.find('.deldiv').removeClass('hidden');
                            $('.skilldiv').append($button);
                            x++;
                        }
                    }
                    var ye = 0;
                    $('input[name="SkillInfosLevel[]"]').each(function () {
                        $(this).val(result.SkillInfosLevel[ye]);
                        ye++;

                    });

                    ye = 0;
                    $('select[name="SkillInfosSkillName[]"]').each(function () {
                        $(this).val(result.SkillInfosSkillName[ye]);
                        ye++;

                    });
                }

//////////////////////////////////////  Certificate

                var lenghtcertificate = result.lenghtcertificate;
                var x = 0;

                if (lenghtcertificate > 0) {
                    if (lenghtcertificate > 1) {
                        while ((x + 1) < lenghtcertificate) {
                            var $button = $('.clonein6').clone();
                            $button.removeClass('clonein6');
                            $button.find('.deldiv').removeClass('hidden');
                            $('.certificatediv').append($button);
                            x++;
                        }
                    }
                    var ye = 0;

                    $('select[name="CertificateInfosCertificateType[]"]').each(function () {
                        $(this).val(result.CertificateInfosCertificateType[ye]);
                        ye++;

                    });
                    ye = 0;
                    $('input[name="CertificateInfosTitle[]"]').each(function () {
                        $(this).val(result.CertificateInfosTitle[ye]);
                        ye++;

                    });
                    ye = 0;
                    $('input[name="CertificateInfosInstitude[]"]').each(function () {
                        $(this).val(result.CertificateInfosInstitude[ye]);
                        ye++;

                    });
                    ye = 0;
                    $('select[name="CertificateInfosMonth[]"]').each(function () {
                        $(this).val(result.CertificateInfosMonth[ye]);
                        ye++;

                    });
                    ye = 0;
                    $('select[name="CertificateInfosYear[]"]').each(function () {
                        $(this).val(result.CertificateInfosYear[ye]);
                        ye++;

                    });

                }


///honor
                var lenghthonor = result.lenghthonor;
                var x = 0;

                if (lenghthonor > 0) {
                    if (lenghthonor > 1) {
                        while ((x + 1) < lenghthonor) {
                            var $button = $('.clonein7').clone();
                            $button.removeClass('clonein7');
                            $button.find('.deldiv').removeClass('hidden');
                            $('.honordiv').append($button);
                            x++;
                        }
                    }
                    var ye = 0;
                    $('input[name="HonorInfosTitle[]"]').each(function () {
                        $(this).val(result.HonorInfosTitle[ye]);
                        ye++;

                    });
                    ye = 0;
                    $('select[name="HonorInfosMonth[]"]').each(function () {
                        $(this).val(result.HonorInfosMonth[ye]);
                        ye++;

                    });
                    ye = 0;
                    $('select[name="HonorInfosYear[]"]').each(function () {
                        $(this).val(result.HonorInfosYear[ye]);
                        ye++;

                    });
                }

                //research

                var lenghtsearch = result.lenghtsearch;
                var x = 0;

                if (lenghtsearch > 0) {
                    if (lenghtsearch > 1) {
                        while ((x + 1) < lenghtsearch) {
                            var $button = $('.clonein8').clone();
                            $button.removeClass('clonein8');
                            $button.find('.deldiv').removeClass('hidden');
                            $('.researchdiv').append($button);
                            x++;
                        }
                    }
                    var ye = 0;
                    $('input[name="ResearchInfosTitle[]"]').each(function () {
                        $(this).val(result.ResearchInfosTitle[ye]);
                        ye++;

                    });
                    ye = 0;
                    $('select[name="ResearchInfosPublishType[]"]').each(function () {
                        $(this).val(result.ResearchInfosPublishType[ye]);
                        ye++;

                    });

                    ye = 0;
                    $('input[name="ResearchInfosPublisher[]"]').each(function () {
                        $(this).val(result.ResearchInfosPublisher[ye]);
                        ye++;

                    });

                    ye = 0;
                    $('input[name="ResearchInfosLinkUrl[]"]').each(function () {
                        $(this).val(result.ResearchInfosLinkUrl[ye]);
                        ye++;

                    });

                    ye = 0;
                    $('select[name="ResearchInfosYear[]"]').each(function () {
                        $(this).val(result.ResearchInfosYear[ye]);
                        ye++;

                    });

                    ye = 0;
                    $('select[name="ResearchInfosMonth[]"]').each(function () {
                        $(this).val(result.ResearchInfosMonth[ye]);
                        ye++;

                    });

                    ye = 0;
                    $('textarea[name="ResearchInfosDescription[]"]').each(function () {
                        $(this).val(result.ResearchInfosDescription[ye]);
                        ye++;

                    });
                }
                //project

                var lenghtproj = result.lenghtproj;
                var x = 0;
                if (lenghtproj > 0) {
                    if (lenghtproj > 1) {
                        while ((x + 1) < lenghtproj) {
                            var $button = $('.clonein9').clone();
                            $button.removeClass('clonein9');
                            $button.find('.deldiv').removeClass('hidden');
                            $('.projectdiv').append($button);
                            x++;
                        }
                    }
                    var ye = 0;
                    $('input[name="ProjectInfosTitle[]"]').each(function () {
                        $(this).val(result.ProjectInfosTitle[ye]);
                        ye++;

                    });
                    ye = 0;
                    $('input[name="ProjectInfosFor[]"]').each(function () {
                        $(this).val(result.ProjectInfosFor[ye]);
                        ye++;

                    });

                    ye = 0;
                    $('input[name="ProjectInfosLinkUrl[]"]').each(function () {
                        $(this).val(result.ProjectInfosLinkUrl[ye]);
                        ye++;

                    });

                    ye = 0;
                    $('select[name="ProjectInfosMonth[]"]').each(function () {
                        $(this).val(result.ProjectInfosMonth[ye]);
                        ye++;

                    });

                    ye = 0;
                    $('select[name="ProjectInfosYear[]"]').each(function () {
                        $(this).val(result.ProjectInfosYear[ye]);
                        ye++;

                    });

                    ye = 0;
                    $('input[name="ProjectInfosDescription[]"]').each(function () {
                        $(this).val(result.ProjectInfosDescription[ye]);
                        ye++;

                    });
                }

                //request

                $('#RecruitmentInfoInstitudeType').val(result.RecruitmentInfoInstitudeType);
                $('#RecruitmentInfoJobCategoryId').val(result.RecruitmentInfoJobCategoryId);
                var arrayff = '';
                var arrayc1 = '';
                var array = '';

                var xx = result.RecruitmentInfoImmigrationForStudyPreferedCountries;
                if (xx != null) {
                    arrayc1 = xx.toString().split(',');
                } else {
                    arrayc1 = xx;
                }

                $('#RecruitmentInfoImmigrationForStudyPreferedCountries').val(arrayc1);
                $('#RecruitmentInfoImmigrationForStudyPreferedCountries').trigger('change');



                $('#RecruitmentInfoEducationLevel').val(result.RecruitmentInfoEducationLevel);
                $('#RecruitmentInfoFieldOfStudy').val(result.RecruitmentInfoFieldOfStudy);

                var xf = result.RecruitmentInfoImmigrationForWorkPreferedCountries;
                if (xf != null) {
                    arrayff = xf.toString().split(',');
                } else {
                    arrayff = xf;

                }

                $('#RecruitmentInfoImmigrationForWorkPreferedCountries').val(arrayff);
                $('#RecruitmentInfoImmigrationForWorkPreferedCountries').trigger('change');



                $('#RecruitmentInfoJobTitle').val(result.RecruitmentInfoJobTitle);
                $('#RecruitmentInfoEmploymentType').val(result.RecruitmentInfoEmploymentType);
                $('#RecruitmentInfoMinAverageSalary').val(result.RecruitmentInfoMinAverageSalary);

                var xc3 = result.RecruitmentInfoJobApplicationPreferedCities;
                if (xc3 != null) {
                    array = xc3.toString().split(',');
                } else {
                    array = xf;

                }
                $('#RecruitmentInfoJobApplicationPreferedCities').val(array);
                $('#RecruitmentInfoJobApplicationPreferedCities').trigger('change');
                //  $('#RecruitmentInfoJobApplicationPreferedCities').val(result.RecruitmentInfoJobApplicationPreferedCities);


                if (result.RecruitmentInfoJobApplication == 1) {

                    $('#RecruitmentInfoJobApplication').prop('checked', true);
                    $('#RecruitmentInfoJobApplication').attr("checked", true);
                    var elem1 = $('#RecruitmentInfoJobApplication').parent().parent().parent().find('.unexpanded');
                    elem1.css("display", "block");
                }
                if (result.RecruitmentInfoImmigrationForStudy == 1) {
                    $('#RecruitmentInfoImmigrationForStudy').prop('checked', true);
                    $('#RecruitmentInfoImmigrationForStudy').attr("checked", true);
                    var elem2 = $('#RecruitmentInfoImmigrationForStudy').parent().parent().parent().find('.unexpanded');
                    elem2.css("display", "block");

                }
                if (result.RecruitmentInfoImmigrationForWork == 1) {
                    $('#RecruitmentInfoImmigrationForWork').prop('checked', true);
                    $('#RecruitmentInfoImmigrationForWork').attr("checked", true);
                    var elem3 = $('#RecruitmentInfoImmigrationForWork').parent().parent().parent().find('.unexpanded');
                    elem3.css("display", "block");

                }
                if (result.RecruitmentInfoContinueEducation == 1) {
                    $('#RecruitmentInfoContinueEducation').prop('checked', true);
                    $('#RecruitmentInfoContinueEducation').attr("checked", true);
                    var elem4 = $('#RecruitmentInfoContinueEducation').parent().parent().parent().find('.unexpanded');
                    elem4.css("display", "block");

                }

            } else {


            }
        }
    });
    $("#BasicInfoCountryId").change(function () {
        if ($("#BasicInfoCountryId").val() == 2) {

            $('#BasicInfoProvinceTitle').css('display', 'none');
            $('#BasicInfoCityTitle').css('display', 'none');
            $('#selectcity').css('display', 'block');
            $('#selectprovince').css('display', 'block');

        } else {

            $("#selectprovince").css("display", "none");
            $('#selectcity').css('display', 'none');
            $('#BasicInfoProvinceTitle').css('display', 'block');
            $('#BasicInfoCityTitle').css('display', 'block');
        }
    });

    $("#BasicInfoProvinceId").change(function () {

        //$("#BasicInfoCityId")[0].selectize.clear();


        $("#BasicInfoCityId")[0].selectize.clearOptions();
        //   $('#BasicInfoCityId').find('option').remove().end();

        $.ajax({
            url: siteurl + "builder/loadcity",
            data: {
                provincename: $("#BasicInfoProvinceId").val()
            },
            type: "Post",
            dataType: 'json',
            success: function (data) {
                if (data.id != '0') {

                    var response = new Array();
                    response[0] = data.data;
                    $.each(response, function (index, obj) {
                        $.each(obj, function (key, valuem) {
                            var val = valuem.value;
                            var tex = valuem.text;
                            var $select = $('#BasicInfoCityId');
                            var selectize = $select[0].selectize;
                            selectize.addOption({value: val, text: tex});
                            selectize.addItem(val);
//                         $('#BasicInfoCityId').selectize.addOption({value: val , text: tex });
//                           $('#BasicInfoCityId').selectize.addItem(val);
                        });
                    });

                }

            }
        });

    });
    //$("#EducationInfosCountryId").change(function () {


    $(".educationdiv").on("change", "select[name='EducationInfosCountryId[]']", function () {

        if ($(this).val() == 2) {
            $(this).parent().parent().find("[id='EducationInfosProvinceTitle']").css('display', 'none');
            $(this).parent().parent().find("[id='EducationInfosCityTitle']").css('display', 'none');
            $(this).parent().parent().find("[id='selectprovince2']").css('display', 'block');
            $(this).parent().parent().find("[id='selectcity2']").css('display', 'block');

        } else {
            $(this).parent().parent().find("[id='selectprovince2']").css("display", "none");
            $(this).parent().parent().find("[id='selectcity2']").css('display', 'none');
            $(this).parent().parent().find("[id='EducationInfosProvinceTitle']").css('display', 'block');
            $(this).parent().parent().find("[id='EducationInfosCityTitle']").css('display', 'block');

        }

    });
    $(".clonein2 [name='EducationInfosCountryId[]']").change(function () {

        if ($(".clonein2 [id='EducationInfosCountryId']").val() == 2) {
            //   alert($(".clonein2 [id='EducationInfosProvinceTitle']").attr('id'));
            // $(this).siblings("#selectprovince2").find("#EducationInfosProvinceTitle").css('display', 'none');
            // alert($(this).parent().parent().find('label').text());
            $(this).parent().parent().find("[id='EducationInfosProvinceTitle']").css('display', 'none');
            $(this).parent().parent().find("[id='EducationInfosCityTitle']").css('display', 'none');
            // $("[name='EducationInfosProvinceTitle[]']").css('display', 'none');
            //   $(this).closest("#selectcity2").find(".clonein2 [id='EducationInfosCityTitle']").css('display', 'none');
            //   $("[name='EducationInfosCityTitle[]']").css('display', 'none');
            $(this).parent().parent().find("[id='selectprovince2']").css('display', 'block');
            $(this).parent().parent().find("[id='selectcity2']").css('display', 'block');

        } else {
            $(this).parent().parent().find("[id='selectprovince2']").css("display", "none");
            $(this).parent().parent().find("[id='selectcity2']").css('display', 'none');
            $(this).parent().parent().find("[id='EducationInfosProvinceTitle']").css('display', 'block');
            $(this).parent().parent().find("[id='EducationInfosCityTitle']").css('display', 'block');
//            $("#selectprovince2").css("display", "none");
//            $('#selectcity2').css('display', 'none');
//            $('#EducationInfosProvinceTitle').css('display', 'block');
//            $('#EducationInfosCityTitle').css('display', 'block');
        }
    });

    $(".educationdiv").change(function () {

        $(this).parent().parent().parent().find("select[id='EducationInfosCityId'] option").remove().end();
        $.ajax({
            url: siteurl + "builder/loadcity",
            data: {
                provincename: $(this).val()
            },
            type: "Post",
            dataType: 'json',
            success: function (data) {
                if (data.id != '0') {
                    var response = new Array();
                    response[0] = data.data;
                    $.each(response, function (index, obj) {
                        $.each(obj, function (key, valuem) {
                            var val = valuem.value;
                            var tex = valuem.text;

                            $(".educationdiv div[id='selectcity2'] select[id='EducationInfosCityId']").append(new Option(tex, val));

                        });
                    });
                }
            }
        });
    });





    $(".clonein2 [name='EducationInfosProvinceId[]']").change(function () {
        //$("#EducationInfosCityId")[0].selectize.clearOptions();
        $(this).parent().parent().parent().find("[id='EducationInfosCityId'] option").remove().end();
        // $('#EducationInfosCityId').find('option').remove().end();
        $.ajax({
            url: siteurl + "builder/loadcity",
            data: {
                provincename: $(this).val()
            },
            type: "Post",
            dataType: 'json',
            success: function (data) {
                if (data.id != '0') {
                    var response = new Array();
                    response[0] = data.data;
                    $.each(response, function (index, obj) {
                        $.each(obj, function (key, valuem) {
                            var val = valuem.value;
                            var tex = valuem.text;
                            // var $select = $('#EducationInfosCityId');
                            //var selectize = $select[0].selectize;
                            // selectize.addOption({value: val, text: tex});
                            //  selectize.addItem(val);
                            //  $(this).parent().parent().parent().find("[id='EducationInfosCityId']").append(new Option(tex, val));
                            $(".clonein2 div[id='selectcity2'] select[id='EducationInfosCityId']").append(new Option(tex, val));
                            //  var o = new Option("option text", "value");
/// jquerify the DOM object 'o' so we can use the html method
//$(o).html("option text");
//$("#selectList").append(o);
                        });
                    });
                }
            }
        });
    });

    $(".clonein2 [name='EducationInfosEducationLevel[]']").change(function () {
        if ($(".clonein2 [id='EducationInfosEducationLevel']").val() == 2 || $(".clonein2 [id='EducationInfosEducationLevel']").val() == 1) {

            $(this).parent().parent().parent().find("[id='selectunder']").css('display', 'block');
            $(this).parent().parent().parent().find("[id='selectupper']").css('display', 'none');
        } else {
            $(this).parent().parent().parent().find("[id='selectunder']").css("display", "none");
            $(this).parent().parent().parent().find("[id='selectupper']").css('display', 'block');
        }
    });
    $(".educationdiv").on("change", "select[name='EducationInfosEducationLevel[]']", function () {

        if ($(this).val() == 2 || $(this).val() == 1) {
            $(this).parent().parent().parent().find("[id='selectunder']").css('display', 'block');
            $(this).parent().parent().parent().find("[id='selectupper']").css('display', 'none');

        } else {
            $(this).parent().parent().parent().find("[id='selectunder']").css("display", "none");
            $(this).parent().parent().parent().find("[id='selectupper']").css('display', 'block');

        }

    });



    $(".clonein2 [name='studing[]']").on('click', function () {
        if ($(this).is(':checked')) {
            $(this).parent().parent().parent().parent().find("[id='EducationInfosGraduateYear']").val('');
            $(this).parent().parent().parent().parent().find("[id='EducationInfosGraduateYear']").prop('disabled', true);

        } else {

            $(this).parent().parent().parent().parent().find("[id='EducationInfosGraduateYear']").prop('disabled', false);
        }
    });

    $(".educationdiv").on('click', "[name='studing[]']", function () {//*

        if ($(this).is(':checked')) {
            $(this).parent().parent().parent().parent().find("[id='EducationInfosGraduateYear']").val('');
            $(this).parent().parent().parent().parent().find("[id='EducationInfosGraduateYear']").prop('disabled', true);
        } else {
            $(this).parent().parent().parent().parent().find("[id='EducationInfosGraduateYear']").prop('disabled', false);
        }
    });

    $("#addsocialnet").click(function () {
        var $button = $('.clonein').clone();
        $button.find("select[id='UserSocialNets']").val('');
        $button.find("input[id='UserSocialNetsaddress']").val('');
        $button.removeClass('clonein');
        $button.find('.deldiv').removeClass('hidden');
        $('.socialdiv').append($button);

    });

    $(".socialdiv").on('click', 'a[id="delthispart"]', function () {

        $(this).parent().parent().remove();
    }
    );
    // $("#select [id='UserSocialNets']").click(function () {
//
//        $(this).parent('div').remove();
//    });
//    var data = ["option 1", "option 2", "option 3"];
//    var items = data.map(function (x) {
//        return {item: x};
//    });
//
//    $('#input-tags').selectize({
//        delimiter: ',',
//        persist: false,
//        maxItems: 2,
//        options: items,
//        labelField: "item",
//        valueField: "item",
//        sortField: 'item',
//        searchField: 'item'
//    });
    //    var $button = $('.clonein').clone();
    // var newSelectize = '<select id="input-tags" class="elements"></select>';
    //  var selectizeWrapper = $(this).parent().find('.socialdiv');
//        selectizeWrapper.append($button);
//        var lastSelectize = selectizeWrapper.find('.elements').last();
//        console.log(lastSelectize);
//        lastSelectize.selectize({
//            delimiter: ',',
//            persist: false,
//            maxItems: 1,
//            options: items,
//            labelField: "item",
//            valueField: "item",
//            sortField: 'item',
//            searchField: 'item'
//        });
//        x = x - 1;
//        countsocial = countsocial + 1;
//        var $button = $('#clonein').clone();
    //     var $button = $('.clonein').clone();

    //   alert($button.find('#UserSocialNets').attr('id'));
    //$button.find('#UserSocialNets').attr('id','testselect');
    //  $('#socialdiv').append($button);
    //  $("#UserSocialNets").refreshOptions();
    // selectizeme();

//           $("select[id='UserSocialNets']").each(function(){ // do this for every select with the 'combobox' class
//      if ($(this)[0].selectize) { // requires [0] to select the proper object
//         var value = $(this).val(); // store the current value of the select/input
//         $(this)[0].selectize.destroy(); // destroys selectize()
//         $(this).val(value).selectize;  // set back the value of the select/input
//      }
//   });
//   $('#clonein')
//      .clone() // copy
//      .insertAfter('#socialdiv'); // where
//      selectizeme();
//       });

//         $('#UserSocialNets').each(function(){ // do this for every select with the 'selector_class' class
//        if ($(this)[0].selectize) { // requires [0] to select the proper object
//            var value = $(this).val(); // store the current value of the select/input
//            $(this)[0].selectize.destroy(); // destroys selectize()
//            $(this).val(value);  // set back the value of the select/input
//        }
//    });
//        var value = $(this).val(); // store the current value of the select/input
//$(this)[0].selectize.destroy(); // destroys selectize()
//// CREATE the OPTION
//$(this).val(value);

    //     $('select[name="UserSocialNets[]"]').selectize();

    // $('#socialdiv').append($('#rowToClone').html());

//        $.ajax({
//            url: siteurl + 'builder/newsocial',
//            type: "POST",
//            dataType: 'json',
//            data: {countsocial:countsocial,z:y},
//            success: function (result) {
//                if (result.id == '1') {
// $('.clone').append($button);
//                } else {
//
//                }
//            }


    $("#addeducation").click(function () {
        var $button = $('.clonein2').clone();

        // alert($button.find('#UserSocialNets').attr('id'));
        $button.removeClass('clonein2');
        $button.find("select[id='EducationInfosCityId'] option").remove().end();
        $button.find("input[id='EducationInfosGrade']").val('');
        $button.find("input[id='EducationInfosEducationInstitudeTitle']").val('');
        $button.find("input[id='EducationInfosBranch']").val('');
        $button.find("input[id='EducationInfosCityTitle']").val('');
        $button.find("input[id='EducationInfosProvinceTitle']").val('');
        $button.find("input[id='studing']").prop('checked', false);
        $button.find("[id='selectprovince2']").css("display", "none");
        $button.find("[id='selectcity2']").css('display', 'none');
        $button.find("[id='EducationInfosProvinceTitle']").css('display', 'block');
        $button.find("[id='EducationInfosCityTitle']").css('display', 'block');
        $button.find('.deldiv').removeClass('hidden');
        $('.educationdiv').append($button);
    });

    $(".educationdiv").on('click', 'a[id="delthispart"]', function () {

        $(this).parent().parent().parent().parent().remove();
    }
    );
    $('#dlresume').on('click', function () {
        save6();
        current = 7;

    });
    var save6 = function () {//unread

        var myFormData = new FormData();

        myFormData.append('RecruitmentInfoJobCategoryId', $('#RecruitmentInfoJobCategoryId').val());
        myFormData.append('RecruitmentInfoJobTitle', $('#RecruitmentInfoJobTitle').val());
        myFormData.append('RecruitmentInfoEmploymentType', $('#RecruitmentInfoEmploymentType').val());
        myFormData.append('RecruitmentInfoMinAverageSalary', $('#RecruitmentInfoMinAverageSalary').val());
        myFormData.append('RecruitmentInfoJobApplicationPreferedCities', $('#RecruitmentInfoJobApplicationPreferedCities').val());
        myFormData.append('RecruitmentInfoImmigrationForStudyPreferedCountries', $('#RecruitmentInfoImmigrationForStudyPreferedCountries').val());
        myFormData.append('RecruitmentInfoEducationLevel', $('#RecruitmentInfoEducationLevel').val());
        myFormData.append('RecruitmentInfoFieldOfStudy', $('#RecruitmentInfoFieldOfStudy').val());
        myFormData.append('RecruitmentInfoImmigrationForWorkPreferedCountries', $('#RecruitmentInfoImmigrationForWorkPreferedCountries').val());
        myFormData.append('RecruitmentInfoInstitudeType', $('#RecruitmentInfoInstitudeType').val());
        if ($('#RecruitmentInfoJobApplication').is(':checked')) {
            myFormData.append('RecruitmentInfoJobApplication', 1);
        } else {
            myFormData.append('RecruitmentInfoJobApplication', 0);
        }
        if ($('#RecruitmentInfoImmigrationForStudy').is(':checked')) {
            myFormData.append('RecruitmentInfoImmigrationForStudy', 1);
        } else {
            myFormData.append('RecruitmentInfoImmigrationForStudy', 0);
        }
        if ($('#RecruitmentInfoImmigrationForWork').is(':checked')) {
            myFormData.append('RecruitmentInfoImmigrationForWork', 1);
        } else {
            myFormData.append('RecruitmentInfoImmigrationForWork', 0);
        }
        if ($('#RecruitmentInfoContinueEducation').is(':checked')) {
            myFormData.append('RecruitmentInfoContinueEducation', 1);
        } else {
            myFormData.append('RecruitmentInfoContinueEducation', 0);
        }

        $.ajax({

            url: siteurl + "/create",
            type: "POST",
            enctype: 'multipart/form-data',
            contentType: false,
            processData: false,
            data: myFormData,

            success: function (result) {
                if (current == 7) {
                    if (result.islogin == '0') {

                        if (result.id == '1') {

                           if (result.flag == '1') {
                    toastr.success('  با موفقیت ذخیره شد');
                }
                            //   $('#modalregister').modal('show');
                            $('#modalregister').modal('open');

                        } else {
                            toastr.error(result.msg);
                        }
                    } else if (result.islogin == '1') {
                        if (result.id == '1') {
                             if (result.flag == '1') {
                    toastr.success('  با موفقیت ذخیره شد');
                }
                            window.location.replace(siteurl + 'templatemarket');
                            window.location.href = siteurl + 'templatemarket';

                        } else {
                            toastr.error(result.msg);
                        }
                    }
                } else {
                    if (result.islogin == '0') {
                        if (result.id == '1') {
                              if (result.flag == '1') {
                    toastr.success('  با موفقیت ذخیره شد');
                }
                        } else {
                            toastr.error(result.msg);
                        }
                    } else if (result.islogin == '1') {
                        if (result.id == '1') {
                            if (result.flag == '1') {
                    toastr.success('  با موفقیت ذخیره شد');
                }
                        } else {
                            toastr.error(result.msg);
                        }
                    }
                }
            }
        });

    };


    $('#gostep2').on('click', function () {
        // alert($('#BasicInfoCountryId').val());
        if ($('#BasicInfoFirstName').val() == '' || $('#BasicInfoLastName').val() == '' || $('#BasicInfoEmail').val() == '') {
            toastr.error('پرکردن فیلدهای ستاره دارالزامی است.');

            return false;
        }
        save1();
        current = 2;

    });
    var save1 = function () {//unread

        var BasicInfoFirstName, BasicInfoLastName, BasicInfoGender, BasicInfoMaritalStatus;
        var profilephoto, BasicInfoMilitaryStatus, BasicInfoBirthYear, BasicInfoBirthMonth, BasicInfoBirthday;
        //اطلاعات پایه
        BasicInfoFirstName = $('#BasicInfoFirstName').val();
        BasicInfoLastName = $('#BasicInfoLastName').val();
        BasicInfoGender = $('#BasicInfoGender').val();
        BasicInfoMaritalStatus = $('#BasicInfoMaritalStatus').val();
        profilephoto = $('#profilephoto')[0].files[0]; //file
        BasicInfoMilitaryStatus = $('#BasicInfoMilitaryStatus').val();
        BasicInfoBirthYear = $('#BasicInfoBirthYear').val();
        BasicInfoBirthMonth = $('#BasicInfoBirthMonth').val();
        BasicInfoBirthday = $('#BasicInfoBirtDay').val();
        var myFormData = new FormData();
        myFormData.append('profilephoto', profilephoto);
        myFormData.append('BasicInfoFirstName', BasicInfoFirstName);
        myFormData.append('BasicInfoLastName', BasicInfoLastName);
        myFormData.append('BasicInfoGender', BasicInfoGender);
        myFormData.append('BasicInfoMaritalStatus', BasicInfoMaritalStatus);
        myFormData.append('BasicInfoMilitaryStatus', BasicInfoMilitaryStatus);
        myFormData.append('BasicInfoBirthYear', BasicInfoBirthYear);
        myFormData.append('BasicInfoBirthMonth', BasicInfoBirthMonth);
        myFormData.append('BasicInfoBirthDay', BasicInfoBirthday);

        //اطلاعات تماس
        myFormData.append('BasicInfoEmail', $('#BasicInfoEmail').val());
        myFormData.append('BasicInfoMobile', $('#BasicInfoMobile').val());
        myFormData.append('BasicInfoPhone', $('#BasicInfoPhone').val());
        myFormData.append('BasicInfoWebsite', $('#BasicInfoWebsite').val());
        myFormData.append('BasicInfoCountryId', $('#BasicInfoCountryId').val());
        myFormData.append('BasicInfoProvinceId', $('#BasicInfoProvinceId').val());
        myFormData.append('BasicInfoProvinceTitle', $('#BasicInfoProvinceTitle').val());
        myFormData.append('BasicInfoCityId', $('#BasicInfoCityId').val());
        myFormData.append('BasicInfoCityTitle', $('#BasicInfoCityTitle').val());
        myFormData.append('BasicInfoAddress', $('#BasicInfoAddress').val());
        myFormData.append('BasicInfoAbout', $('#BasicInfoAbout').val());
        //شبکه های اجتماعی
        var answer = [];
        var answeraddress = [];
        //  var x = 0;
        $('select[name="UserSocialNets[]"]').each(function () {
            answer.push([$(this).val()]);
            // x++;
        });

        //  var y = 0;
        $('input[name="UserSocialNetsaddress[]"]').each(function () {
            if ($(this).val() != '') {
                answeraddress.push([$(this).val()]);
            } else {
                answeraddress.push([0]);
            }
            //   y++;
        });

        myFormData.append('answer', answer);
        myFormData.append('answeraddress', answeraddress);

        myFormData.append('file', $('#profilephoto')[0].files[0]);

        $.ajax({

            url: siteurl + 'builder/nextstep1',
            type: "POST",
            enctype: 'multipart/form-data',
            contentType: false,
            processData: false,
            data: myFormData,
            dataType: "json",
            success: function (result) {
                if (result.id == '1') {
                    toastr.success('  با موفقیت ذخیره شد');
                } else {
                    toastr.error(result.msg);
                }
            }
        });
    };
    $("#addexperience").click(function () {
        var $button = $('.clonein3').clone();
        $button.removeClass('clonein3');
        $button.find("select[id='ExperienceInfosCityId'] option").remove().end();
        $button.find("input[id='ExperienceInfosCityTitle']").val('');
        $button.find("input[id='ExperienceInfosProvinceTitle']").val('');
        $button.find("input[id='ExperienceInfosJobTitle']").val('');
        $button.find("input[id='ExperienceInfosCompanyName']").val('');
        $button.find("input[id='working']").prop('checked', false);
        $button.find("[id='selectprovince3']").css("display", "none");
        $button.find("[id='selectcity3']").css('display', 'none');
        $button.find("[id='ExperienceInfosProvinceTitle']").css('display', 'block');
        $button.find("[id='ExperienceInfosCityTitle']").css('display', 'block');
        $button.find("[id='ExperienceInfosFinishingYear']").val('');
        $button.find("[id='ExperienceInfosFinishingYear']").prop('disabled', false);
        $button.find("[id='ExperienceInfosFinishingMonth']").val('');
        $button.find("[id='ExperienceInfosFinishingMonth']").prop('disabled', false);
        $button.find('.deldiv').removeClass('hidden');
        $('.experiencediv').append($button);
    });

    $(".experiencediv").on('click', 'a[id="delthispart"]', function () {

        $(this).parent().parent().parent().parent().remove();
    }
    );

    $(".experiencediv").on("change", "select[name='ExperienceInfosCountryId[]']", function () {

        if ($(this).val() == 2) {
            $(this).parent().parent().find("[id='ExperienceInfosProvinceTitle']").css('display', 'none');
            $(this).parent().parent().find("[id='ExperienceInfosCityTitle']").css('display', 'none');
            $(this).parent().parent().find("[id='selectprovince3']").css('display', 'block');
            $(this).parent().parent().find("[id='selectcity3']").css('display', 'block');

        } else {
            $(this).parent().parent().find("[id='selectprovince3']").css("display", "none");
            $(this).parent().parent().find("[id='selectcity3']").css('display', 'none');
            $(this).parent().parent().find("[id='ExperienceInfosProvinceTitle']").css('display', 'block');
            $(this).parent().parent().find("[id='ExperienceInfosCityTitle']").css('display', 'block');

        }

    });
    $(".clonein3 [name='ExperienceInfosCountryId[]']").change(function () {

        if ($(".clonein3 [id='ExperienceInfosCountryId']").val() == 2) {

            $(this).parent().parent().find("[id='ExperienceInfosProvinceTitle']").css('display', 'none');
            $(this).parent().parent().find("[id='ExperienceInfosCityTitle']").css('display', 'none');
            $(this).parent().parent().find("[id='selectprovince3']").css('display', 'block');
            $(this).parent().parent().find("[id='selectcity3']").css('display', 'block');

        } else {
            $(this).parent().parent().find("[id='selectprovince3']").css("display", "none");
            $(this).parent().parent().find("[id='selectcity3']").css('display', 'none');
            $(this).parent().parent().find("[id='ExperienceInfosProvinceTitle']").css('display', 'block');
            $(this).parent().parent().find("[id='ExperienceInfosCityTitle']").css('display', 'block');

        }
    });

    $(".experiencediv").on("change", "select[name='ExperienceInfosProvinceId[]']", function () {

        $(this).parent().parent().parent().parent().find("select[id='ExperienceInfosCityId'] option").remove().end();
        $.ajax({
            url: siteurl + "builder/loadcity",
            data: {
                provincename: $(this).val()
            },
            type: "Post",
            dataType: 'json',
            success: function (data) {
                if (data.id != '0') {
                    var response = new Array();
                    response[0] = data.data;
                    $.each(response, function (index, obj) {
                        $.each(obj, function (key, valuem) {
                            var val = valuem.value;
                            var tex = valuem.text;

                            $(".experiencediv div[id='selectcity3'] select[id='ExperienceInfosCityId']").append(new Option(tex, val));

                        });
                    });
                }
            }
        });
    });
    $(".clonein3 [name='ExperienceInfosProvinceId[]']").change(function () {
        //$("#EducationInfosCityId")[0].selectize.clearOptions();
        $(this).parent().parent().parent().parent().find("[id='ExperienceInfosCityId'] option").remove().end();
        // $('#EducationInfosCityId').find('option').remove().end();
        $.ajax({
            url: siteurl + "builder/loadcity",
            data: {
                provincename: $(this).val()
            },
            type: "Post",
            dataType: 'json',
            success: function (data) {
                if (data.id != '0') {
                    var response = new Array();
                    response[0] = data.data;
                    $.each(response, function (index, obj) {
                        $.each(obj, function (key, valuem) {
                            var val = valuem.value;
                            var tex = valuem.text;

                            $(".clonein3 div[id='selectcity3'] select[id='ExperienceInfosCityId']").append(new Option(tex, val));

                        });
                    });
                }
            }
        });
    });
    $(".clonein3 [name='working[]']").on('click', function () {
        if ($(this).is(':checked')) {
            $(this).parent().parent().parent().parent().find("[id='ExperienceInfosFinishingYear']").val('');
            $(this).parent().parent().parent().parent().find("[id='ExperienceInfosFinishingYear']").prop('disabled', true);
            $(this).parent().parent().parent().parent().find("[id='ExperienceInfosFinishingMonth']").val('');
            $(this).parent().parent().parent().parent().find("[id='ExperienceInfosFinishingMonth']").prop('disabled', true);

        } else {

            $(this).parent().parent().parent().parent().find("[id='ExperienceInfosFinishingYear']").prop('disabled', false);
            $(this).parent().parent().parent().parent().find("[id='ExperienceInfosFinishingMonth']").prop('disabled', false);
        }
    });
    //در select12این مورد قبوله؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟
    $("#BasicInfoGender").change(function () {

        if ($("#BasicInfoGender").val() == 2) {//زن

            $("#BasicInfoMilitaryStatus").prop('disabled', false);


        } else if ($("#BasicInfoGender").val() == 1) {
            $("#BasicInfoMilitaryStatus").prop('disabled', true);

        }
    });

    $(".experiencediv").on('click', "[name='working[]']", function () {//*

        if ($(this).is(':checked')) {
            $(this).parent().parent().parent().parent().find("[id='ExperienceInfosFinishingYear']").val('');
            $(this).parent().parent().parent().parent().find("[id='ExperienceInfosFinishingYear']").prop('disabled', true);
            $(this).parent().parent().parent().parent().find("[id='ExperienceInfosFinishingMonth']").val('');
            $(this).parent().parent().parent().parent().find("[id='ExperienceInfosFinishingMonth']").prop('disabled', true);
        } else {
            $(this).parent().parent().parent().parent().find("[id='ExperienceInfosFinishingYear']").prop('disabled', false);
            $(this).parent().parent().parent().parent().find("[id='ExperienceInfosFinishingMonth']").prop('disabled', false);
        }
    });

    var save2 = function () {//unread

        var myFormData = new FormData();

        var answer1 = [];
        var answer2 = [];
        var answer3 = [];
        var answer4 = [];
        var answer5 = [];
        var answer6 = [];
        var answer7 = [];
        var answer8 = [];
        var answer9 = [];
        var answer10 = [];
        var answer11 = [];
        var answer12 = [];
        var answer13 = [];
        var answer14 = [];
        var answer15 = [];

        $('select[name="EducationInfosEducationLevel[]"]').each(function () {
            answer1.push([$(this).val()]);
        });

        $('select[name="EducationInfosFieldOfStudy[]"]').each(function () {
            answer2.push([$(this).val()]);

        });

        $('[name="EducationInfosBranch[]"]').each(function () {
            answer3.push([$(this).val()]);

        });
        $('select[name="EducationInfosUpperGraduageInstitudeType[]"]').each(function () {
            answer4.push([$(this).val()]);

        });

        $('select[name="EducationInfosUnderGraduateInstitudeType[]"]').each(function () {
            answer5.push([$(this).val()]);
        });

        $('[name="EducationInfosEducationInstitudeTitle[]"]').each(function () {
            answer6.push([$(this).val()]);

        });

        $('[name="EducationInfosGrade[]"]').each(function () {
            answer7.push([$(this).val()]);

        });
        $('select[name="EducationInfosCountryId[]"]').each(function () {
            answer8.push([$(this).val()]);

        });
        $('select[name="EducationInfosProvinceId[]"]').each(function () {
            answer9.push([$(this).val()]);
        });

        $('[name="EducationInfosProvinceTitle[]"]').each(function () {
            answer10.push([$(this).val()]);

        });

        $('select[name="EducationInfosCityId[]"]').each(function () {
            answer11.push([$(this).val()]);

        });
        $('[name="EducationInfosCityTitle[]"]').each(function () {
            answer12.push([$(this).val()]);

        });

        $('select[name="EducationInfosEntranceYear[]"]').each(function () {
            answer13.push([$(this).val()]);

        });
        $('select[name="EducationInfosGraduateYear[]"]').each(function () {
            answer14.push([$(this).val()]);

        });
        $('label [name="studing[]"]').each(function () {
            if ($(this).is(':checked')) {
                answer15.push([1]);
            } else {
                answer15.push([0]);
            }
        });

        myFormData.append('answer1', answer1);
        myFormData.append('answer2', answer2);
        myFormData.append('answer4', answer4);
        myFormData.append('answer3', answer3);
        myFormData.append('answer5', answer5);
        myFormData.append('answer6', answer6);
        myFormData.append('answer7', answer7);
        myFormData.append('answer8', answer8);
        myFormData.append('answer9', answer9);
        myFormData.append('answer10', answer10);
        myFormData.append('answer11', answer11);
        myFormData.append('answer12', answer12);
        myFormData.append('answer13', answer13);
        myFormData.append('answer14', answer14);
        myFormData.append('answer15', answer15);

        $.ajax({
            url: siteurl + 'builder/nextstep2',
            type: "POST",
            enctype: 'multipart/form-data',
            contentType: false,
            processData: false,
            data: myFormData,
            dataType: "json",
            success: function (result) {
                if (result.id == '1') {
                    toastr.success('  با موفقیت ذخیره شد');
                } else {
                    toastr.error(result.msg);
                }
            }
        });

    };
    var save3 = function () {//unread

        var myFormData = new FormData();
        var answer1 = [];
        var answer2 = [];
        var answer3 = [];
        var answer4 = [];
        var answer5 = [];
        var answer6 = [];
        var answer7 = [];
        var answer8 = [];
        var answer9 = [];
        var answer10 = [];
        var answer11 = [];
        var answer12 = [];
        var answer13 = [];
        var answer14 = [];
        var answer15 = [];
        var answer16 = [];
        $('select[name="ExperienceInfosJobCategoryId[]"]').each(function () {
            answer1.push([$(this).val()]);
        });

        $('[name="ExperienceInfosJobTitle[]"]').each(function () {
            answer2.push([$(this).val()]);

        });

        $('select[name="ExperienceInfosEmployerType[]"]').each(function () {
            answer3.push([$(this).val()]);

        });
        $('[name="ExperienceInfosCompanyName[]"]').each(function () {
            answer4.push([$(this).val()]);

        });

        $('select[name="ExperienceInfosEmploymentType[]"]').each(function () {
            answer5.push([$(this).val()]);
        });

        $('select[name="ExperienceInfosJobLevel[]"]').each(function () {
            answer6.push([$(this).val()]);

        });

        $('select[name="ExperienceInfosCountryId[]"]').each(function () {

            answer7.push([$(this).val()]);

        });
        $('select[name="ExperienceInfosProvinceId[]"]').each(function () {
            answer8.push([$(this).val()]);

        });


        $('[name="ExperienceInfosProvinceTitle[]"]').each(function () {
            answer9.push([$(this).val()]);

        });

        $('select[name="ExperienceInfosCityId[]"]').each(function () {
            answer10.push([$(this).val()]);
        });

        $('[name="ExperienceInfosCityTitle[]"]').each(function () {
            answer11.push([$(this).val()]);

        });
        $('[name="ExperienceInfosStartingMonth[]"]').each(function () {
            answer12.push([$(this).val()]);

        });

        $('select[name="ExperienceInfosStartingYear[]"]').each(function () {
            answer13.push([$(this).val()]);

        });
        $('select[name="ExperienceInfosFinishingMonth[]"]').each(function () {
            answer14.push([$(this).val()]);

        });
        $('select[name="ExperienceInfosFinishingYear[]"]').each(function () {
            answer15.push([$(this).val()]);

        });
        $('label [name="working[]"]').each(function () {
            if ($(this).is(':checked')) {
                answer16.push([1]);
            } else {
                answer16.push([0]);
            }
        });

        myFormData.append('answer1', answer1);
        myFormData.append('answer2', answer2);
        myFormData.append('answer4', answer4);
        myFormData.append('answer3', answer3);
        myFormData.append('answer5', answer5);
        myFormData.append('answer6', answer6);
        myFormData.append('answer7', answer7);
        myFormData.append('answer8', answer8);
        myFormData.append('answer9', answer9);
        myFormData.append('answer10', answer10);
        myFormData.append('answer11', answer11);
        myFormData.append('answer12', answer12);
        myFormData.append('answer13', answer13);
        myFormData.append('answer14', answer14);
        myFormData.append('answer15', answer15);
        myFormData.append('answer16', answer16);
        $.ajax({
            url: siteurl + 'builder/nextstep3',
            type: "POST",
            enctype: 'multipart/form-data',
            contentType: false,
            processData: false,
            data: myFormData,
            dataType: "json",
            success: function (result) {
                if (result.id == '1') {
                    if (result.flag == 1) {
                        toastr.success('  با موفقیت ذخیره شد');
                    }

                } else {
                    toastr.error(result.msg);
                }
            }
        });
    };
    $('#gostep4').on('click', function () {
        save3();
        current = 4;

    });
    $('#gostep3').on('click', function () {
        if ($('#EducationInfosFieldOfStudy').val() == '0' || $('#EducationInfosEducationLevel').val() == '0') {
            toastr.error('پرکردن فیلدهای ستاره دارالزامی است.');

            return false;
        }
        save2();
        current = 3;
    });

    $("#addlanguage").click(function () {
        var $button = $('.clonein4').clone();
        $button.removeClass('clonein4');
        $button.find("select[id='LanguageInfosLanguageName']").val('');
        $button.find("select[id='LanguageInfosReadingLevel']").val('');
        $button.find("select[id='LanguageInfosWritingLevel']").val('');
        $button.find("select[id='LanguageInfosListeningLevel']").val('');
        $button.find("select[id='LanguageInfosSpeakingLevel']").val('');
        $button.find("select[id='LanguageInfosReadingLevel']").val('');
        $button.find('.deldiv').removeClass('hidden');
        $('.languagediv').append($button);
    });
    $(".languagediv").on('click', 'a[id="delthispart"]', function () {

        $(this).parent().parent().parent().parent().remove();
    }
    );
    $("#addskill").click(function () {
        var $button = $('.clonein5').clone();
        $button.removeClass('clonein5');
        $button.find("select[id='SkillInfosSkillName']").val('');
        $button.find("select[id='SkillInfosLevel']").val('');
        $button.find('.deldiv').removeClass('hidden');
        $('.skilldiv').append($button);
    });
    $(".skilldiv").on('click', 'a[id="delthispart"]', function () {

        $(this).parent().parent().remove();
    }
    );
    $("#addcertificate").click(function () {
        var $button = $('.clonein6').clone();
        $button.removeClass('clonein6');
        $button.find("select[id='CertificateInfosYear']").val('');
        $button.find("select[id='CertificateInfosMonth']").val('');
        $button.find("input[id='CertificateInfosInstitude']").val('');
        $button.find("select[id='CertificateInfosCertificateType']").val('');
        $button.find("input[id='CertificateInfosTitle']").val('');
        $button.find('.deldiv').removeClass('hidden');
        $('.certificatediv').append($button);
    });
    $(".certificatediv").on('click', 'a[id="delthispart"]', function () {

        $(this).parent().parent().parent().parent().parent().remove();
    }
    );
    $("#addhonor").click(function () {
        var $button = $('.clonein7').clone();
        $button.removeClass('clonein7');
        $button.find("select[id='HonorInfosMonth']").val('');
        $button.find("select[id='HonorInfosYear']").val('');
        $button.find("input[id='HonorInfosTitle']").val('');
        $button.find('.deldiv').removeClass('hidden');
        $('.honordiv').append($button);
    });
    $(".honordiv").on('click', 'a[id="delthispart"]', function () {

        $(this).parent().parent().parent().parent().remove();
    }
    );
    var save4 = function () {//unread

        var myFormData = new FormData();
        //**language**
        var answer1 = [];
        var answer2 = [];
        var answer3 = [];
        var answer4 = [];
        var answer5 = [];
        //**skill**
        var answer6 = [];
        var answer7 = [];
        //**certificate**
        var answer8 = [];
        var answer9 = [];
        var answer10 = [];
        var answer11 = [];
        var answer12 = [];
        //**honor**
        var answer13 = [];
        var answer14 = [];
        var answer15 = [];

        $('select[name="LanguageInfosLanguageName[]"]').each(function () {
            answer1.push([$(this).val()]);
        });

        $('select[name="LanguageInfosReadingLevel[]"]').each(function () {
            answer2.push([$(this).val()]);

        });

        $('select[name="LanguageInfosWritingLevel[]"]').each(function () {
            answer3.push([$(this).val()]);

        });
        $('select[name="LanguageInfosListeningLevel[]"]').each(function () {
            answer4.push([$(this).val()]);

        });

        $('select[name="LanguageInfosSpeakingLevel[]"]').each(function () {
            answer5.push([$(this).val()]);
        });
//*****
        $('input[name="SkillInfosSkillName[]"]').each(function () {
            answer6.push([$(this).val()]);

        });

        $('select[name="SkillInfosLevel[]"]').each(function () {
            answer7.push([$(this).val()]);

        });

        //****
        $('select[name="CertificateInfosCertificateType[]"]').each(function () {
            answer8.push([$(this).val()]);

        });


        $('input[name="CertificateInfosTitle[]"]').each(function () {
            answer9.push([$(this).val()]);

        });

        $('input[name="CertificateInfosInstitude[]"]').each(function () {
            answer10.push([$(this).val()]);
        });

        $('select[name="CertificateInfosMonth[]"]').each(function () {
            answer11.push([$(this).val()]);

        });

        $('select[name="CertificateInfosYear[]"]').each(function () {
            answer12.push([$(this).val()]);

        });

        //******

        $('select[name="HonorInfosYear[]"]').each(function () {
            answer13.push([$(this).val()]);

        });
        $('select[name="HonorInfosMonth[]"]').each(function () {
            answer14.push([$(this).val()]);

        });
        $('input[name="HonorInfosTitle[]"]').each(function () {
            answer15.push([$(this).val()]);

        });


        myFormData.append('answer1', answer1);
        myFormData.append('answer2', answer2);
        myFormData.append('answer4', answer4);
        myFormData.append('answer3', answer3);
        myFormData.append('answer5', answer5);
        myFormData.append('answer6', answer6);
        myFormData.append('answer7', answer7);
        myFormData.append('answer8', answer8);
        myFormData.append('answer9', answer9);
        myFormData.append('answer10', answer10);
        myFormData.append('answer11', answer11);
        myFormData.append('answer12', answer12);
        myFormData.append('answer13', answer13);
        myFormData.append('answer14', answer14);
        myFormData.append('answer15', answer15);


        $.ajax({
            url: siteurl + 'builder/nextstep4',
            type: "POST",
            enctype: 'multipart/form-data',
            contentType: false,
            processData: false,
            data: myFormData,
            dataType: "json",
            success: function (result) {
                if (result.id == '1') {
                    if(result.flag==1){
                    toastr.success('  با موفقیت ذخیره شد');
                }
                } else {
                    toastr.error(result.msg);
                }
            }
        });

    };
    $('#gostep5').on('click', function () {
        save4();
        current = 5;

    });

    $("#researchadd").click(function () {
        var $button = $('.clonein8').clone();
        $button.removeClass('clonein8');
        $button.find("select[id='ResearchInfosPublishType']").val('');
        $button.find("input[id='ResearchInfosTitle']").val('');
        $button.find("input[id='ResearchInfosPublisher']").val('');
        $button.find("input[id='ResearchInfosLinkUrl']").val('');
        $button.find("select[id='ResearchInfosMonth']").val('');
        $button.find("select[id='ResearchInfosYear']").val('');
        $button.find("textarea[id='ResearchInfosDescription']").val('');
        $button.find('.deldiv').removeClass('hidden');
        $('.researchdiv').append($button);
    });
    $(".researchdiv").on('click', 'a[id="delthispart"]', function () {

        $(this).parent().parent().parent().parent().remove();
    }
    );
    $("#addproject").click(function () {
        var $button = $('.clonein9').clone();
        $button.removeClass('clonein9');
        $button.find("input[id='ProjectInfosTitle']").val('');
        $button.find("input[id='ProjectInfosFor']").val('');
        $button.find("input[id='ProjectInfosLinkUrl']").val('');
        $button.find("select[id='ProjectInfosMonth']").val('');
        $button.find("select[id='ProjectInfosYear']").val('');
        $button.find("textarea[id='ProjectInfosDescription']").val('');
        $button.find('.deldiv').removeClass('hidden');
        $('.projectdiv').append($button);
    });
    $(".projectdiv").on('click', 'a[id="delthispart"]', function () {

        $(this).parent().parent().parent().parent().remove();
    }
    );
    var save5 = function () {//unread
        var myFormData = new FormData();
        var answer1 = [];
        var answer2 = [];
        var answer3 = [];
        var answer4 = [];
        var answer5 = [];
        var answer6 = [];
        var answer7 = [];
        var answer8 = [];
        var answer9 = [];
        var answer10 = [];
        var answer11 = [];
        var answer12 = [];
        var answer13 = [];


        $('select[name="ResearchInfosPublishType[]"]').each(function () {
            answer1.push([$(this).val()]);
        });

        $('input[name="ResearchInfosTitle[]"]').each(function () {
            answer2.push([$(this).val()]);
        });

        $('input[name="ResearchInfosPublisher[]"]').each(function () {
            answer3.push([$(this).val()]);
        });
        $('input[name="ResearchInfosLinkUrl[]"]').each(function () {
            answer4.push([$(this).val()]);
        });

        $('select[name="ResearchInfosMonth[]"]').each(function () {
            answer5.push([$(this).val()]);
        });

        $('select[name="ResearchInfosYear[]"]').each(function () {
            answer6.push([$(this).val()]);
        });

        $('textarea[name="ResearchInfosDescription[]"]').each(function () {
            answer7.push([$(this).val()]);
        });
//*****
        $('input[name="ProjectInfosTitle[]"]').each(function () {
            answer8.push([$(this).val()]);

        });

        $('input[name="ProjectInfosFor[]"]').each(function () {
            answer9.push([$(this).val()]);
        });

        $('input[name="ProjectInfosLinkUrl[]"]').each(function () {
            answer10.push([$(this).val()]);
        });

        $('select[name="ProjectInfosMonth[]"]').each(function () {
            answer11.push([$(this).val()]);

        });

        $('select[name="ProjectInfosYear[]"]').each(function () {
            answer12.push([$(this).val()]);
        });


        $('textarea[name="ProjectInfosDescription[]"]').each(function () {
            answer13.push([$(this).val()]);
        });

        myFormData.append('answer1', answer1);
        myFormData.append('answer2', answer2);
        myFormData.append('answer4', answer4);
        myFormData.append('answer3', answer3);
        myFormData.append('answer5', answer5);
        myFormData.append('answer6', answer6);
        myFormData.append('answer7', answer7);
        myFormData.append('answer8', answer8);
        myFormData.append('answer9', answer9);
        myFormData.append('answer10', answer10);
        myFormData.append('answer11', answer11);
        myFormData.append('answer12', answer12);
        myFormData.append('answer13', answer13);


        $.ajax({
            url: siteurl + 'builder/nextstep5',
            type: "POST",
            enctype: 'multipart/form-data',
            contentType: false,
            processData: false,
            data: myFormData,
            dataType: "json",
            success: function (result) {
                if (result.id == '1') {
                   if (result.flag == '1') {
                    toastr.success('  با موفقیت ذخیره شد');
                }
                } else {
                    toastr.error(result.msg);
                }
            }
        });

    };

    $('#gostep6').on('click', function () {
        save5();
        current = 6;


    });
    $('#c1').on('click', function () {
        var excurrent = current;
        if (excurrent == 2) {
            if ($('#EducationInfosFieldOfStudy').val() == '0' || $('#EducationInfosEducationLevel').val() == '0') {
                toastr.error('پرکردن فیلدهای ستاره دارالزامی است.');

                return false;
            }
            save2();
        } else if (excurrent == 3) {
            save3();
        } else if (excurrent == 4) {
            save4();
        } else if (excurrent == 5) {
            save5();
        } else if (excurrent == 6) {
            save6();
        }

        current = 1;
    });
    $('#c2').on('click', function () {

        var excurrent = current;
        if (excurrent == 1) {
            if ($('#BasicInfoFirstName').val() == '' || $('#BasicInfoLastName').val() == '' || $('#BasicInfoEmail').val() == '') {
                toastr.error('پرکردن فیلدهای ستاره دارالزامی است.');

                return false;
            }
            save1();
        } else if (excurrent == 3) {
            save3();
        } else if (excurrent == 4) {
            save4();
        } else if (excurrent == 5) {
            save5();
        } else if (excurrent == 6) {
            save6();
        }
        current = 2;
    });
    $('#c3').on('click', function () {

        var excurrent = current;
        if (excurrent == 2) {
            if ($('#EducationInfosFieldOfStudy').val() == '0' || $('#EducationInfosEducationLevel').val() == '0') {
                toastr.error('پرکردن فیلدهای ستاره دارالزامی است.');

                return false;
            }
            save2();
        } else if (excurrent == 1) {
            if ($('#BasicInfoFirstName').val() == '' || $('#BasicInfoLastName').val() == '' || $('#BasicInfoEmail').val() == '') {
                toastr.error('پرکردن فیلدهای ستاره دارالزامی است.');

                return false;
            }
            save1();
        } else if (excurrent == 4) {
            save4();
        } else if (excurrent == 5) {
            save5();
        } else if (excurrent == 6) {
            save6();
        }
        current = 3;
    });
    $('#c4').on('click', function () {
        var excurrent = current;
        if (excurrent == 2) {
            if ($('#EducationInfosFieldOfStudy').val() == '0' || $('#EducationInfosEducationLevel').val() == '0') {
                toastr.error('پرکردن فیلدهای ستاره دارالزامی است.');

                return false;
            }
            save2();
        } else if (excurrent == 3) {
            save3();
        } else if (excurrent == 1) {
            if ($('#BasicInfoFirstName').val() == '' || $('#BasicInfoLastName').val() == '' || $('#BasicInfoEmail').val() == '') {
                toastr.error('پرکردن فیلدهای ستاره دارالزامی است.');

                return false;
            }
            save1();
        } else if (excurrent == 5) {
            save5();
        } else if (excurrent == 6) {
            save6();
        }
        current = 4;
    });
    $('#c5').on('click', function () {
        var excurrent = current;
        if (excurrent == 2) {
            if ($('#EducationInfosFieldOfStudy').val() == '0' || $('#EducationInfosEducationLevel').val() == '0') {
                toastr.error('پرکردن فیلدهای ستاره دارالزامی است.');

                return false;
            }
            save2();

        } else if (excurrent == 3) {
            save3();
        } else if (excurrent == 4) {
            save4();

        } else if (excurrent == 1) {
            if ($('#BasicInfoFirstName').val() == '' || $('#BasicInfoLastName').val() == '' || $('#BasicInfoEmail').val() == '') {
                toastr.error('پرکردن فیلدهای ستاره دارالزامی است.');

                return false;
            }
            save1();
        } else if (excurrent == 6) {
            save6();
        }
        current = 5;
    });
    $('#c6').on('click', function () {
        var excurrent = current;
        if (excurrent == 2) {
            if ($('#EducationInfosFieldOfStudy').val() == '0' || $('#EducationInfosEducationLevel').val() == '0') {
                toastr.error('پرکردن فیلدهای ستاره دارالزامی است.');

                return false;
            }
            save2();
        } else if (excurrent == 3) {
            save3();
        } else if (excurrent == 4) {
            save4();
        } else if (excurrent == 5) {
            save5();
        } else if (excurrent == 1) {
            if ($('#BasicInfoFirstName').val() == '' || $('#BasicInfoLastName').val() == '' || $('#BasicInfoEmail').val() == '') {
                toastr.error('پرکردن فیلدهای ستاره دارالزامی است.');

                return false;
            }
            save1();
        }
        current = 6;

    });

    $("[id='register']").on('click', function () {
        var username = $('#modeluserName').val();
        var pass = $('#modelpassword').val();
        $.ajax({

            url: siteurl + "account/register",
            type: "POST",

            data: {username: username, password: pass},
            dataType: "json",
            success: function (result) {

                if (result.id == '1') {

                    $('#modelpassword').val('');
                    $('#modeluserName').val('');
                    window.location.replace(siteurl + 'templatemarket');
                    window.location.href = siteurl + 'templatemarket';

                } else {
                    alert(result.msg);
                }
            }
        });

    });

    $('#createnew').on('click', function () {
        $.ajax({

            url: siteurl + "builder/clear",
            type: "POST",

            data: {},
            dataType: "json",
            success: function (result) {

                if (result.id == '1') {

                    window.location.replace(siteurl + 'builder/index');
                    window.location.href = siteurl + 'builder/index';

                }
            }
        });

    });

    $('#pdfpage').on('click', function () {
        var urlp = window.location.href;
        var origin = window.location.origin;
        $.ajax({
            url: origin + '/builder/makepdf/',
            type: 'POST',
            dataType: 'json',
            data: {urlp: urlp},
            success: function (data) {
//            if(data.id=='1'){
//                 window.location.replace(siteurl + 'account/index');
//                 window.location.href = siteurl + 'account/index';
//            }

            }
        });
    });

});
var params = {
    language: 'fa',
    underGraduate: 'UnderGraduate',
    diploma: 'Diploma',
    culture: 'fa',
    choosePhoto: 'انتخاب عکس',
    photoId: 'Photo',
    changePhoto: 'تغییر عکس',
    cultureVar: 'fa',
    minAverageSalaryId: 'RecruitmentInfo_MinAverageSalary',
};
window.dataLayer = window.dataLayer || [];
function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-101108363-3');


WebFontConfig = {
    google: {families: ['Material+Icons']}
};
(function () {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
})();

setTimeout(function () {
    var st = document.createElement('style');
    st.innerText = 'i.material-icons {font-size: 24px !important;}'
    document.body.appendChild(st);
}, 2000);



