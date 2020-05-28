
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
