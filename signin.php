<!-- Start: Page Banner -->
<section class="page-banner signin-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Sign-in</h2>
            <span class="underline center"></span>
            <!-- <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p> -->
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Signin</li>
            </ul>
        </div>
    </div>
</section>
<!-- End: Page Banner -->
<!-- Start: Cart Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="signin-main">
                <div class="container">
                    <div class="woocommerce">
                        <div class="woocommerce-login">
                            <div class="company-info signin-register">
                                <div class="col-md-12 col-md-offset-1 border-dark-left">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="company-detail bg-dark margin-left">
                                                <div class="signin-head">
                                                    <h2>Sign in</h2>
                                                    <span class="underline left"></span>
                                                </div>
                                                <form class="login" method="post" action="process.php">
                                                    <p class="form-row form-row-first input-required">
                                                        <label>
                                                            <span class="first-letter">Email</span>
                                                            <span class="second-letter">*</span>
                                                        </label>
                                                        <input type="email" id="username" name="email" class="input-text" style="color: #fff;" required>
                                                    </p>
                                                    <p class="form-row form-row-last input-required">
                                                        <label>
                                                            <span class="first-letter">Password</span>
                                                            <span class="second-letter">*</span>
                                                        </label>
                                                        <input type="password" id="password" name="password" class="input-text" minlength="8" style="color: #fff;" required>
                                                    </p>
                                                    <div class="clear"></div>
                                                    <div class="password-form-row">
                                                        <p class="form-row input-checkbox">
                                                            <input type="checkbox" id="rememberme" name="rememberme">
                                                            <label class="inline" for="rememberme">Remember me</label>
                                                        </p>
                                                        <p class="lost_password">
                                                            <a href="#">Lupa password? Silakan hubungi Admin</a>
                                                        </p>
                                                    </div>
                                                    <input type="submit" value="Login" name="login" class="button btn btn-default">
                                                    <div class="clear"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- End: Cart Section -->