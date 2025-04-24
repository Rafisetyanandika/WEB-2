<?php
    require_once __DIR__ . '/../models/User.php';

    use models\User;

    if (! isset($_GET['id'])) {
        header('Location: list-user.php');
        exit;
    }

    $user = User::find($_GET['id']);

    if (! $user) {
        header('Location: list-user.php');
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Praktikum 06</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../public/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include_once 'partials/navbar.php'?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include_once 'partials/sidebar.php'?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="list-user.php">User</a></li>
                            <li class="breadcrumb-item active">Detail User</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Detail User
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>First Name</th>
                                        <td><?php echo $user['firstname'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Last Name</th>
                                        <td><?php echo $user['lastname'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td><?php echo $user['gender'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Age</th>
                                        <td><?php echo $user['age'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Weight</th>
                                        <td><?php echo $user['weight'] ?></td>
                                    </tr>
                                </table>
                                <div class="mt-3">
                                    <a href="list-user.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
                                    <a href="edit-user.php?id=<?php echo $user['id'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                    <a href="delete-user.php?id=<?php echo $user['id'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include_once 'partials/footer.php'?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../public/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../public/js/datatables-simple-demo.js"></script>
    </body>
</html>
