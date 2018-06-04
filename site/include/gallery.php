
<?php
    function excess($files) {
        $result = array();
        for ($i = 0; $i < count($files); $i++) {
            if ($files[$i] != "." && $files[$i] != "..") $result[] = $files[$i];
        }
        return $result;
    }
        $dir = "data\img";
        $files = scandir($dir);
        $files = excess($files);

        echo ("<div class='container'>        
            <h2 class='text-center title'>My works</h2>
            <p class='lead text-center'>
                Huge my works on <br>
                <a href='#'>Facebook</a>.
            </p><div class='row'>");
        for ($i=0; $i<count($files);$i++){
          echo("<div class='col-md-4'><div class='thumbnail'><img src=".$dir."/".$files[$i]."></div></div>");

    }

    echo ("</div>");
?>
