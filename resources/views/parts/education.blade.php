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

                        <div id="selectunder" style="display: block;">

                            <select id="EducationInfosUnderGraduateInstitudeType" name="EducationInfosUnderGraduateInstitudeType[]" class="form-control select2 selectnew">
                                <option value="0" selected></option>
                                <option value="5">دولتی</option>
                                <option value="6">آزاد</option>
                                <option value="7">پیام نور</option>
                                <option value="8">علمی کاربردی</option>
                                <option value="9">غیرانتفاعی</option>
                                <option value="10">سایر</option>
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
                             <option value="2" selected>ایران</option> <option value="153">آلبانی</option> <option value="154">الجزایر</option> <option value="155">آندورا</option> <option value="156">آنگولا</option> <option value="157">آرزانتین</option> <option value="158">ارمنستان</option> <option value="159">استرالیا</option> <option value="160">اتریش</option> <option value="161">آذربایجان</option> <option value="162">باهاما</option> <option value="163">بحرین</option> <option value="164">بنگلادش</option> <option value="165">باربادوس</option> <option value="166">بلاروس</option> <option value="167">بلژیک</option> <option value="168">بلیز</option> <option value="169">بنین</option> <option value="170">بوتان</option> <option value="171">بولیوی</option> <option value="172">بوسنی و هرزگوین</option> <option value="173">بوتسوانا</option> <option value="174">برزیل</option> <option value="175">بونئی</option> <option value="176">بلغارستان</option> <option value="177">بورکینیا فاسو</option> <option value="178">بروندی</option> <option value="179">کامبوج</option> <option value="180">کامرون</option> <option value="181">کانادا</option> <option value="182">چاد</option> <option value="183">شیلی</option> <option value="184">چین</option> <option value="185">کلمبیا</option> <option value="186">کنگو</option> <option value="187">کاستاریکا</option> <option value="188">کرواسی</option> <option value="189">کوبا</option> <option value="190">قبرس</option> <option value="191">جمهوری چک</option> <option value="192">دانمارک</option> <option value="193">جیبوتی</option> <option value="194">دومینیکا</option> <option value="195">جمهوری دومنیکن</option> <option value="196">اکوادور</option> <option value="197">مصر</option> <option value="198">السالوادور</option> <option value="199">انگلیسی</option> <option value="200">ایتره</option> <option value="201">استونی</option> <option value="202">اتیوپی</option> <option value="203">فیجی</option> <option value="204">فنلاند</option> <option value="205">فرانسه</option> <option value="206">گابن</option> <option value="207">گامبیا</option> <option value="208">گرجستان</option> <option value="209">آلمان</option> <option value="210">غنا</option> <option value="211">یونان</option> <option value="212">گرانادا</option> <option value="213">گواتمالا</option> <option value="214">گینه</option> <option value="215">گویان</option> <option value="216">هایتی</option> <option value="217">هندوراس</option> <option value="218">مجارستان</option> <option value="219">ایسلند</option> <option value="220">هند</option> <option value="221">اندونزی</option> <option value="222">عراق</option> <option value="223">جمهوری ایرلند</option> <option value="224">ایتالیا</option> <option value="225">جامائیکا</option> <option value="226">ژاپن</option> <option value="227">اردن</option> <option value="228">قزاقستان</option> <option value="229">کنیا</option> <option value="230">کویت</option> <option value="231">لائوس</option> <option value="232">لیتوانی</option> <option value="233">لبنان</option> <option value="234">لیبریا</option> <option value="235">لیبی</option> <option value="236">لیتوانی</option> <option value="237">مقدونیه</option> <option value="238">ماداگاسکار</option> <option value="239">مالاوی</option> <option value="240">مالزی</option> <option value="241">مالدیو</option> <option value="242">مالی</option> <option value="243">مالت</option> <option value="244">موریتانی</option> <option value="245">موریس</option> <option value="246">مکزیک</option> <option value="247">موناکو</option> <option value="248">مغولستان</option> <option value="249">مونته نگرو</option> <option value="250">مراکش</option> <option value="251">موزامبیک</option> <option value="252">میانمار (نام دیگر این کشور برمه است)</option> <option value="253">نامیبیا</option> <option value="254">نپال</option> <option value="255">هلند</option> <option value="256">نیوزیلند</option> <option value="257">نیکاراگوئه</option> <option value="258">نیجر</option> <option value="259">نیجریه</option> <option value="260">کره شمالی</option> <option value="261">نروژ</option> <option value="262">عمان</option> <option value="263">پاکستان</option> <option value="264">فلستین</option> <option value="265">پاناما</option> <option value="266">گینه نو</option> <option value="267">پاراگوئه</option> <option value="268">پرو</option> <option value="269">فیلیپین</option> <option value="270">لهستان</option> <option value="271">پرتغال</option> <option value="272">قطر</option> <option value="273">رومانی</option> <option value="274">روسیه</option> <option value="275">رواندا</option> <option value="276">عربستان سعودی</option> <option value="277">سنگال</option> <option value="278">صربستان</option> <option value="279">سیشل</option> <option value="280">سیرالئون</option> <option value="281">سنگاپور</option> <option value="282">اسلواکی</option> <option value="283">اسلوونی</option> <option value="284">سومالی</option> <option value="285">آفریقای جنوبی</option> <option value="286">کره جنوبی</option> <option value="287">اسپانیا</option> <option value="288">سریلانکا</option> <option value="289">سودان</option> <option value="290">سورینام</option> <option value="291">سوازیلند</option> <option value="292">سوئد</option> <option value="293">سوئیس</option> <option value="294">سوریه</option> <option value="295">تایوان</option> <option value="296">تاجیکستان</option> <option value="297">تانزانیا</option> <option value="298">تایلند</option> <option value="299">توگو</option> <option value="300">ترینیداد و توباگو</option> <option value="301">تونس</option> <option value="302">ترکیه</option> <option value="303">ترکمنستان</option> <option value="304">توالو</option> <option value="305">اوگاندا</option> <option value="306">اکراین</option> <option value="307">امارات متحده عربی</option> <option value="308">ایالات متحده آمریکا</option> <option value="309">اروگوئه</option> <option value="310">ازبکستان</option> <option value="311">وانوواتو</option> <option value="312">واتیکان</option> <option value="313">ونزوئلا</option> <option value="314">ویتنام</option> <option value="315">یمن</option> <option value="316">زامبیا</option> <option value="317">زیمباوه</option> <option value="318">افغانستان</option>
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

                        <input id="" name="EducationInfosCityTitle[]" style="display:block" />

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
                                <input type="checkbox" name="studing[]"id="studing" value="1"/>

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
