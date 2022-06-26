<div class="header-top">
    <div class="container">
        <div class="header-left">
            <p class="welcome-msg">Welcome to Riode store message or remove it!</p>
        </div>
        <div class="header-right">
            <div class="dropdown">
                <a href="#currency">USD</a>
                <ul class="dropdown-box">
                    <li><a href="#USD">USD</a></li>
                    <li><a href="#EUR">EUR</a></li>
                </ul>
            </div>
            <!-- End DropDown Menu -->
            <div class="dropdown ml-5">
                <a href="#language">ENG</a>
                <ul class="dropdown-box">
                    <li>
                        <a href="#USD">ENG</a>
                    </li>
                    <li>
                        <a href="#EUR">FRH</a>
                    </li>
                </ul>
            </div>
            <!-- End DropDown Menu -->
            <span class="divider"></span>
            <a href="contact-us.html" class="contact d-lg-show"><i class="d-icon-map"></i>Contact</a>
            <a href="#" class="help d-lg-show"><i class="d-icon-info"></i> Need Help</a>
            <a href="{{ route('admin.login') }}" class="help d-lg-show"><i class="d-icon-info"></i>Admin</a>
            <a href="#signin" class="login-toggle link-to-tab d-md-show"><i class="d-icon-user"></i>Sign
                in</a>
            <span class="delimiter">/</span>
            <a href="#register" class="register-toggle link-to-tab d-md-show ml-0">Register</a>

            <div class="dropdown login-dropdown off-canvas">
                <div class="canvas-overlay"></div>
                <!-- End Login Toggle -->
                <div class="dropdown-box scrollable">
                    <div class="login-popup">
                        <div class="form-box">
                            <div class="tab tab-nav-simple tab-nav-boxed form-tab">
                                <ul class="nav nav-tabs nav-fill align-items-center border-no justify-content-center mb-5"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active border-no lh-1 ls-normal"
                                            href="">Login</a>
                                    </li>
                                    <li class="delimiter">or</li>
                                    <li class="nav-item">
                                        <a class="nav-link border-no lh-1 ls-normal"
                                            href="">Register</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="signin">
                                        <form action="#">
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control" id="singin-email"
                                                    name="singin-email"
                                                    placeholder="Username or Email Address *" required="">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control"
                                                    id="singin-password" name="singin-password"
                                                    placeholder="Password *" required="">
                                            </div>
                                            <div class="form-footer">
                                                <div class="form-checkbox">
                                                    <input type="checkbox" class="custom-checkbox"
                                                        id="signin-remember" name="signin-remember">
                                                    <label class="form-control-label"
                                                        for="signin-remember">Remember
                                                        me</label>
                                                </div>
                                                <a href="#" class="lost-link">Lost your password?</a>
                                            </div>
                                            <button class="btn btn-dark btn-block btn-rounded"
                                                type="submit">Login</button>
                                        </form>
                                        <div class="form-choice text-center">
                                            <label class="ls-m">or Login With</label>
                                            <div class="social-links">
                                                <a href="#"
                                                    class="social-link social-google fab fa-google border-no"></a>
                                                <a href="#"
                                                    class="social-link social-facebook fab fa-facebook-f border-no"></a>
                                                <a href="#"
                                                    class="social-link social-twitter fab fa-twitter border-no"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register">
                                        <form action="#">
                                            <div class="form-group mb-3">
                                                <input type="email" class="form-control" id="register-email"
                                                    name="register-email" placeholder="Your Email Address *"
                                                    required="">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control"
                                                    id="register-password" name="register-password"
                                                    placeholder="Password *" required="">
                                            </div>
                                            <div class="form-footer">
                                                <div class="form-checkbox">
                                                    <input type="checkbox" class="custom-checkbox"
                                                        id="register-agree" name="register-agree"
                                                        required="">
                                                    <label class="form-control-label" for="register-agree">I
                                                        agree to the
                                                        privacy policy</label>
                                                </div>
                                            </div>
                                            <button class="btn btn-dark btn-block btn-rounded"
                                                type="submit">Register</button>
                                        </form>
                                        <div class="form-choice text-center">
                                            <label class="ls-m">or Register With</label>
                                            <div class="social-links">
                                                <a href="#"
                                                    class="social-link social-google fab fa-google border-no"></a>
                                                <a href="#"
                                                    class="social-link social-facebook fab fa-facebook-f border-no"></a>
                                                <a href="#"
                                                    class="social-link social-twitter fab fa-twitter border-no"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button title="Close (Esc)" type="button" class="mfp-close"><span>×</span></button>
                    </div>
                </div>
                <!-- End Dropdown Box -->
            </div>
            <!-- End of Login -->
        </div>
    </div>
</div>