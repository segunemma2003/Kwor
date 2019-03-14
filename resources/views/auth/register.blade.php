<!Doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>kwuö-register</title> 
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/intlTelInput.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('register.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
    <link href="{{ asset('css/sweetalert.css')}}"/>
</head>
    <body>
        
        
        <!--navbar-->
             <nav class="reg-nav navbar fixed-top navbar-expand-lg navbar-dark">
                 <div class="container">
                 <a class="navbar-brand" href="{{ URL('/') }}'">kwuö</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class=" collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav ml-auto mt-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#features">Features</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#screenshot">Screenshot</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#contact">Contact</a></li>
                        <li class="nav-item"><a href="{{URL('/login')}}" class="nav-link">Login</a> </li>
                        <li class="nav-item active"><a class="nav-link" href="{{URL('/register')}}">Create Account</a></li>
                        </ul>
                      </div>
                  </div>
                </nav>  
                    
                <!--form-->
                
                <div class="container" style="margin-top: 100px;">
                    <div class="row form" style="border: 1px solid #00c851;">
                        <div class="col-lg-6"  style="border-right: 1px solid #00C851;">
                            <h3 style="margin-top: 50px; color: #00C851; ">Create Your Account</h3><br><br>
                            <p>Our vision at Quidax is to create a world where sending money and value around the globe is as easy as sending a text message. We have created a uniquely simple and seamless way for you to buy and sell cryptocurrencies using your local currency. We hope you love it as much as we do. Thank you for joining us to build this future.<br><br> - Team IgHub</p>
                            <a href="{{URL('/login')}}" style="color:  #00C851;">Already have an account? SignIn</a>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- Default form register -->
                            <form class="text-center  p-5" action="{{ route('register') }}" method="post">
                                @csrf
                                <p class="h4 mb-4"></p>

                                <div class="form-row mb-4">
                                    <div class="col" style="text-align: left;">
                                        <!-- First name -->
                                        <label>FIRST NAME*</label><br>
                                        <input type="text" id="defaultRegisterFormFirstName" name="firstName" class="form-control" placeholder="First name">
                                        @if ($errors->has('firstName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                    <div class="col" style="text-align: left;">
                                        <!-- Last name -->
                                        <label>LAST NAME*</label><br>
                                        <input type="text" id="defaultRegisterFormLastName" name="lastName" class="form-control" placeholder="Last name">
                                        @if ($errors->has('lastName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
                                
                                <!-- E-mail -->
                                <div style="text-align: left;">
                                <label>E-MAIL ADDRESS*</label>
                                <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="name@example.com" name="email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif    
                            </div>
                                
                                <!--country-->
                                <div style="text-align: left;">
                                <label>COUNTRY*</label>
                                <select class=" browser-default mb-3" name="country">
                                    <option value="ISO 3166-2:NG">Nigeria</option>
                                    <option value="ISO 3166-2:AF">Afghanistan</option>
                                    <option value="ISO 3166-2:AX">Åland Islands</option>
                                    <option value="ISO 3166-2:AL">Albania</option>
                                    <option value="ISO 3166-2:DZ">Algeria</option>
                                    <option value="ISO 3166-2:AS">American Samoa</option>
                                    <option value="ISO 3166-2:AD">Andorra</option>
                                    <option value="ISO 3166-2:AO">Angola</option>
                                    <option value="ISO 3166-2:AI">Anguilla</option>
                                    <option value="ISO 3166-2:AQ">Antarctica</option>
                                    <option value="ISO 3166-2:AG">Antigua and Barbuda</option>
                                    <option value="ISO 3166-2:AR">Argentina</option>
                                    <option value="ISO 3166-2:AM">Armenia</option>
                                    <option value="ISO 3166-2:AW">Aruba</option>
                                    <option value="ISO 3166-2:AU">Australia</option>
                                    <option value="ISO 3166-2:AT">Austria</option>
                                    <option value="ISO 3166-2:AZ">Azerbaijan</option>
                                    <option value="ISO 3166-2:BS">Bahamas</option>
                                    <option value="ISO 3166-2:BH">Bahrain</option>
                                    <option value="ISO 3166-2:BD">Bangladesh</option>
                                    <option value="ISO 3166-2:BB">Barbados</option>
                                    <option value="ISO 3166-2:BY">Belarus</option>
                                    <option value="ISO 3166-2:BE">Belgium</option>
                                    <option value="ISO 3166-2:BZ">Belize</option>
                                    <option value="ISO 3166-2:BJ">Benin</option>
                                    <option value="ISO 3166-2:BM">Bermuda</option>
                                    <option value="ISO 3166-2:BT">Bhutan</option>
                                    <option value="ISO 3166-2:BO">Bolivia, Plurinational State of</option>
                                    <option value="ISO 3166-2:BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="ISO 3166-2:BA">Bosnia and Herzegovina</option>
                                    <option value="ISO 3166-2:BW">Botswana</option>
                                    <option value="ISO 3166-2:BV">Bouvet Island</option>
                                    <option value="ISO 3166-2:BR">Brazil</option>
                                    <option value="ISO 3166-2:IO">British Indian Ocean Territory</option>
                                    <option value="ISO 3166-2:BN">Brunei Darussalam</option>
                                    <option value="ISO 3166-2:BG">Bulgaria</option>
                                    <option value="ISO 3166-2:BF">Burkina Faso</option>
                                    <option value="ISO 3166-2:BI">Burundi</option>
                                    <option value="ISO 3166-2:KH">Cambodia</option>
                                    <option value="ISO 3166-2:CM">Cameroon</option>
                                    <option value="ISO 3166-2:CA">Canada</option>
                                    <option value="ISO 3166-2:CV">Cape Verde</option>
                                    <option value="ISO 3166-2:KY">Cayman Islands</option>
                                    <option value="ISO 3166-2:CF">Central African Republic</option>
                                    <option value="ISO 3166-2:TD">Chad</option>
                                    <option value="ISO 3166-2:CL">Chile</option>
                                    <option value="ISO 3166-2:CN">China</option>
                                    <option value="ISO 3166-2:CX">Christmas Island</option>
                                    <option value="ISO 3166-2:CC">Cocos (Keeling) Islands</option>
                                    <option value="ISO 3166-2:CO">Colombia</option>
                                    <option value="ISO 3166-2:KM">Comoros</option>
                                    <option value="ISO 3166-2:CG">Congo</option>
                                    <option value="ISO 3166-2:CD">Congo, the Democratic Republic of the</option>
                                    <option value="ISO 3166-2:CK">Cook Islands</option>
                                    <option value="ISO 3166-2:CR">Costa Rica</option>
                                    <option value="ISO 3166-2:CI">Côte d'Ivoire</option>
                                    <option value="ISO 3166-2:HR">Croatia</option>
                                    <option value="ISO 3166-2:CU">Cuba</option>
                                    <option value="ISO 3166-2:CW">Curaçao</option>
                                    <option value="ISO 3166-2:CY">Cyprus</option>
                                    <option value="ISO 3166-2:CZ">Czech Republic</option>
                                    <option value="ISO 3166-2:DK">Denmark</option>
                                    <option value="ISO 3166-2:DJ">Djibouti</option>
                                    <option value="ISO 3166-2:DM">Dominica</option>
                                    <option value="ISO 3166-2:DO">Dominican Republic</option>
                                    <option value="ISO 3166-2:EC">Ecuador</option>
                                    <option value="ISO 3166-2:EG">Egypt</option>
                                    <option value="ISO 3166-2:SV">El Salvador</option>
                                    <option value="ISO 3166-2:GQ">Equatorial Guinea</option>
                                    <option value="ISO 3166-2:ER">Eritrea</option>
                                    <option value="ISO 3166-2:EE">Estonia</option>
                                    <option value="ISO 3166-2:ET">Ethiopia</option>
                                    <option value="ISO 3166-2:FK">Falkland Islands (Malvinas)</option>
                                    <option value="ISO 3166-2:FO">Faroe Islands</option>
                                    <option value="ISO 3166-2:FJ">Fiji</option>
                                    <option value="ISO 3166-2:FI">Finland</option>
                                    <option value="ISO 3166-2:FR">France</option>
                                    <option value="ISO 3166-2:GF">French Guiana</option>
                                    <option value="ISO 3166-2:PF">French Polynesia</option>
                                    <option value="ISO 3166-2:TF">French Southern Territories</option>
                                    <option value="ISO 3166-2:GA">Gabon</option>
                                    <option value="ISO 3166-2:GM">Gambia</option>
                                    <option value="ISO 3166-2:GE">Georgia</option>
                                    <option value="ISO 3166-2:DE">Germany</option>
                                    <option value="ISO 3166-2:GH">Ghana</option>
                                    <option value="ISO 3166-2:GI">Gibraltar</option>
                                    <option value="ISO 3166-2:GR">Greece</option>
                                    <option value="ISO 3166-2:GL">Greenland</option>
                                    <option value="ISO 3166-2:GD">Grenada</option>
                                    <option value="ISO 3166-2:GP">Guadeloupe</option>
                                    <option value="ISO 3166-2:GU">Guam</option>
                                    <option value="ISO 3166-2:GT">Guatemala</option>
                                    <option value="ISO 3166-2:GG">Guernsey</option>
                                    <option value="ISO 3166-2:GN">Guinea</option>
                                    <option value="ISO 3166-2:GW">Guinea-Bissau</option>
                                    <option value="ISO 3166-2:GY">Guyana</option>
                                    <option value="ISO 3166-2:HT">Haiti</option>
                                    <option value="ISO 3166-2:HM">Heard Island and McDonald Islands</option>
                                    <option value="ISO 3166-2:VA">Holy See (Vatican City State)</option>
                                    <option value="ISO 3166-2:HN">Honduras</option>
                                    <option value="ISO 3166-2:HK">Hong Kong</option>
                                    <option value="ISO 3166-2:HU">Hungary</option>
                                    <option value="ISO 3166-2:IS">Iceland</option>
                                    <option value="ISO 3166-2:IN">India</option>
                                    <option value="ISO 3166-2:ID">Indonesia</option>
                                    <option value="ISO 3166-2:IR">Iran, Islamic Republic of</option>
                                    <option value="ISO 3166-2:IQ">Iraq</option>
                                    <option value="ISO 3166-2:IE">Ireland</option>
                                    <option value="ISO 3166-2:IM">Isle of Man</option>
                                    <option value="ISO 3166-2:IL">Israel</option>
                                    <option value="ISO 3166-2:IT">Italy</option>
                                    <option value="ISO 3166-2:JM">Jamaica</option>
                                    <option value="ISO 3166-2:JP">Japan</option>
                                    <option value="ISO 3166-2:JE">Jersey</option>
                                    <option value="ISO 3166-2:JO">Jordan</option>
                                    <option value="ISO 3166-2:KZ">Kazakhstan</option>
                                    <option value="ISO 3166-2:KE">Kenya</option>
                                    <option value="ISO 3166-2:KI">Kiribati</option>
                                    <option value="ISO 3166-2:KP">Korea, Democratic People's Republic of</option>
                                    <option value="ISO 3166-2:KR">Korea, Republic of</option>
                                    <option value="ISO 3166-2:KW">Kuwait</option>
                                    <option value="ISO 3166-2:KG">Kyrgyzstan</option>
                                    <option value="ISO 3166-2:LA">Lao People's Democratic Republic</option>
                                    <option value="ISO 3166-2:LV">Latvia</option>
                                    <option value="ISO 3166-2:LB">Lebanon</option>
                                    <option value="ISO 3166-2:LS">Lesotho</option>
                                    <option value="ISO 3166-2:LR">Liberia</option>
                                    <option value="ISO 3166-2:LY">Libya</option>
                                    <option value="ISO 3166-2:LI">Liechtenstein</option>
                                    <option value="ISO 3166-2:LT">Lithuania</option>
                                    <option value="ISO 3166-2:LU">Luxembourg</option>
                                    <option value="ISO 3166-2:MO">Macao</option>
                                    <option value="ISO 3166-2:MK">Macedonia, the former Yugoslav Republic of</option>
                                    <option value="ISO 3166-2:MG">Madagascar</option>
                                    <option value="ISO 3166-2:MW">Malawi</option>
                                    <option value="ISO 3166-2:MY">Malaysia</option>
                                    <option value="ISO 3166-2:MV">Maldives</option>
                                    <option value="ISO 3166-2:ML">Mali</option>
                                    <option value="ISO 3166-2:MT">Malta</option>
                                    <option value="ISO 3166-2:MH">Marshall Islands</option>
                                    <option value="ISO 3166-2:MQ">Martinique</option>
                                    <option value="ISO 3166-2:MR">Mauritania</option>
                                    <option value="ISO 3166-2:MU">Mauritius</option>
                                    <option value="ISO 3166-2:YT">Mayotte</option>
                                    <option value="ISO 3166-2:MX">Mexico</option>
                                    <option value="ISO 3166-2:FM">Micronesia, Federated States of</option>
                                    <option value="ISO 3166-2:MD">Moldova, Republic of</option>
                                    <option value="ISO 3166-2:MC">Monaco</option>
                                    <option value="ISO 3166-2:MN">Mongolia</option>
                                    <option value="ISO 3166-2:ME">Montenegro</option>
                                    <option value="ISO 3166-2:MS">Montserrat</option>
                                    <option value="ISO 3166-2:MA">Morocco</option>
                                    <option value="ISO 3166-2:MZ">Mozambique</option>
                                    <option value="ISO 3166-2:MM">Myanmar</option>
                                    <option value="ISO 3166-2:NA">Namibia</option>
                                    <option value="ISO 3166-2:NR">Nauru</option>
                                    <option value="ISO 3166-2:NP">Nepal</option>
                                    <option value="ISO 3166-2:NL">Netherlands</option>
                                    <option value="ISO 3166-2:NC">New Caledonia</option>
                                    <option value="ISO 3166-2:NZ">New Zealand</option>
                                    <option value="ISO 3166-2:NI">Nicaragua</option>
                                    <option value="ISO 3166-2:NE">Niger</option>
                                    <option value="ISO 3166-2:NG">Nigeria</option>
                                    <option value="ISO 3166-2:NU">Niue</option>
                                    <option value="ISO 3166-2:NF">Norfolk Island</option>
                                    <option value="ISO 3166-2:MP">Northern Mariana Islands</option>
                                    <option value="ISO 3166-2:NO">Norway</option>
                                    <option value="ISO 3166-2:OM">Oman</option>
                                    <option value="ISO 3166-2:PK">Pakistan</option>
                                    <option value="ISO 3166-2:PW">Palau</option>
                                    <option value="ISO 3166-2:PS">Palestinian Territory, Occupied</option>
                                    <option value="ISO 3166-2:PA">Panama</option>
                                    <option value="ISO 3166-2:PG">Papua New Guinea</option>
                                    <option value="ISO 3166-2:PY">Paraguay</option>
                                    <option value="ISO 3166-2:PE">Peru</option>
                                    <option value="ISO 3166-2:PH">Philippines</option>
                                    <option value="ISO 3166-2:PN">Pitcairn</option>
                                    <option value="ISO 3166-2:PL">Poland</option>
                                    <option value="ISO 3166-2:PT">Portugal</option>
                                    <option value="ISO 3166-2:PR">Puerto Rico</option>
                                    <option value="ISO 3166-2:QA">Qatar</option>
                                    <option value="ISO 3166-2:RE">Réunion</option>
                                    <option value="ISO 3166-2:RO">Romania</option>
                                    <option value="ISO 3166-2:RU">Russian Federation</option>
                                    <option value="ISO 3166-2:RW">Rwanda</option>
                                    <option value="ISO 3166-2:BL">Saint Barthélemy</option>
                                    <option value="ISO 3166-2:SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="ISO 3166-2:KN">Saint Kitts and Nevis</option>
                                    <option value="ISO 3166-2:LC">Saint Lucia</option>
                                    <option value="ISO 3166-2:MF">Saint Martin (French part)</option>
                                    <option value="ISO 3166-2:PM">Saint Pierre and Miquelon</option>
                                    <option value="ISO 3166-2:VC">Saint Vincent and the Grenadines</option>
                                    <option value="ISO 3166-2:WS">Samoa</option>
                                    <option value="ISO 3166-2:SM">San Marino</option>
                                    <option value="ISO 3166-2:ST">Sao Tome and Principe</option>
                                    <option value="ISO 3166-2:SA">Saudi Arabia</option>
                                    <option value="ISO 3166-2:SN">Senegal</option>
                                    <option value="ISO 3166-2:RS">Serbia</option>
                                    <option value="ISO 3166-2:SC">Seychelles</option>
                                    <option value="ISO 3166-2:SL">Sierra Leone</option>
                                    <option value="ISO 3166-2:SG">Singapore</option>
                                    <option value="ISO 3166-2:SX">Sint Maarten (Dutch part)</option>
                                    <option value="ISO 3166-2:SK">Slovakia</option>
                                    <option value="ISO 3166-2:SI">Slovenia</option>
                                    <option value="ISO 3166-2:SB">Solomon Islands</option>
                                    <option value="ISO 3166-2:SO">Somalia</option>
                                    <option value="ISO 3166-2:ZA">South Africa</option>
                                    <option value="ISO 3166-2:GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="ISO 3166-2:SS">South Sudan</option>
                                    <option value="ISO 3166-2:ES">Spain</option>
                                    <option value="ISO 3166-2:LK">Sri Lanka</option>
                                    <option value="ISO 3166-2:SD">Sudan</option>
                                    <option value="ISO 3166-2:SR">Suriname</option>
                                    <option value="ISO 3166-2:SJ">Svalbard and Jan Mayen</option>
                                    <option value="ISO 3166-2:SZ">Swaziland</option>
                                    <option value="ISO 3166-2:SE">Sweden</option>
                                    <option value="ISO 3166-2:CH">Switzerland</option>
                                    <option value="ISO 3166-2:SY">Syrian Arab Republic</option>
                                    <option value="ISO 3166-2:TW">Taiwan, Province of China</option>
                                    <option value="ISO 3166-2:TJ">Tajikistan</option>
                                    <option value="ISO 3166-2:TZ">Tanzania, United Republic of</option>
                                    <option value="ISO 3166-2:TH">Thailand</option>
                                    <option value="ISO 3166-2:TL">Timor-Leste</option>
                                    <option value="ISO 3166-2:TG">Togo</option>
                                    <option value="ISO 3166-2:TK">Tokelau</option>
                                    <option value="ISO 3166-2:TO">Tonga</option>
                                    <option value="ISO 3166-2:TT">Trinidad and Tobago</option>
                                    <option value="ISO 3166-2:TN">Tunisia</option>
                                    <option value="ISO 3166-2:TR">Turkey</option>
                                    <option value="ISO 3166-2:TM">Turkmenistan</option>
                                    <option value="ISO 3166-2:TC">Turks and Caicos Islands</option>
                                    <option value="ISO 3166-2:TV">Tuvalu</option>
                                    <option value="ISO 3166-2:UG">Uganda</option>
                                    <option value="ISO 3166-2:UA">Ukraine</option>
                                    <option value="ISO 3166-2:AE">United Arab Emirates</option>
                                    <option value="ISO 3166-2:GB">United Kingdom</option>
                                    <option value="ISO 3166-2:US">United States</option>
                                    <option value="ISO 3166-2:UM">United States Minor Outlying Islands</option>
                                    <option value="ISO 3166-2:UY">Uruguay</option>
                                    <option value="ISO 3166-2:UZ">Uzbekistan</option>
                                    <option value="ISO 3166-2:VU">Vanuatu</option>
                                    <option value="ISO 3166-2:VE">Venezuela, Bolivarian Republic of</option>
                                    <option value="ISO 3166-2:VN">Viet Nam</option>
                                    <option value="ISO 3166-2:VG">Virgin Islands, British</option>
                                    <option value="ISO 3166-2:VI">Virgin Islands, U.S.</option>
                                    <option value="ISO 3166-2:WF">Wallis and Futuna</option>
                                    <option value="ISO 3166-2:EH">Western Sahara</option>
                                    <option value="ISO 3166-2:YE">Yemen</option>
                                    <option value="ISO 3166-2:ZM">Zambia</option>
                                    <option value="ISO 3166-2:ZW">Zimbabwe</option>
                                </select>
                                </div><br>
                                
                                <div style="text-align: left;">
                                 <!-- Password -->
                                <label>PASSWORD*</label>
                                <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" name="password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                                <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                   Your password must be at least 8 characters and contain uppercase, lowercase letters and numbers.
                                    </small>
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                                 
                                <div style="text-align: left;">
                                 <!-- Password -->
                                <label>CONFIRM PASSWORD*</label>
                                <input name="password_confirmation" type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                                </div><br>
                                
                                <div style="text-align: left;">
                                    <label>PHONE NUMBER*</label><br>
                                   <input type="tel" id="phone" name="phone" value="+234" "defaultRegisterPhonePassword" class="form-control">
                                   @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                                </div><br>
                                
                                  <!-- Terms of service -->
                                
                                    <p>By clicking
                                    <em>Sign up</em> you agree to our
                                    <a href="" target="_blank">terms of service</a></p>
                                      
                                     <!-- Sign up button -->
                                      <button class="btn  my-4 btn-block" type="submit" style="background-color: #00C851;">Sign Up</button><br>
                               

                               </form>
<!-- Default form register -->  
                        </div>
                    </div>
        </div><br><br>
    
    
    
            <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js"></script>
        <!-- Use as a Vanilla JS plugin -->
        <script src="{{ asset('build/js/intlTelInput.min.js') }}"></script>
        <script src="{{ asset('https://code.jquery.com/jquery-latest.min.js') }}"></script>
        <script src="{{ asset('js/utils.js') }}"></script>
        <script src="{{ asset('js/intlTelInput.js') }}"></script>
        <script src="{{ asset('js/style.js') }}"></script>
        
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.31.1/dist/sweetalert2.all.min.js"></script>
    @include('sweet::alert')
            
        
    
    </body>
</html>