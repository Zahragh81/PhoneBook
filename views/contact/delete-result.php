<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="<?= asset_url() ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= asset_url() ?>css/all.min.css" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col m-5 p-5">
                <?php if ($deleted_count) : ?>
                    <span class="text-warning">Contact deleted successsfully</span>
                <?php else : ?>
                    <span class="text-danger">Contact not exists!</span>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col m-3 text-center">
                <div class="inner" style="width: 200px; height: 200px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:#fff;display:block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                        <g transform="rotate(0 50 50)">
                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(30 50 50)">
                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(60 50 50)">
                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(90 50 50)">
                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(120 50 50)">
                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(150 50 50)">
                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(180 50 50)">
                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(210 50 50)">
                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(240 50 50)">
                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(270 50 50)">
                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(300 50 50)">
                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(330 50 50)">
                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>
                            </rect>
                        </g>
                    </svg></div>
                Redirecting to Home ...
                <script>
                    setTimeout(function() {
                        location.href '<?= site_url() ?>'
                    }, 1000);
                </script>
            </div>
        </div>
    </div>
</body>

</html>