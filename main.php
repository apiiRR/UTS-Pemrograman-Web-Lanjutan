<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 px-auto py-3">
                    <div class="border border-white bg-white rounded shadow">
                        <?php 
                            $page = $_REQUEST['page'];
                            if (!empty($page)) {
                                include_once $page.'.php';
                            } else {
                                include_once 'home.php';
                            }
                        ?>
                    </div>
                </div>