  <!-- All Stand Grid-->
  <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">All Stands</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">


                <?php
                $li_classe="";
                
                    foreach ($allJojoStands as $stand) {
                        echo "
                        <div class='col-lg-4 col-sm-6 mb-4'>
                        <div class='portfolio-item'>
                            <a class='portfolio-link' data-toggle='modal' href='#".$stand->getModal_id()."'>
                                <div class='portfolio-hover'>
                                    <div class='portfolio-hover-content'><i class='fas fa-plus fa-3x'></i></div>
                                </div>";

                        if (gettype($stand->getImage_miniature()) == "string"){
                            echo "<img class='img-fluid' src=".$stand->getImage_miniature()." alt='' />";
                        }
                        else if (gettype($stand->getImage_miniature()) == "array"){

                            echo "<div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>
                            <div class='carousel-inner'>";
                            $index=0;
                            foreach ($stand->getImage_miniature() as $image) {
                                if ($index==0){
                                    echo" <div class='carousel-item active'>";
                                }
                                else {
                                    echo" <div class='carousel-item '>";
                                }
                               echo"
                                <img class='d-block w-100' src='".$image."' alt=''>
                              </div>";
                            $index++;
                                
                            }
                           
                            echo "</div>
                            <a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'>
                              <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                              <span class='sr-only'>Previous</span>
                            </a>
                            <a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'>
                              <span class='carousel-control-next-icon' aria-hidden='true'></span>
                              <span class='sr-only'>Next</span>
                            </a>
                          </div>";

                        }
                             echo "
                            </a>
                            <div class='portfolio-caption'>
                                <div class='portfolio-caption-heading'>".$stand->getName()."</div>
                                <div class='portfolio-caption-subheading text-muted'>Manieur: ".$stand->getManieur()."</div>
                            </div>
                        </div>
                    </div>
                            ";

                    }
                    ?>               
                        </div>
                    </div>
                 
                   
            </div>
        </section>