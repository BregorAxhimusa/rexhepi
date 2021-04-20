<main>
    <div class="container">
        <div class="row login-row justify-content-center mt-4">
            <div class="col-12 col-sm-10 col-lg-8 col-xl-5 log-col">
                <div class="card log-box">
                    <div class=" mt-2 card-header bg-white text-center">
                        <h4 class="text-blue">Log In</h4>
                    </div>
                    <form action="" method="POST" class="form-section">
                        <div class="form-gutter">
                            <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                        <div class="card-footer buttons">
                            <nav class="nav nav-pills flex-sm-row text-center">
                                <button type="submit" name="submit" class=" btn flex-sm-fill nav-link bg-green col-12">Log In</button>
                            </nav>
                        </div>
                    </form>
                    <?php
                    $login = new ProfileController();
                    $login->profileLogin();
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>