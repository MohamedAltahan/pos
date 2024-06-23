<?php
if (empty($_POST)) {
    $envPath = realpath(__DIR__ . '/../../') . '/.env';
    if (file_exists($envPath)) {
        exit('Installation already done');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Check system requirements...</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br />
        <div class="jumbotron">

            <center>
                <h2>Check system requirements...</h2><br />
            </center>

            <?php
            $all_ok = true;

            // $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            // if (strpos($actual_link, 'install/index.php') !== false) {
            //     $install_link = str_replace('install/index.php', 'install-start', $actual_link);
            // } else {
            //     $install_link = str_replace('install/', 'install-start', $actual_link);
            // }

            //Check for php version
            $checks = [];
            $checks['php'] = PHP_MAJOR_VERSION >= 8 && PHP_MINOR_VERSION >= 2 ? true : false;
            $checks['php_version'] = PHP_VERSION;

            //Check for php extensions
            $checks['openssl'] = extension_loaded('openssl');
            $checks['pdo'] = extension_loaded('pdo');
            $checks['mbstring'] = extension_loaded('mbstring');
            $checks['tokenizer'] = extension_loaded('tokenizer');
            $checks['xml'] = extension_loaded('xml');
            $checks['curl'] = extension_loaded('curl');
            $checks['zip'] = extension_loaded('zip');
            $checks['gd'] = extension_loaded('gd');
            ?>

            <div>
                <table class="table">

                    <tr>
                        <td>PHP >= 8.1</td>
                        <td>
                            <?php
                            if ($checks['php']) {
                                echo "<i class='glyphicon glyphicon-ok text-success' aria-hidden='true'></i>";
                            } else {
                                echo "<i class='glyphicon glyphicon-remove text-danger' aria-hidden='true'></i>";
                                echo '<br/>Current PHP Version is: ' . $checks['php_version'] . '<br/>, Change it to required version';
                                $all_ok = false;
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>OpenSSL PHP Extension</td>
                        <td>
                            <?php
                            if ($checks['openssl']) {
                                echo "<i class='glyphicon glyphicon-ok text-success' aria-hidden='true'></i>";
                            } else {
                                echo "<i class='glyphicon glyphicon-remove text-danger' aria-hidden='true'></i>";
                                $all_ok = false;
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>PDO PHP Extension</td>
                        <td>
                            <?php
                            if ($checks['pdo']) {
                                echo "<i class='glyphicon glyphicon-ok text-success' aria-hidden='true'></i>";
                            } else {
                                echo "<i class='glyphicon glyphicon-remove text-danger' aria-hidden='true'></i>";
                                $all_ok = false;
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Mbstring PHP Extension</td>
                        <td>
                            <?php
                            if ($checks['mbstring']) {
                                echo "<i class='glyphicon glyphicon-ok text-success' aria-hidden='true'></i>";
                            } else {
                                echo "<i class='glyphicon glyphicon-remove text-danger' aria-hidden='true'></i>";
                                $all_ok = false;
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tokenizer PHP Extension</td>
                        <td>
                            <?php
                            if ($checks['tokenizer']) {
                                echo "<i class='glyphicon glyphicon-ok text-success' aria-hidden='true'></i>";
                            } else {
                                echo "<i class='glyphicon glyphicon-remove text-danger' aria-hidden='true'></i>";
                                $all_ok = false;
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>XML PHP Extension</td>
                        <td>
                            <?php
                            if ($checks['xml']) {
                                echo "<i class='glyphicon glyphicon-ok text-success' aria-hidden='true'></i>";
                            } else {
                                echo "<i class='glyphicon glyphicon-remove text-danger' aria-hidden='true'></i>";
                                $all_ok = false;
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>cURL PHP Extension</td>
                        <td>
                            <?php
                            if ($checks['curl']) {
                                echo "<i class='glyphicon glyphicon-ok text-success' aria-hidden='true'></i>";
                            } else {
                                echo "<i class='glyphicon glyphicon-remove text-danger' aria-hidden='true'></i>";
                                $all_ok = false;
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>zip PHP Extension</td>
                        <td>
                            <?php
                            if ($checks['zip']) {
                                echo "<i class='glyphicon glyphicon-ok text-success' aria-hidden='true'></i>";
                            } else {
                                echo "<i class='glyphicon glyphicon-remove text-danger' aria-hidden='true'></i>";
                                $all_ok = false;
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>gd PHP Extension</td>
                        <td>
                            <?php
                            if ($checks['gd']) {
                                echo "<i class='glyphicon glyphicon-ok text-success' aria-hidden='true'></i>";
                            } else {
                                echo "<i class='glyphicon glyphicon-remove text-danger' aria-hidden='true'></i>";
                                $all_ok = false;
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>

                    <tr>
                        <td class="col-md-6">
                            <?php
                            $storage_path = realpath(__DIR__ . '/../../storage');
                            $log_path = realpath(__DIR__ . '/../../storage/logs');
                            $framework = realpath(__DIR__ . '/../../storage/framework');
                            $is_writable = is_writable($storage_path) && is_writable($log_path) && is_writable($framework);
                            ?>
                            Storage Directory is writeable?
                        </td>
                        <td class="col-md-6">
                            <?php
                            if ($is_writable) {
                                echo "<i class='glyphicon glyphicon-ok text-success' aria-hidden='true'></i>";
                            } else {
                                echo "<i class='glyphicon glyphicon-remove text-danger' aria-hidden='true'></i>";
                                echo "<br/>Please provide writable(recursive) permission to <br/><i>$storage_path</i>";
                                if (!is_writable($storage_path)) {
                                    echo "<br/><i>$storage_path</i>";
                                }
                                if (!is_writable($log_path)) {
                                    echo "<br/><i>$log_path</i>";
                                }
                                if (!is_writable($framework)) {
                                    echo "<br/><i>$framework</i>";
                                }
                                $all_ok = false;
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Cache Directory is writeable?
                            <?php
                            $cache_path = realpath(__DIR__ . '/../../bootstrap/cache');
                            ?>
                        </td>
                        <td>
                            <?php
                            if (is_writable($cache_path)) {
                                echo "<i class='glyphicon glyphicon-ok text-success' aria-hidden='true'></i>";
                            } else {
                                echo "<i class='glyphicon glyphicon-remove text-danger' aria-hidden='true'></i>";
                                echo "<br/>Please provide writable permission to <br/><i>$cache_path</i>";
                                $all_ok = false;
                            }
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Uploads Directory is writeable?
                            <?php
                            $upload_path = realpath(__DIR__ . '/../uploads');
                            ?>
                        </td>
                        <td>
                            <?php
                            if (is_writable($upload_path)) {
                                echo "<i class='glyphicon glyphicon-ok text-success' aria-hidden='true'></i>";
                            } else {
                                echo "<i class='glyphicon glyphicon-remove text-danger' aria-hidden='true'></i>";
                                echo "<br/>Please provide writable(recursive) permission to <br/><i>$upload_path</i>";
                                $all_ok = false;
                            }
                            ?>
                        </td>
                    </tr>

                </table>

                <center>
                    <br /><br />
                    <p>
                        <?php
                        if ($all_ok) {
                            echo "<span class='text-success'>All setting looks correct. Go to <a href=$install_link>next step</a></span>";
                        } else {
                            echo "<span class='text-danger'>Some setting are incorrect. Correct it and then refresh this page</span>";
                        }

                        echo "<br/><small style='font-size:13px'><a href='https://ultimatefosters.com/docs/ultimatepos/getting-started/installing-ultimatepos/' target='_blank'>Installation Document</a></small>";
                        ?>
                    </p>
                </center>

                <div class="col-md-12">

                    <br />
                    <p class="text-center">
                        <a href="https://ultimatefosters.com/product/installation-update-service/?ref=install-step1" target="_blank" class="btn btn-default"><i class="fas fa-cogs"></i> Take Installation
                            Service</a>
                    </p>
                    <hr />
                </div>

            </div>
        </div>
</body>

</html>