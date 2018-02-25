<section>
    <div class="container">
        <div class="make_donation_request text-center text-primary bg-white">
            <h2>Make Blood Donation Request</h2>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="modal-content" method="POST" action="" accept-charset="UTF-8">
                    <div class="">
                        <div class="col-md-12"><h3 class="text-primary"> Blood Info </h3></div>
                    </div>
                    <div class="row modal-body">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" id="datetimepicker" name="transfusion_date" type="" placeholder="Transfusion date (YYYY-MM-DD)">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="blood_group">
                                    <option value="" selected="selected">Blood Group</option>
                                    <option value="1">A+</option>
                                    <option value="2">A-</option>
                                    <option value="3">AB+</option>
                                    <option value="4">AB-</option>
                                    <option value="5">B+</option>
                                    <option value="6">B-</option>
                                    <option value="7">O+</option>
                                    <option value="8">O-</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="blood_type" class="form-control">
                                    <option value="">Blood Components</option>
                                    <option value="1">Red Blood Cell</option>
                                    <option value="2">Platelets</option>
                                    <option value="3">Plasma</option>
                                    <option value="4">Double Red Cell</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" name="required_qty" type="number" value="" placeholder="Required Quantity">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" name="managed_qty" type="number" value="" placeholder="Managed Quantity">
                            </div>
                        </div>
                    </div>

                    <!--------------------------------------------------------------------------------------------------------------------------------------------->
                    <div class="">
                        <div class="col-md-12"><h3 class="text-primary"> Patient Info </h3></div>
                    </div>
                    <div class="row modal-body">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="patient_name" class="form-control" id="patient_name" value="" placeholder="Patient Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="patient_sex" id="patient_sex">
                                    <option value="">Sex</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" name="patient_age" type="number" value="" placeholder="Patient Age">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control" name="medical_reason">
                                <option value="1">Operation</option>
                                <option value="2">Accident</option>
                                <option value="3">Pregnancy</option>
                                <option value="4">Other</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" name="contact" type="text" value="" placeholder="Contact Info">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" name="relation" type="text" value="" placeholder="Relation">
                            </div>
                        </div>
                    </div>

                    <!--------------------------------------------------------------------------------------------------------------->
                    <div class="">
                        <div class="col-md-12"><h3 class="text-primary"> Address Info </h3></div>
                    </div>
                    <div class="row modal-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control" name="district_id">
                                    <option value="" selected="selected">Select District</option><option value="1">Bagerhat</option>
                                    <option value="2">Bandarban</option><option value="3">Barguna</option><option value="4">Barisal</option>
                                    <option value="5">Bhola</option><option value="6">Bogra</option><option value="7">Brahmanbaria</option>
                                    <option value="8">Chandpur</option><option value="9">Chittagong</option><option value="10">Chuadanga</option>
                                    <option value="11">Comilla</option><option value="12">Cox's Bazar</option><option value="13">Dhaka</option>
                                    <option value="14">Dinajpur</option><option value="15">Faridpur</option><option value="16">Feni</option>
                                    <option value="17">Gaibandha</option><option value="18">Gazipur</option><option value="19">Gopalganj</option>
                                    <option value="20">Habiganj</option><option value="21">Jamalpur</option><option value="22">Jessore</option>
                                    <option value="23">Jhalokati</option><option value="24">Jhenaidah</option><option value="25">Joypurhat</option>
                                    <option value="26">Khagrachhari</option><option value="27">Khulna</option><option value="28">Kishoreganj</option>
                                    <option value="29">Kurigram</option><option value="30">Kushtia</option><option value="31">Lakshmipur</option>
                                    <option value="32">Lalmonirhat</option><option value="33">Madaripur</option><option value="34">Magura</option>
                                    <option value="35">Manikganj</option><option value="36">Meherpur</option><option value="37">Moulvibazar</option>
                                    <option value="38">Munshiganj</option><option value="39">Mymensingh</option><option value="40">Naogaon</option>
                                    <option value="41">Narail</option><option value="42">Narayanganj</option><option value="43">Narsingdi</option>
                                    <option value="44">Natore</option><option value="45">Nawabganj</option><option value="46">Netrokona</option>
                                    <option value="47">Nilphamari</option><option value="48">Noakhali</option><option value="49">Pabna</option>
                                    <option value="50">Panchagarh</option><option value="51">Patuakhali</option><option value="52">Pirojpur</option>
                                    <option value="53">Rajbari</option><option value="54">Rajshahi</option><option value="55">Rangamati</option>
                                    <option value="56">Rangpur</option><option value="57">Satkhira</option><option value="58">Shariatpur</option>
                                    <option value="59">Sherpur</option><option value="60">Sirajganj</option><option value="61">Sunamganj</option>
                                    <option value="62">Sylhet</option><option value="63">Tangail</option><option value="64">Thakurgaon</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="addressText" name="geolocation[addressText]" type="text" value="" placeholder="Enter a location" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Other messages"></textarea>
                            </div>
                        </div>
                    </div>

                    <!------------------------------------------------------------------------------------------------------------------------------>
                    <div class="row modal-body">
                        <div class="col-md-12">
                            <button class="btn bgprimary2 btn-primary btn-lg pull-right" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</section>
