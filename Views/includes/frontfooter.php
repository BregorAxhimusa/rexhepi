                    <?php
                    $item = null;
                    $value = null;
                    $profile = ProfileController::showProfile($item, $value);

                    foreach ($profile as $key => $value) {
                        $email = $value['email'];
                        $lokacioni = $value['lokacioni'];
                    }
                    ?>
                    <footer id="footer">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-lg-6 mt-4 text-center">
                                    <img src="https://img.icons8.com/dotty/80/000000/composing-mail.png" height="50px" />
                                    <div class="">
                                        <label for=""><?php echo $email; ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-4 text-center">
                                    <img src="https://img.icons8.com/carbon-copy/100/000000/worldwide-location.png" height="50px" />
                                    <div>
                                        <label for=""><?php echo $lokacioni; ?></label>
                                        <label for=""> </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    </body>
                    <script src="Views/assets/js/jquery.min.js"></script>
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script>
                    <script src="Views/assets/js/bootstrap.min.js"></script>
                    <script src="Views/assets/js/main.js"></script>
                    <script src="Views/assets/js/lightslider.js"></script>
                    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
                    <script src="Views/assets/js/gtranslate.js"></script>
                    <script>
                        $(document).ready(function() {
                            $("#gallery-slider").lightSlider({
                                loop: true,
                                controls: true,
                                keyPress: true
                            });
                            $('#image-gallery').lightSlider({
                                gallery: true,
                                item: 1,
                                thumbItem: 9,
                                slideMargin: 0,
                                speed: 500,
                                onSliderLoad: function() {
                                    $('#image-gallery').removeClass('cS-hidden');
                                }
                            });
                        });
                    </script>

                    </html>