<section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">All JOJO</h2>
                    <h3 class="section-subheading text-muted">Tous les jojo dans l'ordre chronologique.</h3>
                </div>
                <ul class="timeline">

                <?php
                $li_classe="";
                
                    foreach ($allJojos as $jojo) {
                        echo "
                        <li ".$li_classe." >
                            <div class='timeline-image'><img class='rounded-circle img-fluid' src='".$jojo->get_image()."' alt='' /></div>
                            <div class='timeline-panel'>
                                <div class='timeline-heading'>
                                    <h4>".$jojo->get_name()."</h4>
                                    <h4 class='subheading'>".$jojo->get_chapitre()."</h4>
                                </div>
                                <div class='timeline-body'><p class='text-muted'>".$jojo->get_resume()."</p></div>
                            </div>
                        </li>
                            ";

                        if( $li_classe==" class='timeline-inverted'"){
                            $li_classe="";
                        }
                        else {
                            $li_classe=" class='timeline-inverted'";
                        }
                    }
                    ?>

                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                To
                                <br />
                                be
                                <br />
                                continued?
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
</section>