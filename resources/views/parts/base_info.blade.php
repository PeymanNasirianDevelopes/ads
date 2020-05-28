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

                            <input name="image" type="file" name="file" id="profilephoto" />
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
                    <input name="name" id="BasicInfoFirstName" data-score="0.5" />

                </div>
                <div class="col-md-3 col-sm-6">
                    <label>نام خانوادگی<span style="color: red; font-size: 18px;"> *</span></label>
                    <input name="last_name" id="BasicInfoLastName" data-score="1" />


                </div>

                <div class="col-md-3 col-sm-6">

                    <label class="active">جنسیت</label>
                    <select name="gender" id="BasicInfoGender" class="browser-default material-selectize">
                        <option value="0"></option><option value="male">مرد</option><option value="female">زن</option>
                    </select>

                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="active">وضعیت تاهل</label>
                    <select name="maried" id="BasicInfoMaritalStatus" class="browser-default material-selectize">
                        <option value="0"></option><option value="single">مجرد</option><option value="mingle">متاهل</option>
                    </select>

                </div>
                <div class="col-md-3 col-sm-12">
                    <label class="active">وضعیت سربازی</label>
                    <select name="military" id="BasicInfoMilitaryStatus"class="browser-default material-selectize" asp-items="Html.GetTranslatedEnumSelectList<MilitaryStatus>()">
                        <option value="0"disabled selected></option><option value="مشمول">مشمول</option><option value="درحال خدمت">درحال خدمت</option><option value="پایان خدمت">پایان خدمت</option><option value="معاف">معاف</option><option value="معافیت تحصیلی">معافیت تحصیلی</option>
                    </select>

                </div>

                <div class="row col-md-4 col-sm-12 table-field" style="padding-left: 0;">
                    <label>تاریخ تولد</label>
                    <table>
                        <tr>
                            <td>
                                <select name="day" id="BasicInfoBirtDay" class="browser-default no-caret material-selectize">
                                    <option value="0" disabled selected>روز</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                                </select>
                            </td>
                            <td style="width:50%;padding-left:14px;">
                                <select name="month" id="BasicInfoBirthMonth" class="browser-default no-caret material-selectize">
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
                                <select name="year" id="BasicInfoBirthYear"  class="browser-default no-caret material-selectize">
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
                    <input name="email" id="BasicInfoEmail" data-score="1" dir="ltr" class="ltr-field" type="text" id="BasicInfo_Email" name="BasicInfo.Email" value=""/>

                    <span class="emailMessage"></span>
                </div>
                <div class="col-md-2 col-sm-6">
                    <i class="fa fa-mobile icon-fa fa-3x prefix"></i>
                    <label >موبایل</label>
                    <input name="mobile" id="BasicInfoMobile" data-score="0.5" style="min-width:85px" dir="ltr" class="onlyNumber" placeholder="09*********" />

                </div>
                <div class="col-md-2 col-sm-6">
                    <i class="fa fa-phone icon-fa fa-3x prefix"></i>
                    <label asp-for="BasicInfoPhone">تلفن</label>
                    <input name="phone" id="BasicInfoPhone" data-score="0.5" dir="ltr" style="min-width:85px"  placeholder="02166665454" class="onlyNumber" />

                </div>
                <div class="col-md-4 col-sm-12">
                    <i class="fa fa-globe icon-fa fa-3x prefix"></i>
                    <label asp-for="BasicInfoWebsite">وب سایت</label>
                    <input name="website" id="BasicInfoWebsite" data-score="0.5" class="en-font" dir="ltr" placeholder="www." />

                </div>

                <div class="col-md-2 col-sm-12">
                    <label asp-for="BasicInfo.CountryTitle" class="active">کشور</label>
                    <select name="country" id="BasicInfoCountryId" class="browser-default material-selectize">
                        <option value="0" disabled selected> </option> <option value="2">ایران</option> <option value="153">آلبانی</option> <option value="154">الجزایر</option> <option value="155">آندورا</option> <option value="156">آنگولا</option> <option value="157">آرزانتین</option> <option value="158">ارمنستان</option> <option value="159">استرالیا</option> <option value="160">اتریش</option> <option value="161">آذربایجان</option> <option value="162">باهاما</option> <option value="163">بحرین</option> <option value="164">بنگلادش</option> <option value="165">باربادوس</option> <option value="166">بلاروس</option> <option value="167">بلژیک</option> <option value="168">بلیز</option> <option value="169">بنین</option> <option value="170">بوتان</option> <option value="171">بولیوی</option> <option value="172">بوسنی و هرزگوین</option> <option value="173">بوتسوانا</option> <option value="174">برزیل</option> <option value="175">بونئی</option> <option value="176">بلغارستان</option> <option value="177">بورکینیا فاسو</option> <option value="178">بروندی</option> <option value="179">کامبوج</option> <option value="180">کامرون</option> <option value="181">کانادا</option> <option value="182">چاد</option> <option value="183">شیلی</option> <option value="184">چین</option> <option value="185">کلمبیا</option> <option value="186">کنگو</option> <option value="187">کاستاریکا</option> <option value="188">کرواسی</option> <option value="189">کوبا</option> <option value="190">قبرس</option> <option value="191">جمهوری چک</option> <option value="192">دانمارک</option> <option value="193">جیبوتی</option> <option value="194">دومینیکا</option> <option value="195">جمهوری دومنیکن</option> <option value="196">اکوادور</option> <option value="197">مصر</option> <option value="198">السالوادور</option> <option value="199">انگلیسی</option> <option value="200">ایتره</option> <option value="201">استونی</option> <option value="202">اتیوپی</option> <option value="203">فیجی</option> <option value="204">فنلاند</option> <option value="205">فرانسه</option> <option value="206">گابن</option> <option value="207">گامبیا</option> <option value="208">گرجستان</option> <option value="209">آلمان</option> <option value="210">غنا</option> <option value="211">یونان</option> <option value="212">گرانادا</option> <option value="213">گواتمالا</option> <option value="214">گینه</option> <option value="215">گویان</option> <option value="216">هایتی</option> <option value="217">هندوراس</option> <option value="218">مجارستان</option> <option value="219">ایسلند</option> <option value="220">هند</option> <option value="221">اندونزی</option> <option value="222">عراق</option> <option value="223">جمهوری ایرلند</option> <option value="224">ایتالیا</option> <option value="225">جامائیکا</option> <option value="226">ژاپن</option> <option value="227">اردن</option> <option value="228">قزاقستان</option> <option value="229">کنیا</option> <option value="230">کویت</option> <option value="231">لائوس</option> <option value="232">لیتوانی</option> <option value="233">لبنان</option> <option value="234">لیبریا</option> <option value="235">لیبی</option> <option value="236">لیتوانی</option> <option value="237">مقدونیه</option> <option value="238">ماداگاسکار</option> <option value="239">مالاوی</option> <option value="240">مالزی</option> <option value="241">مالدیو</option> <option value="242">مالی</option> <option value="243">مالت</option> <option value="244">موریتانی</option> <option value="245">موریس</option> <option value="246">مکزیک</option> <option value="247">موناکو</option> <option value="248">مغولستان</option> <option value="249">مونته نگرو</option> <option value="250">مراکش</option> <option value="251">موزامبیک</option> <option value="252">میانمار (نام دیگر این کشور برمه است)</option> <option value="253">نامیبیا</option> <option value="254">نپال</option> <option value="255">هلند</option> <option value="256">نیوزیلند</option> <option value="257">نیکاراگوئه</option> <option value="258">نیجر</option> <option value="259">نیجریه</option> <option value="260">کره شمالی</option> <option value="261">نروژ</option> <option value="262">عمان</option> <option value="263">پاکستان</option> <option value="264">فلستین</option> <option value="265">پاناما</option> <option value="266">گینه نو</option> <option value="267">پاراگوئه</option> <option value="268">پرو</option> <option value="269">فیلیپین</option> <option value="270">لهستان</option> <option value="271">پرتغال</option> <option value="272">قطر</option> <option value="273">رومانی</option> <option value="274">روسیه</option> <option value="275">رواندا</option> <option value="276">عربستان سعودی</option> <option value="277">سنگال</option> <option value="278">صربستان</option> <option value="279">سیشل</option> <option value="280">سیرالئون</option> <option value="281">سنگاپور</option> <option value="282">اسلواکی</option> <option value="283">اسلوونی</option> <option value="284">سومالی</option> <option value="285">آفریقای جنوبی</option> <option value="286">کره جنوبی</option> <option value="287">اسپانیا</option> <option value="288">سریلانکا</option> <option value="289">سودان</option> <option value="290">سورینام</option> <option value="291">سوازیلند</option> <option value="292">سوئد</option> <option value="293">سوئیس</option> <option value="294">سوریه</option> <option value="295">تایوان</option> <option value="296">تاجیکستان</option> <option value="297">تانزانیا</option> <option value="298">تایلند</option> <option value="299">توگو</option> <option value="300">ترینیداد و توباگو</option> <option value="301">تونس</option> <option value="302">ترکیه</option> <option value="303">ترکمنستان</option> <option value="304">توالو</option> <option value="305">اوگاندا</option> <option value="306">اکراین</option> <option value="307">امارات متحده عربی</option> <option value="308">ایالات متحده آمریکا</option> <option value="309">اروگوئه</option> <option value="310">ازبکستان</option> <option value="311">وانوواتو</option> <option value="312">واتیکان</option> <option value="313">ونزوئلا</option> <option value="314">ویتنام</option> <option value="315">یمن</option> <option value="316">زامبیا</option> <option value="317">زیمباوه</option> <option value="318">افغانستان</option>

                    </select>
                </div>
                <div class="col-md-2 col-sm-6">
                    <label asp-for="BasicInfo.ProvinceTitle" class="active">استان</label>
                    <div id="selectprovince" style="display: none;">
                        <select name="province" id="BasicInfoProvinceId"  class="browser-default material-selectize" >

                            <option value="0" disabled selected> </option><option value="1">آذربایجان شرقی</option><option value="2">آذربایجان غربی</option><option value="3">اردبیل</option><option value="4">اصفهان</option><option value="5">البرز</option><option value="6">ایلام</option><option value="7">بوشهر</option><option value="8">تهران</option><option value="9">چهار محال و بختیاری</option><option value="10">خراسان جنوبی</option><option value="11">خراسان رضوی</option><option value="12">خراسان شمالی</option><option value="13">خوزستان</option><option value="14">زنجان</option><option value="15">سمنان</option><option value="16">سیستان و بلوچستان</option><option value="17">فارس</option><option value="18">قزوین</option><option value="19">قم</option><option value="20">کردستان</option><option value="21">کرمان</option><option value="22">کرمانشاه</option><option value="23">کهگیلویه و بویراحمد</option><option value="24">گلستان</option><option value="25">گیلان</option><option value="26">لرستان</option><option value="27">مازندران</option><option value="28">مرکزی</option><option value="29">هرمزگان</option><option value="30">همدان</option><option value="31">یزد</option>
                        </select>
                    </div>
                    <input id="BasicInfoProvinceTitle" style="display:inline" />

                </div>
                <div class="col-md-2 col-sm-6">
                    <label asp-for="BasicInfo.CityTitle" class="active">شهر</label>
                    <div id="selectcity" style="display: none;">
                        <input name="city" id="BasicInfoWebsite" data-score="0.5" class="en-font" dir="ltr"  />
                    </div>
                    <input id="BasicInfoCityTitle"style="display:inline" />

                </div>
                <div class="col-md-6 col-sm-12">
                    <label asp-for="Basic.InfoAddress">آدرس</label>
                    <input name="address" id="BasicInfoAddress" data-score="1" />

                </div>
            </fieldset>
            <fieldset>
                <legend class="compact"><div class="text-center">توصیف خلاصه </div> </legend>

                <div class="help-block">خلاصه رزومه بخش آغازین یک رزومه است که در قالب کلمات کوتاه، شفاف و مهم تصویری از شما و مهارت های شما در ذهن ایجاد می کند (کمتر از 250 کاراکتر)</div>
                <div class="col-sm-12">
                                        <textarea name="about" id="BasicInfoAbout" data-score="1" class="no-materialize-textarea" placeholder="برای مثال :
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
