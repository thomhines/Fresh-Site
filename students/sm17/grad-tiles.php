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
                            <svg class="sm17--block-svg" width="480" height="480" viewBox="0 0 480 480" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 3h474v474H3z" stroke="#000" stroke-width="4" fill="none"/>
                            </svg>
                            <h3>'. '<span class="sm17--firstname">'. $firstName .'</span>'.'<span class="sm17--lastname">'. $lastName . $thirdName .'</span>' .'</h3>
                        </div>
                    </a>
                </li>';
            }
        ?>
    </ul>
    <!--END PHOTO GRID-->
</div>
<!--end THUMBNAIL GRID-->
