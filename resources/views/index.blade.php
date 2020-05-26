
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>رزومه ساز</title>
    <meta name="description" content="resume for all"/>


        <link rel="stylesheet" href="{{asset("css/material.css")}}">
        <noscript><link rel="stylesheet" href="{{asset("css/material.css")}}"></noscript>
        <link href="{{asset("css/ghpages-.css")}}" rel="stylesheet" />
        <link href="{{asset("css/font-awe.css")}}" rel="stylesheet" />
        <link href="{{asset("css/00bootst.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset("css/01font-a.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset("css/00select.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset("css/03zcss00.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset("css/04style0.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset("css/0style00.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset("css/0toastr0.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset("css/jquery-u.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset("css/jquery-v.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset("css/materiam.css")}}" rel="stylesheet" type="text/css"/>

        <link rel="apple-touch-icon" sizes="180x180" href="http://cvbesaz.com/public/style_barbiq/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="index_files/favicon-.png">
        <link rel="icon" type="image/png" sizes="16x16" href="index_files/favicon0.png">
        <link rel="manifest" href="http://cvbesaz.com/public/style_barbiq/images/site.webmanifest">
        <link rel="mask-icon" href="http://cvbesaz.com/public/style_barbiq/images/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <!--@RenderSection("Canonical", false)-->






        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>




<link href="{{asset("css/selectiz.css")}}" rel="stylesheet" />

<div class="container">
    <br />
    <div class="row">
        <div class="cv-lang-actionbar center">
            <a class="button button--blue no-pointer"  id="createnew" href="">ساخت رزومه جدید</a>
            <!--            <a class="button button--blue button--hollow" href="http://cvbesaz.com/builder/en">رزومه انگلیسی</a>-->
            <!--            @*<a id="guideTour" class="button button--blue left" href="#!">راهنما</a>*@-->
            <!--            @*<div class="progress">
                                <div class="determinate" id="score" style="width: 0%"></div>
                            </div>*@-->
            <div class="progress-resume center">
                <h4>درصد تکمیل رزومه شما</h4>
                <div id="circle">
                    <strong></strong>
                </div>
            <!--                @ if (User.Identity.IsAuthenticated)
                {
             ?   if iduser is set this show else hidden=>with var-->

                    <!--                <a href="/Resume/fa/aa039611-aab7-465c-bf9b-7a6d7a0bf7fa" target="_blank">نمونه</a>-->
            </div>
        </div>

        <div class="col-sm-12">
            <form id="builderForm" method="post" enctype="multipart/form-data">
                <!--                <ul class="stepper parallel horizontal" dir="@(culture == "fa" ? "rtl" : "ltr")">-->
                <ul class="stepper parallel horizontal" dir="rtl">
                    <li class="step active">
                        <a href="#c1" id='c1' class="step-title waves-effect">اطلاعات پایه</a>

                        <div class="step-content" >

                            <!--startBasicInfo-->

                            <input type="hidden" asp-for="BasicInfo.Id" data-section="@nameof(BasicInfo)" />
                            <input type="hidden" asp-for="BasicInfo.AddedDate" />
                            <!--@*<input type="hidden" data-score="2" value="@(string.IsNullOrEmpty(Model?.Photo) ? null : "hasValue")" />*@-->

                            <div style="height: 1000px !important;" class="row">
                                <fieldset>
                                    <legend class="compact"><div class="text-center">اطلاعات پایه</div></legend>

                                    <div class="col-md-2 col-sm-12 center-align">
                                        <div class="file-field input-field photo-upload">

                                            <label class="btn">
                                            <span>
                                                <i class="fa fa-cloud-upload icon-fa fa-3x"></i>
                                            </span>

                                                <input type="file" name="file" id="profilephoto" />
                                                <input type="hidden" asp-for="Photo" />
                                            </label>
                                            <div class="file-path-wrapper" style="display:none">
                                                <input class="file-path validate" type="text" placeholder="Upload files">
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-small blue" id="add-photo">انتخاب تصویر</button>

                                    </div>

                                    <div class="col-md-3 col-sm-6">
                                        <label>نام<span style="color: red; font-size: 18px;"> *</span></label>
                                        <input id="BasicInfoFirstName" data-score="0.5" />

                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <label>نام خانوادگی<span style="color: red; font-size: 18px;"> *</span></label>
                                        <input id="BasicInfoLastName" data-score="1" />


                                    </div>

                                    <div class="col-md-3 col-sm-6">

                                        <label class="active">جنسیت</label>
                                        <select id="BasicInfoGender" class="browser-default material-selectize">
                                            <option value="0"></option><option value="1">مرد</option><option value="2">زن</option>
                                        </select>

                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <label class="active">وضعیت تاهل</label>
                                        <select id="BasicInfoMaritalStatus" class="browser-default material-selectize">
                                            <option value="0"></option><option value="1">مجرد</option><option value="2">متاهل</option>
                                        </select>

                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <label class="active">وضعیت سربازی</label>
                                        <select id="BasicInfoMilitaryStatus"class="browser-default material-selectize" asp-items="Html.GetTranslatedEnumSelectList<MilitaryStatus>()">
                                            <option value="0"disabled selected></option><option value="1">مشمول</option><option value="2">درحال خدمت</option><option value="3">پایان خدمت</option><option value="4">معاف</option><option value="5">معافیت تحصیلی</option>
                                        </select>

                                    </div>

                                    <div class="row col-md-4 col-sm-12 table-field" style="padding-left: 0;">
                                        <label>تاریخ تولد</label>
                                        <table>
                                            <tr>
                                                <td>
                                                    <select id="BasicInfoBirtDay" class="browser-default no-caret material-selectize">
                                                        <option value="0" disabled selected>روز</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                                                    </select>
                                                </td>
                                                <td style="width:50%;padding-left:14px;">
                                                    <select id="BasicInfoBirthMonth" class="browser-default no-caret material-selectize">
                                                        <option value="0" >ماه</option>
                                                        <option value="1">فروردین</option>
                                                        <option value="2">اردیبهشت</option>
                                                        <option value="3">خرداد</option>
                                                        <option value="4">تیر</option>
                                                        <option value="5">مرداد</option>
                                                        <option value="6">شهریور</option>
                                                        <option value="7">مهر</option>
                                                        <option value="8">آبان</option>
                                                        <option value="9">آذر</option>
                                                        <option value="10">دی</option>
                                                        <option value="11">بهمن</option>
                                                        <option value="12">اسفند</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select id="BasicInfoBirthYear"  class="browser-default no-caret material-selectize">
                                                        <option value="0" disabled selected>سال</option> <option value="1329" >1329 </option> <option value="1330" >1330 </option> <option value="1331" >1331 </option> <option value="1332" >1332 </option> <option value="1333" >1333 </option> <option value="1334" >1334 </option> <option value="1335" >1335 </option> <option value="1336" >1336 </option> <option value="1337" >1337 </option> <option value="1338" >1338 </option> <option value="1339" >1339 </option> <option value="1340" >1340 </option> <option value="1341" >1341 </option> <option value="1342" >1342 </option> <option value="1343" >1343 </option> <option value="1344" >1344 </option> <option value="1345" >1345 </option> <option value="1346" >1346 </option> <option value="1347" >1347 </option> <option value="1348" >1348 </option> <option value="1349" >1349 </option> <option value="1350" >1350 </option> <option value="1351" >1351 </option> <option value="1352" >1352 </option> <option value="1353" >1353 </option> <option value="1354" >1354 </option> <option value="1355" >1355 </option> <option value="1356" >1356 </option> <option value="1357" >1357 </option> <option value="1358" >1358 </option> <option value="1359" >1359 </option> <option value="1360" >1360 </option> <option value="1361" >1361 </option> <option value="1362" >1362 </option> <option value="1363" >1363 </option> <option value="1364" >1364 </option> <option value="1365" >1365 </option> <option value="1366" >1366 </option> <option value="1367" >1367 </option> <option value="1368" >1368 </option> <option value="1369" >1369 </option> <option value="1370" >1370 </option> <option value="1371" >1371 </option> <option value="1372" >1372 </option> <option value="1373" >1373 </option> <option value="1374" >1374 </option> <option value="1375" >1375 </option> <option value="1376" >1376 </option> <option value="1377" >1377 </option> <option value="1378" >1378 </option> <option value="1379" >1379 </option> <option value="1380" >1380 </option> <option value="1381" >1381 </option> <option value="1382" >1382 </option> <option value="1383" >1383 </option> <option value="1384" >1384 </option> <option value="1385" >1385 </option> <option value="1386" >1386 </option> <option value="1387" >1387 </option> <option value="1388" >1388 </option>

                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <legend class="compact"><div class="text-center">اطلاعات تماس</div> </legend>

                                    <div class="col-md-4 col-sm-12">

                                        <i class="fa fa-envelope icon-fa fa-2x prefix"></i>
                                        <label>ایمیل<span style="color: red; font-size: 18px;"> *</span></label>
                                        <input id="BasicInfoEmail" data-score="1" dir="ltr" class="ltr-field" type="text" id="BasicInfo_Email" name="BasicInfo.Email" value=""/>

                                        <span class="emailMessage"></span>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <i class="fa fa-mobile icon-fa fa-3x prefix"></i>
                                        <label >موبایل</label>
                                        <input id="BasicInfoMobile" data-score="0.5" style="min-width:85px" dir="ltr" class="onlyNumber" placeholder="09*********" />

                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <i class="fa fa-phone icon-fa fa-3x prefix"></i>
                                        <label asp-for="BasicInfoPhone">تلفن</label>
                                        <input id="BasicInfoPhone" data-score="0.5" dir="ltr" style="min-width:85px"  placeholder="02166665454" class="onlyNumber" />

                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <i class="fa fa-globe icon-fa fa-3x prefix"></i>
                                        <label asp-for="BasicInfoWebsite">وب سایت</label>
                                        <input id="BasicInfoWebsite" data-score="0.5" class="en-font" dir="ltr" placeholder="www." />

                                    </div>

                                    <div class="col-md-2 col-sm-12">
                                        <label asp-for="BasicInfo.CountryTitle" class="active">کشور</label>
                                        <select id="BasicInfoCountryId" class="browser-default material-selectize">
                                            <option value="0" disabled selected> </option> <option value="2">ایران</option> <option value="153">آلبانی</option> <option value="154">الجزایر</option> <option value="155">آندورا</option> <option value="156">آنگولا</option> <option value="157">آرزانتین</option> <option value="158">ارمنستان</option> <option value="159">استرالیا</option> <option value="160">اتریش</option> <option value="161">آذربایجان</option> <option value="162">باهاما</option> <option value="163">بحرین</option> <option value="164">بنگلادش</option> <option value="165">باربادوس</option> <option value="166">بلاروس</option> <option value="167">بلژیک</option> <option value="168">بلیز</option> <option value="169">بنین</option> <option value="170">بوتان</option> <option value="171">بولیوی</option> <option value="172">بوسنی و هرزگوین</option> <option value="173">بوتسوانا</option> <option value="174">برزیل</option> <option value="175">بونئی</option> <option value="176">بلغارستان</option> <option value="177">بورکینیا فاسو</option> <option value="178">بروندی</option> <option value="179">کامبوج</option> <option value="180">کامرون</option> <option value="181">کانادا</option> <option value="182">چاد</option> <option value="183">شیلی</option> <option value="184">چین</option> <option value="185">کلمبیا</option> <option value="186">کنگو</option> <option value="187">کاستاریکا</option> <option value="188">کرواسی</option> <option value="189">کوبا</option> <option value="190">قبرس</option> <option value="191">جمهوری چک</option> <option value="192">دانمارک</option> <option value="193">جیبوتی</option> <option value="194">دومینیکا</option> <option value="195">جمهوری دومنیکن</option> <option value="196">اکوادور</option> <option value="197">مصر</option> <option value="198">السالوادور</option> <option value="199">انگلیسی</option> <option value="200">ایتره</option> <option value="201">استونی</option> <option value="202">اتیوپی</option> <option value="203">فیجی</option> <option value="204">فنلاند</option> <option value="205">فرانسه</option> <option value="206">گابن</option> <option value="207">گامبیا</option> <option value="208">گرجستان</option> <option value="209">آلمان</option> <option value="210">غنا</option> <option value="211">یونان</option> <option value="212">گرانادا</option> <option value="213">گواتمالا</option> <option value="214">گینه</option> <option value="215">گویان</option> <option value="216">هایتی</option> <option value="217">هندوراس</option> <option value="218">مجارستان</option> <option value="219">ایسلند</option> <option value="220">هند</option> <option value="221">اندونزی</option> <option value="222">عراق</option> <option value="223">جمهوری ایرلند</option> <option value="224">ایتالیا</option> <option value="225">جامائیکا</option> <option value="226">ژاپن</option> <option value="227">اردن</option> <option value="228">قزاقستان</option> <option value="229">کنیا</option> <option value="230">کویت</option> <option value="231">لائوس</option> <option value="232">لیتوانی</option> <option value="233">لبنان</option> <option value="234">لیبریا</option> <option value="235">لیبی</option> <option value="236">لیتوانی</option> <option value="237">مقدونیه</option> <option value="238">ماداگاسکار</option> <option value="239">مالاوی</option> <option value="240">مالزی</option> <option value="241">مالدیو</option> <option value="242">مالی</option> <option value="243">مالت</option> <option value="244">موریتانی</option> <option value="245">موریس</option> <option value="246">مکزیک</option> <option value="247">موناکو</option> <option value="248">مغولستان</option> <option value="249">مونته نگرو</option> <option value="250">مراکش</option> <option value="251">موزامبیک</option> <option value="252">میانمار (نام دیگر این کشور برمه است)</option> <option value="253">نامیبیا</option> <option value="254">نپال</option> <option value="255">هلند</option> <option value="256">نیوزیلند</option> <option value="257">نیکاراگوئه</option> <option value="258">نیجر</option> <option value="259">نیجریه</option> <option value="260">کره شمالی</option> <option value="261">نروژ</option> <option value="262">عمان</option> <option value="263">پاکستان</option> <option value="264">فلستین</option> <option value="265">پاناما</option> <option value="266">گینه نو</option> <option value="267">پاراگوئه</option> <option value="268">پرو</option> <option value="269">فیلیپین</option> <option value="270">لهستان</option> <option value="271">پرتغال</option> <option value="272">قطر</option> <option value="273">رومانی</option> <option value="274">روسیه</option> <option value="275">رواندا</option> <option value="276">عربستان سعودی</option> <option value="277">سنگال</option> <option value="278">صربستان</option> <option value="279">سیشل</option> <option value="280">سیرالئون</option> <option value="281">سنگاپور</option> <option value="282">اسلواکی</option> <option value="283">اسلوونی</option> <option value="284">سومالی</option> <option value="285">آفریقای جنوبی</option> <option value="286">کره جنوبی</option> <option value="287">اسپانیا</option> <option value="288">سریلانکا</option> <option value="289">سودان</option> <option value="290">سورینام</option> <option value="291">سوازیلند</option> <option value="292">سوئد</option> <option value="293">سوئیس</option> <option value="294">سوریه</option> <option value="295">تایوان</option> <option value="296">تاجیکستان</option> <option value="297">تانزانیا</option> <option value="298">تایلند</option> <option value="299">توگو</option> <option value="300">ترینیداد و توباگو</option> <option value="301">تونس</option> <option value="302">ترکیه</option> <option value="303">ترکمنستان</option> <option value="304">توالو</option> <option value="305">اوگاندا</option> <option value="306">اکراین</option> <option value="307">امارات متحده عربی</option> <option value="308">ایالات متحده آمریکا</option> <option value="309">اروگوئه</option> <option value="310">ازبکستان</option> <option value="311">وانوواتو</option> <option value="312">واتیکان</option> <option value="313">ونزوئلا</option> <option value="314">ویتنام</option> <option value="315">یمن</option> <option value="316">زامبیا</option> <option value="317">زیمباوه</option> <option value="318">افغانستان</option>

                                        </select>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <label asp-for="BasicInfo.ProvinceTitle" class="active">استان</label>
                                        <div id="selectprovince" style="display: none;">
                                            <select id="BasicInfoProvinceId"  class="browser-default material-selectize" >

                                                <option value="0" disabled selected> </option><option value="1">آذربایجان شرقی</option><option value="2">آذربایجان غربی</option><option value="3">اردبیل</option><option value="4">اصفهان</option><option value="5">البرز</option><option value="6">ایلام</option><option value="7">بوشهر</option><option value="8">تهران</option><option value="9">چهار محال و بختیاری</option><option value="10">خراسان جنوبی</option><option value="11">خراسان رضوی</option><option value="12">خراسان شمالی</option><option value="13">خوزستان</option><option value="14">زنجان</option><option value="15">سمنان</option><option value="16">سیستان و بلوچستان</option><option value="17">فارس</option><option value="18">قزوین</option><option value="19">قم</option><option value="20">کردستان</option><option value="21">کرمان</option><option value="22">کرمانشاه</option><option value="23">کهگیلویه و بویراحمد</option><option value="24">گلستان</option><option value="25">گیلان</option><option value="26">لرستان</option><option value="27">مازندران</option><option value="28">مرکزی</option><option value="29">هرمزگان</option><option value="30">همدان</option><option value="31">یزد</option>
                                            </select>
                                        </div>
                                        <input id="BasicInfoProvinceTitle" style="display:inline" />

                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <label asp-for="BasicInfo.CityTitle" class="active">شهر</label>
                                        <div id="selectcity" style="display: none;">
                                            <select id="BasicInfoCityId" class="browser-default material-selectize" >

                                            </select>
                                        </div>
                                        <input id="BasicInfoCityTitle"style="display:inline" />

                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label asp-for="Basic.InfoAddress">آدرس</label>
                                        <input id="BasicInfoAddress" data-score="1" />

                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend class="compact"><div class="text-center">توصیف خلاصه </div> </legend>

                                    <div class="help-block">خلاصه رزومه بخش آغازین یک رزومه است که در قالب کلمات کوتاه، شفاف و مهم تصویری از شما و مهارت های شما در ذهن ایجاد می کند (کمتر از 250 کاراکتر)</div>
                                    <div class="col-sm-12">
                                        <textarea id="BasicInfoAbout" data-score="1" class="no-materialize-textarea" placeholder="برای مثال :
                                                  گرافیست با استعداد و علاقه مند به پیشرفت با داشتن مهارت های پیشرفته طراحی، ...."></textarea>
                                    </div>
                                </fieldset>
                                <fieldset>

                                    <legend class="compact"><div class="text-center">شبکه اجتماعی</div> </legend>

                                    <!--<input type="hidden" asp-for="UserSocialNets[index].Id" data-section="@nameof(UserSocialNet)" />-->

                                    <!--<div class="card social-content" data-aos="zoom-in-up" style="z-index:400">-->


                                    <div class="row col-md-5" style="border:3px dashed #e6e6e6; margin: 5px;">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label asp-for="UserSocialNets[index].Url">نام شبکه اجتماعی</label>

                                                <select id="UserSocialNets0"  name="UserSocialNets[]" class="form-control  select2 selectnew">
                                                    <option value="0" disabled></option>
                                                    <option value="1">لینکداین</option>
                                                    <option value="2">توییتر</option>
                                                    <option value="3">فیسبوک</option>
                                                    <option value="4">اینستاگرام</option>
                                                    <option value="5">تلگرام</option>

                                                </select>

                                                <!--                                    <input class="form-control input-lg" id="clientid" placeholder="..." type="email">

                                                        <input class="form-control input-lg" disabled="disabled" value="@user.ClienId" id="clientid" placeholder="..." type="email">-->

                                            </div>
                                        </div>
                                        <div class="col-md-7">

                                            <label asp-for="UserSocialNets[index].Url">آدرس های مرتبط</label>
                                            <input id="UserSocialNetsaddress0" name="UserSocialNetsaddress[]" dir="ltr" class="ltr-field" />
                                        </div>
                                        <!--</div>-->


                                    </div>


                                    <div class="clonein row col-md-5" style="border:3px dashed #e6e6e6; margin: 5px;">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label asp-for="UserSocialNets[index].Url">نام شبکه اجتماعی</label>
                                                <select id="UserSocialNets" name="UserSocialNets[]" class="form-control select2 selectnew">
                                                    <option value="0" disabled></option>
                                                    <option value="1">لینکداین</option>
                                                    <option value="2">توییتر</option>
                                                    <option value="3">فیسبوک</option>
                                                    <option value="4">اینستاگرام</option>
                                                    <option value="5">تلگرام</option>

                                                </select>

                                                <!--                                    <input class="form-control input-lg" id="clientid" placeholder="..." type="email">

                                                        <input class="form-control input-lg" disabled="disabled" value="@user.ClienId" id="clientid" placeholder="..." type="email">-->

                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <label asp-for="UserSocialNets[index].Url">آدرس های مرتبط</label>
                                            <input id="UserSocialNetsaddress" name="UserSocialNetsaddress[]" dir="ltr" class="ltr-field" />
                                        </div>
                                        <!--</div>-->
                                        <!--                                        <button class="waves-effect waves-dark remove-new-record text-center" data-section="UserSocialNet" data-id=""><i class="material-icons">close</i></button>-->
                                        <div class="deldiv left hidden"><a class=" waves-effect waves-dark " id="delthispart"> <i class="fa fa-times"></i></a></div>


                                    </div>

                                    <div class="socialdiv">


                                    </div>
                                    <div class="row col-md-12 right">
                                        <a id="addsocialnet" class="btn waves-effect waves-light green" title="افزودن شبکه اجتماعی">
                                            <!--<i class="material-icons">add</i>-->
                                            <i class="fa fa-plus"></i>

                                        </a>
                                    </div>
                                    <!--                                    <a data-section="SocialNet" id="addsocialnet" class="btn-floating btn waves-effect waves-light green add-new-section" title="افزودن شبکه اجتماعی">
                                                                            <i class="material-icons">add</i>

                                                                        </a>-->

                                </fieldset>
                            </div>

                            <div class="step-actions">

                                <button id="gostep2" class="button button--blue button--shadow next-step"><b>مرحله بعدی</b><i class="fa fa-angle-left icon-fa fa-2x"></i></button>

                            </div>

                    </li>
                    <li class="step">
                        <a id="c2" href="#Education" class="step-title waves-effect">سوابق تحصیلی</a>
                        <div class="step-content present-content">
                            <div class="clonein2" style="border:3px dashed #e6e6e6; margin: 5px; padding: 5px;">
                                <!--                                <input type="hidden" asp-for="EducationInfos[index].Id" data-section="@nameof(EducationInfo)" />-->

                                <div>
                                    <div class="row" >

                                        <div class="col-md-2 col-sm-6">
                                            <div class="form-group">
                                                <label asp-for="EducationInfos[index].EducationLevel" class="active">مقطع<span style="color: red; font-size: 18px;"> *</span></label>
                                                <select id="EducationInfosEducationLevel" name="EducationInfosEducationLevel[]" class="form-control select2 selectnew">
                                                    <option value="0"></option>
                                                    <option value="1">زیر دیپلم</option>
                                                    <option value="2">دیپلم</option>
                                                    <option value="3">کاردانی</option>
                                                    <option value="4">کارشناسی</option>
                                                    <option value="5">کارشناسی ارشد</option>
                                                    <option value="6">دکتری</option>
                                                    <option value="7">فوق دکتری</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <label asp-for="EducationInfos[index].FieldOfStudy">رشته تحصیلی<span style="color: red; font-size: 18px;"> *</span></label>
                                            <select id="EducationInfosFieldOfStudy" name="EducationInfosFieldOfStudy[]" class="form-control select2 selectnew">

                                                <option value="0"> </option><option value="50">مهندسی کامپیوتر</option><option value="2751">مهندسی مکانیک</option><option value="2752">مهندسی عمران</option><option value="2753">مهندسی معماری</option><option value="2754">مهندسی هسته ای</option><option value="2755">مهندسی کشتی</option><option value="2756">مهندسی دریا</option><option value="2757">مهندسی هوافضا</option><option value="2758">مهندسی انرژی</option><option value="2759">مهندسی شهرسازی</option><option value="2760">مهندسی فناوری اطلاعات</option><option value="2761">مهندسی صنایع</option><option value="2762">مهندسی شیمی</option><option value="2763">مهندسی نساجی</option><option value="2764">مهندسی رباتیک</option><option value="2765">مهندسی نفت</option><option value="2766">مهندسی ایمنی</option><option value="2767">مهندسی معدن</option><option value="2768">مهندسی پلیمر</option><option value="2769">مهندسی مواد</option><option value="2770">مهندسی متالورژی</option><option value="2771">مهندسی مدیریت پروژه</option><option value="2772">مهندسی راه آهن</option><option value="2773">مهندسی کشاورزی</option><option value="2774">مهندسی بازرسی فنی</option><option value="2775">مهندسی ماشین های کشاورزی</option><option value="2776">مهندسی مدیریت اجرایی</option><option value="2777">مهندسی مواد و طراحی صنایع غذایی</option><option value="2778">مهندسی مکانیک نیروگاه</option><option value="2779">مهندسی فرماندهی و کنترل هوایی</option><option value="2780">مهندسی اپتیک و لیزر</option><option value="2781">مهندسی مکاترونیک</option><option value="2782">مهندسی بهداشت محیط</option><option value="2783">مهندسی فضای سبز</option><option value="2784">مهندسی منابع طبیعی</option><option value="2785">مهندسی منابع طبیعی - شیلات</option><option value="2786">مهندسی تولیدات گیاهی</option><option value="2787">مهندسی کشاورزی- زراعت و اصلاح نباتات</option><option value="2788">مهندسی کشاورزی-علوم دامی</option><option value="2789">مهندسی کشاورزی-علوم و صنایع غذایی</option><option value="2790">مهندسی کشاورزی-ترویج و آموزش کشاورزی</option><option value="2791">مهندسی منابع طبیعی-مهندسی چوب</option><option value="2792">مهندسی منابع طبیعی-جنگلداری</option><option value="2793">مهندسی بهداشت حرفه ای</option><option value="2794">علوم کامپیوتر</option><option value="2795">ریاضی محض</option><option value="2796">ریاضی کاربردی</option><option value="2797">شیمی محض</option><option value="2798">شیمی کاربردی</option><option value="2799">فیزیک جامد</option><option value="2800">فیزیک هسته ای</option><option value="2801">فیزیک اتمی</option><option value="2802">اپتیک و لیزر</option><option value="2803">آمار</option><option value="2804">حسابداری</option><option value="2805">فیزیک مهندسی</option><option value="2806">معماری داخلی</option><option value="2807">کاردان فنی مکانیک</option><option value="2808">کاردان فنی عمران</option><option value="2809">کادرانی مراقبت پرواز</option><option value="2810">کاردان فنی برق</option><option value="2811">کاردانی هواپیما</option><option value="2812">کاردانی فنی معدن</option><option value="2813">پزشکی - دکتری</option><option value="2814">دندانپزشکی - دکتری</option><option value="2815">داروسازی - دکتری</option><option value="2816">دکتری پیوسته بیو تکنولوژی</option><option value="2817">فیزیوتراپی</option><option value="2818">اعضای مصنوعی</option><option value="2819">ارگونومی</option><option value="2820">اتاق عمل</option><option value="2821">هوشبری</option><option value="2822">پروتز های دندانی</option><option value="2823">بینایی سنجی</option><option value="2824">شنوایی سنجی</option><option value="2825">شنوایی شناسی</option><option value="2826">علوم آزمایشگاهی</option><option value="2827">علوم آزمایشگاهی دامپزشکی</option><option value="2828">مامایی</option><option value="2829">دامپزشکی</option><option value="2830">پرستاری</option><option value="2831">مدارک پزشکی</option><option value="2832">کاردانی فوریت های پزشکی</option><option value="2833">گفتار درمانی</option><option value="2834">تکنولوژی پزشکی هسته ای</option><option value="2835">ایمنی شناسی (ایمونولوژی)</option><option value="2836">تکنولوژی پرتوشناسی-رادیولوژی</option><option value="2837">زیست شناسی</option><option value="2838">مدیریت و کمیسر دریایی</option><option value="2839">کارشناسی تکنسین</option><option value="2840">بهداشت مواد غذایی</option><option value="2841">دبیری زیست شناسی</option><option value="2842">تکنولوژی مرتع و آبخیزداری</option><option value="2843">کتابداری</option><option value="2844">علوم تغذیه</option><option value="2845">علوم و صنایع غذایی</option><option value="2846">کارشناس بهداشت عمومی</option><option value="2847">کاردانی دامپزشکی</option><option value="2848">زیست شناسی سلولی مولکولی</option><option value="2849">فناوری اطلاعات سلامت</option><option value="2850">علوم مهندسی زیست محیطی</option><option value="2851">دبیری شیمی</option><option value="2852">اقیانوس شناسی</option><option value="2853">تکنولوژی تولیدات دامی</option><option value="2854">زمین شناسی</option><option value="2855">کاردرمانی</option><option value="2856">شیمی-پدافند جنگ های میکروبی</option><option value="2857">پرورش زنبور عسل</option><option value="2858">کاربری تولید و بهره برداری گیاهان دارویی معطر</option><option value="2859">مدیریت دولتی</option><option value="2860">مدیریت صنعتی</option><option value="2861">مدیریت بازرگانی</option><option value="2862">مدیریت اجرایی</option><option value="2863">MBA</option><option value="2864">MBE</option><option value="2865">مدیریت بیمه</option><option value="2866">مدیریت منابع انسانی</option><option value="2867">مدیریت تکنولوژی</option><option value="2868">مدیریت فناوری اطلاعات</option><option value="2869">مدیریت کارآفرینی</option><option value="2870">مدیریت مالی</option><option value="2871">مدیریت جهانگردی</option><option value="2872">مدیریت شهری</option><option value="2873">مدیریت اجرایی</option><option value="2874">حقوق</option><option value="2875">الهیات</option><option value="2876">مطالعات ارتباطی</option><option value="2877">علوم اقتصادی</option><option value="2878">اقتصاد</option><option value="2879">علوم سیاسی</option><option value="2880">علوم قضایی</option><option value="2881">تربیت بدنی</option><option value="2882">علوم اجتماعی</option><option value="2883">تفسیر قرآن مجید</option><option value="2884">روان شناسی</option><option value="2885">زبان و ادبیات فارسی</option><option value="2886">زبان و ادبیات عریب</option><option value="2887">روابط عمومی</option><option value="2888">مطاعات خانواده</option><option value="2889">کتابداری</option><option value="2890">روزنامه نگاری</option><option value="2891">مددکاری اجتماعی</option><option value="2892">راهنمایی و مشاوره</option><option value="2893">ادبیات داستانی</option><option value="2894">آب و هوا شناسی</option><option value="2895">ژئومورفولوژی</option><option value="2896">فقه و حقوق</option><option value="2897">جغرافیا</option><option value="2898">مدیریت هتلداری</option><option value="2899">علوم تربیتی</option><option value="2900">مدیریت جهانگردی</option><option value="2901">دبیری جغرافیا</option><option value="2902">امور گمرکی</option><option value="2903">تاریخ</option><option value="2904">علوم حدیث</option><option value="2905">فلسفه</option><option value="2906">رشد و پرورش کودکان پیش دبستانی</option><option value="2907">دبیری زبان و ادبیات عربی</option><option value="2908">دبیری زبان و ادبیات فارسی</option><option value="2909">علوم قرآنی و حدیث</option><option value="2910">علم اطلاعات و دانش شناسی</option><option value="2911">علوم ارتباطات اجتماعی</option><option value="2912">الهیات و معارف اسلامی</option><option value="2913">سینما</option><option value="2914">عکاسی</option><option value="2915">چاپ</option><option value="2916">کارشناسی فرش</option><option value="2917">گرافیک</option><option value="2918">صنایع دستی</option><option value="2919">موزه داری</option><option value="2920">باستان شناسی</option><option value="2921">مرمت آثار تاریخی</option><option value="2922">تلویزیون و هنرهای دیجیتال</option><option value="2923">انگلیسی</option><option value="2924">فرانسه</option><option value="2925">روسی</option><option value="2926">چینی</option><option value="2927">آلمانی</option><option value="2928">ایتالیایی</option><option value="2929">اسپانیایی</option><option value="2930">عربی</option><option value="2931">ترکی</option><option value="2932">مهندسی برق</option>
                                            </select>
                                            <!--                                                <input type='text'
                                               placeholder='Write your field of study name'
                                               class='flexdatalist'
                                               data-data='countries.json'
                                               data-search-in='name'
                                               data-min-length='1'
                                               name='country_name_suggestion'>-->
                                            <!--<input type="text" class="auto" id="EducationInfosFieldOfStudy"/>-->
                                        </div>

                                        <div class="col-md-2 col-sm-6">
                                            <label asp-for="EducationInfos[index].Branch">گرایش/تخصص</label>
                                            <input id="EducationInfosBranch" data-score="1" name="EducationInfosBranch[]" />

                                        </div>
                                        <div class="col-md-2 col-sm-6 UpperGraduage" >
                                            <label asp-for="EducationInfos[index].EducationInstitudeType" class="active">نوع موسسه</label>
                                            <div id="selectupper" style="display: none;">
                                                <select id="EducationInfosUpperGraduageInstitudeType" name="EducationInfosUpperGraduageInstitudeType[]"class="form-control select2 selectnew">
                                                    <option value="0" selected></option>
                                                    <option value="5">دولتی</option>
                                                    <option value="6">آزاد</option>
                                                    <option value="7">پیام نور</option>
                                                    <option value="8">علمی کاربردی</option>
                                                    <option value="9">غیرانتفاعی</option>
                                                    <option value="10">سایر</option>
                                                </select>
                                            </div>
                                            <div id="selectunder" style="display: block;">

                                                <select id="EducationInfosUnderGraduateInstitudeType" name="EducationInfosUnderGraduateInstitudeType[]" class="form-control select2 selectnew">
                                                    <option value="0" selected></option>
                                                    <option value="1">دولتی</option>
                                                    <option value="2">تیزهوشان</option>
                                                    <option value="3">غیرانتفاعی</option>
                                                    <option value="4">نمونه دولتی</option>
                                                </select>
                                            </div>


                                        </div>

                                        <div class="col-sm-3">
                                            <label asp-for="EducationInfos[index].EducationInstitudeTitle">عنوان موسسه آموزشی</label>
                                            <input id="EducationInfosEducationInstitudeTitle" data-score="1" name="EducationInfosEducationInstitudeTitle[]"/>

                                        </div>
                                        <div class="col-md-1 col-sm-6">
                                            <label asp-for="EducationInfos[index].Grade">معدل</label>
                                            <input id="EducationInfosGrade" data-score="0.5" name="EducationInfosGrade[]"/>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-6">
                                            <label asp-for="EducationInfos[index].CountryTitle" class="active">کشور</label>
                                            <select id="EducationInfosCountryId" name="EducationInfosCountryId[]" class="form-control select2 selectnew">
                                                <option value="0" disabled selected> </option> <option value="2">ایران</option> <option value="153">آلبانی</option> <option value="154">الجزایر</option> <option value="155">آندورا</option> <option value="156">آنگولا</option> <option value="157">آرزانتین</option> <option value="158">ارمنستان</option> <option value="159">استرالیا</option> <option value="160">اتریش</option> <option value="161">آذربایجان</option> <option value="162">باهاما</option> <option value="163">بحرین</option> <option value="164">بنگلادش</option> <option value="165">باربادوس</option> <option value="166">بلاروس</option> <option value="167">بلژیک</option> <option value="168">بلیز</option> <option value="169">بنین</option> <option value="170">بوتان</option> <option value="171">بولیوی</option> <option value="172">بوسنی و هرزگوین</option> <option value="173">بوتسوانا</option> <option value="174">برزیل</option> <option value="175">بونئی</option> <option value="176">بلغارستان</option> <option value="177">بورکینیا فاسو</option> <option value="178">بروندی</option> <option value="179">کامبوج</option> <option value="180">کامرون</option> <option value="181">کانادا</option> <option value="182">چاد</option> <option value="183">شیلی</option> <option value="184">چین</option> <option value="185">کلمبیا</option> <option value="186">کنگو</option> <option value="187">کاستاریکا</option> <option value="188">کرواسی</option> <option value="189">کوبا</option> <option value="190">قبرس</option> <option value="191">جمهوری چک</option> <option value="192">دانمارک</option> <option value="193">جیبوتی</option> <option value="194">دومینیکا</option> <option value="195">جمهوری دومنیکن</option> <option value="196">اکوادور</option> <option value="197">مصر</option> <option value="198">السالوادور</option> <option value="199">انگلیسی</option> <option value="200">ایتره</option> <option value="201">استونی</option> <option value="202">اتیوپی</option> <option value="203">فیجی</option> <option value="204">فنلاند</option> <option value="205">فرانسه</option> <option value="206">گابن</option> <option value="207">گامبیا</option> <option value="208">گرجستان</option> <option value="209">آلمان</option> <option value="210">غنا</option> <option value="211">یونان</option> <option value="212">گرانادا</option> <option value="213">گواتمالا</option> <option value="214">گینه</option> <option value="215">گویان</option> <option value="216">هایتی</option> <option value="217">هندوراس</option> <option value="218">مجارستان</option> <option value="219">ایسلند</option> <option value="220">هند</option> <option value="221">اندونزی</option> <option value="222">عراق</option> <option value="223">جمهوری ایرلند</option> <option value="224">ایتالیا</option> <option value="225">جامائیکا</option> <option value="226">ژاپن</option> <option value="227">اردن</option> <option value="228">قزاقستان</option> <option value="229">کنیا</option> <option value="230">کویت</option> <option value="231">لائوس</option> <option value="232">لیتوانی</option> <option value="233">لبنان</option> <option value="234">لیبریا</option> <option value="235">لیبی</option> <option value="236">لیتوانی</option> <option value="237">مقدونیه</option> <option value="238">ماداگاسکار</option> <option value="239">مالاوی</option> <option value="240">مالزی</option> <option value="241">مالدیو</option> <option value="242">مالی</option> <option value="243">مالت</option> <option value="244">موریتانی</option> <option value="245">موریس</option> <option value="246">مکزیک</option> <option value="247">موناکو</option> <option value="248">مغولستان</option> <option value="249">مونته نگرو</option> <option value="250">مراکش</option> <option value="251">موزامبیک</option> <option value="252">میانمار (نام دیگر این کشور برمه است)</option> <option value="253">نامیبیا</option> <option value="254">نپال</option> <option value="255">هلند</option> <option value="256">نیوزیلند</option> <option value="257">نیکاراگوئه</option> <option value="258">نیجر</option> <option value="259">نیجریه</option> <option value="260">کره شمالی</option> <option value="261">نروژ</option> <option value="262">عمان</option> <option value="263">پاکستان</option> <option value="264">فلستین</option> <option value="265">پاناما</option> <option value="266">گینه نو</option> <option value="267">پاراگوئه</option> <option value="268">پرو</option> <option value="269">فیلیپین</option> <option value="270">لهستان</option> <option value="271">پرتغال</option> <option value="272">قطر</option> <option value="273">رومانی</option> <option value="274">روسیه</option> <option value="275">رواندا</option> <option value="276">عربستان سعودی</option> <option value="277">سنگال</option> <option value="278">صربستان</option> <option value="279">سیشل</option> <option value="280">سیرالئون</option> <option value="281">سنگاپور</option> <option value="282">اسلواکی</option> <option value="283">اسلوونی</option> <option value="284">سومالی</option> <option value="285">آفریقای جنوبی</option> <option value="286">کره جنوبی</option> <option value="287">اسپانیا</option> <option value="288">سریلانکا</option> <option value="289">سودان</option> <option value="290">سورینام</option> <option value="291">سوازیلند</option> <option value="292">سوئد</option> <option value="293">سوئیس</option> <option value="294">سوریه</option> <option value="295">تایوان</option> <option value="296">تاجیکستان</option> <option value="297">تانزانیا</option> <option value="298">تایلند</option> <option value="299">توگو</option> <option value="300">ترینیداد و توباگو</option> <option value="301">تونس</option> <option value="302">ترکیه</option> <option value="303">ترکمنستان</option> <option value="304">توالو</option> <option value="305">اوگاندا</option> <option value="306">اکراین</option> <option value="307">امارات متحده عربی</option> <option value="308">ایالات متحده آمریکا</option> <option value="309">اروگوئه</option> <option value="310">ازبکستان</option> <option value="311">وانوواتو</option> <option value="312">واتیکان</option> <option value="313">ونزوئلا</option> <option value="314">ویتنام</option> <option value="315">یمن</option> <option value="316">زامبیا</option> <option value="317">زیمباوه</option> <option value="318">افغانستان</option>
                                            </select>


                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <label asp-for="EducationInfos[index].ProvinceTitle">استان</label>
                                            <div id="selectprovince2"name="selectprovince2[]" style="display: none;">

                                                <select id="EducationInfosProvinceId" name="EducationInfosProvinceId[]" class="form-control select2 selectnew">
                                                    <option value="0" disabled selected> </option><option value="1">آذربایجان شرقی</option><option value="2">آذربایجان غربی</option><option value="3">اردبیل</option><option value="4">اصفهان</option><option value="5">البرز</option><option value="6">ایلام</option><option value="7">بوشهر</option><option value="8">تهران</option><option value="9">چهار محال و بختیاری</option><option value="10">خراسان جنوبی</option><option value="11">خراسان رضوی</option><option value="12">خراسان شمالی</option><option value="13">خوزستان</option><option value="14">زنجان</option><option value="15">سمنان</option><option value="16">سیستان و بلوچستان</option><option value="17">فارس</option><option value="18">قزوین</option><option value="19">قم</option><option value="20">کردستان</option><option value="21">کرمان</option><option value="22">کرمانشاه</option><option value="23">کهگیلویه و بویراحمد</option><option value="24">گلستان</option><option value="25">گیلان</option><option value="26">لرستان</option><option value="27">مازندران</option><option value="28">مرکزی</option><option value="29">هرمزگان</option><option value="30">همدان</option><option value="31">یزد</option>
                                                </select>
                                            </div>
                                            <input id="EducationInfosProvinceTitle" name="EducationInfosProvinceTitle[]" style="display:block" />

                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <label asp-for="EducationInfos[index].CityTitle">شهر</label>
                                            <div id="selectcity2"name="selectcity2[]"style="display: none;">

                                                <select id="EducationInfosCityId" name="EducationInfosCityId[]" class="form-control select2 selectnew">

                                                </select>
                                            </div>
                                            <input id="EducationInfosCityTitle" name="EducationInfosCityTitle[]" style="display:block" />

                                        </div>

                                        <div class="col-md-2 col-sm-6 table-field">
                                            <label asp-for="EducationInfos[index].EntranceYear">ورود</label>
                                            <table>
                                                <tr>

                                                    <td style="width:100%;">
                                                        <select id="EducationInfosEntranceYear" name="EducationInfosEntranceYear[]" class="form-control select2 selectnew">
                                                            <option value="0">سال</option> <option value="1399" >1399 </option> <option value="1398" >1398 </option> <option value="1397" >1397 </option> <option value="1396" >1396 </option> <option value="1395" >1395 </option> <option value="1394" >1394 </option> <option value="1393" >1393 </option> <option value="1392" >1392 </option> <option value="1391" >1391 </option> <option value="1390" >1390 </option> <option value="1389" >1389 </option> <option value="1388" >1388 </option> <option value="1387" >1387 </option> <option value="1386" >1386 </option> <option value="1385" >1385 </option> <option value="1384" >1384 </option> <option value="1383" >1383 </option> <option value="1382" >1382 </option> <option value="1381" >1381 </option> <option value="1380" >1380 </option> <option value="1379" >1379 </option> <option value="1378" >1378 </option> <option value="1377" >1377 </option> <option value="1376" >1376 </option> <option value="1375" >1375 </option> <option value="1374" >1374 </option> <option value="1373" >1373 </option> <option value="1372" >1372 </option> <option value="1371" >1371 </option> <option value="1370" >1370 </option> <option value="1369" >1369 </option> <option value="1368" >1368 </option> <option value="1367" >1367 </option> <option value="1366" >1366 </option> <option value="1365" >1365 </option> <option value="1364" >1364 </option> <option value="1363" >1363 </option> <option value="1362" >1362 </option> <option value="1361" >1361 </option> <option value="1360" >1360 </option> <option value="1359" >1359 </option> <option value="1358" >1358 </option> <option value="1357" >1357 </option> <option value="1356" >1356 </option> <option value="1355" >1355 </option> <option value="1354" >1354 </option> <option value="1353" >1353 </option> <option value="1352" >1352 </option> <option value="1351" >1351 </option> <option value="1350" >1350 </option> <option value="1349" >1349 </option> <option value="1348" >1348 </option> <option value="1347" >1347 </option> <option value="1346" >1346 </option> <option value="1345" >1345 </option> <option value="1344" >1344 </option> <option value="1343" >1343 </option> <option value="1342" >1342 </option> <option value="1341" >1341 </option> <option value="1340" >1340 </option> <option value="1339" >1339 </option> <option value="1338" >1338 </option> <option value="1337" >1337 </option> <option value="1336" >1336 </option> <option value="1335" >1335 </option> <option value="1334" >1334 </option> <option value="1333" >1333 </option> <option value="1332" >1332 </option> <option value="1331" >1331 </option> <option value="1330" >1330 </option> <option value="1329" >1329 </option> <option value="1328" >1328 </option> <option value="1327" >1327 </option> <option value="1326" >1326 </option> <option value="1325" >1325 </option> <option value="1324" >1324 </option> <option value="1323" >1323 </option> <option value="1322" >1322 </option> <option value="1321" >1321 </option> <option value="1320" >1320 </option> <option value="1319" >1319 </option> <option value="1318" >1318 </option> <option value="1317" >1317 </option> <option value="1316" >1316 </option> <option value="1315" >1315 </option> <option value="1314" >1314 </option> <option value="1313" >1313 </option> <option value="1312" >1312 </option> <option value="1311" >1311 </option> <option value="1310" >1310 </option> <option value="1309" >1309 </option> <option value="1308" >1308 </option> <option value="1307" >1307 </option> <option value="1306" >1306 </option> <option value="1305" >1305 </option> <option value="1304" >1304 </option> <option value="1303" >1303 </option> <option value="1302" >1302 </option> <option value="1301" >1301 </option> <option value="1300" >1300 </option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-2 col-sm-6 table-field">
                                            <label asp-for="EducationInfos[index].GraduateYear">فراغت از تحصیل</label>
                                            <table>
                                                <tr>

                                                    <td style="width:100%;">
                                                        <select id="EducationInfosGraduateYear" name="EducationInfosGraduateYear[]" class="form-control select2 selectnew">
                                                            <option value="0">سال</option> <option value="1399" >1399 </option> <option value="1398" >1398 </option> <option value="1397" >1397 </option> <option value="1396" >1396 </option> <option value="1395" >1395 </option> <option value="1394" >1394 </option> <option value="1393" >1393 </option> <option value="1392" >1392 </option> <option value="1391" >1391 </option> <option value="1390" >1390 </option> <option value="1389" >1389 </option> <option value="1388" >1388 </option> <option value="1387" >1387 </option> <option value="1386" >1386 </option> <option value="1385" >1385 </option> <option value="1384" >1384 </option> <option value="1383" >1383 </option> <option value="1382" >1382 </option> <option value="1381" >1381 </option> <option value="1380" >1380 </option> <option value="1379" >1379 </option> <option value="1378" >1378 </option> <option value="1377" >1377 </option> <option value="1376" >1376 </option> <option value="1375" >1375 </option> <option value="1374" >1374 </option> <option value="1373" >1373 </option> <option value="1372" >1372 </option> <option value="1371" >1371 </option> <option value="1370" >1370 </option> <option value="1369" >1369 </option> <option value="1368" >1368 </option> <option value="1367" >1367 </option> <option value="1366" >1366 </option> <option value="1365" >1365 </option> <option value="1364" >1364 </option> <option value="1363" >1363 </option> <option value="1362" >1362 </option> <option value="1361" >1361 </option> <option value="1360" >1360 </option> <option value="1359" >1359 </option> <option value="1358" >1358 </option> <option value="1357" >1357 </option> <option value="1356" >1356 </option> <option value="1355" >1355 </option> <option value="1354" >1354 </option> <option value="1353" >1353 </option> <option value="1352" >1352 </option> <option value="1351" >1351 </option> <option value="1350" >1350 </option> <option value="1349" >1349 </option> <option value="1348" >1348 </option> <option value="1347" >1347 </option> <option value="1346" >1346 </option> <option value="1345" >1345 </option> <option value="1344" >1344 </option> <option value="1343" >1343 </option> <option value="1342" >1342 </option> <option value="1341" >1341 </option> <option value="1340" >1340 </option> <option value="1339" >1339 </option> <option value="1338" >1338 </option> <option value="1337" >1337 </option> <option value="1336" >1336 </option> <option value="1335" >1335 </option> <option value="1334" >1334 </option> <option value="1333" >1333 </option> <option value="1332" >1332 </option> <option value="1331" >1331 </option> <option value="1330" >1330 </option> <option value="1329" >1329 </option> <option value="1328" >1328 </option> <option value="1327" >1327 </option> <option value="1326" >1326 </option> <option value="1325" >1325 </option> <option value="1324" >1324 </option> <option value="1323" >1323 </option> <option value="1322" >1322 </option> <option value="1321" >1321 </option> <option value="1320" >1320 </option> <option value="1319" >1319 </option> <option value="1318" >1318 </option> <option value="1317" >1317 </option> <option value="1316" >1316 </option> <option value="1315" >1315 </option> <option value="1314" >1314 </option> <option value="1313" >1313 </option> <option value="1312" >1312 </option> <option value="1311" >1311 </option> <option value="1310" >1310 </option> <option value="1309" >1309 </option> <option value="1308" >1308 </option> <option value="1307" >1307 </option> <option value="1306" >1306 </option> <option value="1305" >1305 </option> <option value="1304" >1304 </option> <option value="1303" >1303 </option> <option value="1302" >1302 </option> <option value="1301" >1301 </option> <option value="1300" >1300 </option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-2 col-sm-6 push-s6">
                                            <p class="present-checkbox">
                                                <label>
                                                    <input type="checkbox" name="studing[]"id="studing"/>
                                                    <span>درحال تحصیل</span>
                                                </label>
                                            </p>
                                        </div>
                                        <div class="deldiv left hidden" style="padding: 5px;"><a class=" waves-effect waves-dark " id="delthispart"> <i class="fa fa-times"></i></a></div>

                                    </div>


                                </div>

                            </div>
                            <div class="educationdiv">

                            </div>
                            <!--                            <a data-section="EducationInfoRecord" id="addeducation" class="btn-floating btn waves-effect relative waves-light green add-new-section">
                                                            <i class="material-icons">add</i>
                                                        </a>-->
                            <div class="row col-md-12 right">
                                <a id="addeducation" class="btn waves-effect waves-light green" title="افزودن ">
                                    <!--<i class="material-icons">add</i>-->
                                    <i class="fa fa-plus"></i>

                                </a>
                            </div>
                            <div class="step-actions">

                                <button id="gostep3" class="button button--blue button--shadow next-step"><b>مرحله بعدی</b><i class="fa fa-angle-left icon-fa fa-2x"></i></button>

                                <button class="button button--blue button--shadow previous-step"><i class="fa fa-angle-right icon-fa fa-2x"></i><b>مرحله قبلی</b></button>

                            </div> </div>
                    </li>
                    <li class="step" >
                        <a id='c3' href="#WorkExperiences" class="step-title waves-effect">سوابق شغلی</a>
                        <div class="step-content present-content">

                            <!--<input type="hidden" asp-for="ExperienceInfos[index].Id" data-section="@nameof(ExperienceInfo)" />-->

                            <div class="clonein3" style="border:3px dashed #e6e6e6; margin: 5px; padding: 5px;">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12">
                                            <label class="active">عنوان/رسته شغلی</label>
                                            <select id="ExperienceInfosJobCategoryId" name="ExperienceInfosJobCategoryId[]" class="form-control select2 selectnew">
                                                <option value="0"> </option><option value="1">سخت افزار و شبکه</option><option value="2">طراحی / گرافیست</option><option value="3">وب،‌ برنامه‌نویسی و نرم‌افزار</option><option value="4">فروش و بازاریابی</option><option value="5">تولید و مدیریت محتوا</option><option value="6">مسئول دفتر، اجرائی و اداری</option><option value="7">پزشکی/داروسازی</option><option value="8">پشتیبانی و امور مشتریان</option><option value="9">IT / DevOps / Server</option><option value="10">مالی و حسابداری</option><option value="11">مهندسی برق و الکترونیک</option><option value="12">آموزش</option><option value="13">منابع انسانی و کارگزینی</option><option value="14">مهندسی صنایع و مدیریت صنعتی</option><option value="15">خرید و بازرگانی</option><option value="16">مدیر محصول</option><option value="17">ترجمه</option><option value="18">مهندسی عمران و معماری</option><option value="19">تحقیق و توسعه</option><option value="20">تحقیق بازار و تحلیل اقتصادی</option><option value="21">گردشگری</option><option value="22">کارشناس حقوقی،‌ وکالت</option><option value="23">پزشکی،‌ پرستاری و دارویی</option><option value="24">مهندسی مکانیک و هوافضا</option><option value="25">روابط عمومی</option><option value="26">خبر‌نگاری</option><option value="27">انبارداری</option><option value="28">هتلداری</option><option value="29">حمل و نقل</option><option value="30">صنایع غذایی</option><option value="31">مهندسی شیمی و نفت</option><option value="32">CEO</option><option value="33">HSE</option><option value="34">مدیریت بیمه</option><option value="35">مهندسی کشاورزی</option><option value="36">مهندسی معدن و متالورژی</option><option value="37">مهندسی صنایع</option><option value="38">بازاریابی و فروش</option><option value="39">سایر</option><option value="40">بازاریابی دیجیتال/تولید محتوا</option><option value="41">مسئول دفتر/ امور اداری</option><option value="42">عملیات و تولید/تعمیر و نگهداری</option><option value="43">هنر</option>
                                            </select>

                                        </div>

                                        <div class="col-md-3 col-sm-12">
                                            <label>سمت شغلی مربوطه</label>
                                            <input id="ExperienceInfosJobTitle" data-score="1" name="ExperienceInfosJobTitle[]" class="form-control select2 selectnew"/>

                                        </div>

                                        <div class="col-md-3 col-sm-5">
                                            <label asp-for="ExperienceInfos[index].CompanyName">عنوان مرکز</label>
                                            <select id="ExperienceInfosEmployerType" name="ExperienceInfosEmployerType[]" class="form-control select2 selectnew">
                                                <option value="0" selected></option>
                                                <option value="1">شرکت</option>
                                                <option value="2">موسسه</option>
                                                <option value="3">سازمان/نهاد</option>
                                                <option value="4">خود اشتغال</option>
                                                <option value="5">فریلسنر</option>
                                            </select>

                                        </div>

                                        <div class="col-md-3 col-sm-7">
                                            <label asp-for="ExperienceInfos[index].EmployerType" class="active">مرکز اشتغال</label>
                                            <input id="ExperienceInfosCompanyName" data-score="1" name="ExperienceInfosCompanyName[]" class="form-control select2 selectnew" />

                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <label asp-for="ExperienceInfos[index].EmploymentType" class="active">نحوه ی همکاری</label>

                                            <select id="ExperienceInfosEmploymentType" name="ExperienceInfosEmploymentType[]" class="form-control select2 selectnew">
                                                <option value="0" selected></option>
                                                <option value="1">تمام وقت</option>
                                                <option value="2">پاره وقت</option>
                                                <option value="3">پروژه ای</option>
                                                <option value="4">ساعتی</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <label asp-for="ExperienceInfos[index].JobLevel" class="active">سطح ارشدیت</label>
                                            <select id="ExperienceInfosJobLevel" name="ExperienceInfosJobLevel[]" class="form-control select2 selectnew">
                                                <option value="0" selected></option>
                                                <option value="1">تازه کار</option>
                                                <option value="2">متوسط</option>
                                                <option value="3">مدیر عمومی</option>
                                                <option value="4">ارشد</option>
                                                <option value="5">مدیر ارشد</option>
                                                <option value="6">مهم نیست</option>
                                            </select>

                                        </div>

                                        <div class="col-md-2 col-sm-6">
                                            <label asp-for="EducationInfos[index].CountryTitle" class="active">کشور</label>
                                            <select id="ExperienceInfosCountryId" name="ExperienceInfosCountryId[]" class="form-control select2 selectnew">
                                                <option value="0" disabled selected> </option> <option value="2">ایران</option> <option value="153">آلبانی</option> <option value="154">الجزایر</option> <option value="155">آندورا</option> <option value="156">آنگولا</option> <option value="157">آرزانتین</option> <option value="158">ارمنستان</option> <option value="159">استرالیا</option> <option value="160">اتریش</option> <option value="161">آذربایجان</option> <option value="162">باهاما</option> <option value="163">بحرین</option> <option value="164">بنگلادش</option> <option value="165">باربادوس</option> <option value="166">بلاروس</option> <option value="167">بلژیک</option> <option value="168">بلیز</option> <option value="169">بنین</option> <option value="170">بوتان</option> <option value="171">بولیوی</option> <option value="172">بوسنی و هرزگوین</option> <option value="173">بوتسوانا</option> <option value="174">برزیل</option> <option value="175">بونئی</option> <option value="176">بلغارستان</option> <option value="177">بورکینیا فاسو</option> <option value="178">بروندی</option> <option value="179">کامبوج</option> <option value="180">کامرون</option> <option value="181">کانادا</option> <option value="182">چاد</option> <option value="183">شیلی</option> <option value="184">چین</option> <option value="185">کلمبیا</option> <option value="186">کنگو</option> <option value="187">کاستاریکا</option> <option value="188">کرواسی</option> <option value="189">کوبا</option> <option value="190">قبرس</option> <option value="191">جمهوری چک</option> <option value="192">دانمارک</option> <option value="193">جیبوتی</option> <option value="194">دومینیکا</option> <option value="195">جمهوری دومنیکن</option> <option value="196">اکوادور</option> <option value="197">مصر</option> <option value="198">السالوادور</option> <option value="199">انگلیسی</option> <option value="200">ایتره</option> <option value="201">استونی</option> <option value="202">اتیوپی</option> <option value="203">فیجی</option> <option value="204">فنلاند</option> <option value="205">فرانسه</option> <option value="206">گابن</option> <option value="207">گامبیا</option> <option value="208">گرجستان</option> <option value="209">آلمان</option> <option value="210">غنا</option> <option value="211">یونان</option> <option value="212">گرانادا</option> <option value="213">گواتمالا</option> <option value="214">گینه</option> <option value="215">گویان</option> <option value="216">هایتی</option> <option value="217">هندوراس</option> <option value="218">مجارستان</option> <option value="219">ایسلند</option> <option value="220">هند</option> <option value="221">اندونزی</option> <option value="222">عراق</option> <option value="223">جمهوری ایرلند</option> <option value="224">ایتالیا</option> <option value="225">جامائیکا</option> <option value="226">ژاپن</option> <option value="227">اردن</option> <option value="228">قزاقستان</option> <option value="229">کنیا</option> <option value="230">کویت</option> <option value="231">لائوس</option> <option value="232">لیتوانی</option> <option value="233">لبنان</option> <option value="234">لیبریا</option> <option value="235">لیبی</option> <option value="236">لیتوانی</option> <option value="237">مقدونیه</option> <option value="238">ماداگاسکار</option> <option value="239">مالاوی</option> <option value="240">مالزی</option> <option value="241">مالدیو</option> <option value="242">مالی</option> <option value="243">مالت</option> <option value="244">موریتانی</option> <option value="245">موریس</option> <option value="246">مکزیک</option> <option value="247">موناکو</option> <option value="248">مغولستان</option> <option value="249">مونته نگرو</option> <option value="250">مراکش</option> <option value="251">موزامبیک</option> <option value="252">میانمار (نام دیگر این کشور برمه است)</option> <option value="253">نامیبیا</option> <option value="254">نپال</option> <option value="255">هلند</option> <option value="256">نیوزیلند</option> <option value="257">نیکاراگوئه</option> <option value="258">نیجر</option> <option value="259">نیجریه</option> <option value="260">کره شمالی</option> <option value="261">نروژ</option> <option value="262">عمان</option> <option value="263">پاکستان</option> <option value="264">فلستین</option> <option value="265">پاناما</option> <option value="266">گینه نو</option> <option value="267">پاراگوئه</option> <option value="268">پرو</option> <option value="269">فیلیپین</option> <option value="270">لهستان</option> <option value="271">پرتغال</option> <option value="272">قطر</option> <option value="273">رومانی</option> <option value="274">روسیه</option> <option value="275">رواندا</option> <option value="276">عربستان سعودی</option> <option value="277">سنگال</option> <option value="278">صربستان</option> <option value="279">سیشل</option> <option value="280">سیرالئون</option> <option value="281">سنگاپور</option> <option value="282">اسلواکی</option> <option value="283">اسلوونی</option> <option value="284">سومالی</option> <option value="285">آفریقای جنوبی</option> <option value="286">کره جنوبی</option> <option value="287">اسپانیا</option> <option value="288">سریلانکا</option> <option value="289">سودان</option> <option value="290">سورینام</option> <option value="291">سوازیلند</option> <option value="292">سوئد</option> <option value="293">سوئیس</option> <option value="294">سوریه</option> <option value="295">تایوان</option> <option value="296">تاجیکستان</option> <option value="297">تانزانیا</option> <option value="298">تایلند</option> <option value="299">توگو</option> <option value="300">ترینیداد و توباگو</option> <option value="301">تونس</option> <option value="302">ترکیه</option> <option value="303">ترکمنستان</option> <option value="304">توالو</option> <option value="305">اوگاندا</option> <option value="306">اکراین</option> <option value="307">امارات متحده عربی</option> <option value="308">ایالات متحده آمریکا</option> <option value="309">اروگوئه</option> <option value="310">ازبکستان</option> <option value="311">وانوواتو</option> <option value="312">واتیکان</option> <option value="313">ونزوئلا</option> <option value="314">ویتنام</option> <option value="315">یمن</option> <option value="316">زامبیا</option> <option value="317">زیمباوه</option> <option value="318">افغانستان</option>
                                            </select>


                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <label asp-for="EducationInfos[index].ProvinceTitle">استان</label>
                                            <div id="selectprovince3" style="display: none;">
                                                <div id="selectprovince3"name="selectprovince3[]" style="display: none;">
                                                    <select id="ExperienceInfosProvinceId" name="ExperienceInfosProvinceId[]" class="form-control select2 selectnew">
                                                        <option value="0" disabled selected> </option><option value="1">آذربایجان شرقی</option><option value="2">آذربایجان غربی</option><option value="3">اردبیل</option><option value="4">اصفهان</option><option value="5">البرز</option><option value="6">ایلام</option><option value="7">بوشهر</option><option value="8">تهران</option><option value="9">چهار محال و بختیاری</option><option value="10">خراسان جنوبی</option><option value="11">خراسان رضوی</option><option value="12">خراسان شمالی</option><option value="13">خوزستان</option><option value="14">زنجان</option><option value="15">سمنان</option><option value="16">سیستان و بلوچستان</option><option value="17">فارس</option><option value="18">قزوین</option><option value="19">قم</option><option value="20">کردستان</option><option value="21">کرمان</option><option value="22">کرمانشاه</option><option value="23">کهگیلویه و بویراحمد</option><option value="24">گلستان</option><option value="25">گیلان</option><option value="26">لرستان</option><option value="27">مازندران</option><option value="28">مرکزی</option><option value="29">هرمزگان</option><option value="30">همدان</option><option value="31">یزد</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <input id="ExperienceInfosProvinceTitle" style="display:block" name="ExperienceInfosProvinceTitle[]" class="form-control select2 selectnew"/>

                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <label asp-for="EducationInfos[index].CityTitle">شهر</label>
                                            <div id="selectcity3"style="display: none;">
                                                <div id="selectcity3"name="selectcity3[]"style="display: none;">
                                                    <select id="ExperienceInfosCityId" name="ExperienceInfosCityId[]" class="form-control select2 selectnew">

                                                    </select>
                                                </div>
                                            </div>
                                            <input id="ExperienceInfosCityTitle" style="display:block" name="ExperienceInfosCityTitle[]" class="form-control select2 selectnew"/>

                                        </div>



                                    </div>
                                    <div class="row">

                                        <div class="col-md-3 col-sm-12 table-field">
                                            <label asp-for="ExperienceInfos[index].StartingYear">شروع</label>
                                            <table>
                                                <tr>
                                                    <td style="width:50%">
                                                        <select id="ExperienceInfosStartingMonth"name="ExperienceInfosStartingMonth[]" class="form-control select2 selectnew">
                                                            <option value="0" >ماه</option>
                                                            <option value="1">فروردین</option>
                                                            <option value="2">اردیبهشت</option>
                                                            <option value="3">خرداد</option>
                                                            <option value="4">تیر</option>
                                                            <option value="5">مرداد</option>
                                                            <option value="6">شهریور</option>
                                                            <option value="7">مهر</option>
                                                            <option value="8">آبان</option>
                                                            <option value="9">آذر</option>
                                                            <option value="10">دی</option>
                                                            <option value="11">بهمن</option>
                                                            <option value="12">اسفند</option>
                                                        </select>
                                                    </td>
                                                    <td style="width:50%">
                                                        <select id="ExperienceInfosStartingYear" name="ExperienceInfosStartingYear[]" class="form-control select2 selectnew">
                                                            <option value="0">سال</option> <option value="1399" >1399 </option> <option value="1398" >1398 </option> <option value="1397" >1397 </option> <option value="1396" >1396 </option> <option value="1395" >1395 </option> <option value="1394" >1394 </option> <option value="1393" >1393 </option> <option value="1392" >1392 </option> <option value="1391" >1391 </option> <option value="1390" >1390 </option> <option value="1389" >1389 </option> <option value="1388" >1388 </option> <option value="1387" >1387 </option> <option value="1386" >1386 </option> <option value="1385" >1385 </option> <option value="1384" >1384 </option> <option value="1383" >1383 </option> <option value="1382" >1382 </option> <option value="1381" >1381 </option> <option value="1380" >1380 </option> <option value="1379" >1379 </option> <option value="1378" >1378 </option> <option value="1377" >1377 </option> <option value="1376" >1376 </option> <option value="1375" >1375 </option> <option value="1374" >1374 </option> <option value="1373" >1373 </option> <option value="1372" >1372 </option> <option value="1371" >1371 </option> <option value="1370" >1370 </option> <option value="1369" >1369 </option> <option value="1368" >1368 </option> <option value="1367" >1367 </option> <option value="1366" >1366 </option> <option value="1365" >1365 </option> <option value="1364" >1364 </option> <option value="1363" >1363 </option> <option value="1362" >1362 </option> <option value="1361" >1361 </option> <option value="1360" >1360 </option> <option value="1359" >1359 </option> <option value="1358" >1358 </option> <option value="1357" >1357 </option> <option value="1356" >1356 </option> <option value="1355" >1355 </option> <option value="1354" >1354 </option> <option value="1353" >1353 </option> <option value="1352" >1352 </option> <option value="1351" >1351 </option> <option value="1350" >1350 </option> <option value="1349" >1349 </option> <option value="1348" >1348 </option> <option value="1347" >1347 </option> <option value="1346" >1346 </option> <option value="1345" >1345 </option> <option value="1344" >1344 </option> <option value="1343" >1343 </option> <option value="1342" >1342 </option> <option value="1341" >1341 </option> <option value="1340" >1340 </option> <option value="1339" >1339 </option> <option value="1338" >1338 </option> <option value="1337" >1337 </option> <option value="1336" >1336 </option> <option value="1335" >1335 </option> <option value="1334" >1334 </option> <option value="1333" >1333 </option> <option value="1332" >1332 </option> <option value="1331" >1331 </option> <option value="1330" >1330 </option> <option value="1329" >1329 </option> <option value="1328" >1328 </option> <option value="1327" >1327 </option> <option value="1326" >1326 </option> <option value="1325" >1325 </option> <option value="1324" >1324 </option> <option value="1323" >1323 </option> <option value="1322" >1322 </option> <option value="1321" >1321 </option> <option value="1320" >1320 </option> <option value="1319" >1319 </option> <option value="1318" >1318 </option> <option value="1317" >1317 </option> <option value="1316" >1316 </option> <option value="1315" >1315 </option> <option value="1314" >1314 </option> <option value="1313" >1313 </option> <option value="1312" >1312 </option> <option value="1311" >1311 </option> <option value="1310" >1310 </option> <option value="1309" >1309 </option> <option value="1308" >1308 </option> <option value="1307" >1307 </option> <option value="1306" >1306 </option> <option value="1305" >1305 </option> <option value="1304" >1304 </option> <option value="1303" >1303 </option> <option value="1302" >1302 </option> <option value="1301" >1301 </option> <option value="1300" >1300 </option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-3 col-sm-12 table-field">
                                            <label asp-for="ExperienceInfos[index].FinishingYear">اتمام</label>
                                            <table>
                                                <tr>
                                                    <td style="width:50%">
                                                        <select id="ExperienceInfosFinishingMonth" name="ExperienceInfosFinishingMonth[]" class="form-control select2 selectnew">
                                                            <option value="0" >ماه</option>
                                                            <option value="1">فروردین</option>
                                                            <option value="2">اردیبهشت</option>
                                                            <option value="3">خرداد</option>
                                                            <option value="4">تیر</option>
                                                            <option value="5">مرداد</option>
                                                            <option value="6">شهریور</option>
                                                            <option value="7">مهر</option>
                                                            <option value="8">آبان</option>
                                                            <option value="9">آذر</option>
                                                            <option value="10">دی</option>
                                                            <option value="11">بهمن</option>
                                                            <option value="12">اسفند</option>
                                                        </select>
                                                    </td>
                                                    <td style="width:50%">
                                                        <select id="ExperienceInfosFinishingYear" name="ExperienceInfosFinishingYear[]" class="form-control select2 selectnew">
                                                            <option value="0">سال</option> <option value="1399" >1399 </option> <option value="1398" >1398 </option> <option value="1397" >1397 </option> <option value="1396" >1396 </option> <option value="1395" >1395 </option> <option value="1394" >1394 </option> <option value="1393" >1393 </option> <option value="1392" >1392 </option> <option value="1391" >1391 </option> <option value="1390" >1390 </option> <option value="1389" >1389 </option> <option value="1388" >1388 </option> <option value="1387" >1387 </option> <option value="1386" >1386 </option> <option value="1385" >1385 </option> <option value="1384" >1384 </option> <option value="1383" >1383 </option> <option value="1382" >1382 </option> <option value="1381" >1381 </option> <option value="1380" >1380 </option> <option value="1379" >1379 </option> <option value="1378" >1378 </option> <option value="1377" >1377 </option> <option value="1376" >1376 </option> <option value="1375" >1375 </option> <option value="1374" >1374 </option> <option value="1373" >1373 </option> <option value="1372" >1372 </option> <option value="1371" >1371 </option> <option value="1370" >1370 </option> <option value="1369" >1369 </option> <option value="1368" >1368 </option> <option value="1367" >1367 </option> <option value="1366" >1366 </option> <option value="1365" >1365 </option> <option value="1364" >1364 </option> <option value="1363" >1363 </option> <option value="1362" >1362 </option> <option value="1361" >1361 </option> <option value="1360" >1360 </option> <option value="1359" >1359 </option> <option value="1358" >1358 </option> <option value="1357" >1357 </option> <option value="1356" >1356 </option> <option value="1355" >1355 </option> <option value="1354" >1354 </option> <option value="1353" >1353 </option> <option value="1352" >1352 </option> <option value="1351" >1351 </option> <option value="1350" >1350 </option> <option value="1349" >1349 </option> <option value="1348" >1348 </option> <option value="1347" >1347 </option> <option value="1346" >1346 </option> <option value="1345" >1345 </option> <option value="1344" >1344 </option> <option value="1343" >1343 </option> <option value="1342" >1342 </option> <option value="1341" >1341 </option> <option value="1340" >1340 </option> <option value="1339" >1339 </option> <option value="1338" >1338 </option> <option value="1337" >1337 </option> <option value="1336" >1336 </option> <option value="1335" >1335 </option> <option value="1334" >1334 </option> <option value="1333" >1333 </option> <option value="1332" >1332 </option> <option value="1331" >1331 </option> <option value="1330" >1330 </option> <option value="1329" >1329 </option> <option value="1328" >1328 </option> <option value="1327" >1327 </option> <option value="1326" >1326 </option> <option value="1325" >1325 </option> <option value="1324" >1324 </option> <option value="1323" >1323 </option> <option value="1322" >1322 </option> <option value="1321" >1321 </option> <option value="1320" >1320 </option> <option value="1319" >1319 </option> <option value="1318" >1318 </option> <option value="1317" >1317 </option> <option value="1316" >1316 </option> <option value="1315" >1315 </option> <option value="1314" >1314 </option> <option value="1313" >1313 </option> <option value="1312" >1312 </option> <option value="1311" >1311 </option> <option value="1310" >1310 </option> <option value="1309" >1309 </option> <option value="1308" >1308 </option> <option value="1307" >1307 </option> <option value="1306" >1306 </option> <option value="1305" >1305 </option> <option value="1304" >1304 </option> <option value="1303" >1303 </option> <option value="1302" >1302 </option> <option value="1301" >1301 </option> <option value="1300" >1300 </option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-5 col-sm-12">
                                            <p class="present-checkbox">
                                                <label>
                                                    <input type="checkbox"id="working" name="working[]" class="form-control select2 selectnew"/>
                                                    <span>مشغول فعالیت در این مجموعه هستم</span>
                                                </label>
                                            </p>
                                        </div>
                                        <div class="deldiv left hidden"><a class=" waves-effect waves-dark " id="delthispart"> <i class="fa fa-times"></i></a></div>

                                    </div>
                                </div>

                            <!--                                @ if (index != 0)
                                {
                                <button class="waves-effect waves-dark remove-new-record  text-center" data-section="@nameof(ExperienceInfo)" data-id="@(Model?.ExperienceInfos[index].Id)"><i class="material-icons">close</i></button>
                                                                }-->
                            </div>
                            <div class="experiencediv">

                            </div>


                            <div class="row col-md-12 right">
                                <a id="addexperience" class="btn waves-effect relative waves-light green">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <div class="step-actions">

                                <button id="gostep4" class="button button--blue button--shadow next-step"><b>مرحله بعدی</b><i class="fa fa-angle-left icon-fa fa-2x"></i></button>

                                <button class="button button--blue button--shadow previous-step"><i class="fa fa-angle-right icon-fa fa-2x"></i><b>مرحله قبلی</b></button>

                            </div>

                    </li>
                    <li class="step">
                        <a href="#Skills" id='c4' class="step-title waves-effect">مهارت ها</a>
                        <div class="step-content">
                            <div class="">
                                <div class="card-content">
                                    <div class="row">
                                        <fieldset>
                                            <legend>
                                                <div class="text-center">زبان</div>
                                            </legend>
                                            <div id="langsTab" class="col s12">
                                                <div class="clonein4" style="border:3px dashed #e6e6e6; margin: 5px; padding: 5px;">
                                                    <input type="hidden" asp-for="LanguageInfos[index].Id" data-section="@nameof(LanguageInfo)" />

                                                    <div class="card-content">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-12">
                                                                <label asp-for="LanguageInfos[index].LanguageName" class="active">نام زبان</label>
                                                                <select id="LanguageInfosLanguageName" name="LanguageInfosLanguageName[]" class="form-control select2 selectnew">
                                                                    <option value="0"> </option>

                                                                    <option value="1">انگلیسی</option>
                                                                    <option value="2">عربی</option>
                                                                    <option value="3">آلمانی</option>
                                                                    <option value="4">فرانسوی</option>
                                                                    <option value="5">اسپانیایی</option>
                                                                    <option value="6">روسی</option>
                                                                    <option value="7">ایتالیایی</option>
                                                                    <option value="8">ترکی استانبولی</option>
                                                                    <option value="9">فارسی</option>
                                                                    <option value="10">چینی</option>
                                                                    <option value="11">عبری</option>
                                                                    <option value="12">ترکی آذربایجانی</option>

                                                                </select>

                                                            </div>
                                                            <div class="col-md-2 col-sm-6 rate-dropdown-wrapper">
                                                                <label asp-for="LanguageInfos[index].ReadingLevel" class="active">مهارت خواندن</label>
                                                                <select id="LanguageInfosReadingLevel" name="LanguageInfosReadingLevel[]" class="form-control select2 selectnew">

                                                                    <option value="0"> </option> <option value="1"><text>★</text><text>☆</text><text>☆</text><text>☆</text><text>☆</text> <option value="2"><text>★</text><text>★</text><text>☆</text><text>☆</text><text>☆</text> <option value="3"><text>★</text><text>★</text><text>★</text><text>☆</text><text>☆</text> <option value="4"><text>★</text><text>★</text><text>★</text><text>★</text><text>☆</text> <option value="5"><text>★</text><text>★</text><text>★</text><text>★</text><text>★</text>

                                                                </select>

                                                            </div>
                                                            <div class="col-md-2 col-sm-6 rate-dropdown-wrapper">
                                                                <label asp-for="LanguageInfos[index].WritingLevel" class="active">مهارت نوشتن</label>
                                                                <select id="LanguageInfosWritingLevel" name="LanguageInfosWritingLevel[]" class="form-control select2 selectnew">
                                                                    <option value="0"> </option> <option value="1"><text>★</text><text>☆</text><text>☆</text><text>☆</text><text>☆</text> <option value="2"><text>★</text><text>★</text><text>☆</text><text>☆</text><text>☆</text> <option value="3"><text>★</text><text>★</text><text>★</text><text>☆</text><text>☆</text> <option value="4"><text>★</text><text>★</text><text>★</text><text>★</text><text>☆</text> <option value="5"><text>★</text><text>★</text><text>★</text><text>★</text><text>★</text>
                                                                </select>

                                                            </div>
                                                            <div class="col-md-2 col-sm-6 rate-dropdown-wrapper">
                                                                <label asp-for="LanguageInfos[index].ListeningLevel" class="active">مهارت گوش دادن</label>
                                                                <select id="LanguageInfosListeningLevel" name="LanguageInfosListeningLevel[]" class="form-control select2 selectnew">
                                                                    <option value="0"> </option> <option value="1"><text>★</text><text>☆</text><text>☆</text><text>☆</text><text>☆</text> <option value="2"><text>★</text><text>★</text><text>☆</text><text>☆</text><text>☆</text> <option value="3"><text>★</text><text>★</text><text>★</text><text>☆</text><text>☆</text> <option value="4"><text>★</text><text>★</text><text>★</text><text>★</text><text>☆</text> <option value="5"><text>★</text><text>★</text><text>★</text><text>★</text><text>★</text>
                                                                </select>

                                                            </div>

                                                            <div class="col-md-2 col-sm-6 rate-dropdown-wrapper">
                                                                <label asp-for="LanguageInfos[index].SpeakingLevel" class="active">مهارت صحبت کردن</label>
                                                                <select id="LanguageInfosSpeakingLevel" name="LanguageInfosSpeakingLevel[]" class="form-control select2 selectnew">
                                                                    <option value="0"> </option> <option value="1"><text>★</text><text>☆</text><text>☆</text><text>☆</text><text>☆</text> <option value="2"><text>★</text><text>★</text><text>☆</text><text>☆</text><text>☆</text> <option value="3"><text>★</text><text>★</text><text>★</text><text>☆</text><text>☆</text> <option value="4"><text>★</text><text>★</text><text>★</text><text>★</text><text>☆</text> <option value="5"><text>★</text><text>★</text><text>★</text><text>★</text><text>★</text>
                                                                </select>

                                                            </div>

                                                            <div class="deldiv left hidden"><a class=" waves-effect waves-dark " id="delthispart"> <i class="fa fa-times"></i></a></div>

                                                        </div>

                                                    </div>


                                                <!--        @ if (index != 0)
                                                    {
                                                        <button class="waves-effect waves-dark remove-new-record text-center" data-section="@nameof(LanguageInfo)" data-id="@(Model?.LanguageInfos[index].Id)"><i class="material-icons">close</i></button>
                                                            }-->
                                                </div>

                                                <div class="languagediv">


                                                </div>

                                                <div class="row col-md-12 right">
                                                    <a id="addlanguage" class="btn waves-effect waves-light green" title="افزودن  ">
                                                        <!--<i class="material-icons">add</i>-->
                                                        <i class="fa fa-plus"></i>

                                                    </a>
                                                </div>
                                                <div class="step-actions">

                                                    <button id="gostep5" class="button button--blue button--shadow next-step"><b>مرحله بعدی</b><i class="fa fa-angle-left icon-fa fa-2x"></i></button>

                                                    <button class="button button--blue button--shadow previous-step"><i class="fa fa-angle-right icon-fa fa-2x"></i><b>مرحله قبلی</b></button>

                                                </div>
                                        </fieldset>

                                        <fieldset>


                                            <legend><div class="text-center">مهارت های تجربی</div> </legend>
                                            <div class="row col-md-5" style="border:3px dashed #e6e6e6; margin: 5px;">

                                                <div class="form-group">
                                                    <div class="col-md-6 col-sm-12">
                                                        <label asp-for="SkillInfos[index].SkillName">نام مهارت</label>
                                                        <input type="text" id="SkillInfosSkillName1" data-score="1" name="SkillInfosSkillName[]"/>

                                                    </div>
                                                </div>

                                                <div class="col-md-5">
                                                    <label asp-for="SkillInfos[index].Level" class="active">سطح</label>
                                                    <select id="SkillInfosLevel0"name="SkillInfosLevel[]" class="form-control select2 selectnew">
                                                        <option value="0"> </option> <option value="1"><text>★</text><text>☆</text><text>☆</text><text>☆</text><text>☆</text> <option value="2"><text>★</text><text>★</text><text>☆</text><text>☆</text><text>☆</text> <option value="3"><text>★</text><text>★</text><text>★</text><text>☆</text><text>☆</text> <option value="4"><text>★</text><text>★</text><text>★</text><text>★</text><text>☆</text> <option value="5"><text>★</text><text>★</text><text>★</text><text>★</text><text>★</text>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="clonein5 row col-md-5" style="border:3px dashed #e6e6e6; margin: 5px;">

                                                <div class="form-group">
                                                    <div class="col-md-6 col-sm-12">
                                                        <label asp-for="SkillInfos[index].SkillName">نام مهارت</label>
                                                        <input class="limit_char" id="SkillInfosSkillName" data-score="1" name="SkillInfosSkillName[]"/>

                                                    </div>

                                                </div>

                                                <div class="col-md-5">
                                                    <label asp-for="SkillInfos[index].Level" class="active">سطح</label>
                                                    <select id="SkillInfosLevel"name="SkillInfosLevel[]" class="form-control select2 selectnew">
                                                        <option value="0"> </option> <option value="1"><text>★</text><text>☆</text><text>☆</text><text>☆</text><text>☆</text> <option value="2"><text>★</text><text>★</text><text>☆</text><text>☆</text><text>☆</text> <option value="3"><text>★</text><text>★</text><text>★</text><text>☆</text><text>☆</text> <option value="4"><text>★</text><text>★</text><text>★</text><text>★</text><text>☆</text> <option value="5"><text>★</text><text>★</text><text>★</text><text>★</text><text>★</text>
                                                    </select>
                                                </div>

                                                <div class="deldiv left hidden"><a class=" waves-effect waves-dark " id="delthispart"> <i class="fa fa-times"></i></a></div>
                                            </div>


                                            <!--            <button class="waves-effect waves-dark remove-new-record text-center" data-section="@nameof(SkillInfo)" data-id="@(Model?.SkillInfos?[index]?.Id)"><i class="material-icons">close</i></button>-->
                                            <div class="skilldiv"></div>


                                            <div class="row col-md-12 right">
                                                <a id="addskill" class="btn waves-effect waves-light green" title="افزودن شبکه اجتماعی">
                                                    <!--<i class="material-icons">add</i>-->
                                                    <i class="fa fa-plus"></i>

                                                </a>
                                            </div>
                                        </fieldset>


                                        <fieldset>
                                            <legend><div class="text-center">دوره و گواهینامه ها</div> </legend>
                                            <div class="clonein6" class="col-sm-12">
                                                <input type="hidden" id="CertificateInfosId" data-section="@nameof(CertificateInfo)" />
                                                <div class="card" data-aos="zoom-in-up" style="z-index:300">
                                                    <div class="card-content">
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-12">
                                                                <label asp-for="CertificateInfos[index].CertificateType" class="active">نوع گواهینامه</label>
                                                                <select id="CertificateInfosCertificateType" name="CertificateInfosCertificateType[]" class="form-control select2 selectnew">
                                                                    <option value="0"> </option>
                                                                    <option value="1">زبان</option>
                                                                    <option value="2">نرم افزار</option>
                                                                    <option value="3">سایر</option>
                                                                </select>

                                                            </div>
                                                            <div class="col-md-4 col-sm-12" style="position:relative">
                                                                <label asp-for="CertificateInfos[index].Title">عنوان</label>
                                                                <input id="CertificateInfosTitle" data-score="1" name="CertificateInfosTitle[]"/>

                                                            </div>
                                                            <div class="col-md-3 col-sm-12">
                                                                <label asp-for="CertificateInfos[index].Institude">موسسه</label>
                                                                <input id="CertificateInfosInstitude" data-score="1" name="CertificateInfosInstitude[]" />

                                                            </div>

                                                            <div class="col-md-3 col-sm-12 table-field">
                                                                <label asp-for="CertificateInfos[index].Year">تاریخ</label>
                                                                <table>
                                                                    <tr>
                                                                        <td style="width:50%;">
                                                                            <select id="CertificateInfosMonth" name="CertificateInfosMonth[]" class="form-control select2 selectnew" >
                                                                                <option value="0" >ماه</option>
                                                                                <option value="1">فروردین</option>
                                                                                <option value="2">اردیبهشت</option>
                                                                                <option value="3">خرداد</option>
                                                                                <option value="4">تیر</option>
                                                                                <option value="5">مرداد</option>
                                                                                <option value="6">شهریور</option>
                                                                                <option value="7">مهر</option>
                                                                                <option value="8">آبان</option>
                                                                                <option value="9">آذر</option>
                                                                                <option value="10">دی</option>
                                                                                <option value="11">بهمن</option>
                                                                                <option value="12">اسفند</option>                                </select>
                                                                        </td>
                                                                        <td style="width:50%;">
                                                                            <select id="CertificateInfosYear" name="CertificateInfosYear[]" class="form-control select2 selectnew">
                                                                                <option value="0">سال</option> <option value="1399" >1399 </option> <option value="1398" >1398 </option> <option value="1397" >1397 </option> <option value="1396" >1396 </option> <option value="1395" >1395 </option> <option value="1394" >1394 </option> <option value="1393" >1393 </option> <option value="1392" >1392 </option> <option value="1391" >1391 </option> <option value="1390" >1390 </option> <option value="1389" >1389 </option> <option value="1388" >1388 </option> <option value="1387" >1387 </option> <option value="1386" >1386 </option> <option value="1385" >1385 </option> <option value="1384" >1384 </option> <option value="1383" >1383 </option> <option value="1382" >1382 </option> <option value="1381" >1381 </option> <option value="1380" >1380 </option> <option value="1379" >1379 </option> <option value="1378" >1378 </option> <option value="1377" >1377 </option> <option value="1376" >1376 </option> <option value="1375" >1375 </option> <option value="1374" >1374 </option> <option value="1373" >1373 </option> <option value="1372" >1372 </option> <option value="1371" >1371 </option> <option value="1370" >1370 </option> <option value="1369" >1369 </option> <option value="1368" >1368 </option> <option value="1367" >1367 </option> <option value="1366" >1366 </option> <option value="1365" >1365 </option> <option value="1364" >1364 </option> <option value="1363" >1363 </option> <option value="1362" >1362 </option> <option value="1361" >1361 </option> <option value="1360" >1360 </option> <option value="1359" >1359 </option> <option value="1358" >1358 </option> <option value="1357" >1357 </option> <option value="1356" >1356 </option> <option value="1355" >1355 </option> <option value="1354" >1354 </option> <option value="1353" >1353 </option> <option value="1352" >1352 </option> <option value="1351" >1351 </option> <option value="1350" >1350 </option> <option value="1349" >1349 </option> <option value="1348" >1348 </option> <option value="1347" >1347 </option> <option value="1346" >1346 </option> <option value="1345" >1345 </option> <option value="1344" >1344 </option> <option value="1343" >1343 </option> <option value="1342" >1342 </option> <option value="1341" >1341 </option> <option value="1340" >1340 </option> <option value="1339" >1339 </option> <option value="1338" >1338 </option> <option value="1337" >1337 </option> <option value="1336" >1336 </option> <option value="1335" >1335 </option> <option value="1334" >1334 </option> <option value="1333" >1333 </option> <option value="1332" >1332 </option> <option value="1331" >1331 </option> <option value="1330" >1330 </option> <option value="1329" >1329 </option> <option value="1328" >1328 </option> <option value="1327" >1327 </option> <option value="1326" >1326 </option> <option value="1325" >1325 </option> <option value="1324" >1324 </option> <option value="1323" >1323 </option> <option value="1322" >1322 </option> <option value="1321" >1321 </option> <option value="1320" >1320 </option> <option value="1319" >1319 </option> <option value="1318" >1318 </option> <option value="1317" >1317 </option> <option value="1316" >1316 </option> <option value="1315" >1315 </option> <option value="1314" >1314 </option> <option value="1313" >1313 </option> <option value="1312" >1312 </option> <option value="1311" >1311 </option> <option value="1310" >1310 </option> <option value="1309" >1309 </option> <option value="1308" >1308 </option> <option value="1307" >1307 </option> <option value="1306" >1306 </option> <option value="1305" >1305 </option> <option value="1304" >1304 </option> <option value="1303" >1303 </option> <option value="1302" >1302 </option> <option value="1301" >1301 </option> <option value="1300" >1300 </option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class="deldiv left hidden"><a class=" waves-effect waves-dark " id="delthispart"> <i class="fa fa-times"></i></a></div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="certificatediv">

                                            </div>

                                            <div class="row col-md-12 right">
                                                <a id="addcertificate" class="btn waves-effect waves-light green" title="افزودن شبکه اجتماعی">
                                                    <!--<i class="material-icons">add</i>-->
                                                    <i class="fa fa-plus"></i>

                                                </a>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <legend><div class="text-center">افتخارات</div> </legend>
                                            <div class="clonein7" class="col-sm-12">
                                                <input type="hidden" asp-for="HonorInfos[index].Id" data-section="@nameof(HonorInfo)"  />


                                                <div class="card" data-aos="zoom-in-up" style="z-index:200">
                                                    <div class="card-content">
                                                        <div class="row">
                                                            <div class="col-md-9 col-sm-12">
                                                                <label asp-for="HonorInfos[index].Title">عنوان</label>
                                                                <input id="HonorInfosTitle" data-score="1" name="HonorInfosTitle[]" />

                                                            </div>

                                                            <div class="col-md-3 col-sm-12 table-field">
                                                                <label asp-for="HonorInfos[index].Year">تاریخ</label>
                                                                <table>
                                                                    <tr>
                                                                        <td style="width:50%">
                                                                            <select id="HonorInfosMonth" name="HonorInfosMonth[]" class="form-control select2 selectnew" >
                                                                                <option value="0" >ماه</option>
                                                                                <option value="1">فروردین</option>
                                                                                <option value="2">اردیبهشت</option>
                                                                                <option value="3">خرداد</option>
                                                                                <option value="4">تیر</option>
                                                                                <option value="5">مرداد</option>
                                                                                <option value="6">شهریور</option>
                                                                                <option value="7">مهر</option>
                                                                                <option value="8">آبان</option>
                                                                                <option value="9">آذر</option>
                                                                                <option value="10">دی</option>
                                                                                <option value="11">بهمن</option>
                                                                                <option value="12">اسفند</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="width:50%">
                                                                            <select id="HonorInfosYear" name="HonorInfosYear[]" class="form-control select2 selectnew">
                                                                                <option value="0">سال</option> <option value="1399" >1399 </option> <option value="1398" >1398 </option> <option value="1397" >1397 </option> <option value="1396" >1396 </option> <option value="1395" >1395 </option> <option value="1394" >1394 </option> <option value="1393" >1393 </option> <option value="1392" >1392 </option> <option value="1391" >1391 </option> <option value="1390" >1390 </option> <option value="1389" >1389 </option> <option value="1388" >1388 </option> <option value="1387" >1387 </option> <option value="1386" >1386 </option> <option value="1385" >1385 </option> <option value="1384" >1384 </option> <option value="1383" >1383 </option> <option value="1382" >1382 </option> <option value="1381" >1381 </option> <option value="1380" >1380 </option> <option value="1379" >1379 </option> <option value="1378" >1378 </option> <option value="1377" >1377 </option> <option value="1376" >1376 </option> <option value="1375" >1375 </option> <option value="1374" >1374 </option> <option value="1373" >1373 </option> <option value="1372" >1372 </option> <option value="1371" >1371 </option> <option value="1370" >1370 </option> <option value="1369" >1369 </option> <option value="1368" >1368 </option> <option value="1367" >1367 </option> <option value="1366" >1366 </option> <option value="1365" >1365 </option> <option value="1364" >1364 </option> <option value="1363" >1363 </option> <option value="1362" >1362 </option> <option value="1361" >1361 </option> <option value="1360" >1360 </option> <option value="1359" >1359 </option> <option value="1358" >1358 </option> <option value="1357" >1357 </option> <option value="1356" >1356 </option> <option value="1355" >1355 </option> <option value="1354" >1354 </option> <option value="1353" >1353 </option> <option value="1352" >1352 </option> <option value="1351" >1351 </option> <option value="1350" >1350 </option> <option value="1349" >1349 </option> <option value="1348" >1348 </option> <option value="1347" >1347 </option> <option value="1346" >1346 </option> <option value="1345" >1345 </option> <option value="1344" >1344 </option> <option value="1343" >1343 </option> <option value="1342" >1342 </option> <option value="1341" >1341 </option> <option value="1340" >1340 </option> <option value="1339" >1339 </option> <option value="1338" >1338 </option> <option value="1337" >1337 </option> <option value="1336" >1336 </option> <option value="1335" >1335 </option> <option value="1334" >1334 </option> <option value="1333" >1333 </option> <option value="1332" >1332 </option> <option value="1331" >1331 </option> <option value="1330" >1330 </option> <option value="1329" >1329 </option> <option value="1328" >1328 </option> <option value="1327" >1327 </option> <option value="1326" >1326 </option> <option value="1325" >1325 </option> <option value="1324" >1324 </option> <option value="1323" >1323 </option> <option value="1322" >1322 </option> <option value="1321" >1321 </option> <option value="1320" >1320 </option> <option value="1319" >1319 </option> <option value="1318" >1318 </option> <option value="1317" >1317 </option> <option value="1316" >1316 </option> <option value="1315" >1315 </option> <option value="1314" >1314 </option> <option value="1313" >1313 </option> <option value="1312" >1312 </option> <option value="1311" >1311 </option> <option value="1310" >1310 </option> <option value="1309" >1309 </option> <option value="1308" >1308 </option> <option value="1307" >1307 </option> <option value="1306" >1306 </option> <option value="1305" >1305 </option> <option value="1304" >1304 </option> <option value="1303" >1303 </option> <option value="1302" >1302 </option> <option value="1301" >1301 </option> <option value="1300" >1300 </option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="deldiv left hidden"><a class=" waves-effect waves-dark " id="delthispart"> <i class="fa fa-times"></i></a></div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="honordiv">

                                            </div>

                                            <div class="row col-md-12 right">
                                                <a id="addhonor" class="btn waves-effect waves-light green" title="افزودن شبکه اجتماعی">
                                                    <!--<i class="material-icons">add</i>-->
                                                    <i class="fa fa-plus"></i>

                                                </a>
                                            </div>
                                        </fieldset>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>





                    <li class="step">
                        <a href="#Projects" id='c5' class="step-title waves-effect">پروژه ها</a>
                        <div class="step-content">
                            <div class="">
                                <div class="card-content">
                                    <div class="row">

                                        <fieldset>
                                            <legend>
                                                <div class="text-center">تحقیقات و مقالات</div>
                                            </legend>
                                            <div class="clonein8" style="border:3px dashed #e6e6e6; margin: 5px; padding: 5px;">

                                                <input type="hidden" asp-for="ResearchInfos[index].Id" data-section="@nameof(ResearchInfo)" />

                                                <div class="card-content">
                                                    <div class="row">
                                                        <div class="col-md-2 col-sm-12">
                                                            <label asp-for="ResearchInfos[index].PublishType" class="active">نوع اثر</label>
                                                            <select id="ResearchInfosPublishType" name="ResearchInfosPublishType[]" class="form-control select2 selectnew">
                                                                <option value="0" selected></option>
                                                                <option value="1">کتاب</option>
                                                                <option value="2">مقاله</option>
                                                                <option value="3">پایان نامه</option>
                                                                <option value="4">سایر</option>
                                                            </select>

                                                        </div>
                                                        <div class="col-md-7 col-sm-12">
                                                            <label asp-for="ResearchInfos[index].Title">عنوان</label>
                                                            <input id="ResearchInfosTitle" data-score="1" name="ResearchInfosTitle[]"/>

                                                        </div>
                                                        <div class="col-md-3 col-sm-12">
                                                            <label asp-for="ResearchInfos[index].Publisher">ناشر</label>
                                                            <input id="ResearchInfosPublisher" data-score="1" name="ResearchInfosPublisher[]" />

                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-12">
                                                            <label asp-for="ResearchInfos[index].LinkUrl">لینک مرتبط</label>
                                                            <input id="ResearchInfosLinkUrl" data-score="0.5" name="ResearchInfosLinkUrl[]"/>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 table-field">
                                                            <label asp-for="ResearchInfos[index].Year">تاریخ</label>
                                                            <table>
                                                                <tr>
                                                                    <td style="width:50%">
                                                                        <select id="ResearchInfosMonth" name="ResearchInfosMonth[]" class="form-control select2 selectnew">
                                                                            <option value="0" >ماه</option>
                                                                            <option value="1">فروردین</option>
                                                                            <option value="2">اردیبهشت</option>
                                                                            <option value="3">خرداد</option>
                                                                            <option value="4">تیر</option>
                                                                            <option value="5">مرداد</option>
                                                                            <option value="6">شهریور</option>
                                                                            <option value="7">مهر</option>
                                                                            <option value="8">آبان</option>
                                                                            <option value="9">آذر</option>
                                                                            <option value="10">دی</option>
                                                                            <option value="11">بهمن</option>
                                                                            <option value="12">اسفند</option>
                                                                        </select>
                                                                    </td>
                                                                    <td style="width:50%">
                                                                        <select id="ResearchInfosYear" name="ResearchInfosYear[]" class="form-control select2 selectnew">
                                                                            <option value="0">سال</option> <option value="1399" >1399 </option> <option value="1398" >1398 </option> <option value="1397" >1397 </option> <option value="1396" >1396 </option> <option value="1395" >1395 </option> <option value="1394" >1394 </option> <option value="1393" >1393 </option> <option value="1392" >1392 </option> <option value="1391" >1391 </option> <option value="1390" >1390 </option> <option value="1389" >1389 </option> <option value="1388" >1388 </option> <option value="1387" >1387 </option> <option value="1386" >1386 </option> <option value="1385" >1385 </option> <option value="1384" >1384 </option> <option value="1383" >1383 </option> <option value="1382" >1382 </option> <option value="1381" >1381 </option> <option value="1380" >1380 </option> <option value="1379" >1379 </option> <option value="1378" >1378 </option> <option value="1377" >1377 </option> <option value="1376" >1376 </option> <option value="1375" >1375 </option> <option value="1374" >1374 </option> <option value="1373" >1373 </option> <option value="1372" >1372 </option> <option value="1371" >1371 </option> <option value="1370" >1370 </option> <option value="1369" >1369 </option> <option value="1368" >1368 </option> <option value="1367" >1367 </option> <option value="1366" >1366 </option> <option value="1365" >1365 </option> <option value="1364" >1364 </option> <option value="1363" >1363 </option> <option value="1362" >1362 </option> <option value="1361" >1361 </option> <option value="1360" >1360 </option> <option value="1359" >1359 </option> <option value="1358" >1358 </option> <option value="1357" >1357 </option> <option value="1356" >1356 </option> <option value="1355" >1355 </option> <option value="1354" >1354 </option> <option value="1353" >1353 </option> <option value="1352" >1352 </option> <option value="1351" >1351 </option> <option value="1350" >1350 </option> <option value="1349" >1349 </option> <option value="1348" >1348 </option> <option value="1347" >1347 </option> <option value="1346" >1346 </option> <option value="1345" >1345 </option> <option value="1344" >1344 </option> <option value="1343" >1343 </option> <option value="1342" >1342 </option> <option value="1341" >1341 </option> <option value="1340" >1340 </option> <option value="1339" >1339 </option> <option value="1338" >1338 </option> <option value="1337" >1337 </option> <option value="1336" >1336 </option> <option value="1335" >1335 </option> <option value="1334" >1334 </option> <option value="1333" >1333 </option> <option value="1332" >1332 </option> <option value="1331" >1331 </option> <option value="1330" >1330 </option> <option value="1329" >1329 </option> <option value="1328" >1328 </option> <option value="1327" >1327 </option> <option value="1326" >1326 </option> <option value="1325" >1325 </option> <option value="1324" >1324 </option> <option value="1323" >1323 </option> <option value="1322" >1322 </option> <option value="1321" >1321 </option> <option value="1320" >1320 </option> <option value="1319" >1319 </option> <option value="1318" >1318 </option> <option value="1317" >1317 </option> <option value="1316" >1316 </option> <option value="1315" >1315 </option> <option value="1314" >1314 </option> <option value="1313" >1313 </option> <option value="1312" >1312 </option> <option value="1311" >1311 </option> <option value="1310" >1310 </option> <option value="1309" >1309 </option> <option value="1308" >1308 </option> <option value="1307" >1307 </option> <option value="1306" >1306 </option> <option value="1305" >1305 </option> <option value="1304" >1304 </option> <option value="1303" >1303 </option> <option value="1302" >1302 </option> <option value="1301" >1301 </option> <option value="1300" >1300 </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="col-sm-12 margin-top-0">
                                                            <div class="no-materialize-textarea-caption">توضیحات</div>
                                                            <textarea class="no-materialize-textarea"data-score="1"  name="ResearchInfosDescription[]"id="ResearchInfosDescription"></textarea>
                                                        </div>
                                                        <div class="deldiv left hidden"><a class=" waves-effect waves-dark " id="delthispart"> <i class="fa fa-times"></i></a></div>

                                                    </div>
                                                </div>


                                            </div>
                                            <div class="researchdiv">

                                            </div>

                                            <div class="row col-md-12 right">
                                                <a id="researchadd" class="btn waves-effect waves-light green" title="افزودن شبکه اجتماعی">
                                                    <!--<i class="material-icons">add</i>-->
                                                    <i class="fa fa-plus"></i>

                                                </a>
                                            </div>
                                            <div class="step-actions">

                                                <button id="gostep6" class="button button--blue button--shadow next-step"><b>مرحله بعدی</b><i class="fa fa-angle-left icon-fa fa-2x"></i></button>

                                                <button class="button button--blue button--shadow previous-step"><i class="fa fa-angle-right icon-fa fa-2x"></i><b>مرحله قبلی</b></button>

                                            <!--    @ if (User.Identity.IsAuthenticated)
                                                {-->


                                        </fieldset>

                                        <fieldset>
                                            <legend>
                                                <div class="text-center">پروژه ها</div>
                                            </legend>
                                            <div id="projectsTab" class="col s12">
                                                <input type="hidden" asp-for="ProjectInfos[index].Id" data-section="@nameof(ProjectInfo)" />

                                                <div class="clonein9" style="border:3px dashed #e6e6e6; margin: 5px; padding: 5px;">
                                                    <div class="card-content">
                                                        <div class="row">
                                                            <div class="col-md-8 col-sm-12">
                                                                <label asp-for="ProjectInfos[index].Title">عنوان</label>
                                                                <input id="ProjectInfosTitle" data-score="1" name="ProjectInfosTitle[]" />

                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <label asp-for="ProjectInfos[index].For">کارفرما/درخواست کننده</label>
                                                                <input id="ProjectInfosFor" data-score="0.5" name="ProjectInfosFor[]" />

                                                            </div>
                                                            <div class="col-md-8 col-sm-12">
                                                                <label asp-for="ProjectInfos[index].LinkUrl">لینک مرتبط</label>
                                                                <input id="ProjectInfosLinkUrl" data-score="0.5" name="ProjectInfosLinkUrl[]" />

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 table-field">
                                                                <label asp-for="ProjectInfos[index].Year">تاریخ</label>
                                                                <table>
                                                                    <tr>
                                                                        <td style="width:50%">
                                                                            <select id="ProjectInfosMonth"name="ProjectInfosMonth[]" class="form-control select2 selectnew">
                                                                                <option value="0" >ماه</option>
                                                                                <option value="1">فروردین</option>
                                                                                <option value="2">اردیبهشت</option>
                                                                                <option value="3">خرداد</option>
                                                                                <option value="4">تیر</option>
                                                                                <option value="5">مرداد</option>
                                                                                <option value="6">شهریور</option>
                                                                                <option value="7">مهر</option>
                                                                                <option value="8">آبان</option>
                                                                                <option value="9">آذر</option>
                                                                                <option value="10">دی</option>
                                                                                <option value="11">بهمن</option>
                                                                                <option value="12">اسفند</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="width:50%">
                                                                            <select id="ProjectInfosYear" name="ProjectInfosYear[]" class="form-control select2 selectnew">
                                                                                <option value="0">سال</option> <option value="1399" >1399 </option> <option value="1398" >1398 </option> <option value="1397" >1397 </option> <option value="1396" >1396 </option> <option value="1395" >1395 </option> <option value="1394" >1394 </option> <option value="1393" >1393 </option> <option value="1392" >1392 </option> <option value="1391" >1391 </option> <option value="1390" >1390 </option> <option value="1389" >1389 </option> <option value="1388" >1388 </option> <option value="1387" >1387 </option> <option value="1386" >1386 </option> <option value="1385" >1385 </option> <option value="1384" >1384 </option> <option value="1383" >1383 </option> <option value="1382" >1382 </option> <option value="1381" >1381 </option> <option value="1380" >1380 </option> <option value="1379" >1379 </option> <option value="1378" >1378 </option> <option value="1377" >1377 </option> <option value="1376" >1376 </option> <option value="1375" >1375 </option> <option value="1374" >1374 </option> <option value="1373" >1373 </option> <option value="1372" >1372 </option> <option value="1371" >1371 </option> <option value="1370" >1370 </option> <option value="1369" >1369 </option> <option value="1368" >1368 </option> <option value="1367" >1367 </option> <option value="1366" >1366 </option> <option value="1365" >1365 </option> <option value="1364" >1364 </option> <option value="1363" >1363 </option> <option value="1362" >1362 </option> <option value="1361" >1361 </option> <option value="1360" >1360 </option> <option value="1359" >1359 </option> <option value="1358" >1358 </option> <option value="1357" >1357 </option> <option value="1356" >1356 </option> <option value="1355" >1355 </option> <option value="1354" >1354 </option> <option value="1353" >1353 </option> <option value="1352" >1352 </option> <option value="1351" >1351 </option> <option value="1350" >1350 </option> <option value="1349" >1349 </option> <option value="1348" >1348 </option> <option value="1347" >1347 </option> <option value="1346" >1346 </option> <option value="1345" >1345 </option> <option value="1344" >1344 </option> <option value="1343" >1343 </option> <option value="1342" >1342 </option> <option value="1341" >1341 </option> <option value="1340" >1340 </option> <option value="1339" >1339 </option> <option value="1338" >1338 </option> <option value="1337" >1337 </option> <option value="1336" >1336 </option> <option value="1335" >1335 </option> <option value="1334" >1334 </option> <option value="1333" >1333 </option> <option value="1332" >1332 </option> <option value="1331" >1331 </option> <option value="1330" >1330 </option> <option value="1329" >1329 </option> <option value="1328" >1328 </option> <option value="1327" >1327 </option> <option value="1326" >1326 </option> <option value="1325" >1325 </option> <option value="1324" >1324 </option> <option value="1323" >1323 </option> <option value="1322" >1322 </option> <option value="1321" >1321 </option> <option value="1320" >1320 </option> <option value="1319" >1319 </option> <option value="1318" >1318 </option> <option value="1317" >1317 </option> <option value="1316" >1316 </option> <option value="1315" >1315 </option> <option value="1314" >1314 </option> <option value="1313" >1313 </option> <option value="1312" >1312 </option> <option value="1311" >1311 </option> <option value="1310" >1310 </option> <option value="1309" >1309 </option> <option value="1308" >1308 </option> <option value="1307" >1307 </option> <option value="1306" >1306 </option> <option value="1305" >1305 </option> <option value="1304" >1304 </option> <option value="1303" >1303 </option> <option value="1302" >1302 </option> <option value="1301" >1301 </option> <option value="1300" >1300 </option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>

                                                            <div class="col-sm-12 margin-top-0">
                                                                <div class="no-materialize-textarea-caption">توضیحات</div>
                                                                <textarea  class="no-materialize-textarea" data-score="0.5" id="ProjectInfosDescription"name="ProjectInfosDescription[]"></textarea>
                                                            </div>
                                                            <div class="deldiv left hidden"><a class=" waves-effect waves-dark " id="delthispart"> <i class="fa fa-times"></i></a></div>

                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="projectdiv">

                                                </div>

                                                <div class="row col-md-12 right">
                                                    <a id="addproject" class="btn waves-effect waves-light green" title="افزودن شبکه اجتماعی">
                                                        <!--<i class="material-icons">add</i>-->
                                                        <i class="fa fa-plus"></i>

                                                    </a>
                                                </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="step">
                        <a href="#RequestJob" id='c6' class="step-title waves-effect">درخواست شغل / ادامه تحصیل</a>
                        <div class="step-content">

                            <input type="hidden" asp-for="RecruitmentInfo.Id" data-section="@nameof(RecruitmentInfo)" />

                            <div class="row">
                                <div class="help-block">اطلاعات این قسمت در رزومه نمایش داده نمی شود و صرفا جهت معرفی به مشاغل می باشد</div>

                                <div class="col-sm-12">
                                    <p class="recruitment-item">
                                        <label>
                                            <input type="checkbox" id="RecruitmentInfoJobApplication" />
                                            <span><label asp-for="@Model.RecruitmentInfo.JobApplication"></label>قصد انتخاب یا تغییر شغل دارم</span>
                                        </label>
                                    </p>
                                    <div class="unexpanded" id="12">
                                        <div class="col-md-3 col-sm-12">
                                            <label asp-for="RecruitmentInfo.JobCategoryId" class="active">گروه شغلی</label>
                                            <select id="RecruitmentInfoJobCategoryId" class="form-control select2 selectnew">
                                                <option value="0"></option>
                                                <option value="0"> </option><option value="1">سخت افزار و شبکه</option><option value="2">طراحی / گرافیست</option><option value="3">وب،‌ برنامه‌نویسی و نرم‌افزار</option><option value="4">فروش و بازاریابی</option><option value="5">تولید و مدیریت محتوا</option><option value="6">مسئول دفتر، اجرائی و اداری</option><option value="7">پزشکی/داروسازی</option><option value="8">پشتیبانی و امور مشتریان</option><option value="9">IT / DevOps / Server</option><option value="10">مالی و حسابداری</option><option value="11">مهندسی برق و الکترونیک</option><option value="12">آموزش</option><option value="13">منابع انسانی و کارگزینی</option><option value="14">مهندسی صنایع و مدیریت صنعتی</option><option value="15">خرید و بازرگانی</option><option value="16">مدیر محصول</option><option value="17">ترجمه</option><option value="18">مهندسی عمران و معماری</option><option value="19">تحقیق و توسعه</option><option value="20">تحقیق بازار و تحلیل اقتصادی</option><option value="21">گردشگری</option><option value="22">کارشناس حقوقی،‌ وکالت</option><option value="23">پزشکی،‌ پرستاری و دارویی</option><option value="24">مهندسی مکانیک و هوافضا</option><option value="25">روابط عمومی</option><option value="26">خبر‌نگاری</option><option value="27">انبارداری</option><option value="28">هتلداری</option><option value="29">حمل و نقل</option><option value="30">صنایع غذایی</option><option value="31">مهندسی شیمی و نفت</option><option value="32">CEO</option><option value="33">HSE</option><option value="34">مدیریت بیمه</option><option value="35">مهندسی کشاورزی</option><option value="36">مهندسی معدن و متالورژی</option><option value="37">مهندسی صنایع</option><option value="38">بازاریابی و فروش</option><option value="39">سایر</option><option value="40">بازاریابی دیجیتال/تولید محتوا</option><option value="41">مسئول دفتر/ امور اداری</option><option value="42">عملیات و تولید/تعمیر و نگهداری</option><option value="43">هنر</option>
                                            </select>

                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <label asp-for="RecruitmentInfo.JobTitle">عنوان شغلی</label>
                                            <input data-score="1" id="RecruitmentInfoJobTitle" />

                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <label asp-for="RecruitmentInfo.EmploymentType" class="active">نحوه ی همکاری</label>
                                            <select id="RecruitmentInfoEmploymentType" class="form-control select2 selectnew">
                                                <option value="0"> </option>

                                                <option value="1">تمام وقت</option>
                                                <option value="2">پاره وقت</option>
                                                <option value="3">پروژه ای</option>
                                                <option value="4">ساعتی</option>
                                            </select>

                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <label asp-for="RecruitmentInfo.MinAverageSalary">حداقل دستمزد ماهانه (تومان)</label>
                                        <!--                                    @ if (Model.RecruitmentInfo?.MinAverageSalary != null)
                                            {
                                            <input dir="ltr" asp-for="RecruitmentInfo.MinAverageSalary" value="@Model.RecruitmentInfo.MinAverageSalary.ToString("N0")" type="text" />
                                                   }
                                                   else
                                                   {-->
                                                <input dir="ltr" data-score="0.5"id="RecruitmentInfoMinAverageSalary" type="text" />
                                                <!--}-->

                                        </div>
                                        <div  class="col-md-12 col-sm-12 pullleft">
                                            <label asp-for="RecruitmentInfo.JobApplicationPreferedCities">شهرهای پیشنهادی</label>
                                            <br>
                                            <!--                                            <select id="RecruitmentInfoJobApplicationPreferedCities"data-allow-clear="true" data-close-on-select="false"name="states[]" multiple="multiple"class="form-control input-lg select2 selectmulti">
                                                                                                                                    @await Component.InvokeAsync("ProvinceCity", new { ids = Model?.RecruitmentInfo?.JobApplicationPreferedCities })

                                                                                        </select>-->
                                            <select id="RecruitmentInfoJobApplicationPreferedCities"name="states[]" multiple="multiple"class="js-example-basic-multiple">
                                                <!--                                        @await Component.InvokeAsync("ProvinceCity", new { ids = Model?.RecruitmentInfo?.JobApplicationPreferedCities })-->
                                                <optgroup label="آذربایجان شرقی"><option value="1">هشترود</option><option value="2">اهر</option><option value="3">جلفا</option><option value="4">آذرشهر</option><option value="5">چاراویماق</option><option value="6">مراغه</option><option value="7">هریس</option><option value="8">شبستر</option><option value="9">میانه</option><option value="10">ورزقان</option><option value="11">بستان آباد</option><option value="12">تبریز</option><option value="13">سراب</option><option value="14">کلیبر</option><option value="15">مرند</option><option value="16">خدا آفرین</option><option value="17">ملکان</option><option value="18">بناب</option><option value="19">اسکو</option><option value="20">عجب شیر</option><optgroup label="آذربایجان غربی"><option value="21">میاندوآب</option><option value="22">خوی</option><option value="23">پلدشت</option><option value="24">سر دشت</option><option value="25">ماکو</option><option value="26">تکاب</option><option value="27">پیرانشهر</option><option value="28">شوط</option><option value="29">اشنویه</option><option value="30">شاهین دژ</option><option value="31">چالدران</option><option value="32">چایپاره</option><option value="33">بوکان</option><option value="34">سلماس</option><option value="35">ارومیه</option><option value="36">نقده</option><option value="37">مهاباد</option><optgroup label="اردبیل"><option value="38">نیر</option><option value="40">خلخال</option><option value="41">کوثر</option><option value="42">مشگین شهر</option><option value="43">بیله سوار</option><option value="44">سرعین</option><option value="45">پارس آباد</option><option value="46">گرمی</option><option value="47">نمین</option><option value="415">اردبیل</option><optgroup label="اصفهان"><option value="48">نائین</option><option value="49">نجف آباد</option><option value="50">آران و بیدگل</option><option value="51">چادگان</option><option value="52">تیران و کرون</option><option value="54">شهرضا</option><option value="55">سمیرم</option><option value="56">خمینی شهر</option><option value="57">دهاقان</option><option value="58">برخوار</option><option value="59">شاهین شهر و میمه</option><option value="60">خوانسار</option><option value="61">نطنز</option><option value="62">مبارکه</option><option value="63">اردستان</option><option value="64">خور و بیابانک</option><option value="65">فلاورجان</option><option value="66">فریدونشهر</option><option value="67">کاشان</option><option value="68">لنجان</option><option value="69">گلپایگان</option><option value="70">فریدن</option><option value="406">اصفهان</option><optgroup label="البرز"><option value="71">اشتهارد</option><option value="72">طالقان</option><option value="73">نظر آباد</option><option value="74">کرج</option><option value="75">ساوجبلاغ</option><optgroup label="ایلام"><option value="76">مهران</option><option value="78">ایوان</option><option value="79">شیروان و چرداول</option><option value="80">دره شهر</option><option value="81">آبدانان</option><option value="82">دهلران</option><option value="83">ملکشاهی</option><optgroup label="بوشهر"><option value="84">تنگستان</option><option value="85">دیلم</option><option value="86">جم</option><option value="87">گناوه</option><option value="88">دشتی</option><option value="89">دشتستان</option><option value="90">دیر</option><option value="92">کنگان</option><option value="414">عسلویه</option><option value="419">بوشهر</option><optgroup label="تهران"><option value="93">بهارستان</option><option value="94">شمیرانات</option><option value="95">رباط کریم</option><option value="96">فیروز کوه</option><option value="97">ورامین</option><option value="98">اسلامشهر</option><option value="100">ری</option><option value="101">پاکدشت</option><option value="102">پیشوا</option><option value="103">قدس</option><option value="104">ملارد</option><option value="105">شهریار</option><option value="106">دماوند</option><option value="405">تهران</option><optgroup label="چهار محال و بختیاری"><option value="107">شهر کرد</option><option value="108">اردل</option><option value="110">کوهرنگ</option><option value="111">لردگان</option><option value="112">کیار</option><option value="113">بروجن</option><optgroup label="خراسان جنوبی"><option value="114">زیرکوه</option><option value="115">خوسف</option><option value="116">قائنات</option><option value="117">درمیان</option><option value="118">بشرویه</option><option value="119">فردوس</option><option value="120">سربیشه</option><option value="121">بیرجند</option><option value="122">سرایان</option><option value="123">نهبندان</option><optgroup label="خراسان رضوی"><option value="124">داورزن</option><option value="125">کلات</option><option value="126">بردسکن</option><option value="127">نیشابور</option><option value="128">تربت حیدریه</option><option value="129">تایباد</option><option value="130">خواف</option><option value="131">مه ولات</option><option value="132">چناران</option><option value="133">درگز</option><option value="134">فیروزه</option><option value="135">سرخس</option><option value="136">گناباد</option><option value="137">رشتخوار</option><option value="138">سبزوار</option><option value="139">بینالود</option><option value="140">زاوه</option><option value="141">جوین</option><option value="142">مشهد</option><option value="143">بجستان</option><option value="144">باخرز</option><option value="145">فریمان</option><option value="146">قوچان</option><option value="147">تربت جام</option><option value="148">خلیل آباد</option><option value="149">کاشمر</option><option value="150">جغتای</option><option value="151">خوشاب</option><optgroup label="خراسان شمالی"><option value="152">بجنورد</option><option value="153">جاجرم</option><option value="154">اسفراین</option><option value="155">فاروج</option><option value="156">مانه و سملقان</option><option value="157">شیروان</option><option value="158">گرمه</option><option value="403">طبس</option><optgroup label="خوزستان"><option value="159">آغاجاری</option><option value="160">شوشتر</option><option value="161">دشت آزادگان</option><option value="162">امیدیه</option><option value="163">گتوند</option><option value="164">شادگان</option><option value="165">دزفول</option><option value="166">رامشیر</option><option value="167">بهبهان</option><option value="168">باوی</option><option value="169">اندیمشک</option><option value="170">اندیکا</option><option value="171">هندیجان</option><option value="172">رامهرمز</option><option value="173">شوش</option><option value="174">لالی</option><option value="175">ایذه</option><option value="176">هویزه</option><option value="177">مسجد سلیمان</option><option value="178">آبادان</option><option value="179">اهواز</option><option value="180">خرمشهر</option><option value="181">باغ ملک</option><option value="182">بندر ماهشهر</option><option value="183">هفتگل</option><optgroup label="زنجان"><option value="184">خدابنده</option><option value="185">خرمدره</option><option value="187">طارم</option><option value="188">ایجرود</option><option value="189">ابهر</option><option value="190">ماه نشان</option><option value="420">زنجان</option><optgroup label="سمنان"><option value="191">میامی</option><option value="192">آرادان</option><option value="193">مهدی شهر</option><option value="194">دامغان</option><option value="195">شاهرود</option><option value="196">گرمسار</option><option value="424">سمنان</option><optgroup label="سیستان و بلوچستان"><option value="198">کنارک</option><option value="199">نیک شهر</option><option value="200">چاه بهار</option><option value="201">مهرستان</option><option value="202">سرباز</option><option value="203">دلگان</option><option value="204">خاش</option><option value="205">هیرمند</option><option value="206">زهک</option><option value="207">زابل</option><option value="208">ایرانشهر</option><option value="209">زاهدان</option><option value="210">سراوان</option><option value="211">سوران</option><optgroup label="فارس"><option value="212">خرامه</option><option value="213">لارستان</option><option value="214">مرودشت</option><option value="215">بوانات</option><option value="216">اقلید</option><option value="217">فسا</option><option value="218">داراب</option><option value="219">ممسنی</option><option value="220">کازرون</option><option value="221">استهبان</option><option value="222">ارسنجان</option><option value="223">جهرم</option><option value="224">خنج</option><option value="225">زرین دشت</option><option value="226">آباده</option><option value="227">مهر</option><option value="228">گراش</option><option value="229">سپیدان</option><option value="230">فراشبند</option><option value="231">پاسارگاد</option><option value="232">شیراز</option><option value="233">رستم</option><option value="234">لامرد</option><option value="235">نی ریز</option><option value="236">سروستان</option><option value="237">کوار</option><option value="238">خرم بید</option><option value="239">قیروکارزین</option><option value="240">فیروز آباد</option><optgroup label="قزوین"><option value="241">آوج</option><option value="242">الوند</option><option value="244">تاکستان</option><option value="245">بوئین زهرا</option><option value="246">آبیک</option><option value="410">قزوین</option><optgroup label="قم"><optgroup label="کردستان"><option value="248">دهگلان</option><option value="249">سنندج</option><option value="250">دیواندره</option><option value="251">سروآباد</option><option value="252">بانه</option><option value="253">کامیاران</option><option value="254">قروه</option><option value="255">سقز</option><option value="256">بیجار</option><option value="257">مریوان</option><optgroup label="کرمان"><option value="258">فاریاب</option><option value="260">نرماشیر</option><option value="261">فهرج</option><option value="262">رفسنجان</option><option value="263">کوهبنان</option><option value="264">رودبار جنوب</option><option value="265">عنبر آباد</option><option value="266">کهنوج</option><option value="267">جیرفت</option><option value="268">شهر بابک</option><option value="270">بم</option><option value="271">رابر</option><option value="272">بافت</option><option value="273">منوجان</option><option value="274">زرند</option><option value="275">ریگان</option><option value="276">انار</option><option value="277">راور</option><option value="278">قلعه گنج</option><option value="279">بردسیر</option><option value="280">سیرجان</option><option value="408">کرمان</option><optgroup label="کرمانشاه"><option value="281">اسلام آباد غرب</option><option value="283">سنقر</option><option value="284">پاوه</option><option value="285">ثلاث باباجانی</option><option value="286">دالاهو</option><option value="287">جوانرود</option><option value="288">هرسین</option><option value="289">سر پل ذهاب</option><option value="290">قصر شیرین</option><option value="291">کنگاور</option><option value="292">روانسر</option><option value="293">صحنه</option><option value="409">کرمانشاه</option><optgroup label="کهگیلویه و بویراحمد"><option value="295">دنا</option><option value="296">باشت</option><option value="297">گچساران</option><option value="298">بهمئی</option><option value="299">چرام</option><option value="300">کهگیلویه</option><option value="301">یاسوج</option><optgroup label="گلستان"><option value="302">ترکمن</option><option value="303">بندر گز</option><option value="304">گالیکش</option><option value="305">کلاله</option><option value="306">مینودشت</option><option value="307">علی آباد</option><option value="308">گنبد کاووس</option><option value="309">مراوه تپه</option><option value="310">رامیان</option><option value="311">کردکوی</option><option value="312">گمیشان</option><option value="313">آق قلا</option><option value="314">آزاد شهر</option><option value="315">گرگان</option><optgroup label="گیلان"><option value="316">بندر انزلی</option><option value="317">صومعه سرا</option><option value="318">لاهیجان</option><option value="319">رشت</option><option value="320">لنگرود</option><option value="321">رودسر</option><option value="322">املش</option><option value="323">ماسال</option><option value="324">شفت</option><option value="325">رودبار</option><option value="326">فومن</option><option value="327">آستارا</option><option value="328">سیاهکل</option><option value="329">آستانه اشرفیه</option><option value="330">رضوانشهر</option><option value="331">طالش</option><optgroup label="لرستان"><option value="332">دوره</option><option value="333">دورود</option><option value="334">ازنا</option><option value="335">سلسله</option><option value="336">الیگودرز</option><option value="337">خرم آباد</option><option value="338">پلدختر</option><option value="339">دلفان</option><option value="340">بروجرد</option><option value="341">کوهدشت</option><optgroup label="مازندران"><option value="342">عباس آباد</option><option value="343">بابل</option><option value="344">تنکابن</option><option value="345">بابلسر</option><option value="346">آمل</option><option value="347">محمود آباد</option><option value="348">گلوگاه</option><option value="349">سواد کوه</option><option value="350">ساری</option><option value="351">نوشهر</option><option value="352">نور</option><option value="353">میاندورود</option><option value="354">رامسر</option><option value="355">چالوس</option><option value="356">جویبار</option><option value="357">بهشهر</option><option value="358">قائم شهر</option><option value="359">فریدونکنار</option><option value="360">نکا</option><option value="422">ساری</option><optgroup label="مرکزی"><option value="361">فراهان</option><option value="362">خنداب</option><option value="363">زرندیه</option><option value="364">دلیجان</option><option value="365">آشتیان</option><option value="366">شازند</option><option value="367">اراک</option><option value="368">محلات</option><option value="369">کمیجان</option><option value="370">ساوه</option><option value="371">تفرش</option><option value="372">خمین</option><optgroup label="هرمزگان"><option value="373">رودان</option><option value="374">ابوموسی</option><option value="375">میناب</option><option value="376">جاسک</option><option value="377">پارسیان</option><option value="378">بندرلنگه</option><option value="379">قشم</option><option value="380">بندرعباس</option><option value="381">بستک</option><option value="382">سیریک</option><option value="383">خمیر</option><option value="384">بشاگرد</option><option value="385">حاجی آباد</option><option value="423">کیش</option><optgroup label="همدان"><option value="386">اسد آباد</option><option value="387">تویسرکان</option><option value="388">رزن</option><option value="389">نهاوند</option><option value="390">بهار</option><option value="392">کبودرآهنگ</option><option value="393">فامنین</option><option value="394">ملایر</option><option value="425">همدان</option><optgroup label="یزد"><option value="395">مهریز</option><option value="396">اردکان</option><option value="397">ابرکوه</option><option value="398">میبد</option><option value="399">خاتم</option><option value="400">بافق</option><option value="401">بهاباد</option><option value="402">تفت</option><option value="404">صدوق</option><option value="412">یزد</option></optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="recruitment-item">
                                        <label>
                                            <input type="checkbox" id="RecruitmentInfoImmigrationForStudy" />
                                            <span><label asp-for="@Model.RecruitmentInfo.ImmigrationForStudy">میخواهم برای ادامه تحصیل مهاجرت کنم</label></span>
                                        </label>
                                    </p>
                                    <div class=" unexpanded">
                                        <div class="col-md-4 col-sm-12">
                                            <label asp-for="RecruitmentInfo.ImmigrationForStudyPreferedCountries" class="active">کشورهای موردنظر برای ادامه تصیل</label>

                                            <select  id="RecruitmentInfoImmigrationForStudyPreferedCountries" name="states1[]" multiple="multiple"class="js-example-basic-multiple">
                                                <option value="0" disabled selected> </option> <option value="2">ایران</option> <option value="153">آلبانی</option> <option value="154">الجزایر</option> <option value="155">آندورا</option> <option value="156">آنگولا</option> <option value="157">آرزانتین</option> <option value="158">ارمنستان</option> <option value="159">استرالیا</option> <option value="160">اتریش</option> <option value="161">آذربایجان</option> <option value="162">باهاما</option> <option value="163">بحرین</option> <option value="164">بنگلادش</option> <option value="165">باربادوس</option> <option value="166">بلاروس</option> <option value="167">بلژیک</option> <option value="168">بلیز</option> <option value="169">بنین</option> <option value="170">بوتان</option> <option value="171">بولیوی</option> <option value="172">بوسنی و هرزگوین</option> <option value="173">بوتسوانا</option> <option value="174">برزیل</option> <option value="175">بونئی</option> <option value="176">بلغارستان</option> <option value="177">بورکینیا فاسو</option> <option value="178">بروندی</option> <option value="179">کامبوج</option> <option value="180">کامرون</option> <option value="181">کانادا</option> <option value="182">چاد</option> <option value="183">شیلی</option> <option value="184">چین</option> <option value="185">کلمبیا</option> <option value="186">کنگو</option> <option value="187">کاستاریکا</option> <option value="188">کرواسی</option> <option value="189">کوبا</option> <option value="190">قبرس</option> <option value="191">جمهوری چک</option> <option value="192">دانمارک</option> <option value="193">جیبوتی</option> <option value="194">دومینیکا</option> <option value="195">جمهوری دومنیکن</option> <option value="196">اکوادور</option> <option value="197">مصر</option> <option value="198">السالوادور</option> <option value="199">انگلیسی</option> <option value="200">ایتره</option> <option value="201">استونی</option> <option value="202">اتیوپی</option> <option value="203">فیجی</option> <option value="204">فنلاند</option> <option value="205">فرانسه</option> <option value="206">گابن</option> <option value="207">گامبیا</option> <option value="208">گرجستان</option> <option value="209">آلمان</option> <option value="210">غنا</option> <option value="211">یونان</option> <option value="212">گرانادا</option> <option value="213">گواتمالا</option> <option value="214">گینه</option> <option value="215">گویان</option> <option value="216">هایتی</option> <option value="217">هندوراس</option> <option value="218">مجارستان</option> <option value="219">ایسلند</option> <option value="220">هند</option> <option value="221">اندونزی</option> <option value="222">عراق</option> <option value="223">جمهوری ایرلند</option> <option value="224">ایتالیا</option> <option value="225">جامائیکا</option> <option value="226">ژاپن</option> <option value="227">اردن</option> <option value="228">قزاقستان</option> <option value="229">کنیا</option> <option value="230">کویت</option> <option value="231">لائوس</option> <option value="232">لیتوانی</option> <option value="233">لبنان</option> <option value="234">لیبریا</option> <option value="235">لیبی</option> <option value="236">لیتوانی</option> <option value="237">مقدونیه</option> <option value="238">ماداگاسکار</option> <option value="239">مالاوی</option> <option value="240">مالزی</option> <option value="241">مالدیو</option> <option value="242">مالی</option> <option value="243">مالت</option> <option value="244">موریتانی</option> <option value="245">موریس</option> <option value="246">مکزیک</option> <option value="247">موناکو</option> <option value="248">مغولستان</option> <option value="249">مونته نگرو</option> <option value="250">مراکش</option> <option value="251">موزامبیک</option> <option value="252">میانمار (نام دیگر این کشور برمه است)</option> <option value="253">نامیبیا</option> <option value="254">نپال</option> <option value="255">هلند</option> <option value="256">نیوزیلند</option> <option value="257">نیکاراگوئه</option> <option value="258">نیجر</option> <option value="259">نیجریه</option> <option value="260">کره شمالی</option> <option value="261">نروژ</option> <option value="262">عمان</option> <option value="263">پاکستان</option> <option value="264">فلستین</option> <option value="265">پاناما</option> <option value="266">گینه نو</option> <option value="267">پاراگوئه</option> <option value="268">پرو</option> <option value="269">فیلیپین</option> <option value="270">لهستان</option> <option value="271">پرتغال</option> <option value="272">قطر</option> <option value="273">رومانی</option> <option value="274">روسیه</option> <option value="275">رواندا</option> <option value="276">عربستان سعودی</option> <option value="277">سنگال</option> <option value="278">صربستان</option> <option value="279">سیشل</option> <option value="280">سیرالئون</option> <option value="281">سنگاپور</option> <option value="282">اسلواکی</option> <option value="283">اسلوونی</option> <option value="284">سومالی</option> <option value="285">آفریقای جنوبی</option> <option value="286">کره جنوبی</option> <option value="287">اسپانیا</option> <option value="288">سریلانکا</option> <option value="289">سودان</option> <option value="290">سورینام</option> <option value="291">سوازیلند</option> <option value="292">سوئد</option> <option value="293">سوئیس</option> <option value="294">سوریه</option> <option value="295">تایوان</option> <option value="296">تاجیکستان</option> <option value="297">تانزانیا</option> <option value="298">تایلند</option> <option value="299">توگو</option> <option value="300">ترینیداد و توباگو</option> <option value="301">تونس</option> <option value="302">ترکیه</option> <option value="303">ترکمنستان</option> <option value="304">توالو</option> <option value="305">اوگاندا</option> <option value="306">اکراین</option> <option value="307">امارات متحده عربی</option> <option value="308">ایالات متحده آمریکا</option> <option value="309">اروگوئه</option> <option value="310">ازبکستان</option> <option value="311">وانوواتو</option> <option value="312">واتیکان</option> <option value="313">ونزوئلا</option> <option value="314">ویتنام</option> <option value="315">یمن</option> <option value="316">زامبیا</option> <option value="317">زیمباوه</option> <option value="318">افغانستان</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label class="active">مقطع درخواستی برای تحصیل</label>
                                            <select id="RecruitmentInfoEducationLevel" class="form-control select2 selectnew">
                                                <option value="0"></option>
                                                <option value="1">زیر دیپلم</option>
                                                <option value="2">دیپلم</option>
                                                <option value="3">کاردانی</option>
                                                <option value="4">کارشناسی</option>
                                                <option value="5">کارشناسی ارشد</option>
                                                <option value="6">دکتری</option>
                                                <option value="7">فوق دکتری</option>

                                            </select>

                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label asp-for="RecruitmentInfo.FieldOfStudy">رشته تحصیلی</label>
                                            <input data-score="0.5" id="RecruitmentInfoFieldOfStudy" />

                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="recruitment-item">
                                        <label>
                                            <input type="checkbox" id="RecruitmentInfoImmigrationForWork" />
                                            <span><label asp-for="@Model.RecruitmentInfo.ImmigrationForWork">میخواهم برای کار مهاجرت کنم</label></span>
                                        </label>
                                    </p>
                                    <div class=" unexpanded">
                                        <div class="col-md-3 col-sm-12">
                                            <label asp-for="RecruitmentInfo.ImmigrationForWorkPreferedCountries" class="active">کشورهای موردنظر برای کار</label>

                                            <select id="RecruitmentInfoImmigrationForWorkPreferedCountries"  name="states2[]" multiple="multiple"class="js-example-basic-multiple">
                                                <!--class="js-example-basic-single" name="state"-->
                                                <option value="0" disabled selected> </option> <option value="2">ایران</option> <option value="153">آلبانی</option> <option value="154">الجزایر</option> <option value="155">آندورا</option> <option value="156">آنگولا</option> <option value="157">آرزانتین</option> <option value="158">ارمنستان</option> <option value="159">استرالیا</option> <option value="160">اتریش</option> <option value="161">آذربایجان</option> <option value="162">باهاما</option> <option value="163">بحرین</option> <option value="164">بنگلادش</option> <option value="165">باربادوس</option> <option value="166">بلاروس</option> <option value="167">بلژیک</option> <option value="168">بلیز</option> <option value="169">بنین</option> <option value="170">بوتان</option> <option value="171">بولیوی</option> <option value="172">بوسنی و هرزگوین</option> <option value="173">بوتسوانا</option> <option value="174">برزیل</option> <option value="175">بونئی</option> <option value="176">بلغارستان</option> <option value="177">بورکینیا فاسو</option> <option value="178">بروندی</option> <option value="179">کامبوج</option> <option value="180">کامرون</option> <option value="181">کانادا</option> <option value="182">چاد</option> <option value="183">شیلی</option> <option value="184">چین</option> <option value="185">کلمبیا</option> <option value="186">کنگو</option> <option value="187">کاستاریکا</option> <option value="188">کرواسی</option> <option value="189">کوبا</option> <option value="190">قبرس</option> <option value="191">جمهوری چک</option> <option value="192">دانمارک</option> <option value="193">جیبوتی</option> <option value="194">دومینیکا</option> <option value="195">جمهوری دومنیکن</option> <option value="196">اکوادور</option> <option value="197">مصر</option> <option value="198">السالوادور</option> <option value="199">انگلیسی</option> <option value="200">ایتره</option> <option value="201">استونی</option> <option value="202">اتیوپی</option> <option value="203">فیجی</option> <option value="204">فنلاند</option> <option value="205">فرانسه</option> <option value="206">گابن</option> <option value="207">گامبیا</option> <option value="208">گرجستان</option> <option value="209">آلمان</option> <option value="210">غنا</option> <option value="211">یونان</option> <option value="212">گرانادا</option> <option value="213">گواتمالا</option> <option value="214">گینه</option> <option value="215">گویان</option> <option value="216">هایتی</option> <option value="217">هندوراس</option> <option value="218">مجارستان</option> <option value="219">ایسلند</option> <option value="220">هند</option> <option value="221">اندونزی</option> <option value="222">عراق</option> <option value="223">جمهوری ایرلند</option> <option value="224">ایتالیا</option> <option value="225">جامائیکا</option> <option value="226">ژاپن</option> <option value="227">اردن</option> <option value="228">قزاقستان</option> <option value="229">کنیا</option> <option value="230">کویت</option> <option value="231">لائوس</option> <option value="232">لیتوانی</option> <option value="233">لبنان</option> <option value="234">لیبریا</option> <option value="235">لیبی</option> <option value="236">لیتوانی</option> <option value="237">مقدونیه</option> <option value="238">ماداگاسکار</option> <option value="239">مالاوی</option> <option value="240">مالزی</option> <option value="241">مالدیو</option> <option value="242">مالی</option> <option value="243">مالت</option> <option value="244">موریتانی</option> <option value="245">موریس</option> <option value="246">مکزیک</option> <option value="247">موناکو</option> <option value="248">مغولستان</option> <option value="249">مونته نگرو</option> <option value="250">مراکش</option> <option value="251">موزامبیک</option> <option value="252">میانمار (نام دیگر این کشور برمه است)</option> <option value="253">نامیبیا</option> <option value="254">نپال</option> <option value="255">هلند</option> <option value="256">نیوزیلند</option> <option value="257">نیکاراگوئه</option> <option value="258">نیجر</option> <option value="259">نیجریه</option> <option value="260">کره شمالی</option> <option value="261">نروژ</option> <option value="262">عمان</option> <option value="263">پاکستان</option> <option value="264">فلستین</option> <option value="265">پاناما</option> <option value="266">گینه نو</option> <option value="267">پاراگوئه</option> <option value="268">پرو</option> <option value="269">فیلیپین</option> <option value="270">لهستان</option> <option value="271">پرتغال</option> <option value="272">قطر</option> <option value="273">رومانی</option> <option value="274">روسیه</option> <option value="275">رواندا</option> <option value="276">عربستان سعودی</option> <option value="277">سنگال</option> <option value="278">صربستان</option> <option value="279">سیشل</option> <option value="280">سیرالئون</option> <option value="281">سنگاپور</option> <option value="282">اسلواکی</option> <option value="283">اسلوونی</option> <option value="284">سومالی</option> <option value="285">آفریقای جنوبی</option> <option value="286">کره جنوبی</option> <option value="287">اسپانیا</option> <option value="288">سریلانکا</option> <option value="289">سودان</option> <option value="290">سورینام</option> <option value="291">سوازیلند</option> <option value="292">سوئد</option> <option value="293">سوئیس</option> <option value="294">سوریه</option> <option value="295">تایوان</option> <option value="296">تاجیکستان</option> <option value="297">تانزانیا</option> <option value="298">تایلند</option> <option value="299">توگو</option> <option value="300">ترینیداد و توباگو</option> <option value="301">تونس</option> <option value="302">ترکیه</option> <option value="303">ترکمنستان</option> <option value="304">توالو</option> <option value="305">اوگاندا</option> <option value="306">اکراین</option> <option value="307">امارات متحده عربی</option> <option value="308">ایالات متحده آمریکا</option> <option value="309">اروگوئه</option> <option value="310">ازبکستان</option> <option value="311">وانوواتو</option> <option value="312">واتیکان</option> <option value="313">ونزوئلا</option> <option value="314">ویتنام</option> <option value="315">یمن</option> <option value="316">زامبیا</option> <option value="317">زیمباوه</option> <option value="318">افغانستان</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-sm-12">
                                    <p class="recruitment-item">
                                        <label>
                                            <input type="checkbox" id="RecruitmentInfoContinueEducation" />
                                            <span><label asp-for="@Model.RecruitmentInfo.ContinueEducation">ادامه تحصیل داخل</label></span>
                                        </label>
                                    </p>
                                    <div class=" unexpanded">


                                        <div class="col-md-3 col-sm-12">
                                            <label asp-for="RecruitmentInfo.InstitudeType" class="active">نوع موسسه</label>
                                            <select id="RecruitmentInfoInstitudeType" class="form-control select2 selectnew">
                                                <option value="0" ></option>
                                                <option value="5">دولتی</option>
                                                <option value="6">آزاد</option>
                                                <option value="7">پیام نور</option>
                                                <option value="8">علمی کاربردی</option>
                                                <option value="9">غیرانتفاعی</option>
                                                <option value="10">سایر</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="step-actions">
                                <button id="dlresume" class="button button--blue download-resume" type="button"><i class="fa fa-download icon-fa fa-2x"></i><b style="margin:0 6px;">دریافت رزومه</b></button>
                                <button class="button button--blue button--shadow previous-step"><i class="fa fa-angle-right icon-fa fa-2x"></i><b>مرحله قبلی</b></button>
                            </div>

                        </div>
                    </li>

                </ul>



            </form>



        </div>

    </div>


</div>


<div class="navigation-form">

</div>
<div class="modal fade" id="modalregister" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header alert-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ثبت نام</h4>
            </div>
            <div class="modal-body panel-scroll" style="padding: 0px">
                <div class="row" style="padding: 10px">
                    <div class="col-md-12" >
                        <div class="row market-register " id="quick-register-container">
                            <h2>ایجاد حساب کاربری</h2>
                            <p> در صورتی که حساب کاربری دارین
                                ابتدا وارد حساب کاربری شوید .
                                با انتخاب یک رمز عبور می توانید در هر زمانی وارد حساب کاربری خود شده و رزومه خود را ویرایش کنید</p>
                            <form id="QuickRegisterForm">
                                <div class="col s12 m5">
                                    <label ></label>
                                    <input id="modeluserName" placeholder="نام کاربری" />
                                </div>
                                <div class="col s12 m5">
                                    <label ></label>
                                    <input id="modelpassword" type="password" placeholder="رمزعبور" />
                                </div>
                                <div class="col s12 m2">
                                    <label>&nbsp;</label>
                                    <button id="register" class="button center" type="button">ثبت نام</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<style>

    .autocomplete-suggestions {
        border: 1px solid #999;
        background: #FFF;
        overflow: auto;
        margin-top: -8px;
    }

    .autocomplete-suggestion {
        padding: 2px 5px;
        white-space: nowrap;
        overflow: hidden;
    }

    .autocomplete-selected {
        background: #F0F0F0;
    }

    .autocomplete-suggestions strong {
        font-weight: normal;
        color: #3399FF;
    }

    .autocomplete-group {
        padding: 2px 5px;
    }

    .autocomplete-group strong {
        display: block;
        border-bottom: 1px solid #000;
    }
</style>

<div style="clear: both"></div>
<footer class="page-footer">
    <div class="container">
        <div class="col s12">
            <ul class="footer-list">
                <li><a href="http://cvbesaz.com/contact/aboutus">درباره ما</a></li>
                <li><a href="http://cvbesaz.com/contact">تماس با ما</a></li>
                <li><a href="http://cvbesaz.com/sampleresume">نمونه رزومه</a></li>

            </ul>
        </div>
        <div class="col s12">
            <ul class="footer-list">
                <!--                <li><a href="#!"><i class="fa fa-linkedin icon-fa fa-3x"></i></a></li>
                                <li><a href="#!"><i class="fa fa-google-plus icon-fa fa-3x"></i></a></li>                -->
            </ul>
        </div>

    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row m0">
                <p class="col s12 text-lighten-4 right-align m0 center">

                    کلیه حقوق برای
                    آوا توسعه فناوری ارتباطات  محفوظ است
                </p>
            </div>
        </div>
    </div>
</footer>
<p id="back-top">

    <a href="" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
</p>



<script type='text/javascript'>
    var pagesrendered =[];
    var siteurl="http://cvbesaz.com/";
    var pagename=""
    var isuser=""
    var sdvideourl="url";
    var hdvideourl="url";
    var packid=""
    var pdfurl="";
    var lessonidg="";
    var sessionidg="";
    var frvid="0";
    var loadjagoolak=0;
    var needrender=''
    var gsearch='',gmode='-1';
    var ggameid='';
</script><script src="{{asset("js/000jquer.js")}}"></script>
<script src="{{asset("js/00bootst.js")}}"></script>
<script src="{{asset("js/01materi.js")}}"></script>
<script src="{{asset("js/05aos000.js")}}"></script>
<script src="{{asset("js/06zindex.js")}}"></script>
<script src="{{asset("js/07pdfmak.js")}}"></script>
<script src="{{asset("js/07vfs_fo.js")}}"></script>
<script src="{{asset("js/002js000.js")}}"></script>
<script src="{{asset("js/003js000.js")}}"></script>
<script src="{{asset("js/00form00.js")}}"></script>
<script src="{{asset("js/01circle.js")}}"></script>
<script src="{{asset("js/03google.js")}}"></script>
<script src="{{asset("js/03js0000.js")}}"></script>
<script src="{{asset("js/03select.js")}}"></script>
<script src="{{asset("js/04jquery.js")}}"></script>
<script src="{{asset("js/04select.js")}}"></script>
<script src="{{asset("js/05jquery.js")}}"></script>
<script src="{{asset("js/06toastr.js")}}"></script>
<script src="{{asset("js/07zjs000.js")}}"></script>


</body>
</html>

<!-- This document saved from http://cvbesaz.com/builder -->
