<html>
<head>
</head>
<body>
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" id="create-report" href="/dashboard/create-report.php">
                        <span data-feather="file-plus"></span>
                        Create Report
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="overview" href="/dashboard/overview.php">
                        <span data-feather="pie-chart"></span>
                        Overview
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="active-reports" href="/dashboard/active-reports.php">
                        <span data-feather="map"></span>
                        Active Reports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="past-reports" href="/dashboard/">
                        <span data-feather="bar-chart-2"></span>
                        Past Reports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="layers"></span>
                        Integrations
                    </a>
                </li>
            </ul>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span><?php echo $_SESSION["CurrentUser_Username"];?></span>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link" id="my-reports" href="/dashboard/my-reports.php">
                        <span data-feather="file-text"></span>
                        My Reports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="my-account" href="/dashboard/my-account.php">
                        <span data-feather="user"></span>
                        My Account
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <script>
    // Function to set the selected link in the sidebar. This function should be called by every page that includes this sidebar. 
    function setActiveSidebarLink(activePageId) {
        document.getElementById(activePageId).className += " active";
    }
    </script>
</body>
</html>