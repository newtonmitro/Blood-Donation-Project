<?php

include 'includes/db.php';
?>
<section>
    <div class="container">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Member Registration</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-9">
                            <form method="POST" action="inc/registration.php">

                                <div class="row">
                                    <div class="col-md-6">
                                        <!----------------------------First Name-------------------------------->
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="f_name"  placeholder="First Name">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!----------------------------Last Name-------------------------------->
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="l_name"   placeholder="Last Name">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!----------------------------Sex -------------------------------->
                                        <div class="form-group">
                                            <select class="form-control" name="sex">
                                                <option value="" selected="selected">Sex</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!---------------------------- Birth Date -------------------------------->
                                        <div class="form-group">
                                            <input onfocus="(this.type='date')" class="form-control" name="dbo"   placeholder="Date of birth" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!---------------------------- Mobile Number -------------------------------->
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="contact_no" placeholder="Mobile Number" >
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!---------------------------- User Group -------------------------------->
                                        <div class="form-group">
                                            <select class="form-control" name="role">
                                                <option value="" selected="selected">User Role</option>
                                                <option value="1">Donor</option>
                                                <option value="2">Visitor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!---------------------------- Blood Group -------------------------------->
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
                                    <div class="col-md-6">
                                        <!---------------------------- District -------------------------------->
                                        <div class="form-group">
                                            <select id="district" class="form-control" name="district">
                                                <option value="" selected="selected">District</option>
                                                <option value="1">Bagerhat</option>
                                                <option value="2">Bandarban</option><option value="3">Barguna</option>
                                                <option value="4">Barisal</option><option value="5">Bhola</option>
                                                <option value="6">Bogra</option><option value="7">Brahmanbaria</option>
                                                <option value="8">Chandpur</option><option value="9">Chittagong</option>
                                                <option value="10">Chuadanga</option><option value="11">Comilla</option>
                                                <option value="12">Cox's Bazar</option><option value="13">Dhaka</option>
                                                <option value="14">Dinajpur</option><option value="15">Faridpur</option>
                                                <option value="16">Feni</option><option value="17">Gaibandha</option>
                                                <option value="18">Gazipur</option><option value="19">Gopalganj</option>
                                                <option value="20">Habiganj</option><option value="21">Jamalpur</option>
                                                <option value="22">Jessore</option><option value="23">Jhalokati</option>
                                                <option value="24">Jhenaidah</option><option value="25">Joypurhat</option>
                                                <option value="26">Khagrachhari</option><option value="27">Khulna</option>
                                                <option value="28">Kishoreganj</option><option value="29">Kurigram</option>
                                                <option value="30">Kushtia</option><option value="31">Lakshmipur</option>
                                                <option value="32">Lalmonirhat</option><option value="33">Madaripur</option>
                                                <option value="34">Magura</option><option value="35">Manikganj</option>
                                                <option value="36">Meherpur</option><option value="37">Moulvibazar</option>
                                                <option value="38">Munshiganj</option><option value="39">Mymensingh</option>
                                                <option value="40">Naogaon</option><option value="41">Narail</option>
                                                <option value="42">Narayanganj</option><option value="43">Narsingdi</option>
                                                <option value="44">Natore</option><option value="45">Nawabganj</option>
                                                <option value="46">Netrokona</option><option value="47">Nilphamari</option>
                                                <option value="48">Noakhali</option><option value="49">Pabna</option>
                                                <option value="50">Panchagarh</option><option value="51">Patuakhali</option>
                                                <option value="52">Pirojpur</option><option value="53">Rajbari</option>
                                                <option value="54">Rajshahi</option><option value="55">Rangamati</option>
                                                <option value="56">Rangpur</option><option value="57">Satkhira</option>
                                                <option value="58">Shariatpur</option><option value="59">Sherpur</option>
                                                <option value="60">Sirajganj</option><option value="61">Sunamganj</option>
                                                <option value="62">Sylhet</option><option value="63">Tangail</option>
                                                <option value="64">Thakurgaon</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!---------------------------- Email -------------------------------->
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" placeholder="Email" >
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!---------------------------- Password -------------------------------->
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="password" >
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!---------------------------- Confirm Password -------------------------------->
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="confirm_password" placeholder="confirm_password" >
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12  text-center">
                                        <!---------------------------- Submit Button -------------------------------->
                                        <button type="submit"  name="submit" class="btn bgprimary2 btn-success btn-block">Register</button>
                                    </div>
                                </div>
                            </form>
                    </div>

                    <div class="col-md-3">
                        <p class="lead text-success font-weight-bold">Register for </p>
                        <ul class="list-unstyled" style="line-height: 2">
                            <li><span class="fa fa-check text-success"></span> Browse donors</li>
                            <li><span class="fa fa-check text-success"></span> Manage donation record</li>
                            <li><span class="fa fa-check text-success"></span> Save donors' contacts</li>
                            <li><span class="fa fa-check text-success"></span> Help others</li>
                            <li><span class="fa fa-check text-success"></span> Become a hero</li>
                            <li><span class="fa fa-check text-success"></span> Save life</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
mysqli_close($connection);