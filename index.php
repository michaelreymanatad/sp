<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Program</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-mattBlackLight">
    <button class="navbar-toggler sideMenuToggler" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Survey Program</a>
</nav>
<div class="wrapper d-flex">
    <div class="sideMenu bg-mattBlackLight">
        <div class="sidebar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link px-2 sideMenuToggler">
                        <i class="material-icons icon">view_list</i>
                        <span class="text">Hide</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link px-2">
                        <i class="material-icons icon">dashboard</i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="content">
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 my-3">
                        <div class="card bg-mattBlackLight px-3 py-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col px-5">
                                        <i class="material-icons icon">library_books</i>
                                    </div>
                                    <div class="col">
                                        <h6 class="text-right">Evaluations</h6>
                                        <h3 class="text-left">1</h3>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="footer">
                                <a class="btn shadow-none" href="form.php" role="button">
                                    <i class="material-icons icon">person_add</i>
                                    <span class="text">Add Employee</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid tableContainer bg-mattBlackLight">
                    <header class="main-header">
                        <p class="text-center">Performance Evaluation</p>
                    </header>
                    <table id="dataTable" class="table table-sm table-borderless" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Trainee Name</th>
                                <th>Assigned Department</th>
                                <th>Training Date</th>
                                <th>Total Number of Hours</th>
                                <th>Name of Evaluator</th>
                                <th>Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>sample</td>
                                <td>sample</td>
                                <td>sample</td>
                                <td>sample</td>
                                <td>sample</td>
                                <td>sample</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
<script src="script.js"></script>
</body>
</html>