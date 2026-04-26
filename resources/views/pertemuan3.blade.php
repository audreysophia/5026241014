<html>

<head>
    <title>Countries by Population</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .body {
            background: #f4f6f9;
        }

        .navigation-bar {
            background: #1a3a5c !important;
        }

        .navigation-bar .brand-name {
            font-weight: bold;
            letter-spacing: 0.1em;
            color: #fff !important;
        }

        .table-header th {
            background: #1a3a5c;
            color: #fff;
            border: none;
            font-size: 0.85rem;
            letter-spacing: 0.04em;
        }

        .table-wrapper {
            margin-top: 24px;
        }

        .rank-column {
            text-align: center;
            width: 60px;
        }

        .page-footer {
            background: #1a3a5c;
            color: #aab4c0;
            font-size: 0.8rem;
            margin-top: 40px;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark navigation-bar">
        <a class="navbar-brand brand-name" href="#">World Population Data</a>
        <div class="collapse navbar-collapse" id="navigation-menu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link text-white" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Rankings</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">About</a></li>
            </ul>
        </div>
    </nav>

    <div class="container table-wrapper">

        <!-- tabel statistik -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover bg-white shadow-sm">
                <thead class="table-header">
                    <tr>
                        <th class="rank-column">No.</th>
                        <th>Location</th>
                        <th>Population</th>
                        <th>% of World</th>
                        <th>Date</th>
                        <th>Source</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="rank-column">1</td>
                        <td>Indonesia</td>
                        <td>281,603,800</td>
                        <td>3.5%</td>
                        <td>1 Jul 2024</td>
                        <td>National annual projection</td>
                    </tr>
                    <tr>
                        <td class="rank-column">2</td>
                        <td>Philippines</td>
                        <td>113,880,328</td>
                        <td>1.4%</td>
                        <td>1 Jul 2024</td>
                        <td>Official projection</td>
                    </tr>
                    <tr>
                        <td class="rank-column">3</td>
                        <td>Vietnam</td>
                        <td>98,506,193</td>
                        <td>1.2%</td>
                        <td>1 Apr 2019</td>
                        <td>2019 census result</td>
                    </tr>
                    <tr>
                        <td class="rank-column">4</td>
                        <td>Thailand</td>
                        <td>71,801,279</td>
                        <td>0.9%</td>
                        <td>31 Dec 2022</td>
                        <td>Official estimate</td>
                    </tr>
                    <tr>
                        <td class="rank-column">5</td>
                        <td>Myanmar</td>
                        <td>54,409,800</td>
                        <td>0.7%</td>
                        <td>1 Jul 2024</td>
                        <td>UN projection</td>
                    </tr>
                    <tr>
                        <td class="rank-column">6</td>
                        <td>Malaysia</td>
                        <td>33,573,874</td>
                        <td>0.4%</td>
                        <td>1 Jul 2024</td>
                        <td>Official projection</td>
                    </tr>
                    <tr>
                        <td class="rank-column">7</td>
                        <td>Cambodia</td>
                        <td>17,490,000</td>
                        <td>0.2%</td>
                        <td>1 Jul 2024</td>
                        <td>Official projection</td>
                    </tr>
                    <tr>
                        <td class="rank-column">8</td>
                        <td>Singapore</td>
                        <td>5,917,600</td>
                        <td>0.07%</td>
                        <td>Jun 2023</td>
                        <td>Official estimate</td>
                    </tr>
                    <tr>
                        <td class="rank-column">9</td>
                        <td>Timor Leste</td>
                        <td>1,360,596</td>
                        <td>0.02%</td>
                        <td>1 Jul 2024</td>
                        <td>UN projection</td>
                    </tr>
                    <tr>
                        <td class="rank-column">10</td>
                        <td>Brunei</td>
                        <td>452,524</td>
                        <td>0.006%</td>
                        <td>1 Jul 2024</td>
                        <td>UN projection</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- footer -->
    <footer class="page-footer">
        <div class="container">
            Source: <a href="https://simple.wikipedia.org/wiki/List_of_countries_and_dependencies_by_population"
                class="text-warning">Wikipedia · Simple English</a>
        </div>
    </footer>

</body>

</html>
