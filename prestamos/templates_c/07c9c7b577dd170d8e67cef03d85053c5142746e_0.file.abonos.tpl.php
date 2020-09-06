<?php
/* Smarty version 3.1.36, created on 2020-08-21 00:01:12
  from 'C:\xampp\htdocs\Rocket\abonos\templates\abonos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f3ef2a8e8d084_76329075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07c9c7b577dd170d8e67cef03d85053c5142746e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Rocket\\abonos\\templates\\abonos.tpl',
      1 => 1597960871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3ef2a8e8d084_76329075 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-12 col-xl-8">
        <div class="card card-body bg-white border-light shadow-sm mb-4">
            <h2 class="h5 mb-4">General information</h2>
            <form>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input class="form-control" id="first_name" type="text" placeholder="Enter your first name" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input class="form-control" id="last_name" type="text" placeholder="Also your last name" required>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="birthday">Birthday</label>
                            <input type="text" class="form-control flatpickr-input" id="birthday" data-toggle="date" placeholder="Select your birth date" required>
                            </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="custom-select" id="gender">
                                <option disabled="disabled" selected="selected">Select option</option>
                                <option value="1">Female</option>
                                <option value="2">Male</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" type="email" placeholder="name@company.com" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input class="form-control" id="phone" type="number" placeholder="+12-345 678 910" required>
                        </div>
                    </div>
                </div>
                <h2 class="h5 my-4">Adress</h2>
                <div class="row">
                    <div class="col-sm-9 mb-3">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input class="form-control" id="address" type="text" placeholder="Enter your home address" required>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="number">Number</label>
                            <input class="form-control" id="number" type="number" placeholder="No." required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input class="form-control" id="city" type="text" placeholder="City" required>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select class="form-control select2-hidden-accessible" id="country" data-toggle="select" title="Country" data-live-search="true" data-live-search-placeholder="Country" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">United States</option>
                                <option>Canada</option>
                                <option>Germany</option>
                                <option>Spain</option>
                                <option>Italy</option>
                                <option>UK</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="zip">ZIP</label>
                            <input class="form-control" id="zip" type="tel" placeholder="ZIP" required>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Save All</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-12 col-xl-4">
        <div class="row">
            <div class="col-12 col-sm-6 col-xl-12">
                <div class="card card-body bg-white border-light shadow-sm mb-4">
                    <h2 class="h5 mb-4">Select profile photo</h2>
                    <div class="d-xl-flex align-items-center">
                        <div>
                            <!-- Avatar -->
                            <div class="user-avatar xl-avatar mb-3">
                                <img class="rounded" src="/Rocket/lib/assets/img/team/profile-picture-3.jpg" alt="change avatar">
                            </div>
                        </div>
                        <div class="file-field">
                            <div class="d-flex justify-content-xl-center ml-xl-3">
                                <div class="d-flex">
                                    <span class="icon icon-md"><span class="fas fa-paperclip mr-3"></span></span> <input type="file">
                                    <div class="d-md-block text-left">
                                        <div class="font-weight-normal text-dark mb-1">Choose Image</div>
                                        <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                                    </div>
                                </div>
                            </div>
                            </div>                                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-12">
                <div class="card card-body bg-white border-light shadow-sm mb-4">
                    <h2 class="h5 mb-4">Select cover photo</h2>
                    <div class="d-xl-flex align-items-center">
                        <div>
                            <!-- Avatar -->
                            <div class="user-avatar xl-avatar mb-3">
                                <img class="rounded" src="/Rocket/lib/assets/img/carousel/image-2.jpg" alt="change avatar">
                            </div>
                        </div>
                        <div class="file-field">
                            <div class="d-flex justify-content-xl-center ml-xl-3">
                                <div class="d-flex">
                                    <span class="icon icon-md"><span class="fas fa-paperclip mr-3"></span></span> <input type="file">
                                    <div class="d-md-block text-left">
                                        <div class="font-weight-normal text-dark mb-1">Choose Image</div>
                                        <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                                    </div>
                                </div>
                            </div>
                            </div>                                        
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4 mb-xl-0">
                <div class="card card-body bg-white border-light">
                    <h2 class="h5 mb-4">Alerts & Notifications</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center justify-content-between px-0 border-bottom">
                            <div>
                                <h3 class="h6 mb-1">Company News</h3>
                                <p class="small pr-4">Get Rocket news, announcements, and product updates</p>
                            </div>
                            <div>
                                <div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" id="user-notification-1" checked="checked"> <label class="custom-control-label" for="user-notification-1"></label></div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between px-0 border-bottom">
                            <div>
                                <h3 class="h6 mb-1">Account Activity</h3>
                                <p class="small pr-4">Get important notifications about you or activity you've missed</p>
                            </div>
                            <div>
                                <div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" id="user-notification-2"> <label class="custom-control-label" for="user-notification-2"></label></div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                            <div>
                                <h3 class="h6 mb-1">Meetups Near You</h3>
                                <p class="small pr-4">Get an email when a Dribbble Meetup is posted close to my location</p>
                            </div>
                            <div>
                                <div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" id="user-notification-3" checked="checked"> <label class="custom-control-label" for="user-notification-3"></label></div>
                            </div>
                        </li>
                    </ul>
                    </div>
            </div>
        </div>
    </div>
</div><?php }
}
