<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/auth_mods/session_mod.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/auth_mods/t3_database_connect.php';

$search = $_GET['q'];
if(empty($search))header("location: /home");
$title = "Search - ".$search;
$sel = 's';
function convert_file_size($size, $precision = 1) {
    if($size == 0)return "0 B";
    else{ 
        $base = log($size, 1024);
        $size_suffix = array('', 'KB', 'MB', 'GB', 'TB');   
        return round(pow(1024, $base - floor($base)), $precision) .' '. $size_suffix[floor($base)];
    }
}
?>

<?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/base_header.php'; ?>

        <?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/page-header.php'; ?>

        <div id="outer-frame"> 
            
            <?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/page-sidebar.php'; ?>

            <div id="page-content">
                
                <div id="component415" class="">
                    <div id="browse-box" class="browse-box list_view file-browse">

                        <?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/browse-header.php'; ?>



                        <div aria-readonly="true">

                            <ul class="c-column-header browse-file-list-header o-grid o-grid--no-gutter" id="sub-sort" style="display:inherit;">
                                <li aria-sort="ascending" class="c-column-header__header u-pad-vertical-xs o-grid__col o-grid__col--6-of-12">
                                    <button class="c-column-header__button u-trim-margin u-trim-padding u-font-strong" title="Sort in descending order" tabindex="0">
                                        <span>Name</span>
                                        <img class="sprite sprite_web s_web_arrow-up-gray c-column-header__sort-icon u-mar-left-xxs u-l-ib--m" src="/static/images/views/icon_spacer.gif" alt="">
                                    </button>
                                </li><li aria-sort="" class="c-column-header__header u-pad-vertical-xs o-grid__col o-grid__col--3-of-12" >
                                    <button class="c-column-header__button u-trim-margin u-trim-padding" title="Sort in ascending order" tabindex="0">
                                        <span>Modified</span>
                                    </button>
                                </li><li aria-sort="" class="c-column-header__header u-pad-vertical-xs o-grid__col o-grid__col--3-of-12">
                                    <button class="c-column-header__button u-trim-margin u-trim-padding" title="Swap column to Kind" tabindex="0">
                                        <span>Size - Extension</span>
                                    </button>
                                </li>
                            </ul>

                            <div class="files-list">
                                <ul class="is-sharedwith-column-visible browse-files o-list-ui">

                                    <?php
                                    require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/t3_library.php';
                                    $user_id = $_SESSION['T3_SESSION_ID'];
                                    $search_exploded = explode ( " ", $search );
                                    @$x = 0;
                                    foreach( $search_exploded as $search_each ) { $x++;
                                        $construct = "";
                                        if( $x == 1 ) $construct .="name LIKE '%$search_each%'";
                                        else $construct .="AND name LIKE '%$search_each%'";
                                    }
                                    $construct_s = "SELECT name,extension,size,created_at,location FROM files WHERE $construct AND user_id='$user_id'
                                        UNION ALL SELECT name,extension,size,created_at,location FROM photos WHERE $construct  AND user_id='$user_id' ORDER by created_at DESC
                                    ";
                                    $run = mysqli_query($connection, $construct_s);
                                    $foundnum = mysqli_num_rows($run);

                                    if($foundnum > 0){
                                        while($row = mysqli_fetch_assoc($run)){
                                            echo'<li class="browse-file-row o-grid o-grid--no-gutter">
                                                    <div class="browse-file-row__column o-grid__col o-grid__col--am column--filename u-ellip o-grid__col--6-of-12">
                                                        <div class="o-flag o-flag--middle">
                                                            <div class="o-flag__fix">
                                                                <img class="sprite sprite_web '.get_file_icon($row['extension']).' browse-file-row__accessory u-pad-right-xs" src="/static/images/views/icon_spacer.gif" alt="">
                                                            </div>
                                                            <div class="o-flag__flex">
                                                                <div class="browse-file-row__name-location">
                                                                    <a class="filename-link u-ellip browse-file-row__name" href="'.$row['location'].'">
                                                                        <span>'.$row['name'].'</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="browse-file-row__column o-grid__col o-grid__col--am u-ellip o-grid__col--3-of-12">
                                                        <span>'.date('j M Y, g:i A', $row['created_at']).'</span>
                                                    </div>
                                                    <div class="browse-file-row__column o-grid__col o-grid__col--am column--kind o-grid__col--3-of-12">
                                                        <span>'.convert_file_size($row['size']).'</span>
                                                    </div>
                                                </li>';
                                        }
                                    }
                                    else{
                                        echo'<h2 align="center" style="margin-top:10%;"><img src="/static/images/views/empty_states/search.png" align="center" width="35%"><br><br>There is no <b>'.$search.'</b>!</h2><p align="center">Update your search query!</p>';
                                    }

                                    ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
        
<?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/base_footer.php'; ?>