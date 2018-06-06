<!--START THUMBNAIL GRID-->
<div class="thumbnailGrid clearfix">
    <!--START PHOTO GRID-->
    <ul class="photoGrid">
        <?php
            $files = glob('students/sm17/*', GLOB_ONLYDIR);

            foreach($files as $dir) {
                $dirname = basename($dir);
                $namefromdir = basename($dir);
                $nameArray = explode('_', $namefromdir);
                $firstName = ucwords($nameArray[0]);
                $lastName = ucwords($nameArray[1]);
                $thirdName = ' ' . ucwords($nameArray[2]);
                $photofile = 'students/sm17/'.$dirname.'/portraits/homepage.jpg';

                echo '<li class="studentBlock">
                    <img class="photo" src="'. $photofile .'" alt="'. 'A photo of '.$nameUppercase .'" />
                    <a href="grad.php?name='. $dirname .'">
                        <div>
                            <h3>'. $firstName .' '. $lastName . ' '. $thirdName .'</h3>
                        </div>
                    </a>
                </li>';
            }
        ?>
    </ul>
    <!--END PHOTO GRID-->
</div>
<!--end THUMBNAIL GRID-->
