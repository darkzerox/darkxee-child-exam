<?php
/**
 * Template Name: Tester
 *
 * Template for displaying a blank page.
 *
 * @package dzx-child
 */


get_header();
?>
<div class="container">
    <?php
    while ( have_posts() ) : the_post(); 
        get_template_part( 'loop-templates/content', 'page' ); 
    endwhile; 
    ?> 

    

    <div class="row your-skill code">
        <div class="row full-width">
            <h3><span class="label label-default">Coding Skill </span></h3>
        </div>        
        <div class="col-lg-4 ">
            <label for="Html">Html</label>
            <div class="progress skill-html">                
                <div class="" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%">
                    2%
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <label for="Css">Css</label>
            <div class="progress skill-css">                
                <div class="" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%">
                    2%
                </div>
            </div>
        </div>

         <div class="col-lg-4">
            <label for="Javascript">Javascript</label>
            <div class="progress skill-js">
                
                <div class="" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%">
                    2%
                </div>
            </div>
        </div>

         <div class="col-lg-4">
            <label for="PHP">PHP</label>
            <div class="progress skill-php">
                
                <div class="" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%">
                    2%
                </div>
            </div>
        </div>
         <div class="col-lg-4">
            <label for="Mysql">Mysql</label>
            <div class="progress skill-mysql">
                
                <div class="" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%">
                    2%
                </div>
            </div>
        </div> 
    </div>

    <div class="row your-skill design">
         <div class="row full-width">
            <h3><span class="label label-default">Design Skill </span></h3>
        </div>        
        <div class="col-lg-4">
            <label for="Photoshop">Photoshop</label>
            <div class="progress skill-ps">                
                <div class="" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%">
                    2%
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <label for="Illustrator">Illustrator</label>
            <div class="progress skill-ai">                
                <div class="" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%">
                    2%
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <label for="Ux-Ui">Ux/Ui</label>
            <div class="progress skill-uxui">                
                <div class="" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%">
                    2%
                </div>
            </div>
        </div>      

    </div>


    <div class="row your-skill server">
         <div class="row full-width">
            <h3><span class="label label-default">Server Skill </span></h3>
        </div>        
        <div class="col-lg-4">
            <label for="Photoshop">Nginx</label>
            <div class="progress skill-nginx">                
                <div class="" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%">
                    2%
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <label for="Illustrator">Apache</label>
            <div class="progress skill-apache">                
                <div class="" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%">
                    2%
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <label for="Ux-Ui">Linux</label>
            <div class="progress skill-linux">                
                <div class="" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%">
                    2%
                </div>
            </div>
        </div>      

    </div>


</div>


<?php
get_footer();


?>