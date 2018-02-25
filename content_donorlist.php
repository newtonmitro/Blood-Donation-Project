<Section>
    <div class="container">
        <div class="dropshadow">
            <div class="searchbox">
                <form class="form-group hp-search-form" action="">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <select class="form-control select" name="bloodGroup">
                                <option value="">Blood Group</option>
                                <option value="1">A+</option>
                                <option value="2">A-</option>
                                <option value="B+">AB+</option>
                                <option value="B-">AB-</option>
                                <option value="O+">B+</option>
                                <option value="O-">B-</option>
                                <option value="AB+">O+</option>
                                <option value="AB-">O-</option>
                            </select>

                        </div>
                        <div class="col-sm-6 col-md-4">
                            <select class="form-control select" name="District">
                                <option value="" selected="selected">District</option>
                                <option value="1">Bagerhat</option>
                                <option value="2">Bandarban</option>
                                <option value="3">Barguna</option>
                                <option value="4">Barisal</option>
                                <option value="5">Bhola</option>
                                <option value="6">Bogra</option>
                                <option value="7">Brahmanbaria</option>
                                <option value="8">Chandpur</option>
                                <option value="9">Chittagong</option>
                                <option value="10">Chuadanga</option>
                                <option value="11">Comilla</option>
                                <option value="12">Cox's Bazar</option>
                                <option value="13">Dhaka</option>
                                <option value="14">Dinajpur</option>
                                <option value="15">Faridpur</option>
                                <option value="16">Feni</option>
                                <option value="17">Gaibandha</option>
                                <option value="18">Gazipur</option>
                                <option value="19">Gopalganj</option>
                                <option value="20">Habiganj</option>
                                <option value="21">Jamalpur</option>
                                <option value="22">Jessore</option>
                                <option value="23">Jhalokati</option>
                                <option value="24">Jhenaidah</option>
                                <option value="25">Joypurhat</option>
                                <option value="26">Khagrachhari</option>
                                <option value="27">Khulna</option>
                                <option value="28">Kishoreganj</option>
                                <option value="29">Kurigram</option>
                                <option value="30">Kushtia</option>
                                <option value="31">Lakshmipur</option>
                                <option value="32">Lalmonirhat</option>
                                <option value="33">Madaripur</option>
                                <option value="34">Magura</option>
                                <option value="35">Manikganj</option>
                                <option value="36">Meherpur</option>
                                <option value="37">Moulvibazar</option>
                                <option value="38">Munshiganj</option>
                                <option value="39">Mymensingh</option>
                                <option value="40">Naogaon</option>
                                <option value="41">Narail</option>
                                <option value="42">Narayanganj</option>
                                <option value="43">Narsingdi</option>
                                <option value="44">Natore</option>
                                <option value="45">Nawabganj</option>
                                <option value="46">Netrokona</option>
                                <option value="47">Nilphamari</option>
                                <option value="48">Noakhali</option>
                                <option value="49">Pabna</option>
                                <option value="50">Panchagarh</option>
                                <option value="51">Patuakhali</option>
                                <option value="52">Pirojpur</option>
                                <option value="53">Rajbari</option>
                                <option value="54">Rajshahi</option>
                                <option value="55">Rangamati</option>
                                <option value="56">Rangpur</option>
                                <option value="57">Satkhira</option>
                                <option value="58">Shariatpur</option>
                                <option value="59">Sherpur</option>
                                <option value="60">Sirajganj</option>
                                <option value="61">Sunamganj</option>
                                <option value="62">Sylhet</option>
                                <option value="63">Tangail</option>
                                <option value="64">Thakurgaon</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-4 text-right">
                            <button type="submit" class="btn btn-large btn-primary bgprimary2 text-white btn-block">
                                <i class="fa fa-search"></i> Filter
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="searchresult text-light">
                <div class="row bgprimary ">
                    <div class="col-md-12">
                        <h6 class=""><?php echo  '( '.mysqli_num_rows($result).' )'; ?> Records Found.</h6>
                    </div>
                </div>
                <div style="height: 10px"></div>
                <div class="row bg-warning">
                    <div class="col-md-3">Name</div>
                    <div class="col-md-1">Sex</div>
                    <div class="col-md-1">Blood</div>
                    <div class="col-md-2">District</div>
                    <div class="col-md-2">Contact No</div>
                    <div class="col-md-3">Action</div>
                </div>
                <hr>
                <?php
                $i=0;
                while ($row = mysqli_fetch_assoc($result)){
                    $querysex="SELECT * FROM Sex WHERE id  = ".$row['Sex'].";";
//                echo $querysex;
                    $resultsex = mysqli_query($connection, $querysex);
                    $rowsex=mysqli_fetch_assoc($resultsex);
                    $querydis="SELECT * FROM Districts WHERE id  = ".$row['District'].";";
//                echo $querydis;
                    $resultdis = mysqli_query($connection, $querydis);
                    $rowdis=mysqli_fetch_assoc($resultdis);
                    $querybg="SELECT * FROM Blood_Groups WHERE id  = '".$row['Blood_Group']."';";
//                echo $querybg;
                    $resultbg = mysqli_query($connection, $querybg);
                    $rowbg=mysqli_fetch_assoc($resultbg);
                    if($i/2==0){
                        $class = "bgprimary2";
                    }else{
                        $class = "bgprimary";
                    }
                    echo "<div class='row ".$class." '>";
                    echo "<div class='col-md-3'>". $row["fname"]." ". $row["lname"]."</div>";
                    echo "<div class='col-md-1'>".$rowsex['sex']."</div>";
                    echo "<div class='col-md-1'>".$rowbg['blood_group']."</div>";
                    echo "<div class='col-md-2'>". $rowdis["district"]."</div>";
                    echo "<div class='col-md-2'>". $row["Contact_No"]."</div>";
                    echo "<div class='col-md-3'><div class='row'>
                                        <div class='col-lg-6'><button class='btn-outline-light'>Request</button>
                                        </div><div class='col-lg-6'><button class='btn-outline-light'>View</button></div>
                                    </div>
                                    
                                    </div>";
                    echo "</div>";
                    $i++;
                    echo "<hr/>";
                    mysqli_free_result($resultsex);
                    mysqli_free_result($resultdis);
                }

                mysqli_free_result($result);
                ?>
            </div>
        </div>
    </div>
</Section>

<?php
mysqli_close($connection);